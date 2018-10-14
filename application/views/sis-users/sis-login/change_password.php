
    <div class="layout-container">
      <div class="page-container bg-blue-grey-900">
        <div class="d-flex align-items-center align-items-center-ie bg-gradient-primary">
          <div class="fw">

            <div class="container container-xs">
              <div class="cardbox cardbox-flat" id="user-login">
                <div class="cardbox-body" style="margin: 0 auto;outline-style: ;width: 80%">
                  <div class="d-flex justify-content-start align-items-center">
                    <div class="wd-xxs color-white-400"><em class="ion-ios-people-outline icon-5x icon-fw"></em></div>
                    <div class="col-sm-12" style="outline-style: ;">
                      <p class="lead mb-0 col-sm-12">Student Information System</p><span class="text-muted col-sm-8">Office of the Registrar</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container container-xs">
              <form action="<?php echo site_url('user_cp'); ?>" method="post" accept-charset="utf-8">
                <div class="cardbox cardbox-flat text-white form-validate text-color" id="user-login" novalidate="">
                  <div class="cardbox-heading">
                    <div class="cardbox-title text-center"><span class="nav-icon"><em class="ion-ios-locked-outline icon-lg"></em></span> Change Password</div>
                  </div>
                  <div class="cardbox-body">
                    <div class="px-5">
                      <div class="form-group">
                        <input class="form-control form-control-inverse" type="password" name="password1" maxlength="60" required="" placeholder="New Password">
                      </div>
                      <div class="form-group">
                        <input class="form-control form-control-inverse" type="password" name="password2" maxlength="60" required="" placeholder="Confirm Password">
                      </div>
                      <div class="text-center my-4">
                        <input type="submit" value="Save password" class="btn btn-lg btn-oval btn-gradient btn-warning btn-block" />
                      </div>
                    </div>
                    <div class="text-center"><small>Password length should be greater than or equal to 6 characters.</small></div>
                  </div>
                  <div class="cardbox-footer text-center text-sm"></div>
                  <div class="text-center"><small><a class="text-inherit" href="<?php echo site_url('logout'); ?>">Logout?</a></small></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
