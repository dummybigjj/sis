<?php
class Admin_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * getHistoryLogs function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @return associative array on success.
	 */
	public function getHistoryLogs($condition = array()){
		$select = '`tbl_id`, `activity`, `user_credential`.`u_full_name`, `user_credential`.`u_email_address`, `user_credential`.`designation`, `device_use`, `history_logs`.`device_name`, `history_logs`.`device_ip_address`, `history_logs`.`created`';
		$join   = array('`user_credential`'=>'`history_logs`.`created_by` = `user_credential`.`user_id`');
		return $this->crud->getJoinDataWithSort($select,'a',$condition,$join,'`history_logs`.`created','tbl4');
	}

	/**
	 * getHistoryLogsById function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @return associative array on success.
	 */
	public function getHistoryLogsById($condition = array()){
		$select = '`tbl_id`, `activity`, `user_credential`.`u_full_name`, `user_credential`.`u_email_address`, `user_credential`.`designation`, `device_use`, `history_logs`.`device_name`, `history_logs`.`device_ip_address`, `history_logs`.`created`';
		$join   = array('`user_credential`'=>'`history_logs`.`created_by` = `user_credential`.`user_id`');
		return $this->crud->getJoinDataWithSort($select,'s',$condition,$join,'`history_logs`.`created` ASC','tbl4');
	}

	/**
	 * getSecurityConfig function.
	 * 
	 * @access public
	 * @return associative array on success.
	 */
	public function getSecurityConfig(){
		$select = '`max_login_attempt`, `soft_lock`, `max_password_age`, `user_credential`.`u_full_name`, `user_credential`.`designation`, `security_config`.`modified`';
		$join   = array('`user_credential`'=>'`security_config`.`updated_by` = `user_credential`.`user_id`');
		return $this->crud->getJoinData($select,'s','',$join,'tbl3');
	}

	/**
	 * getStudentsBasicInfo function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @param char $return_type
	 * @return associative array on success.
	 */
	public function getStudentsBasicInfo($condition,$return_type){
		$select = '`student_subject`.`student_id`, `student`.`student_no`, `student`.`arabic_name`';
		$join   = array('`student`'=>'`student_subject`.`student_id` = `student`.`student_id`');
		$data   = $this->crud->getJoinDataWithSort($select,$return_type,$condition,$join,'`student`.`arabic_name` ASC','tbl9');
		return $this->removeDuplicateData($data,'student_id');
	}

	/**
	 * getStudentsBasicInfo function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @param mixed $unique_key
	 * @return associative array on success.
	 */
	public function removeDuplicateData($data = array(),$unique_key){
		$temp = '';
		$new_data = array();
		$ctr = 0;
		for ($i=0; $i < count($data); $i++) { 
			if($data[$i][$unique_key]!=$temp){
				$new_data[$ctr] = $data[$i];
				$ctr++;
			}
			$temp = $data[$i][$unique_key];
		}
		return $new_data;
	}

	/**
	 * getStudentDailyAttendanceRecord function.
	 * 
	 * @access public
	 * @param associative array $students
	 * @return associative array on success.
	 */
	public function getStudentDailyAttendanceRecord($students = array(), $range1, $range2, $batch_year_id){
		if(!empty($students)){
			$condition = array(
				'attendance_date >=' => $range1,
				'attendance_date <=' => $range2,
				'batch_year_id' => $batch_year_id
			);
			for ($i=0; $i < count($students); $i++) { 
				$condition['student_id'] = $students[$i]['student_id'];
				// GET ABSENCES
				$condition['attendance'] = 'A';
				$absences = $this->crud->getData('','c',$condition,'tbl12');
				$students[$i]['absences'] = $absences;
				// GET LATES
				$condition['attendance'] = 'L';
				$lates = $this->crud->getData('','c',$condition,'tbl12');
				$students[$i]['lates'] = $lates;
				// SET REMARKS
				if($absences > 0 && $absences <= 2){
					$students[$i]['remarks'] = 'W1';
				}else if($absences >= 3 && $absences <= 5){
					$students[$i]['remarks'] = 'W2';
				}else if($absences >= 6 && $absences <=13){
					$students[$i]['remarks'] = 'W3';
				}else if($absences > 13){
					$students[$i]['remarks'] = 'DN/For Removal';
				}else{
					$students[$i]['remarks'] = 'SA';
				}
			}
		}
		return $students;
	}

}