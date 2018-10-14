          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12" style="margin: 0 auto">
                  <div class="card">

                    <form action="<?php echo site_url('student/student_activate_deactivate'); ?>" method="post" accept-charset="utf-8">
                    <div class="card-close d-flex align-items-center">
                      <div class="btn-group">
                        <input type="submit" name="activate" value="&nbsp Activate &nbsp" disabled="" class="btn btn-success">
                        <input type="submit" name="deactivate" value=" Deactivate " disabled="" class="btn btn-danger">
                      </div>
                    </div>

                    <div class="card-header d-flex align-items-center">
                      <div class="dropdown">
                        <a href="<?php echo site_url('student_registration'); ?>" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> New Students </a>
                      </div>
                    </div>

                    <div class="card-body">
                      <table id="example" class="table table-striped bg-white table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th><input type="checkbox" id="checkAll" class="checkbox-template" /></th>
                            <th>Active</th>
                            <th>Student No.</th>
                            <th>Email</th>
                            <th>English Name</th>
                            <th>Arabic Name</th>
                            <th>Mobile No.</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($students)): ?>
                          <?php foreach($students as $value): ?>
                              <tr>
                                <td><input type="checkbox" class="checkbox-template" name="student_id[]" value="<?php echo $value['student_id'] ?>" /></td>
                                <td><?php echo ($value['status']=='1')?'TRUE':'FALSE'; ?></td>
                                <td><?php echo $value['student_no']; ?></td>
                                <td><?php echo $value['email_address']; ?></td>
                                <td><?php echo $value['english_name']; ?></td>
                                <td><?php echo $value['arabic_name']; ?></td>
                                <td><?php echo $value['mobile_no']; ?></td>
                                <td>
                                  <div class="btn-group">
                                    <button type="button" class="btn btn-primary" onclick="view_student(<?php echo $value['student_id'];?>)"> <i class="fa fa-eye" aria-hidden="true"></i> </button>
                                    <button type="button" class="btn btn-warning" onclick="edit_student(<?php echo $value['student_id'];?>)"> <i class="fa fa-pencil-square-o" aria-hidden="true"></i> </button>
                                  </div>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th></th>
                            <th>Active</th>
                            <th>Student No.</th>
                            <th>Email</th>
                            <th>English Name</th>
                            <th>Arabic Name</th>
                            <th>Mobile No.</th>
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
  function view_student(id){
  $('#formviewStudent')[0].reset();                          //RESET FORM ON MODAL
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('student/get_student/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="student_no"]').val(data.student_no);
        $('[name="national_id"]').val(data.national_id);
        $('[name="email_address"]').val(data.email_address);
        $('[name="mobile_no"]').val(data.mobile_no);
        $('[name="english_name"]').val(data.english_name);
        $('[name="arabic_name"]').val(data.arabic_name);
        $('[name="nationality"]').val(data.nationality);
        $('[name="batch_year_enrolled"]').val(data.batch_year_enrolled);
        $('[name="created_by"]').val(data.created_by);
        $('[name="updated_by"]').val(data.updated_by);
        $('[name="created"]').val(data.created);
        $('[name="modified"]').val(data.modified);
        //SHOW MODAL
        $('#viewStudent').modal('show');
        $('.modal-title').text('Student Information');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function edit_student(id){
  $('#formeditStudent')[0].reset();                          //RESET FORM ON MODAL
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('student/get_student/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="student_id"]').val(data.student_id);
        $('[name="student_no"]').val(data.student_no);
        $('[name="national_id"]').val(data.national_id);
        $('[name="email_address"]').val(data.email_address);
        $('[name="mobile_no"]').val(data.mobile_no);
        $('[name="english_name"]').val(data.english_name);
        $('[name="arabic_name"]').val(data.arabic_name);
        $('[name="nationality"]').val(data.nationality);
        //SHOW MODAL
        $('#editStudent').modal('show');
        $('.modal-title').text('Update Student Information');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_student(){
  var url;
  $('#editStudent').modal('hide');
  url = "<?php echo site_url('student/student_update')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditStudent').serialize(),
    dataType: "JSON",
    success: function(data){
      $('#success').modal('show');
      $('.modal-title').text('Message');
      $('#msg_alert').addClass(data.class_add);
      $('#msg').html(data.msg);
    },
    error: function (jqXHR, textStatus, errorThrown){
      alert('ERROR UPDATING DATA');
    }
  });
}

function closeModal(){
  location.reload();
}

</script>