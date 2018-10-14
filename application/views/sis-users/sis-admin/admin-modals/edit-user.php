    <!-- Edit User Modal-->
    <div  id="editUser" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formeditUser">
              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="ion-ios-person-outline icon-lg"></em></span> Personal Information</label>
              </div>
              <div class="form-group col-lg-12">
                <input class="form-control" name="user_id" type="hidden">
                <div class="control-label" ><font style="color: red">*</font> Name</div>
                <input class="form-control" name="name" maxlength="100" type="text">
              </div>
              <div class="form-group col-lg-12">
                <div class="control-label" ><font style="color: red">*</font> Email</div>
                <input class="form-control" name="email" maxlength="100" type="email">
              </div>
              <div class="form-group col-lg-12">
                <div class="control-label"><font style="color: red">*</font> Designation</div>
                <select class="form-control" name="designation" required="">
                  <option value="Administrator">Administrator</option>
                  <option value="Registrar">Registrar</option>
                  <option value="Program Head">Program Head</option>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer col-lg-12">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <button class="btn btn-info" type="button"  onclick="save_user()">Save changes</button>
          </div>
        </div>
      </div>
    </div>
