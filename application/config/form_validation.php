<?php

$config = array(
	'students/register_student' => array(
		array(
			'field' => 'fname',
			'label' => 'FIRTS NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mname',
			'label' => 'MIDDLE NAME',
			'rules' => 'trim|max_length[60]'
		),
		array(
			'field' => 'lname',
			'label' => 'LAST NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'suffix',
			'label' => 'SUFFIX',
			'rules' => 'trim|max_length[3]'
		),
		array(
			'field' => 'course',
			'label' => 'PREFERRED COURSE',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthday',
			'label' => 'BIRTHDAY',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthplace',
			'label' => 'BIRTHPLACE',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'gender',
			'label' => 'GENDER',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'religion',
			'label' => 'RELIGION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'contact',
			'label' => 'CONTACT NO',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'trim|required|max_length[60]|valid_email|callback_email_check'
		),
		array(
			'field' => 'perm_address',
			'label' => 'PERMANENT ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'prov_address',
			'label' => 'PROVINCIAL ADDRESS',
			'rules' => 'trim|max_length[100]'
		),
		array(
			'field' => 'mail_address',
			'label' => 'MAILING ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'father_name',
			'label' => 'FATHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'father_age',
			'label' => 'FATHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'father_occupation',
			'label' => 'FATHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_name',
			'label' => 'MOTHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_age',
			'label' => 'MOTHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'mother_occupation',
			'label' => 'MOTHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'guardian_name',
			'label' => 'GUARDIAN NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'guardian_age',
			'label' => 'GUARDIAN AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'guardian_occupation',
			'label' => 'GUARDIAN OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'notify_on_emergency',
			'label' => 'PERSON TO NOTIFY IN CASE OF EMERGENCY',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'emergency_no',
			'label' => 'EMERGENCY NO.',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'secondary_education',
			'label' => 'SECONDARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'secondary_year_graduated',
			'label' => 'SECONDARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'elementary_education',
			'label' => 'ELEMENTARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'elementary_year_graduated',
			'label' => 'ELEMENTARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'honor_award[]',
			'label' => 'HONORS / AWARDS RECEIVED',
			'rules' => 'trim|max_length[75]'
		),
		array(
			'field' => 'affiliation',
			'label' => 'ORGANIZATION AFFILIATED WITH',
			'rules' => 'trim|max_length[90]'
		),
		array(
			'field' => 'school_last_attended',
			'label' => 'SHOOL LAST ATTENDED',
			'rules' => 'trim|max_length[90]'
		),
		array(
			'field' => 'year_last_attended',
			'label' => 'YEAR LAST ATTENDED',
			'rules' => 'trim|numeric|exact_length[4]'
		),
		array(
			'field' => 'reason_for_leaving',
			'label' => 'REASON FOR LEAVING',
			'rules' => 'trim|max_length[100]'
		)
	),
	'students/register_cross_enrollee' => array(
		array(
			'field' => 'fname',
			'label' => 'FIRTS NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mname',
			'label' => 'MIDDLE NAME',
			'rules' => 'trim|max_length[60]'
		),
		array(
			'field' => 'lname',
			'label' => 'LAST NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'suffix',
			'label' => 'SUFFIX',
			'rules' => 'trim|max_length[3]'
		),
		array(
			'field' => 'course',
			'label' => 'PREFERRED COURSE',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthday',
			'label' => 'BIRTHDAY',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthplace',
			'label' => 'BIRTHPLACE',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'gender',
			'label' => 'GENDER',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'religion',
			'label' => 'RELIGION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'contact',
			'label' => 'CONTACT NO',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'trim|required|max_length[60]|valid_email|callback_email_check'
		),
		array(
			'field' => 'perm_address',
			'label' => 'PERMANENT ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'prov_address',
			'label' => 'PROVINCIAL ADDRESS',
			'rules' => 'trim|max_length[100]'
		),
		array(
			'field' => 'mail_address',
			'label' => 'MAILING ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'father_name',
			'label' => 'FATHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'father_age',
			'label' => 'FATHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'father_occupation',
			'label' => 'FATHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_name',
			'label' => 'MOTHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_age',
			'label' => 'MOTHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'mother_occupation',
			'label' => 'MOTHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'guardian_name',
			'label' => 'GUARDIAN NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'guardian_age',
			'label' => 'GUARDIAN AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'guardian_occupation',
			'label' => 'GUARDIAN OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'notify_on_emergency',
			'label' => 'PERSON TO NOTIFY IN CASE OF EMERGENCY',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'emergency_no',
			'label' => 'EMERGENCY NO.',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'secondary_education',
			'label' => 'SECONDARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'secondary_year_graduated',
			'label' => 'SECONDARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'elementary_education',
			'label' => 'ELEMENTARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'elementary_year_graduated',
			'label' => 'ELEMENTARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		)
	),
	'students/register_transferee_student' => array(
		array(
			'field' => 'fname',
			'label' => 'FIRTS NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mname',
			'label' => 'MIDDLE NAME',
			'rules' => 'trim|max_length[60]'
		),
		array(
			'field' => 'lname',
			'label' => 'LAST NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'suffix',
			'label' => 'SUFFIX',
			'rules' => 'trim|max_length[3]'
		),
		array(
			'field' => 'course',
			'label' => 'PREFERRED COURSE',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthday',
			'label' => 'BIRTHDAY',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthplace',
			'label' => 'BIRTHPLACE',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'gender',
			'label' => 'GENDER',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'religion',
			'label' => 'RELIGION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'contact',
			'label' => 'CONTACT NO',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'trim|required|max_length[60]|valid_email|callback_email_check'
		),
		array(
			'field' => 'perm_address',
			'label' => 'PERMANENT ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'prov_address',
			'label' => 'PROVINCIAL ADDRESS',
			'rules' => 'trim|max_length[100]'
		),
		array(
			'field' => 'mail_address',
			'label' => 'MAILING ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'father_name',
			'label' => 'FATHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'father_age',
			'label' => 'FATHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'father_occupation',
			'label' => 'FATHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_name',
			'label' => 'MOTHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_age',
			'label' => 'MOTHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'mother_occupation',
			'label' => 'MOTHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'guardian_name',
			'label' => 'GUARDIAN NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'guardian_age',
			'label' => 'GUARDIAN AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'guardian_occupation',
			'label' => 'GUARDIAN OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'notify_on_emergency',
			'label' => 'PERSON TO NOTIFY IN CASE OF EMERGENCY',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'emergency_no',
			'label' => 'EMERGENCY NO.',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'secondary_education',
			'label' => 'SECONDARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'secondary_year_graduated',
			'label' => 'SECONDARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'elementary_education',
			'label' => 'ELEMENTARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'elementary_year_graduated',
			'label' => 'ELEMENTARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'school_last_attended',
			'label' => 'SHOOL LAST ATTENDED',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'year_last_attended',
			'label' => 'YEAR LAST ATTENDED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'reason_for_leaving',
			'label' => 'REASON FOR LEAVING',
			'rules' => 'trim|required|max_length[100]'
		)
	),
	'students/register_new_student' => array(
		array(
			'field' => 'fname',
			'label' => 'FIRTS NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mname',
			'label' => 'MIDDLE NAME',
			'rules' => 'trim|max_length[60]'
		),
		array(
			'field' => 'lname',
			'label' => 'LAST NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'suffix',
			'label' => 'SUFFIX',
			'rules' => 'trim|max_length[3]'
		),
		array(
			'field' => 'course',
			'label' => 'COURSE',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthday',
			'label' => 'BIRTHDAY',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'birthplace',
			'label' => 'BIRTHPLACE',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'gender',
			'label' => 'GENDER',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'religion',
			'label' => 'RELIGION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'contact',
			'label' => 'CONTACT NO',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'trim|required|max_length[60]|valid_email|callback_email_check'
		),
		array(
			'field' => 'perm_address',
			'label' => 'PERMANENT ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'prov_address',
			'label' => 'PROVINCIAL ADDRESS',
			'rules' => 'trim|max_length[100]'
		),
		array(
			'field' => 'mail_address',
			'label' => 'MAILING ADDRESS',
			'rules' => 'trim|required|max_length[100]'
		),
		array(
			'field' => 'father_name',
			'label' => 'FATHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'father_age',
			'label' => 'FATHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'father_occupation',
			'label' => 'FATHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_name',
			'label' => 'MOTHER NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'mother_age',
			'label' => 'MOTHER AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'mother_occupation',
			'label' => 'MOTHER OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'guardian_name',
			'label' => 'GUARDIAN NAME',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'guardian_age',
			'label' => 'GUARDIAN AGE',
			'rules' => 'trim|required|numeric|max_length[3]'
		),
		array(
			'field' => 'guardian_occupation',
			'label' => 'GUARDIAN OCCUPATION',
			'rules' => 'trim|required|max_length[60]'
		),

		array(
			'field' => 'notify_on_emergency',
			'label' => 'PERSON TO NOTIFY IN CASE OF EMERGENCY',
			'rules' => 'trim|required|max_length[60]'
		),
		array(
			'field' => 'emergency_no',
			'label' => 'EMERGENCY NO.',
			'rules' => 'trim|required|numeric|exact_length[11]'
		),
		array(
			'field' => 'secondary_education',
			'label' => 'SECONDARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'secondary_year_graduated',
			'label' => 'SECONDARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		),
		array(
			'field' => 'elementary_education',
			'label' => 'ELEMENTARY EDUCATION',
			'rules' => 'trim|required|max_length[90]'
		),
		array(
			'field' => 'elementary_year_graduated',
			'label' => 'ELEMENTARY EDUCATION YEAR GRADUATED',
			'rules' => 'trim|required|numeric|exact_length[4]'
		)
	),
	'users/register_user' => array(
		array(
			'field' => 'fname',
			'label' => 'FIRST NAME',
			'rules' => 'trim|required|max_length[30]'
		),
		array(
			'field' => 'lname',
			'label' => 'LAST NAME',
			'rules' => 'trim|required|max_length[30]'
		),
		array(
			'field' => 'mname',
			'label' => 'MIDDLE NAME',
			'rules' => 'trim|required|max_length[30]'
		),
		array(
			'field' => 'house_no',
			'label' => 'HOUSE NO.',
			'rules' => 'trim|required|numeric|max_length[11]'
		),
		array(
			'field' => 'street',
			'label' => 'STREET',
			'rules' => 'trim|required|max_length[50]'
		),
		array(
			'field' => 'barangay',
			'label' => 'BARANGAY',
			'rules' => 'trim|required|max_length[50]'
		),
		array(
			'field' => 'city',
			'label' => 'CITY',
			'rules' => 'trim|required|max_length[50]'
		),
		array(
			'field' => 'email',
			'label' => 'EMAIL',
			'rules' => 'trim|required|valid_email|max_length[50]|callback_email_check'
		),
		array(
			'field' => 'contact',
			'label' => 'CONTACT',
			'rules' => 'trim|required|numeric|max_length[11]'
		),
		array(
			'field' => 'employeeid',
			'label' => 'EMPLOYEE ID',
			'rules' => 'trim|required|max_length[11]|callback_employeeid_check'
		),
		array(
			'field' => 'role',
			'label' => 'ROLE',
			'rules' => 'trim|required'
		)
	),
	'users/login_user' => array(
		array(
			'field' => 'loginUsername',
			'label' => 'USERNAME',
			'rules' => 'trim|required'
		),
		array(
			'field' => 'loginPassword',
			'label' => 'PASSWORD',
			'rules' => 'trim|required'
		)
	),
	'users/change_pass_user' => array(
		array(
			'field' => 'new_password',
			'label' => 'New Password',
			'rules' => 'trim|required|alpha_numeric'
		),
		array(
			'field' => 'confirm_password',
			'label' => 'Confirm Password',
			'rules' => 'trim|required|alpha_numeric'
		)
	)
);