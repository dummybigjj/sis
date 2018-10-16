        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xl-6 col-xs-12" style="margin: 0 auto">
                <!-- START panel-->
                <form action="<?php echo site_url('user/user_update_profile'); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                  <div class="card mb-3" id="cardDemo7">
                    <div class="card-header"><span class="nav-icon"><em class="ion-ios-person-outline icon-lg"></em></span> User Profile</div>
                    <div class="card-body">
                      <div class="form-group col-lg-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-help-outline icon-lg"></em></span> Fields with (<font style="color: red">*</font>) are required.</label>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label">Change Profile Picture</label>
                        <input type="file" class="form-control" name="picture" accept="image/jpg,image/jpeg,image/png" aria-describedby="help_block_file">
                        <small id="help_block_file" class="form-text text-muted">
                            image file accepts: .jpg, .jpeg, and .png<br>
                            recommended dimensions: 400px x 400px
                        </small>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label"><font style="color: red">*</font> Fullname</label>
                        <input type="text" name="name" maxlength="100" value="<?php echo $this->session->userdata('u_fullname'); ?>" class="form-control" required="">
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label"><font style="color: red">*</font> Email</label>
                        <input type="email" name="email" maxlength="60" value="<?php echo $this->session->userdata('u_email'); ?>" class="form-control" required="">
                      </div>

                      <div class="card-footer"></div><br>

                      <div class="form-group col-sm-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-help-outline icon-lg"></em></span> Change Password</label>
                      </div>

                      <div class="form-group col-sm-12">
                        <label class="control-label"> New Password</label>
                        <input type="password" name="password1" class="form-control">
                      </div>

                      <div class="card-footer"></div><br>

                      <div class="form-group col-sm-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-loop icon-lg"></em></span> History</label><br>
                        <small class="control-label"><span class="nav-icon"><em class="ion-ios-time-outline"></em></span> Recent Login: <?php echo $this->session->userdata('recent_login'); ?></small><br>
                        <small class="control-label"><span class="nav-icon"><em class="ion-android-calendar"></em></span> Password Reset: <?php echo $this->session->userdata('pass_reset_date'); ?></small>
                      </div>
                      
                    </div>
                    <div class="card-footer">
                      <div class="form-group col-sm-12">
                        <div class="float-right">
                          <button class="btn btn-info" type="submit"><span class="nav-icon"></span><em class="ion-ios-checkmark-outline"></em> Save</button>
                        </div>
                      </div>
                      
                    </div>
                  </div>
                </form>
                <!-- END Card-->
              </div>

              
            </div>
          </div>
        </section>