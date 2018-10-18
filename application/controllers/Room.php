<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Room extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('user_model');
        $this->load->model('room_model');
    }

    /**
     * template_reference function.
     * 
     * @access public
     * @return render system template reference
     */
    public function template_reference(){
        $data['header'] = array('title'=>'Temaplate Reference','icon'=>'ion-ios-speedometer-outline');
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('templates/html-comp/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/admin-dashboard');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * rooms function.
     * 
     * @access public
     * @return render rooms table
     */
    public function rooms(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header'] = array('title'=>'Room','icon'=>'ios-home-outline');
    	// Necessary page data
        $data['room'] = $this->room_model->getRooms('a','');
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        if($this->session->userdata('u_designation')=='Administrator'):
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        else:
        $this->load->view('sis-users/sis-admin/admin-menu/registrar-menu');
        endif;
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/room',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-room');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_room function.
     * 
     * @access public
     * @return render room registration
     */
    public function new_room(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['header'] = array('title'=>'New Rooms','icon'=>'ios-home-outline');
    	// Necessary page data
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        if($this->session->userdata('u_designation')=='Administrator'):
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        else:
        $this->load->view('sis-users/sis-admin/admin-menu/registrar-menu');
        endif;
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/new-room');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * room_save_registration function.
     * 
     * @access public
     * @return process save new room request
     */
    public function room_save_registration(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
    	$data = array('room_name' => $this->input->post('room_name'));
    	$new_ = $this->crud->insertBatchvalidateAndRemoveDuplicateData($data,'','room_name','','tbl5');
    	$insert = $this->crud->setDataBatch($new_,array('created_by'=>$this->session->userdata('u_id')),'tbl5');
        if($insert){
            $this->user_model->recordLogs('Create new room(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New room(s) has been created!.');
            redirect('new_room');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_room');
        }
    }

    /**
     * room_activate_deactivate function.
     * 
     * @access public
     * @return process room activation or deactivation request
     */
    public function room_activate_deactivate(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate room
            $data = array('room_id'=>$this->input->post('room_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_id')),'room_id','tbl5');
            $this->user_model->recordLogs('Deactivate rooms',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Room(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Deactivate room
            $data = array('room_id'=>$this->input->post('room_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_id')),'room_id','tbl5');
            $this->user_model->recordLogs('Activate rooms',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Room(s) has been activated');
        }
        redirect('rooms');
    }

    /**
     * get_room function.
     * 
     * @access public
     * @return process get room request by id
     */
    public function get_room($id = NULL){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->room_model->getRooms('s',array('room_id'=>$id));
        echo json_encode($data);
    }

    /**
     * room_update function.
     * 
     * @access public
     * @return process room update request
     */
    public function room_update(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert   = 'alert alert-success';
        $msg     = 'Room has been updated!';
        $room    = trim($this->input->post('room_name'));
        $room_id = $this->input->post('room_id');
        if(!empty($room)){
        	if(empty($this->crud->getData('','s',array('room_name'=>$room,'room_id !='=>$room_id),'tbl5'))){
	        	$data = array('room_name'=>$room,'updated_by'=>$this->session->userdata('u_id'));
	        	$cond = array('room_id'=>$room_id);
	        	$this->crud->updateData($data,$cond,'tbl5');
	        	$this->user_model->recordLogs('Update room name',$this->session->userdata('u_id'));
	        }else{
	        	$alert = 'alert alert-danger';
	            $msg   = 'Room has not been updated due to invalid room name.';
	        }
        }else{
        	$alert = 'alert alert-warning';
            $msg   = 'Room has not been updated due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}