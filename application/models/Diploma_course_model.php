<?php
class Diploma_course_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * getDiplomaCourses function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single diploma course on success.
	 */
	public function getDiplomaCourses($return_type,$condition){
		$data = $this->crud->getData('',$return_type,$condition,'tbl11');
		return $this->getDiplomaCourseCreator($data);
	}

	/**
	 * getRoomsCreator function.
	 * 
	 * @access private
	 * @param associative array $users
	 * @return associative array list or single vocational program on success.
	 */
	private function getDiplomaCourseCreator($diploma_courses = array()){
		if(!empty($diploma_courses)){
			if(array_key_exists('course_id', $diploma_courses)){
				$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$diploma_courses['created_by']),'tbl1');
				$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$diploma_courses['updated_by']),'tbl1');
				$diploma_courses['created_by'] = $created_by['u_full_name'];
				$diploma_courses['updated_by'] = $updated_by['u_full_name'];
			}else{
				for ($i=0; $i < count($diploma_courses); $i++) { 
					$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$diploma_courses[$i]['created_by']),'tbl1');
					$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$diploma_courses[$i]['updated_by']),'tbl1');
					$diploma_courses[$i]['created_by'] = $created_by['u_full_name'];
					$diploma_courses[$i]['updated_by'] = $updated_by['u_full_name'];
				}
			}
		}
		return $diploma_courses;
	}

}
