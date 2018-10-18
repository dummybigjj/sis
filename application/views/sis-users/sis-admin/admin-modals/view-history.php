    <!-- View History Modal-->
    <div  id="viewHistory" class="modal fade demo-modal-form">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="mt-0 modal-title">Form modal</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span>&times;</span></button>
          </div>
          <div class="modal-body">
            <form id="formviewHistory">
              <div class="form-group col-lg-12">
              </div>
              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-ios-compose-outline icon-lg"></em></span> Activity</label>
                <textarea class="form-control" name="activity" readonly=""></textarea>
              </div>

              <hr/>

              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-ios-person-outline icon-lg"></em></span> Created By</label>
                <input class="form-control" name="name" readonly="" type="text">
                <input class="form-control" name="email" readonly="" type="text">
                <input class="form-control" name="designation" readonly="" type="text">
              </div>

              <hr/>

              <div class="form-group col-lg-12">
                <label class="control-label" ><span class="nav-icon"><em class="icon-iphone icon-lg"></em></span> Device Information</label>
                <input class="form-control" name="device_use" readonly="" type="text">
                <input class="form-control" name="device_name" readonly="" type="text">
                <input class="form-control" name="device_ip" readonly="" type="text">
              </div>

              <div class="form-group col-lg-12">
                <div class="control-label" > Created</div>
                <input class="form-control" name="created" readonly="" type="text">
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
