<body>

    <div class="demo-settings" data-open="true" style="display: none;">
        <div class="settings-icon">
            <a href="#" class="btn-setting"><i class="fa fa-2x fa-cogs"></i></a>
            <a href="#" class="btn-remove"><i class="fa fa-2x fa-times"></i></a>
        </div>
        <div class="settings-main">
            <label>Step effect</label>
            <select class="form-control" id="stepEffect">
                <option value="basic" selected="selected">basic</option>
                <option value="bounce">bounce</option>
                <option value="slideRightLeft">slideRightLeft</option>
                <option value="slideLeftRight">slideLeftRight</option>

                <option value="flip">flip</option>
                <option value="transformation">transformation</option>
                <option value="slideDownUp">slideDownUp</option>
                <option value="slideUpDown">slideUpDown</option>
            </select>
            <br />
            <label for="stepTransition">
                Step transition <input type="checkbox" id="stepTransition" name="stepTransition" value="11" checked />
            </label>
            <br />
            <label for="showButtons">
                Show buttons <input type="checkbox" id="showButtons" name="showButtons" value="111" checked />
            </label>
            <br />
            <label for="showStepNum">
                Show stepNum <input type="checkbox" id="showStepNum" name="showStepNum" value="123" checked />
            </label>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center border-top-0"><h1><a href="<?php echo site_url('students'); ?>"> Return Home <i class="fa fa-home"></i> </a></h1></div>
        
        <div class="row">
            
            <!-- BEGIN STEP FORM WIZARD -->
            <div class="tsf-wizard tsf-wizard-1" style="width: 81%;margin: 0 auto">
                <!-- BEGIN NAV STEP-->
                <div class="tsf-nav-step">
                    <!-- BEGIN STEP INDICATOR-->
                    <ul class="gsi-step-indicator triangle gsi-style-1  gsi-transition ">
                        <li class="current" data-target="step-1">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Student</label>
                                    <span> details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Guardian</label>
                                    <span> and other details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Course</label>
                                    <span> information</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-4">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>English</label>
                                    <span> Proficiency</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-5">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Core</label>
                                    <span> Skills</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-6">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Craft</label>
                                    <span> Skills</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <!-- END STEP INDICATOR-->
                </div>
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->
                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                    <form class="tsf-content" action="<?php echo site_url('student/update_student'); ?>" method="post" enctype="multipart/form-data">
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Student Details</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-lg-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <?php (empty($student))?redirect('students'):''; ?>
                                            
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="arabic_name"><font color="red">*</font> Arabic Name</label>
                                                    <input type="hidden" class="form-control" name="student_id" value="<?php echo $student['student_id']; ?>">
                                                    <input type="text" class="form-control required" id="arabic_name" name="arabic_name" maxlength="100" value="<?php echo $student['arabic_name']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="english_name">English Name</label>
                                                    <input type="text" class="form-control" id="english_name" name="english_name" maxlength="100" value="<?php echo $student['english_name']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="student_no"><font color="red">*</font> Student No.</label>
                                                    <input type="text" class="form-control required" id="student_no" name="student_no" onkeypress="validate(event)" maxlength="6" value="<?php echo $student['student_no']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="national_id">National ID</label>
                                                    <input type="text" class="form-control" id="national_id" name="national_id" maxlength="10" data-mask="9999999999" placeholder="9999999999" value="<?php echo $student['national_id']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="email_address">Email</label>
                                                    <input type="email" class="form-control " id="email_address" name="email_address" maxlength="100" value="<?php echo $student['email_address']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="mobile_no">Mobile No.</label>
                                                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" data-mask="(999) 999-9999" placeholder="(999) 999-9999" value="<?php echo $student['mobile_no']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="civil_status">Civil Status</label>
                                                    <select name="civil_status" class="form-control" id="civil_status">
                                                        <option value="Single" <?php echo ($student['civil_status']=='Single')?'selected':''; ?>>Single</option>
                                                        <option value="Married" <?php echo ($student['civil_status']=='Married')?'selected':''; ?>>Married</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="nationality"> Nationality</label>
                                                    <input type="text" class="form-control" id="nationality" name="nationality" maxlength="100" value="<?php echo $student['nationality']; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" class="form-control dob " id="dob" name="dob" value="<?php echo $student['date_of_birth']; ?>" maxlength="30">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="picture"> Student Picture</label>
                                                    <input type="file" class="form-control" id="picture" name="picture" accept="image/*" capture="camera" aria-describedby="help_block_file">
                                                    <small id="help_block_file" class="form-text text-muted">
                                                        image file accepts: .jpg, .jpeg, and .png<br>
                                                        recommended dimensions: 400px x 400px
                                                    </small>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 1-->
                        <!-- BEGIN STEP 2-->
                        <div class="tsf-step step-2">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Guardian and Other Details</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="guardian_name">Guardian Name</label>
                                                    <input type="text" class="form-control " id="guardian_name" name="guardian_name" maxlength="100" value="<?php echo $student['guardian_name']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control " id="address" name="address" maxlength="100" value="<?php echo $student['address']; ?>">
                                                </div>
                                                
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="guardian_contact">Guardian Contact No.</label>
                                                    <input type="text" class="form-control " id="guardian_contact" name="guardian_contact" data-mask="(999) 999-9999" placeholder="(999) 999-9999" value="<?php echo $student['guardian_contact']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-12">
                                                    <label for="comments">Comment(s) about student</label>
                                                    <textarea class="form-control" id="comments" name="comments" maxlength="249" ><?php echo $student['comments']; ?></textarea>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 2-->
                        <!-- BEGIN STEP 3-->
                        <div class="tsf-step step-3">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-book"></i> Course details</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="company"><font color="red">*</font> Company</label>
                                                    <select class="form-control required select2-search " id="company" name="company" style="width: 100%">
                                                        <option></option>
                                                        <?php if(!empty($company)): ?>
                                                            <?php foreach ($company as $value): ?>
                                                                <option value="<?php echo $value['company_name']; ?>" <?php echo ($value['company_name']==$student['company'])?'selected':''; ?> ><?php echo $value['company_name']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6" id="vocational_course_field" >
                                                    <label for="vocational_course"><font color="red">*</font> Vocational Course</label>
                                                    <select class="form-control select2-search " id="vocational_course" name="vocational_course" style="width: 100%">
                                                        <option></option>
                                                        <?php if(!empty($voc_program)): ?>
                                                            <?php foreach ($voc_program as $value): ?>
                                                                <option value="<?php echo $value['vocational']; ?>" <?php echo ($student['vocational_course']==$value['vocational'])?'selected':''; ?> ><?php echo $value['description']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="student_remarks"><font color="red">*</font> Remarks/Status</label>
                                                    <select name="student_remarks" id="student_remarks" class="form-control required" onkeyup="is_graduated(this)" onkeydown="is_graduated(this)" onkeyup="is_graduated(this)" onmouseout="is_graduated(this)">
                                                        <option value="Ongoing" <?php echo ($student['ramarks']=='Ongoing')?'selected':''; ?> >Ongoing</option>
                                                        <option value="Graduated" <?php echo ($student['ramarks']=='Graduated')?'selected':''; ?> >Graduated</option>
                                                        <option value="Terminated" <?php echo ($student['ramarks']=='Terminated')?'selected':''; ?> >Terminated</option>
                                                        <option value="Expulsion" <?php echo ($student['ramarks']=='Expulsion')?'selected':''; ?> >Expulsion</option>
                                                        <option value="Resigned" <?php echo ($student['ramarks']=='Resigned')?'selected':''; ?> >Resigned</option>
                                                        <option value="Withdraw" <?php echo ($student['ramarks']=='Withdraw')?'selected':''; ?> >Withdraw</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6" id="graduated" style="display: none;">
                                                    <label for="graduate"><font color="red">*</font> Date Graduated</label>
                                                    <input type="text" class="form-control dob " id="graduate" name="graduate" value="<?php echo $student['date_graduated']; ?>">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12"><legend class="col-lg-11 h5"><i class="fa fa-user-o"></i> Training </legend><hr/></div>
                                            
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="training_start"><font color="red">*</font> Start</label>
                                                    <input type="text" class="form-control required" id="training_start" name="training_start" data-mask="9999-99-99" placeholder="YYYY-MM-DD" value="<?php echo $student['training_start']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="training_end"><font color="red">*</font> Expected End</label>
                                                    <input type="text" class="form-control required" id="training_end" name="training_end" data-mask="9999-99-99" placeholder="YYYY-MM-DD" value="<?php echo $student['training_end']; ?>">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 3-->
                        <!-- BEGIN STEP 4-->
                        <div class="tsf-step step-4">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-th-list"></i> English Proficiency</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-book"></i> English Proficiency </label>
                                            </div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-4">
                                                    <label for="eng_rating"><font color="red">*</font> Rating</label>
                                                    <select name="eng_rating" id="eng_rating" class="form-control required" style="width: 100%">
                                                      <option value="Competent" <?php echo ($eng['eng_rating']=='Competent')?'selected':''; ?> >Competent</option>
                                                      <option value="Not Yet Competent" <?php echo ($eng['eng_rating']=='Not Yet Competent')?'selected':''; ?> >Not Yet Competent</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="eng_completed">Completed</label>
                                                    <input type="text" name="eng_completed" id="eng_completed" value="<?php echo $eng['eng_completed'] ?>" class="form-control dob">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="eng_grade">Grade</label>
                                                    <input type="text" name="eng_grade" id="eng_grade" onkeypress="validate(event)" maxlength="3" value="<?php echo $eng['grade'] ?>" class="form-control">
                                                </div>
                                            </div><br>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 4-->
                        <!-- BEGIN STEP 5-->
                        <div class="tsf-step step-5">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Core Skills</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <?php if(!empty($core)): ?>
                                                <?php for ($i=0; $i < count($core); $i++): ?>

                                                    <div class="form-group row col-lg-12">
                                                        <div class="col-lg-3">
                                                            <label for="core_skill">Skills</label>
                                                            <input type="hidden" name="core_id[]" value="<?php echo $core[$i]['core_id']; ?>">
                                                            <select name="core_skill[]" id="core_skill" class="form-control " style="width: 100%">
                                                                <?php if(!empty($cores)): ?>
                                                                    <?php foreach ($cores as $value): ?>
                                                                        <option value="<?php echo $value['core_item_id'] ?>" <?php echo ($core[$i]['core_skill']==$value['core_item_id'])?'selected':''; ?> ><?php echo $value['core_code']; ?></option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="core_rating">Rating</label>
                                                            <select name="core_rating[]" id="core_rating" class="form-control " style="width: 100%">
                                                              <option value="Competent" <?php echo ($core[$i]['core_rating']=='Competent')?'selected':''; ?> >Competent</option>
                                                              <option value="Not Yet Competent" <?php echo ($core[$i]['core_rating']=='Not Yet Competent')?'selected':''; ?> >Not Yet Competent</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="core_completed">Completed</label>
                                                            <input type="text" name="core_completed[]" id="core_completed" value="<?php echo $core[$i]['core_completed'] ?>" class="form-control dob">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="core_grade">Grade</label>
                                                            <input type="text" name="core_grade[]" id="core_grade" onkeypress="validate(event)" maxlength="3" value="<?php echo $core[$i]['grade'] ?>" class="form-control">
                                                        </div>
                                                    </div><br>

                                                <?php endfor; ?>
                                            <?php endif; ?>
                                            
                                            <div id="TextBoxesGroupCore"></div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-12">
                                                    <?php $core_tk = $this->student_model->get_skills_not_taken($core,'core_skill',$cores,'core_item_id','core_code'); ?>
                                                    <?php echo (!empty($core_tk))?'Core Skills not yet taken '.$core_tk:''; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="btn-group">
                                                    <button id="addButtonCore" type="button" class="btn btn-outline-success"> &nbsp <i class="fa fa-plus-square-o fa-lg" style="color: green"></i> Add &nbsp</button>
                                                    <button id="removeButtonCore" type="button" class="btn btn-outline-danger"><i class="fa fa-times fa-lg" style="color: red"></i> Remove </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 5-->
                        <!-- BEGIN STEP 6-->
                        <div class="tsf-step step-6">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Craft Skills</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <?php if(!empty($craft)): ?>
                                                <?php for ($i=0; $i < count($craft); $i++): ?>
                                                    <div class="form-group row col-lg-12">
                                                        <div class="col-lg-3">
                                                            <label for="craft_skill">Skills</label>
                                                            <input type="hidden" name="craft_id[]" value="<?php echo $craft[$i]['craft_id']; ?>">
                                                            <select name="craft_skill[]" id="craft_skill" class="form-control " style="width: 100%">
                                                                <?php if(!empty($crafts)): ?>
                                                                    <?php foreach ($crafts as $value): ?>
                                                                        <option value="<?php echo $value['craft_item_id'] ?>" <?php echo ($craft[$i]['craft_skill']==$value['craft_item_id'])?'selected':''; ?> ><?php echo $value['craft_code']; ?></option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="craft_rating">Rating</label>
                                                            <select name="craft_rating[]" id="craft_rating" class="form-control " style="width: 100%">
                                                              <option value="Competent" <?php echo ($craft[$i]['craft_rating']=='Competent')?'selected':''; ?> >Competent</option>
                                                              <option value="Not Yet Competent" <?php echo ($craft[$i]['craft_rating']=='Not Yet Competent')?'selected':''; ?> >Not Yet Competent</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="craft_completed">Completed</label>
                                                            <input type="text" name="craft_completed[]" id="craft_completed" value="<?php echo $craft[$i]['craft_completed'] ?>" class="form-control dob">
                                                        </div>
                                                        <div class="col-lg-3">
                                                            <label for="craft_grade">Grade</label>
                                                            <input type="text" name="craft_grade[]" id="craft_grade" onkeypress="validate(event)" maxlength="3" value="<?php echo $craft[$i]['grade'] ?>" class="form-control">
                                                        </div>
                                                    </div><br>
                                                <?php endfor; ?>
                                            <?php endif; ?>
                                            <div id="TextBoxesGroupCraft"></div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-12">
                                                    <?php $craft_tk = $this->student_model->get_skills_not_taken($craft,'craft_skill',$crafts,'craft_item_id','craft_code'); ?>
                                                    <?php echo (!empty($craft_tk))?'Craft Skills not yet taken '.$craft_tk:''; ?>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="btn-group">
                                                    <button id="addButtonCraft" type="button" class="btn btn-outline-success"> &nbsp <i class="fa fa-plus-square-o fa-lg" style="color: green"></i> Add &nbsp</button>
                                                    <button id="removeButtonCraft" type="button" class="btn btn-outline-danger"><i class="fa fa-times fa-lg" style="color: red"></i> Remove </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 6-->
                    </form>
                    <!-- END CONTENT-->
                    <!-- BEGIN CONTROLS-->
                    <div class="tsf-controls ">
                        <!-- BEGIN PREV BUTTTON-->
                        <button type="button" data-type="prev" class="btn btn-left tsf-wizard-btn">
                            <i class="fa fa-chevron-left"></i> PREV
                        </button>
                        <!-- END PREV BUTTTON-->
                        <!-- BEGIN NEXT BUTTTON-->
                        <button type="button" data-type="next" class="btn btn-right tsf-wizard-btn">
                            NEXT <i class="fa fa-chevron-right"></i>
                        </button>
                        <!-- END NEXT BUTTTON-->
                        <!-- BEGIN FINISH BUTTTON-->
                        <button type="submit" data-type="finish" class="btn btn-right tsf-wizard-btn">
                            FINISH
                        </button>
                        <!-- END FINISH BUTTTON-->
                    </div>
                    <!-- END CONTROLS-->
                </div>
                <!-- END STEP CONTAINER -->
            </div>
            <!-- END STEP FORM WIZARD -->
            <div class="clearfix"></div>
        </div>
        <br /><hr><br />
        <footer>
            <p>  <?php echo date('Y'); ?> © Copyright THIEP</p>
        </footer>
    </div>

    <script src="<?php echo base_url('application/assets/js/custom.js'); ?>"></script>
    <script type="text/javascript">

        // add craft skillss

        $(document).ready(function(){
          var counter = 1;
          $("#addButtonCraft").click(function () {
            if(counter>9){
                alert("Only 9 forms are allowed");
                return false;
            }
                
            var new_craft = $(document.createElement('div')).attr("id", 'new_craft' + counter);
            new_craft.after().html(

                '<div class="form-group row col-lg-12">'+
                    '<div class="col-lg-3">'+
                        '<label for="craft_skill'+counter+'"><font color="red">*</font> Skills</label>'+
                        '<select name="craft_skill[]" id="craft_skill'+counter+'" class="form-control required">'+
                            '<?php if(!empty($crafts)): ?>'+
                                '<?php foreach ($crafts as $value): ?>'+
                                    '<option value="<?php echo $value['craft_item_id']; ?>"><?php echo $value['craft_code']; ?></option>'+
                                '<?php endforeach; ?>'+
                            '<?php endif; ?>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="craft_rating'+counter+'"><font color="red">*</font> Rating</label>'+
                        '<select name="craft_rating[]" id="craft_rating'+counter+'" class="form-control required">'+
                          '<option value="Competent">Competent</option>'+
                          '<option value="Not Yet Competent">Not Yet Competent</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="craft_completed'+counter+'">Completed</label>'+
                        '<input type="text" name="craft_completed[]" id="craft_completed'+counter+'" class="form-control" data-mask="9999-99-99" placeholder="YYYY-MM-DD">'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="craft_grade'+counter+'">Grade</label>'+
                        '<input type="text" name="craft_grade[]" id="craft_grade'+counter+'" onkeypress="validate(event)" class="form-control" maxlength="3">'+
                    '</div>'+
                '</div><br>'

            );

            new_craft.appendTo("#TextBoxesGroupCraft");
            counter++;
          });

          $("#removeButtonCraft").click(function (){
            if(counter==1){
              alert("No more forms to remove");
              return false;
            }
            counter--;
            $("#new_craft" + counter).remove();
          });

        });

        // add core skills

        $(document).ready(function(){
          var counter = 1;
          $("#addButtonCore").click(function () {
            if(counter>9){
                alert("Only 9 forms are allowed");
                return false;
            }
                
            var new_core = $(document.createElement('div')).attr("id", 'new_core' + counter);
            new_core.after().html(

                '<div class="form-group row col-lg-12">'+
                    '<div class="col-lg-3">'+
                        '<label for="core_skill'+counter+'"><font color="red">*</font> Skills</label>'+
                        '<select name="core_skill[]" id="core_skill'+counter+'" class="form-control required">'+
                            '<?php if(!empty($cores)): ?>'+
                                '<?php foreach ($cores as $value): ?>'+
                                    '<option value="<?php echo $value['core_item_id']; ?>"><?php echo $value['core_code']; ?></option>'+
                                '<?php endforeach; ?>'+
                            '<?php endif; ?>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="core_rating'+counter+'"><font color="red">*</font> Rating</label>'+
                        '<select name="core_rating[]" id="core_rating'+counter+'" class="form-control required">'+
                          '<option value="Competent">Competent</option>'+
                          '<option value="Not Yet Competent">Not Yet Competent</option>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="core_completed'+counter+'">Completed</label>'+
                        '<input type="text" name="core_completed[]" id="core_completed'+counter+'" class="form-control" data-mask="9999-99-99" placeholder="YYYY-MM-DD">'+
                    '</div>'+
                    '<div class="col-lg-3">'+
                        '<label for="core_grade'+counter+'">Grade</label>'+
                        '<input type="text" name="core_grade[]" id="core_grade'+counter+'" onkeypress="validate(event)" class="form-control" maxlength="3">'+
                    '</div>'+
                '</div><br>'

            );

            new_core.appendTo("#TextBoxesGroupCore");
            counter++;
          });

          $("#removeButtonCore").click(function (){
            if(counter==1){
              alert("No more forms to remove");
              return false;
            }
            counter--;
            $("#new_core" + counter).remove();
          });

        });

        $('.dobs').datetimepicker({
            format:'Y-m-d'
        });

    </script>

</body>


</html>