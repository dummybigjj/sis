        <section class="section-container">
          <div class="container-overlap bg-gradient-info text-center">
            <div class="text-white">
              <span class="nav-icon"><em class="ion-person-add icon-3x icon-fw"></em></span>
              <div class="h3">Register New Student</div><small>Fillup form below. Fields with (<font style="color: red">*</font>) are required.</small>
            </div>
          </div>
          <div class="container container-md">
            <form action="site.html" method="POST">
            <div class="cardbox" id="personl">
              <h5 class="cardbox-heading pb-0"><span class="nav-icon"><em class="ion-ios-person-outline icon-lg"></em></span> Personal</h5>
              <div class="cardbox-body">
                <table class="table  mb-0">
                  <tbody>
                    <tr>
                      <td> Arabic Name</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="arabic_name" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> English Name</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="english_name" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Student No.</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="student_no" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> National ID</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="national_id" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Email</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="email_address" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Mobile No.</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="mobile_no" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Nationality</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="nationality" > </span></td>
                    </tr>
                    <tfoot>
                      <tr>
                        <td></td>
                        <td>
                          <div class="float-right">
                            <a href="#course" target="_self" class="btn btn-info">Next</a>
                          </div>
                        </td>
                      </tr>
                    </tfoot>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cardbox" id="course">
              <h5 class="cardbox-heading pb-0"><span class="nav-icon"><em class="ion-ios-paper-outline icon-lg"></em></span> Course</h5>
              <div class="cardbox-body">
                <table class="table  mb-0">
                  <tbody>
                    <tr>
                      <td><font style="color: red">*</font> Company</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="company" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Type of Course</td>
                      <td><span class="is-editable text-inherit"> 
                        <select class="form-control" name="type_of_course" onkeyup="courseCheck(this)" onkeydown="courseCheck(this)" onkeyup="courseCheck(this)" onmouseout="courseCheck(this)">
                          <option></option>
                          <option value="Diploma">Diploma</option>
                          <option value="Vocational">Vocational</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr id="vocational_course" style="display: none;">
                      <td><font style="color: red">*</font> Vocational Course</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="vocational_course" id="vocational_course_field" class="form-control">
                          <option value=""></option>
                          <option value="1">PREPG1</option>
                          <option value="2">PREPG2</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr id="diploma_course" style="display: none;">
                      <td><font style="color: red">*</font> Diploma Course</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="diploma_course" id="diploma_course_field" class="form-control">
                          <option value=""></option>
                          <option value="1">PREPG1</option>
                          <option value="2">PREPG2</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Training</td>
                      <td><span class="is-editable text-inherit">
                        <div class="rel-wrapper ui-datepicker ui-datepicker-popup dp-theme-danger" id="example-datepicker-container-5">
                          <div class="input-daterange" id="example-datepicker-5">
                            <div class="form-group row m-0">
                              <div class="col-6">
                                <p>Start Date</p>
                                <input class="form-control" type="text" name="training_start" data-date-format="yyyy-mm-dd">
                              </div>
                              <div class="col-6">
                                <p>Expected End</p>
                                <input class="form-control" type="text" name="training_end">
                              </div>
                            </div>
                          </div>
                        </div>
                      </span></td>
                    </tr>

                    <foot>
                      <tr>
                        <td></td>
                        <td>
                          <div class="float-right">
                            <div class="btn-group">
                              <a href="#personl" class="btn btn-info">Prev</a>
                              <a href="#other" class="btn btn-info">Next</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </foot>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cardbox" id="other">
              <h5 class="cardbox-heading pb-0"><span class="nav-icon"><em class="ion-ios-person-outline icon-lg"></em></span> Other</h5>
              <div class="cardbox-body">
                <table class="table  mb-0">
                  <tbody>
                    <tr>
                      <td><font style="color: red">*</font> Address</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control" name="address" > </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Date of Birth</td>
                      <td>
                        <span class="is-editable text-inherit">
                          <div class="rel-wrapper ui-datepicker ui-datepicker-popup dp-theme-info" id="example-datepicker-container-4">
                            <input class="form-control" name="date_of_birth" id="example-datepicker-4" type="text" data-date-format="yyyy-mm-dd" data-date="6/25/2017" placeholder="Select a date..">
                          </div>
                        </span>
                    </td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Guardian Name</td>
                      <td><span class="is-editable text-inherit"><input type="text" class="form-control" name="guardian_name" ></span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Guardian Contact no.</td>
                      <td><span class="is-editable text-inherit"> <input type="text" class="form-control " name="guardian_contact" > </span></td>
                    </tr>

                    <tfoot>
                      <tr>
                        <td></td>
                        <td>
                          <div class="float-right">
                            <div class="btn-group">
                              <a href="#course" class="btn btn-info">Prev</a>
                              <a href="#schedule" class="btn btn-info">Next</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tfoot>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cardbox" id="schedule">
              <h5 class="cardbox-heading pb-0"><span class="nav-icon"><em class="ion-ios-paper-outline icon-lg"></em></span> Schedule</h5>
              <div class="cardbox-body">
                <table class="table  mb-0" id="sched">
                  <tbody>
                    <tr>
                      <td><font style="color: red">*</font> Subject</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="subject[]" class="form-control">
                          <option></option>
                          <option value="Diploma">Diploma</option>
                          <option value="Vocational">Vocational</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Room</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="room[]" class="form-control">
                          <option value=""></option>
                          <option value="1">PREPG1</option>
                          <option value="2">PREPG2</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Day</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="day[]" class="form-control">
                          <option></option>
                            <option value="MONDAY">MONDAY</option>
                            <option value="TUESDAY">TUESDAY</option>
                            <option value="WEDNESDAY">WEDNESDAY</option>
                            <option value="THURSDAY">THURSDAY</option>
                            <option value="FRIDAY">FRIDAY</option>
                            <option value="SATURDAY">SATURDAY</option>
                            <option value="SUNDAY">SUNDAY</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Time</td>
                      <td><span class="is-editable text-inherit"> 
                        <input type="text" class="form-control datetimepicker1" name="time[]" autocomplete="off"> 
                        <!-- <div class="clockpicker input-group mb-4" data-autoclose="true">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><span class="ion-clock"></span></div>
                          </div>
                          <input type="text" name="time[]" class="form-control" id="datetimepicker1" autocomplete="off">
                        </div> -->

                      </span></td>
                    </tr>

                    <tfoot>
                      <tr>
                        <td></td>
                        <td>
                          <div class="btn-group">
                            <button id="addButton" type="button" class="btn btn-success">&nbsp&nbsp&nbsp<span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add&nbsp&nbsp&nbsp</button>
                            <button id="removeButton" type="button" class="btn btn-danger"><span class="nav-icon"><em class="ion-ios-minus-outline"></em></span> Remove</button>  
                          </div>
                          <div class="float-right">
                            <div class="btn-group">
                              <a href="#other" class="btn btn-info">Prev</a>
                              <a href="#skills" class="btn btn-info">Next</a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tfoot>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="cardbox" id="skills">
              <h5 class="cardbox-heading pb-0"><span class="nav-icon"><em class="ion-wand icon-lg"></em></span> Skills</h5>
              <div class="cardbox-body">
                <table class="table  mb-0">
                  <tbody>
                    <tr>
                      <td>English Proficiency</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> English Proficiency Rating</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="eng_rating" class="form-control">
                          <option></option>
                          <option value="POOR">POOR</option>
                          <option value="BELOW AVERAGE">BELOW AVERAGE</option>
                          <option value="AVERAGE">AVERAGE</option>
                          <option value="GOOD">GOOD</option>
                          <option value="VERY GOOD">VERY GOOD</option>
                          <option value="EXCELLENT">EXCELLENT</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Craft</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Craft Skills</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="craft_skill" class="form-control">
                          <option></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Craft Rating</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="craft_rating" class="form-control">
                          <option></option>
                          <option value="POOR">POOR</option>
                          <option value="BELOW AVERAGE">BELOW AVERAGE</option>
                          <option value="AVERAGE">AVERAGE</option>
                          <option value="GOOD">GOOD</option>
                          <option value="VERY GOOD">VERY GOOD</option>
                          <option value="EXCELLENT">EXCELLENT</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td>Core</td>
                      <td></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Core Skills</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="core_skill" class="form-control">
                          <option></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                        </select>
                      </span></td>
                    </tr>
                    <tr>
                      <td><font style="color: red">*</font> Core Rating</td>
                      <td><span class="is-editable text-inherit"> 
                        <select name="core_rating" class="form-control">
                          <option></option>
                          <option value="POOR">POOR</option>
                          <option value="BELOW AVERAGE">BELOW AVERAGE</option>
                          <option value="AVERAGE">AVERAGE</option>
                          <option value="GOOD">GOOD</option>
                          <option value="VERY GOOD">VERY GOOD</option>
                          <option value="EXCELLENT">EXCELLENT</option>
                        </select>
                      </span></td>
                    </tr>
                    <tfoot>
                      <tr>
                        <td></td>
                        <td>
                          <div class="float-right">
                            <div class="btn-group">
                              <a href="#schedule" target="_self" class="btn btn-info">Prev</a>
                              <button class="btn btn-success" type="submit"><span class="nav-icon"></span><em class="ion-ios-checkmark-outline"></em> Save</button>
                            </div>
                          </div>
                        </td>
                      </tr>
                    </tfoot>
                  </tbody>
                </table>
              </div>
            </div>

            </form>

            <div class="col-sm-6">
              <br><br><br><br>
            </div>


          </div>
        </section>

<script type="text/javascript">
function courseCheck(that) {
  if(that.value == "Diploma") {
    // show field
    document.getElementById("diploma_course").style.display = "";

    // hide field
    document.getElementById("vocational_course").style.display = "none";
    // reset value
    document.getElementById("vocational_course_field").value = "";
  }else if(that.value == "Vocational"){
    // show field
    document.getElementById("vocational_course").style.display = "";

    // hide field
    document.getElementById("diploma_course").style.display = "none";
    // reset value
    document.getElementById("diploma_course_field").value = "";
  }else if(that.value == ""){
    // hide field
    document.getElementById("vocational_course").style.display = "none";
    // hide field
    document.getElementById("diploma_course").style.display = "none";

    // reset value
    document.getElementById("vocational_course_field").value = "";
    document.getElementById("diploma_course_field").value = "";
  }
}

$(document).ready(function() {
    $('.select2-voc').select2();
});

$(document).ready(function() {
    $('.select2-voc1').select2();
});

var startTime = $('.datetimepicker4');
$('.datetimepicker4').datetimepicker({
    format:'H:i:00',
    formatTime: 'h:i:00',
    datepicker:false,
    // step:30,
    allowTimes:['08:00:00','10:00:00','12:30:00','14:30:00','16:00:00']
});

var startTime1 = $('.datetimepicker1');
$('.datetimepicker1').datetimepicker({
    format:'H:i:00',
    formatTime: 'h:i:00',
    datepicker:false,
    // step:30,
    allowTimes:['08:00:00','10:00:00','12:30:00','14:30:00','16:00:00']
});
var startTime2 = $('.datetimepicker2');
$('.datetimepicker2').datetimepicker({
    format:'H:i:00',
    formatTime: 'h:i:00',
    datepicker:false,
    // step:30,
    allowTimes:['08:00:00','10:00:00','12:30:00','14:30:00','16:00:00']
});
var startTime3 = $('.datetimepicker3');
$('.datetimepicker3').datetimepicker({
    format:'H:i:00',
    formatTime: 'h:i:00',
    datepicker:false,
    // step:30,
    allowTimes:['08:00:00','10:00:00','12:30:00','14:30:00','16:00:00']
});

$(document).ready(function(){
  var counter = 1;
  $("#addButton").click(function () {
    if(counter>2){
        alert("Atleast 3 subjects are allowed");
        return false;
    }
        
    var new_subject_schedule = $(document.createElement('tbody')).attr("id", 'new_subject_schedule' + counter);
    new_subject_schedule.after().html(
      '<tr>'+
        '<td> &nbsp </td>'+
        '<td> &nbsp </td>'+
      '</tr>'+
      '<tr>'+
        '<td><font style="color: red">*</font> Subject</td>'+
        '<td><span class="is-editable text-inherit">'+
          '<select name="subject[]" class="form-control">'+
            '<option></option>'+
            '<option value="Diploma">Diploma</option>'+
            '<option value="Vocational">Vocational</option>'+
          '</select>'+
        '</span></td>'+
      '</tr>'+
      '<tr>'+
        '<td><font style="color: red">*</font> Room</td>'+
        '<td><span class="is-editable text-inherit">'+
          '<select name="room[]" class="form-control">'+
            '<option value=""></option>'+
            '<option value="1">PREPG1</option>'+
            '<option value="2">PREPG2</option>'+
          '</select>'+
        '</span></td>'+
      '</tr>'+
      '<tr>'+
        '<td><font style="color: red">*</font> Day</td>'+
        '<td><span class="is-editable text-inherit">'+
          '<select name="day[]" class="form-control">'+
            '<option></option>'+
              '<option value="MONDAY">MONDAY</option>'+
              '<option value="TUESDAY">TUESDAY</option>'+
              '<option value="WEDNESDAY">WEDNESDAY</option>'+
              '<option value="THURSDAY">THURSDAY</option>'+
              '<option value="FRIDAY">FRIDAY</option>'+
              '<option value="SATURDAY">SATURDAY</option>'+
              '<option value="SUNDAY">SUNDAY</option>'+
          '</select>'+
        '</span></td>'+
      '</tr>'+
      '<tr>'+
        '<td><font style="color: red">*</font> Time</td>'+
        '<td><span class="is-editable text-inherit"> <input type="text" class="form-control datetimepicker'+counter+'" name="time[]" autocomplete="off"> </span></td>'+
      '</tr>'

    );

    new_subject_schedule.appendTo("#sched");
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


</script>