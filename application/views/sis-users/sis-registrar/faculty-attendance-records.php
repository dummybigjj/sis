          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12" style="margin: 0 auto">
                  <div class="card">

                    <form action="<?php echo site_url('/'); ?>" method="post" accept-charset="utf-8">
                    <div class="card-close d-flex align-items-center">
                      <div class="dropdown">
                      </div>
                    </div>

                    <div class="card-header d-flex align-items-center">
                      <div class="dropdown"> 
                        <div class="statistic d-flex align-items-center no-padding-top no-padding-bottom">
                          <div class="icon bg-red"><i class="fa fa-table" aria-hidden="true"></i></div>
                          <div class="text">
                            <small class="h5">Attendance Records | <?php echo (!empty($batch_year['batch_name']))?$batch_year['batch_name']:''; ?> </small>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body">
                      <table id="example" class="table table-striped bg-white table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Student No.</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Subject Code</th>
                            <th>Attendance</th>
                            <th>Remarks</th>
                            <th>Attendance Date</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($attendance)): ?>
                          <?php foreach($attendance as $value): ?>
                              <tr>
                                <td><?php echo $value['student_no']; ?></td>
                                <td><?php echo $value['arabic_name']; ?></td>
                                <td><?php echo $value['subject_title']; ?></td>
                                <td><?php echo $value['subject_code']; ?></td>
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
                                <td><?php echo $value['remarks']; ?></td>
                                <td><?php echo date('F d, Y - l',strtotime($value['attendance_date'])); ?></td>
                              </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Student No.</th>
                            <th>Name</th>
                            <th>Subject</th>
                            <th>Subject Code</th>
                            <th>Attendance</th>
                            <th>Remarks</th>
                            <th>Attendance Date</th>
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
  // $(document).ready(function() {
  //   $('#example').DataTable();
  // });

  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        buttons: [ 
          {extend: 'copy',title: 'Attendance Report for <?php echo $batch_year['batch_name']; ?>'},
          {extend: 'excel',title: 'Attendance Report for <?php echo $batch_year['batch_name']; ?>'},
          {extend: 'pdf', orientation: 'landscape', pageSize: 'LEGAL', title: 'Attendance Report for <?php echo $batch_year['batch_name']; ?>'}
         ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
});

  var checkboxes = $("input[type='checkbox']"), submitButt = $("input[type='submit']");
  $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
  });
  checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
  });

</script>