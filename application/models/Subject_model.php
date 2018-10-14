<?php
class Subject_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * getSubjects function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single subject on success.
	 */
	public function getSubjects($return_type,$condition){
		$data = $this->crud->getData('',$return_type,$condition,'tbl7');
		return $this->getSubjectsCreator($data);
	}

	/**
	 * getRoomsCreator function.
	 * 
	 * @access private
	 * @param associative array $users
	 * @return associative array list or single subject on success.
	 */
	private function getSubjectsCreator($subject = array()){
		if(!empty($subject)){
			if(array_key_exists('subject_id', $subject)){
				$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$subject['created_by']),'tbl1');
				$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$subject['updated_by']),'tbl1');
				$subject['created_by'] = $created_by['u_full_name'];
				$subject['updated_by'] = $updated_by['u_full_name'];
			}else{
				for ($i=0; $i < count($subject); $i++) { 
					$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$subject[$i]['created_by']),'tbl1');
					$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$subject[$i]['updated_by']),'tbl1');
					$subject[$i]['created_by'] = $created_by['u_full_name'];
					$subject[$i]['updated_by'] = $updated_by['u_full_name'];
				}
			}
		}
		return $subject;
	}

}