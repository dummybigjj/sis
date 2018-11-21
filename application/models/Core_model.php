<?php
class Core_model extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->model('crud');
	}

	/**
	 * get_core function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single core skills on success.
	 */
	public function get_core($return_type,$condition)
	{
		return $this->crud->getData('',$return_type,$condition,'tbl13');
	}

	/**
	 * get_core_skills function.
	 * 
	 * @access public
	 * @param char $return_type
	 * @param associative array $conditions
	 * @return associative array list or single core skills on success.
	 */
	public function get_core_skills($return_type,$condition)
	{
		$select  = '`core_rating`, `core_item`.`core_code`, `core_completed`, `grade`';
		$tbljoin = array('`core_item`'=>'`core`.`core_skill` = `core_item`.`core_item_id`');
		return $this->crud->getJoinData($select,$return_type,$condition,$tbljoin,'tbl12');
	}

}