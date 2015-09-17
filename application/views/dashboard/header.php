<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo base_url();?>UserFile/logo.ico">
    <link rel="apple-touch-icon" href="<?php echo base_url();?>UserFile/logo.ico">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>UserFile/logo.ico">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>UserFile/logo.ico">
    <!--Loading bootstrap css-->
    <!--link type="text/css" rel="stylesheet" href="o"-->
    <link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Oswald:400,700,300">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/main.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/style-responsive.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>assets/styles/jquery.news-ticker.css">
    
</head>
<body>
    <?php if($akses != ('dokter' || 'admin' || 'dvi')) redirect('index.php/welcome');?>
    <div>
        <!--BEGIN BACK TO TOP-->
        <a id="totop" href="#"><i class="fa fa-angle-up"></i></a>
        <!--END BACK TO TOP-->
        <!--BEGIN TOPBAR-->
        <div id="header-topbar-option-demo" class="page-header-topbar">
            <nav id="topbar" role="navigation" style="margin-bottom: 0;" data-step="3" class="navbar navbar-default navbar-static-top">
                <div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                    <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span class="logo-text">Dental Record</span><span style="display: none" class="logo-text-icon">µ</span></a>
                </div>
                <div class="topbar-main">
                    <ul class="nav navbar navbar-top-links navbar-right mbn">
                        <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img src="<?php echo base_url();?>UserFile/logo.png" alt="" class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $nama;?></span>&nbsp;<span class="caret"></span></a>
                            <ul class="dropdown-menu dropdown-user pull-right">
                                <li><a href="<?php echo base_url();?>index.php/welcome/logout"><i class="fa fa-key"></i>Log Out</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!--END TOPBAR-->
        <div id="wrapper">
            <!--BEGIN SIDEBAR MENU-->
            <nav id="sidebar" role="navigation" data-step="2" data-intro="Template has &lt;b&gt;many navigation styles&lt;/b&gt;"
                data-position="right" class="navbar-default navbar-static-side" style="height: 100%">
                <div class="sidebar-collapse menu-scroll">
                    <ul id="side-menu" class="nav">
                        <div class="clearfix"></div>
                        <?php
                            $session[] = $this->session->userdata('akses');
                            $data['nik_dokter'] = $this->session->userdata('nik_dokter');
                            $data['akses'] = $session[0];
                            //echo $data['akses'];
                        ?>
                        <li><a href="#"><i class="fa fa-medkit fa-fw">
                            <div class="icon-bg bg-orange"></div>
                        </i><span class="menu-title">Dashboard</span></a></li>
                        <?php
                            if($data['akses']!='admin' && $data['akses']=='dokter'  )
                            {
                                //echo "Seblay : ".$data['nik_dokter']."<br>";
                               ?>
                                <li><a href="<?php echo base_url();?>pasien/pasien_dokter"><i class="fa fa-file-text-o fa-fw">
                                    <div class="icon-bg bg-green"></div>
                                    </i><span class="menu-title">Pasien Saya</span></a>
                                </li> 
                            <?php
                            }elseif ($data['akses']!='admin') {
                                ?>
                                    <li><a href="<?php echo base_url();?>pasien/"><i class="fa fa-file-text-o fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                        </i><span class="menu-title">Pasien</span></a>
                                    </li> 
                            <?php
                            }
                            else{
                                ?>
                                <li><a href="<?php echo base_url();?>dokter"><i class="fa fa-user-md fa-fw">
                                    <div class="icon-bg bg-pink"></div>
                                </i><span class="menu-title">Dokter</span></a>
                                </li>
                                <li><a href="<?php echo base_url();?>dvi"><i class="fa fa-user-md fa-fw">
                                        <div class="icon-bg bg-green"></div>
                                        </i><span class="menu-title">DVI</span></a>
                                    </li>
                                <li><a href="<?php echo base_url();?>pasien"><i class="fa fa-user-md fa-fw">
                                    <div class="icon-bg bg-green"></div>
                                    </i><span class="menu-title">Pasien</span></a>
                                </li> 
                                <?php
                            }
                        ?>
                        
                    </ul>
                </div>
            </nav>
