<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class Admin extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper("url");
        $this->load->library("pagination");
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
        $this->load->model('admin_model');
        $this->load->model('vocational_program_model');
        $this->load->model('user_model');
        if($this->session->userdata('u_designation')=='Program Head'):
        $this->session->set_flashdata('warning','Be inform that you are not allowed to make any modification/changes on system data.');
        endif;
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
     * admin_dashboard function.
     * 
     * @access public
     * @return render admin dashboard
     */
    public function admin_dashboard(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $data['header'] = array('title'=>'Dashboard','icon'=>'ios-speedometer-outline');
        // Necessary page data
        $data['registered'] = $this->crud->getData('','c',array('status'=>'1'),'tbl2');
        $data['graduated']  = $this->crud->getData('','c',array('ramarks'=>'Graduated'),'tbl2');
        $data['ongoing']    = $this->crud->getData('','c',array('ramarks'=>'Ongoing'),'tbl2');
        $data['terminated'] = $this->crud->getData('','c',array('ramarks'=>'Terminated'),'tbl2');
        $data['expulsion']  = $this->crud->getData('','c',array('ramarks'=>'Expulsion'),'tbl2');
        $data['resigned']   = $this->crud->getData('','c',array('ramarks'=>'Resigned'),'tbl2');
        $data['withdraw']   = $this->crud->getData('','c',array('ramarks'=>'Withdraw'),'tbl2');
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

        // History table count
        $data['count'] = $this->crud->count_table_rows('','tbl4');
        // Set pagination config
        $config = $this->crud->pagination_config(200,$data['count'],'history',2);
        // initialize pagination
        $this->pagination->initialize($config);
        // set start query page
        $page = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
        // paginiation links
        $data["links"] = $this->pagination->create_links();

        // Necessary page data
        $data['history'] = $this->admin_model->get_history_logs('','`history_logs`.`created` DESC',$config["per_page"],$page);
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
     * error_401 function.
     * 
     * @access public
     * @return render error 401 page
     */
    public function error_401(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/error_page/error401');
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