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
        $data['header'] = array('title'=>'Template Reference','icon'=>'ion-ios-speedometer-outline');
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
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));   
        // Header bar title and icon
        $data['header'] = array('title'=>'Students','icon'=>'ios-people-outline');
        // Necessary page data
        $data['students']  = $this->student_model->getStudents('a','');
        // Page headers
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

    public function student($student_id = NULL){
        // user credentials authentication
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // $this->output->enable_profiler(TRUE);
        // Necessary page data
        // student info
        $data['student'] = $this->student_model->getStudents('s',array('student_id'=>$student_id));
        // student subjects and schedule
        $data['sub_sched'] = $this->student_model->getStudentSubjects(array('student_id'=>$student_id),'a');
        // diploma courses
        $data['diploma'] = $this->diploma_course_model->getDiplomaCourses('a',array('status'=>'1'));
        // vocational programs
        $data['voc_program'] = $this->vocational_program_model->getVocationalPrograms('a',array('status'=>'1'));
        // subjects
        $data['subjects'] = $this->subject_model->getSubjects('a',array('status'=>'1'));
        // rooms
        $data['rooms'] = $this->room_model->getRooms('a',array('status'=>'1'));
        // student skills
        $data['craft'] = $this->crud->getDataWithSort('','a',array('student_id'=>$student_id),'craft_skill ASC','tbl10');
        $data['core']  = $this->crud->getDataWithSort('','a',array('student_id'=>$student_id),'core_skill ASC','tbl12');
        $data['eng']   = $this->crud->getData('','s',array('student_id'=>$student_id),'tbl8');
        // Page headers and navigation
        $this->load->view('templates/html-comp/sis-header');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/sis-edit',$data);
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
            'national_id'       => $this->input->post('national_id'),
            'email_address'     => trim($this->input->post('email_address')),
            'mobile_no'         => $this->input->post('mobile_no'),
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
            'guardian_contact'  => $this->input->post('guardian_contact'),
            'student_created_by'=> $this->session->userdata('u_fullname')
        );
        // check type of course and set vocational or diploma course
        if($student['type_of_course']=='Vocational'){
            $student['vocational_course'] = $this->input->post('vocational_course');
        }
        if($student['type_of_course']=='Diploma'){
            $student['diploma_course'] = $this->input->post('diploma_course');
        }
        $verify_student_no  = $this->student_model->isValidUniqueKey(array('student_no'=>$student['student_no']),'tbl2');
        $verify_national_id = $this->student_model->isValidUniqueKey(array('national_id'=>$student['national_id']),'tbl2');
        $verify_email       = $this->student_model->isValidUniqueKey(array('email_address'=>$student['email_address']),'tbl2');
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
                // $subjects = $this->crud->insertBatchvalidateAndRemoveDuplicateData($subjects,'','subject',array('student_id'=>$insert),'tbl9');
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
                $craft = array('craft_id'=>'','craft_rating'=>$this->input->post('craft_rating'),'craft_skill'=>$this->input->post('craft_skill'));
                $this->student_model->insertOrUpdateStudentCraft($craft,$insert);
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created craft rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));


                // set core rating and skill
                $core = array('core_id'=>'','core_rating'=>$this->input->post('core_rating'),'core_skill'=>$this->input->post('core_skill'));
                $this->student_model->insertOrUpdateStudentCore($core,$insert);
                $this->user_model->recordLogs($this->session->userdata('u_fullname').' Created core rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));
            }else{
                $msg_type= 'danger';
                $message = 'Internal Server Error!.';
            }
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
     * set_students function.
     * 
     * @access public
     * @return set new students
     */
    public function update_student(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // set flash data message
        $msg_type= 'success';
        $message = 'Success! Student Information has been updated!.';
        $student_id = $this->input->post('student_id');
        // student data
        $student = array(
            'student_no'        => trim($this->input->post('student_no')),
            'national_id'       => $this->input->post('national_id'),
            'email_address'     => trim($this->input->post('email_address')),
            'mobile_no'         => $this->input->post('mobile_no'),
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
            'guardian_contact'  => $this->input->post('guardian_contact'),
            'student_updated_by'=> $this->session->userdata('u_fullname')
        );
        // check type of course and set vocational or diploma course
        if($student['type_of_course']=='Vocational'){
            $student['vocational_course'] = $this->input->post('vocational_course');
        }
        if($student['type_of_course']=='Diploma'){
            $student['diploma_course'] = $this->input->post('diploma_course');
        }
        $verify_student_no  = $this->student_model->isValidUniqueKey(array('student_no'=>$student['student_no'],'student_id !='=>$student_id),'tbl2');
        $verify_national_id = $this->student_model->isValidUniqueKey(array('national_id'=>$student['national_id'],'student_id !='=>$student_id),'tbl2');
        $verify_email       = $this->student_model->isValidUniqueKey(array('email_address'=>$student['email_address'],'student_id !='=>$student_id),'tbl2');
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
            $update = $this->crud->updateData($student,array('student_id'=>$student_id),'tbl2');
            // record student registration in history logs
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Update Student Information',$this->session->userdata('u_id'));
            // student subjects and schedule data
            $subjects = array(
                'tbl_id'  => $this->input->post('tbl_id'),
                'subject' => $this->input->post('subject'),
                'day'     => $this->input->post('day'),
                'time'    => $this->input->post('time'),
                'room'    => $this->input->post('room')
            );
            // insert or update student subjects and schedules
            $this->student_model->insertOrUpdateStudentSubjects($subjects,$student,$student_id);
            // update english proficiency rating
            $eng_pro = array('eng_rating' => $this->input->post('eng_rating'));
            $this->crud->updateData($eng_pro,array('student_id' => $student_id),'tbl8');
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Updated eng. pro. rating for '.$student['student_no'],$this->session->userdata('u_id'));
            // update craft rating and skill
            $craft = array('craft_rating'=>$this->input->post('craft_rating'),'craft_skill'=>$this->input->post('craft_skill'),'craft_id'=>$this->input->post('craft_id'));
            $this->student_model->insertOrUpdateStudentCraft($craft,$student_id);
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Updated craft rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));
            // update core rating and skill
            $core = array('core_rating'=>$this->input->post('core_rating'),'core_skill'=>$this->input->post('core_skill'),'core_id'=>$this->input->post('core_id'));
            $this->student_model->insertOrUpdateStudentCore($core,$student_id);
            $this->user_model->recordLogs($this->session->userdata('u_fullname').' Updated core rating and skill for '.$student['student_no'],$this->session->userdata('u_id'));
        }else{
            $msg_type= 'danger';
            $message = 'Error occured due to ';
            ($verify_student_no===FALSE)?$message.='Invalid `Student No.` ':'';
            ($verify_national_id===FALSE)?$message.='Invalid `National Id` ':'';
            ($verify_email===FALSE)?$message.='Invalid `Email` ':'';
        }
        // set flash data message and redirect
        $this->session->set_flashdata($msg_type,$message);
        redirect('student/'.$student_id);
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
        $student_subjects = $this->student_model->getStudentSubjects(array('student_id'=>$student_id),'a');
        $student_craft = $this->crud->getDataWithSort('','a',array('student_id'=>$student_id),'craft_skill ASC','tbl10');
        $student_core  = $this->crud->getDataWithSort('','a',array('student_id'=>$student_id),'core_skill ASC','tbl12');
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
                            <td>Personal Details</td>
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
                                <td>English Name:</td>
                                <td>'.$student['english_name'].'</td>
                            </tr>
                            <tr>
                                <td>Address:</td>
                                <td>'.$student['address'].'</td>
                            </tr>
                        </table><br><br><br>

                        <table>
                            <tr style="font-size:20px;color:blue;">
                                <td>Subjects and schedules</td>
                            </tr>
                            <tr>
                                <td cellspacing="1" style="width:100%;border-top:3px #000000 solid;"> </td>
                            </tr>
                        </table>

                        <table border="0">
                            <tr>
                                <td><b>Subject</b></td>
                                <td><b>Room</b></td>
                                <td><b>Day</b></td>
                                <td><b>Time</b></td>
                            </tr>';

                            for ($i=0; $i < count($student_subjects); $i++) { 
                                $html .= '
                                    <tr>
                                        <td>'.$student_subjects[$i]['subject_title'].'</td>
                                        <td>'.$student_subjects[$i]['room_name'].'</td>
                                        <td>'.$student_subjects[$i]['day'].'</td>
                                        <td>'.$this->student_model->transformScheduleRange($student_subjects[$i]['time']).'</td>
                                    </tr>';
                            }
                            
                        
            $html .=   '</table>

                        <br><br><br>
                        <table>

                            <tr style="font-size:20px;color:blue;">
                                <td>Skills Accumulated</td>
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
                        <table>';

                        for ($i=0; $i < count($student_craft); $i++) { 
                            $html .='<tr>
                                    <td style="width:7%;">Skills:</td>
                                    <td style="width:10%;">'.$student_craft[$i]['craft_skill'].'</td>
                                    <td style="width:10%;">Rating:</td>
                                    <td>'.$student_craft[$i]['craft_rating'].'</td>
                                </tr>';
                        }
                        
                $html .='</table><br><br>

                        <table>
                            <tr>
                                <td><b>Core</b></td>
                            </tr>
                        </table>
                        <table>';

                            for ($i=0; $i < count($student_core); $i++) { 
                            $html .='<tr>
                                        <td style="width:7%;">Skills:</td>
                                        <td style="width:10%;">'.$student_core[$i]['core_skill'].'</td>
                                        <td style="width:10%;">Rating:</td>
                                        <td>'.$student_core[$i]['core_rating'].'</td>
                                    </tr>';
                            }

                $html .='</table>
                    </table>

                </td>
                <td style="width:25%;">
                    
                    <table>
                        <tr>
                            <td align="right">';
                            $file_path = base_url('uploads/students_images/'.$student['id_picture']);
                            if(!empty($student['id_picture'])){
                                $html .= '<img border="1" width="140px" height="140px" src="'.$file_path.'" >';
                            }else{
                                $html .= '<img border="1" width="140px" height="140px" src="'.base_url('uploads/students_images/not-available.png').'" >';
                            }
        $html .='           </td>
                        </tr>
                        <tr align="right"><td></td></tr>
                        <tr align="right">
                            <td color="blue">'.$student['email_address'].'</td>
                        </tr>
                        <tr align="right">
                            <td>'.date('F d, Y',strtotime($student['date_of_birth'])).'</td>
                        </tr>
                        <tr align="right">
                            <td>'.$student['mobile_no'].'</td>
                        </tr>
                        <tr align="right">
                            <td>'.$student['nationality'].'</td>
                        </tr>

                        <tr>
                            <td></td>
                        </tr>
                        <tr align="right">
                            <td><b>Guardian</b></td>
                        </tr>
                        <tr align="right">
                            <td>'.$student['guardian_name'].'</td>
                        </tr>
                        <tr align="right">
                            <td>'.$student['guardian_contact'].'</td>
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