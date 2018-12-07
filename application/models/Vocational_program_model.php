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
		return $this->crud->getData('',$return_type,$condition,'tbl16');
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
				$this->crud->deleteData(array('voc_id'=>$data[$i]),'tbl16');
			}
			return TRUE;
		}
		return FALSE;
	}

}