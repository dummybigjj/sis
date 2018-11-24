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
        <div class="row justify-content-center border-top-0"><h4> <?php echo $student['arabic_name']; ?> Skills </h4></div>
        
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
                                    <label>English</label>
                                    <span> Proficiency</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-2">
                            <a href="#0">
                                <span class="number"></span>
                                <span class="desc">
                                    <label>Core</label>
                                    <span> Skills</span>
                                </span>
                            </a>
                        </li>
                        <li data-target="step-3">
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
                    <form class="tsf-content" action="<?php echo site_url('student/create_student_skills'); ?>" method="post" enctype="multipart/form-data">
                        <!-- BEGIN STEP 1-->
                        <div class="tsf-step step-1 active">
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
                                                <input type="hidden" name="student_id" value="<?php echo $student['student_id']; ?>" class="form-control">
                                            </div>
                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-4">
                                                    <label for="eng_rating"><font color="red">*</font> Rating</label>
                                                    <select name="eng_rating" id="eng_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Competent">Competent</option>
                                                      <option value="Not Yet Competent">Not Yet Competent</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="eng_completed">Completed</label>
                                                    <input type="text" name="eng_completed" id="eng_completed" class="form-control dob">
                                                </div>
                                                <div class="col-lg-4">
                                                    <label for="eng_grade">Grade</label>
                                                    <input type="text" name="eng_grade" id="eng_grade" onkeypress="validate(event)" maxlength="3" class="form-control">
                                                </div>
                                            </div><br>

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
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Core Skills</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required.</label>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-3">
                                                    <label for="core_skill"><font color="red">*</font> Skills</label>
                                                    <select name="core_skill[]" id="core_skill" class="form-control required" style="width: 100%">
                                                        <?php if(!empty($core)): ?>
                                                            <?php foreach ($core as $value): ?>
                                                                <option value="<?php echo $value['core_item_id'] ?>"><?php echo $value['core_code']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="core_rating"><font color="red">*</font> Rating</label>
                                                    <select name="core_rating[]" id="core_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Competent">Competent</option>
                                                      <option value="Not Yet Competent">Not Yet Competent</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="core_completed">Completed</label>
                                                    <input type="text" name="core_completed[]" id="core_completed" class="form-control dob">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="core_grade">Grade</label>
                                                    <input type="text" name="core_grade[]" id="core_grade" onkeypress="validate(event)" maxlength="3" class="form-control">
                                                </div>
                                            </div><br>

                                            <div id="TextBoxesGroupCore"></div>
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
                        <!-- END STEP 2-->
                        <!-- BEGIN STEP 3-->
                        <div class="tsf-step step-3">
                            <fieldset>
                                <div class="col-12"><legend class="col-lg-12"><i class="fa fa-user-o"></i> Craft Skills</legend><hr/></div>
                                <div class="row">
                                    <!-- BEGIN STEP CONTENT-->
                                    <div class="tsf-step-content col-lg-12" style="width: 100%;">
                                        <div class="col-lg-12">
                                            <div class="form-group col-sm-12">
                                                <label><i class="fa fa-question-circle-o"></i> Fields with (<font color="red">*</font>) are required. </label>
                                            </div>

                                            <div class="form-group row col-lg-12">
                                                <div class="col-lg-3">
                                                    <label for="craft_skill"><font color="red">*</font> Skills</label>
                                                    <select name="craft_skill[]" id="craft_skill" class="form-control required" style="width: 100%">
                                                        <?php if(!empty($craft)): ?>
                                                            <?php foreach ($craft as $value): ?>
                                                                <option value="<?php echo $value['craft_item_id'] ?>"><?php echo $value['craft_code']; ?></option>
                                                            <?php endforeach; ?>
                                                        <?php endif; ?>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="craft_rating"><font color="red">*</font> Rating</label>
                                                    <select name="craft_rating[]" id="craft_rating" class="form-control required" style="width: 100%">
                                                      <option></option>
                                                      <option value="Competent">Competent</option>
                                                      <option value="Not Yet Competent">Not Yet Competent</option>
                                                    </select>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="craft_completed">Completed</label>
                                                    <input type="text" name="craft_completed[]" id="craft_completed" class="form-control dob">
                                                </div>
                                                <div class="col-lg-3">
                                                    <label for="craft_grade">Grade</label>
                                                    <input type="text" name="craft_grade[]" id="craft_grade" onkeypress="validate(event)" maxlength="3" class="form-control">
                                                </div>
                                            </div><br>
                                            <div id="TextBoxesGroupCraft"></div>

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
                            '<?php if(!empty($craft)): ?>'+
                                '<?php foreach ($craft as $value): ?>'+
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
                            '<?php if(!empty($core)): ?>'+
                                '<?php foreach ($core as $value): ?>'+
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


    </script>

</body>


</html>