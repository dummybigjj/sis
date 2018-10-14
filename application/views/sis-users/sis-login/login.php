    
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

            <div class="container container-xs" style="margin-top: -50px">
              <form action="<?php echo site_url('user/user_resolve_login'); ?>" method="post" accept-charset="utf-8">
                <div class="cardbox cardbox-flat text-white form-validate text-color" id="user-login" novalidate="">
                  <div class="cardbox-heading">
                    <div class="cardbox-title text-center"><span class="nav-icon"><em class="ion-ios-person-outline icon-lg"></em></span> Login</div>
                  </div>
                  <div class="cardbox-body">
                    <div class="px-5">
                      <div class="form-group">
                        <input class="form-control form-control-inverse" type="email" name="email" required="" placeholder="Email address" autocomplete="off">
                      </div>
                      <div class="form-group">
                        <input class="form-control form-control-inverse" type="password" name="password" required="" placeholder="Password">
                      </div>
                      <div class="text-center my-4">
                        <input type="submit" value="Authenticate" class="btn btn-lg btn-oval btn-gradient btn-success btn-block" />
                      </div>
                    </div>
                  </div>
                  <div class="cardbox-footer text-center text-sm"></div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
