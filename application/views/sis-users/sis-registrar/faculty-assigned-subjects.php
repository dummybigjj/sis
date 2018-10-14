          <section class="tables">   
            <div class="container-fluid">
              <div class="row">

                <div class="col-lg-12" style="margin: 0 auto">
                  <div class="card">

                    <div class="card-close d-flex align-items-center">
                    </div>

                    <div class="card-header d-flex align-items-center">
                      <div class="dropdown">
                        <div class="statistic d-flex align-items-center no-padding-top no-padding-bottom">
                          <div class="icon bg-green"><i class="icon-bill" aria-hidden="true"></i></div>
                          <div class="text"><small class="h5">Assinged Subject || <?php echo (!empty($batch_year['batch_name']))?$batch_year['batch_name']:''; ?></small></div>
                        </div>
                      </div>
                    </div>

                    <div class="card-body">
                      <table id="example" class="table table-striped bg-white table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <tr>
                            <th>Subject Title</th>
                            <th>Subject Code</th>
                            <th>Room</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th style="width: 15%">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php if(!empty($schedules)): ?>
                          <?php foreach($schedules as $value): ?>
                              <tr>
                                <td><?php echo $value['subject_title']; ?></td>
                                <td><?php echo $value['subject_code']; ?></td>
                                <td><?php echo $value['room_name']; ?></td>
                                <td><?php echo $value['day']; ?></td>
                                <td><?php echo ($value['time']<='13:00:00')?rtrim(rtrim($value['time'],'0'),':').'AM':rtrim(rtrim(date('H:i:s', strtotime('-12 hours',strtotime($value['time']))),'0'),':').'PM'; ?></td>
                                <td>
                                  <?php if($value['day']==strtoupper(date('l'))): ?>
                                  <a href="<?php echo site_url('faculty_attendance/'.$value['schedule_id']); ?>" class="btn btn-warning">&nbsp<i class="fa fa-calendar" aria-hidden="true"></i> Attendance &nbsp</a>
                                  <?php endif; ?>
                                </td>
                              </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        </tbody>
                        <tfoot>
                          <tr>
                            <th>Subject Title</th>
                            <th>Subject Code</th>
                            <th>Room</th>
                            <th>Day</th>
                            <th>Time</th>
                            <th>Action</th>
                          </tr>
                        </tfoot>
                      </table>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </section>


<script type="text/javascript">
$(document).ready(function() {
  $('#example').DataTable();
});

// Modal functions

// function assign_faculty(id){
//   $('#formAssignFaculty')[0].reset();                          //RESET FORM ON MODAL
//   //LOAD DATA USING AJAX
//   $.ajax({
//       url: "<?php echo site_url('subject/get_subject_schedule/') ?>" + id,
//       type: "GET",
//       dataType: "JSON",
//       success: function(data){
//         $('[name="schedule_id"]').val(data.schedule_id);
//         $('[name="subject_title"]').val(data.subject_title);
//         $('[name="subject_code"]').val(data.subject_code);
//         $('[name="room_name"]').val(data.room_name);
//         $('[name="day"]').val(data.day);
//         $('[name="time"]').val(data.time);
//         $('[name="faculty_assigned"]').val(data.faculty_assigned);
//         //SHOW MODAL
//         $('#AssignFaculty').modal('show');
//         $('.modal-title').text('Assign Faculty');
//       },
//       error: function(jqXHR, textStatus, errorThrown){
//           alert('ERROR POPULATING DATA');
//       }
//   });
// }

// function save_faculty(){
//   var url;
//   $('#AssignFaculty').modal('hide');
//   url = "<?php echo site_url('subject/subject_update_schedule')?>";
//   //AJAX ADDING DATA TO DATABASE
//   $.ajax({
//     url : url,
//     type: "POST",
//     data: $('#formAssignFaculty').serialize(),
//     dataType: "JSON",
//     success: function(data){
//       $('#success').modal('show');
//       $('.modal-title').text('Message');
//       $('#msg_alert').addClass(data.class_add);
//       $('#msg').html(data.msg);
//     },
//     error: function (jqXHR, textStatus, errorThrown){
//       alert('ERROR UPDATING DATA');
//     }
//   });
// }

// function closeModal(){
//   location.reload();
// }

</script>