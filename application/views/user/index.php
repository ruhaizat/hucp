	<script>
		var map;
		function initialize() {
			var markers = [];
			map = new google.maps.Map(document.getElementById('map-modal-user'), {
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(<?php if($user->Latitude):echo $user->Latitude;else:echo "3.0266654";endif;?>, <?php if($user->Longitude):echo $user->Longitude;else:echo "101.69214009999996";endif;?>));
			map.fitBounds(defaultBounds);

			var listener = google.maps.event.addListener(map, "idle", function() {
			if (map.getZoom() > 16) map.setZoom(16);
			  google.maps.event.removeListener(listener);
			});

			var marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(<?php if($user->Latitude):echo $user->Latitude;else:echo "3.0266654";endif;?>, <?php if($user->Longitude):echo $user->Longitude;else:echo "101.69214009999996";endif;?>)
			});

			markers.push(marker);

			var input = (document.getElementById('address'));
			//map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

			var searchBox = new google.maps.places.SearchBox((input));

			google.maps.event.addListener(map, "click", function(event) {
				for (var i = 0, marker; marker = markers[i]; i++) {
					marker.setMap(null);
				}

				var lat = event.latLng.lat();
				var lng = event.latLng.lng();

				$("#latitude").val(lat);
				$("#longitude").val(lng);

				var marker = new google.maps.Marker({
					map: map,
					position: event.latLng
				});

				markers.push(marker);
			});

			google.maps.event.addListener(searchBox, 'places_changed', function() {
				var places = searchBox.getPlaces();

				for (var i = 0, marker; marker = markers[i]; i++) {
					marker.setMap(null);
				}

				markers = [];
				var bounds = new google.maps.LatLngBounds();
				for (var i = 0, place; place = places[i]; i++) {
					var marker = new google.maps.Marker({
						map: map,
						title: place.name,
						position: place.geometry.location
					});

					markers.push(marker);

					$("#latitude").val(place.geometry.location.lat());
					$("#longitude").val(place.geometry.location.lng());

					bounds.extend(place.geometry.location);
				}
				map.fitBounds(bounds);
				var listener = google.maps.event.addListener(map, "idle", function() {
				if (map.getZoom() > 16) map.setZoom(16);
				  google.maps.event.removeListener(listener);
				});
			});

			google.maps.event.addListener(map, 'bounds_changed', function() {
				var bounds = map.getBounds();
				searchBox.setBounds(bounds);
			});
		}
		google.maps.event.addDomListener(window, 'load', initialize);

		$(document).ready(function(){
			$("#aResendVerify").click(function () {
				var hID = $("#hID").val();
				var phone = $("#phone").val();
				var datastr = '{"mode":"SendMobileVCode","UserID":"'+hID+'","MobileNo":"'+phone+'"}';
				$.ajax({
					url: "<?php echo base_url();?>user/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						var rData = JSON.parse(data);
						if(rData.status == 0){
							$(".noti-error-verify-mobile").text("Successfully resend.");
							$(".noti-error-verify-mobile").show();
							$("#UserVerifyMobile").modal("show");
						}else{
							$("#UserDetailsNoti").modal("show");
							$("#h2Text").text("Mobile Number Verification Failed");
							$("#BodyMsg").text("Error code: " + rData.message);
						}
					}
				});
			});
			$("#btnVerifyNo").click(function () {
				var hID = $("#hID").val();
				var phone = $("#phone").val();
				var datastr = '{"mode":"SendMobileVCode","UserID":"'+hID+'","MobileNo":"'+phone+'"}';
				$.ajax({
					url: "<?php echo base_url();?>user/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						var rData = JSON.parse(data);
						if(rData.status == 0){
							$("#UserVerifyMobile").modal("show");
						}else{
							$("#UserDetailsNoti").modal("show");
							$("#h2Text").text("Mobile Number Verification Failed");
							$("#BodyMsg").text("Error code: " + rData.message);
						}
					}
				});
			});
			$("#btnVerifyNow").click(function () {
				var hID = $("#hID").val();
				var phone = $("#phone").val();
				var token = $("#verifyDigit").val();


				var datastr = '{"mode":"ConfirmVerificationCode","UserID":"'+hID+'","MobileNo":"'+phone+'","Token":"'+token+'"}';
				$.ajax({
					url: "<?php echo base_url();?>user/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						if(data == "Mobile number verified."){
							$("#UserVerifyMobile").modal("hide");

							$(".mobileNotVerified").hide();
							$(".mobileVerified").show();
						}else{
							$(".noti-error-verify-mobile").text("We are sorry! You have entered an incorrect verification code.");
							$(".noti-error-verify-mobile").show();
						}
					}
				});
			});

			$("#user_image").change(function () {
				previewFile(this);
			});
			$("#frmUpdateDetails").submit(function(e){
				e.preventDefault();
				if($("#hIsImgChange").val() == "1"){
					var formData = new FormData();
					formData.append('file', $('#user_image')[0].files[0]);
					$.ajax({
							url : '<?php echo base_url();?>user/upload/update',
							type : 'POST',
							data : formData,
							processData: false,  // tell jQuery not to process the data
							contentType: false,  // tell jQuery not to set contentType
							success : function(data) {
								var hID = $("#hID").val();
								var hIsImgChange = $("#hIsImgChange").val();
								var first_name = $("#first_name").val();
								var last_name = $("#last_name").val();
								var email = $("#usrEmail").val();
								var phone = $("#phone").val();
								var identity_card_no = $("#identity_card_no").val();
								var state = $("#state").val();
								var address = $("#address").val();
								var latitude = $("#latitude").val();
								var longitude = $("#longitude").val();
								var datastr = '{"mode":"UpdateDetails","hID":"'+hID+'","first_name":"'+first_name+'","last_name":"'+last_name+'","email":"'+email+'","phone":"'+phone+'","identity_card_no":"'+identity_card_no+'","state":"'+state+'","address":"'+address+'","latitude":"'+latitude+'","longitude":"'+longitude+'","ProfilePic":"'+data+'"}';
								//alert(datastr);
								$.ajax({
									url: "<?php echo base_url();?>user/ajax",
									type: "POST",
									data: {"datastr":datastr},
									success: function(data){
										//alert(data);
										$("#UserDetailsNoti").modal("show");
										$("#h2Text").text("Change Saved");
										$("#BodyMsg").text("Your changes is successfully saved.");
									}
								});
							}
					});
				}else{
					var hID = $("#hID").val();
					var first_name = $("#first_name").val();
					var last_name = $("#last_name").val();
					var email = $("#usrEmail").val();
					var phone = $("#phone").val();
					var identity_card_no = $("#identity_card_no").val();
					var state = $("#state").val();
					var address = $("#address").val();
					var latitude = $("#latitude").val();
					var longitude = $("#longitude").val();
					var datastr = '{"mode":"UpdateDetails","hID":"'+hID+'","first_name":"'+first_name+'","last_name":"'+last_name+'","email":"'+email+'","phone":"'+phone+'","identity_card_no":"'+identity_card_no+'","state":"'+state+'","address":"'+address+'","latitude":"'+latitude+'","longitude":"'+longitude+'"}';
					$.ajax({
						url: "<?php echo base_url();?>user/ajax",
						type: "POST",
						data: {"datastr":datastr},
						success: function(data){
							$("#UserDetailsNoti").modal("show");
							$("#h2Text").text("Change Saved");
							$("#BodyMsg").text("Your changes is successfully saved.");
						}
					});
				}

			});
			$("#frmChangePwd").submit(function(e){
				var pUserID = $("#hIDPwd").val();
				var pCurrentPassword = $("#current_password").val();
				var pNewPassword = $("#new_password").val();
				var pConfirmNewPassword = $("#confirm_new_password").val();
				var pEmail = $("#usrEmail").val();
				var pFirstName = $("#first_name").val();
				var pLastName = $("#last_name").val();
				if(pCurrentPassword == ""){
					$("#UserDetailsNoti").modal("show");
					$("#h2Text").text("Change Password Failed");
					$("#BodyMsg").text("Current password cannot empty.");
				}else{
					var datastr = '{"mode":"CheckCurrentPassword","Password":"'+pCurrentPassword+'","UserID":"'+pUserID+'"}';
					$.ajax({
						url: "<?php echo base_url();?>user/ajax",
						type: "POST",
						data: {"datastr":datastr},
						success: function(data){
							if(data == "Passed"){
								if(pNewPassword == ""){
									$("#UserDetailsNoti").modal("show");
									$("#h2Text").text("Change Password Failed");
									$("#BodyMsg").text("New password cannot empty.");
								}else{
									if(pNewPassword != pConfirmNewPassword){
										$("#UserDetailsNoti").modal("show");
										$("#h2Text").text("Change Password Failed");
										$("#BodyMsg").text("Password confirmation does not match.");
									}else{
										var datastr = '{"mode":"UpdatePassword","Password":"'+pNewPassword+'","UserID":"'+pUserID+'","EmailAddress":"'+pEmail+'","FirstName":"'+pFirstName+'","LastName":"'+pLastName+'"}';
										$.ajax({
											url: "<?php echo base_url();?>user/ajax",
											type: "POST",
											data: {"datastr":datastr},
											success: function(data){
												$("#UserDetailsNoti").modal("show");
												$("#h2Text").text("New Password Saved");
												$("#BodyMsg").text(data);
											}
										});
									}
								}
							}else{
								$("#UserDetailsNoti").modal("show");
								$("#h2Text").text("Change Password Failed");
								$("#BodyMsg").text(data);
							}

						}
					});
				}
				e.preventDefault();
			});
		});

		function previewFile(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$("#hIsImgChange").val("1");
					$("#ImgProfilePicBig").attr("src", e.target.result);
					$("#DivProfilePicBig").attr("style", "background-image:url('"+e.target.result+"');");
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>

	<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="main">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="active">My Profile</li>
            </ol>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="detail-sidebar">
                      <section class="shadow">
                          <div class="content">
                              <div class="vertical-aligned-elements">
                                <div class="review" style="margin-bottom: 20px;">
                                    <div class="image">
                                        <div class="bg-transfer"><img <?php if($user->Type == 2):echo "src='".$user->ProfilePic."'";else: echo "src='".base_url()."assets/img/profile/".$user->ProfilePic."'";endif;?> alt=""></div>
                                    </div>
                                    <div class="description">
                                            <h4><?php echo $user->FirstName." ".$user->LastName;?></h4>
																						ID# <?php echo sprintf('%06d', $user->ID);?>
                                            <!--<a href="#" class="btn btn-primary btn-rounded btn-xs">Edit Profile</a>-->
                                    </div>
                                </div>
                              </div>
                              <hr>
                              <address>
                                  <figure><i class="fa fa-map-marker"></i><?php echo $user->Address;?> </figure>
                                  <figure><i class="fa fa-envelope"></i><?php $out = strlen($user->EmailAddress) > 19 ? substr($user->EmailAddress,0,19)." ..." : $user->EmailAddress; echo $out;?><?php if($user->Status == 2):?> <i class="fa fa-check-circle" style="margin-left: 5px;"></i><?php endif;?></figure>
                                  <figure><i class="fa fa-phone"></i><?php echo $user->MobileNo;?> <i class="fa fa-check-circle mobileVerified" style="margin-left: 5px;<?php if($user->MobileVerification == 0):?>display:none;<?php endif;?>"></i></figure>
								  <?php if($user->MobileVerification == 0):?>
								  <br/>
                                  <a id="btnVerifyNo" class="btn btn-primary btn-rounded btn-xs mobileNotVerified">Verify Mobile No</a>
                                  <br/><br/>
                                  <p style="padding-bottom: 5px; font-size: 13px; font-style: italic;">Verifying your mobile number will increase your chances to be contacted by interested buyers.</p>
								  <?php endif;?>
                              </address>
                              <hr>
                                <a href="<?php echo base_url();?>user/index/<?php echo $user->ID;?>"><h4>My Profile</h4></a>
                              <hr>
                                <a href="<?php echo base_url();?>user/listing/<?php echo $user->ID;?>"><h4>My Advertisements</h4></a>
                              <hr>
                                <a href="<?php echo base_url();?>user/favourite/<?php echo $user->ID;?>"><h4>My Favourites</h4></a>
                          </div>
                      </section>
                  </div>
                  <!--end detail-sidebar-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-9 col-sm-9">
                  <section>
                      <div class="row">
                              <form id="frmUpdateDetails" method="post" action="user/update" class="form inputs-underline" enctype="multipart/form-data">
							  <input type="hidden" id="hID" name="hID" value="<?php echo $user->ID;?>"/>
							  <input type="hidden" id="hIsImgChange" name="hIsImgChange" value="0"/>
                                  <section>
                                      <div class="user-details box">
                                          <div class="user-image">
                                              <div class="image">
                                                  <div id="DivProfilePicBig" class="bg-transfer"><img id="ImgProfilePicBig" <?php if($user->Type == 2):echo "src='".$user->ProfilePic."'";else: echo "src='".base_url()."assets/img/profile/".$user->ProfilePic."'";endif;?> alt=""></div>
                                                  <!--end bg-transfer-->
                                                  <div class="single-file-input">
                                                      <input type="file" id="user_image" name="user_image">
                                                      <div>Upload a picture<i class="fa fa-upload"></i></div>
                                                  </div>
                                              </div>
                                              <!--end image-->
                                          </div>
                                          <!--end user-image-->
                                          <div class="description clearfix">
                                              <h3>Your current membership</h3>
                                              <h2><?php if($user->Group == 1):echo "Administrator";elseif($user->Group == 2):echo "Basic Member";endif;?></h2>
                                              <!--<a href="#" class="btn btn-default btn-rounded btn-xs">Upgrade</a>-->
                                              <hr>
                                              <figure>
                                                  <div class="pull-left"><strong>Member since:</strong></div>
                                                  <div class="pull-right"><?php echo date("d/m/Y", strtotime($user->AddedOn));?></div>
                                              </figure>
                                          </div>
                                          <!--end description-->
                                      </div>
                                  </section>
                                  <!--end user-details-->
                                  <section>
                                      <h3>About You</h3>
                                      <div class="row">
                                          <div class="col-md-6 col-sm-6">
                                              <div class="form-group">
                                                  <label for="first_name">First Name</label>
                                                  <input type="text" class="form-control" name="first_name" id="first_name" placeholder="Your First Name" value="<?php echo $user->FirstName;?>">
                                              </div>
                                              <!--end form-group-->
                                              <div class="form-group">
                                                  <label for="last_name">Last Name</label>
                                                  <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Your Last Name" value="<?php echo $user->LastName;?>">
                                              </div>
                                              <!--end form-group-->
                                              <div class="form-group">
                                                  <label for="email">Email</label>
                                                  <input type="email" class="form-control" name="email" id="usrEmail" placeholder="johndoe@example.com" value="<?php echo $user->EmailAddress;?>">
                                              </div>
                                              <!--end form-group-->
																							<div class="form-group">
                                                  <label for="phone">Phone <?php if($user->MobileVerification == 0):?> <span class="label label-info">Not Verified</span> <?php endif;?></label>
                                                  <input type="text" class="form-control" name="phone" id="phone" placeholder="60123456789" value="<?php echo $user->MobileNo;?>">
                                              </div>
                                              <!--end form-group-->
                                              <div class="form-group">
                                                  <label for="phone">Identity Card No.</label>
                                                  <input type="text" class="form-control" name="identity_card_no" id="identity_card_no" placeholder="000000-00-0000" value="<?php echo $user->IdentityCardNo;?>">
                                              </div>
                                              <!--end form-group-->
                                          </div>
                                          <!--end col-md-6-->
                                          <div class="col-md-6 col-sm-6">
                                            <div class="form-group">
                                                <label for="category">State</label>
                                                <select class="form-control selectpicker" name="state" id="state">
													<?php foreach($state as $eachState):?>
													<option value="<?php echo $eachState->ID;?>" <?php if($user->State == $eachState->ID):echo "selected";endif;?>><?php echo $eachState->Name;?></option>
													<?php endforeach;?>
                                                </select>
                                            </div>
                                            <!--end form-group-->
                                            <div class="form-group">
                                                <label for="address-autocomplete">Address</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter the exact address or drag the map marker to position" value="<?php echo $user->Address;?>">
                                            </div>
                                            <!--end form-group-->
                                            <div class="map height-200px shadow" id="map-modal-user"></div>
                                            <!--end map-->
                                            <div class="form-group hidden">
                                                <input type="hidden" class="form-control" id="latitude" name="latitude" value="<?php echo $user->Latitude;?>">
                                                <input type="hidden" class="form-control" id="longitude" name="longitude" value="<?php echo $user->Longitude;?>">
                                            </div>
                                          </div>
                                          <!--end col-md-6-->
                                      </div>
                                      <!--end row-->
																			<div class="form-group">
                                          <input id="btnSave" type="submit" class="btn btn-primary btn-rounded" value="Save Changes" />
                                      </div>
                                      <!--end form-group-->
                                  </section>
                              </form>
                              <!--end form-->
                                  <hr>
                                  <section>
                                          <div class="row">
                                              <div class="col-md-6 col-sm-6">
                                                  <h3>Change Your Password</h3>
                                                  <form id="frmChangePwd" method="post" action="user/changepwd" class="form inputs-underline">
													  <input type="hidden" id="hIDPwd" name="hIDPwd" value="<?php echo $user->ID;?>"/>
                                                      <div class="form-group">
                                                          <label for="current_password">Current Password</label>
                                                          <input type="password" class="form-control" name="current_password" id="current_password"  placeholder="Current Password" value="">
                                                      </div>
                                                      <!--end form-group-->
                                                      <div class="form-group">
                                                          <label for="new_password">New Password</label>
                                                          <input type="password" class="form-control" name="new_password" id="new_password" placeholder="New Password">
                                                      </div>
                                                      <!--end form-group-->
                                                      <div class="form-group">
                                                          <label for="confirm_new_password">Confirm New Password</label>
                                                          <input type="password" class="form-control" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm New Password">
                                                      </div>
                                                      <!--end form-group-->
                                                      <div class="form-group">
                                                          <button type="submit" class="btn btn-primary btn-rounded">Change Password</button>
                                                      </div>
                                                      <!--end form-group-->
                                                  </form>
                                              </div>
                                              <!--end col-md-6-->
                                          </div>
                                  </section>
                      </div>
                      <!--end row-->
                  </section>
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

	<div class="modal fade" id="UserDetailsNoti" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2 id="h2Text">Changes Saved</h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" onsubmit="event.preventDefault();$('#UserDetailsNoti').modal('hide');">
						<div id="BodyMsg" class="form-group center">
						Your changes is successfully saved.
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

	<div class="modal fade" id="UserVerifyMobile" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Verify Phone Number</h2>
						<p>A verification number is SMS to your mobile number <?php echo $user->MobileNo;?>. Please key in the number to verify.</p>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" onsubmit="event.preventDefault();">
						<div class="form-group">
							<input type="text" class="form-control" name="verifyDigit" id="verifyDigit" placeholder="Verification Code">
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button id="btnVerifyNow" type="submit" class="btn btn-primary width-100">Verify</button>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100" onclick="$('#UserVerifyMobile').modal('hide');">Cancel</button>
						</div>
						<!--end form-group-->
					</form>

					<hr>
					<div class="noti-error noti-error-verify-mobile" style="display:none;">We are sorry! You have entered an incorrect verification code.</div>
					<a href="#" id="aResendVerify">Resend verification code.</a>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
