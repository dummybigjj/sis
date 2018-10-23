
        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <form action="<?php echo site_url('student/student_activate_deactivate'); ?>" method="post" accept-charset="utf-8">
                <div class="col-xl-12">
                  <div class="cardbox">

                    <div class="cardbox-heading">
                      <div class="cardbox-header">Students table</div><small> &nbsp&nbsp </small>
                      <div class="cardbox-title">
                        <div class="btn-group" style="float: right;">
                          <input type="submit" class="mb-4 btn btn-success" name="activate" disabled="" value="Activate">
                          <input type="submit" class="mb-4 btn btn-dangers" name="deactivate" disabled="" value="Deativate">
                        </div>
                        <a target="_blank" href="<?php echo site_url('student_registration'); ?>" class="mb-4 btn btn-primary"><span class="nav-icon"><em class="icon-ios-personadd-outline"></em></span> Register Student</a>
                      </div>
                    </div>

                    <div class="cardbox-body">
                      <div class="table-responsive">
                        <table class="table table-hover display responsive nowrap" id="example1" style="width: 100%">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-group mt-0">
                                  <div class="custom-control custom-checkbox mb-0">
                                    <input class="custom-control-input" id="checkAll" type="checkbox">
                                    <label class="custom-control-label" for="checkAll"></label>
                                  </div>
                                </div>
                              </th>
                              <th>Active</th>
                              <th data-priority="3">Student No.</th>
                              <th>Name</th>
                              <th>Type of Course</th>
                              <th>Course</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($students)): ?>
                              <?php $ctr=1; ?>
                              <?php foreach($students as $value): ?>
                                <tr>
                                  <td>
                                    <div class="form-group mt-0">
                                      <div class="custom-control custom-checkbox mb-0">
                                        <input class="custom-control-input" name="student_id[]" id="logcheck <?php echo $ctr; ?>" type="checkbox" value="<?php echo $value['student_id'] ?>">
                                        <label class="custom-control-label" for="logcheck <?php echo $ctr; ?>"></label>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <?php echo ($value['student_status']=='1')?'<div class="badge badge-success">TRUE</div>':'<div class="badge badge-danger">FALSE</div>'; ?>
                                  </td>
                                  <td><?php echo $value['student_no']; ?></td>
                                  <td><?php echo !empty($value['arabic_name'])?$value['arabic_name']:$value['english_name']; ?></td>
                                  <td><?php echo $value['type_of_course']; ?></td>
                                  <td><?php echo !empty($value['voc_program_acronym'])?$value['voc_program_acronym']:$value['diploma_course_acronym']; ?></td>
                                  <td>
                                    <a target="_blank" href="<?php echo site_url('student/'.$value['student_id']); ?>" class="mb-4 btn btn-warning"><span class="nav-icon"><em class="ion-edit"></em></span> Edit</a>
                                    <a target="_blank" href="<?php echo site_url('student/student_printable/'.$value['student_id']); ?>" class="mb-4 btn btn-danger"><span class="nav-icon"><em class="icon-ios-printer-outline"></em></span> Print</a>

                                  </td>
                                </tr>
                                <?php $ctr++; ?>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </tbody>
                        </table>
                      </div>
                    </div>

                  </div>
                </div>
              </form>
              
            </div>
          </div>
        </section>


<script type="text/javascript">
var checkboxes = $("input[type='checkbox']"), submitButt = $("input[type='submit']");
  $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
  });
  checkboxes.click(function() {
  submitButt.attr("disabled", !checkboxes.is(":checked"));
});

$(document).ready(function() {
  $('#example1').DataTable({
    responsive: true,
    columnDefs: [
      { responsivePriority: 1, targets: 0 },
      { responsivePriority: 2, targets: -1 }
    ]
  });
});

// Modal functions
function edit_diploma_course(id){
  $('#formeditDiplomaCourse')[0].reset();
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('diploma_course/get_diploma_course/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="course_id"]').val(data.course_id);
        $('[name="course_name"]').val(data.course_name);
        $('[name="course_acronym"]').val(data.course_acronym);
        //SHOW MODAL
        $('#editDiplomaCourse').modal('show');
        $('.modal-title').text('Edit Diploma Course');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_diploma_course(){
  var url;
  $('#editDiplomaCourse').modal('hide');
  url = "<?php echo site_url('diploma_course/diploma_course_update')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditDiplomaCourse').serialize(),
    dataType: "JSON",
    success: function(data){
      if(data.class_add=='alert alert-success'){
        swal({title: "Good job", text: data.msg, type: "success"},
          function(){location.reload();}
        );
      }
      if(data.class_add=='alert alert-warning'){
        swal({title: "Server Warning", text: data.msg, type: "warning"});
      }
      if(data.class_add=='alert alert-danger'){
        swal({title: "Server Error", text: data.msg, type: "error"});
      }
    },
    error: function (jqXHR, textStatus, errorThrown){
      alert('ERROR UPDATING DATA');
    }
  });
}

</script>