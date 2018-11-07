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
		$data = $this->crud->getDataWithSort('',$return_type,$condition,'arabic_name ASC','tbl2');
		return $this->getDiplomaAndVocationalCourse($data);
	}

	/**
	 * getDiplomaAndVocationalCourse function.
	 * 
	 * @access private
	 * @param associative array $students
	 * @return associative array list or single student on success.
	 */
	private function getDiplomaAndVocationalCourse($students = array()){
		if(!empty($students)){
			if(array_key_exists('student_id', $students)){
				$voc_program 	= $this->crud->getData('voc_program,voc_program_acronym','s',array('voc_program_id'=>$students['vocational_course']),'tbl6');
				$diploma_course = $this->crud->getData('course_name,course_acronym','s',array('course_id'=>$students['diploma_course']),'tbl11');
				$students['voc_program'] = $voc_program['voc_program'];
				$students['voc_program_acronym'] = $voc_program['voc_program_acronym'];
				$students['diploma_course_name'] = $diploma_course['course_name'];
				$students['diploma_course_acronym'] = $diploma_course['course_acronym'];
			}else{
				for ($i=0; $i < count($students); $i++) { 
					$voc_program 	= $this->crud->getData('voc_program,voc_program_acronym','s',array('voc_program_id'=>$students[$i]['vocational_course']),'tbl6');
					$diploma_course = $this->crud->getData('course_name,course_acronym','s',array('course_id'=>$students[$i]['diploma_course']),'tbl11');
					$students[$i]['voc_program'] = $voc_program['voc_program'];
					$students[$i]['voc_program_acronym'] = $voc_program['voc_program_acronym'];
					$students[$i]['diploma_course_name'] = $diploma_course['course_name'];
					$students[$i]['diploma_course_acronym'] = $diploma_course['course_acronym'];
				}
			}
		}
		return $students;
	}

	/**
	 * getStudentSubjects function.
	 * 
	 * @access private
	 * @param mixed $current_batch_year
	 * @return associative array list of enrolled student on success.
	 */
	public function getStudentSubjects($condition,$return_type){
		$select = '`tbl_id`, `subject`.`subject_title`, `time`, `room`.`room_name`, `day`, `student_subject`.`subject`, `student_subject`.`room`, `student_subject`.`created_by`, `student_subject`.`created`, `student_subject`.`updated_by`, `student_subject`.`modified`';
		$join = array(
			'`subject`'	=> '`student_subject`.`subject` = `subject`.`subject_id`',
			'`room`'	=> '`student_subject`.`room` = `room`.`room_id`'
		);
		return $this->crud->getJoinDataWithSort($select,$return_type,$condition,$join,'`subject`.`subject_title` ASC','tbl9');
	}

	/**
	 * insertOrUpdateStudentSubjects function.
	 * 
	 * @access public
	 * @param associative array $subjects
	 * @param associative array $student
	 * @param int $student_id
	 * @return boolean TRUE on success.
	 */
	public function insertOrUpdateStudentSubjects($subjects = array(),$student = array(),$student_id){
		for ($i=0; $i < count($subjects['subject']); $i++) { 
            $subjects_schedules = array(
                'subject'   => $subjects['subject'][$i],
                'day'       => $subjects['day'][$i],
                'time'      => $subjects['time'][$i],
                'room'      => $subjects['room'][$i]
            );
            if(array_key_exists($i, $subjects['tbl_id'])){
                $subjects_schedules['updated_by'] = $this->session->userdata('u_fullname');
                $this->crud->updateData($subjects_schedules,array('tbl_id'=>$subjects['tbl_id'][$i]),'tbl9');
                // record updating of subjects in history logs
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Updated subjects for '.$student['student_no'],$this->session->userdata('u_id'));
            }else{
                $foreign_values = array('student_id'=>$student_id,'created_by'=>$this->session->userdata('u_fullname'));
                $this->crud->setData($subjects_schedules,$foreign_values,'tbl9');
                // record registration of students subjects and schedules in history logs
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created subjects for '.$student['student_no'],$this->session->userdata('u_id'));
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
		for ($i=0; $i < count($craft['craft_skill']); $i++) 
		{ 
			$data = array(
				'craft_rating' 	 => $craft['craft_rating'][$i],
				'craft_skill'  	 => $craft['craft_skill'][$i]
			);
			if(array_key_exists($i, $craft['craft_completed']) && !empty($craft['craft_completed'][$i]))
			{
				$data['craft_completed'] = $craft['craft_completed'][$i];
			}
			if(array_key_exists($i, $craft['craft_id']))
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
		for ($i=0; $i < count($core['core_skill']); $i++) 
		{ 
			$data = array(
				'core_rating' 	=> $core['core_rating'][$i],
				'core_skill'  	=> $core['core_skill'][$i]
			);
			if(array_key_exists($i, $core['core_completed']) && !empty($core['core_completed'][$i]))
			{
				$data['core_completed'] = $core['core_completed'][$i];
			}
			if(array_key_exists($i, $core['core_id']))
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

	/**
	 * get_skills_not_taken function.
	 * 
	 * @access public
	 * @param associative array $skills
	 * @return array skills not yet taken on success.
	 */
	public function get_skills_not_taken($skills = array(),$unique_key)
	{		
		$skills_taken = $this->get_skills_taken($skills,$unique_key);
		$to_be_taken = array();
		$result = '';
		for ($i=1; $i <= 9; $i++) { 
			$ct = 0;
			for ($a=0; $a < count($skills_taken); $a++) { 
				if($skills_taken[$a]==$i){
					$ct++;
				}
			}
			if($ct==0)$to_be_taken[]=$i;
		}
		for ($i=0; $i < count($to_be_taken); $i++) { 
			$result .= $to_be_taken[$i].' ';
		}
		return $result;
	}

	/**
	 * get_skills_taken function.
	 * 
	 * @access private
	 * @param associative array $skills
	 * @return array skills taken on success.
	 */
	private function get_skills_taken($skills = array(),$unique_key)
	{
		$temp = '';
		for ($i=0; $i < count($skills); $i++) { 
			if(!empty($temp) && $skills[$i][$unique_key]!=$temp){
				$skills_taken[] = $skills[$i][$unique_key];
			}else{
				$skills_taken[] = $skills[$i][$unique_key];
			}
			$temp = $skills[$i][$unique_key];
		}
		return $skills_taken;
	}

	/**
	 * transformScheduleRange function.
	 * 
	 * @access private
	 * @param mixed $time
	 * @return mixed time range on success.
	 */
	public function transformScheduleRange($time){
		$start_time = "";
		$end_time	= "";
		if($time<='12:00:00'){
			$start_time = rtrim(rtrim($time,'0'),':').'AM';
			if($time=='11:30:00'){
				$end_time	= rtrim(rtrim(date('H:i:s', strtotime('+1 hour +30 minutes',strtotime($time))),'0'),':').'PM';
			}else{
				$end_time	= rtrim(rtrim(date('H:i:s', strtotime('+1 hour +30 minutes',strtotime($time))),'0'),':').'AM';
			}
		}else{
			if($time=='12:30:00'){
				$start_time = rtrim(rtrim($time,'0'),':').'PM';
			}else{
				$start_time = rtrim(rtrim(date('H:i:s', strtotime('-12 hours',strtotime($time))),'0'),':').'PM';
			}
			$end_time	= rtrim(rtrim(date('H:i:s', strtotime('-10 hours -30 minutes',strtotime($time))),'0'),':').'PM';
		}
		return $start_time." - ".$end_time;
	}

}