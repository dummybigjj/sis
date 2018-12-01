<?php
class Company_model extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->model('crud');
    }

    /**
     * get_company function.
     * 
     * @access public
     * @param char $return_type
     * @param associative array $conditions
     * @return associative array list or single company on success.
     */
    public function get_company($return_type,$condition)
    {
        return $this->crud->getData('',$return_type,$condition,'tbl15');
    }

    /**
     * delete_company function.
     * 
     * @access public
     * @param associative array $data
     * @return boolean TRUE on success.
     */
    public function delete_company($data = array())
    {
        if(!empty($data)){
            for ($i=0; $i < count($data); $i++) { 
                $this->crud->deleteData(array('company_id'=>$data[$i]),'tbl15');
            }
            return TRUE;
        }
        return FALSE;
    }

}