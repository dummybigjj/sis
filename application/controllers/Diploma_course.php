<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Diploma_course extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('vocational_program_model');
        $this->load->model('user_model');
        $this->load->model('diploma_course_model');
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
     * diploma_courses function.
     * 
     * @access public
     * @return render diploma courses table
     */
    public function diploma_courses(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header']  = array('title'=>'Diploma Course','icon'=>'ios-paper-outline');
        // Necessary page data
        $data['courses'] = $this->diploma_course_model->getDiplomaCourses('a','');
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
        $this->load->view('sis-users/sis-admin/diploma-course',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/edit-diploma-course');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * new_diploma_course function.
     * 
     * @access public
     * @return render create new diploma courses
     */
    public function new_diploma_course(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['header'] = array('title'=>'New Diploma Course','icon'=>'ios-paper-outline');
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
        $this->load->view('sis-users/sis-admin/new-diploma-course');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * diploma_course_save_registration function.
     * 
     * @access public
     * @return process diploma course save request
     */
    public function diploma_course_save_registration(){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array(
            'course_name'    => $this->input->post('course_name'),
            'course_acronym' => $this->input->post('course_acronym')
        );
        $new_data = $this->crud->insertBatchvalidateAndRemoveDuplicateData($data,'','course_acronym','','tbl11');
        $insert   = $this->crud->setDataBatch($new_data,array('created_by'=>$this->session->userdata('u_id')),'tbl11');
        if($insert){
            $this->user_model->recordLogs('Create New Diploma Course(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'New Diploma Course(s) has been created!.');
            redirect('new_diploma_course');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
            redirect('new_diploma_course');
        }
    }
    
    /**
     * diploma_course_activate_deactivate function.
     * 
     * @access public
     * @return process diploma course activation or deactivation request
     */
    public function diploma_course_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate diploma course
            $data = array('course_id'=>$this->input->post('course_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_id')),'course_id','tbl11');
            $this->user_model->recordLogs('Deactivate Diploma Course(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Diploma Course(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate diploma course
            $data = array('course_id'=>$this->input->post('course_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_id')),'course_id','tbl11');
            $this->user_model->recordLogs('Activate Diploma Course(s)',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Diploma Course(s) has been activated');
        }
        redirect('diploma_courses');
    }

    /**
     * get_diploma_course function.
     * 
     * @access public
     * @param int $course_id
     * @return process get diploma course request by course id
     */
    public function get_diploma_course($course_id = NULL){
    	$this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->diploma_course_model->getDiplomaCourses('s',array('course_id'=>$course_id));
        echo json_encode($data);
    }

    /**
     * vocational_program_update function.
     * 
     * @access public
     * @return process diploma course update request
     */
    public function diploma_course_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert  = 'alert alert-success';
        $msg    = 'Diploma Course has been updated!';
        $course_id = $this->input->post('course_id');
        $data   = array(
            'course_name' 	 => trim($this->input->post('course_name')),
            'course_acronym' => trim($this->input->post('course_acronym')),
            'updated_by' 	 => $this->session->userdata('u_id')
        );
        $cond = array('course_id'=>$course_id);
        if(!empty($data['course_name']) && !empty($data['course_acronym'])){
            if(empty($this->crud->getData('','s',array('course_acronym'=>$data['course_acronym'],'course_id !='=>$course_id),'tbl11'))){
                $this->crud->updateData($data,$cond,'tbl11');
                $this->user_model->recordLogs('Update Diploma Course',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Diploma Course has not been updated due to invalid Acronym.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Diploma Course has not been updated due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

}