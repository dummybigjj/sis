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
        $this->load->model('subject_model');
        $this->load->model('room_model');
        $this->load->model('vocational_program_model');
        $this->load->model('diploma_course_model');
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

    /**
     * students function.
     * 
     * @access public
     * @return render students table
     */
    public function students(){
        // user credentials authentication
        $this->crud->credibilityAuth(array('Administrator','Registrar'));   
        // Header bar title and icon
        $data['header'] = array('title'=>'User','icon'=>'ios-people-outline');
        // Necessary page data
        $data['students']  = $this->student_model->getStudents('a','');
        // Page headers
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/students',$data);
        // Page modals
        // $this->load->view('oam-users/oam-admin/admin-modals/view-student-modal');
        // $this->load->view('oam-users/oam-admin/admin-modals/edit-student-modal');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

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
        // diploma courses
        $data['diploma'] = $this->diploma_course_model->getDiplomaCourses('a',array('status'=>'1'));
        // vocational programs
        $data['voc_program'] = $this->vocational_program_model->getVocationalPrograms('a',array('status'=>'1'));
        // subjects
        $data['subjects'] = $this->subject_model->getSubjects('a',array('status'=>'1'));
        // rooms
        $data['rooms'] = $this->room_model->getRooms('a',array('status'=>'1'));
        // Page headers and navigation
        $this->load->view('templates/html-comp/sis-header');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/sis-registration',$data);
        // Page modals
        // Page footer
    }

    /**
     * set_students function.
     * 
     * @access public
     * @return set new students
     */
    public function create_student(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // set flash data message
        $msg_type= 'success';
        $message = 'Success! Student has been registered!.';
        // student data
        $student = array(
            'student_no'        => trim($this->input->post('student_no')),
            'national_id'       => trim($this->input->post('national_id')),
            'email_address'     => trim($this->input->post('email_address')),
            'mobile_no'         => trim($this->input->post('mobile_no')),
            'english_name'      => trim($this->input->post('english_name')),
            'arabic_name'       => trim($this->input->post('arabic_name')),
            'nationality'       => trim($this->input->post('nationality')),
            'company'           => trim($this->input->post('company')),
            'type_of_course'    => trim($this->input->post('type_of_course')),
            'training_start'    => trim($this->input->post('training_start')),
            'training_end'      => trim($this->input->post('training_end')),
            'address'           => trim($this->input->post('address')),
            'date_of_birth'     => $this->input->post('dob'),
            'guardian_name'     => trim($this->input->post('guardian_name')),
            'guardian_contact'  => trim($this->input->post('guardian_contact')),
            'created_by'        => $this->session->userdata('u_fullname')
        );
        // check type of course and set vocational or diploma course
        if($student['type_of_course']=='Vocational'){
            $student['vocational_course'] = $this->input->post('vocational_course');
        }
        if($student['type_of_course']=='Diploma'){
            $student['diploma_course'] = $this->input->post('diploma_course');
        }
        $verify_student_no  = $this->student_model->isStudentNumberValid($student['student_no']);
        $verify_national_id = $this->student_model->isStudentNationalIdValid($student['national_id']);
        $verify_email       = $this->student_model->isStudentEmailValid($student['email_address']);
        if($verify_student_no===TRUE && $verify_national_id===TRUE && $verify_email===TRUE){

            // upload student image
            // Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path']   = 'uploads/students_images/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name']     = $student['student_no'];
                $config['max_width']     = 0;
                $config['max_height']    = 0;
                
                //Load upload library and initialize configuration
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $upload_data = $this->upload->data();
                    $student['id_picture'] = $upload_data['file_name'];
                }else{
                    $student['id_picture'] = '';
                    $this->session->set_flashdata('warning','Image upload failed!.');
                }
            }

            // insert student data
            $insert = $this->crud->setData($student,'','tbl2');
            if($insert){
                // record student registration in history logs
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Register student',$this->session->userdata('u_id'));
                // student subjects and schedule data
                $subjects = array(
                    'subject'    => $this->input->post('subject'),
                    'day'        => $this->input->post('day'),
                    'time'       => $this->input->post('time'),
                    'room'       => $this->input->post('room')
                );
                // validate duplicate and remove duplicate subjects
                $subjects = $this->crud->insertBatchvalidateAndRemoveDuplicateData($subjects,'','subject',array('student_id'=>$insert),'tbl9');
                $fk = array('student_id'=>$insert,'created_by'=>$this->session->userdata('u_fullname'));
                // set student subjects
                $insert_subjects = $this->crud->insertBatch($subjects,array('subject'),$fk,'tbl9');
                // record student registration in history logs
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created subjects for '.$student['student_no'],$this->session->userdata('u_id'));

                // set english proficiency rating
                $eng_pro = array(
                    'student_id' => $insert,
                    'eng_rating' => $this->input->post('eng_rating')
                );
                $this->crud->setData($eng_pro,'','tbl8');
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created english proficiency rating for '.$student['student_no'],$this->session->userdata('u_id'));


                // set craft rating and skill
                $craft = array(
                    'student_id'    => $insert,
                    'craft_rating'  => $this->input->post('craft_rating'),
                    'craft_skill'   => $this->input->post('craft_skill')
                );
                $this->crud->setData($craft,'','tbl10');
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created craft rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));


                // set core rating and skill
                $core = array(
                    'student_id'   => $insert,
                    'core_rating'  => $this->input->post('core_rating'),
                    'core_skill'   => $this->input->post('core_skill')
                );
                $this->crud->setData($core,'','tbl12');
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created core rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));
            }
            $msg_type= 'danger';
            $message = 'Internal Server Error!.';
        }else{
            $msg_type= 'danger';
            $message = 'Error occured due to ';
            ($verify_student_no===FALSE)?$message.='Invalid `Student No.` ':'';
            ($verify_national_id===FALSE)?$message.='Invalid `National Id` ':'';
            ($verify_email===FALSE)?$message.='Invalid `Email` ':'';
        }
        // set flash data message and redirect
        $this->session->set_flashdata($msg_type,$message);
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
            $this->crud->updateDataBatch($data,array('student_status'=>'0','student_updated_by'=>$this->session->userdata('u_id')),'student_id','tbl2');
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Deactivate Students',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Students has been deactivated');
        }else if($this->input->post('activate')){
            // Activate student
            $data = array('student_id'=>$this->input->post('student_id'));
            $this->crud->updateDataBatch($data,array('student_status'=>'1','student_updated_by'=>$this->session->userdata('u_id')),'student_id','tbl2');
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Activate Students',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Students has been activated');
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

    // /**
    //  * set_students_subjects function.
    //  * 
    //  * @access public
    //  * @return set student subjects and schedules
    //  */
    // public function set_students_subjects(){
    //     $this->crud->credibilityAuth(array('Administrator','Registrar'));
    //     $student_subject = array(
    //         'student_id'    => trim($this->input->post('student_id')),
    //         'subject'       => trim($this->input->post('subject')),
    //         'subject_code'  => trim($this->input->post('subject_code')),
    //         'time'          => $this->input->post('time'),
    //         'room'          => trim($this->input->post('room')),
    //         'day'           => trim($this->input->post('day')),
    //         'vocational_program' => trim($this->input->post('vocational_program')),
    //         'batch_year'    => $this->input->post('batch_year'),
    //         'created_by'    => $this->session->userdata('u_id')
    //     );
    //     $schedule = array(
    //         'subject_id'    => $student_subject['subject'],
    //         'subject_code'  => $student_subject['subject_code'],
    //         'room_id'       => $student_subject['room'],
    //         'day'           => $student_subject['day'],
    //         'time'          => $student_subject['time'],
    //         'batch_year_id' => $student_subject['batch_year'],
    //     );
    //     $validate_subject = $this->student_model->isSubjectValid($student_subject);
    //     if($validate_subject==TRUE){
    //         $process_schedule = $this->student_model->processStundentSchedule($schedule);
    //         if($process_schedule==TRUE){
    //             $count = $this->crud->getData('','c',$schedule,'tbl9');
    //             if($count <= 25){
    //                 $this->crud->setData($student_subject,'','tbl9');
    //                 $this->user_model->recordLogs('Register New Student Subject and Schedule',$this->session->userdata('u_id'));
    //                 $this->session->set_flashdata('success','Student has been successfully registered!.');
    //             }else{
    //                 $this->session->set_flashdata('warning','Subject Code have reached its maximum enlistment capacity (25 Students). Student will not be registered!.');
    //             }
    //         }else{
    //             $this->session->set_flashdata('danger','Student has not been registered! due to conflict of room schedule.');
    //         }
    //     }else{
    //         $this->session->set_flashdata('danger','Student is not allowed to have Duplicate "Subject" and "Subject Code".');
    //     }
    //     redirect('register_students');
    // }

    // public function set_students_subjects_s(){
    //     $this->crud->credibilityAuth(array('Administrator','Registrar'));
    //     $students = $this->input->post('student_id');
    //     $student_subject = array(
    //         'subject'       => $this->input->post('subject'),
    //         'subject_code'  => trim($this->input->post('subject_code')),
    //         'time'          => $this->input->post('time'),
    //         'room'          => $this->input->post('room'),
    //         'day'           => $this->input->post('day'),
    //         'vocational_program' => $this->input->post('vocational_program'),
    //         'batch_year'    => $this->input->post('batch_year'),
    //         'created_by'    => $this->session->userdata('u_id')
    //     );
    //     $schedule = array(
    //         'subject_id'    => $student_subject['subject'],
    //         'subject_code'  => $student_subject['subject_code'],
    //         'room_id'       => $student_subject['room'],
    //         'day'           => $student_subject['day'],
    //         'time'          => $student_subject['time'],
    //         'batch_year_id' => $student_subject['batch_year'],
    //     );
        
    //     $valid_students = $this->student_model->validateStudentsSubject($students,$student_subject);
    //     if(count($valid_students) > 0){
    //         $process_schedule = $this->student_model->processStundentSchedule($schedule);
    //         if($process_schedule==TRUE){
    //             $con = array(
    //                 'subject'       => $student_subject['subject'],
    //                 'subject_code'  => $student_subject['subject_code'],
    //                 'room'          => $student_subject['room'],
    //                 'day'           => $student_subject['day'],
    //                 'time'          => $student_subject['time'],
    //                 'batch_year'    => $student_subject['batch_year'],
    //             );
    //             $count = $this->crud->getData('','c',$con,'tbl9') + count($valid_students);
    //             if($count <= 25){
    //                 $this->crud->setDataBatch(array('student_id'=>$valid_students),$student_subject,'tbl9');
    //                 $this->user_model->recordLogs('Register New Student Subject and Schedule',$this->session->userdata('u_id'));
    //                 $this->session->set_flashdata('success','Student has been successfully registered!.');
    //             }else{
    //                 $diff = $count - 25;
    //                 $this->session->set_flashdata('warning','Subject Code will/have reached its 25 enlistment capacity ('.$diff.' left). Students will not be registered!.');
    //             }
    //         }else{
    //             $this->session->set_flashdata('danger','Students has not been registered! due to conflict of room schedule.');
    //         }
    //     }else{
    //         $this->session->set_flashdata('danger','Error occured!.');
    //     }
    //     redirect('register_students');
    // }


    // /**
    //  * student_remove_registration function.
    //  * 
    //  * @access public
    //  * @return remove student registration
    //  */
    // public function student_remove_registration(){
    //     $this->crud->credibilityAuth(array('Administrator','Registrar'));
    //     $this->crud->deleteData(array('tbl_id'=>$this->input->post('tbl_id')),'tbl9');
    //     $this->user_model->recordLogs('Remove Student Registration',$this->session->userdata('u_id'));
    //     echo json_encode(array("status"=>TRUE));
    // }

    /**
     * student_printable function.
     * 
     * @access public
     * @return render student information printable in pdf
     */
    public function student_printable($student_id = NULL){
        // user credentials authentication
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        empty($student_id)?redirect('students'):TRUE;
        // get student info
        $student = $this->crud->getData('','s',array('student_id'=>$student_id),'tbl2');
        $student_craft = $this->crud->getData('','s',array('student_id'=>$student_id),'tbl10');
        $student_core  = $this->crud->getData('','s',array('student_id'=>$student_id),'tbl12');
        $student_pro   = $this->crud->getData('','s',array('student_id'=>$student_id),'tbl8');

        // get student diploma or vocational course
        $diploma    = $this->crud->getData('','s',array('course_id'=>$student['diploma_course']),'tbl11');
        $vocational = $this->crud->getData('','s',array('voc_program_id'=>$student['vocational_course']),'tbl6');

        //============================================================+
        // File name   : example_001.php
        // Begin       : 2008-03-04
        // Last Update : 2013-05-14
        //
        // Description : Example 001 for TCPDF class
        //               Default Header and Footer
        //
        // Author: Nicola Asuni
        //
        // (c) Copyright:
        //               Nicola Asuni
        //               Tecnick.com LTD
        //               www.tecnick.com
        //               info@tecnick.com
        //============================================================+
     
        /**
        * Creates an example PDF TEST document using TCPDF
        * @package com.tecnick.tcpdf
        * @abstract TCPDF - Example: Default Header and Footer
        * @author Nicola Asuni
        * @since 2008-03-04
        */
     
        // create new PDF document
        $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);    
     
        // set document information
        // $pdf->SetCreator(PDF_CREATOR);
        // $pdf->SetAuthor('Nicola Asuni');
        // $pdf->SetTitle('TCPDF Example 001');
        // $pdf->SetSubject('TCPDF Tutorial');
        // $pdf->SetKeywords('TCPDF, PDF, example, test, guide');   
     
        // set default header data
        // $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE.' 001', PDF_HEADER_STRING, array(0,64,255), array(0,64,128));
        // $pdf->setFooterData(array(0,64,0), array(0,64,128)); 
     
        // set header and footer fonts
        // $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        // $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));  
     
        // set default monospaced font
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED); 
     
        // set margins
        // $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        // $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        // $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);    
     
        // set auto page breaks
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM); 
     
        // set image scale factor
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  
     
        // set some language-dependent strings (optional)
        if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
            require_once(dirname(__FILE__).'/lang/eng.php');
            $pdf->setLanguageArray($l);
        }   
     
        // ---------------------------------------------------------    
     
        // set default font subsetting mode
        $pdf->setFontSubsetting(true);   
     
        // Set font
        // dejavusans is a UTF-8 Unicode font, if you only need to
        // print standard ASCII chars, you can use core fonts like
        // helvetica or times to reduce file size.
        $pdf->SetFont('times', '', 14, '', true); 

        $pdf->SetPrintHeader(false);  
     
        // Add a page
        // This method has several options, check the source code documentation for more information.
        // The array() inside AddPage method defines the size of the page
        // $pdf->AddPage('P','A4') for portrate || $pdf->AddPage('L','A4'); for Landscape
        $pdf->AddPage('P','A4'); 
     
        // set text shadow effect
        $pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
     
        // Set some content to print
        $html = '

        <table border="0">
            <tr>
                <td style="width:21%;">

                    <table border="0">
                        <tr>
                            <td align="right">
                                <img width="70px" height="70px" src="'.base_url('uploads/THIEP.png').'" >
                            </td>
                        </tr>
                    </table>

                </td>
                <td style="width:79%;">

                    <table border="0">
                        <tr style="font-size:40px;" align="left">
                            <td>Student Information Sheet</td>
                        </tr>
                        <tr style="font-size:13px;" align="left">
                            <td> TECHNICAL HIGHER INSTITUTE FOR ENGINEERING AND PETROLEUM </td>
                        </tr>
                    </table>

                </td>
            </tr>
            <tr>
                <td cellspacing="1" style="width:100%;border-top:3px #000000 solid;"> </td>
            </tr>
        </table>

        <br><br>
        <table border="0" style="width:100%;font-size:12px;">
            <tr>
                <td style="width:75%;">
                    <br><br>
                    <table border="0">
                        <tr style="font-size:35px;">
                            <td><u>'.$student['arabic_name'].'</u></td>
                        </tr>
                        <tr style="font-size:12px;">';
                            
                            if(!empty($diploma)){
                                $html .= '<td>'.$diploma['course_name'].' ('.$diploma['course_acronym'].') - '.date('F d, Y',strtotime($student['training_start'])).' to '.date('F d, Y',strtotime($student['training_end'])).'</td>';
                            }else{
                                $html .= '<td>'.$vocational['voc_program'].' ('.$vocational['voc_program_acronym'].') - '.date('F d, Y',strtotime($student['training_start'])).' to '.date('F d, Y',strtotime($student['training_end'])).'</td>';
                            }
        $html .='       </tr>

                        <tr style="font-size:12px;">
                            <td>'.$student['company'].'</td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                        </tr>

                        <tr style="font-size:20px;color:blue;">
                            <td>Student Basic and Personal Details</td>
                        </tr>
                        <tr>
                            <td cellspacing="1" style="width:100%;border-top:3px #000000 solid;"> </td>
                        </tr>


                        <table>
                            <tr>
                                <td style="width:20%;">Student Number:</td>
                                <td>'.$student['student_no'].'</td>
                            </tr>
                            <tr>
                                <td>National ID:</td>
                                <td>'.$student['national_id'].'</td>
                            </tr>
                            <tr>
                                <td>Mobile No.:</td>
                                <td>'.$student['mobile_no'].'</td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td style="color:blue;">'.$student['email_address'].'</td>
                            </tr>
                            <tr>
                                <td>Nationality:</td>
                                <td>'.$student['nationality'].'</td>
                            </tr>

                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td>English Name:</td>
                                <td>'.$student['english_name'].'</td>
                            </tr>
                            <tr>
                                <td>Date of Birth:</td>
                                <td>'.date('F d, Y',strtotime($student['date_of_birth'])).'</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>'.$student['address'].'</td>
                            </tr>
                            <tr>
                                <td></td>
                            </tr>
                            <tr>
                                <td>Guardian:</td>
                                <td>'.$student['guardian_name'].'</td>
                            </tr>
                            <tr>
                                <td>Guardian Contact:</td>
                                <td>'.$student['guardian_contact'].'</td>
                            </tr>
                        </table><br><br><br><br>

                        <table>

                            <tr style="font-size:20px;color:blue;">
                                <td>Student Skills Accumulated</td>
                            </tr>
                            <tr>
                                <td cellspacing="1" style="width:100%;border-top:3px #000000 solid;"> </td>
                            </tr>

                        </table>

                        <table>
                            <tr>
                                <td><b>English Proficiency</b></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td style="width:10%;">Rating:</td>
                                <td>'.$student_pro['eng_rating'].'</td>
                            </tr>
                        </table><br><br>

                        <table>
                            <tr>
                                <td><b>Craft</b></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td  style="width:10%;">Rating:</td>
                                <td>'.$student_craft['craft_rating'].'</td>
                            </tr>
                            <tr>
                                <td>Skills:</td>
                                <td>'.$student_craft['craft_skill'].'</td>
                            </tr>
                        </table><br><br>

                        <table>
                            <tr>
                                <td><b>Core</b></td>
                            </tr>
                        </table>
                        <table>
                            <tr>
                                <td  style="width:10%;">Rating:</td>
                                <td>'.$student_core['core_rating'].'</td>
                            </tr>
                            <tr>
                                <td>Skills:</td>
                                <td>'.$student_core['core_skill'].'</td>
                            </tr>
                        </table>

                    </table>

                    

                </td>
                <td style="width:25%;">
                    
                    <table>
                        <tr>
                            <td align="right">';
                            if(!empty($student['id_picture'])){
                                $html .= '<img border="1" width="140px" height="140px" src="'.base_url('uploads/students_images/'.$student['id_picture']).'" >';
                            }else{
                                $html .= '<img border="1" width="140px" height="140px" src="'.base_url('uploads/students_images/not-available.png').'" >';
                            }
        $html .='           </td>
                        </tr>
                    </table>

                </td>
            </tr>
        </table><br>

        ';




        $html1 = '<p style="font-size:12px;">Printed by: '.$this->session->userdata('u_fullname').'</p>';
     
        // Print text using writeHTMLCell()
        $pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
        // $pdf->writeHTMLCell(0, 0, '', '', $html1, 0, 1, 0, true, '', true);
        // ---------------------------------------------------------    
     
        // Close and output PDF document
        // This method has several options, check the source code documentation for more information.

        // $pdf->Output('example_001.pdf', 'I');  // FOR PREVIEW PURPOSES  
        return $pdf->Output('Student-Information-Sheet.pdf', 'I');   
        // D FOR FORCE DOWNLOAD 
     
        //============================================================+
        // END OF FILE
        //============================================================+
    }


}