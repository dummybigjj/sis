    <!-- View User Modal-->
    <div  id="viewUser" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formviewUser">
              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-ios-person-outline icon-lg"></em></span> Personal Information</label>
              </div>
              <div class="form-group col-lg-12">
                <div class="form-control-label" > Name</div>
                <input class="form-control" name="name" readonly="" type="text">
                <div class="control-label" > Email</div>
                <input class="form-control" name="email" readonly="" type="text">
                <div class="control-label" > Designation</div>
                <input class="form-control" name="designation" readonly="" type="text">
              </div>

              <hr/>

              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-ios-loop-strong icon-lg"></em></span> Login History</label>
              </div>
              <div class="form-group col-lg-12">
                <div class="control-label" > Recent Login</div>
                <input class="form-control" name="recent_login" readonly="" type="text">
                <div class="control-label" > Device Name</div>
                <input class="form-control" name="device_name" readonly="" type="text">
                <div class="control-label" > IP Address</div>
                <input class="form-control" name="device_ip_address" readonly="" type="text">
              </div>

              <hr/>

              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-ios-information-outline icon-lg"></em></span> Other Information</label>
              </div>
              <div class="form-group col-lg-12">
                <div class="control-label" > Password Reset Date</div>
                <input class="form-control" name="password_reset_date" readonly="" type="text">
                <div class="control-label" > Created by</div>
                <input class="form-control" name="created_by" readonly="" type="text">
                <div class="control-label" > Updated by</div>
                <input class="form-control" name="updated_by" readonly="" type="text">
                <div class="control-label" > Created</div>
                <input class="form-control" name="created" readonly="" type="text">
                <div class="control-label" > Modified</div>
                <input class="form-control" name="modified" readonly="" type="text">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
            <!-- <button class="btn btn-info" type="button">Save changes</button> -->
          </div>
        </div>
      </div>
    </div>
