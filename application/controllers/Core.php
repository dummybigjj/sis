<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Core extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('core_model');
        $this->load->model('user_model');
    }

    /**
     * template_reference function.
     * 
     * @access public
     * @return render system template reference
     */
    public function template_reference(){
        $data['header'] = array('title'=>'Template Reference','icon'=>'ion-ios-speedometer-outline');
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
     * core function.
     * 
     * @access public
     * @return render core table view
     */
    public function core(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header'] = array('title'=>'Core','icon'=>'notebook-streamline');
        // Necessary page data
        $data['core'] = $this->core_model->get_core('a','');
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
        $this->load->view('sis-users/sis-admin/core',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-core');        
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_core function.
     * 
     * @access public
     * @return render core registration form
     */
    public function new_core(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['header'] = array('title'=>'New Core','icon'=>'notebook-streamline');
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
        $this->load->view('sis-users/sis-admin/new-core');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * core_save_registration function.
     * 
     * @access public
     * @return process save core registration request.
     */
    public function core_save_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array(
            'core_code'   => $this->input->post('core_code'),
            'description' => $this->input->post('description')
        );
        $insert_batch = $this->crud->insertBatch($data,'',array('created_by'=>$this->session->userdata('u_email')),'tbl13');
        if($insert_batch){
            $this->user_model->recordLogs('Create new core(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New core(s) has been created!.');
            redirect('new_core');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_core');
        }
    }

    /**
     * core_activate_deactivate function.
     * 
     * @access public
     * @return process core activation or deactivation request
     */
    public function core_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate core
            $data = array('core_item_id'=>$this->input->post('core_item_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_email')),'core_item_id','tbl13');
            $this->user_model->recordLogs('Deactivate Core',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Core(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate core
            $data = array('core_item_id'=>$this->input->post('core_item_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_email')),'core_item_id','tbl13');
            $this->user_model->recordLogs('Activate Core',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Core(s) has been activated');
        }
        redirect('core');
    }

    /**
     * get_core function.
     * 
     * @access public
     * @return process get core request by id
     */
    public function get_core($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->core_model->get_core('s',array('core_item_id'=>$id));
        echo json_encode($data);
    }

    /**
     * core_update function.
     * 
     * @access public
     * @return process core update request
     */
    public function core_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert = 'alert alert-success';
        $msg   = 'Core has been updated!';
        $data  = array(
            'core_code'   => trim($this->input->post('core_code')),
            'description' => trim($this->input->post('description')),
            'updated_by'  => $this->session->userdata('u_email')
        );
        $core_id = $this->input->post('core_item_id');
        if(!empty($data['core_code'])){
            if(empty($this->crud->getData('','s',array('core_code'=>$data['core_code'],'core_item_id !='=>$core_id),'tbl13'))){
                $this->crud->updateData($data,array('core_item_id'=>$core_id),'tbl13');
                $this->user_model->recordLogs('Update Core',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Core has not been updated due to invalid core code.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Error occured due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}