    <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <style>
                              .p-head
                              {
                                  background-color:#ff6c60;
                                  color: white;
                              }
                              .panel-cont
                              {
                                  width: 16%;
                                  text-align: center;
                                 
                              }.panel-cont-1
                              {
                                  width: 16%;
                                  text-align: center;
                                 
                              }
                              .outer-body
                              {
                                  width: 100%;
                                  padding: 10px;
                              }
                              .tr-1
                              {
                                 border-top-width: 1px;
                                border-top:solid;
                                 
                              }
                              .tr-2
                              {
                                  
                                
                              }
                          </style>
                          <header class="panel-heading p-head">
                              EOD Reports
                          </header>
                          
                                <div class="panel-body">
                          <form action="#" class="form-horizontal tasi-form">
                              <div class="form-group">
                                  <label class="control-label col-md-3">Default Datepicker</label>
                                  <div class="col-md-3 col-xs-11">
                                      <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                      <span class="help-block">Select date</span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">Start with years viewMode</label>
                                  <div class="col-md-3 col-xs-11">

                                      <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                          <input type="text" readonly="" value="12-02-2012" size="16" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                      </div>
                                      <span class="help-block">Select date</span>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label class="control-label col-md-3">Months Only</label>
                                  <div class="col-md-3 col-xs-11">
                                      <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012"  class="input-append date dpMonths">
                                          <input type="text" readonly="" value="02/2012" size="16" class="form-control">
                                              <span class="input-group-btn add-on">
                                                <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                              </span>
                                      </div>


                                      <span class="help-block">Select month only</span>
                                  </div>
                              </div>

                              <div class="form-group">
                                  <label class="control-label col-md-3">Date Range</label>
                                  <div class="col-md-4">
                                      <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                          <input type="text" class="form-control dpd1" name="from">
                                          <span class="input-group-addon">To</span>
                                          <input type="text" class="form-control dpd2" name="to">
                                      </div>
                                      <span class="help-block">Select date range</span>
                                  </div>
                              </div>


                              <a class="btn btn-success" data-toggle="modal" href="#myModal">
                                  Datepicker in Modal
                              </a>
                              <!-- Modal -->
                              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Datepicker in Modal</h4>
                                          </div>
                                          <div class="modal-body">

                                              <div class="form-group">
                                                  <label class="control-label col-md-3">Default input Datetimepicker</label>
                                                  <div class="col-md-4">
                                                      <input size="16" type="text" value="2012-06-15 14:45" readonly class="form_datetime form-control">
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Default Datepicker</label>
                                                  <div class="col-md-6 col-xs-11">
                                                      <input class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                                      <span class="help-block">Select date</span>
                                                  </div>
                                              </div>

                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Start with years viewMode</label>
                                                  <div class="col-md-6 col-xs-11">

                                                      <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="12-02-2012"  class="input-append date dpYears">
                                                          <input type="text" readonly="" value="12-02-2012" size="16" class="form-control">
                                                          <span class="input-group-btn add-on">
                                                            <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                          </span>
                                                      </div>
                                                      <span class="help-block">Select date</span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Months Only</label>
                                                  <div class="col-md-6 col-xs-11">
                                                      <div data-date-minviewmode="months" data-date-viewmode="years" data-date-format="mm/yyyy" data-date="102/2012"  class="input-append date dpMonths">
                                                          <input type="text" readonly="" value="02/2012" size="16" class="form-control">
                                                          <span class="input-group-btn add-on">
                                                            <button class="btn btn-danger" type="button"><i class="fa fa-calendar"></i></button>
                                                          </span>
                                                      </div>


                                                      <span class="help-block">Select month only</span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="control-label col-md-4">Date Range</label>
                                                  <div class="col-md-6">
                                                      <div class="input-group input-large" data-date="13/07/2013" data-date-format="mm/dd/yyyy">
                                                          <input type="text" class="form-control dpd1" name="from">
                                                          <span class="input-group-addon">To</span>
                                                          <input type="text" class="form-control dpd2" name="to">
                                                      </div>
                                                      <span class="help-block">Select date range</span>
                                                  </div>
                                              </div>

                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->

                          </form>
                      </div>
                          
                          
                          <div class="panel-body">
                             
                              <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>">
                              <table class="outer-body">
                                <tr>
                                    <td class="panel-cont-1"><h5>Date</h5></td>
                                    <td class="panel-cont-1"><h5>Name</h5></td>
                                    <td class="panel-cont-1"><h5>Project</h5></td>
                                    <td class="panel-cont-1"><h5>Status</h5></td>
                                    <td class="panel-cont-1"></td>
                                </tr>
                                <tr>
                                    <td>
                                        
                                    </td> 
                                    <td>
                                        <select name="username" class="form-control">
                                            <?php foreach ($user_name as $name_item): ?>
                                                <option class="option_a" value="<?php echo $name_item['e_id']; ?>"><?php echo $name_item['e_username']; ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </td> 
                                    <td>
                                        <select name="project" id="project" name="project" class="form-control">
                                                <?php foreach ($project as $project_item): ?>
                                                <option class="option_a" value="<?php echo $project_item['e_id']; ?>"><?php echo $project_item['e_proj_name']; ?></option>
                                                <?php endforeach; ?>
                                          </select>
                                    </td>
                                    <td>
                                        <select name="status" id="status" class="form-control" name="status">
                                        <?php foreach ($status as $status_item): ?>
                                        <option class="option_a" value="<?php echo $status_item['s_id']; ?>"><?php echo $status_item['s_name']; ?></option>
                                        <?php endforeach; ?>
                                        
                                    </td>
                                    <td><input type="submit" name="submit" value="Generate"></td>
                                </tr>
                                  </table>
                              </form>
                          </div>
                    
                
                          <div class="panel-body">
                              <table class="outer-body">
                                <tr>
                                    <td class="panel-cont"><h3>Date</h3></td>
                                    <td class="panel-cont"><h3>Name</h3></td>
                                    <td class="panel-cont"><h3>Project</h3></td>
                                    <td class="panel-cont"><h3>Module</h3></td>
                                    <td class="panel-cont"><h3>Status</h3></td>
                                    <td class="panel-cont"><h3>Modified</h3></td>
                                </tr>
                                  <?php foreach ($user_wrk as $work_item): ?>  
                                  
                                <tr class="tr-1">
                                    <td class="panel-cont"><h4><?php echo $work_item['w_date']; ?></h4></td>
                                    <td class="panel-cont"><h4><?php echo $work_item['e_username']; ?></h4></td>
                                    <td class="panel-cont"><h4><?php echo $work_item['e_proj_name']; ?></h4></td>
                                    <td class="panel-cont"><h4><?php echo $work_item['w_module']; ?></h4></td>
                                    <td class="panel-cont"><h4><?php echo $work_item['s_name']; ?></h4></td>
                                    <td class="panel-cont"><h4><?php echo $work_item['w_date_modified']; ?></h4></td>
                                </tr>
                                <tr class="tr-2"> 
                                    <td class="panel-cont">Description :</td>
                                    <td class="panel-cont" colspan="3"><h4><?php echo $work_item['w_details']; ?></h4></td>
                                </tr>
                                
                                <?php endforeach; ?>
                                
                              </table>

                          </div>
                      </section>

               