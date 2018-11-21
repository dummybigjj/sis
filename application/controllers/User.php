<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * User Management class created by CodexWorld
 */
class User extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('crud');
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
     * user_login function.
     * 
     * @access public
     * @return render user login form
     */
    public function user_login(){
        // Is user already logged in
        if($this->session->userdata('isLoggedIn')){
            redirect('user/user_role');
        }
        // Page headers
        $this->load->view('templates/html-comp/header');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-login/login');
        // Page modals
        // Page footer
    }

    /**
     * user_change_password function.
     * 
     * @access public
     * @return render user change password form
     */
    public function user_change_password(){
        $this->crud->credibilityAuthChangePassword();
        // Page headers
        $this->load->view('templates/html-comp/header');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-login/change_password');
        // Page modals
        // Page footer
    }

    /**
     * users function.
     * 
     * @access public
     * @return render list of users
     */
    public function users(){
        $this->crud->credibilityAuth(array('Administrator'));
        // $this->output->enable_profiler(TRUE);
        $data['header'] = array('title'=>'User','icon'=>'ios-person-outline');
        // Necessary page data here
        $data['users'] = $this->user_model->getUsers('a','');        
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/users',$data);
        // Page modals
        $this->load->view('sis-users/sis-admin/admin-modals/view-user');
        $this->load->view('sis-users/sis-admin/admin-modals/edit-user');
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * user_register function.
     * 
     * @access public
     * @return render user registration
     */
    public function user_register(){
        $this->crud->credibilityAuth(array('Administrator'));
        $data['header'] = array('title'=>'User Registration','icon'=>'ios-person-outline');
        // Necessary page data
        // Page headers and navigation
        $this->load->view('templates/html-comp/header');
        $this->load->view('templates/html-comp/header-bar',$data);
        $this->load->view('sis-users/sis-admin/admin-menu/menu');
        // Flash data messages
        $this->load->view('templates/html-comp/flashdata');
        // Page contents
        $this->load->view('sis-users/sis-admin/user-registration');
        // Page modals
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * user_profile function.
     * 
     * @access public
     * @return render user profile
     */
    public function user_profile(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Program Head'));
        // $this->output->enable_profiler(TRUE);
        $data['header'] = array('title'=>'User Profile','icon'=>'ios-person-outline');
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
        $this->load->view('sis-users/sis-admin/user-profile');
        // Page modals
        // Page footer
        $this->load->view('templates/html-comp/footer');
    }

    /**
     * user_save_registration function.     
     * 
     * @access public
     * @return save users
     */
    public function user_save_registration(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $password   = $this->user_model->hashUsersPassword($this->input->post('password'));
        $reset_date = $this->user_model->generatePasswordResetDate();
        $data = array(
            'u_full_name'    => $this->input->post('fname'),
            'u_email_address'=> $this->input->post('email'),
            'u_password'     => $password,
            'designation'    => $this->input->post('designation')
        );
        $insert_batch = $this->crud->insertBatch($data,'',array('created_by'=>$this->session->userdata('u_email')),'tbl1');
        if($insert_batch){
            $this->user_model->recordLogs('Register users',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success', 'Users has been registered!.');
        }else{
            $this->session->set_flashdata('danger', 'Error occured!.');
        }
        redirect('user_registration');
    }

    /**
     * user_resolve_login function.     
     * 
     * @access public
     * @return process user login request
     */
    public function user_resolve_login(){
        // login procedure
        $email    = trim($this->input->post('email'));
        $password = trim($this->input->post('password'));
        $resolve  = $this->user_model->resolveUserLoginCredentials($email,$password);
        if($resolve===TRUE){
            $this->user_model->recordLogs('Login user',$this->session->userdata('u_id'));
            redirect('user/user_role');
        }else{
            $this->session->set_flashdata('danger',$resolve);
            redirect('login');
        }
    }

    /**
     * user_role function.     
     * 
     * @access public
     * @return process role and redirects
     */
    public function user_role(){
        if($this->session->userdata('isLoggedIn')===TRUE){
            if($this->session->userdata('pass_reset_date')<=date('Y-m-d H:i:s')){
                $this->session->set_flashdata('warning','Your password has been expired. Change your password again.');
                redirect('change_password');
            }else{
                redirect('dashboard');
            }
        }
        redirect('login');
    }

    /**
     * user_cp function.     
     * 
     * @access public
     * @return process change password request
     */
    public function user_cp(){
        $this->crud->credibilityAuthChangePassword();
        $password1 = trim($this->input->post('password1'));
        $password2 = trim($this->input->post('password2'));
        if($password1==$password2){
            if(strlen($password1)>=6){
                $change_pass = $this->user_model->changeUserPassword($password1);
                if($change_pass==TRUE){
                    $this->user_model->recordLogs('User change password',$this->session->userdata('u_id'));
                    $this->session->set_flashdata('success','Password has been successfully changed!.');
                    redirect('logout');
                }
                $this->session->set_flashdata('danger','Error occur!.');
                redirect('change_password');
            }
            $this->session->set_flashdata('warning','Password should be greater than or equal to 6 characters.');
            redirect('change_password');
        }
        $this->session->set_flashdata('warning','Password does not match!.');
        redirect('change_password');
    }

    /**
     * user_update_profile function.     
     * 
     * @access public
     * @return process update profile request
     */
    public function user_update_profile(){
        $this->crud->credibilityAuth(array('Administrator','Registrar','Faculty','Program Head'));
        $user_id  = $this->session->userdata('u_id');
        $name     = trim($this->input->post('name'));
        $email    = trim($this->input->post('email'));
        $password = $this->user_model->hashPassword(trim($this->input->post('password1')));
        if(!empty($name) && !empty($email)){
            // set user data
            $user_data = array(
                'u_full_name'     => $name,
                'u_email_address' => $email,
                'updated_by'      => $this->session->userdata('u_email')
            );

            // upload profile picture
            // Check whether user upload picture
            if(!empty($_FILES['picture']['name'])){
                $config['upload_path']   = 'uploads/users_images/';
                $config['allowed_types'] = 'jpg|jpeg|png';
                $config['file_name']     = $_FILES['picture']['name'];
                $config['max_width']     = 0;
                $config['max_height']    = 0;
                
                //Load upload library and initialize configuration
                $this->upload->initialize($config);
                
                if($this->upload->do_upload('picture')){
                    $upload_data = $this->upload->data();
                    $user_data['profile_pic'] = $upload_data['file_name'];
                    $this->session->set_flashdata('success','Profile picture has been updated.');
                }else{
                    $user_data['profile_pic'] = '';
                    $this->session->set_flashdata('warning','Image upload failed!.');
                }
            }

            if($this->user_model->isEmailValid($email,$this->session->userdata('u_id'))===TRUE && !empty(trim($this->input->post('password1')))){
                $user_data['u_password'] = $password;
                $this->crud->updateData($user_data,array('user_id'=>$user_id),'tbl1');
                $this->user_model->recordLogs('Update user profile',$this->session->userdata('u_id'));
                $this->session->set_flashdata('success','Profile has been successfully updated!. You have to logout and re-login to see changes made.');
            }else if($this->user_model->isEmailValid($email,$this->session->userdata('u_id'))===FALSE){
                $this->session->set_flashdata('warning','Profile has not been updated due to an email that is not valid.');
            }else{
                $this->crud->updateData($user_data,array('user_id'=>$user_id),'tbl1');
                $this->user_model->recordLogs('Update user profile',$this->session->userdata('u_id'));
                $this->session->set_flashdata('success','Profile has been successfully updated!. You have to logout and re-login to see changes made.');
            }
        }else{
            $this->session->set_flashdata('warning','Profile has not been updated due to empty required fields.');
        }
        redirect('user_profile');
    }

    /**
     * users function.
     * 
     * @access public
     * @param int $id
     * @return process get user request by id
     */
    public function get_user($id = NULL){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $data = $this->user_model->getUsers('s',array('user_id'=>$id));
        echo json_encode($data);
    }

    /**
     * user_update function.
     * 
     * @access public
     * @return process update user request
     */
    public function user_update(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        $alert   = 'alert alert-success';
        $msg     = 'User has been updated!';
        $user_id = $this->input->post('user_id');
        $data = array(
            'u_full_name'     => trim($this->input->post('name')),
            'u_email_address' => trim($this->input->post('email')),
            'designation'     => trim($this->input->post('designation')),
            'updated_by'      => $this->session->userdata('u_email')
        );
        $cond = array('user_id' => $user_id);
        if(!empty($data['u_email_address']) && !empty($data['u_full_name']) && !empty($data['designation'])){
            if($this->user_model->isEmailValid($data['u_email_address'],$user_id)==TRUE){
                $this->crud->updateData($data,$cond,'tbl1');
                $this->user_model->recordLogs('Update user information',$this->session->userdata('u_id'));
            }else{
                $alert = 'alert alert-warning';
                $msg   = 'User has not been updated due to invalid email address.';
            }
        }else{
            $alert = 'alert alert-danger';
            $msg   = 'User has not been updated due to empty required fields.';
        }
        
        echo json_encode(array("status"=>TRUE,"msg"=>$msg,"class_add"=>$alert));
    }

    /**
     * user_activate_deactivate function.
     * 
     * @access public
     * @return process activation or deactivation user request
     */
    public function user_activate_deactivate(){
        $this->crud->credibilityAuth(array('Administrator','Registrar'));
        if($this->input->post('deactivate')){
            // Deactivate users
            $data = array('user_id'=>$this->input->post('user_id'));
            $this->crud->updateDataBatch($data,array('status'=>'0','updated_by'=>$this->session->userdata('u_email')),'user_id','tbl1');
            $this->user_model->recordLogs('Deactivate users',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','User(s) has been deactivated');
        }else if($this->input->post('activate')){
            // Deactivate users
            $data = array('user_id'=>$this->input->post('user_id'));
            $this->crud->updateDataBatch($data,array('status'=>'1','updated_by'=>$this->session->userdata('u_email')),'user_id','tbl1');
            $this->user_model->recordLogs('Activate users',$this->session->userdata('u_id'));
            $this->session->set_flashdata('success','User(s) has been activated');
        }
        redirect('users');
    }

    /**
     * user_logout function.     
     * 
     * @access public
     * @return logout user
     */
    public function user_logout(){
        $userdata = array(
            'isLoggedIn',
            'u_id',
            'u_fullname',
            'u_email',
            'profile_pic',
            'u_login_attempt',
            'pass_reset_date',
            'u_designation',
            'recent_login',
            'device_name',
            'device_ip_address'
        );
        $this->user_model->recordLogs('Logout user',$this->session->userdata('u_id'));
        $this->session->unset_userdata($userdata);
        redirect('login');
    }

    public function FunctionName()
    {
        // $email    = trim($this->input->post('email'));
        // $password = trim($this->input->post('password'));
        // $resolve  = $this->user_model->resolveUserLoginCredentials($email,$password);
        // if($resolve===TRUE){
        //     $this->user_model->recordLogs('Login user',$this->session->userdata('u_id'));
        //     redirect('user/user_role');
        // }else{
        //     $this->session->set_flashdata('danger',$resolve);
        //     redirect('login');
        // }
    }

}