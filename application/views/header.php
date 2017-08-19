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
                <a href="<?php echo base_url();?>main" class="brand"><img src="<?php echo base_url();?>assets/img/logo_kuc.png" height="20"></a>
            </div>
            <!--end left-->
            <div class="right">
                <div class="primary-nav has-mega-menu">
                    <ul class="navigation">
                        <li class="has-child"><a href="#">Buy</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li><a href="<?php echo base_url();?>listing">Used Hyundai Car</a></li>
                                        <li><a href="#">New Hyundai Car</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-child"><a id="aAddListing" href="#AddListing" data-toggle="modal">Sell</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul>
                                        <li><a id="aAddListing" href="#AddListing" data-toggle="modal">Create Ad</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-child liCompare"><a href="#nav-homepages">Compare (<span class="sCompare"><?php echo count($this->session->userdata('compareData'));?></span>)</a>
                            <div class="wrapper">
                                <div id="nav-homepages" class="nav-wrapper">
                                    <ul class="ulCompare">
										<?php if($this->session->userdata('compareData')):?>
											<?php $compareData = $this->session->userdata('compareData'); foreach($compareData as $compareEach):?>
											<?php $query = $this->db->query("SELECT L.Brand AS BrandName, L.ID AS LID, L.Model AS ModelName, L.Specification AS SpecificationName, L.SellingPrice AS SellingPrice, L.Mileage AS Mileage, LI.ListingPic AS ListingPic, L.AddedBy AS LAddedBy FROM tbl_listing AS L LEFT JOIN tbl_listingimage AS LI ON L.ID = LI.ListingID WHERE L.ID = ".$compareEach);$queryCompare = $query->row();?>
											<li id="liCompare_<?php echo $compareEach;?>" style="padding: 5px; height: 90px;">
											  <div style="width: 80px; height: 80px; float: left; background-image: url('<?php if($queryCompare->ListingPic): echo base_url();?>assets/img/listing/<?php echo $queryCompare->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>'); background-position: center; overflow: hidden; background-size: cover; margin-right: 10px;"></div>
											  <div class="row" style="width: 400px; height: 80px;">
												<a href="<?php echo base_url().'listing/details/'.$queryCompare->LID.'/'.$queryCompare->LAddedBy;?>"><b><?php echo $queryCompare->BrandName;?> <?php echo $queryCompare->ModelName;?></b></a>
												<?php echo $queryCompare->SpecificationName;?> | RM<?php echo number_format($queryCompare->SellingPrice);?> | <?php echo $queryCompare->Mileage;?>KM<br/>
												<a href="#" onclick="RemoveCompare(<?php echo $compareEach;?>);"><i class="fa fa-close"></i> Remove</a>
											  </div>
											</li>
											<?php endforeach;?>
											<li id="liCompareNow"><a href="<?php echo base_url();?>compare">Compare Now</a></li>
										<?php else:?>
											<li id="liNoCompare"><a href="#">You have not selected any listing</a></li>
										<?php endif;?>
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
						<a id="btnRegister" data-toggle="modal" href="#Register">Register</a>
					<?php else:?>
						<ul class="navigation" style="padding-left: 0;">
							<li class="has-child"><a href="<?php $user_data = $this->session->userdata("LoggedUser"); echo base_url();?>user/index/<?php echo $user_data["UserID"]?>"><?php echo $user_data["EmailAddress"];?></a>
								<div class="wrapper">
									<div id="nav-homepages" class="nav-wrapper">
										<ul>
											<li><a href="<?php echo base_url();?>user/index/<?php echo $user_data["UserID"]?>">My Profile</a></li>
											<li><a href="<?php echo base_url();?>user/listing/<?php echo $user_data["UserID"]?>">My Advertisements</a></li>
											<li><a href="<?php echo base_url();?>user/favourite/<?php echo $user_data["UserID"];?>">My Favourites</a></li>
										</ul>
									</div>
								</div>
							</li>
						</ul>
					<a href="#" class="btnLogout">Logout</a>
					<?php endif;?>
                </div>
                <!--end secondary-nav-->
				<?php if($this->session->userdata("LoggedUser") == null):?>
				<a id="aAddListingNoUser" href="#" class="btn btn-primary btn-small btn-rounded icon shadow add-listing"><i class="fa fa-plus"></i><span>Create Ad</span></a>
				<?php else:?>
                <a id="aAddListing" href="#AddListing" class="btn btn-primary btn-small btn-rounded icon shadow add-listing" data-toggle="modal"><i class="fa fa-plus"></i><span>Create Ad</span></a>
				<?php endif;?>
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
							<button id="btnSignInViaFB" type="button" class="btn btn-primary width-100" value="FB" style="padding: 13px;margin-top: -2px;"><i class="fa fa-facebook-official"></i> Sign In with Facebook</button>
						</div>
						<!--end form-group-->
					</form>

					<hr>
					<div id="SignInError" class="noti-error" style="display:none;">Sorry! You have entered an incorrect username/password combination.</div>
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
						<h2 class="h2RegisterTitle">Register</h2>
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
							<label for="mobile">Phone No</label>
							<input type="text" class="form-control" name="mobile" id="reg_mobile" placeholder="60123456789">
							<div id="noti-error-mobile" class="noti-error" style="display:none;">Phone number cannot empty.</div>
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
						<div class="form-group">
							<label for="confirm_password">Newsletter Subscription</label>
							<br/>
							<br/>
							<input type="checkbox" name="newsletter_subscription" id="newsletter_subscription">Allow system to send marketing email
						</div>
						<!--end form-group-->
							<br/>
						<div class="form-group center">
							<button id="btnRegister" type="submit" class="btn btn-primary width-100" value="Reg">Register Now</button>
						</div>
						<div class="form-group center">
							<button id="btnRegisterFB" type="button" class="btn btn-primary width-100" value="FB" style="padding: 13px;margin-top: -2px;"><i class="fa fa-facebook-official"></i> Register with Facebook</button>
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
						<h1>Add Listing</h1>
					</div>
				</div>
				<div class="modal-body">
					<form id="frmAddListing" method="post" action="<?php echo base_url();?>main/addlisting" class="form inputs-underline" enctype="multipart/form-data">
						<section>
						<h3>Car Details</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Brand</label>
										<select class="form-control selectpicker" name="selALBrand" id="selALBrand">
											<option>Hyundai</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Year</label>
										<select class="form-control selectpicker" name="selALYear">
											<option>Select a Year</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Specification</label>
										<select class="form-control selectpicker" name="selALSpecification">
											<option>Select a Specification</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Mileage</label>
										<select class="form-control selectpicker" name="ALMileage" id="ALMileage">
											<option value="">Select a Mileage</option>
											<option value="1">0 KM - 4,999 KM</option>
											<option value="2">5,000 KM - 9,999 KM</option>
											<option value="3">10,000 KM - 14,999 KM</option>
											<option value="4">15,000 KM - 19,999 KM</option>
											<option value="5">20,000 KM - 24,999 KM</option>
											<option value="6">25,000 KM - 29,999 KM</option>
											<option value="7">30,000 KM - 34,999 KM</option>
											<option value="8">35,000 KM - 39,999 KM</option>
											<option value="9">40,000 KM - 44,999 KM</option>
											<option value="10">45,000 KM - 49,999 KM</option>
											<option value="11">50,000 KM - 54,999 KM</option>
											<option value="12">55,000 KM - 59,999 KM</option>
											<option value="13">60,000 KM - 64,999 KM</option>
											<option value="14">65,000 KM - 69,999 KM</option>
											<option value="15">70,000 KM - 74,999 KM</option>
											<option value="16">75,000 KM - 79,999 KM</option>
											<option value="17">80,000 KM - 84,999 KM</option>
											<option value="18">85,000 KM - 89,999 KM</option>
											<option value="19">90,000 KM - 94,999 KM</option>
											<option value="20">95,000 KM - 99,999 KM</option>
											<option value="21">100,000 KM - 104,999 KM</option>
											<option value="22">105,000 KM - 109,999 KM</option>
											<option value="23">110,000 KM - 114,999 KM</option>
											<option value="24">115,000 KM - 119,999 KM</option>
											<option value="25">120,000 KM - 124,999 KM</option>
											<option value="26">125,000 KM - 129,999 KM</option>
											<option value="27">130,000 KM - 134,999 KM</option>
											<option value="28">135,000 KM - 139,999 KM</option>
											<option value="29">140,000 KM - 144,999 KM</option>
											<option value="30">145,000 KM - 149,999 KM</option>
											<option value="31">150,000 KM - 154,999 KM</option>
											<option value="32">155,000 KM - 159,999 KM</option>
											<option value="33">160,000 KM - 164,999 KM</option>
											<option value="34">165,000 KM - 169,999 KM</option>
											<option value="35">170,000 KM - 174,999 KM</option>
											<option value="36">175,000 KM - 179,999 KM</option>
											<option value="37">180,000 KM - 184,999 KM</option>
											<option value="38">185,000 KM - 189,999 KM</option>
											<option value="39">190,000 KM - 194,999 KM</option>
											<option value="40">195,000 KM - 199,999 KM</option>
											<option value="41">≥ 200,000 KM</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">State</label>
										<select class="form-control selectpicker" name="ALState" id="ALState">
											<option value="">Select a State</option>
											<?php foreach($state as $eachState):?>
											<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Car Colour</label>
										<input type="text" class="form-control" name="ALColour" id="ALColour" placeholder="Car Colour">
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="description">Description</label>
										<textarea class="form-control" id="ALDescription" rows="5" name="ALDescription" placeholder="Describe the listing"></textarea>
									</div>
									<!--end form-group-->
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Model</label>
										<select class="form-control selectpicker" name="selALModel" id="selALModel">
											<option>Select a Model</option>
											<?php foreach($model as $eachModel):?>
                                            <option><?php echo $eachModel->gs_model;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Transmission</label>
										<select class="form-control selectpicker" name="selALTransmission" id="ALTransmission">
											<option>Select a Transmission</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Condition</label>
										<select class="form-control selectpicker" name="ALCondition" id="ALCondition">
											<option>Select a Condition</option>
											<?php if($this->session->userdata("LoggedUser") != null):?>
												<?php if($user_data["Group"] == 1):?>
												<option>New</option>
												<?php endif;?>
											<?php endif;?>
											<option>Used</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Selling Price</label>
										<input type="number" class="form-control" name="ALSellingPrice" id="ALSellingPrice" placeholder="Selling Price">
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
								<div class="col-md-6 col-sm-6">
								</div>
								<!--end col-md-6-->
							</div>
							<!--end row-->


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
                <p style="padding-bottom: 5px;">All information and specifications stated here are automatically generated based on data available at the time of publication and subject to change without prior notice, thus, may differ from those shown in the website and brochure. Please kindly edit accordingly shall any of the specifications is changed or modified.</p>
                <div class="panel-group" id="accordion-1" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-1">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-1" aria-expanded="false" aria-controls="accordion-collapse-1">
                                    <i class="fa fa-list-ul"></i>General Details
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-1">
                            <div class="panel-body">
                              <div class="row">
                                  <div class="col-md-3 col-sm-3 horizontal-input-title">
                                      <strong>Brand</strong>
                                  </div>
                                  <!--end col-md-3-->
                                  <div class="col-md-9 col-sm-9">
                                      <div class="form-group">
                                          <input type="text" class="form-control" name="ALBrand" placeholder="Hyundai">
                                      </div>
                                      <!--end form-group-->
                                  </div>
                                  <!--end col-md-9-->
                              </div>
                              <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Category</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALCategory" placeholder="Sedan">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Model</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALModel" placeholder="Sonata">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Specification</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALSpecification" placeholder="GLS 1.6 Premium">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Year</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALYear" placeholder="2003">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Engine CC</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALGDEngineCC" placeholder="1599">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Transmission</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALGDTransmission" placeholder="Automatic">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Seat Capacity</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALSeatCapacity" placeholder="5">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Mileage (km)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALMileageDup" placeholder="100,000">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Colour</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALColourDup" placeholder="Red">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Doors</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALDoors" placeholder="5">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Assembled</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALAssembled" placeholder="Locally Build">
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
                <div class="panel-group" id="accordion-2" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-2">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-2" aria-expanded="false" aria-controls="accordion-collapse-2">
                                    <i class="fa fa-list-ul"></i>Transmission
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-2">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Transmission</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALTTransmission" placeholder="Automatic">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Final Drive Ratio</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFinalDriveRatio" placeholder="4.042">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Number of Gears</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALNoofGears" placeholder="5">
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
                <div class="panel-group" id="accordion-3" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-3">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-3" aria-expanded="false" aria-controls="accordion-collapse-3">
                                    <i class="fa fa-list-ul"></i>Engine Specifications
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-3">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Engine CC</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALESEngineCC" placeholder="1499">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Stroke (mm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALStroke" placeholder="1499">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Peak Power (hp)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALPeakPower" placeholder="1499">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Engine Type</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALEngineType" placeholder="Piston">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Aspiration</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALAspiration" placeholder="Aspirated">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Bore (mm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALBore" placeholder="85">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Compression Ratio</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALCompressionRatio" placeholder="10">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Peak Torque (Nm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALPeakTorque" placeholder="178">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Direct Injection</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALDirectInjection" placeholder="Multi-Point Injected">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Fuel Type</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFuelType" placeholder="Petrol - Unleaded (ULP)">
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
                <div class="panel-group" id="accordion-4" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-4">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-4" aria-expanded="false" aria-controls="accordion-collapse-4">
                                    <i class="fa fa-list-ul"></i>Dimensions & Weight
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-4">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Length (mm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALLength" placeholder="4747">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Height (mm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALHeight" placeholder="1422">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Width (mm)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALWidth" placeholder="1820">
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
                                            <input type="text" class="form-control" name="ALWheelBase" placeholder="2700">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Front Thread</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFrontThread" placeholder="1540">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Rear Thread</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALRearThread" placeholder="1530">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Fuel Tank (litres)</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFuelTank" placeholder="65">
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
                <div class="panel-group" id="accordion-5" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="accordion-heading-5">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-5" aria-expanded="false" aria-controls="accordion-collapse-5">
                                    <i class="fa fa-list-ul"></i>Brakes
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-5">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Front Brakes</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFrontBrakes" placeholder="Ventilated Discs">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Rear Brakes</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALRearBrakes" placeholder="Discs">
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
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-6" aria-expanded="false" aria-controls="accordion-collapse-6">
                                    <i class="fa fa-list-ul"></i>Suspensions
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-6">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Front Suspension</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFrontSuspension" placeholder="Double Wishbone">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Rear Suspension</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALRearSuspension" placeholder="Multiple links">
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
                        <div class="panel-heading" role="tab" id="accordion-heading-7">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-7" aria-expanded="false" aria-controls="accordion-collapse-7">
                                    <i class="fa fa-list-ul"></i>Tyres & Wheels
                                </a>
                            </h4>
                        </div>
                        <!--end panel-heading-->
                        <div id="accordion-collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-7">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Front Tyres</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFrontTyres" placeholder="195/65 R15">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Rear Tyres</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALRearTyres" placeholder="195/65 R15">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Front Rims</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALFrontRims" placeholder="15">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-9-->
                                </div>
                                <!--end row-->
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 horizontal-input-title">
                                        <strong>Rear Rims</strong>
                                    </div>
                                    <!--end col-md-3-->
                                    <div class="col-md-9 col-sm-9">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="ALRearRims" placeholder="15">
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
<div id="noti-error-car-details" class="noti-error" style="display:none;">Please fill in all details for Car Details.</div>
<div id="noti-error-ad-image" class="noti-error" style="display:none;">Image is compulsory</div>
						
						<hr>
						<section class="center">
							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-rounded">Preview</button>
								<!--<button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>-->
								<button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame" onclick="event.preventDefault();$('#AddListing').modal('hide');">Cancel</button>
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