          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12" style="margin: 0 auto">

                  <div class="alert alert-warning" role="alert">
                    <i class="fa fa-question-circle-o"></i> IMPORTANT NOTE: Editing of this Attendance is only available for "10 hours"(starting from the class scheduled time), you cannot update attendance table after 10 hours.
                  </div>

                  <div class="card">

                    <form action="<?php echo site_url('faculty/faculty_change_student_attendance_status'); ?>" method="post" accept-charset="utf-8">
                    <div class="card-close d-flex align-items-center">
                      <div class="dropdown">
                        <?php if(!empty($students[0]['time']) && $students[0]['time'] < '16:00:00'): ?>
                          <?php if((!empty($students[0]['time'])) && date('H:i:s') < date('H:i:s',strtotime('+10 hours',strtotime($students[0]['time']))) && date('H:i:s') >= $students[0]['time']): ?>
                          <div class="btn-group">
                            <input type="submit" name="present" value="&nbsp Present &nbsp" disabled="" class="btn btn-success">
                            <input type="submit" name="absent" value="&nbsp Absent &nbsp" disabled="" class="btn btn-danger">
                            <input type="submit" name="late" value=" &nbsp&nbsp Late &nbsp&nbsp " disabled="" class="btn btn-warning">
                            <input type="submit" name="excuse" value="&nbsp Excuse &nbsp" disabled="" class="btn btn-primary">
                          </div>
                          <?php endif; ?>
                        <?php else: ?>
                          <?php if((!empty($students[0]['time'])) && date('H:i:s') < date('H:i:s',strtotime('+7 hours',strtotime($students[0]['time']))) && date('H:i:s') >= $students[0]['time']): ?>
                          <div class="btn-group">
                            <input type="submit" name="present" value="&nbsp Present &nbsp" disabled="" class="btn btn-success">
                            <input type="submit" name="absent" value="&nbsp Absent &nbsp" disabled="" class="btn btn-danger">
                            <input type="submit" name="late" value=" &nbsp&nbsp Late &nbsp&nbsp " disabled="" class="btn btn-warning">
                            <input type="submit" name="excuse" value="&nbsp Excuse &nbsp" disabled="" class="btn btn-primary">
                          </div>
                          <?php endif; ?>
                        <?php endif; ?>
                      </div>
                    </div>

                    <div class="card-header d-flex align-items-center">
                      <div class="dropdown"> 
                        <div class="statistic d-flex align-items-center no-padding-top no-padding-bottom">
                          <div class="icon bg-red"><i class="fa fa-table" aria-hidden="true"></i></div>
                          <div class="text">
                            <small class="h5">
                              <?php if(!empty($students[0]['subject_code'])): ?>
                                <?php echo $students[0]['subject_code'].' | '.$students[0]['room_name'].' '.$students[0]['day'].' '.$students[0]['time']; ?>
                              <?php endif; ?>
                            </small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body">
                      <table id="example" class="table table-striped bg-white table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th><input type="checkbox" id="checkAll" class="checkbox-template" /></th>
                            <th>Student No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th style="width: 15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($students)): ?>
                          <?php foreach($students as $value): ?>
                              <tr>
                                <td>
                                  <input type="checkbox" class="checkbox-template" name="student_ids[]" value="<?php echo $value['student_id'] ?>" />
                                  <input type="hidden" name="subject" value="<?php echo $value['subject']; ?>" />
                                  <input type="hidden" name="subject_c" value="<?php echo $value['subject_code']; ?>" />
                                  <input type="hidden" name="batch_year" value="<?php echo $value['batch_year']; ?>" />
                                  <input type="hidden" name="schedule_id" value="<?php echo $schedule_id; ?>" />

                                </td>
                                <td><?php echo $value['student_no']; ?></td>
                                <td><?php echo $value['arabic_name']; ?></td>
                                <th>
                                  <?php if($value['attendance']=='P'): ?>
                                    <font style="color: green">Present</font>
                                  <?php elseif($value['attendance']=='A'): ?>
                                    <font style="color: red">Absent</font>
                                  <?php elseif($value['attendance']=='L'): ?>
                                    <font style="color: yellow">Late</font>
                                  <?php elseif($value['attendance']=='E'): ?>
                                    <font style="color: blue">Excuse</font>
                                  <?php endif; ?>
                                </th>
                                <td><?php echo $value['attendance_remarks']; ?></td>
                                <td>
                                  <div class="btn-group">
                                    <?php if($value['time'] < '16:00:00'): ?>
                                      <?php if(date('H:i:s') < date('H:i:s',strtotime('+10 hours',strtotime($value['time']))) && date('H:i:s') >= $value['time']): ?>
                                        <button type="button" class="btn btn-warning" onclick="edit_attendance(<?php echo $value['student_id'] ?>, <?php echo $value['subject']; ?>, '<?php echo $value['subject_code']; ?>', '<?php echo $value['batch_year']; ?>', '<?php echo date('Y-m-d'); ?>')">&nbsp<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Attendance &nbsp</button>
                                      <?php else: ?>
                                        <div class="alert alert-danger" role="alert" style="margin: 0 auto">
                                          <i class="fa fa-ban fa-lg"></i>
                                        </div>
                                      <?php endif; ?>
                                    <?php else: ?>
                                      <?php if(date('H:i:s') < date('H:i:s',strtotime('+7 hours',strtotime($value['time']))) && date('H:i:s') >= $value['time']): ?>
                                        <button type="button" class="btn btn-warning" onclick="edit_attendance(<?php echo $value['student_id'] ?>, <?php echo $value['subject']; ?>, '<?php echo $value['subject_code']; ?>', '<?php echo $value['batch_year']; ?>', '<?php echo date('Y-m-d'); ?>')">&nbsp<i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Attendance &nbsp</button>
                                      <?php else: ?>
                                        <div class="alert alert-danger" role="alert" style="margin: 0 auto">
                                          <i class="fa fa-ban fa-lg"></i>
                                        </div>
                                      <?php endif; ?>
                                    <?php endif; ?>

                                  </div>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Student No.</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Remarks</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>
                    </form>

                  </div>
                </div>

              </div>
            </div>
          </section>


<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
  });

  var checkboxes = $("input[type='checkbox']"), submitButt = $("input[type='submit']");
  $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
  });
  checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
  });

  // Modal functions
  function edit_attendance(student_id, subject_id, subject_code, batch_year_id, attendance_date){
  $('#formeditAttendance')[0].reset();
  // Set Primary keys
  $('[name="student_id"]').val(student_id);
  $('[name="subject_id"]').val(subject_id);
  $('[name="subject_code"]').val(subject_code);
  $('[name="batch_year_id"]').val(batch_year_id);
  $('[name="attendance_date"]').val(attendance_date);

  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('faculty/get_student_attendance/') ?>" + student_id + "/" + subject_id + "/" + subject_code + "/" + batch_year_id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="status"]').val(data.attendance);
        $('[name="remarks"]').val(data.remarks);
        //SHOW MODAL
        $('#editAttendance').modal('show');
        $('.modal-title').text('Update Student Attendance');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_student_attendance(){
  var url;
  // $('#editAttendance').modal('hide');
  url = "<?php echo site_url('faculty/faculty_update_student_attendance')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditAttendance').serialize(),
    dataType: "JSON",
    success: function(data){
       location.reload();
    },
    error: function (jqXHR, textStatus, errorThrown){
      alert('ERROR UPDATING DATA');
    }
  });
}

// function closeModal(){
//   location.reload();
// }

</script>