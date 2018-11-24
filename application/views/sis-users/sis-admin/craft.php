
        <section class="section-container no-padding-top">
          <div class="container-fluid">

            <div class="alert alert-warning mb-3">
              <span class="nav-icon"><em class="icon-ios-information-outline icon-lg"></em></span> Deletion/Removal of Craft will affect related data such as "Student Skills". Affected data will be deleted/removed permanently also.
            </div>

            <div class="row">

              <form action="<?php echo site_url('craft/craft_activate_deactivate'); ?>" method="post" accept-charset="utf-8">
                <div class="col-xl-12">
                  <div class="cardbox">
                    <div class="cardbox-heading">
                      <div class="cardbox-header">Craft table</div><small> &nbsp&nbsp </small>
                      <div class="cardbox-title">
                        <div style="float: right;">
                          <input type="submit" class="mb-4 btn btn-danger" name="delete" disabled="" value="Delete">
                          <div class="btn-group">
                            <input type="submit" class="mb-4 btn btn-success" name="activate" disabled="" value="Activate">
                            <input type="submit" class="mb-4 btn btn-secondary" name="deactivate" disabled="" value="Deativate">
                          </div>
                        </div>
                        <a href="<?php echo site_url('new_craft'); ?>" class="mb-4 btn btn-primary"><span class="nav-icon"><em class="ion-ios-plus-outline"></em></span> Add Craft</a>
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
                              <th data-priority="3">Craft Code</th>
                              <th>Course</th>
                              <th>Created by</th>
                              <th>Updated by</th>
                              <th>Created</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php if(!empty($craft)): ?>
                              <?php $ctr=1; ?>
                              <?php foreach($craft as $value): ?>
                                <tr>
                                  <td>
                                    <div class="form-group mt-0">
                                      <div class="custom-control custom-checkbox mb-0">
                                        <input class="custom-control-input" id="logcheck <?php echo $ctr; ?>" name="craft_item_id[]" value="<?php echo $value['craft_item_id'] ?>" type="checkbox">
                                        <label class="custom-control-label" for="logcheck <?php echo $ctr; ?>"></label>
                                      </div>
                                    </div>
                                  </td>
                                  <td>
                                    <?php echo ($value['status']=='1')?'<div class="badge badge-success">TRUE</div>':'<div class="badge badge-danger">FALSE</div>'; ?>
                                  </td>
                                  <td><?php echo $value['craft_code']; ?></td>
                                  <td><?php echo $value['voc_program']; ?></td>
                                  <td><?php echo $value['created_by']; ?></td>
                                  <td><?php echo $value['updated_by']; ?></td>
                                  <td><?php echo $value['created']; ?></td>
                                  <td>
                                    <button type="button" class="mb-4 btn btn-warning" onclick="edit_craft(<?php echo $value['craft_item_id'];?>)"><span class="nav-icon"><em class="ion-edit"></em></span> Edit</button>
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

function edit_craft(id){
  $('#formeditCraft')[0].reset();                          //RESET FORM ON MODAL
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('craft/get_craft/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="craft_item_id"]').val(data.craft_item_id);
        $('[name="craft_code"]').val(data.craft_code);
        $('[name="description"]').val(data.description);
        $('[name="voc_program"]').val(data.voc_program);
        //SHOW MODAL
        $('#editCraft').modal('show');
        $('.modal-title').text('Edit Craft');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

function save_craft(){
  var url;
  $('#editCraft').modal('hide');
  url = "<?php echo site_url('craft/craft_update')?>";
  //AJAX ADDING DATA TO DATABASE
  $.ajax({
    url : url,
    type: "POST",
    data: $('#formeditCraft').serialize(),
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