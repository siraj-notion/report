<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>back.ico">

    <title>Notion Press-Login</title>

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

      <form method="post" class="form-signin" action="<?php echo site_url($this->uri->uri_string()); ?>">
        <h2 class="form-signin-heading"><?php echo $signin; ?>LogIn</h2>
        <div class="login-wrap">
            <input name="username" type="text" class="form-control" placeholder="User ID" autofocus>
            <?php echo form_error('username'); ?>
            <input name="password" type="password" class="form-control" placeholder="Password">
            <?php echo form_error('password'); ?>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
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
                    height: 50px;
                    position: relative;
                }
            </style>
            <div class="logo-n"><img class="img-logo" src="<?php echo base_url();?>image/logo-n.png"></div>
        </div>
      </form>
    </div>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>


  </body>
</html>
