        <section class="section-container no-padding-top">
          <div class="container-fluid">

            <div class="cardbox">
              <div class="cardbox-heading">
                <div class="cardbox-title">Knob Charts</div>
              </div>

              <div class="cardbox-body">

                <div class="row">
                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">Registered Students</div>
                      <div class="cardbox-body text-center">
                        <div class="easypie-chart" id="easypiechart1" data-percent="100"><span><?php echo (!$registered==0)?$registered:''; ?></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">Graduated Students</div>
                      <div class="cardbox-body text-center">
                        <div class="easypie-chart" id="easypiechart2" data-percent="<?php echo ($registered!=0)?100-((($registered - $graduated)/$registered)*100):0; ?>"><span><?php echo $graduated; ?></span></div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">On-going Students</div>
                      <div class="cardbox-body text-center">
                        <div class="easypie-chart" id="easypiechart3" data-percent="<?php echo ($registered!=0)?100-((($registered - $ongoing)/$registered)*100):0; ?>"><span><?php echo $ongoing; ?></span></div>
                      </div>
                    </div>
                  </div>

                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">Terminated Students</div>
                      <div class="cardbox-body text-center">
                        <!-- <div class="easypie-chart" id="knob-chart1" data-percent=""><span><?php //echo $terminated; ?></span></div> -->
                        <input id="knob-chart1" type="text" value="<?php echo ($registered!=0)?100-((($registered - $terminated)/$registered)*100):0; ?>" data-max="<?php echo $registered; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">Resigned Students</div>
                      <div class="cardbox-body text-center">
                        <!-- <div class="easypie-chart" id="knob-chart3" data-percent=""><span><?php //echo $resigned; ?></span></div> -->
                        <input id="knob-chart3" type="text" value="<?php echo ($registered!=0)?100-((($registered - $resigned)/$registered)*100):0; ?>" data-max="<?php echo $registered; ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-2 col-sm-6">
                    <div class="cardbox cardbox-flat text-center">
                      <div class="cardbox-heading">Withdraw Students</div>
                      <div class="cardbox-body text-center">
                        <!-- <div class="easypie-chart" id="knob-chart4" data-percent=""><span><?php //echo $withdraw; ?></span></div> -->
                        <input id="knob-chart4" type="text" value="<?php echo ($registered!=0)?100-((($registered - $withdraw)/$registered)*100):0; ?>" data-max="<?php echo $registered; ?>">
                      </div>
                    </div>
                  </div>

                </div>

              </div>
            </div>

            <?php if($this->session->userdata('u_designation')=='Administrator'): ?>
            <div class="row">

              <div class="col-xl-6">
                <div class="cardbox">
                  <div class="cardbox-heading">
                    <div class="cardbox-title">Recent Activities</div><small>Toggle row to view recent activity details</small>
                  </div>
                  <div class="cardbox-body">
                    <div class="table-responsive">
                      <table class="table footable toggle-arrow-tiny">
                        <thead>
                          <tr>
                            <th data-toggle="true">Activity</th>
                            <th>Created by</th>
                            <th data-hide="all">Created</th>
                            <th data-hide="all">Device Use</th>
                            <th data-hide="all">Device Name</th>
                            <th data-hide="all">IP Address</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-expanded="true">
                            <td>Register Student</td>
                            <td>Joey Miller</td>
                            <td>2018-09-01</td>
                            <td>Desktop/Workstation</td>
                            <td>JOEY</td>
                            <td>192.168.254.107</td>
                          </tr>
                          <tr>
                            <td>Register Student</td>
                            <td>Jack Miller</td>
                            <td>2018-09-01</td>
                            <td>Desktop/Workstation</td>
                            <td>Jun-pc</td>
                            <td>192.168.254.107</td>
                          </tr>
                          <tr>
                            <td>Register Student</td>
                            <td>Joey Miller</td>
                            <td>2018-09-01</td>
                            <td>Desktop/Workstation</td>
                            <td>JOEY</td>
                            <td>192.168.254.107</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-xl-6">
                <div class="cardbox">
                  <div class="cardbox-heading">
                    <div class="cardbox-title">Recent Login</div><small>Toggle row to view recent login details</small>
                  </div>
                  <div class="cardbox-body">
                    <div class="table-responsive">
                      <table class="table footable toggle-arrow-tiny">
                        <thead>
                          <tr>
                            <th data-toggle="true">User</th>
                            <th>Device Name</th>
                            <th data-hide="all">Activity</th>
                            <th data-hide="all">Device Use</th>
                            <th data-hide="all">Ip Address</th>
                            <th data-hide="all">Date</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr data-expanded="true">
                            <td>Joey Miller</td>
                            <td>JOEY</td>
                            <td>Login</td>
                            <td>Desktop/Workstation</td>
                            <td>192.168.254.108</td>
                            <td>2018-09-01</td>
                          </tr>
                          <tr>
                            <td>Joey Miller</td>
                            <td>JOEY</td>
                            <td>Login</td>
                            <td>Desktop/Workstation</td>
                            <td>192.168.254.108</td>
                            <td>2018-09-01</td>
                          </tr>
                          <tr>
                            <td>Joey Miller</td>
                            <td>JOEY</td>
                            <td>Login</td>
                            <td>Desktop/Workstation</td>
                            <td>192.168.254.108</td>
                            <td>2018-09-01</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <?php endif; ?>

          </div>
        </section>