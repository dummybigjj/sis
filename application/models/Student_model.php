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

	//------------------------------------------ Below is functions are deprecated ------------------------------------------//

	/**
	 * processStundentSchedule function.
	 * 
	 * @access private
	 * @param mixed $current_batch_year
	 * @return boolean TRUE on success.
	 */
	public function processStundentSchedule($schedule = array()){
		$condition = array(
			'room_id'		=>$schedule['room_id'],
			'day'			=>$schedule['day'],
			'time'			=>$schedule['time'],
			'batch_year_id' =>$schedule['batch_year_id']
		);
		if($this->isScheduleValid($condition)==TRUE){
			$this->crud->setData($schedule,'','tbl10');
			$this->user_model->recordLogs('New Schedule has been created',$this->session->userdata('u_id'));
			return TRUE;
		}else{
			// Expected result is FALSE
			if($this->isScheduleValid($schedule)==FALSE){
				return TRUE;
			}
		}
		return FALSE;
	}

	/**
	 * isScheduleValid function.
	 * 
	 * @access private
	 * @param mixed $current_batch_year
	 * @return boolean TRUE on valid.
	 */
	private function isScheduleValid($condition = array()){
		if($this->crud->getData('','c',$condition,'tbl10') > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * isSubjectValid function.
	 * 
	 * @access private
	 * @param mixed $subejct
	 * @return boolean TRUE on valid.
	 */
	public function isSubjectValid($subject = array()){
		$condition = array(
			'student_id'	=> $subject['student_id'],
			'subject' 		=> $subject['subject'],
			'subject_code'	=> $subject['subject_code'],
			'batch_year'	=> $subject['batch_year']
		);
		$valid = $this->crud->getData('','c',$condition,'tbl9');
		if($valid > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * validateStudentsSubject function.
	 * validate student subjects
	 * 
	 * @access public
	 * @param array $students
	 * @param associative array $subjects
	 * @return array list of valid students.
	 */
	public function validateStudentsSubject($students = array(),$subjects = array()){
		$new_students = array();
		$ctr = 0;
		$con = array(
			'subject' 		=> $subjects['subject'],
			'subject_code'	=> $subjects['subject_code'],
			'batch_year'	=> $subjects['batch_year']
		);
		for ($i=0; $i < count($students); $i++) { 
			$con['student_id'] = $students[$i];
			$count = $this->crud->getData('','c',$con,'tbl9');
			if($count > 0){
				
			}else{
				$new_students[$ctr] = $students[$i];
				$ctr++;
			}
		}



		return $new_students;
	}

}