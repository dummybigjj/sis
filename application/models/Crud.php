<?php
class Cruds extends CI_Model {

    public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->init_tbl = array(
			'tbl1' => 'user_credential',
			'tbl2' => 'student',
			'tbl3' => 'security_config',
			'tbl4' => 'history_logs',
			'tbl5' => 'room',
			'tbl6' => 'vocational_program',
			'tbl7' => 'subject',
			'tbl8' => 'english_proficiency',
			'tbl9' => 'student_subject',
			'tbl10'=> 'craft',
			'tbl11'=> 'diploma_course',
			'tbl12'=> 'core',
			'tbl13'=> 'core_item',
			'tbl14'=> 'craft_item'
		);
		$this->init_returnType = array(
			'c' => 'count',
			's' => 'single',
			'a' => 'all'
		);
	}

	/**
	 * setData function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @param associative array $fk (optional)
	 * @param mixed $tbl
	 * @return int|bool the insert id on success | false on failure
	 */
	public function setData($data=array(),$fk=array(),$tbl){
		if(!empty($fk)){
			foreach($fk as $key => $value) {
				$data[$key] = $value;
			}
		}
		$insert = $this->db->insert($this->init_tbl[$tbl],$data);
		if($insert){
			return $this->db->insert_id();
		}
		return FALSE;
	}

	/**
	 * setDataBatch function.
	 * 
	 * @access public
	 * @param associative array $data_batch
	 * @param associative array $fk
	 * @param mixed $tbl
	 * @return int|bool the insert id on success | false on failure
	 */
	public function setDataBatch($data_batch=array(),$fk=array(),$tbl){
		$data_batch = $this->prepareDataBatch($data_batch,$fk);
		if(!empty($data_batch)){
			$insert_batch = $this->db->insert_batch($this->init_tbl[$tbl],$data_batch);
			if($insert_batch){
				return $this->db->insert_id();
			}
		}
		return FALSE;
	}

	/**
	 * updateDataBatch function.
	 * 
	 * @access public
	 * @param array $data_batch
	 * @param array $fk
	 * @param array $where_condition
	 * @param mixed $tbl
	 * @return int|bool the affected rows on success | false on failure
	 */
	public function updateDataBatch($data_batch=array(),$fk=array(),$where_condition,$tbl){
		$data_batch = $this->prepareDataBatch($data_batch,$fk);
		if(!empty($data_batch)){
			$update_batch = $this->db->update_batch($this->init_tbl[$tbl],$data_batch,$where_condition);
			if($update_batch){
				return $this->db->affected_rows();
			}
		}
		return FALSE;
	}

	/**
	 * prepareDataBatch function.
	 * 
	 * @access private
	 * @param array $data
	 * @param array $fk
	 * @return array the data array in batch format (a form of array with array subset values)
	 */
	private function prepareDataBatch($data=array(),$fk=array()){
		$batch_data   = array();
		$batch_result = array();
		$length 	  = $this->getLength($data);
		$keys 		  = $this->getKeys($data,$fk);
		$batch_data   = $this->setBatchData($data,$keys,$length,$fk);
		$batch_result = $this->setBatchResult($batch_data,$keys);
		return $batch_result;
	}

	/**
	 * getLength function.
	 * 
	 * @access private
	 * @param array $batch_data
	 * @return int the array subset length
	 */
	private function getLength($batch_data=array()){
		foreach($batch_data as $key => $value){
			return count($value);
			break;
		}
	}

	/**
	 * getKeys function.
	 * 
	 * @access private
	 * @param array $batch_data
	 * @param array $fk
	 * @return array the array keys
	 */
	private function getKeys($batch_data=array(),$fk=array()){
		$keys = array_keys($batch_data);
		if(!empty($fk)){
			foreach($fk as $key => $value){
				array_push($keys, $key);
			}
		}
		return $keys;
	}

	/**
	 * initializeBatchDataSize function.
	 * 
	 * @access private
	 * @param int $length
	 * @return array the initialized array in batch format
	 */
	private function initializeBatchDataSize($length){
		$batch_array = array();
		for($i=0;$i<$length;$i++){ 
			$batch_array[$i] = array();
		}
		return $batch_array;
	}

	/**
	 * setBatchData function.
	 * 
	 * @access private
	 * @param array $batch_data
	 * @param array $keys
	 * @param int $length
	 * @param array $fk
	 * @return array the data in array format
	 */
	private function setBatchData($batch_data=array(),$keys=array(),$length,$fk=array()){
		$batch_array = $this->initializeBatchDataSize($length);
		for($ctr=0;$ctr<$length;$ctr++){
			for($ctr1=0;$ctr1<count($keys);$ctr1++){
				//array_push($batch_array[$ctr], $batch_data[$keys[$ctr1]][$ctr]);
				if(!empty($batch_data[$keys[$ctr1]][$ctr])){
					array_push($batch_array[$ctr], trim($batch_data[$keys[$ctr1]][$ctr]));
				}
			}
			if(!empty($fk)){
				foreach ($fk as $key => $value) {
					array_push($batch_array[$ctr], trim($value));
				}
			}
			
		}
		return $batch_array;
	}

	/**
	 * setBatchResult function.
	 * 
	 * @access private
	 * @param array $batch_data
	 * @param array $keys
	 * @return array the result array in batch format
	 */
	private function setBatchResult($batch_data=array(),$keys=array()){
		$batch_result = array();
		for($i=0;$i<count($batch_data);$i++){
			if(count($keys)===count($batch_data[$i])){
				$batch_result[$i] = array_combine($keys, $batch_data[$i]);
			}
		}
		return $batch_result;
	}

	/**
	 * updateData function.
	 * 
	 * @access public
	 * @param array $data
	 * @param array $conditions
	 * @param mixed $tbl
	 * @return int|bool the number of affected rows, false on failure
	 */
	public function updateData($data=array(),$conditions=array(),$tbl){
		if(!empty($conditions)){
			foreach ($conditions as $key => $value) {
				$this->db->where($key,$value);
			}
		}
		$this->db->update($this->init_tbl[$tbl],$data);
		return $this->db->affected_rows();
	}

	/**
	 * deleteData function.
	 * 
	 * @access public
	 * @param array $conditions
	 * @param mixed $tbl
	 * @return void
	 */
	public function deleteData($conditions=array(),$tbl){
		if(!empty($conditions)){
			$this->db->delete($this->init_tbl[$tbl],$conditions);
			return TRUE;
		}
		return FALSE;
	}

	/**
	 * getJoinData function.
	 * 
	 * @access public
	 * @param mixed $select
	 * @param string $returnType
	 * @param array $condition
	 * @param array $tbl_join
	 * @param mixed $tbl
	 * @return array|bool array data on query result, false on failure
	 */
	public function getJoinData($select,$returnType,$conditions=array(),$tbl_join=array(),$tbl){
		$con['returnType'] = !empty($returnType)?$this->init_returnType[$returnType]:'';
		$con['conditions'] = $conditions;
		$con['tbl_join']   = $tbl_join;
		$getJoinData = $this->getJoinRows($con,$select,$tbl);
		if($getJoinData){
			return $getJoinData;
		}
		return FALSE;
	}

	/**
	 * getJoinDataWithSort function.
	 * 
	 * @access public
	 * @param mixed $select
	 * @param string $returnType
	 * @param array $condition
	 * @param array $tbl_join
	 * @param mixed $tbl
	 * @return array|bool array data on query result, false on failure
	 */
	public function getJoinDataWithSort($select,$returnType,$conditions=array(),$tbl_join=array(),$order,$tbl){
		$con['returnType'] = !empty($returnType)?$this->init_returnType[$returnType]:'';
		$con['conditions'] = $conditions;
		$con['tbl_join']   = $tbl_join;
		$getJoinData = $this->getJoinRowsWithSort($con,$select,$order,$tbl);
		if($getJoinData){
			return $getJoinData;
		}
		return FALSE;
	}

	/**
	 * getJoinRows function.
	 * 
	 * @access public
	 * @param array $params
	 * @param string $select
	 * @param mixed $tbl
	 * @return array array data on query result
	 */
	public function getJoinRows($params=array(),$select,$tbl){
		!empty($select)?$this->db->select($select):$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(array_key_exists("tbl_join", $params)){
			foreach ($params["tbl_join"] as $key => $value) {
				$this->db->join($key,$value,'left');
			}
		}
		if(array_key_exists("conditions", $params)){
			if(!empty($params["conditions"])){
				foreach ($params["conditions"] as $key => $value) {
					$this->db->where($key,$value);
				}
			}
		}
		$query = $this->db->get();
		if(array_key_exists("returnType", $params) && $params["returnType"]=='single'){
			$result = $query->row_array();
		}else if((array_key_exists("returnType", $params) && $params["returnType"]=='all') || empty($params["returnType"])){
			$result = $query->result_array();
		}
		return $result;
	}

	/**
	 * getJoinRowsWithSort function.
	 * 
	 * @access public
	 * @param array $params
	 * @param string $select
	 * @param mixed $tbl
	 * @return array array data on query result
	 */
	public function getJoinRowsWithSort($params=array(),$select,$order,$tbl){
		!empty($select)?$this->db->select($select):$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(array_key_exists("tbl_join", $params)){
			foreach ($params["tbl_join"] as $key => $value) {
				$this->db->join($key,$value);
			}
		}
		if(array_key_exists("conditions", $params)){
			if(!empty($params["conditions"])){
				foreach ($params["conditions"] as $key => $value) {
					$this->db->where($key,$value);
				}
			}
		}
		$this->db->order_by($order);
		$query = $this->db->get();
		if(array_key_exists("returnType", $params) && $params["returnType"]=='single'){
			$result = $query->row_array();
		}else if((array_key_exists("returnType", $params) && $params["returnType"]=='all') || empty($params["returnType"])){
			$result = $query->result_array();
		}
		return $result;
	}

	/**
	 * getData function.
	 * 
	 * @access public
	 * @param mixed $select
	 * @param string $returnType
	 * @param array $condition
	 * @param mixed $tbl
	 * @return int|array|bool int on count returnType, array data on query result, false on failure
	 */
	public function getData($select,$returnType,$conditions=array(),$tbl){
		$con['returnType'] = !empty($returnType)?$this->init_returnType[$returnType]:'';
		$con['conditions'] = $conditions;
		$getData = $this->getRows($con,$select,$tbl);
		if($getData){
			return $getData;
		}
		return FALSE;
	}

	/**
	 * getRows function.
	 * 
	 * @access public
	 * @param array $params
	 * @param string $select
	 * @param mixed $tbl
	 * @return int|array int on count returnType, array data on query result
	 */
	public function getRows($params=array(),$select,$tbl){
		!empty($select)?$this->db->select($select):$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(array_key_exists("conditions", $params)){
			if(!empty($params["conditions"])){
				foreach ($params["conditions"] as $key => $value) {
					$this->db->where($key,$value);
				}
			}
		}
		$query = $this->db->get();
		if(array_key_exists("returnType", $params) && $params["returnType"]=='count'){
			$result = $query->num_rows();
		}else if(array_key_exists("returnType", $params) && $params["returnType"]=='single'){
			$result = $query->row_array();
		}else if((array_key_exists("returnType", $params) && $params["returnType"]=='all') || empty($params["returnType"])){
			$result = $query->result_array();
		}
		return $result;
	}

	/**
	 * transformArrayListofIdIntoCommaSeparatedListArray function.
	 * IT LET'S THE PROGRAMMER TO GET MULTIPLE DATA FROM DB TABLE USING DB TABLE PRIMARY KEY
	 * 
	 * @access public
	 * @param array $data
	 * @return array array data on query result
	 */
	public function transformAssociativeArrayIntoArrayData($data = array()){
		$array_data = array();
		$ct = 0;
		foreach ($data as $value) {
			$array_data[$ct] = $value;
			$ct++;
		}
		return $array_data;
	}

	/**
	 * getMultipleDataFromArrayListById function.
	 * IT LET'S THE PROGRAMMER TO GET MULTIPLE DATA FROM DB TABLE USING DB TABLE PRIMARY KEY
	 * 
	 * @access public
	 * @param array $data
	 * @param string $select
	 * @param string $key
	 * @param mixed $tbl
	 * @return array array data on query result
	 */
	public function getMultipleDataFromArrayListById($data = array(), $select, $key, $tbl){
		$array_data = array();
		for ($i=0; $i < count($data); $i++) { 
			$array_data[$i] = $this->getData($select,'s',array($key=>$data[$i]),$tbl);
		}
		return $array_data;
	}

	/** 
	 * updateValidationToRemoveDuplicateData function.
	 * IT VALIDATE AND REMOVE DUPLICATE DATA ON EXISTING ASSOCIATIVE ARRAY AND ON EXISTING DATA FROM YOUR DB TABLE
	 * 
	 * @access public
	 * @param array $data
	 * @param string $unique_key
	 * @param string $unique_id
	 * @param array $con
	 * @param mixed $tbl
	 * @return array the updated associative array data
	 */
	public function updateValidationToRemoveDuplicateData($data = array(), $unique_key, $unique_id, $con, $tbl){
		$ctr = 0;
		$temp= array();
		for ($i=0; $i < count($data); $i++) { 
			$condition = array($unique_key=>trim($data[$unique_key][$i]),$unique_id.' <>'=>$data[$unique_id][$i]);
			if(!empty($con)){
				foreach ($con as $key => $value) {
					$condition[$key] = $value;
				}
			}
			$count = $this->getData($unique_key,'c',$condition,$tbl);
			if($count > 0){
				$data[$unique_key][$i] = "";
			}
			if(!empty($temp)){
				foreach ($temp as $value) {
					if($data[$unique_key][$i]==$value){
						$data[$unique_key][$i] = "";
					}
				}
			}
			if($i==(count($data[$unique_key]))-1){
				break;
			}else{
				$temp[$i] = $data[$unique_key][$i];
			}
		}
		return $data;
	}

	/** 
	 * insertBatchvalidateAndRemoveDuplicateData function.
	 * validates and remove duplicate data on existing associative array | validates data on existing db table
	 * 
	 * @access public
	 * @param associative array $data
	 * @param string $select
	 * @param string $key
	 * @param array $con
	 * @param mixed $tbl
	 * @return associative array updated associative array data on success.
	 */
	public function insertBatchvalidateAndRemoveDuplicateData($data = array(), $select, $key, $con = array(), $tbl){
		$ctr = 0;
		$temp= array();
		if(!empty($con)){
			foreach ($con as $keys => $value) {
				$conditions[$keys] = $value;
			}
		}
		foreach($data[$key] as $value){
			$conditions[$key] = trim($value);
			$count = $this->getData($select,'c',$conditions,$tbl);
			if($count > 0){
		        $data[$key][$ctr] = "";
		    }
			if(!empty($temp)){
				foreach ($temp as $val) {
					if($value == $val){
						$data[$key][$ctr] = "";
						break;
					}
				}
			}
				
		    $temp[$ctr] = $value;
		    $ctr++;
		}
		return $data;
	}

	/** 
	 * removeDuplicateDataFromArrayList function.
	 * IT REMOVE DUPLICATE DATA ON EXISTING ARRAY LIST
	 * 
	 * @access public
	 * @param array $data
	 * @return array the updated array data
	 */
	public function removeDuplicateDataFromArrayList($data = array()){
		$ct = 0;
		$temp = array();
		$new_data = array();
		for ($i=0; $i < count($data); $i++) { 
			if(!empty($temp)){
				$count_duplicate = 0;
				for ($a=0; $a < count($temp); $a++) { 
					if($data[$i]==$temp[$a]){
						$count_duplicate++;
					}
				}
				if($count_duplicate==0){
					$new_data[$ct] = $data[$i];
					$ct++;
				}
			}else{
				$new_data[$ct] = $data[$i];
				$ct++;
			}
			$temp[$i] = $data[$i];
		}
		return $new_data;
	}

	public function integerToRoman($integer){
		// Convert the integer into an integer (just to make sure)
		$integer = intval($integer);
		$result = '';
		 
		// Create a lookup array that contains all of the Roman numerals.
		$lookup = array(
			'M' => 1000,
			'CM' => 900,
			'D' => 500,
			'CD' => 400,
			'C' => 100,
			'XC' => 90,
			'L' => 50,
			'XL' => 40,
			'X' => 10,
			'IX' => 9,
			'V' => 5,
			'IV' => 4,
			'I' => 1
		);
		 
		foreach($lookup as $roman => $value){
			// Determine the number of matches
			$matches = intval($integer/$value);
			 
			// Add the same number of characters to the string
			$result .= str_repeat($roman,$matches);
			 
			// Set the integer to be the remainder of the integer and the value
			$integer = $integer % $value;
		}
		 
		// The Roman numeral should be built, return it
		return $result;
	}

}

/**
* My new Crud class that extends my Cruds (my version 1 Crud)
*/
class Crud extends Cruds
{
	
	function __construct(){
		parent::__construct();
		
	}

	/**
	 * getData function.
	 * 
	 * @access public
	 * @param mixed $select
	 * @param string $returnType
	 * @param array $condition
	 * @param mixed $order
	 * @param mixed $tbl
	 * @return int|array|bool int on count returnType, array data on query result, false on failure
	 */
	public function getDataWithSort($select,$returnType,$conditions=array(),$order,$tbl){
		$con['returnType'] = !empty($returnType)?$this->init_returnType[$returnType]:'';
		$con['conditions'] = $conditions;
		$getData = $this->getRowsWithSort($con,$select,$order,$tbl);
		if($getData){
			return $getData;
		}
		return FALSE;
	}

	/**
	 * getRows function.
	 * 
	 * @access public
	 * @param array $params
	 * @param string $select
	 * @param mixed $tbl
	 * @return int|array int on count returnType, array data on query result
	 */
	public function getRowsWithSort($params=array(),$select,$order,$tbl){
		!empty($select)?$this->db->select($select):$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(array_key_exists("conditions", $params)){
			if(!empty($params["conditions"])){
				foreach ($params["conditions"] as $key => $value) {
					$this->db->where($key,$value);
				}
			}
		}
		$this->db->order_by($order);
		$query = $this->db->get();
		if(array_key_exists("returnType", $params) && $params["returnType"]=='count'){
			$result = $query->num_rows();
		}else if(array_key_exists("returnType", $params) && $params["returnType"]=='single'){
			$result = $query->row_array();
		}else if((array_key_exists("returnType", $params) && $params["returnType"]=='all') || empty($params["returnType"])){
			$result = $query->result_array();
		}
		return $result;
	}

	/**
	 * getRows function.
	 * 
	 * @access public
	 * @param array $conditions
	 * @param mixed $tbl
	 * @return boolean TRUE on success
	 */
	public function isDataValid($conditions = array(),$unique_id = array(),$tbl){
		$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(!empty($conditions)){
			foreach ($conditions as $key => $value) {
				$this->db->or_where($key,$value);
			}
		}
		if(!empty($unique_id)){
			foreach ($unique_id as $key => $value) {
				$this->db->where($key, $value);
			}
		}
		if($this->db->get()->num_rows() > 0){
			return FALSE;
		}
		return TRUE;
	}

	/**
	 * removeDuplicateDataOnAssociativeArray function.
	 * 
	 * @access public
	 * @param array $data
	 * @param string $unique_key
	 * @return array successed removing duplicate data
	 */
	public function removeDuplicateDataOnAssociativeArray($data = array(), $unique_key){
		$new_data = array();
		$temp = '';
		$ct = 0;
		for ($i=0; $i < count($data); $i++) { 
			if($temp!=$data[$i][$unique_key]){
				$new_data[$ct] = $data[$i];
				$ct++;
			}
			$temp = $data[$i][$unique_key];
		}
		return $new_data;
	}

	/**
	 * count_table_rows function.
	 * 
	 * @access public
	 * @param associative array $conditions
	 * @param mixed $tbl
	 * @return int count of table rows on success.
	 */
	public function count_table_rows($conditions,$tbl)
	{
		return $this->getData('','c',$conditions,$tbl);
	}

	/**
	 * pagination_config function.
	 * 
	 * @access public
	 * @param int $per_page
	 * @param int $total_rows
	 * @param string $url_name
	 * @param int $uri_segment
	 * @return pagination config on success.
	 */
	public function pagination_config($per_page,$total_rows,$url_name,$uri_segment){
		// pagination config
        $config = array();
        $config["base_url"] = base_url() . $url_name;
        $config["total_rows"] = $total_rows;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;

        //config for bootstrap pagination class integration
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '&laquo&laquo';
        $config['last_link'] = '&raquo&raquo';
        $config['first_tag_open'] = '<li class="paginate_button page-item previous page-link" id="example_previous">';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="paginate_button page-item previous page-link" id="example_previous">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="paginate_button page-item next page-link" id="example_next">';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li class="paginate_button page-item next page-link" id="example_next">';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="paginate_button page-item page-link">';
        $config['num_tag_close'] = '</li>';
        return $config;
	}

	/**
	 * get_paginated_data function.
	 * 
	 * @access public
	 * @param mixed $select
	 * @param associative array $condition
	 * @param mixed $order
	 * @param array $page
	 * @param mixed $tbl
	 * @return associative array data on query result, false on failure
	 */
	public function get_paginated_data($select,$conditions=array(),$tbl_join=array(),$order,$page,$tbl){
		$con['conditions'] = $conditions;
		$con['tbl_join']   = $tbl_join;
		$getJoinData = $this->get_paginated_rows($con,$select,$order,$page,$tbl);
		if($getJoinData){
			return $getJoinData;
		}
		return FALSE;
	}

	/**
	 * get_paginated_rows function.
	 * 
	 * @access private
	 * @param associative array $params
	 * @param string $select
	 * @param mixed $order
	 * @param array $page(limit,offset)
	 * @param mixed $tbl
	 * @return associative array data on query result, false on failure
	 */
	private function get_paginated_rows($params=array(),$select,$order,$page,$tbl){
		!empty($select)?$this->db->select($select):$this->db->select('*');
		$this->db->from($this->init_tbl[$tbl]);
		if(array_key_exists("tbl_join", $params)){
			if(!empty($params['tbl_join'])){
				foreach ($params["tbl_join"] as $key => $value) {
					$this->db->join($key,$value);
				}
			}
		}
		if(array_key_exists("conditions", $params)){
			if(!empty($params["conditions"])){
				foreach ($params["conditions"] as $key => $value) {
					$this->db->where($key,$value);
				}
			}
		}
		$this->db->order_by($order);
		if(!empty($page))$this->db->limit($page[0],$page[1]);
		return $this->db->get()->result_array();
	}

	/**
	 * insertBatch function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @param array $keys
	 * @param associative array $fk
	 * @param mixed $tbl
	 * @return boolean true on success.
	 */
	public function insertBatch($data = array(),$keys = array(),$fk = array(),$tbl){
		$arr_data = array();
        foreach ($data as $key => $value) {
            $ctr = 0;
            if(is_array($data[$key])){
            	for ($i=0; $i < count($data[$key]); $i++) { 
	        		$arr_data[$ctr][$key] = trim($data[$key][$i]);
	            	$ctr++;
	            }
            }
        }
        for ($i=0; $i < count($arr_data); $i++) { 
        	if(!empty($fk)){
				foreach($fk as $key => $val) {
					$arr_data[$i][$key] = $val;
				}
			}
        }
        // insert batch
		if(!empty($arr_data)){
			return $this->basicInsertBatch($arr_data,$tbl);
		}
		return FALSE;
	}

	/**
	 * basicInsertBatch function.
	 * 
	 * @access public
	 * @param associative array $data
	 * @param mixed $tbl
	 * @return int insert id on success.
	 */
	public function basicInsertBatch($data = array(),$tbl){
		if(!empty($data)){
			$insert_batch = $this->db->insert_batch($this->init_tbl[$tbl],$data);
			if($insert_batch){
				return $this->db->insert_id();
			}
		}
		return FALSE;
	}

	/**
	 * credibilityAuth function.
	 * 
	 * @access public
	 * @param string $role
	 * @return array boolean or redirect to login
	 */
	public function credibilityAuth($designation = array()){
		if(($this->session->userdata('isLoggedIn')===TRUE && in_array($this->session->userdata('u_designation'), $designation)) && $this->session->userdata('pass_reset_date')>date('Y-m-d H:i:s')){
			return TRUE;
		}else if($this->session->userdata('isLoggedIn')===TRUE){
			return redirect('error_401');
		}
		return redirect('login');
	}

	/**
	 * credibilityAuthChangePassword function.
	 * 
	 * @access public
	 * @param string $role
	 * @return array boolean or redirect to login
	 */
	public function credibilityAuthChangePassword(){
		if($this->session->userdata('isLoggedIn')==TRUE && $this->session->userdata('pass_reset_date')<=date('Y-m-d H:i:s')){
			return TRUE;
		}
		return redirect('login');
	}

}