<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/

// Normal routing rule
// $route['your-own-routing-name'] = 'class/method';
// Routing rule with designated parameter
// $route['your-own-routing-name/(:num)'] = 'class/method/$1';
// $route['your-own-routing-name/(:any)'] = 'class/method/';

// Login
$route['login']  = 'user/user_login';
$route['logout'] = 'user/user_logout';
$route['change_password'] = 'user/user_change_password';
$route['user_cp'] = 'user/user_cp';

// User
$route['user_profile'] = 'user/user_profile';

// Admin routing rules
$route['dashboard'] 			= 'admin/admin_dashboard';
$route['admin_security']  		= 'admin/admin_security';

$route['users'] 	  	    	= 'user/users';
$route['user_registration']		= 'user/user_register';

$route['history']	  			= 'admin/admin_history';
$route['history/(:num)']		= 'admin/admin_history/$1';

$route['vocational_programs']	= 'vocational_program/vocational_programs';
$route['new_vocational_program']= 'vocational_program/new_vocational_program';

$route['subjects']				= 'subject/subjects';
$route['new_subject']			= 'subject/new_subject';

$route['craft']					= 'craft/craft';
$route['new_craft']				= 'craft/new_craft';

$route['core']					= 'core/core';
$route['new_core']				= 'core/new_core';

$route['company']				= 'company/company';
$route['new_company']			= 'company/new_company';

$route['rooms']				 	= 'room/rooms';
$route['new_room']		 		= 'room/new_room';

$route['diploma_courses']		= 'diploma_course/diploma_courses';
$route['new_diploma_course']	= 'diploma_course/new_diploma_course';

$route['student_registration']	= 'student/student_registration';
$route['students']				= 'student/students';
$route['students/(:num)']		= 'student/students/$1';
$route['student/(:num)']		= 'student/student/$1';
$route['student_skills/(:num)'] = 'student/student_skills/$1';

// Error page
$route['error_401']				= 'admin/error_401';


// ------------------------------------------------------------------- //

$route['batch_year']				= 'batch_year/current_batch_year';
$route['register_student']			= 'student/student_enrollment_registration';
$route['register_students']			= 'student/register_students';
$route['subject_assigning']			= 'subject/subject_assigning';
$route['attendance_report']			= 'admin/attendance_report';
$route['student_import_registration']='student/student_import_registration';


// Faculty routing rules
$route['faculty_dashboard'] 		= 'faculty/faculty_dashboard';
$route['faculty_assigned_subjects']	= 'faculty/faculty_assigned_subjects';
$route['faculty_attendance/(:num)'] = 'faculty/faculty_attendance/$1';
$route['faculty_attendance_records']= 'faculty/faculty_attendance_records';

// Unauthorized Error page
$route['unauthorized_access']		= 'faculty/unauthorized_access';

// ------------------------------------------------------------------- //


$route['default_controller'] = 'user/user_login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
