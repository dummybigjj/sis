
        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <form action="<?php echo site_url('core/core_activate_deactivate'); ?>" method="post" accept-charset="utf-8">
                <div class="col-xl-12">
                  <div class="cardbox">
                    <div class="cardbox-heading">
                      <div class="cardbox-header">Core table</div><small> &nbsp&nbsp </small>
                      <div class="cardbox-title">
                        <div class="btn-group" style="float: right;">
                          <input type="submit" class="mb-4 btn btn-success" name="activate" disabled="" value="Activate">
                          <input type="submit" class="mb-4 btn btn-dangers" name="deactivate" disabled="" value="Deativate">
                        </div>
                        <a href="<?php echo site_url('new_core'); ?>" class="mb-4 btn btn-primary"><span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add Core</a>
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
                              <th data-priority="3">Core Code</th>
                              <th>Created by</th>
                              <th>Updated by</th>
                              <th>Created</th>
                              <th>Modified</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($core)): ?>
                              <?php $ctr=1; ?>
                              <?php foreach($core as $value): ?>
                                <tr>
                                  <td>
                                    <div class="form-group mt-0">
                                      <div class="custom-control custom-checkbox mb-0">
                                        <input class="custom-control-input" id="logcheck <?php echo $ctr; ?>" name="core_item_id[]" value="<?php echo $value['core_item_id'] ?>" type="checkbox">
                                        <label class="custom-control-label" for="logcheck <?php echo $ctr; ?>"></label>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <?php echo ($value['status']=='1')?'<div class="badge badge-success">TRUE</div>':'<div class="badge badge-danger">FALSE</div>'; ?>
                                  </td>
                                  <td><?php echo $value['core_code']; ?></td>
                                  <td><?php echo $value['created_by']; ?></td>
                                  <td><?php echo $value['updated_by']; ?></td>
                                  <td><?php echo $value['created']; ?></td>
                                  <td><?php echo $value['modified']; ?></td>
                                  <td>
                                    <button type="button" class="mb-4 btn btn-warning" onclick="edit_core(<?php echo $value['core_item_id'];?>)"><span class="nav-icon"><em class="ion-edit"></em></span> Edit</button>
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

function edit_core(id){
  $('#formeditCore')[0].reset();                          //RESET FORM ON MODAL
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('core/get_core/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="core_item_id"]').val(data.core_item_id);
        $('[name="core_code"]').val(data.core_code);
        $('[name="description"]').val(data.description);
        //SHOW MODAL
        $('#editCore').modal('show');
        $('.modal-title').text('Edit Core');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_core(){
  var url;
  $('#editCore').modal('hide');
  url = "<?php echo site_url('core/core_update')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditCore').serialize(),
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