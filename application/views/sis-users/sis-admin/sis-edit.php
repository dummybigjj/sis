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
        <div class="row"> <h1> &nbsp </h1></div>
        
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
                                    <label>Student</label>
                                    <span> other details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Course</label>
                                    <span> details</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-4">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Subjects and </label>
                                    <span> Schedules</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-5">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Student</label>
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
                                                    <input type="text" class="form-control required" id="student_no" name="student_no" data-mask="99999" placeholder="99999" value="<?php echo $student['student_no']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="national_id">National ID</label>
                                                    <input type="text" class="form-control" id="national_id" name="national_id" maxlength="10" data-mask="9999999999" placeholder="9999999999" value="<?php echo $student['national_id']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="email_address"><font color="red">*</font> Email</label>
                                                    <input type="email" class="form-control required" id="email_address" name="email_address" maxlength="100" value="<?php echo $student['email_address']; ?>">
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="mobile_no">Mobile No.</label>
                                                    <input type="text" class="form-control" id="mobile_no" name="mobile_no" data-mask="(999) 999-9999" placeholder="(999) 999-9999" value="<?php echo $student['mobile_no']; ?>">
                                                </div>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="picture"> Student Picture</label>
                                                    <input type="file" class="form-control" id="picture" name="picture" accept="image/jpg,image/jpeg,image/png" aria-describedby="help_block_file">
                                                    <small id="help_block_file" class="form-text text-muted">
                                                        image file accepts: .jpg, .jpeg, and .png<br>
                                                        recommended dimensions: 400px x 400px
                                                    </small>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="nationality"> Nationality</label>
                                                    <input type="text" class="form-control" id="nationality" name="nationality" maxlength="100" value="<?php echo $student['nationality']; ?>">
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
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Other Details</legend><hr/></div>
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
                                                <div class="col-lg-6">
                                                    <label for="dob">Date of Birth</label>
                                                    <input type="text" class="form-control dob " id="dob" name="dob" maxlength="30" value="<?php echo $student['date_of_birth']; ?>">
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

                                            <div class="form-group" style="display: none;">
                                                <select class="form-control" id="type_of_course" name="type_of_course">
                                                    <option></option>
                                                    <option value="Diploma" <?php echo ($student['type_of_course']=='Diploma')?'selected':''; ?> >Diploma</option>
                                                    <option value="Vocational" <?php echo ($student['type_of_course']=='Vocational')?'selected':''; ?>>Vocational</option>
                                                </select>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="company"><font color="red">*</font> Company</label>
                                                    <input type="text" class="form-control required" id="company" name="company" maxlength="100" value="<?php echo $student['company']; ?>">
                                                </div>
                                                <div class="col-lg-6" id="diploma_course_field" style="display: <?php echo ($student['type_of_course']=='Diploma')?'':'none'; ?>;">
                                                    <label for="diploma_course"><font color="red">*</font> Diploma Course</label>
                                                    <select class="form-control select2-search " id="diploma_course" name="diploma_course" style="width: 100%">
                                                        <option></option>
                                                        <?php if(!empty($diploma)): ?>
                                                            <?php foreach ($diploma as $value): ?>
                                                                <option value="<?php echo $value['course_id']; ?>" <?php echo (!empty($student['diploma_course']) && $student['diploma_course']==$value['course_id'])?'selected':''; ?> ><?php echo $value['course_name']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6" id="vocational_course_field" style="display: <?php echo ($student['type_of_course']=='Vocational')?'':'none'; ?>;">
                                                    <label for="vocational_course"><font color="red">*</font> Vocational Course</label>
                                                    <select class="form-control select2-search " id="vocational_course" name="vocational_course" style="width: 100%">
                                                        <option></option>
                                                        <?php if(!empty($voc_program)): ?>
                                                            <?php foreach ($voc_program as $value): ?>
                                                                <option value="<?php echo $value['voc_program_id']; ?>" <?php echo (!empty($student['vocational_course']) && $student['vocational_course']==$value['voc_program_id'])?'selected':''; ?> ><?php echo $value['voc_program']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
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
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-file-text-o"></i> Subjects and Schedules </legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <?php if(!empty($sub_sched)): ?>
                                                <?php for ($i=0; $i < count($sub_sched); $i++): ?>
                                                    <div class="form-group row col-lg-12">
                                                        <div class="col-lg-6">
                                                            <input type="hidden" name="tbl_id[]" value="<?php echo $sub_sched[$i]['tbl_id']; ?>">
                                                            <label for="subject<?php echo $i; ?>"><font color="red">*</font> Subject</label>
                                                            <select name="subject[]" id="subject<?php echo $i; ?>" class="form-control required select2" style="width: 100%">
                                                              <option></option>
                                                                <?php if(!empty($subjects)): ?>
                                                                    <?php foreach ($subjects as $value): ?>
                                                                        <option value="<?php echo $value['subject_id']; ?>" <?php echo ($sub_sched[$i]['subject']==$value['subject_id'])?'selected':''; ?> ><?php echo $value['subject_title']; ?></option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="room<?php echo $i ?>"><font color="red">*</font> Room</label>
                                                            <select name="room[]" id="room<?php echo $i ?>" class="form-control required select2" style="width: 100%">
                                                              <option></option>
                                                                <?php if(!empty($rooms)): ?>
                                                                    <?php foreach ($rooms as $value): ?>
                                                                        <option value="<?php echo $value['room_id']; ?>" <?php echo ($sub_sched[$i]['room']==$value['room_id'])?'selected':''; ?> ><?php echo $value['room_name']; ?></option>
                                                                    <?php endforeach; ?>
                                                                <?php endif; ?>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row col-lg-12">
                                                        <div class="col-lg-6">
                                                            <label for="day"><font color="red">*</font> Day</label>
                                                            <select name="day[]" id="day" class="form-control required">
                                                              <option></option>
                                                                <option value="MONDAY" <?php echo ($sub_sched[$i]['day']=='MONDAY')?'selected':''; ?> >MONDAY</option>
                                                                <option value="TUESDAY" <?php echo ($sub_sched[$i]['day']=='TUESDAY')?'selected':''; ?>>TUESDAY</option>
                                                                <option value="WEDNESDAY" <?php echo ($sub_sched[$i]['day']=='WEDNESDAY')?'selected':''; ?>>WEDNESDAY</option>
                                                                <option value="THURSDAY" <?php echo ($sub_sched[$i]['day']=='THURSDAY')?'selected':''; ?>>THURSDAY</option>
                                                                <option value="FRIDAY" <?php echo ($sub_sched[$i]['day']=='FRIDAY')?'selected':''; ?>>FRIDAY</option>
                                                                <option value="SATURDAY" <?php echo ($sub_sched[$i]['day']=='SATURDAY')?'selected':''; ?>>SATURDAY</option>
                                                                <option value="SUNDAY" <?php echo ($sub_sched[$i]['day']=='SUNDAY')?'selected':''; ?>>SUNDAY</option>
                                                            </select>

                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="time"><font color="red">*</font> Time</label>
                                                            <select name="time[]" id="time" class="form-control required">
                                                                <option> </option>
                                                                <option value="08:00:00" <?php echo ($sub_sched[$i]['time']=='08:00:00')?'selected':''; ?> > 08:00AM - 09:30AM </option>
                                                                <option value="10:00:00" <?php echo ($sub_sched[$i]['time']=='10:00:00')?'selected':''; ?> > 10:00AM - 11:30AM </option>
                                                                <option value="12:30:00" <?php echo ($sub_sched[$i]['time']=='12:30:00')?'selected':''; ?> > 12:30PM - 02:00PM </option>
                                                                <option value="14:30:00" <?php echo ($sub_sched[$i]['time']=='14:30:00')?'selected':''; ?> > 02:30PM - 04:00PM </option>
                                                                <option value="16:30:00" <?php echo ($sub_sched[$i]['time']=='16:30:00')?'selected':''; ?> > 04:30PM - 06:00PM </option>
                                                                <option value="18:30:00" <?php echo ($sub_sched[$i]['time']=='18:30:00')?'selected':''; ?> > 06:30PM - 08:00PM </option>
                                                            </select>
                                                        </div>
                                                    </div><br>
                                                <?php endfor; ?>
                                            <?php else: ?>
                                                <p align="center"> No subjects and schedules found. You can add "Subjects and Schedules" by clicking "Add" button below </p>
                                            <?php endif; ?>



                                            <div id="TextBoxesGroup"></div>
                                            <div class="col-12"><hr/></div>

                                            <div class="form-group col-md-12">
                                                <div class="btn-group" style="float: right;">
                                                    <button id="addButton" type="button" class="btn btn-success">&nbsp&nbsp&nbsp<i class="fa fa-plus-square-o"></i> Add&nbsp&nbsp&nbsp</button>
                                                    <button id="removeButton" type="button" class="btn btn-danger"><i class="fa fa-times"></i> Remove</button>
                                                </div>
                                            </div>

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
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-th-list"></i> Student Skills</legend><hr/></div>
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
                                                <div class="col-lg-6">
                                                    <label for="eng_rating"><font color="red">*</font> Rating</label>
                                                    <select name="eng_rating" id="eng_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Poor" <?php echo ($eng['eng_rating']=='Poor')?'selected':''; ?> >Poor</option>
                                                      <option value="Below Average" <?php echo ($eng['eng_rating']=='Below Average')?'selected':''; ?> >Below Average</option>
                                                      <option value="Average" <?php echo ($eng['eng_rating']=='Average')?'selected':''; ?> >Average</option>
                                                      <option value="Good" <?php echo ($eng['eng_rating']=='Good')?'selected':''; ?> >Good</option>
                                                      <option value="Very Good" <?php echo ($eng['eng_rating']=='Very Good')?'selected':''; ?> >Very Good</option>
                                                      <option value="Excellent" <?php echo ($eng['eng_rating']=='Excellent')?'selected':''; ?> >Excellent</option>
                                                    </select>
                                                </div>
                                            </div><br>

                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-book"></i> Craft </label>
                                            </div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="craft_skill"><font color="red">*</font> Skill</label>
                                                    <select name="craft_skill" id="craft_skill" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="1" <?php echo ($craft['craft_skill']=='1')?'selected':''; ?> >1</option>
                                                      <option value="2" <?php echo ($craft['craft_skill']=='2')?'selected':''; ?> >2</option>
                                                      <option value="3" <?php echo ($craft['craft_skill']=='3')?'selected':''; ?> >3</option>
                                                      <option value="4" <?php echo ($craft['craft_skill']=='4')?'selected':''; ?> >4</option>
                                                      <option value="5" <?php echo ($craft['craft_skill']=='5')?'selected':''; ?> >5</option>
                                                      <option value="6" <?php echo ($craft['craft_skill']=='6')?'selected':''; ?> >6</option>
                                                      <option value="7" <?php echo ($craft['craft_skill']=='7')?'selected':''; ?> >7</option>
                                                      <option value="8" <?php echo ($craft['craft_skill']=='8')?'selected':''; ?> >8</option>
                                                      <option value="9" <?php echo ($craft['craft_skill']=='9')?'selected':''; ?> >9</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="craft_rating"><font color="red">*</font> Rating</label>
                                                    <select name="craft_rating" id="craft_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Poor" <?php echo ($craft['craft_rating']=='Poor')?'selected':''; ?> >Poor</option>
                                                      <option value="Below Average" <?php echo ($craft['craft_rating']=='Below Average')?'selected':''; ?> >Below Average</option>
                                                      <option value="Average" <?php echo ($craft['craft_rating']=='Average')?'selected':''; ?> >Average</option>
                                                      <option value="Good" <?php echo ($craft['craft_rating']=='Good')?'selected':''; ?> >Good</option>
                                                      <option value="Very Good" <?php echo ($craft['craft_rating']=='Very Good')?'selected':''; ?> >Very Good</option>
                                                      <option value="Excellent" <?php echo ($craft['craft_rating']=='Excellent')?'selected':''; ?> >Excellent</option>
                                                    </select>
                                                </div>
                                            </div><br>

                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-book"></i> Core </label>
                                            </div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-6">
                                                    <label for="core_skill"><font color="red">*</font> Skill</label>
                                                    <select name="core_skill" id="core_skill" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="1" <?php echo ($core['core_skill']=='1')?'selected':''; ?> >1</option>
                                                      <option value="2" <?php echo ($core['core_skill']=='2')?'selected':''; ?> >2</option>
                                                      <option value="3" <?php echo ($core['core_skill']=='3')?'selected':''; ?> >3</option>
                                                      <option value="4" <?php echo ($core['core_skill']=='4')?'selected':''; ?> >4</option>
                                                      <option value="5" <?php echo ($core['core_skill']=='5')?'selected':''; ?> >5</option>
                                                      <option value="6" <?php echo ($core['core_skill']=='6')?'selected':''; ?> >6</option>
                                                      <option value="7" <?php echo ($core['core_skill']=='7')?'selected':''; ?> >7</option>
                                                      <option value="8" <?php echo ($core['core_skill']=='8')?'selected':''; ?> >8</option>
                                                      <option value="9" <?php echo ($core['core_skill']=='9')?'selected':''; ?> >9</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-6">
                                                    <label for="core_rating"><font color="red">*</font> Rating</label>
                                                    <select name="core_rating" id="core_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Poor" <?php echo ($core['core_rating']=='Poor')?'selected':''; ?> >Poor</option>
                                                      <option value="Below Average" <?php echo ($core['core_rating']=='Below Average')?'selected':''; ?> >Below Average</option>
                                                      <option value="Average" <?php echo ($core['core_rating']=='Average')?'selected':''; ?> >Average</option>
                                                      <option value="Good" <?php echo ($core['core_rating']=='Good')?'selected':''; ?> >Good</option>
                                                      <option value="Very Good" <?php echo ($core['core_rating']=='Very Good')?'selected':''; ?> >Very Good</option>
                                                      <option value="Excellent" <?php echo ($core['core_rating']=='Excellent')?'selected':''; ?> >Excellent</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- END STEP CONTENT-->
                                </div>
                            </fieldset>
                        </div>
                        <!-- END STEP 5-->
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
        $(document).ready(function(){
          var counter = 1;
          $("#addButton").click(function () {
            if(counter>2){
                alert("Only 3 forms are allowed");
                return false;
            }
                
            var new_subject = $(document.createElement('div')).attr("id", 'new_subject' + counter);
            new_subject.after().html(

                '<div><hr/></div><br>'+
                '<div class="form-group row col-lg-12">'+
                    '<div class="col-lg-6">'+
                        '<label for="subject'+counter+'"><font color="red">*</font> Subject</label>'+
                        '<select name="subject[]" id="subject'+counter+'" class="form-control required select2" style="width: 100%">'+
                            '<option></option>'+
                            '<?php if(!empty($subjects)): ?>'+
                                '<?php foreach ($subjects as $value): ?>'+
                                    '<option value="<?php echo $value["subject_id"]; ?>"><?php echo $value["subject_title"]; ?></option>'+
                                '<?php endforeach; ?>'+
                            '<?php endif; ?>'+
                        '</select>'+
                    '</div>'+
                    '<div class="col-lg-6">'+
                        '<label for="room'+counter+'"><font color="red">*</font> Room</label>'+
                        '<select name="room[]" id="room'+counter+'" class="form-control required select2" style="width: 100%">'+
                            '<option></option>'+
                            '<?php if(!empty($rooms)): ?>'+
                                '<?php foreach ($rooms as $value): ?>'+
                                    '<option value="<?php echo $value["room_id"]; ?>"><?php echo $value["room_name"]; ?></option>'+
                                '<?php endforeach; ?>'+
                            '<?php endif; ?>'+
                        '</select>'+
                    '</div>'+
                '</div>'+

                '<div class="form-group row col-lg-12">'+
                    '<div class="col-lg-6">'+
                        '<label for="day'+counter+'"><font color="red">*</font> Day</label>'+
                        '<select name="day[]" id="day'+counter+'" class="form-control required">'+
                          '<option></option>'+
                            '<option value="MONDAY">MONDAY</option>'+
                            '<option value="TUESDAY">TUESDAY</option>'+
                            '<option value="WEDNESDAY">WEDNESDAY</option>'+
                            '<option value="THURSDAY">THURSDAY</option>'+
                            '<option value="FRIDAY">FRIDAY</option>'+
                            '<option value="SATURDAY">SATURDAY</option>'+
                            '<option value="SUNDAY">SUNDAY</option>'+
                        '</select>'+
                    '</div>'+

                    '<div class="col-lg-6">'+
                        '<label for="time'+counter+'"><font color="red">*</font> Time</label>'+
                        '<select name="time[]" id="time'+counter+'" class="form-control required">'+
                            '<option> </option>'+
                            '<option value="08:00:00"> 08:00AM - 09:30AM </option>'+
                            '<option value="10:00:00"> 10:00AM - 11:30AM </option>'+
                            '<option value="12:30:00"> 12:30PM - 02:00PM </option>'+
                            '<option value="14:30:00"> 02:30PM - 04:00PM </option>'+
                            '<option value="16:30:00"> 04:30PM - 06:00PM </option>'+
                            '<option value="18:30:00"> 06:30PM - 08:00PM </option>'+
                        '</select>'+
                    '</div>'+
                '</div><br>'

            );

            new_subject.appendTo("#TextBoxesGroup");
            counter++;
          });

          $("#removeButton").click(function (){
            if(counter==1){
              alert("No more forms to remove");
              return false;
            }
            counter--;
            $("#new_subject" + counter).remove();
          });

        });
    </script>

</body>


</html>