<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Advanced Form Components</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

  
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
   
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker-bs3.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

      
 
  </head>

  <body>

  <section id="container" class="">
     
     
      <section id="main-content">
          <section class="wrapper">
          <!-- page start-->
        
              <!--date picker start-->
              <div class="row">
              <div class="col-md-12">
                  <section class="panel">
                      <header class="panel-heading">
                          Date Pickers
                          <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                        </span>
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
                           
                          </form>
                      </div>
                  </section>
              </div>
          </div>
              <!--date picker end-->
          </section>
      </section>
      <!--main content end-->


  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    	
	<script src="<?php echo base_url(); ?>test/jquery.js"></script>
    <script src="<?php echo base_url(); ?>test/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url(); ?>test/jquery.dcjqaccordion.2.7.js"></script>
  
    <!--this page plugins-->

  

  <script type="text/javascript" src="<?php echo base_url(); ?>test/daterangepicker.js"></script>
  
     <script type="text/javascript" src="<?php echo base_url(); ?>test/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="<?php echo base_url(); ?>test/bootstrap-datetimepicker.js"></script>

  <script type="text/javascript" src="<?php echo base_url(); ?>test/moment.min.js"></script>
  <!--summernote-->
  >

  <!--right slidebar-->
  <script src="<?php echo base_url(); ?>test/slidebars.min.js"></script>

  <!--common script for all pages-->
    <script src="<?php echo base_url(); ?>test/common-scripts.js"></script>
    <!--this page  script only-->
    <script src="<?php echo base_url(); ?>test/advanced-form-components.js"></script>

   
  </body>
</html>
