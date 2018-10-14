<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Subject extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('subject_model');
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
        $data['header'] = array('title'=>'Dashboard','icon'=>'ion-ios-speedometer-outline');
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
     * subjects function.
     * 
     * @access public
     * @return render subjects table
     */
    public function subjects(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'Subjects','icon'=>'ion-ios-book-outline');
        // Necessary page data
        $data['subject'] = $this->subject_model->getSubjects('a','');
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/subject',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-subject');        
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_subject function.
     * 
     * @access public
     * @return render subjects registration form
     */
    public function new_subject(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'New Subjects','icon'=>'ion-ios-book-outline');
        // Necessary page data
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/new-subject');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * subject_save_registration function.
     * 
     * @access public
     * @return process save subjects registration request.
     */
    public function subject_save_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array('subject_title' => $this->input->post('subject_title'));
        $new_ = $this->crud->insertBatchvalidateAndRemoveDuplicateData($data,'','subject_title','','tbl7');
        $insert = $this->crud->setDataBatch($new_,array('created_by'=>$this->session->userdata('u_id')),'tbl7');
        if($insert){
            $this->user_model->recordLogs('Create new subject(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New subject(s) has been created!.');
            redirect('new_subject');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_subject');
        }
    }

    /**
     * subject_activate_deactivate function.
     * 
     * @access public
     * @return process subject activation or deactivation request
     */
    public function subject_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate subjects
            $data = array('subject_id'=>$this->input->post('subject_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_id')),'subject_id','tbl7');
            $this->user_model->recordLogs('Deactivate subjects',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Subject(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate subjects
            $data = array('subject_id'=>$this->input->post('subject_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_id')),'subject_id','tbl7');
            $this->user_model->recordLogs('Activate subjects',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Subject(s) has been activated');
        }
        redirect('subjects');
    }

    /**
     * get_subject function.
     * 
     * @access public
     * @return process get subject request by id
     */
    public function get_subject($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->subject_model->getSubjects('s',array('subject_id'=>$id));
        echo json_encode($data);
    }

    /**
     * subject_update function.
     * 
     * @access public
     * @return process subject update request
     */
    public function subject_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert   = 'alert alert-success';
        $msg     = 'Subject has been updated!';
        $subject = trim($this->input->post('subject_title'));
        $sub_id  = $this->input->post('subject_id');
        if(!empty($subject)){
            if(empty($this->crud->getData('','s',array('subject_title'=>$subject,'subject_id !='=>$sub_id),'tbl7'))){
                $data = array('subject_title'=>$subject,'updated_by'=>$this->session->userdata('u_id'));
                $cond = array('subject_id'=>$sub_id);
                $this->crud->updateData($data,$cond,'tbl7');
                $this->user_model->recordLogs('Update subject title',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Subject has not been updated due to invalid subject title.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Subject has not been updated due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}