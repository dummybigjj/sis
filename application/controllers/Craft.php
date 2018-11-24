<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Craft extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('craft_model');
        $this->load->model('user_model');
        $this->load->model('vocational_program_model');
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
     * craft function.
     * 
     * @access public
     * @return render craft table view
     */
    public function craft(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header'] = array('title'=>'Craft','icon'=>'notebook-streamline');
        // Necessary page data
        $data['craft'] = $this->craft_model->get_craft('a','');
        // Vocational Courses
        $data['course']= $this->vocational_program_model->get_vocational_program('a',array('status'=>'1'));
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
        $this->load->view('sis-users/sis-admin/craft',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-craft');        
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_craft function.
     * 
     * @access public
     * @return render craft registration form
     */
    public function new_craft(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['header'] = array('title'=>'New Craft','icon'=>'notebook-streamline');
        // Necessary page data
        // Vocational Courses
        $data['course']= $this->vocational_program_model->get_vocational_program('a',array('status'=>'1'));
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
        $this->load->view('sis-users/sis-admin/new-craft');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * craft_save_registration function.
     * 
     * @access public
     * @return process save craft registration request.
     */
    public function craft_save_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array(
            'craft_code'  => $this->input->post('craft_code'),
            'description' => $this->input->post('description'),
            'voc_program' => $this->input->post('voc_program')
        );
        $insert_batch = $this->crud->insertBatch($data,'',array('created_by'=>$this->session->userdata('u_email')),'tbl14');
        if($insert_batch){
            $this->user_model->recordLogs('Create new craft(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New craft(s) has been created!.');
            redirect('new_craft');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_craft');
        }
    }

    /**
     * craft_activate_deactivate function.
     * 
     * @access public
     * @return process craft activation or deactivation request
     */
    public function craft_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate craft
            $data = array('craft_item_id'=>$this->input->post('craft_item_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_email')),'craft_item_id','tbl14');
            $this->user_model->recordLogs('Deactivate Craft',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Craft(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate craft
            $data = array('craft_item_id'=>$this->input->post('craft_item_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_email')),'craft_item_id','tbl14');
            $this->user_model->recordLogs('Activate Craft',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Craft(s) has been activated');
        }else if($this->input->post('delete')){
            // Delete craft
            $data = array('craft_item_id'=>$this->input->post('craft_item_id'));
            $this->craft_model->delete_craft($data);
            $this->user_model->recordLogs('Delete Craft',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Craft(s) has been deleted');
        }
        redirect('craft');
    }

    /**
     * get_craft function.
     * 
     * @access public
     * @return process get craft request by id
     */
    public function get_craft($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->craft_model->get_craft('s',array('craft_item_id'=>$id));
        echo json_encode($data);
    }

    /**
     * craft_update function.
     * 
     * @access public
     * @return process craft update request
     */
    public function craft_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert = 'alert alert-success';
        $msg   = 'Craft has been updated!';
        $data  = array(
            'craft_code'  => trim($this->input->post('craft_code')),
            'description' => trim($this->input->post('description')),
            'voc_program' => $this->input->post('voc_program'),
            'updated_by'  => $this->session->userdata('u_email')
        );
        $craft_id = $this->input->post('craft_item_id');
        if(!empty($data['craft_code'])){
            if(empty($this->crud->getData('','s',array('craft_code'=>$data['craft_code'],'craft_item_id !='=>$craft_id),'tbl14'))){
                $this->crud->updateData($data,array('craft_item_id'=>$craft_id),'tbl14');
                $this->user_model->recordLogs('Update Craft',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Craft has not been updated due to invalid craft code.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Error occured due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}