    <!-- Edit Subject Modal-->
    <div  id="editRoom" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formeditRoom">
              <input type="hidden" name="subject_id" class="form-control" required="">
              <div class="form-group col-lg-12">
                <input type="hidden" name="room_id" class="form-control" required="">
                <div class="control-label" ><font style="color: red">*</font> Room Name</div>
                <input class="form-control" name="room_name" maxlength="60" type="text">
              </div>
            </form>
          </div>
          <div class="modal-footer col-lg-12">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-info" type="button"  onclick="save_room()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
