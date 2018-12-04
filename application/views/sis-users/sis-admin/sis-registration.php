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
        <div class="row justify-content-center border-top-0"><h1><a href="<?php echo site_url('students'); ?>"> Return Home <i class="fa fa-home"></i> </a></h1></div><br>
        <div class="row justify-content-center border-top-0"><h4> Student Personal Information </h4></div>
        
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
                    </ul>
                    <!-- END STEP INDICATOR-->
                </div>
                <!-- END NAV STEP-->
                <!-- BEGIN STEP CONTAINER -->
                <div class="tsf-container">
                    <!-- BEGIN CONTENT-->
                    <form class="tsf-content" action="<?php echo site_url('student/create_student'); ?>" method="post" enctype="multipart/form-data">
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
                                            
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="arabic_name"><font color="red">*</font> Arabic Name</label>
                                                    <input type="text" class="form-control required" id="arabic_name" name="arabic_name" maxlength="100">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="english_name">English Name</label>
                                                    <input type="text" class="form-control" id="english_name" name="english_name" maxlength="100">
                                                </div>
                                                
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="student_no"><font color="red">*</font> Student No.</label>
                                                    <input type="text" class="form-control required" id="student_no" name="student_no" onkeypress="validate(event)" maxlength="6">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="national_id">National ID</label>
                                                    <input type="text" class="form-control" id="national_id" name="national_id" data-mask="9999999999" placeholder="9999999999">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="email_address">Email</label>
                                                    <input type="email" class="form-control " id="email_address" name="email_address" maxlength="100">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="mobile_no">Mobile No.</label>
                                                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" data-mask="(999) 999-9999" placeholder="(999) 999-9999">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="civil_status">Civil Status</label>
                                                    <select name="civil_status" class="form-control" id="civil_status">
                                                        <option value="Single">Single</option>
                                                        <option value="Married">Married</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="nationality"> Nationality</label>
                                                    <input type="text" class="form-control" id="nationality" name="nationality" maxlength="100">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" class="form-control dob " id="dob" name="dob" maxlength="30">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="picture">Student Picture</label>
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
                                                    <input type="text" class="form-control " id="guardian_name" name="guardian_name" maxlength="100">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="address">Address</label>
                                                    <input type="text" class="form-control " id="address" name="address">
                                                </div>
                                                
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="guardian_contact">Guardian Contact No.</label>
                                                    <input type="text" class="form-control " id="guardian_contact" name="guardian_contact" data-mask="(999) 999-9999" placeholder="(999) 999-9999">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-12">
                                                    <label for="comments">Comment(s) about Student</label>
                                                    <textarea class="form-control" id="comments" name="comments" maxlength="249" ></textarea>
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
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-book"></i> Course Information</legend><hr/></div>
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
                                                                <option value="<?php echo $value['company_name']; ?>"><?php echo $value['company_name']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="vocational_course"><font color="red">*</font> Vocational Course</label>
                                                    <select class="form-control required select2-search " id="vocational_course" name="vocational_course" style="width: 100%">
                                                        <option></option>
                                                        <?php if(!empty($voc_program)): ?>
                                                            <?php foreach ($voc_program as $value): ?>
                                                                <option value="<?php echo $value['voc_program_acronym']; ?>"><?php echo $value['voc_program'].' - '.$value['voc_program_acronym']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="student_remarks"><font color="red">*</font> Remarks/Status</label>
                                                    <select name="student_remarks" id="student_remarks" class="form-control required" onkeyup="is_graduated(this)" onkeydown="is_graduated(this)" onkeyup="is_graduated(this)" onmouseout="is_graduated(this)">
                                                        <option></option>
                                                        <option value="Ongoing">Ongoing</option>
                                                        <option value="Graduated">Graduated</option>
                                                        <option value="Terminated">Terminated</option>
                                                        <option value="Expulsion">Expulsion</option>
                                                        <option value="Resigned">Resigned</option>
                                                        <option value="Withdraw">Withdraw</option>
                                                    </select>
                                                </div>

                                                <div class="col-lg-6" id="graduated" style="display: none;">
                                                    <label for="graduate"><font color="red">*</font> Date Graduated</label>
                                                    <input type="text" class="form-control dob " id="graduate" name="graduate">
                                                </div>
                                            </div>
                                            
                                            <div class="col-12"><legend class="col-lg-11 h5"><i class="fa fa-user-o"></i> Training </legend><hr/></div>
                                            
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="training_start"><font color="red">*</font> Start</label>
                                                    <input type="text" class="form-control required" id="training_start" name="training_start" data-mask="9999-99-99" placeholder="YYYY-MM-DD">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="training_end"><font color="red">*</font> Expected End</label>
                                                    <input type="text" class="form-control required" id="training_end" name="training_end" data-mask="9999-99-99" placeholder="YYYY-MM-DD">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 3-->
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
</body>
</html>