<?php
class Craft_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * get_craft function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single craft on success.
	 */
	public function get_craft($return_type,$condition)
	{
		return $this->crud->getData('',$return_type,$condition,'tbl14');
	}

	/**
	 * get_craft_skills function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single craft on success.
	 */
	public function get_craft_skills($return_type,$condition)
	{
		$select  = '`craft_rating`, `craft_item`.`craft_code`, `craft_item`.`description`, `craft_completed`, `grade`';
		$tbljoin = array('`craft_item`'=>'`craft`.`craft_skill` = `craft_item`.`craft_item_id`');
		return $this->crud->getJoinData($select,$return_type,$condition,$tbljoin,'tbl10');
	}

	/**
	 * delete_craft function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @return boolean TRUE on success.
	 */
	public function delete_craft($data = array())
	{
		if(!empty($data)){
			for ($i=0; $i < count($data); $i++) { 
				$this->crud->deleteData(array('craft_item_id'=>$data['craft_item_id'][$i]),'tbl14');
			}
			return TRUE;
		}
		return FALSE;
	}

}