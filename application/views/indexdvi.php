<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico">
    <link rel="apple-touch-icon" href="images/icons/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icons/favicon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icons/favicon-114x114.png">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/style-responsive.css">
    <style type="text/css">
    @font-face {
       font-family: myFirstFont;
       src: url(<?php echo base_url();?>assets/fonts/Roboto-Bold.ttf);
    }
    </style>
</head>
<body>
    <div class="col-lg-12">
    <!--BEGIN CONTENT-->
        <div class="row">
            <div class="col-lg-4 col-md-offset-4" style="margin-top:7%;">
            <p style="font-family:myFirstFont;font-size:26px;">REKAM MEDIK KEDOKTERAN GIGI -DVI</p>
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        Login Form
                    </div>
                    <div class="panel-body pan">
                        <form action="<?php echo base_url();?>welcome/logindvi" class="form-horizontal" method="post">
                        <div class="form-body pal">
                            <div class="form-group">
                                <label for="inputName" class="col-md-3 control-label">
                                    Name</label>
                                <div class="col-md-9">
                                    <div class="input-icon right">
                                        <i class="fa fa-user"></i>
                                        <input id="inputName" type="text" placeholder="" name="id" class="form-control" /></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPassword" class="col-md-3 control-label">
                                    Password</label>
                                <div class="col-md-9">
                                    <div class="input-icon right">
                                        <i class="fa fa-lock"></i>
                                        <input id="inputPassword" type="password" placeholder="" name="password" class="form-control" /></div>
                                    <span class="help-block mbn"><a href="#"><small>Forgot password?</small> </a></span>
                                </div>
                            </div>
                            <div class="form-group mbn">
                                <div class="col-md-offset-3 col-md-6">
                                    <div class="checkbox">
                                        <label>
                                            <input tabindex="5" type="checkbox" />&nbsp; Keep me logged in</label></div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions pal">
                            <div class="form-group mbn">
                                <div class="col-md-offset-3 col-md-6">
                                    <button type="submit" class="btn btn-primary">
                                        Login</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <!--END CONTENT-->
            <!--BEGIN FOOTER-->
            <div id="footer">
                <div class="copyright">
                    <a href="#">2015 © Yusuf Nugroho & friends</a></div>
            </div>
            <!--END FOOTER-->
        </div>
        <!--END PAGE WRAPPER-->
    </div>