        <section class="section-container no-padding-top">
          <div class="container-fluid">
            <div class="row">

              <div class="col-xl-6 col-xs-12" style="margin: 0 auto">
                <!-- START panel-->
                <form action="<?php echo site_url('admin/admin_update_security_config'); ?>" method="post" accept-charset="utf-8">
                  <div class="card mb-3" id="cardDemo7">
                    <div class="card-header"><span class="nav-icon"><em class="ion-ios-gear-outline icon-lg"></em></span> Security Config</div>
                    <div class="card-body">
                      <div class="form-group col-lg-12">
                        <label class="control-label"><span class="nav-icon"><em class="ion-ios-help-outline"></em></span> Fields with (<font style="color: red">*</font>) are required.</label>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label"><font style="color: red">*</font> Maximum login attempt</label>
                        <input type="number" name="login_attempt" value="<?php echo $config['max_login_attempt']; ?>" class="form-control" min="1" max="9" required="">
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label"><font style="color: red">*</font> Soft-lock time</label>
                        <input type="number" name="soft_lock" value="<?php echo $config['soft_lock']; ?>" class="form-control" min="1" max="3600" required="">
                        <span class="form-text text-muted">Enter value in seconds.</span>
                      </div>
                      <div class="form-group col-sm-12">
                        <label class="control-label"><font style="color: red">*</font> Maximum Password Age</label>
                        <input type="number" name="password_age" value="<?php echo $config['max_password_age']; ?>" class="form-control" min="1" max="120" required="">
                        <span class="form-text text-muted">Enter value in days.</span>
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