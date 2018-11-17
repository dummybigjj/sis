        $(function () {
            pageLoadScript();
        });

        function pageLoadScript() {

            _stepEffect = $('#stepEffect').val();
            _style = 'style2';
            _stepTransition = $('#stepTransition').is(':checked');
            _showButtons = $('#showButtons').is(':checked');
            _showStepNum = $('#showStepNum').is(':checked');

          tsf1=  $('.tsf-wizard-1').tsfWizard({
                stepEffect: 'slideRightLeft',
                stepStyle: _style,
                navPosition: 'top',
                validation: true,
                manySteps: true,
                stepTransition: _stepTransition,
                showButtons: _showButtons,
                showStepNum: _showStepNum,
                height: 'auto'
            });         

        }

        function is_graduated(that) {
            if (that.value == "Graduated") {
                // show field
                document.getElementById("graduated").style.display = "";
                // set date graduated to required
                $("#graduate").addClass("required");
            }else{
                // hide field
                document.getElementById("graduated").style.display = "none";
                // reset graduated field value
                document.getElementById("graduate").value = "";
                // remove required class in graduated field
                $("#graduate").removeClass("required");
            }
        }

        function courseCheck(that) {
          if(that.value == "Diploma") {
            // show field
            document.getElementById("diploma_course_field").style.display = "";
            // set diploma_course_field to required
            $("#diploma_course").addClass("required");

            // hide field
            document.getElementById("vocational_course_field").style.display = "none";
            // reset vocational course field value
            document.getElementById("vocational_course").value = "";
            // remove required class in vocational_course_field
            $("#vocational_course").removeClass("required");

          }else if(that.value == "Vocational"){
            // show field
            document.getElementById("vocational_course_field").style.display = "";
            // set diploma_course_field to required
            $("#vocational_course").addClass("required");

            // hide field
            document.getElementById("diploma_course_field").style.display = "none";
            // reset value
            document.getElementById("diploma_course").value = "";
            // remove required class in vocational_course_field
            $("#diploma_course").removeClass("required");

          }else if(that.value == ""){
            // hide field
            document.getElementById("vocational_course_field").style.display = "none";
            // hide field
            document.getElementById("diploma_course_field").style.display = "none";

            // reset value
            document.getElementById("vocational_course").value = "";
            document.getElementById("diploma_course").value = "";

            // remove required class in vocational_course_field
            $("#vocational_course").removeClass("required");
            // remove required class in vocational_course_field
            $("#diploma_course").removeClass("required");
          }
        }

        $(document).ready(function(){
            $("#training_end").keyup(function(){
                if($('#training_start').val() > $(this).val()){
                    alert('Invalid input. Start date should be less than on Expected end date');
                    $(this).val("");
                }
            });
        });

        $(".select2").select2();
        $('.select2-search').select2();
        $("form").attr('autocomplete', 'off');
        $('.dob').datetimepicker({
            format:'Y-m-d',
            timepicker:false
        });