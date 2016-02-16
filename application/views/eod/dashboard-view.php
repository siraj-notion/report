
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>back.ico">

    <title>DashBoard</title>

    
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url(); ?>css/fonts/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />
      
    <link href="<?php echo base_url(); ?>css/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>css/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" />

    <!--right slidebar-->
    <link href="<?php echo base_url(); ?>css/slidebars.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  </head>

  <body>
<script>
        function leave(str) 
        {      
            if(str=="Leave")
                {
                    document.getElementById("date").readOnly = true;
                    document.getElementById("project").disabled = true;
                    document.getElementById("status").value = 4;
                    document.getElementById("status").disabled = true;
                    document.getElementById("text-a").readOnly = true;
                    document.getElementById("module").readOnly = true;  
                }
                else
                {
                    document.getElementById("date").readOnly = false;
                    document.getElementById("project").disabled = false;
                    document.getElementById("status").disabled = false;
                    document.getElementById("status").value = "0";
                    document.getElementById("text-a").readOnly = false;
                    document.getElementById("module").readOnly = false;
                }
            
            
        }
          function leave_1(str) 
        {      
            if(str==4)
                {
                    document.getElementById("date").readOnly = true;
                    document.getElementById("project").disabled = true;
                    document.getElementById("status").value = 4;
                    document.getElementById("working").value = "Leave";
                    document.getElementById("status").disabled = true;
                    document.getElementById("text-a").readOnly = true;
                    document.getElementById("module").readOnly = true;  
                }
        }
      </script>      
  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >
              <span>
                  <img class="img-logo" style="width:141px;height:31px;" src="<?php echo base_url();?>image/logo-n.png">
              </span>
          </a>
          <!--logo end-->
          <div class="nav notify-row" id="top_menu">
            <!--  notification start -->
            <ul class="nav top-menu">
              <?php $i=0; ?>
                        <?php   foreach ($notify as $not_sent_item): 
                                
                                if($not_sent_item['status']!=4)
                                {
                                    $i++;
                                }
                                endforeach; ?>
              <li id="header_notification_bar" class="dropdown">
                  <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                      <i class="fa fa-bell-o"></i>
                      <span class="badge bg-warning"><?php echo $i; ?></span>
                  </a>
                  <ul class="dropdown-menu extended notification">
                      <div class="notify-arrow notify-arrow-yellow"></div>
                      <li>
                          <p class="yellow">You have <?php echo $i; ?> new notifications</p>
                      </li>
                      <?php   foreach ($notify as $not_sent_item): 
                                
                                if($not_sent_item['status']!=4)
                                {
                                    echo "<li><a href=\"#\"><span class=\"label label-danger\"><i class=\"fa fa-bolt\"></i></span>";
                                    echo " ".$not_sent_item['date']." ";
                                    echo "<span class=\"small italic\">not sent</span></a></li>";    
                                }
                      
                                endforeach; ?>
                   </ul>
              </li>    
              <!-- notification dropdown end -->
          </ul>
          </div>
          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input id="username" type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <?php
                                foreach ($notify as $not_sent_item): 
                                
                                if($not_sent_item['gender']=="Male")
                                {
                                    $img_u="image/icons/avatar1_small.jpg";
                                }
                          else
                          {
                              $img_u="image/icons/avatar2_small.jpg";
                          }
                           endforeach;  ?>
                          
                          <img alt="" src="<?php echo base_url(); ?><?php echo $img_u; ?>">
                          <span class="username"><?php echo ucfirst($username); ?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="<?php echo site_url('Endofday/logout'); ?>"><i class="fa fa-key"></i> Log Out</a></li>
                      </ul>
                  </li>

                  <!-- user login dropdown end -->
                  
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;">
                          <i class="fa fa-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Boxed Page</a></li>
                          <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                          <li><a  href="header-color.html">Different Color Top bar</a></li>
                          <li><a  href="mega_menu.html">Mega Menu</a></li>
                          <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                          <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                      </ul>
                  </li>
            </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      
      
      <style>
      .col-lg-6-1 .panel
          {
              height: 800px;
          }
      </style>
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
                                    background-color:gray;
                                    color: whitesmoke;
                                 
                              }
                              .tr-2
                              {
                                   background-color:gainsboro;
                                
                              }
                        .hide-i
                        {
                            display: none;
                        }
                          </style>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
      <?php $datestring = '%d-%m-%Y ';
            $time = time();
          $now = time();
        ?>
										 
            <section class="wrapper">
              <div class="row">
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Calender
                          </header>
                          <div class="panel-body">
                              <form role="form">
                                  
                              </form>

                          </div>
                      </section>
                  </div>
                  <div class="col-lg-6">
                      <section class="panel">
                          <header class="panel-heading">
                              Add your Status Report
                          </header>
                          <style>
                          .usr_w
                              {
                                  
                              }
                          </style>
                          <div class="panel-body">
                              <form method="post" action="<?php echo site_url($this->uri->uri_string()); ?>" class="form-horizontal tasi-form" role="form">
                                  <div class="form-group">
                                    <label class="col-lg-2 col-sm-2 control-label">Date :</label>
                                      <div class="col-xs-11 col-lg-10">
                                          <input id="date" name="date" class="form-control form-control-inline input-medium default-date-picker"  size="16" type="text" value="" />
                                      </div>
                                  </div>
                              
    
                                  <?php echo form_error('date'); ?>
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Working :</label>
                                      <div class="col-lg-10">
                                          <select id="working" name="working" class="form-control" onchange="leave(this.value)">
                                                <option value="0">Select</option>
                                                <option value="Working">Working Day</option>
                                                <option value="Leave">Leave</option>
                                          </select>
                                      </div>
                                  </div>
                                  <?php echo form_error('working'); ?>
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Project :</label>
                                      <div class="col-lg-10">
                                          <select id="project" name="project" class="form-control">
                                              <option value="0">Select</option> 
                                                <?php foreach ($project as $project_item): ?>
                    <option class="option_a" value="<?php echo $project_item['e_id']; ?>"><?php echo $project_item['e_proj_name']; ?></option>
                <?php endforeach; ?>
                                          </select>
            
                                      </div>
                                  </div>
                                  <?php echo form_error('project'); ?>
                                  
                                  
                                  
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Module :</label>
                                      <div class="col-lg-10">
                                          <input id="module" type="text" name="module" class="form-control" id="inputEmail1" placeholder="Module">
                                          
                                      </div>
                                  </div>
                                  <?php echo form_error('module'); ?>
                                  
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Status :</label>
                                      <div class="col-lg-10">
                                          <select id="status" class="form-control" name="status" onchange="leave_1(this.value)" >
                                              <option value="0">Select</option> 
                                                <?php foreach ($status as $status_item): ?>
                    <option class="option_a" value="<?php echo $status_item['s_id']; ?>"><?php echo $status_item['s_name']; ?></option>
                <?php endforeach; ?>
                                          </select>
                                          
                                      </div>
                                  </div>
                                  <?php echo form_error('status'); ?>
                                  
                                  <div class="form-group">
                                      <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Details :</label>
                                      <style>
                                      #text-a
                                          {
                                              width: 429px;
                                              height: 120px;
                                               resize: none;
                                          }
                                      </style>
                                      <div class="col-lg-10">
                                          <textarea placeholder="Details/Queries" name="msg" id="text-a" class="col-lg-2 col-sm-2 control-label"> </textarea>
                                          
                                      </div>
                                  </div>
                                  <?php echo form_error('msg'); ?>
                                
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <button type="submit" class="btn btn-danger">Submit</button>
                                      </div>
                                  </div>
                              </form>
                                                 
                          </div>
                      </section>
                   </div>
              </div>
              <div class="row">
                     <div class="col-lg-12">
                         <section class="panel">
                          <header class="panel-heading">
                              EOD Report
                          </header>
                          <table class="table table-striped table-advance table-hover">
                              <thead>
                              <tr>
                                  <th><i class="fa fa-calendar"></i> Date</th>
                                  <th><i class="fa fa-comment"></i></th>
                                  <th><i class="fa fa-leaf"></i> Project</th>
                                  <th><i class="fa fa-tasks"></i> Module</th>
                                  <th><i class="fa fa-edit"></i> Status</th>
                                  <th><i class="fa fa-clock-o"></i> Modified</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php foreach ($user_wrk as $work_item): ?> 
                              <tr>
                                  <td><?php echo $work_item['w_date']; ?></td>
                                <td></td>    
                                  <td><?php echo $work_item['e_proj_name']; ?></td>
                                  <td><?php echo $work_item['w_module']; ?></td>
                          <?php if($work_item['w_status']==1)
                                {
                                    $stat="success";
                                }else if($work_item['w_status']==2)
                                        {
                                            $stat="danger";
                                        }else if($work_item['w_status']==3)
                                                {
                                                    $stat="warning";
                                                }else if($work_item['w_status']==4)
                                                        {
                                                            $stat="info";
                                                        }
                                  
                                  ?>        
                    <td><span class="label label-<?php echo $stat; ?> label-mini"><?php echo $work_item['s_name']; ?></span></td>
                                  <td><?php echo $work_item['w_date_modified']; ?></td>
                              </tr>
                                  
                                  <?php if($work_item['w_details']!="")
                                        {
                                            echo "<tr>";
                                            echo "<td></td>";    
                                            echo "<th><i class=\"fa fa-comment\"></i></th>";    
                                            echo "<td colspan=\"4\">".$work_item['w_details']."</td>";
                                            echo "</tr>";        
                                
                                        }
                                            ?>
                              <?php endforeach; ?>
                              </tbody>
                          </table>
                      </section>
            </div>
              </div>
             
              <!-- page end-->
          </section>

      </section>
      <!--main content end-->

      <!-- Right Slidebar start -->
      <div class="sb-slidebar sb-right sb-style-overlay">
          <h5 class="side-title">Online Customers</h5>
          <ul class="quick-chat-list">
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="<?php echo base_url(); ?>image/icons/chat-avatar2.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>John Doe</strong>
                          <small>Dream Land, AU</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="<?php echo base_url(); ?>image/icons/chat-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-important">3</span>
                          </div>
                          <strong>Jonathan Smith</strong>
                          <small>United States</small>
                      </div>
                  </div><!-- media -->
              </li>

              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="<?php echo base_url(); ?>image/icons/pro-ac-1.png" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-success">5</span>
                          </div>
                          <strong>Jane Doe</strong>
                          <small>ABC, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="<?php echo base_url(); ?>image/icons/avatar1.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <strong>Anjelina Joli</strong>
                          <small>Fockland, UK</small>
                      </div>
                  </div><!-- media -->
              </li>
              <li class="online">
                  <div class="media">
                      <a href="#" class="pull-left media-thumb">
                          <img alt="" src="<?php echo base_url(); ?>image/icons/mail-avatar.jpg" class="media-object">
                      </a>
                      <div class="media-body">
                          <div class="media-status">
                              <span class=" badge bg-warning">7</span>
                          </div>
                          <strong>Mr Tasi</strong>
                          <small>Dream Land, USA</small>
                      </div>
                  </div><!-- media -->
              </li>
          </ul>
          <h5 class="side-title"> pending Task</h5>
          <ul class="p-task tasks-bar">
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">40%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 40%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-success">
                              <span class="sr-only">40% Complete (success)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Database Update</div>
                          <div class="percent">60%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-warning">
                              <span class="sr-only">60% Complete (warning)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Iphone Development</div>
                          <div class="percent">87%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 87%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-info">
                              <span class="sr-only">87% Complete</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Mobile App</div>
                          <div class="percent">33%</div>
                      </div>
                      <div class="progress progress-striped">
                          <div style="width: 33%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="80" role="progressbar" class="progress-bar progress-bar-danger">
                              <span class="sr-only">33% Complete (danger)</span>
                          </div>
                      </div>
                  </a>
              </li>
              <li>
                  <a href="#">
                      <div class="task-info">
                          <div class="desc">Dashboard v1.3</div>
                          <div class="percent">45%</div>
                      </div>
                      <div class="progress progress-striped active">
                          <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar">
                              <span class="sr-only">45% Complete</span>
                          </div>
                      </div>

                  </a>
              </li>
              <li class="external">
                  <a href="#">See All Tasks</a>
              </li>
          </ul>
      </div>
      <!-- Right Slidebar end -->

      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2016 &copy; NotionPress.com
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>js/respond.min.js" ></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>css/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>   
      
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/bootstrap-datetimepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>js/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>js/slidebars.min.js"></script>
    <script src="<?php echo base_url(); ?>js/common-scripts.js"></script>
    <script src="<?php echo base_url(); ?>js/advanced-form-components.js"></script>

  </body>
</html>
