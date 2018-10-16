<?php
class User_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * resolveUserLoginCredentials function.
	 * 
	 * @access public
	 * @param mixed $email
	 * @param mixed $password
	 * @return boolean|string TRUE on success.
	 */
	public function resolveUserLoginCredentials($email,$password){
		$config = $this->crud->getData('','s','','tbl3');
		$user   = $this->getUsers('s',array('u_email_address'=>$email,'status'=>'1'));
		if(!empty($user)){
			$verfiy_password = $this->verifyPasswordHash($password,$user['u_password']);
			if($verfiy_password===TRUE){
				if((!empty($user['locked_time']) && $user['locked_time'] < date('H:i:s')) && ($user['login_attempt'] >= $config['max_login_attempt'])){
					$this->crud->updateData(array('locked_time'=>NULL,'login_attempt'=>NULL,'recent_login'=>date('Y-m-d H:i:s'),'device_name'=>gethostname(),'device_ip_address'=>$_SERVER['REMOTE_ADDR']),array('user_id'=>$user['user_id']),'tbl1');
					$this->setSessionUserdata($user);
					return TRUE;
				}
				$this->crud->updateData(array('login_attempt'=>NULL,'recent_login'=>date('Y-m-d H:i:s'),'device_name'=>gethostname(),'device_ip_address'=>$_SERVER['REMOTE_ADDR']),array('user_id'=>$user['user_id']),'tbl1');
				$this->setSessionUserdata($user);
				return TRUE;
			}else{
				// Count login attempt
				$attempt = $this->countLoginAttempt($user['user_id'],$user['login_attempt']);
				if($attempt>=$config['max_login_attempt']){
					$this->lockUser($user['user_id'],$config['soft_lock']);
					return 'Max login attempt has been reached!. Your account will be temporarily locked for '.$config['soft_lock'].' seconds';
				}
				return 'Invalid password!. You have '.($config['max_login_attempt'] - $attempt).' login attempt left';
			}
		}else{
			return 'Invalid both email and password';
		}
	}

	/**
	 * setSessionUserdata function.
	 * 
	 * @access private
	 * @param associative array $user
	 * @return boolean TRUE on success
	 */
	private function setSessionUserdata($user = array()){
		$user_data = array(
			'isLoggedIn' 		=> TRUE,
			'u_id'		 		=> $user['user_id'],
			'u_fullname'		=> $user['u_full_name'],
			'u_email'			=> $user['u_email_address'],
			'profile_pic'		=> $user['profile_pic'],
			'u_login_attempt'	=> $user['login_attempt'],
			'pass_reset_date' 	=> $user['password_reset_date'],
			'u_designation'		=> $user['designation'],
			'recent_login'		=> $user['recent_login'],
			'device_name'		=> $user['device_name'],
			'device_ip_address'	=> $user['device_ip_address']
		);
		if($this->session->set_userdata($user_data)){
			return TRUE;	
		}
		return FALSE;
	}

	/**
	 * countLoginAttempt function.
	 * 
	 * @access private
	 * @param mixed $new_password
	 * @return boolean total login attempt
	 */
	public function changeUserPassword($new_password){
		$new_password = $this->hashPassword($new_password);
       	$reset_date   = $this->generatePasswordResetDate();
        $change_pass  = $this->crud->updateData(array('u_password'=>$new_password,'password_reset_date'=>$reset_date),array('user_id'=>$this->session->userdata('u_id')),'tbl1');
        if($change_pass){
        	return TRUE;
        }
        return FALSE;
	}

	/**
	 * countLoginAttempt function.
	 * 
	 * @access private
	 * @param int $user_id
	 * @param int $attempt
	 * @return int total login attempt
	 */
	private function countLoginAttempt($user_id,$attempt){
		$total_attempt = $attempt + 1;
		$this->crud->updateData(array('login_attempt'=>$total_attempt),array('user_id'=>$user_id),'tbl1');
		return $total_attempt;
	}

	/**
	 * lockUser function.
	 * 
	 * @access private
	 * @param int $user_id
	 * @param int $soft_lock_time
	 * @return void.
	 */
	private function lockUser($user_id,$soft_lock_time){
		$locked_time = $this->setLockOutTime($soft_lock_time);
		$locked = $this->crud->updateData(array('locked_time' => $locked_time),array('user_id' => $user_id),'tbl1');
		if($locked){
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * setLockOutTime function.
	 * 
	 * @access private
	 * @param int $soft_lock_time
	 * @return time the summation of soft_lock and the current time.
	 */
	private function setLockOutTime($soft_lock_time){
		$current_time = date('H:i:s');
		return date('H:i:s', strtotime('+'.$soft_lock_time.' seconds',strtotime($current_time)));
	}

	/**
	 * verifyPasswordHash function.
	 * 
	 * @access private
	 * @param mixed $password
	 * @param mixed $hash
	 * @return boolean true on success.
	 */
	private function verifyPasswordHash($password,$hash){
		return password_verify($password, $hash);
	}

	/**
	 * getUsers function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single user on success.
	 */
	public function getUsers($return_type,$conditons = array()){
		$data = $this->crud->getData('',$return_type,$conditons,'tbl1');
		return $this->getUsersCreator($data);
	}

	/**
	 * getUsersCreator function.
	 * 
	 * @access private
	 * @param associative array $users
	 * @return associative array list or single user on success.
	 */
	private function getUsersCreator($users = array()){
		if(!empty($users)){
			if(array_key_exists('user_id', $users)){
				$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$users['created_by']),'tbl1');
				$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$users['updated_by']),'tbl1');
				$users['created_by'] = $created_by['u_full_name'];
				$users['updated_by'] = $updated_by['u_full_name'];
			}else{
				for ($i=0; $i < count($users); $i++) { 
					$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$users[$i]['created_by']),'tbl1');
					$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$users[$i]['updated_by']),'tbl1');
					$users[$i]['created_by'] = $created_by['u_full_name'];
					$users[$i]['updated_by'] = $updated_by['u_full_name'];
				}
			}
		}
		return $users;
	}

	/**
	 * validateEmailExistence function.
	 * 
	 * @access private
	 * @param mixed $email
	 * @return boolean TRUE on success.
	 */
	public function isEmailValid($email,$user_id){
		$get_email = $this->crud->getData('u_email_address','s',array('u_email_address'=>$email,'user_id !='=>$user_id),'tbl1');
		if(!empty($get_email)){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * recordLogs function.
	 * 
	 * @access public
	 * @param mixed $activity
	 * @param int $user_id
	 * @return boolean true on success.
	 */
	public function recordLogs($activity,$user_id){
		$device = $this->isMobileDevice();
		$data = array(
			'activity' 	 		=> $activity,
			'created_by' 		=> $user_id,
			'device_use' 		=> $device,
			'device_name'		=> gethostname(),
			'device_ip_address'	=> $_SERVER['REMOTE_ADDR']
		);
		$insert = $this->crud->setData($data,'','tbl4');
		if($insert){
			$result = TRUE;
		}else{
			$result = FALSE;
		}
		return $result;
	}

	/**
	 * generatePasswordResetDate function.
	 * 
	 * @access public
	 * @return datetime the summation of current date and the added days.
	 */
	public function generatePasswordResetDate(){
		$password_age = $this->crud->getData('max_password_age','s','','tbl3');
		$current_datetime = date('Y-m-d H:i:s');
		return date('Y-m-d H:i:s',strtotime($current_datetime.' +'.$password_age['max_password_age'].' days'));
	}

	/**
	 * hashUsersPassword function.
	 * 
	 * @access public
	 * @param array $passwords
	 * @return array hashed passwords.
	 */
	public function hashUsersPassword($passwords = array()){
		$new_passwords = array();
		for ($i=0; $i < count($passwords); $i++) { 
			$new_passwords[$i] = $this->hashPassword($passwords[$i]);
		}
		return $new_passwords;
	}

	/**
	 * hashPassword function.
	 * 
	 * @access public
	 * @param mixed $password
	 * @return hashed password.
	 */
	public function hashPassword($password){
		return password_hash($password, PASSWORD_BCRYPT);
	}

	/**
	 * isMobileDevice function.
	 * 
	 * @access public
	 * @return boolean true on success.
	 */
	public function isMobileDevice(){
	    $aMobileUA = array(
	        '/iphone/i' => 'iPhone', 
	        '/ipod/i' => 'iPod', 
	        '/ipad/i' => 'iPad', 
	        '/android/i' => 'Android', 
	        '/blackberry/i' => 'BlackBerry', 
	        '/webos/i' => 'Mobile'
	    );
	    //Return true if Mobile User Agent is detected
	    foreach($aMobileUA as $sMobileKey => $sMobileOS){
	        if(preg_match($sMobileKey, $_SERVER['HTTP_USER_AGENT'])){
	            return 'Mobile Device';
	        }
	    }
	    //Otherwise return false..  
	    return 'Desktop/Workstation';
	}

}