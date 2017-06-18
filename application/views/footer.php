
    <footer id="page-footer">
        <div class="footer-wrapper">

            <div class="footer-navigation">
                <div class="container">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">� 2017 Hyundai Used Car, All right reserved</div>
                        <div class="element width-50 text-align-right">
                            <a href="#">Home</a>
                            <a href="<?php echo base_url();?>listing">Listings</a>
                            <a id="aAddListing" href="#AddListing" data-toggle="modal">Create Ad</a>
                            <a href="#">Contact Us</a>
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
				if(data == "Account active"){
					window.location.replace("<?php echo base_url();?>main");
				}else{
					$("#SignInError").show();
				}
			}
		});
	}
	function validateRegForm(){
		var pEmail = $("#reg_email").val();
		var pPassword = $("#reg_password").val();
		var pConfirmPassword = $("#reg_confirm_password").val();
		//var pFirstName = $("#reg_first_name").val();
		//var pLastName = $("#reg_last_name").val();
		if(pEmail == ""){
			$("#noti-error-pwd-empty").hide();
			$("#noti-error-pwd-match").hide();
			$("#noti-error-email").show();
			$("#noti-error-email").text("Email address cannot empty");
		}else{
			$("#noti-error-email").hide();
			if(pPassword == ""){
				$("#noti-error-pwd-empty").show();
				$("#noti-error-pwd-match").hide();
			}else{
				if(pPassword != pConfirmPassword){
					$("#noti-error-pwd-empty").hide();
					$("#noti-error-pwd-match").show();
				}else{
					$("#noti-error-pwd-empty").hide();
					$("#noti-error-pwd-match").hide();
					$("#noti-error-email").hide();
					var datastr = '{"mode":"Register","EmailAddress":"'+pEmail+'","Password":"'+pPassword+'"}';
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
		}
	}
	$(document).ready(function(){
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
			var Model = $("#ALModel").val();
			var Specification = $("#ALSpecification").val();
			var Transmission = $("#ALTransmission").val();
			var ManufacturingYear = $("#ALManufacturingYear").val();
			var Mileage = $("#ALMileage").val();
			var Colour = $("#ALColour").val();
			var SellingPrice = $("#ALSellingPrice").val();
			var Description = $("#ALAddress").val();
			var Address = $("#ALLatitude").val();
			var Latitude = $("#ALLongitude").val();
			var Longitude = $("#ALDescription").val();
			var gs_category = $("#gs_category").val();
			var gs_model_name = $("#gs_model_name").val();
			var gs_body_type = $("#gs_body_type").val();
			var gs_seats = $("#gs_seats").val();
			var pf_eg_label = $("#pf_eg_label").val();
			var pf_eg_capacity = $("#pf_eg_capacity").val();
			var pf_eg_fuel_system = $("#pf_eg_fuel_system").val();
			var pf_eg_displacement = $("#pf_eg_displacement").val();
			var pf_eg_max_power_label = $("#pf_eg_max_power_label").val();
			var pf_eg_max_power_ps = $("#pf_eg_max_power_ps").val();
			var pf_eg_max_power_kw = $("#pf_eg_max_power_kw").val();
			var pf_eg_max_power_rpm = $("#pf_eg_max_power_rpm").val();
			var pf_eg_max_torque_label = $("#pf_eg_max_torque_label").val();
			var pf_eg_max_touque_kgm = $("#pf_eg_max_touque_kgm").val();
			var pf_eg_max_touque_nm = $("#pf_eg_max_touque_nm").val();
			var pf_eg_max_touque_rpm = $("#pf_eg_max_touque_rpm").val();
			var pf_eg_number_of_cylinders = $("#pf_eg_number_of_cylinders").val();
			var pf_eg_valve_of_cylinder = $("#pf_eg_valve_of_cylinder").val();
			var pf_tm_type = $("#pf_tm_type").val();
			var pf_tm_drive_type = $("#pf_tm_drive_type").val();
			var pf_tm_gear_speed = $("#pf_tm_gear_speed").val();
			var pf_tm_drive_config = $("#pf_tm_drive_config").val();
			var dm_ex_length = $("#dm_ex_length").val();
			var dm_ex_width = $("#dm_ex_width").val();
			var dm_ex_height = $("#dm_ex_height").val();
			var dm_ex_wheel_base = $("#dm_ex_wheel_base").val();
			var dm_ex_front_wheel_tread = $("#dm_ex_front_wheel_tread").val();
			var dm_ex_rear_wheel_tread = $("#dm_ex_rear_wheel_tread").val();
			var dm_ex_front_over_hang = $("#dm_ex_front_over_hang").val();
			var dm_ex_rear_over_hang = $("#dm_ex_rear_over_hang").val();
			var dm_cg_area_vda = $("#dm_cg_area_vda").val();
			var wh_front_wheel = $("#wh_front_wheel").val();
			var wh_rear_wheel = $("#wh_rear_wheel").val();
			var wh_front_tires = $("#wh_front_tires").val();
			var wh_rear_tires = $("#wh_rear_tires").val();
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
</script>

</body>
