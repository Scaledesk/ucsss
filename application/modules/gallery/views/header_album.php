<?php
/**
 * Created by PhpStorm.
 * User: Nitesh
 * Date: 4/3/2016
 * Time: 1:32 PM
 */

?>
<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Theme Starz">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/font-awesome.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/selectize.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vanillabox/vanillabox.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/vanillabox/vanillabox.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">

    <title>Ursuline Convent School</title>
    <style>
        .primary-navigation-wrapper:after{
            height: 0px;
        }
    </style>

</head>


<body class="page-sub-page page-about-us">
<!-- Wrapper -->
<div class="wrapper">
    <!-- Header -->
    <div class="navigation-wrapper">
        <div class="secondary-navigation-wrapper">
            <div class="container">
                <div class="navigation-contact pull-left">Call Us:  <span class="opacity-70">+(91)-(120)-6457539 </span></div>
                <div class="search">
                    <div class="input-group">
                        <input type="search" class="form-control" name="search" placeholder="Search">
                        <span class="input-group-btn"><button type="submit" id="search-submit" class="btn"><i class="fa fa-search"></i></button></span>
                    </div><!-- /.input-group -->
                </div>
                <ul class="secondary-navigation list-unstyled">
                    <!--  <li><a href="#">Prospective Students</a></li>
                     <li><a href="#">Current Students</a></li>
                     <li><a href="#">Faculty & Staff</a></li>
                     <li><a href="#">Alumni</a></li> -->
                    <li><a target="_blank"href="https://slack-redir.net/link?url=https%3A%2F%2Fucsss.obto.co%2Fo">LOGIN</a></li>
                    <li><a href="#school_info" data-toggle="modal">School info</a></li>
                    <li><a href="">Fees</a></li>
                    <li ><a style="color:#ea6645;" href="<?php echo base_url().'gallery/album';  ?>" >Gallery</a></li>
                    <li><a href="">Achievement</a></li>
                </ul>
            </div>
        </div><!-- /.secondary-navigation -->
        <div class="primary-navigation-wrapper">
            <header class="navbar" id="top" role="banner">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="navbar-brand nav" id="brand">
                            <a href="<?php echo base_url();  ?>"><img src="<?php echo base_url();  ?>assets/img/logo-name.png" alt="brand" style="max-height:94px!important;margin-top:-18px;"></a>
                        </div>
                    </div>
                    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="<?php echo base_url();  ?>" class="#">Home</a>

                            </li>
                            <li>
                                <a href="#" class="#">School</a>
                                <!--<ul class="list-unstyled child-navigation">
                                    <li><a href="#">Profile</a></li>
                                    <li><a href="#">Our Foundress</a></li>
                                    <li><a href="#">School Emblem</a></li>
                                    <li><a href="#">School Anthem</a></li>
                                    <li><a href="#">Infrastructure</a></li>
                                    <li><a href="#">Virtual Tour</a></li>
                                    <li><a href="#">HYMNS/Prayers</a></li>
                                    <li><a href="#">Transfer Certificate </a></li>
                                </ul>-->
                            </li>
                            <li>
                                <a href="event.html" class="#">Events</a>
                                <!--<ul class="list-unstyled child-navigation">
                                    <li><a href="#">Aim & Objectives</a></li>
                                    <li><a href="#">School Regulations</a></li>
                                    <li><a href="#">Recommendation To Parents</a></li>
                                    <li><a href="#">Admission Procedure</a></li>
                                    <li><a href="#">Examination & Promotion</a></li>
                                    <li><a href="#">School Fees</a></li>
                                    <li><a href="#">School Uniform</a></li>
                                </ul>-->
                            </li>
                            <li>
                                <a href="about-us.html">About Us</a>
                                <!--<ul class="list-unstyled child-navigation">
                                    <li><a href="#">Principal's Message</a></li>
                                    <li><a href="#">Vice Principal's Message</a></li>
                                </ul>-->
                            </li>
                            <li>
                                <a href="" class="#">News</a>
                                <!--<ul class="list-unstyled child-navigation">
                                    <li><a href="#">Photo Gallery</a></li>
                                    <li><a href="#">Video Gallery</a></li>
                                    <li><a href="#">Media Gallery</a></li>
                                    <li><a href="#">Voice SMS</a></li>
                                    <li><a href="#">School Magazine</a></li>
                                </ul>-->
                            </li>

                            <li>
                                <a href="">Contact</a>
                            </li>
                        </ul>
                    </nav><!-- /.navbar collapse-->
                </div><!-- /.container -->
            </header><!-- /.navbar -->
        </div><!-- /.primary-navigation -->
        <div class="background">
            <img src="<?php echo base_url();  ?>assets/img/background-city.png" alt="background">
        </div>
    </div>
    <!-- end Header -->

    <!-- Breadcrumb -->
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li class="active">Gallery</li>
        </ol>
    </div>
    <!-- end Breadcrumb -->
