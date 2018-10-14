    <!-- Edit Diploma Course Modal-->
    <div  id="editDiplomaCourse" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formeditDiplomaCourse">
              <input type="hidden" name="course_id" class="form-control" required="">
              <div class="form-group col-lg-12">
                <input class="form-control" name="user_id" type="hidden">
                <div class="control-label" ><font style="color: red">*</font> Name</div>
                <input class="form-control" name="course_name" maxlength="100" type="text">
              </div>
              <div class="form-group col-lg-12">
                <div class="control-label" ><font style="color: red">*</font> Acronym</div>
                <input class="form-control" name="course_acronym" maxlength="100" type="text">
              </div>
            </form>
          </div>
          <div class="modal-footer col-lg-12">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-info" type="button"  onclick="save_diploma_course()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
