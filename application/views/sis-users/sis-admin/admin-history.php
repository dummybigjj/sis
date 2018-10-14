
        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">


              <div class="col-xl-12">
                <div class="cardbox">
                  <div class="cardbox-heading">
                    <div class="cardbox-header">History logs table</div><small> &nbsp&nbsp </small>
                  </div>
                  <div class="cardbox-body">
                    <div class="table-responsive">
                      <table class="table table-hover display responsive nowrap" id="example1" style="width: 100%">
                        <thead>
                          <tr>
                            <th>Activity</th>
                            <th data-priority="3">Created by</th>
                            <th>Email</th>
                            <th>Designation</th>
                            <th>Created</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php if(!empty($history)): ?>
                            <?php foreach($history as $value): ?>
                              <tr>
                                <td><?php echo $value['activity']; ?></td>
                                <td><?php echo $value['u_full_name']; ?></td>
                                <td><?php echo $value['u_email_address']; ?></td>
                                <td><?php echo $value['designation']; ?></td>
                                <td><?php echo $value['created']; ?></td>
                                <td>
                                  <button type="button" class="mb-4 btn btn-primary" onclick="view_history(<?php echo $value['tbl_id'];?>)"><span class="nav-icon"><em class="ion-eye"></em></span> View </button>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                          <?php endif; ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              
            </div>
          </div>
        </section>

<script type="text/javascript">
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
function view_history(id){
  $('#formviewHistory')[0].reset();
  //LOAD DATA USING AJAX
  $.ajax({
      url: "<?php echo site_url('admin/get_history/') ?>" + id,
      type: "GET",
      dataType: "JSON",
      success: function(data){
        $('[name="activity"]').val(data.activity);
        $('[name="name"]').val(data.u_full_name);
        $('[name="email"]').val(data.u_email_address);
        $('[name="designation"]').val(data.designation);
        $('[name="device_use"]').val(data.device_use);
        $('[name="device_name"]').val(data.device_name);
        $('[name="device_ip"]').val(data.device_ip_address);
        $('[name="created"]').val(data.created);
        //SHOW MODAL
        $('#viewHistory').modal('show');
        $('.modal-title').text('History Logs');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('ERROR POPULATING DATA');
      }
  });
}

</script>