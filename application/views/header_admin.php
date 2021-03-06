<!DOCTYPE html>
<!--
Template Name: Hyundai Used Car - Admin Dashboard
Version: 4.7.1
Author: KNI
Website: http://www.kni.com.my/
Contact: kenny@kni.com.my
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Korean Used Car | Admin Dashboard</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="Preview page of Metronic Admin Theme #1 for statistics, charts, recent events and reports" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="<?php echo base_url();?>assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="<?php echo base_url();?>assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="<?php echo base_url();?>assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="<?php echo base_url();?>assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>assets/pages/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="<?php echo base_url();?>favicon.ico" /> </head>
        <link href="<?php echo base_url();?>assets/css/jquery-ui.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
        <script src="<?php echo base_url();?>assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jQuery.MultiFile.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyD6mcdXONfb7KfUN0Z_ZaP6-QApnWxjS7U"></script>
	<script>
	function ExportCSVUser(){
		var datastr = '{"mode":"ExportCSVUser"}';
		$.ajax({
			url: "<?php echo base_url();?>admin/ExportToCSV",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				//alert(data);
			}
		});
	}
	$(document).ready(function(){
			var datastr = '{"mode":"GetTotalPendingAd"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$(".sPendingAd").text(data);
				}
			});
			var datastr = '{"mode":"GetTotalUser"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$(".sTotalUser").text(data);
				}
			});
			var datastr = '{"mode":"GetUnattendedReport"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$(".sUnattendedReport").text(data);
				}
			});
	});
	</script>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <div class="page-wrapper">
            <!-- BEGIN HEADER -->
            <div class="page-header navbar navbar-fixed-top">
                <!-- BEGIN HEADER INNER -->
                <div class="page-header-inner ">
                    <!-- BEGIN LOGO -->
                    <div class="page-logo">
                        <a href="<?php echo base_url();?>">
                            <img src="<?php echo base_url();?>assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                        <div class="menu-toggler sidebar-toggler">
                            <span></span>
                        </div>
                    </div>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                        <span></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <!-- BEGIN TOP NAVIGATION MENU -->
                    <div class="top-menu">
                        <ul class="nav navbar-nav pull-right">
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                            <li class="dropdown dropdown-user">
                                <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                                    <span class="username username-hide-on-mobile"> Welcome Administrator </span>
                                    <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-default">
                                    <li>
                                        <a class="btnLogout" href="#">
                                            <i class="icon-key"></i> Log Out </a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                    </div>
                    <!-- END TOP NAVIGATION MENU -->
                </div>
                <!-- END HEADER INNER -->
            </div>
            <!-- END HEADER -->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!-- BEGIN SIDEBAR -->
                <div class="page-sidebar-wrapper">
                    <!-- BEGIN SIDEBAR -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <div class="page-sidebar navbar-collapse collapse">
                        <!-- BEGIN SIDEBAR MENU -->
                        <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                        <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                        <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                        <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                        <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">

                            <li class="nav-item start">
                                <a href="<?php echo base_url();?>admin" class="nav-link nav-toggle">
                                    <i class="icon-home"></i>
                                    <span class="title">Dashboard</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-user"></i>
                                    <span class="title">Users</span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>admin/userall" class="nav-link ">
                                          <span class="title">All User</span>
                                          <span class="badge badge-success sTotalUser"></span>
                                      </a>
                                  </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/useradd" class="nav-link ">
                                            <span class="title">Add User</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/userimportexport" class="nav-link ">
                                            <span class="title">Import / Export</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-layers"></i>
                                    <span class="title">Advertisements</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>admin/adpending" class="nav-link ">
                                          <span class="title">Pending Advertisement</span>
                                          <span class="badge badge-success sPendingAd"></span>
                                      </a>
                                  </li>
                                  <li class="nav-item">
                                      <a href="<?php echo base_url();?>admin/adall" class="nav-link ">
                                          <span class="title">All Advertisement</span>
                                      </a>
                                  </li>
                                    <li class="nav-item">
                                        <a href="<?php echo base_url();?>admin/adnew" class="nav-link ">
                                            <span class="title">Add Advertisement</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-bar-chart"></i>
                                    <span class="title">Statistic</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="<?php echo base_url();?>admin/statisticadvertisement" class="nav-link ">
                                          <span class="title">Advertisement</span>
                                      </a>
                                  </li>
                                    <li class="nav-item start ">
                                        <a href="<?php echo base_url();?>admin/statisticuser" class="nav-link ">
                                            <span class="title">User</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-envelope"></i>
                                    <span class="title">Newsletter</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <!--<li class="nav-item start ">
                                      <a href="<?php echo base_url();?>admin/newsletterall" class="nav-link ">
                                          <span class="title">All Campaign</span>
                                      </a>
                                  </li>
                                    <li class="nav-item start ">
                                        <a href="<?php echo base_url();?>admin/newsletternew" class="nav-link ">
                                            <span class="title">New Campaign</span>
                                        </a>
                                    </li>-->
                                    <li class="nav-item start ">
                                        <a href="<?php echo base_url();?>admin/subscriberall" class="nav-link ">
                                            <span class="title">Subscribers</span>
                                        </a>
                                    </li>
                                    <!--<li class="nav-item start ">
                                        <a href="#" class="nav-link ">
                                            <span class="title">Lists</span>
                                        </a>
                                    </li>-->
                                </ul>
                            </li>
                            <!--<li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-doc"></i>
                                    <span class="title">Export CSV</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="#" class="nav-link" onclick="ExportCSVUser();">
                                          <span class="title">User</span>
                                      </a>
                                  </li>
                                </ul>
                            </li>-->
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-doc"></i>
                                    <span class="title">Contact Tracking</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="<?php echo base_url();?>admin/contacttracking" class="nav-link">
                                          <span class="title">View</span>
                                      </a>
                                  </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-doc"></i>
                                    <span class="title">Report</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="<?php echo base_url();?>admin/report" class="nav-link">
                                          <span class="title">View</span>
                                          <span class="badge badge-success sUnattendedReport"></span>
                                      </a>
                                  </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="javascript:;" class="nav-link nav-toggle">
                                    <i class="icon-doc"></i>
                                    <span class="title">Email Setting</span>
                                    <span class="selected"></span>
                                    <span class="arrow open"></span>
                                </a>
                                <ul class="sub-menu">
                                  <li class="nav-item start ">
                                      <a href="<?php echo base_url();?>admin/emailsetting" class="nav-link">
                                          <span class="title">Set Now</span>
                                      </a>
                                  </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- END SIDEBAR MENU -->
                        <!-- END SIDEBAR MENU -->
                    </div>
                    <!-- END SIDEBAR -->
                </div>
                <!-- END SIDEBAR -->
