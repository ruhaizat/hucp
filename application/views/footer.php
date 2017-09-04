
    <footer id="page-footer">
        <div class="footer-wrapper">

            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">© 2017 Korean Used Car. All right reserved</div>
                        <div class="element width-50 text-align-right">
                            <a href="<?php echo base_url();?>">Home</a>
                            <a href="<?php echo base_url();?>listing">Listings</a>
                            <a id="aAddListing" href="#AddListing" data-toggle="modal">Create Ad</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
	<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/richmarker-compiled.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/markerclusterer_packed.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/infobox.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.fitvids.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/icheck.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.trackpad-scroll-emulator.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/maps.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nouislider.all.min.js"></script>
	<!--<script type="text/javascript" src="<?php echo base_url();?>assets/misc/customizer.js"></script>-->

<script>
	function userChangePwd(){
		var datastr = '{"mode":"ChangePassword"}';
		$.ajax({
			url: "<?php echo base_url();?>user/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){

				window.location.replace("<?php echo base_url();?>main");
			}
		});
	}
	function validateSignInForm(){
		var pEmailAddress = $("#email").val();
		var pPassword = $("#password").val();

		var datastr = '{"mode":"SignIn","EmailAddress":"'+pEmailAddress+'","Password":"'+pPassword+'"}';
		$.ajax({
			url: "<?php echo base_url();?>main/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				if(data.includes("Account active")){
					var httprefer = data.split("|")[1];
					window.location.replace(httprefer);
				}else{
					$("#SignInError").show();
					if(data == "Account not verify"){
						$("#SignInError").text(data);
					}
					else{
						$("#SignInError").text("Sorry! You have entered an incorrect username/password combination.");
					}
				}
			}
		});
	}
	function validateRegForm(){
		var pEmail = $("#reg_email").val();
		var pMobile = $("#reg_mobile").val();
		var pPassword = $("#reg_password").val();
		var pConfirmPassword = $("#reg_confirm_password").val();
		var pNewsletter_subscription = "";
		var isProceed = true;

		if($("#newsletter_subscription").is(':checked')){
			pNewsletter_subscription = "true";
		}
		else{
			pNewsletter_subscription = "false";
		}

		//var pFirstName = $("#reg_first_name").val();
		//var pLastName = $("#reg_last_name").val();
		if(pMobile == ""){
			isProceed = false;
			$("#noti-error-mobile").show();
		}else{
			$("#noti-error-mobile").hide();
		}

		if(pEmail == ""){
			isProceed = false;
			$("#noti-error-email").show();
		}else{
			$("#noti-error-email").hide();
		}

		if(pPassword == ""){
			isProceed = false;
			$("#noti-error-pwd-empty").show();
			$("#noti-error-pwd-match").hide();
		}else{
			if(pPassword != pConfirmPassword){
				isProceed = false;
				$("#noti-error-pwd-empty").hide();
				$("#noti-error-pwd-match").show();
			}else{
				$("#noti-error-pwd-empty").hide();
				$("#noti-error-pwd-match").hide();
			}
		}

		if(isProceed == true){
			var datastr = '{"mode":"Register","EmailAddress":"'+pEmail+'","Password":"'+pPassword+'","Mobile":"'+pMobile+'","newsletter_subscription":"'+pNewsletter_subscription+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					//alert(data);
					if(data == "Account registered"){
						$("#RegisterSuccess").modal("show");
						//alert("We have sent verification link to you registered email. Please verify your account before login.");
					}else{
						//alert(data);
						$("#RegisterFailed").modal("show");
						$("#noti-error-email").show();
						$("#noti-error-email").text("Account with email address entered already exist");
						//alert(data);
					}
				}
			});
		}
	}
	$(document).ready(function(){
		$("input[name=ALColour]").change(function(){
			$("input[name=ALColourDup]").val($("input[name=ALColour]").val());
		});
		$("#ALMileage").change(function(){
			$("input[name=ALMileageDup]").val($("#ALMileage option:selected").text());
		});
		$("#aAddListingNoUser").click(function(){
			$(".h2RegisterTitle").text("Please Register to Create Ad");
			$("#Register").modal("show");
		});
		$("#btnRegister").click(function(){
			$(".h2RegisterTitle").text("Register");
		});
		$("select[name=selALBrand]").change(function(){
			var car_brand = $("select[name=selALBrand] option:selected").text();
			var datastr = '{"mode":"SelectBrand","car_brand":"'+car_brand+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selALModel]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Model</option>');
					var gs_model = JSON.parse(data);
					gs_model.forEach(function(entry){
						$('select[name=selALModel]').append('<option>' + entry.gs_model + '</option>');
					});
					$('select[name=selALModel]').selectpicker('refresh');
				}
			});
		});
		$("select[name=selALModel]").change(function(){
			var gs_model = $("select[name=selALModel] option:selected").text();
			var datastr = '{"mode":"SelectModel","gs_model":"'+gs_model+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selALYear]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Year</option>');
					var gs_manu_year = JSON.parse(data);
					gs_manu_year.forEach(function(entry){
						$('select[name=selALYear]').append('<option>' + entry.gs_manu_year + '</option>');
					});
					$('select[name=selALYear]').selectpicker('refresh');
				}
			});
		});
		$("select[name=selALYear]").change(function(){
			var gs_model = $("select[name=selALModel] option:selected").text();
			var gs_manu_year = $("select[name=selALYear] option:selected").text();
			var datastr = '{"mode":"SelectYear","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selALTransmission]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Transmission</option>');
					var tm_transmission = JSON.parse(data);
					tm_transmission.forEach(function(entry){
						$('select[name=selALTransmission]').append('<option>' + entry.tm_transmission + '</option>');
					});
					$('select[name=selALTransmission]').selectpicker('refresh');
				}
			});
		});
		$("select[name=selALTransmission]").change(function(){
			var gs_model = $("select[name=selALModel] option:selected").text();
			var gs_manu_year = $("select[name=selALYear] option:selected").text();
			var tm_transmission = $("select[name=selALTransmission] option:selected").text();
			var datastr = '{"mode":"SelectTransmission","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selALSpecification]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Specification</option>');
					var gs_variant = JSON.parse(data);
					gs_variant.forEach(function(entry){
						$('select[name=selALSpecification]').append('<option>' + entry.gs_variant + '</option>');
					});
					$('select[name=selALSpecification]').selectpicker('refresh');
				}
			});
		});
		$("select[name=selALSpecification]").change(function(){
			var gs_model = $("select[name=selALModel] option:selected").text();
			var gs_manu_year = $("select[name=selALYear] option:selected").text();
			var tm_transmission = $("select[name=selALTransmission] option:selected").text();
			var gs_variant = $("select[name=selALSpecification] option:selected").text();
			var datastr = '{"mode":"SelectSpecification","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'","gs_variant":"'+gs_variant+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var qResult = JSON.parse(data);
					$("input[name=ALBrand]").val(qResult.car_brand);
					$("input[name=ALCategory]").val(qResult.body_style);
					$("input[name=ALModel]").val(qResult.gs_model);
					$("input[name=ALSpecification]").val(qResult.gs_variant);
					$("input[name=ALYear]").val(qResult.gs_manu_year);
					$("input[name=ALGDEngineCC]").val(qResult.en_cc);
					$("input[name=ALGDTransmission]").val(qResult.tm_transmission);
					$("input[name=ALSeatCapacity]").val(qResult.gn_seat_capacity);
					$("input[name=ALMileage]").val("");
					$("input[name=ALColour]").val("");
					$("input[name=ALDoors]").val(qResult.gn_doors);
					$("input[name=ALAssembled]").val(qResult.gn_assembled);

					$("input[name=ALTTransmission]").val(qResult.tm_transmission);
					$("input[name=ALFinalDriveRatio]").val(qResult.tm_final_drive_ratio);
					$("input[name=ALNoofGears]").val(qResult.tm_gears);

					$("input[name=ALESEngineCC]").val(qResult.en_cc);
					$("input[name=ALStroke]").val(qResult.en_stroke);
					$("input[name=ALPeakPower]").val(qResult.en_peak_power);
					$("input[name=ALEngineType]").val(qResult.en_engine_type);
					$("input[name=ALAspiration]").val(qResult.en_aspiration);
					$("input[name=ALBore]").val(qResult.en_bore);
					$("input[name=ALCompressionRatio]").val(qResult.en_compression_ratio);
					$("input[name=ALPeakTorque]").val(qResult.en_peak_torque);
					$("input[name=ALDirectInjection]").val(qResult.en_direct_injection);
					$("input[name=ALFuelType]").val(qResult.en_fuel_type);

					$("input[name=ALLength]").val(qResult.dm_length);
					$("input[name=ALHeight]").val(qResult.dm_height);
					$("input[name=ALWidth]").val(qResult.dm_width);
					$("input[name=ALWheelBase]").val(qResult.dm_wheel_base);
					$("input[name=ALFrontThread]").val(qResult.dm_front_thread);
					$("input[name=ALRearThread]").val(qResult.dm_rear_thread);
					$("input[name=ALFuelTank]").val(qResult.dm_fuel_tank);

					$("input[name=ALFrontBrakes]").val(qResult.br_front);
					$("input[name=ALRearBrakes]").val(qResult.br_rear);

					$("input[name=ALFrontSuspension]").val(qResult.sus_front);
					$("input[name=ALRearSuspension]").val(qResult.sus_rear);

					$("input[name=ALFrontTyres]").val(qResult.tw_front);
					$("input[name=ALRearTyres]").val(qResult.tw_rear);
					$("input[name=ALFrontRims]").val(qResult.tw_front_rim);
					$("input[name=ALRearRims]").val(qResult.tw_rear_rim);
				}
			});
		});
		$("#btnSignInViaFB").click(function(){
			checkLoginState();
		});

		$("#btnRegisterFB").click(function(){
			checkLoginState();
		});

		$("#btnSubmitListing").click(function(){
			alert($(this).val());
		});
		$(".btnLogout").click(function(){
			var datastr = '{"mode":"Logout"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					window.location.replace("<?php echo base_url();?>main");
				}
			});
		});
		$("#frmAddListing").submit(function(){
			$("#noti-error-car-details").hide();
			$("#noti-error-ad-image").hide();
			var isProceed = true;

			var Model = $("#ALModel option:selected").val();
			if(Model == ""){
				isProceed = false;
			}
			var ManufacturingYear = $("#ALManufacturingYear option:selected").val();
			if(ManufacturingYear == ""){
				isProceed = false;
			}
			var Transmission = $("#ALTransmission option:selected").val();
			if(Transmission == ""){
				isProceed = false;
			}
			var Specification = $("#ALSpecification option:selected").val();
			if(Specification == ""){
				isProceed = false;
			}
			var Condition = $("#ALCondition option:selected").val();
			if(Condition == ""){
				isProceed = false;
			}
			var Mileage = $("#ALMileage option:selected").val();
			if(Mileage == ""){
				isProceed = false;
			}
			var SellingPrice = $("#ALSellingPrice").val();
			if(SellingPrice == ""){
				isProceed = false;
			}
			var State = $("#ALState option:selected").val();
			if(State == ""){
				isProceed = false;
			}
			var Address = $("#ALAdress").val();
			if(Address == ""){
				isProceed = false;
			}
			var Colour = $("#ALColour").val();
			if(Colour == ""){
				isProceed = false;
			}
			var Description = $("#ALDescription").val();
			if(Description == ""){
				isProceed = false;
			}

			if($('input[name=userfile]').val() == ""){
				$("#noti-error-ad-image").show();
				isProceed = false;
			}

			if(isProceed == false){
				$("#noti-error-car-details").show();
				event.preventDefault();
			}
		});
		$("#aAddListing").click(function(){
			//initializeAL();
		});

		$('#AddListing').on('shown.bs.modal', function () {
			//alert("at");
			initializeAL();
			google.maps.event.trigger(map, 'resize');
			//google.maps.event.trigger(map, "resize");
		});
		$("#frmNewsletter").submit(function(){
			var EmailAddress = $("input[name=newsletterEmail]").val();
			var datastr = '{"mode":"OptIn","EmailAddress":"'+EmailAddress+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					if(data == "OK"){
						$("#OISH").text("Success");
						$("#OISValue").text("You have successfully subscribed.");
						$("#OptInSuccess").modal("show");
					}else{
						$("#OISH").text("Failed");
						$("#OISValue").text("Email address already subscribed.");
						$("#OptInSuccess").modal("show");
					}

				}
			});
			event.preventDefault();
		});
	});

	window.fbAsyncInit = function() {
		FB.init({
			appId      : "132122217349275",
			cookie     : true,  // enable cookies to allow the server to access
								// the session
			xfbml      : true,  // parse social plugins on this page
			version    : "v2.9" // use graph api version 2.8
		});
	};

	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, "script", "facebook-jssdk"));

	function statusChangeCallback(response) {
		if (response.status === "connected") {
			getUserFBInfo();
		} else {
			FB.login(function(response){
			  getUserFBInfo();
			}, {scope: "public_profile, email"});
		}
	}

	function checkLoginState() {
		FB.getLoginStatus(function(response) {
			//alert(response.status);
			statusChangeCallback(response);
		});
	}

	function getUserFBInfo() {
		FB.api("/me", {fields: "email,first_name,last_name"}, function(response) {
			FB.api("/me/picture?width=600&height=600", function(responsepic) {
				var datastr = '{"mode":"SignInFacebook","EmailAddress":"'+response.email+'","FirstName":"'+response.first_name+'","LastName":"'+response.last_name+'", "ProfilePic":"'+responsepic.data.url+'"}';
				//alert(datastr);
				$.ajax({
					url: "<?php echo base_url();?>main/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						if(data == "Account active"){
							window.location.replace("<?php echo base_url();?>main");
						}else{
							alert(data);
						}

					}
				});
			});
		});
	}
	var map;
	function initializeAL() {


		var markers = [];

		map = new google.maps.Map(
			document.getElementById('map-modal'),
			{
				mapTypeId: google.maps.MapTypeId.ROADMAP
			}
		);

		//alert(map);

		var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(3.0266654, 101.69214009999996));
		map.fitBounds(defaultBounds);

		var listener = google.maps.event.addListener(map, "idle", function() {
			if (map.getZoom() > 16) map.setZoom(16);
			google.maps.event.removeListener(listener);
			});

		var marker = new google.maps.Marker({
			map: map,
			position: new google.maps.LatLng(3.0266654, 101.69214009999996)
			});

		markers.push(marker);

		var input = (document.getElementById('ALAddress'));
		var searchBox = new google.maps.places.SearchBox((input));

		google.maps.event.addListener(map, "click", function(event) {
			for (var i = 0, marker; marker = markers[i]; i++) {
				marker.setMap(null);
			}

			var lat = event.latLng.lat();
			var lng = event.latLng.lng();

			$("#ALLatitude").val(lat);
			$("#ALLongitude").val(lng);

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

				$("#ALLatitude").val(place.geometry.location.lat());
				$("#ALLongitude").val(place.geometry.location.lng());

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
	//google.maps.event.addDomListener(window, 'load', initializeAL);
	var RCurrLID = "";
	var RCurrModel = "";
	var RCurrSellerID = "";
	function submitReport(){
		var Name = $("#SR_name").val();
		var Email = $("#SR_buyer_email").val();
		var Telephone = $("#SR_telephone").val();
		var Description = $("#SR_description").val();
		var ListingID = RCurrLID;
		var Model = RCurrModel;
		var SellerID = RCurrSellerID;

		var datastr = '{"mode":"Report","Name":"'+Name+'","Email":"'+Email+'","Telephone":"'+Telephone+'","Description":"'+Description+'","ListingID":"'+ListingID+'","SellerID":"'+SellerID+'","Model":"'+Model+'"}';
		//alert(datastr);
		$.ajax({
			url: "<?php echo base_url();?>listing/ajax",
			type: "POST",
			data: {"datastr":datastr},
			success: function(data){
				$("#ReportSuccess").modal("show");
			}
		});
	}
</script>

</body>
