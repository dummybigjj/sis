<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Vocational_program extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('vocational_program_model');
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
        // Necessary page data
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
     * vocational_programs function.
     * 
     * @access public
     * @return render vocational programs table
     */
    public function vocational_programs(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header'] = array('title'=>'Vocational Program','icon'=>'ios-list-outline');
        // Necessary page data
        $data['voc_program'] = $this->vocational_program_model->get_vocational_program('a','');
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
        $this->load->view('sis-users/sis-admin/vocational-program',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-voc-program');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_vocational_program function.
     * 
     * @access public
     * @return render create new vocational program
     */
    public function new_vocational_program(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['header'] = array('title'=>'New Vocational Program','icon'=>'ios-list-outline');
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
        $this->load->view('sis-users/sis-admin/new-vocational-program');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * vocational_program_save_registration function.
     * 
     * @access public
     * @return process vocational programs save request
     */
    public function vocational_program_save_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array(
            'description' => $this->input->post('voc_program_name'),
            'vocational'  => $this->input->post('voc_program_acronym')
        );
        $insert_batch = $this->crud->insertBatch($data,'',array('created_by'=>$this->session->userdata('u_email')),'tbl16');
        if($insert_batch){
            $this->user_model->recordLogs('Create new Vocatonal Program(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New Vocatonal Program(s) has been created!.');
            redirect('new_vocational_program');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_vocational_program');
        }
    }

    /**
     * vocational_program_activate_deactivate function.
     * 
     * @access public
     * @return process vocational programs activation or deactivation request
     */
    public function vocational_program_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate vocational program
            $data = array('voc_id'=>$this->input->post('voc_program_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_email')),'voc_id','tbl16');
            $this->user_model->recordLogs('Deactivate Vocatonal Program(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Vocatonal Program(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate vocational program
            $data = array('voc_id'=>$this->input->post('voc_program_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_email')),'voc_id','tbl16');
            $this->user_model->recordLogs('Activate Vocatonal Program(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Vocatonal Program(s) has been activated');
        }
        else if($this->input->post('delete')){
            // Delete vocational program
            $this->vocational_program_model->delete_vocational_program($this->input->post('voc_program_id'));
            $this->user_model->recordLogs('Delete Vocatonal Program(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Vocatonal Program(s) has been deleted');
        }
        redirect('vocational_programs');
    }

    /**
     * get_vocational_program function.
     * 
     * @access public
     * @param int $id
     * @return process get vocational program request by id
     */
    public function get_vocational_program($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->vocational_program_model->get_vocational_program('s',array('voc_id'=>$id));
        echo json_encode($data);
    }

    /**
     * vocational_program_update function.
     * 
     * @access public
     * @return process vocational program update request
     */
    public function vocational_program_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert  = 'alert alert-success';
        $msg    = 'Vocatonal Program has been updated!';
        $voc_id = $this->input->post('voc_program_id');
        $data   = array(
            'description' => trim($this->input->post('voc_program')),
            'vocational'  => trim($this->input->post('voc_program_acronym')),
            'updated_by'  => $this->session->userdata('u_email')
        );
        $cond = array('voc_id'=>$voc_id);
        if(!empty($data['voc_program']) && !empty($data['voc_program_acronym'])){
            if(empty($this->crud->getData('','s',array('vocational'=>$data['vocational'],'voc_id !='=>$voc_id),'tbl16'))){
                $this->crud->updateData($data,$cond,'tbl16');
                $this->user_model->recordLogs('Update Vocatonal Program',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Vocatonal Program has not been updated due to invalid Vocatonal Program Acronym.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Vocatonal Program has not been updated due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}