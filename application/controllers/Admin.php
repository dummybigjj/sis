<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('admin_model');
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
     * admin_dashboard function.
     * 
     * @access public
     * @return render admin dashboard
     */
    public function admin_dashboard(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'Dashboard','icon'=>'ios-speedometer-outline');
        // Necessary page data
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
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
     * admin_history function.
     * 
     * @access public
     * @return render admin history logs
     */
    public function admin_history(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'History Logs','icon'=>'ios-loop');
        // Necessary page data
        $data['history']= $this->admin_model->getHistoryLogs('');
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Page contents
        $this->load->view('sis-users/sis-admin/admin-history',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/view-history');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * admin_security function.
     * 
     * @access public
     * @return render admin security config
     */
    public function admin_security(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'Security Configuration','icon'=>'ios-gear-outline');
        // Necessary page data here
        $data['config'] = $this->admin_model->getSecurityConfig();
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/admin-security',$data);
        // Page modals
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * attendance_report function.
     * 
     * @access public
     * @return render admin attendance reporting
     */
    public function attendance_report(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // Subheader bar title and icon
        $data['subheader'] = array('title'=>'Batch Year Reports','icon'=>'icon-padnote');
        // Necessary page data
        $data['batch_year']  = $this->crud->getData('','a','','tbl8');
        $data['voc_program'] = $this->vocational_program_model->getVocationalPrograms('a','');
        // Page headers
        $this->load->view('templates/header');
        $this->load->view('templates/header-bar');
        $this->load->view('oam-users/oam-admin/admin-menu/menu-subject-assigning');
        $this->load->view('templates/content-inner');
        $this->load->view('templates/subheader-bar',$data);
        // Flash data messages
        $this->load->view('templates/flashdata/flashdata-success');
        $this->load->view('templates/flashdata/flashdata-warning');
        $this->load->view('templates/flashdata/flashdata-danger');
        // Page contents
        $this->load->view('oam-users/oam-admin/admin-report',$data);
        // Page modals
        $this->load->view('oam-users/oam-admin/admin-modals/generate-report-modal',$data);
        // Page footer
        $this->load->view('templates/footer');
    }

    /**
     * admin_update_security_config function.
     * 
     * @access public
     * @return process update security config action
     */
    public function admin_update_security_config(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $login_attempt = trim($this->input->post('login_attempt'));
        $soft_lock     = trim($this->input->post('soft_lock'));
        $password_age  = trim($this->input->post('password_age'));
        $update_config = $this->crud->updateData(array('max_login_attempt'=>$login_attempt,'soft_lock'=>$soft_lock,'max_password_age'=>$password_age),'','tbl3');
        if($update_config){
            $this->user_model->recordLogs('Update Security Configuration',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','Security Configuration has been updated!.');
            redirect('admin_security');
        }
        $this->session->set_flashdata('danger','Error occured!.');
        redirect('admin_security');
    }

    /**
     * get_history function.
     * 
     * @access public
     * @return array on success
     */
    public function get_history($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->admin_model->getHistoryLogsById(array('tbl_id'=>$id));
        echo json_encode($data);
    }

    /**
     * admin_generate_report function.
     * 
     * @access public
     * @return excel file report on success
     */
    public function admin_generate_report(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        // get students with vocational program
        $condition= array('vocational_program'=>$this->input->post('vocational_program'),'batch_year'=> $this->input->post('batch_year_id'));
        $range1 = $this->input->post('date_range1');
        $range2 = $this->input->post('date_range2');
        $voc_program= $this->vocational_program_model->getVocationalPrograms('s',array('voc_program_id'=>$condition['vocational_program']));
        $students   = $this->admin_model->getStudentsBasicInfo($condition,'a');
        $attendance = $this->admin_model->getStudentDailyAttendanceRecord($students,$range1,$range2,$condition['batch_year']);
        
        if((!empty($condition['vocational_program']) && !empty($range1) && !empty($range2)) && ($range1 <= $range2)){
            if(!empty($attendance)){
                // file name 
                $delimiter = ",";
                $filename = "thiep_attendance_report" . date('Ymd His') . ".csv";
                
                //create a file pointer
                $f = fopen('php://memory', 'w');

                $fields = array();
                fputcsv($f, $fields, $delimiter);
                //set report basic info
                $fields = array('','Attendance Report', 'THIEP');
                fputcsv($f, $fields, $delimiter);
                $fields = array('','Vocational Program: ', $voc_program['voc_program'].' - '.$voc_program['voc_program_acronym']);
                fputcsv($f, $fields, $delimiter);
                $fields = array('','Report Date Range: ', $range1.' - '.$range2);
                fputcsv($f, $fields, $delimiter);
                
                //set column headers
                $fields = array();
                fputcsv($f, $fields, $delimiter);
                $fields = array('','STUDENT NO.', 'STUDENT NAME', 'TOTAL ABSENCES', 'TOTAL LATES', 'REMARKS');
                fputcsv($f, $fields, $delimiter);

                for ($i=0; $i < count($attendance); $i++) { 
                    $lineData = array('',$attendance[$i]['student_no'],$attendance[$i]['arabic_name'],$attendance[$i]['absences'],$attendance[$i]['lates'],$attendance[$i]['remarks']);
                    fputcsv($f, $lineData, $delimiter);
                }

                //move back to beginning of file
                fseek($f, 0);
                
                //set headers to download file rather than displayed
                header('Content-Type: text/csv');
                header('Content-Disposition: attachment; filename="' . $filename . '";');
                
                //output all remaining data on a file pointer
                fpassthru($f);
                exit;
            }
            $this->session->set_flashdata('warning', 'No reports found!.');
            redirect('attendance_report');
        }
        $this->session->set_flashdata('danger', 'Invalid input.');
        redirect('attendance_report');
        
    }

}