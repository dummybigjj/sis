<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Student extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('user_model');
        $this->load->model('student_model');
        // $this->load->model('batch_year_model');
        $this->load->model('subject_model');
        $this->load->model('room_model');
        $this->load->model('vocational_program_model');
    }

    /**
     * template_reference function.
     * 
     * @access public
     * @return render system template reference
     */
    public function template_reference(){
        $data['header'] = array('title'=>'Dashboard','icon'=>'ion-ios-speedometer-outline');
        // Necessary data
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

    // /**
    //  * students function.
    //  * 
    //  * @access public
    //  * @return render students table
    //  */
    // public function students(){
    //     $this->crud->credibilityAuth(array('Administrator','Registrar'));
    //     // Subheader bar title and icon
    //     $data['subheader'] = array('title'=>'Students','icon'=>'fa fa-user-o');
    //     // Necessary page data
    //     $data['students']  = $this->student_model->getStudents('a','');
    //     // Page headers
    //     $this->load->view('templates/header');
    //     $this->load->view('templates/header-bar');
    //     $this->load->view('oam-users/oam-admin/admin-menu/menu-student');
    //     $this->load->view('templates/content-inner');
    //     $this->load->view('templates/subheader-bar',$data);
    //     // Flash data messages
    //     $this->load->view('templates/flashdata/flashdata-success');
    //     $this->load->view('templates/flashdata/flashdata-warning');
    //     $this->load->view('templates/flashdata/flashdata-danger');
    //     // Page contents
    //     $this->load->view('oam-users/oam-admin/admin-student',$data);
    //     // Page modals
    //     $this->load->view('oam-users/oam-admin/admin-modals/view-student-modal');
    //     $this->load->view('oam-users/oam-admin/admin-modals/edit-student-modal');
    //     $this->load->view('templates/modals/success');
    //     // Page footer
    //     $this->load->view('templates/footer');
    // }

    /**
     * student_registration function.
     * 
     * @access public
     * @return render students registration form
     */
    public function student_registration(){
        // user credentials authentication
        $this->crud->credibilityAuth(array('Administrator','Registrar'));        
        // Necessary page data
        // Page headers and navigation
        $this->load->view('templates/html-comp/sis-header');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/sis-registration');
        // Page modals
        // Page footer
    }

    /**
     * student_enrollment_registration function.
     * 
     * @access public
     * @return render enrollment registration table
     */
    public function student_enrollment_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // Subheader bar title and icon
        $data['subheader'] = array('title'=>'Register Student','icon'=>'fa fa-user-o');
        // Necessary page data
        $data['batch_year']= $this->batch_year_model->getBatchCurrentYear();
        $data['enrolled']  = $this->student_model->getEnrolledStudent(array('`student_subject`.`batch_year`'=>$data['batch_year']['batch_year_id']),'a');
        // Page headers
        $this->load->view('templates/header');
        $this->load->view('templates/header-bar');
        $this->load->view('oam-users/oam-admin/admin-menu/menu-student');
        $this->load->view('templates/content-inner');
        $this->load->view('templates/subheader-bar',$data);
        // Flash data messages
        $this->load->view('templates/flashdata/flashdata-success');
        $this->load->view('templates/flashdata/flashdata-warning');
        $this->load->view('templates/flashdata/flashdata-danger');
        // Page contents
        $this->load->view('oam-users/oam-admin/admin-student-enrollment-registration',$data);
        // Page modals
        $this->load->view('oam-users/oam-admin/admin-modals/view-student-registration-modal');
        $this->load->view('oam-users/oam-admin/admin-modals/remove-student-registration-modal');
        // Page footer
        $this->load->view('templates/footer');
    }

    /**
     * register_students function.
     * 
     * @access public
     * @return render student registration of subjects and schedule
     */
    public function register_students(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data['subheader'] = array('title'=>'Register Students','icon'=>'fa fa-user-o');
        // Necessary page data
        // Current Batch Year
        $data['batch_year']  = $this->batch_year_model->getBatchCurrentYear();
        // Options for "Student" dropdown field
        $data['students']    = $this->student_model->getStudents('a',array('status'=>'1'));
        // Options for "Subject" dropdown field
        $data['subjects']    = $this->subject_model->getSubjects('a',array('status'=>'1'));
        // Option for "Room" dropdown field
        $data['rooms']       = $this->room_model->getRooms('a',array('status'=>'1'));
        // Option for "Vocational Program" dropdown field
        $data['voc_program'] = $this->vocational_program_model->getVocationalPrograms('a',array('status'=>'1'));
        // Page headers
        $this->load->view('templates/header');
        $this->load->view('templates/header-bar');
        $this->load->view('oam-users/oam-admin/admin-menu/menu-student');
        $this->load->view('templates/content-inner');
        $this->load->view('templates/subheader-bar',$data);
        // Flash data messages
        $this->load->view('templates/flashdata/flashdata-success');
        $this->load->view('templates/flashdata/flashdata-warning');
        $this->load->view('templates/flashdata/flashdata-danger');
        // Page contents
        $this->load->view('oam-users/oam-admin/students-registration');
        // Page modals
        // your modal view here
        // Page footer
        $this->load->view('templates/footer');
    }

    /**
     * set_students function.
     * 
     * @access public
     * @return set new students
     */
    public function set_students(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = array(
            'student_no'    => $this->input->post('student_no'),
            'national_id'   => $this->input->post('national_id'),
            'email_address' => $this->input->post('email_address'),
            'mobile_no'     => $this->input->post('mobile_no'),
            'english_name'  => $this->input->post('english_name'),
            'arabic_name'   => $this->input->post('arabic_name'),
            'nationality'   => $this->input->post('nationality')
        );
        $n_data = $this->crud->insertBatchvalidateAndRemoveDuplicateData($data,'','student_no','','tbl2');
        $insert = $this->crud->insertBatch($n_data,array('student_no'),array('created_by'=>$this->session->userdata('u_id')),'tbl2');
        if($insert){
            $this->user_model->recordLogs('Register students',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'Students has been registered!.');
            echo "SUCCESS!";
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
        }
        redirect('student_registration');
    }

    /**
     * student_activate_deactivate function.
     * 
     * @access public
     * @return process activation or deactivation request
     */
    public function student_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate student
            $data = array('student_id'=>$this->input->post('student_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_id')),'student_id','tbl2');
            $this->user_model->recordLogs('Deactivate student record',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Subject(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Activate student
            $data = array('student_id'=>$this->input->post('student_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_id')),'student_id','tbl2');
            $this->user_model->recordLogs('Activate student record',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Subject(s) has been activated');
        }
        redirect('students');
    }

    /**
     * get_student function.
     * 
     * @access public
     * @return process get student request by id
     */
    public function get_student($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->student_model->getStudents('s',array('student_id'=>$id));
        echo json_encode($data);
    }

    /**
     * student_update function.
     * 
     * @access public
     * @return process update student request
     */
    public function student_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert   = 'alert alert-success';
        $msg     = 'Student has been updated!';
        $stud_id = $this->input->post('student_id');
        $data    = array(
            'student_no'    => trim($this->input->post('student_no')),
            'national_id'   => trim($this->input->post('national_id')),
            'email_address' => trim($this->input->post('email_address')),
            'mobile_no'     => trim($this->input->post('mobile_no')),
            'english_name'  => trim($this->input->post('english_name')),
            'arabic_name'   => trim($this->input->post('arabic_name')),
            'nationality'   => trim($this->input->post('nationality'))
        );
        $condition = array('student_id !=' => $stud_id);
        if(!empty($data['student_no']) && !empty($data['national_id']) && !empty($data['email_address']) && !empty($data['mobile_no'])){
            if(($this->crud->isDataValid(array('student_no' => $data['student_no']),$condition,'tbl2')==TRUE) 
                && ($this->crud->isDataValid(array('email_address' => $data['email_address']),$condition,'tbl2')==TRUE) 
                && ($this->crud->isDataValid(array('mobile_no' => $data['mobile_no']),$condition,'tbl2')==TRUE)){
                $cond = array('student_id'=>$stud_id);
                $this->crud->updateData($data,$cond,'tbl2');
                $this->user_model->recordLogs('Update Student Information',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-danger';
                $msg   = 'Student has not been updated due to invalid input.';
            }
        }else{
            $alert = 'alert alert-warning';
            $msg   = 'Student has not been updated due to empty required fields.';
        }
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

    /**
     * set_students_subjects function.
     * 
     * @access public
     * @return set student subjects and schedules
     */
    public function set_students_subjects(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $student_subject = array(
            'student_id'    => trim($this->input->post('student_id')),
            'subject'       => trim($this->input->post('subject')),
            'subject_code'  => trim($this->input->post('subject_code')),
            'time'          => $this->input->post('time'),
            'room'          => trim($this->input->post('room')),
            'day'           => trim($this->input->post('day')),
            'vocational_program' => trim($this->input->post('vocational_program')),
            'batch_year'    => $this->input->post('batch_year'),
            'created_by'    => $this->session->userdata('u_id')
        );
        $schedule = array(
            'subject_id'    => $student_subject['subject'],
            'subject_code'  => $student_subject['subject_code'],
            'room_id'       => $student_subject['room'],
            'day'           => $student_subject['day'],
            'time'          => $student_subject['time'],
            'batch_year_id' => $student_subject['batch_year'],
        );
        $validate_subject = $this->student_model->isSubjectValid($student_subject);
        if($validate_subject==TRUE){
            $process_schedule = $this->student_model->processStundentSchedule($schedule);
            if($process_schedule==TRUE){
                $count = $this->crud->getData('','c',$schedule,'tbl9');
                if($count <= 25){
                    $this->crud->setData($student_subject,'','tbl9');
                    $this->user_model->recordLogs('Register New Student Subject and Schedule',$this->session->userdata('u_id'));
                    $this->session->set_flashdata('success','Student has been successfully registered!.');
                }else{
                    $this->session->set_flashdata('warning','Subject Code have reached its maximum enlistment capacity (25 Students). Student will not be registered!.');
                }
            }else{
                $this->session->set_flashdata('danger','Student has not been registered! due to conflict of room schedule.');
            }
        }else{
            $this->session->set_flashdata('danger','Student is not allowed to have Duplicate "Subject" and "Subject Code".');
        }
        redirect('register_students');
    }

    public function set_students_subjects_s(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $students = $this->input->post('student_id');
        $student_subject = array(
            'subject'       => $this->input->post('subject'),
            'subject_code'  => trim($this->input->post('subject_code')),
            'time'          => $this->input->post('time'),
            'room'          => $this->input->post('room'),
            'day'           => $this->input->post('day'),
            'vocational_program' => $this->input->post('vocational_program'),
            'batch_year'    => $this->input->post('batch_year'),
            'created_by'    => $this->session->userdata('u_id')
        );
        $schedule = array(
            'subject_id'    => $student_subject['subject'],
            'subject_code'  => $student_subject['subject_code'],
            'room_id'       => $student_subject['room'],
            'day'           => $student_subject['day'],
            'time'          => $student_subject['time'],
            'batch_year_id' => $student_subject['batch_year'],
        );
        
        $valid_students = $this->student_model->validateStudentsSubject($students,$student_subject);
        if(count($valid_students) > 0){
            $process_schedule = $this->student_model->processStundentSchedule($schedule);
            if($process_schedule==TRUE){
                $con = array(
                    'subject'       => $student_subject['subject'],
                    'subject_code'  => $student_subject['subject_code'],
                    'room'          => $student_subject['room'],
                    'day'           => $student_subject['day'],
                    'time'          => $student_subject['time'],
                    'batch_year'    => $student_subject['batch_year'],
                );
                $count = $this->crud->getData('','c',$con,'tbl9') + count($valid_students);
                if($count <= 25){
                    $this->crud->setDataBatch(array('student_id'=>$valid_students),$student_subject,'tbl9');
                    $this->user_model->recordLogs('Register New Student Subject and Schedule',$this->session->userdata('u_id'));
                    $this->session->set_flashdata('success','Student has been successfully registered!.');
                }else{
                    $diff = $count - 25;
                    $this->session->set_flashdata('warning','Subject Code will/have reached its 25 enlistment capacity ('.$diff.' left). Students will not be registered!.');
                }
            }else{
                $this->session->set_flashdata('danger','Students has not been registered! due to conflict of room schedule.');
            }
        }else{
            $this->session->set_flashdata('danger','Error occured!.');
        }
        redirect('register_students');
    }

    /**
     * get_student_registration function.
     * 
     * @access public
     * @return get student registration information with schedule for the current batch year
     */
    public function get_student_registration($id = NULL,$batch_year){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $conn = array(
            '`student_subject`.`batch_year`'=>$batch_year,
            '`student_subject`.`student_id`'=>$id
        );
        $data = $this->student_model->getEnrolledStudent($conn,'s');
        echo json_encode($data);
    }

    /**
     * student_remove_registration function.
     * 
     * @access public
     * @return remove student registration
     */
    public function student_remove_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $this->crud->deleteData(array('tbl_id'=>$this->input->post('tbl_id')),'tbl9');
        $this->user_model->recordLogs('Remove Student Registration',$this->session->userdata('u_id'));
        echo json_encode(array("status"=>TRUE));
    }

    /**
     * import_student function.
     * 
     * @access public
     * @return import students registration
     */
    public function import_students(){
        if($this->input->post('import_student')){
            var_dump(ROOT_UPLOAD_IMPORT_PATH);
        }
        // var_dump($this->input->post('file'));
    }


}