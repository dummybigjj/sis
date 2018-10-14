        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <form action="<?php echo site_url('user/user_activate_deactivate'); ?>" method="post" accept-charset="utf-8">
                <div class="col-xl-12">
                  <div class="cardbox">
                    <div class="cardbox-heading">
                      <div class="cardbox-header">Users table</div><small> &nbsp&nbsp </small>
                      <div class="cardbox-title">
                        <div class="btn-group" style="float: right;">
                          <input type="submit" class="mb-4 btn btn-success" name="activate" disabled="" value="Activate">
                          <input type="submit" class="mb-4 btn btn-dangers" name="deactivate" disabled="" value="Deativate">
                        </div>
                        <a href="<?php echo site_url('user_registration'); ?>" class="mb-4 btn btn-primary"><span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add User</a>
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
                              <th data-priority="3">Name</th>
                              <th>Email</th>
                              <th>Designation</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($users)): ?>
                              <?php $ctr = 1; ?>
                              <?php foreach ($users as $value): ?>
                                <tr>
                                  <td>
                                    <div class="form-group mt-0">
                                      <div class="custom-control custom-checkbox mb-0">
                                        <input class="custom-control-input" name="user_id[]" value="<?php echo $value['user_id'] ?>" id="logcheck <?php echo $ctr; ?>" type="checkbox">
                                        <label class="custom-control-label" for="logcheck <?php echo $ctr; ?>"></label>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <?php echo ($value['status']=='1')?'<div class="badge badge-success">TRUE</div>':'<div class="badge badge-danger">FALSE</div>'; ?>
                                  </td>
                                  <td><?php echo $value['u_full_name']; ?></td>
                                  <td><?php echo $value['u_email_address']; ?></td>
                                  <td><?php echo $value['designation']; ?></td>
                                  <td>
                                    <div class="btn-group">
                                      <button class="mb-4 btn btn-secondary" onclick="view_user(<?php echo $value['user_id'];?>)" type="button"><span class="nav-icon"><em class="ion-eye"></em></span> View</button>
                                      <button class="mb-4 btn btn-warning" onclick="edit_user(<?php echo $value['user_id'];?>)" type="button"><span class="nav-icon"><em class="ion-edit"></em></span> Edit</button>
                                    </div>
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
function view_user(id){
  $('#formviewUser')[0].reset();
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('user/get_user/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="name"]').val(data.u_full_name);
        $('[name="email"]').val(data.u_email_address);
        $('[name="designation"]').val(data.designation);
        $('[name="recent_login"]').val(data.recent_login);
        $('[name="device_name"]').val(data.device_name);
        $('[name="device_ip_address"]').val(data.device_ip_address);
        $('[name="password_reset_date"]').val(data.password_reset_date);
        $('[name="created_by"]').val(data.created_by);
        $('[name="updated_by"]').val(data.updated_by);
        $('[name="created"]').val(data.created);
        $('[name="modified"]').val(data.modified);
        //SHOW MODAL
        $('#viewUser').modal('show');
        $('.modal-title').text('User Information');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function edit_user(id){
  $('#formeditUser')[0].reset();                          //RESET FORM ON MODAL
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('user/get_user/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="user_id"]').val(data.user_id);
        $('[name="name"]').val(data.u_full_name);
        $('[name="email"]').val(data.u_email_address);
        $('[name="designation"]').val(data.designation);
        //SHOW MODAL
        $('#editUser').modal('show');
        $('.modal-title').text('Edit User Information');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_user(){
  var url;
  $('#editUser').modal('hide');
  url = "<?php echo site_url('user/user_update')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditUser').serialize(),
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