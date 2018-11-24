<?php
class Vocational_program_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * get_vocational_programs function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single vocational program on success.
	 */
	public function get_vocational_program($return_type,$condition)
	{
		return $this->crud->getData('',$return_type,$condition,'tbl6');
	}

	/**
	 * delete_vocational_program function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @return boolean TRUE on success.
	 */
	public function delete_vocational_program($data = array())
	{
		if(!empty($data)){
			for ($i=0; $i < count($data); $i++) { 
				$this->crud->deleteData(array('voc_program_id'=>$data['voc_program_id'][$i]),'tbl6');
			}
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * getVocationalPrograms function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single vocational program on success.
	 */
	public function getVocationalPrograms($return_type,$condition){
		$data = $this->crud->getData('',$return_type,$condition,'tbl6');
		return $this->getVocationalProgramCreator($data);
	}

	/**
	 * getVocationalProgramCreator function.
	 * 
	 * @access private
	 * @param associative array $voc_program
	 * @return associative array list or single vocational program on success.
	 */
	private function getVocationalProgramCreator($voc_program = array()){
		if(!empty($voc_program)){
			if(array_key_exists('voc_program_id', $voc_program)){
				$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$voc_program['created_by']),'tbl1');
				$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$voc_program['updated_by']),'tbl1');
				$voc_program['created_by'] = $created_by['u_full_name'];
				$voc_program['updated_by'] = $updated_by['u_full_name'];
			}else{
				for ($i=0; $i < count($voc_program); $i++) { 
					$created_by = $this->crud->getData('u_full_name','s',array('user_id'=>$voc_program[$i]['created_by']),'tbl1');
					$updated_by = $this->crud->getData('u_full_name','s',array('user_id'=>$voc_program[$i]['updated_by']),'tbl1');
					$voc_program[$i]['created_by'] = $created_by['u_full_name'];
					$voc_program[$i]['updated_by'] = $updated_by['u_full_name'];
				}
			}
		}
		return $voc_program;
	}

}