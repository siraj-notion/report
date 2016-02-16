<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>back.ico">

    <title>Notion Press-Registration</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
        <link href="<?php echo base_url(); ?>css/fonts/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">
            <form class="form-signin" method="post" action="registration">
      
        <h2 class="form-signin-heading">registration for EOD</h2>
          <style>
                .img-logo
                {
                    width: 169px;
                    height: 37px;
                    margin: auto;
                    position: absolute;
                    top: 0;bottom: 0;left: 0;right: 0;
                }
                .logo-n
                {
                    width: 100%;
                    height: 60px;
                    position: relative;
                }
              .s_name
              {
                  margin-bottom: 15px;
              }
              .option_a
              {
                  font-size: 12px;
              }
              .red
              {
                  color: red;
              }
            </style>
            <div class="logo-n"><img class="img-logo" src="<?php echo base_url();?>image/logo-n.png"></div>
        <div class="login-wrap">
            <input type="text" name="name" class="form-control" placeholder="Full Name" autofocus>
            <div class="red"><?php echo form_error('name'); ?></div>
            <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sample-radio" id="radio-01" value="Male" type="radio" checked /> Male
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sample-radio" id="radio-02" value="Female" type="radio" /> Female
                </label>
            </div>
             <div class="red"><?php echo form_error('sample-radio'); ?></div>
            <select class="form-control s_name" name="position" autofocus>
                
                <?php foreach ($position as $position_item): ?>
                    <option class="option_a" value="<?php echo $position_item['p_id']; ?>"><?php echo $position_item['p_name']; ?></option>
                <?php endforeach; ?>
                
                
            </select>
             <div class="red"><?php echo form_error('position'); ?></div>
            <input type="text" name="email" class="form-control" placeholder="Email" autofocus>
             <div class="red"><?php echo form_error('email'); ?></div>
            <input name="password" type="password" class="form-control" placeholder="Password">
        
            <input name="cnf_password" type="password" class="form-control" placeholder="Re-type Password">
             <div class="red"><?php echo form_error('password'); ?></div>
            <button class="btn btn-lg btn-login btn-block" type="submit">Submit</button>

            <div class="registration">
                Already Registered.
                <a class="" href="login.html">
                    Login
                </a>
            </div>

        </div>

        </form>

    </div>


  </body>
</html>
