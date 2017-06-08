<?php
header('Access-Control-Allow-Origin: *');
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KNI">

    <link href="<?php echo base_url();?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/zabuto_calendar.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.nouislider.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/trackpad-scroll-emulator.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-select.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jssocials.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jssocials-theme-minima.css" type="text/css">


	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyD6mcdXONfb7KfUN0Z_ZaP6-QApnWxjS7U"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jQuery.MultiFile.min.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url();?>assets/misc/customizer.js"></script>-->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jssocials.min.js"></script>
    <title>Hyundai Used Car</title>
</head>

<body class="<?php echo $bodyClass;?>">
<div class="page-wrapper">
    <header id="page-header">
        <nav>
            <div class="left">
                <a href="<?php echo base_url();?>main" class="brand"><span style="font-weight: bold;">HYUNDAI USED CAR</span></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="has-child"><a href="#nav-homepages">Buy</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li><a href="#">Used Hyundai Car</a></li>
                                        <li><a href="#">New Hyundai Car</a></li>
                                        <li><a href="#">Recon Hyundai Car</a></li>
                                        <li><a href="#">Best Deal</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-child"><a href="#nav-homepages">Sell</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li><a href="#">Create Ad</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <!--end navigation-->
                </div>
                <!--end primary-nav-->
                <div class="secondary-nav">
					<?php if($this->session->userdata("LoggedUser") == null):?>
						<a data-toggle="modal" href="#SignIn">Sign In</a>
						<a data-toggle="modal" href="#Register">Register</a>
					<?php else:?>
						<ul class="navigation">
							<li class="has-child"><a href="#nav-homepages"><?php $user_data = $this->session->userdata("LoggedUser"); echo $user_data["FirstName"];?></a>
								<div class="wrapper">
									<div id="nav-homepages" class="nav-wrapper">
										<ul>
											<li><a href="<?php echo base_url();?>user">My Profile</a></li>
											<li><a href="#">Manage Ads</a></li>
											<li><a href="#">Favourites</a></li>
											<li><a href="#" class="btnLogout">Logout</a></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					<a href="#" class="btnLogout">Logout</a>
					<?php endif;?>
                </div>
                <!--end secondary-nav-->
                <a id="aAddListing" href="#AddListing" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-toggle="modal"><i class="fa fa-plus"></i><span>Create Ad</span></a>
				<?php if($this->session->userdata("LoggedUser")): if($user_data["Group"] == 1):?><a href="<?php echo base_url();?>admin" class="btn btn-primary btn-small btn-rounded icon shadow add-listing">Admin</a><?php endif;endif;?>
                <div class="nav-btn">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>
                <!--end nav-btn-->
            </div>
            <!--end right-->
        </nav>
        <!--end nav-->
    </header>
    <!--end page-header-->

	<div class="modal fade" id="SignIn" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Sign In</h2>
					</div>
				</div>
				<div class="modal-body">
					<form onsubmit="event.preventDefault(); validateSignInForm();" class="form inputs-underline frmSignIn">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="password" placeholder="Your password">
						</div>
						<div class="form-group center">
							<button id="btnSignIn" type="submit" class="btn btn-primary width-100" value="SignIn">Sign In</button>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button id="btnSignInViaFB" class="btn btn-primary width-100" value="FB"><i class="fa fa-facebook-official"></i> Sign In with Facebook</button>
						</div>
						<!--end form-group-->
					</form>

					<hr>
					<div id="SignInError" class="noti-error" style="display:none;">We are sorry! You have entered an incorrect username/password combination.</div>
					<a href="#" data-modal-external-file="modal_reset_password.php" data-target="modal-reset-password">I have forgot my password</a>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
    </div>

	<div class="modal fade" id="Register" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Register</h2>
					</div>
				</div>
				<div class="modal-body">
					<form id="frmRegister" onsubmit="event.preventDefault();validateRegForm();" class="form inputs-underline frmRegister">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="reg_email" placeholder="email@example.com">
							<div id="noti-error-email" class="noti-error" style="display:none;">Email address already exists for another account.</div>
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" id="reg_password" placeholder="Password">
							<div id="noti-error-pwd-empty" class="noti-error" style="display:none;">Password cannot empty.</div>
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="confirm_password">Confirm Password</label>
							<input type="password" class="form-control" name="confirm_password" id="reg_confirm_password" placeholder="Confirm Password">
							<div id="noti-error-pwd-match" class="noti-error" style="display:none;">Password does not match.</div>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button id="btnRegister" type="submit" class="btn btn-primary width-100" value="Reg">Register Now</button>
						</div>
						<div class="form-group center">
							<button id="btnRegisterFB" class="btn btn-primary width-100" value="FB"><i class="fa fa-facebook-official"></i> Register with Facebook</button>
						</div>
						<!--end form-group-->
					</form>

					<hr>
					<p class="note">By clicking on “Register Now” or "Register with Facebook" button you are accepting the <a href="terms-and-conditions.html" class="underline">Terms & Conditions</a></p>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>

	<div class="modal fade" id="ForgotPwd" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-350px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Reset Password</h2>
						<p>Enter your sign in email where we will send you new generated password.</p>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" class="form-control" name="email" id="email" placeholder="Your email">
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100">Send me new password</button>
						</div>
						<!--end form-group-->
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>

	<div class="modal fade" id="RegisterSuccess" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2>Success</h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline">
						<div class="form-group center">
						You have successfully registered. A verification link is sent to your email. Please kindly verify.
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100">OK</button>
						</div>
						<!--end form-group-->
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	
	<div class="modal fade" id="RegisterFailed" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2>Failed</h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" onsubmit="event.preventDefault();">
						<div class="form-group center">
						Account with email address entered already exist.
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100" onclick="$('#RegisterFailed').modal('hide');">OK</button>
						</div>
						<!--end form-group-->
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	
	<div class="modal fade" id="LoginFailed" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2>Failed</h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" onsubmit="event.preventDefault();">
						<div class="form-group center">
						<label id="SignInStatus"></label>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100" onclick="$('#LoginFailed').modal('hide');">OK</button>
						</div>
						<!--end form-group-->
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
	
	<div class="modal fade" id="AddListing" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-800px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Add Listing (use for edit and add listing)</h2>
					</div>
				</div>
				<div class="modal-body">
					<form id="frmAddListing" method="post" action="<?php echo base_url();?>main/addlisting" class="form inputs-underline" enctype="multipart/form-data">
						<section>
						<h3>Car Details</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Model</label>
										<select class="form-control selectpicker" name="ALModel" id="ALModel">
											<option value="">Select a Model</option>
											<option value="1">Accent</option>
											<option value="2">Atos</option>
											<option value="3">Avante</option>
											<option value="4">Azera</option>
											<option value="5">Coupe</option>
											<option value="6">Elantra</option>
											<option value="7">Getz</option>
											<option value="8">Grandeur XG250</option>
											<option value="9">Grand Starex</option>
											<option value="10">i10</option>
											<option value="11">i10 Kappa</option>
											<option value="12">i30</option>
											<option value="13">i40</option>
											<option value="14">i40 Sedan</option>
											<option value="15">i40 Tourer</option>
											<option value="16">IONIQ</option>
											<option value="17">Matrix</option>
											<option value="18">Md Elantra</option>
											<option value="19">Santa FE</option>
											<option value="20">Sonata</option>
											<option value="21">Starex</option>
											<option value="22">Terracan</option>
											<option value="23">Trajet</option>
											<option value="24">Tucson</option>
											<option value="25">Veloster</option>
										</select>
									</div>
									<!--end form-group-->
								</div>
								<!--end col-md-6-->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="category">Specification</label>
										<select class="form-control selectpicker" name="ALSpecification" id="ALSpecification">
											<option value="">Select a Specification</option>
											<option value="1">Gamma 1.6L EX</option>
											<option value="2">Gamma 1.6L EX Sport</option>
											<option value="3">Gamma 1.6L EX Plus</option>
											<option value="4">Gamma 1.6L Premium</option>
											<option value="5">Nu 1.8L Premium</option>
										</select>
									</div>
									<!--end form-group-->
								</div>
								<!--col-md-6-->
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="category">Transmission</label>
										<select class="form-control selectpicker" name="ALTransmission" id="ALTransmission">
											<option value="">Select a Transmission</option>
											<option value="1">Automatic</option>
											<option value="2">Manual</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Manufacturing Year</label>
										<select class="form-control selectpicker" name="ALManufacturingYear" id="ALManufacturingYear">
											<option value="">Manufacturing Year</option>
											<option value="1">2018</option>
											<option value="2">2017</option>
											<option value="3">2016</option>
											<option value="4">2015</option>
											<option value="5">2014</option>
											<option value="6">2013</option>
											<option value="7">2012</option>
											<option value="8">2011</option>
											<option value="9">2010</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Mileage</label>
										<select class="form-control selectpicker" name="ALMileage" id="ALMileage">
											<option value="">Select a Mileage</option>
											<option value="1">0 KM</option>
											<option value="2">5,000 KM</option>
											<option value="3">10,000 KM</option>
											<option value="4">15,000 KM</option>
											<option value="5">20,000 KM</option>
											<option value="6">25,000 KM</option>
											<option value="7">30,000 KM</option>
											<option value="8">35,000 KM</option>
											<option value="9">40,000 KM</option>
											<option value="10">45,000 KM</option>
											<option value="11">50,000 KM</option>
											<option value="12">55,000 KM</option>
											<option value="13">60,000 KM</option>
											<option value="14">65,000 KM</option>
											<option value="15">70,000 KM</option>
											<option value="16">75,000 KM</option>
											<option value="17">80,000 KM</option>
											<option value="18">85,000 KM</option>
											<option value="19">90,000 KM</option>
											<option value="20">95,000 KM</option>
											<option value="21">100,000 KM</option>
											<option value="22">105,000 KM</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Colour</label>
										<input type="text" class="form-control" name="ALColour" id="ALColour" placeholder="Colour">
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Selling Price</label>
										<input type="text" class="form-control" name="ALSellingPrice" id="ALSellingPrice" placeholder="Selling Price">
									</div>
									<!--end form-group-->
								</div>
								<!--col-md-6-->
								<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="category">State</label>
									<select class="form-control selectpicker" name="ALState" id="ALState">
										<option value="">Select a State</option>
										<option value="1">Kuala Lumpur</option>
										<option value="2">Selangor</option>
										<option value="3">Johor</option>
										<option value="4">Penang</option>
										<option value="5">Perak</option>
										<option value="6">Kedah</option>
										<option value="7">Negeri Sembilan</option>
										<option value="8">Pahang</option>
										<option value="9">Sabah</option>
										<option value="10">Sarawak</option>
										<option value="11">Terengganu</option>
										<option value="12">Melaka</option>
										<option value="13">Kelantan</option>
										<option value="14">Perlis</option>
										<option value="15">Putrajaya</option>
										<option value="16">Labuan</option>
									</select>
								</div>
								<!--end form-group-->
								  <div class="form-group">
									  <label for="address-autocomplete">Address</label>
									  <input type="text" class="form-control" name="ALAddress" id="ALAddress" placeholder="Address">
								  </div>
								  <!--end form-group-->
								  <div class="map height-200px shadow" id="map-modal"></div>
								  <!--end map-->
								  <div class="form-group hidden">
									  <input type="text" class="form-control" id="ALLatitude" name="ALLatitude" hidden="">
									  <input type="text" class="form-control" id="ALLongitude" name="ALLongitude" hidden="">
								  </div>
								  <p class="note">Enter the exact address or drag the map marker to position</p>

								</div>
								<!--col-md-6-->
							</div>
							<!--end row-->
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="ALDescription" rows="4" name="ALDescription" placeholder="Describe the listing"></textarea>
							</div>
							<!--end form-group-->

						</section>
						<section>
							<h3>Gallery</h3>
							<div class="file-upload-previews"></div>
							<div class="file-upload">
								<input type="file" name="userfile[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
								<span>Click or drag images here</span>
							</div>
							<!--end form-group-->
						</section>
						<section>
							<h3>Specification</h3>
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-5">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-5" aria-expanded="false" aria-controls="accordion-collapse-5">
												<i class="fa fa-list-ul"></i>General Specification
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-5">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Category</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="gs_category" placeholder="Passenger Car">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Model Name</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="gs_model_name" placeholder="Elantra">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Body Type</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="gs_body_type" placeholder="4 Doors">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Seats</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="gs_seats" placeholder="5 Seats">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
										</div>
									</div>
									<!--end panel-collapse-->
								</div>
								<!--end panel-->
							</div>
							<!--end panel-group-->
						</section>
						<section>
							<div class="panel-group" id="accordion-6" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-6">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-6" href="#accordion-collapse-6" aria-expanded="false" aria-controls="accordion-collapse-6">
												<i class="fa fa-area-chart"></i>Performance
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-6">
										<div class="panel-body">
											<div class="wrapper">

											<h4><b>ENGINE</b></h4>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Engine Label</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_label" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Engine Capacity</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_capacity" placeholder="1.6">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Fuel System</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_fuel_system" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Displacement (cc)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_displacement" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Power Label</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_power_label" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Power (ps)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_power_ps" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Power (kW)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_power_kw" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Power (rpm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_power_rpm" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Torque Label</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_torque_label" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Torque (kg.m)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_touque_kgm" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Torque (Nm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_touque_nm" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Max Torque (rpm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_max_touque_rpm" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Number of Cylinders</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_number_of_cylinders" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Valve of Cylinder</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_eg_valve_of_cylinder" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->

											<hr>

											<h4><b>TRANSMISSION</b></h4>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Transmission Type</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_tm_type" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Drive Type</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_tm_drive_type" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Gear (Speed)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_tm_gear_speed" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Drive Configuration</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="pf_tm_drive_config" placeholder="MPI">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->

											</div>
											<!--end wrapper-->
										</div>
										<!--end panel-body-->
									</div>
									<!--end panel-collapse-->
								</div>
								<!--end panel-->
							</div>
							<!--end panel-group-->
						</section>
						<section>
							<div class="panel-group" id="accordion-7" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-7">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-7" href="#accordion-collapse-7" aria-expanded="false" aria-controls="accordion-collapse-7">
												<i class="fa fa-car"></i>Dimension
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-7">
										<div class="panel-body">
											<div class="wrapper">

											<h4><b>EXTERIOR</b></h4>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Overall Length (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_length" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Overall Width (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_width" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Overall Height (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_height" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Wheel Base (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_wheel_base" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Wheel Tread (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_front_wheel_tread" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Rear Wheel Tread (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_rear_wheel_tread" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Over Hang (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_front_over_hang" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Rear Over Hang (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_ex_rear_over_hang" placeholder="Gamma 1.6 Dual CVVT">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->


											<hr>

											<h4><b>CARGO</b></h4>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Cargo Area (VDA)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="dm_cg_area_vda" placeholder="6 Speed Automatic FWD">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<!--end row-->

											</div>
											<!--end wrapper-->
										</div>
										<!--end panel-body-->
									</div>
									<!--end panel-collapse-->
								</div>
								<!--end panel-->
							</div>
							<!--end panel-group-->
						</section>
						<section>
							<div class="panel-group" id="accordion-8" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-8">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-8" href="#accordion-collapse-8" aria-expanded="false" aria-controls="accordion-collapse-8">
												<i class="fa fa-gear"></i>Wheels
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-8">
										<div class="panel-body">
											<div class="wrapper">
											<h4><b>WHEELS & TIRES</b></h4>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Wheels</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="wh_front_wheel" placeholder="6 Speed Automatic FWD">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Rear Wheels</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="wh_rear_wheel" placeholder="6 Speed Automatic FWD">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Tires</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="wh_front_tires" placeholder="6 Speed Automatic FWD">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Rear Tires</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="wh_rear_tires" placeholder="6 Speed Automatic FWD">
													</div>
													<!--end form-group-->
												</div>
												<!--end col-md-9-->
											</div>


											</div>
											<!--end wrapper-->
										</div>
										<!--end panel-body-->
									</div>
									<!--end panel-collapse-->
								</div>
								<!--end panel-->
							</div>
							<!--end panel-group-->
						</section>

						<hr>
						<section class="center">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-rounded">Preview</button>
								<!--<button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>-->
								<button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Cancel</button>
							</div>
							<!--end form-group-->
						</section>
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
