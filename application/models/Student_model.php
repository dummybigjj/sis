<?php
class Student_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
		$this->load->model('user_model');
	}

	/**
	 * getStudents function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single student on success.
	 */
	public function getStudents($return_type,$condition){
		return $this->crud->getDataWithSort('',$return_type,$condition,'arabic_name ASC','tbl2');
	}

	/**
	 * get_students function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @param string $order
	 * @param int $limit
	 * @param int $start
	 * @return associative array list or single student on success.
	 */
	public function get_students($condition = array(),$order,$limit,$start)
	{
		return $this->crud->get_paginated_data('',$condition,'',$order,array($limit,$start),'tbl2');
	}

	/**
	 * get_student_subject function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @param string $order
	 * @param char $return_type
	 * @return associative array list or single student subjects and schedules on success.
	 */
	public function get_student_subject($condition = array(),$order,$return_type)
	{
		$select = '`student_subject`.`tbl_id`, `student_subject`.`student_id`, `subject`.`subject_title`, `subject_code`, `time`, `room`.`room_name`, `day`, `student_subject`.`subject`, `student_subject`.`room`, `student_subject`.`created_by`, `student_subject`.`created`, `student_subject`.`updated_by`, `student_subject`.`modified`';
		$join = array(
			'`subject`'	=> '`student_subject`.`subject` = `subject`.`subject_id`',
			'`room`'	=> '`student_subject`.`room` = `room`.`room_id`'
		);
		return $this->crud->getJoinDataWithSort($select,$return_type,$condition,$join,$order,'tbl9');
	}

	/**
	 * delete_student function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @return boolean TRUE on success.
	 */
	public function delete_student($data = array())
	{
		if(!empty($data)){
			for ($i=0; $i < count($data); $i++) { 
				$this->crud->deleteData(array('student_id'=>$data[$i]),'tbl2');
			}
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * insert_update_student_eng_pro function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @param int $student_id
	 * @return boolean TRUE on success.
	 */
	public function insert_update_student_eng_pro($data = array(),$student_id)
	{
		if(!empty($data))
		{
			// check if student have already english proficiency skills
			$count = 0;
			$count = $this->crud->getData('','c',array('student_id'=>$student_id),'tbl8');
			if($count==0)
			{
				// insert student new english pro skills
				$this->crud->setData($data,array('student_id' => $student_id),'tbl8');
			}
			else
			{
				// update student english pro skills
            	$this->crud->updateData($data,array('student_id' => $student_id),'tbl8');
			}
		}
		return TRUE;
	}

	/**
	 * insertOrUpdateStudentCraft function.
	 * 
	 * @access public
	 * @param associative array $craft
	 * @param int $student_id
	 * @return boolean TRUE on success.
	 */
	public function insertOrUpdateStudentCraft($craft = array(),$student_id)
	{	
		if(!empty($craft))
		{
			for ($i=0; $i < count($craft['craft_skill']); $i++) 
			{ 
				$data = array(
					'craft_rating' => $craft['craft_rating'][$i],
					'craft_skill'  => $craft['craft_skill'][$i]
				);
				// ----------------------
				if(array_key_exists($i, $craft['craft_completed']) && !empty($craft['craft_completed'][$i]))
				{
					$data['craft_completed'] = $craft['craft_completed'][$i];
				}
				if(array_key_exists($i, $craft['grade']) && !empty($craft['grade'][$i]))
				{
					$data['grade'] = $craft['grade'][$i];
				}
				// ----------------------
				if(is_array($craft['craft_id']) && array_key_exists($i, $craft['craft_id']))
				{
					$data['updated_by'] = $this->session->userdata('u_id');
					$this->crud->updateData($data,array('craft_id'=>$craft['craft_id'][$i]),'tbl10');
				}else
				{
					$condition = array('craft_skill'=>$data['craft_skill'],'student_id'=>$student_id);
					$is_valid  = $this->crud->getData('','c',$condition,'tbl10');
					if($is_valid>0)
					{
						// do nothing
					}else
					{
						$fk = array('student_id'=>$student_id);
	                	$this->crud->setData($data,$fk,'tbl10');
					}
				}
			}
		}
		return TRUE;
	}

	/**
	 * insertOrUpdateStudentCore function.
	 * 
	 * @access public
	 * @param associative array $craft
	 * @param int $student_id
	 * @return boolean TRUE on success.
	 */
	public function insertOrUpdateStudentCore($core = array(),$student_id)
	{
		if(!empty($core))
		{
			for ($i=0; $i < count($core['core_skill']); $i++) 
			{ 
				$data = array(
					'core_rating' => $core['core_rating'][$i],
					'core_skill'  => $core['core_skill'][$i]
				);
				// ----------------
				if(array_key_exists($i, $core['core_completed']) && !empty($core['core_completed'][$i]))
				{
					$data['core_completed'] = $core['core_completed'][$i];
				}
				if(array_key_exists($i, $core['grade']) && !empty($core['grade'][$i]))
				{
					$data['grade'] = $core['grade'][$i];
				}
				// ----------------
				if(is_array($core['core_id']) && array_key_exists($i, $core['core_id']))
				{
					$data['updated_by'] = $this->session->userdata('u_id');
					$this->crud->updateData($data,array('core_id'=>$core['core_id'][$i]),'tbl12');
				}else
				{
					$condition = array('core_skill'=>$data['core_skill'],'student_id'=>$student_id);
					$is_valid  = $this->crud->getData('','c',$condition,'tbl12');
					if($is_valid>0)
					{
						// do nothing
					}else
					{
						$fk = array('student_id'=>$student_id);
	                	$this->crud->setData($data,$fk,'tbl12');
					}
				}
			}
		}
		return TRUE;
	}

	/**
	 * isValidUniqueKey function.
	 * 
	 * @access public
	 * @param associative array $condition
	 * @param mixed $tbl
	 * @return boolean TRUE on success.
	 */
	public function isValidUniqueKey($condition = array(),$tbl){
		$verify = $this->crud->getData('','c',$condition,$tbl);
		if($verify > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * isStudentNumberValid function.
	 * 
	 * @access public
	 * @param int $student_no
	 * @return boolean TRUE on success.
	 */
	public function isStudentNumberValid($student_no){
		$verify = $this->crud->getData('','c',array('student_no'=>$student_no),'tbl2');
		if($verify > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * isStudentEmailValid function.
	 * 
	 * @access public
	 * @param mixed $email
	 * @return boolean TRUE on success.
	 */
	public function isStudentEmailValid($email){
		$verify = $this->crud->getData('','c',array('email_address'=>$email),'tbl2');
		if($verify > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * isStudentNationalIdValid function.
	 * 
	 * @access public
	 * @param int $national_id
	 * @return boolean TRUE on success.
	 */
	public function isStudentNationalIdValid($national_id){
		$verify = $this->crud->getData('','c',array('national_id'=>$national_id),'tbl2');
		if($verify > 0){
			return FALSE;
		}
		return TRUE;
	}

	public function get_skills_not_taken($skills_taken, $skills_taken_u_key, $skills, $skills_u_key, $skills_pk)
	{
		$result = '';
		for ($i=0; $i < count($skills); $i++) { 
			$ct=0;
			for ($a=0; $a < count($skills_taken); $a++) { 
				if($skills[$i][$skills_u_key]==$skills_taken[$a][$skills_taken_u_key]){
					$ct++;
					break;
				}
			}
			if($ct==0){
				$result .= $skills[$i][$skills_pk].' ';
			}
		}
		return $result;
	}

	// /**
	//  * transformScheduleRange function.
	//  * 
	//  * @access private
	//  * @param mixed $time
	//  * @return mixed time range on success.
	//  */
	// public function transformScheduleRange($time){
	// 	$start_time = "";
	// 	$end_time	= "";
	// 	if($time<='12:00:00'){
	// 		$start_time = rtrim(rtrim($time,'0'),':').'AM';
	// 		if($time=='11:30:00'){
	// 			$end_time	= rtrim(rtrim(date('H:i:s', strtotime('+1 hour +30 minutes',strtotime($time))),'0'),':').'PM';
	// 		}else{
	// 			$end_time	= rtrim(rtrim(date('H:i:s', strtotime('+1 hour +30 minutes',strtotime($time))),'0'),':').'AM';
	// 		}
	// 	}else{
	// 		if($time=='12:30:00'){
	// 			$start_time = rtrim(rtrim($time,'0'),':').'PM';
	// 		}else{
	// 			$start_time = rtrim(rtrim(date('H:i:s', strtotime('-12 hours',strtotime($time))),'0'),':').'PM';
	// 		}
	// 		$end_time	= rtrim(rtrim(date('H:i:s', strtotime('-10 hours -30 minutes',strtotime($time))),'0'),':').'PM';
	// 	}
	// 	return $start_time." - ".$end_time;
	// }

}