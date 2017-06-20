	<script>
		function RunSelModel(gs_model){
			$('select[name=selEditALModel] option:contains(' + gs_model +')').attr('selected', true);
			var datastr = '{"mode":"SelectModel","gs_model":"'+gs_model+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selEditALYear]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Year</option>');
					var gs_manu_year = JSON.parse(data);
					var servVal = "<?php echo $listingData->ManufacturingYear;?>";
					gs_manu_year.forEach(function(entry){
						if(servVal == entry.gs_manu_year){
							$('select[name=selEditALYear]').append('<option selected>' + entry.gs_manu_year + '</option>');
						}else{
							$('select[name=selEditALYear]').append('<option>' + entry.gs_manu_year + '</option>');
						}
						
					});
					$('select[name=selEditALYear]').selectpicker('refresh');
					RunSelYear(gs_model,servVal)
				}
			});
		}
		function RunSelYear(gs_model,gs_manu_year){
			var datastr = '{"mode":"SelectYear","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selEditALTransmission]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Transmission</option>');
					var tm_transmission = JSON.parse(data);
					var servVal = "<?php echo $listingData->Transmission;?>";
					tm_transmission.forEach(function(entry){
						if(servVal == entry.tm_transmission){
							$('select[name=selEditALTransmission]').append('<option selected>' + entry.tm_transmission + '</option>');
						}else{
							$('select[name=selEditALTransmission]').append('<option>' + entry.tm_transmission + '</option>');
						}
					});
					$('select[name=selEditALTransmission]').selectpicker('refresh');
					RunSelTransmission(gs_model,gs_manu_year,servVal)
				}
			});
		}
		function RunSelTransmission(gs_model,gs_manu_year,tm_transmission){
			var datastr = '{"mode":"SelectTransmission","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$('select[name=selEditALSpecification]')
						.find('option')
						.remove()
						.end()
						.append('<option>Select a Specification</option>');
					var gs_variant = JSON.parse(data);
					var servVal = "<?php echo $listingData->Specification;?>";
					gs_variant.forEach(function(entry){
						if(servVal == entry.gs_variant){
							$('select[name=selEditALSpecification]').append('<option selected>' + entry.gs_variant + '</option>');
						}else{
							$('select[name=selEditALSpecification]').append('<option>' + entry.gs_variant + '</option>');
						}
					});
					$('select[name=selEditALSpecification]').selectpicker('refresh');
					RunSelSpecification(gs_model,gs_manu_year,tm_transmission,servVal)
				}
			});
		}
		function RunSelSpecification(gs_model,gs_manu_year,tm_transmission,gs_variant){
			var datastr = '{"mode":"SelectSpecification","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'","gs_variant":"'+gs_variant+'"}';
			$.ajax({
				url: "<?php echo base_url();?>admin/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var qResult = JSON.parse(data);
					$("input[name=editALBrand]").val(qResult.car_brand);
					$("input[name=editALCategory]").val(qResult.body_style);
					$("input[name=editALModel]").val(qResult.gs_model);
					$("input[name=editALSpecification]").val(qResult.gs_variant);
					$("input[name=editALYear]").val(qResult.gs_manu_year);
					$("input[name=editALGDEngineCC]").val(qResult.en_cc);
					$("input[name=editALGDTransmission]").val(qResult.tm_transmission);
					$("input[name=editALSeatCapacity]").val(qResult.gn_seat_capacity);
					$("input[name=editALMileage]").val("");
					$("input[name=editALColour]").val("");
					$("input[name=editALDoors]").val(qResult.gn_doors);
					$("input[name=editALAssembled]").val(qResult.gn_assembled);
					
					$("input[name=editALTTransmission]").val(qResult.tm_transmission);
					$("input[name=editALFinalDriveRatio]").val(qResult.tm_final_drive_ratio);
					$("input[name=editALNoofGears]").val(qResult.tm_gears);
					
					$("input[name=editALESEngineCC]").val(qResult.en_cc);
					$("input[name=editALStroke]").val(qResult.en_stroke);
					$("input[name=editALPeakPower]").val(qResult.en_peak_power);
					$("input[name=editALEngineType]").val(qResult.en_engine_type);
					$("input[name=editALAspiration]").val(qResult.en_aspiration);
					$("input[name=editALBore]").val(qResult.en_bore);
					$("input[name=editALCompressionRatio]").val(qResult.en_compression_ratio);
					$("input[name=editALPeakTorque]").val(qResult.en_peak_torque);
					$("input[name=editALDirectInjection]").val(qResult.en_direct_injection);
					$("input[name=editALFuelType]").val(qResult.en_fuel_type);
					
					$("input[name=editALLength]").val(qResult.dm_length);
					$("input[name=editALHeight]").val(qResult.dm_height);
					$("input[name=editALWidth]").val(qResult.dm_width);
					$("input[name=editALWheelBase]").val(qResult.dm_wheel_base);
					$("input[name=editALFrontThread]").val(qResult.dm_front_thread);
					$("input[name=editALRearThread]").val(qResult.dm_rear_thread);
					$("input[name=editALFuelTank]").val(qResult.dm_fuel_tank);
					
					$("input[name=editALFrontBrakes]").val(qResult.br_front);
					$("input[name=editALRearBrakes]").val(qResult.br_rear);
					
					$("input[name=editALFrontSuspension]").val(qResult.sus_front);
					$("input[name=editALRearSuspension]").val(qResult.sus_rear);
					
					$("input[name=editALFrontTyres]").val(qResult.tw_front);
					$("input[name=editALRearTyres]").val(qResult.tw_rear);
					$("input[name=editALFrontRims]").val(qResult.tw_front_rim);
					$("input[name=editALRearRims]").val(qResult.tw_rear_rim);
				}
			});
		}
		
		$(document).ready(function(){
			RunSelModel("<?php echo $listingData->Model;?>");
			
			$("select[name=selEditALModel]").change(function(){
				var gs_model = $("select[name=selEditALModel] option:selected").text();
				var datastr = '{"mode":"SelectModel","gs_model":"'+gs_model+'"}';
				$.ajax({
					url: "<?php echo base_url();?>admin/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						$('select[name=selEditALYear]')
							.find('option')
							.remove()
							.end()
							.append('<option>Select a Year</option>');
						var gs_manu_year = JSON.parse(data);
						gs_manu_year.forEach(function(entry){
								$('select[name=selEditALYear]').append('<option>' + entry.gs_manu_year + '</option>');
						});
						$('select[name=selEditALYear]').selectpicker('refresh');
					}
				});
			});
			$("select[name=selEditALYear]").change(function(){
				var gs_model = $("select[name=selEditALModel] option:selected").text();
				var gs_manu_year = $("select[name=selEditALYear] option:selected").text();
				var datastr = '{"mode":"SelectYear","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'"}';
				$.ajax({
					url: "<?php echo base_url();?>admin/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						$('select[name=selEditALTransmission]')
							.find('option')
							.remove()
							.end()
							.append('<option>Select a Transmission</option>');
						var tm_transmission = JSON.parse(data);
						tm_transmission.forEach(function(entry){
							$('select[name=selEditALTransmission]').append('<option>' + entry.tm_transmission + '</option>');
						});
						$('select[name=selEditALTransmission]').selectpicker('refresh');
					}
				});
			});
			$("select[name=selEditALTransmission]").change(function(){
				var gs_model = $("select[name=selEditALModel] option:selected").text();
				var gs_manu_year = $("select[name=selEditALYear] option:selected").text();
				var tm_transmission = $("select[name=selEditALTransmission] option:selected").text();
				var datastr = '{"mode":"SelectTransmission","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'"}';
				$.ajax({
					url: "<?php echo base_url();?>admin/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						$('select[name=selEditALSpecification]')
							.find('option')
							.remove()
							.end()
							.append('<option>Select a Specification</option>');
						var gs_variant = JSON.parse(data);
						gs_variant.forEach(function(entry){
							$('select[name=selEditALSpecification]').append('<option>' + entry.gs_variant + '</option>');
						});
						$('select[name=selEditALSpecification]').selectpicker('refresh');
					}
				});
			});
			$("select[name=selEditALSpecification]").change(function(){
				var gs_model = $("select[name=selEditALModel] option:selected").text();
				var gs_manu_year = $("select[name=selEditALYear] option:selected").text();
				var tm_transmission = $("select[name=selEditALTransmission] option:selected").text();
				var gs_variant = $("select[name=selEditALSpecification] option:selected").text();
				
				RunSelSpecification(gs_model,gs_manu_year,tm_transmission,gs_variant);
			});
			$('#EditListing').on('shown.bs.modal', function () {
				//alert("at");
				aEditClick();
				google.maps.event.trigger(mapdet, 'resize');
			});
			$('#PopupCustom').on('hidden.bs.modal', function (e) {
				if(buttonMode == "Submit"){
					window.location.href = "<?php echo base_url();?>listing/details/<?php echo $listingData->LID.'/'.$listingData->LAddedBy;?>"
				}else if(buttonMode == "Delete"){
					window.location.href = "<?php echo base_url();?>"
				}else if(buttonMode == "Approve"){
					window.location.href = "<?php echo base_url();?>admin"
				}else if(buttonMode == "Reject"){
					window.location.href = "<?php echo base_url();?>admin"
				}else if(buttonMode == "Featured"){
					window.location.href = "<?php echo base_url();?>admin"
				}
			});
		});
		var map;
		function aEditClick(){
			var markers = [];

			map = new google.maps.Map(
				document.getElementById('map-edit'),
				{
					mapTypeId: google.maps.MapTypeId.ROADMAP
				}
			);

			//alert(map);

			var defaultBounds = new google.maps.LatLngBounds(new google.maps.LatLng(<?php if($listingData->Latitude):echo $listingData->Latitude;else:echo "3.0266654";endif;?>, <?php if($listingData->Longitude):echo $listingData->Longitude;else:echo "101.69214009999996";endif;?>));
			map.fitBounds(defaultBounds);

			var listener = google.maps.event.addListener(map, "idle", function() {
				if (map.getZoom() > 16) map.setZoom(16);
				google.maps.event.removeListener(listener);
				});

			var marker = new google.maps.Marker({
				map: map,
				position: new google.maps.LatLng(<?php if($listingData->Latitude):echo $listingData->Latitude;else:echo "3.0266654";endif;?>, <?php if($listingData->Longitude):echo $listingData->Longitude;else:echo "101.69214009999996";endif;?>)
				});

			markers.push(marker);

			var input = (document.getElementById('editALAddress'));
			var searchBox = new google.maps.places.SearchBox((input));

			google.maps.event.addListener(map, "click", function(event) {
				for (var i = 0, marker; marker = markers[i]; i++) {
					marker.setMap(null);
				}

				var lat = event.latLng.lat();
				var lng = event.latLng.lng();

				$("#editALLatitude").val(lat);
				$("#editALLongitude").val(lng);

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

					$("#editALLatitude").val(place.geometry.location.lat());
					$("#editALLongitude").val(place.geometry.location.lng());

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

		var mapdet;
		function initializeListingDetail() {
			var markersdet = [];
			mapdet = new google.maps.Map(document.getElementById('map-detail'), {
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

			var defaultBoundsdet = new google.maps.LatLngBounds(new google.maps.LatLng(<?php if($listingData->Latitude):echo $listingData->Latitude;else:echo "3.0266654";endif;?>, <?php if($listingData->Longitude):echo $listingData->Longitude;else:echo "101.69214009999996";endif;?>));
			mapdet.fitBounds(defaultBoundsdet);

			var listenerdet = google.maps.event.addListener(mapdet, "idle", function() {
			if (mapdet.getZoom() > 16) mapdet.setZoom(16);
			  google.maps.event.removeListener(listenerdet);
			});

			var markerdet = new google.maps.Marker({
				map: mapdet,
				position: new google.maps.LatLng(<?php if($listingData->Latitude):echo $listingData->Latitude;else:echo "3.0266654";endif;?>, <?php if($listingData->Longitude):echo $listingData->Longitude;else:echo "101.69214009999996";endif;?>)
			});

			markersdet.push(markerdet);
		}
		google.maps.event.addDomListener(window, 'load', initializeListingDetail);

		function submitContactSeller(){
			var Name = $("#name").val();
			var Email = $("#buyer_email").val();
			var Telephone = $("#telephone").val();
			var Description = $("#description").val();
			var ListingID = "<?php echo $listingData->LID;?>";
			var Model = "<?php echo $listingData->Model;?>";
			var SellerID = "<?php echo $listingData->LAddedBy;?>";

			var datastr = '{"mode":"ContactSeller","Name":"'+Name+'","Email":"'+Email+'","Telephone":"'+Telephone+'","Description":"'+Description+'","ListingID":"'+ListingID+'","SellerID":"'+SellerID+'","Model":"'+Model+'"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#ContactSellerSuccess").modal("show");
				}
			});
		}
	
		var buttonMode = "";
		function SubmitAd(elem){
			var LID = $(elem).attr("id").split("_")[1];
			
			var datastr = '{"mode":"AdChangeStatus","ID":"'+LID+'","Status":"0"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#sPCTitle").text("Success");
					$("#sPCMsg").text("Advertisement successfully submitted.");
					buttonMode = "Submit";
					$("#PopupCustom").modal("show");
				}
			});
		}
		function DeleteAd(elem){
			var LID = $(elem).attr("id").split("_")[1];
			
			var datastr = '{"mode":"AdChangeStatus","ID":"'+LID+'","Status":"4"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#sPCTitle").text("Success");
					$("#sPCMsg").text("Advertisement successfully deleted.");
					buttonMode = "Delete";
					$("#PopupCustom").modal("show");
				}
			});
		}
		function ApproveAd(elem){
			var LID = $(elem).attr("id").split("_")[1];
			
			var datastr = '{"mode":"AdChangeStatus","ID":"'+LID+'","Status":"1"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#sPCTitle").text("Success");
					$("#sPCMsg").text("Advertisement successfully approved.");
					buttonMode = "Approve";
					$("#PopupCustom").modal("show");
				}
			});
		}
		function RejectAd(elem){
			var LID = $(elem).attr("id").split("_")[1];
			
			var datastr = '{"mode":"AdChangeStatus","ID":"'+LID+'","Status":"3"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#sPCTitle").text("Success");
					$("#sPCMsg").text("Advertisement successfully rejected.");
					buttonMode = "Reject";
					$("#PopupCustom").modal("show");
				}
			});
		}
		function FeaturedAd(elem){
			var LID = $(elem).attr("id").split("_")[1];
			
			var datastr = '{"mode":"AdFeatured","ID":"'+LID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>listing/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#sPCTitle").text("Success");
					$("#sPCMsg").text("Advertisement successfully featured.");
					buttonMode = "Featured";
					$("#PopupCustom").modal("show");
				}
			});
		}
		window.addEventListener("beforeunload", function (e) {
			var LStatus = "<?php echo $listingData->Status;?>";
			var UserGroup = "<?php $user_data = $this->session->userdata("LoggedUser"); echo $user_data["Group"];?>";
			if(LStatus == "0" && UserGroup == "2"){
				var confirmationMessage = "\o/";
		
				(e || window.event).returnValue = confirmationMessage;
				return confirmationMessage;    	
			}
		});
	</script>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Listing Details</li>
            </ol>
            <section class="page-title pull-left">
                <h1><?php echo $listingData->Model;?></h1>
								<h3 style="margin-bottom: 10px;"><?php echo $listingData->Specification;?></h3>
                <h2>RM<?php echo number_format($listingData->SellingPrice);?></h2>
            </section>
            <!--end page-title-->
			<?php $user_data = $this->session->userdata("LoggedUser"); if($user_data["Group"] == 1):?>
				<?php if($listingData->LStatus == 0):?>
					<a id="btnFeaturedListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right" onclick="FeaturedAd(this);"><i class="fa fa-star"></i>Featured </a>
					<a id="btnApproveListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right" onclick="ApproveAd(this);"><i class="fa fa-check"></i>Approve </a>
					<a id="btnRejectListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right" onclick="RejectAd(this);"><i class="fa fa-close"></i>Reject </a>
					<a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
				<?php elseif($listingData->LStatus == 1):?>
					<a id="btnFeaturedListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right" onclick="FeaturedAd(this);"><i class="fa fa-star"></i>Featured </a>
					<a id="btnApproveListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right" onclick="ApproveAd(this);"><i class="fa fa-check"></i>Approve </a>
					<a id="btnRejectListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right" onclick="RejectAd(this);"><i class="fa fa-close"></i>Reject </a>
					<a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
					<a id="btnPrintListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
					<a id="btnCompareListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
					<a id="btnFavoriteListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
				<?php endif;?>
			<?php elseif($user_data["Group"] == 2):?>
				<?php if($listingData->LStatus == 0):?>
					<a id="btnSubmitListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right" onclick="SubmitAd(this);"><i class="fa fa-check-circle"></i>Submit</a>
					<a id="btnDeleteListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right" onclick="DeleteAd(this);"><i class="fa fa-trash"></i>Delete</a>
					<a id="aEdit" href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
				<?php elseif($listingData->LStatus == 1):?>
					<a id="btnReportListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-flag"></i>Report Ad</a>
					<a id="btnPrintListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
					<a id="btnCompareListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
					<a id="btnFavoriteListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
				<?php endif;?>
			<?php endif;?>
			<!--
					<a id="btnSubmitListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-check-circle"></i>Submit</a>
					<a href="#write-a-review" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-close"></i>Delete</a>
					<a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-flag"></i>Report</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
			-->
        </div>
        <!--end container-->
        <section>
            <div class="gallery detail">
                <div class="owl-carousel" data-owl-items="3" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="0" data-owl-margin="2" data-owl-nav-container="#gallery-nav">
					<?php foreach($listingImageData as $lid):?>
					<div class="image">
                        <div class="bg-transfer"><img src="<?php echo base_url();?>assets/img/listing/<?php echo $lid->ListingPic;?>" alt=""></div>
                    </div>
					<?php endforeach;?>
                </div>
                <!--end owl-carousel-->
            </div>
            <!--end gallery-->
        </section>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8">
                    <div id="gallery-nav"></div>
					<?php if($listingData->Description):?>
                    <section>
                        <h2>Description</h2>
                        <p>
							<?php echo $listingData->Description;?>
                        </p>
                    </section>
					<?php endif;?>
					<section>
							<h2>Specification</h2>
							<div class="panel-group" id="accordion-1-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-1-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-1-detail" aria-expanded="false" aria-controls="accordion-collapse-1-detail">
																	<i class="fa fa-list-ul"></i>General Details
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-1-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-1-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Brand</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																		<div class="form-group">
																				<?php echo $listingData->Brand;?>
																		</div>
																		<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Category</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																		<div class="form-group">
																				<?php echo $listingData->body_style;?>
																		</div>
																		<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Model</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Model;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Specification</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Specification;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Year</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->ManufacturingYear;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Engine CC</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_cc;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Transmission</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Transmission;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Seat Capacity</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->gn_seat_capacity;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Mileage (km)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Mileage;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Colour</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Colour;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Doors</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->gn_doors;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Seat Capacity</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->gn_seat_capacity;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Assembled</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->gn_assembled;?>
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
							<div class="panel-group" id="accordion-2-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-2-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-2-detail" aria-expanded="false" aria-controls="accordion-collapse-2-detail">
																	<i class="fa fa-list-ul"></i>Transmission
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-2-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-2-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Transmission</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->Transmission;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Final Drive Ratio</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tm_final_drive_ratio;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Number of Gears</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tm_gears;?>
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
							<div class="panel-group" id="accordion-3-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-3-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-3-detail" aria-expanded="false" aria-controls="accordion-collapse-3-detail">
																	<i class="fa fa-list-ul"></i>Engine Specifications
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-3-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-3-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Engine CC</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_cc;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Stroke (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_stroke;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Peak Power (hp)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_peak_power;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Engine Type</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_engine_type;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Aspiration</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_aspiration;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Bore (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_bore;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Compression Ratio</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_compression_ratio;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Peak Torque (Nm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_peak_torque;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Direct Injection</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_direct_injection;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Fuel Type</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->en_fuel_type;?>
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
							<div class="panel-group" id="accordion-4-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-4-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-4-detail" aria-expanded="false" aria-controls="accordion-collapse-4-detail">
																	<i class="fa fa-list-ul"></i>Dimensions & Weight
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-4-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-4-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Length (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_length;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Height (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_height;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Width (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_width;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Wheel Base (mm)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_wheel_base;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Front Thread</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_front_thread;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Rear Thread</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_rear_thread;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Fuel Tank (litres)</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->dm_fuel_tank;?>
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
							<div class="panel-group" id="accordion-5-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-5-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-5-detail" aria-expanded="false" aria-controls="accordion-collapse-5-detail">
																	<i class="fa fa-list-ul"></i>Brakes
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-5-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-5-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Front Brakes</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->br_front;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Rear Brakes</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->br_rear;?>
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
							<div class="panel-group" id="accordion-6-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-6-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-6-detail" aria-expanded="false" aria-controls="accordion-collapse-6-detail">
																	<i class="fa fa-list-ul"></i>Suspensions
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-6-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-6-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Front Suspension</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->sus_front;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Rear Suspension</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->sus_rear;?>
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
							<div class="panel-group" id="accordion-7-detail" role="tablist" aria-multiselectable="true">
									<div class="panel panel-default">
											<div class="panel-heading" role="tab" id="accordion-heading-7-detail">
													<h4 class="panel-title">
															<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-7-detail" aria-expanded="false" aria-controls="accordion-collapse-7-detail">
																	<i class="fa fa-list-ul"></i>Tyres & Wheels
															</a>
													</h4>
											</div>
											<!--end panel-heading-->
											<div id="accordion-collapse-7-detail" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="accordion-heading-7-detail">
													<div class="panel-body">
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Front Tyres</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tw_front;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Rear Tyres</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tw_rear;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Front Rims</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tw_front_rim;?>
																			</div>
																			<!--end form-group-->
																	</div>
																	<!--end col-md-9-->
															</div>
															<!--end row-->
															<div class="row">
																	<div class="col-md-3 col-sm-3">
																			<strong>Rear Rims</strong>
																	</div>
																	<!--end col-md-3-->
																	<div class="col-md-9 col-sm-9">
																			<div class="form-group">
																					<?php echo $listingData->tw_rear_rim;?>
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
					<p style="padding-bottom: 5px; font-size: 13px;"><i>All information and specifications stated here are automatically generated based on data available at the time of publication and subject to change without prior notice, thus, may differ from those shown in the website and brochure. Please kindly edit accordingly shall any of the specifications is changed or modified.</i></p>
                </div>
                <!--end col-md-7-->
                <div class="col-md-4 col-sm-4">
                    <div class="detail-sidebar">
                        <section class="shadow">
                            <div class="map height-250px" id="map-detail"></div>
                            <!--end map-->
                            <div class="content">
                                <div class="vertical-aligned-elements">
                                  <div class="review" style="margin-bottom: 20px;">
                                      <div class="image">
                                          <div class="bg-transfer"><img <?php if($userData->Type == 2):echo "src='".$userData->ProfilePic."'";else: echo "src='".base_url()."assets/img/profile/".$userData->ProfilePic."'";endif;?> alt=""></div>
                                      </div>
                                      <div class="description">
                                              <h4><?php echo $userData->FirstName." ".$userData->LastName;?></h4>
                                              <a href="#ContactSeller" class="btn btn-primary btn-rounded btn-xs" data-toggle="modal">Contact Seller</a>
                                      </div>
                                  </div>
                                </div>
                                <hr>
                                <address>
                                    <figure><i class="fa fa-map-marker"></i><?php echo $userData->Address;?> </figure>
                                    <figure><i class="fa fa-envelope"></i><a href="#"><?php echo $userData->EmailAddress;?></a></figure>
                                    <figure><i class="fa fa-phone"></i><?php echo $userData->MobileNo;?></figure>
                                </address>
                            </div>
                        </section>
                        <section>
                            <h2>Share This Listing</h2>
                            <div class="social-share"></div>
                        </section>

                    </div>
                    <!--end detail-sidebar-->


                    <div class="sidebar">
                    <section>
                        <h2>Related Advertisements</h2>
						<?php $i = 0;foreach($relatedData as $eachRelated):$i++;?>
						<div class="item" data-id="<?php echo $eachRelated->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachRelated->LID.'/'.$eachRelated->LAddedBy;?>">
                                <div class="description">
                                    <figure>RM<?php echo number_format($eachRelated->SellingPrice);?></figure>
                                    <div class="label label-default">Used</div>
                                    <h3><?php echo $eachRelated->Model;?></h3>
                                    <h4><?php echo $eachRelated->StateName;?></h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachRelated->ListingPic): echo base_url().'assets/img/listing/'.$eachRelated->ListingPic; else: echo base_url().'assets/img/items/default.png';endif;?>" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="controls-more">
                                <ul>
																	<li><a href="#">Favorite <i class="fa fa-heart" style="padding-left: 5px;"></i></a></li>
																	<li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
																	<li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--end item-->
						<?php endforeach;?>
                    </section>
                  </div>
                  <!--end sidebar-->

                </div>
                <!--end col-md-5-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

	<div class="modal fade" id="EditListing" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-800px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Edit Listing</h2>
					</div>
				</div>
				<div class="modal-body">
					<form id="frmEditListing" method="post" action="<?php echo base_url();?>listing/editlisting" class="form inputs-underline" enctype="multipart/form-data">
					<input name="hLID" type="hidden" value="<?php echo $listingData->LID;?>"/>
						<section>
						<h3>Car Details</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Brand</label>
										<select class="form-control selectpicker" name="selEditALBrand" id="selEditALBrand">
											<option>Hyundai</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Year</label>
										<select class="form-control selectpicker" name="selEditALYear">
											<option>Select a Year</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Specification</label>
										<select class="form-control selectpicker" name="selEditALSpecification">
											<option>Select a Specification</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Mileage</label>
										<select class="form-control selectpicker" name="editALMileage" id="ALMileage">
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
										<select class="form-control selectpicker" name="editALState" id="ALState">
											<option value="">Select a State</option>
											<?php foreach($state as $eachState):?>
											<option value="<?php echo $eachState->ID;?>" <?php if($eachState->ID == $listingData->State):echo "selected";endif;?>><?php echo $eachState->Name;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="description">Description</label>
										<textarea class="form-control" id="ALDescription" rows="5" name="editALDescription" placeholder="Describe the listing"><?php echo $listingData->Description;?></textarea>
									</div>
									<!--end form-group-->
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Model</label>
										<select class="form-control selectpicker" name="selEditALModel" id="selEditALModel">
											<option>Select a Model</option>
											<?php foreach($model as $eachModel):?>
                                            <option><?php echo $eachModel->gs_model;?></option>
											<?php endforeach;?>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Transmission</label>
										<select class="form-control selectpicker" name="selEditALTransmission" id="ALTransmission">
											<option>Select a Transmission</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Condition</label>
										<select class="form-control selectpicker" name="editALCondition" id="ALCondition">
											<option>Select a Condition</option>
											<option>New</option>
											<option>Used</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Selling Price</label>
										<input type="number" class="form-control" name="editALSellingPrice" id="ALSellingPrice" placeholder="Selling Price" value="<?php echo $listingData->SellingPrice;?>">
									</div>
									<!--end form-group-->
								  <div class="form-group">
									  <label for="address-autocomplete">Address</label>
									  <input type="text" class="form-control" name="editALAddress" id="editALAddress" placeholder="Address" value="<?php echo $listingData->Address;?>">
								  </div>
								  <!--end form-group-->
								  <div class="map height-200px shadow" id="map-edit"></div>
								  <!--end map-->
								  <div class="form-group hidden">
									  <input type="text" class="form-control" id="editALLatitude" name="editALLatitude" hidden="" value="<?php echo $listingData->Latitude;?>">
									  <input type="text" class="form-control" id="editALLongitude" name="editALLongitude" hidden="" value="<?php echo $listingData->Longitude;?>">
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
							<div class="file-upload-previews">
								<?php foreach($listingImageData as $lid):?>
								<div class="MultiFile-label divLID<?php echo $lid->ID;?>">
									<a id="LID<?php echo $lid->ID;?>" class="MultiFile-remove" href="#" onclick="$('.divLID<?php echo $lid->ID;?>').remove();">x</a> 
									<span>
										<span class="MultiFile-label" title="File selected: <?php echo $lid->ListingPic;?>">
											<span class="MultiFile-title"><?php echo $lid->ListingPic;?></span>
											<img class="MultiFile-preview" style="max-height:100px; max-width:100px;" src="<?php echo base_url();?>assets/img/listing/<?php echo $lid->ListingPic;?>">
										</span>
									</span>
								</div>
								<?php endforeach;?>
							</div>
							<div class="file-upload">
								<input type="file" name="userfile[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
								<span>Click or drag images here</span>
							</div>
							<!--end form-group-->
						</section>
						<section>
							<h3>Specification</h3>
							<p style="padding-bottom: 5px;">All information and specifications stated here are automatically generated based on data available at the time of publication and subject to change without prior notice, thus, may differ from those shown in the website and brochure. Please kindly edit accordingly shall any of the specifications is changed or modified.</p>
							<div class="panel-group" id="accordion-5-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-5-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-5-Edit" aria-expanded="false" aria-controls="accordion-collapse-5-Edit">
												<i class="fa fa-list-ul"></i>General Details
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-5-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-5-Edit">
										<div class="panel-body">
										  <div class="row">
											  <div class="col-md-3 col-sm-3 horizontal-input-title">
												  <strong>Brand</strong>
											  </div>
											  <!--end col-md-3-->
											  <div class="col-md-9 col-sm-9">
												  <div class="form-group">
													  <input type="text" class="form-control" name="editALBrand" placeholder="Hyundai" value="<?php echo $listingData->Brand;?>">
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
														<input type="text" class="form-control" name="editALCategory" placeholder="Sedan" value="<?php echo $listingData->body_style;?>">
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
														<input type="text" class="form-control" name="editALModel" placeholder="Sonata" value="<?php echo $listingData->Model;?>">
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
														<input type="text" class="form-control" name="editALSpecification" placeholder="GLS 1.6 Premium" value="<?php echo $listingData->Specification;?>">
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
														<input type="text" class="form-control" name="editALYear" placeholder="2003" value="<?php echo $listingData->ManufacturingYear;?>">
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
														<input type="text" class="form-control" name="editALGDEngineCC" placeholder="1599" value="<?php echo $listingData->en_cc;?>">
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
														<input type="text" class="form-control" name="editALGDTransmission" placeholder="Automatic" value="<?php echo $listingData->Transmission;?>">
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
														<input type="text" class="form-control" name="editALSeatCapacity" placeholder="5" value="<?php echo $listingData->gn_seat_capacity;?>">
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
														<input type="text" class="form-control" name="editALMileage" placeholder="100,000" value="<?php echo $listingData->Mileage;?>">
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
														<input type="text" class="form-control" name="editALColour" placeholder="Red" value="<?php echo $listingData->Colour;?>">
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
														<input type="text" class="form-control" name="editALDoors" placeholder="5" value="<?php echo $listingData->gn_doors;?>">
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
														<input type="text" class="form-control" name="editALAssembled" placeholder="Locally Build" value="<?php echo $listingData->gn_assembled;?>">
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
							<div class="panel-group" id="accordion-6-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-6-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-6-Edit" aria-expanded="false" aria-controls="accordion-collapse-6-Edit">
												<i class="fa fa-list-ul"></i>Transmission
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-6-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-6-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Transmission</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALTTransmission" placeholder="Automatic" value="<?php echo $listingData->Transmission;?>">
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
														<input type="text" class="form-control" name="editALFinalDriveRatio" placeholder="4.042" value="<?php echo $listingData->tm_final_drive_ratio;?>">
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
														<input type="text" class="form-control" name="editALNoofGears" placeholder="5" value="<?php echo $listingData->tm_gears;?>">
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
							<div class="panel-group" id="accordion-7-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-7-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-7-Edit" aria-expanded="false" aria-controls="accordion-collapse-7-Edit">
												<i class="fa fa-list-ul"></i>Engine Specifications
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-7-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-7-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Engine CC</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALESEngineCC" placeholder="1499" value="<?php echo $listingData->en_cc;?>">
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
														<input type="text" class="form-control" name="editALStroke" placeholder="1499" value="<?php echo $listingData->en_stroke;?>">
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
														<input type="text" class="form-control" name="editALPeakPower" placeholder="1499" value="<?php echo $listingData->en_peak_power;?>">
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
														<input type="text" class="form-control" name="editALEngineType" placeholder="Piston" value="<?php echo $listingData->en_engine_type;?>">
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
														<input type="text" class="form-control" name="editALAspiration" placeholder="Aspirated" value="<?php echo $listingData->en_aspiration;?>">
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
														<input type="text" class="form-control" name="editALBore" placeholder="85" value="<?php echo $listingData->en_bore;?>">
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
														<input type="text" class="form-control" name="editALCompressionRatio" placeholder="10" value="<?php echo $listingData->en_compression_ratio;?>">
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
														<input type="text" class="form-control" name="editALPeakTorque" placeholder="178" value="<?php echo $listingData->en_peak_torque;?>">
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
														<input type="text" class="form-control" name="editALDirectInjection" placeholder="Multi-Point Injected" value="<?php echo $listingData->en_direct_injection;?>">
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
														<input type="text" class="form-control" name="editALFuelType" placeholder="Petrol - Unleaded (ULP)" value="<?php echo $listingData->en_fuel_type;?>">
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
							<div class="panel-group" id="accordion-8-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-8-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-8-Edit" aria-expanded="false" aria-controls="accordion-collapse-8-Edit">
												<i class="fa fa-list-ul"></i>Dimensions & Weight
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-8-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-8-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Length (mm)</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALLength" placeholder="4747" value="<?php echo $listingData->dm_length;?>">
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
														<input type="text" class="form-control" name="editALHeight" placeholder="1422" value="<?php echo $listingData->dm_height;?>">
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
														<input type="text" class="form-control" name="editALWidth" placeholder="1820" value="<?php echo $listingData->dm_width;?>">
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
														<input type="text" class="form-control" name="editALWheelBase" placeholder="2700" value="<?php echo $listingData->dm_wheel_base;?>">
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
														<input type="text" class="form-control" name="editALFrontThread" placeholder="1540" value="<?php echo $listingData->dm_front_thread;?>">
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
														<input type="text" class="form-control" name="editALRearThread" placeholder="1530" value="<?php echo $listingData->dm_rear_thread;?>">
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
														<input type="text" class="form-control" name="editALFuelTank" placeholder="65" value="<?php echo $listingData->dm_fuel_tank;?>">
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
							<div class="panel-group" id="accordion-9-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-9-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-9-Edit" aria-expanded="false" aria-controls="accordion-collapse-9-Edit">
												<i class="fa fa-list-ul"></i>Brakes
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-9-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-9-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Brakes</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALFrontBrakes" placeholder="Ventilated Discs" value="<?php echo $listingData->br_front;?>">
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
														<input type="text" class="form-control" name="editALRearBrakes" placeholder="Discs" value="<?php echo $listingData->br_rear;?>">
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
							<div class="panel-group" id="accordion-10-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-10-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-10-Edit" aria-expanded="false" aria-controls="accordion-collapse-10-Edit">
												<i class="fa fa-list-ul"></i>Suspensions
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-10-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-10-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Suspension</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALFrontSuspension" placeholder="Double Wishbone" value="<?php echo $listingData->sus_front;?>">
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
														<input type="text" class="form-control" name="editALRearSuspension" placeholder="Multiple links" value="<?php echo $listingData->sus_rear;?>">
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
							<div class="panel-group" id="accordion-11-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-11-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-11-Edit" aria-expanded="false" aria-controls="accordion-collapse-11-Edit">
												<i class="fa fa-list-ul"></i>Tyres & Wheels
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-11-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-11-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Front Tyres</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="editALFrontTyres" placeholder="195/65 R15" value="<?php echo $listingData->tw_front;?>">
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
														<input type="text" class="form-control" name="editALRearTyres" placeholder="195/65 R15" value="<?php echo $listingData->tw_rear;?>">
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
														<input type="text" class="form-control" name="editALFrontRims" placeholder="15" value="<?php echo $listingData->tw_front_rim;?>">
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
														<input type="text" class="form-control" name="editALRearRims" placeholder="15" value="<?php echo $listingData->tw_rear_rim;?>">
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

						<hr>
						<section class="center">
							<div class="form-group">
								<!--<button type="submit" class="btn btn-primary btn-rounded">Preview</button>-->
								<button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>
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
	<div class="modal fade" id="ContactSeller" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title">
						<h2>Contact Seller</h2>
					</div>
				</div>
				<div class="modal-body">
					<form id="frmSignIn" onsubmit="event.preventDefault();submitContactSeller();" class="form inputs-underline">
						<div class="form-group">
							<label for="name">Name<span class="noti-error">*</span></label>
							<input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="email">Email<span class="noti-error">*</span></label>
							<input type="email" class="form-control" name="email" id="buyer_email" placeholder="Your email">
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="telephone">Telephone<span class="noti-error">*</span></label>
							<input type="text" class="form-control" name="telephone" id="telephone" placeholder="+601234567890">
						</div>
						<!--end form-group-->
						<div class="form-group">
							<label for="description">Message<span class="noti-error">*</span></label>
							<textarea class="form-control" id="description" rows="4" name="description" placeholder="Message to the seller"></textarea>
						</div>
						<!--end form-group-->
						<button id="btnSendMsg" type="submit" value="Send Message" class="btn btn-primary width-100">Send Message</button>
					</form>
				</div>
				<!--end modal-body-->
				<hr>
				<span class="noti-error">*</span>All field are required.
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>

	<div class="modal fade" id="ContactSellerSuccess" tabindex="-1" role="basic" aria-hidden="true">
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
						Your message to seller successfully sent.
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
	<script>
	document.addEventListener('DOMContentLoaded', function() {
		<?php $i = 0; foreach($listingImageData as $lid): $i++;?>
			$("#MultiFile2").append('<input type="file" name="userfile[]" class="file-upload-input with-preview MultiFile-applied MultiFile" multiple="" title="Click to add files" maxlength="10" accept="gif|jpg|png" id="MultiFile2_F<?php echo $i;?>" value="" style="position: absolute; top: -3000px;">');
		<?php endforeach;?>
	}, false);
	</script>

	<div class="modal fade" id="PopupCustom" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2><span id="sPCTitle">Insert title here</span></h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline">
						<div class="form-group center">
						<span id="sPCMsg">Insert message here.</span>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100" onclick="event.preventDefault();$('#PopupCustom').modal('hide');">OK</button>
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