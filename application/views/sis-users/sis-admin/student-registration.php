        <section class="section-container">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xl-6" style="margin: 0 auto;">
                <div class="cardbox">
                  <div class="cardbox-heading">
                    <div class="cardbox-title">Horizontal Steps</div><small>With validation based on jquery.validate</small>
                  </div>
                  <div class="cardbox-body">
                    <form class="form-validate" id="example-form" action="<?php echo site_url('student_registration'); ?>" method="POST" >
                      <div>
                        <h4>Basic Info</h4>
                        <fieldset style="position: relative;height: auto;">
                          <label for="english_name"><font style="color: red">*</font> English name</label>
                          <input type="text" class="form-control " id="english_name" name="english_name" >
                          <label for="arabic_name"><font style="color: red">*</font> Arabic Name</label>
                          <input type="text" class="form-control " id="arabic_name" name="arabic_name" >
                          <label for="student_no"><font style="color: red">*</font> Student no.</label>
                          <input type="text" class="form-control " id="student_no" name="student_no" >
                          <label for="national_id"><font style="color: red">*</font> National Id</label>
                          <input type="text" class="form-control " id="national_id" name="national_id" >
                          <label for="email_address"><font style="color: red">*</font> Email</label>
                          <input type="text" class="form-control  email" id="email_address" name="email_address" >
                          <label for="mobile_no"><font style="color: red">*</font> Mobile no.</label>
                          <input type="text" class="form-control " id="mobile_no" name="mobile_no" >
                          <label for="nationality"><font style="color: red">*</font> Nationality</label>
                          <input type="text" class="form-control " id="nationality" name="nationality" >
                        </fieldset>
                        <h4>Course Info</h4>
                        <fieldset style="position: relative;height: auto;">
                          <label for="english_name"><font style="color: red">*</font> Company</label>
                          <input type="text" class="form-control required" id="english_name" name="english_name" >
                          <label for="english_name"><font style="color: red">*</font> Type of Course</label>
                          <select class="form-control " onkeyup="courseCheck(this)" onkeydown="courseCheck(this)" onkeyup="courseCheck(this)" onmouseout="courseCheck(this)">
                            <option></option>
                            <option value="Diploma">Diploma</option>
                            <option value="Vocational">Vocational</option>
                          </select>

                          <div id="vocational_course" style="display: none;">
                            <label for="vocational_course"><font style="color: red">*</font> Vocational Course</label>
                            <select name="vocational_course" class="form-control required select2-voc" id="vocational_course" style="width: 550px">
                              <option></option>
                              <option value="1">PREPG1</option>
                              <option value="2">PREPG2</option>
                            </select>
                          </div>

                          <div id="diploma_course" style="display: none;">
                            <label for="diploma_course"><font style="color: red">*</font> Diploma Course</label>
                            <select name="diploma_course" class="form-control required select2-voc" id="diploma_course" style="width: 550px">
                              <option></option>
                              <option value="1">CET</option>
                              <option value="2">AU</option>
                            </select>
                          </div>

                          <label for="training_start"><font style="color: red">*</font> Start Date of Training</label>
                          <input type="text" class="form-control" data-mask="9999-99-99" id="training_start" name="training_start" placeholder="YYYY/MM/DD" >
                          <label for="training_end"><font style="color: red">*</font> Expected End of Training</label>
                          <input type="text" class="form-control" data-mask="9999-99-99" id="training_end" name="training_end" placeholder="YYYY/MM/DD" >
                        </fieldset>
                        <h4>Other Info</h4>
                        <fieldset style="position: relative;height: auto;">
                          <label for="address"><font style="color: red">*</font> Address</label>
                          <input type="text" class="form-control " id="address" name="address" >
                          <label for="date_of_birth"><font style="color: red">*</font> Date of Birth</label>
                          <input type="text" class="form-control " id="date_of_birth" name="date_of_birth" data-mask="9999-99-99" placeholder="YYYY/MM/DD">
                          <label for="guardian_name"><font style="color: red">*</font> Guardian Name</label>
                          <input type="text" class="form-control " id="guardian_name" name="guardian_name" >
                          <label for="guardian_contact"><font style="color: red">*</font> Guardian Contact no.</label>
                          <input type="text" class="form-control " id="guardian_contact" name="guardian_contact" >
                        </fieldset>
                        <h4>Schedule</h4>
                        <fieldset style="position: relative;height: auto;">
                          <label for="subject"><font style="color: red">*</font> Subject</label>
                          <select name="subject[]" class="form-control required select2-voc" id="subject" style="width: 550px">
                            <option></option>
                            <option value="1">PREPG1</option>
                            <option value="2">PREPG2</option>
                          </select>
                          <label for="room"><font style="color: red">*</font> Room</label>
                          <select name="room[]" class="form-control required select2-voc" id="room" style="width: 550px">
                            <option></option>
                            <option value="1">PREPG1</option>
                            <option value="2">PREPG2</option>
                          </select>
                          <label for="day"><font style="color: red">*</font> Day</label>
                          <select name="day[]" class="form-control required select2-voc" id="day" style="width: 550px">
                            <option></option>
                            <option value="MONDAY">MONDAY</option>
                            <option value="TUESDAY">TUESDAY</option>
                            <option value="WEDNESDAY">WEDNESDAY</option>
                            <option value="THURSDAY">THURSDAY</option>
                            <option value="FRIDAY">FRIDAY</option>
                            <option value="SATURDAY">SATURDAY</option>
                            <option value="SUNDAY">SUNDAY</option>
                          </select>
                          <label for="time"><font style="color: red">*</font> Time</label>
                          <input type="text" class="form-control required" id="time" name="time[]" >
                          <div id="TextBoxesGroup"></div><br><br>
                          <div class="btn-group">
                            <button id="addButton" type="button" class="btn btn-success">&nbsp&nbsp&nbsp<span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add&nbsp&nbsp&nbsp</button>
                            <button id="removeButton" type="button" class="btn btn-danger"><span class="nav-icon"><em class="ion-ios-minus-outline"></em></span> Remove</button>  
                          </div>
                        </fieldset>
                        <h4>Skilss</h4>
                        <fieldset style="position: relative;height: auto;">
                          <label for="address"> English Proficiency</label><br>
                          <label for="address"><font style="color: red">*</font> English Proficiency Rating</label>
                          <input type="text" class="form-control " id="address" name="address" >
                          <label for="address"> Craft</label><br>
                          <label for="address"><font style="color: red">*</font> Craft Skill</label>
                          <input type="text" class="form-control " id="address" name="address" >
                          <label for="address"><font style="color: red">*</font> Craft Rating</label>
                          <input type="text" class="form-control " id="address" name="address" >
                          <label for="address"> Core</label><br>
                          <label for="address"><font style="color: red">*</font> Core Skill</label>
                          <input type="text" class="form-control " id="address" name="address" >
                          <label for="address"><font style="color: red">*</font> Core Rating</label>
                          <input type="text" class="form-control " id="address" name="address" >
                        </fieldset>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


<script type="text/javascript">

$(document).ready(function(){
  var counter = 1;
  $("#addButton").click(function () {
    if(counter>10){
        alert("Only 10 forms are allowed");
        return false;
    }
        
    var new_subject_schedule = $(document.createElement('div')).attr("id", 'new_subject_schedule' + counter);
    new_subject_schedule.after().html(

      '<div class="card-footer"></div><br><label for="subject"><font style="color: red">*</font> Subject</label>'+
      '<select name="subject[]" class="form-control required select2-voc1" style="width: 550px">'+
        '<option></option>'+
        '<option value="1">PREPG1</option>'+
        '<option value="2">PREPG2</option>'+
      '</select>'+

      '<label for="room"><font style="color: red">*</font> Room</label>'+
      '<select name="room[]" class="form-control required select2-voc1" style="width: 550px">'+
        '<option></option>'+
        '<option value="1">PREPG1</option>'+
        '<option value="2">PREPG2</option>'+
      '</select>'+

      '<label for="day"><font style="color: red">*</font> Day</label>'+
      '<select name="day[]" class="form-control required select2-voc1" style="width: 550px">'+
        '<option></option>'+
        '<option value="MONDAY">MONDAY</option>'+
        '<option value="TUESDAY">TUESDAY</option>'+
        '<option value="WEDNESDAY">WEDNESDAY</option>'+
        '<option value="THURSDAY">THURSDAY</option>'+
        '<option value="FRIDAY">FRIDAY</option>'+
        '<option value="SATURDAY">SATURDAY</option>'+
        '<option value="SUNDAY">SUNDAY</option>'+
      '</select>'+

      '<label for="time"><font style="color: red">*</font> Time</label>'+
      '<input type="text" class="form-control required" id="time" name="time[]" >'

    );

    new_subject_schedule.appendTo("#TextBoxesGroup");
    counter++;
  });

  $("#removeButton").click(function (){
    if(counter==1){
      alert("No more forms to remove");
      return false;
    }
    counter--;
    $("#new_subject_schedule" + counter).remove();
  });

});


function courseCheck(that) {
  if(that.value == "Diploma") {
    // show field
    document.getElementById("diploma_course").style.display = "block";
    // add class name
    document.getElementsByName("diploma_course").className = "required";

    // hide field
    document.getElementById("vocational_course").style.display = "none";
    // reset value
    document.getElementById("vocational_course").value = "";
  }else if(that.value == "Vocational"){
    // show field
    document.getElementById("vocational_course").style.display = "block";
    // add class name
    document.getElementsByName("vocational_course").className = "required";

    // hide field
    document.getElementById("diploma_course").style.display = "none";
    // reset value
    document.getElementById("diploma_course").value = "";
  }
}

$(document).ready(function() {
    $('.select2-voc').select2();
});

$(document).ready(function() {
    $('.select2-voc1').select2();
});

var startTime = $('#datetimepicker1');
$('#datetimepicker1').datetimepicker({
    format:'H:i:00',
    formatTime: 'h:i:00',
    datepicker:false,
    // step:30,
    allowTimes:['08:00:00','10:00:00','12:30:00','14:30:00','16:00:00']
});


</script>