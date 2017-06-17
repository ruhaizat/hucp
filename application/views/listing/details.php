	<script>
		$(document).ready(function(){
			$('#EditListing').on('shown.bs.modal', function () {
				//alert("at");
				aEditClick();
				google.maps.event.trigger(mapedit, 'resize');
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

			var input = (document.getElementById('ALAddressEdit'));
			var searchBox = new google.maps.places.SearchBox((input));

			google.maps.event.addListener(map, "click", function(event) {
				for (var i = 0, marker; marker = markers[i]; i++) {
					marker.setMap(null);
				}

				var lat = event.latLng.lat();
				var lng = event.latLng.lng();

				$("#ALLatitudeEdit").val(lat);
				$("#ALLongitudeEdit").val(lng);

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

					$("#ALLatitudeEdit").val(place.geometry.location.lat());
					$("#ALLongitudeEdit").val(place.geometry.location.lng());

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
			var Model = "<?php echo $listingData->ModelName;?>";
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
	</script>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Listing Details</li>
            </ol>
            <section class="page-title pull-left">
                <h1><?php echo $listingData->ModelName;?></h1>
								<h3 style="margin-bottom: 10px;"><?php echo $listingData->SpecificationName;?></h3>
                <h2>RM<?php echo number_format($listingData->SellingPrice);?></h2>
            </section>
            <!--end page-title-->
			<?php $user_data = $this->session->userdata("LoggedUser"); if($user_data["Group"] == 1):?>
				<?php if($listingData->LStatus == 0):?>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-star"></i>Featured </a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-check"></i>Approve </a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-close"></i>Reject </a>
					<a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
				<?php elseif($listingData->LStatus == 1):?>
					<a href="#write-a-review" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-star"></i>Featured </a>
					<a href="#write-a-review" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-trash"></i>Delete</a>
					<a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
				<?php endif;?>
			<?php elseif($user_data["Group"] == 2):?>
				<?php if($listingData->LStatus == 0):?>
					<a id="btnSubmitListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-check-circle"></i>Submit</a>
					<a href="#write-a-review" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-trash"></i>Delete</a>
					<a id="aEdit" href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
				<?php elseif($listingData->LStatus == 1):?>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-flag"></i>Report Ad</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
					<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
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
																				Hyundai
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
																				Sedan
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
																					Sonata
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
																					GLS 1.6 Premium
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
																					2003
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
																					1599
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
																					Automatic
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
																					5
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
																					100,000
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
																					Red
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
																					5
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
																					5
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
																					Locally Build
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
																					Automatic
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
																					4.042
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
																					5
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
																					1499
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
																					1499
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
																					1499
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
																					Piston
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
																					Aspirated
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
																					85
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
																					10
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
																					178
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
																					Multi-Point Injected
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
																					Petrol - Unleaded (ULP)
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
																					4747
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
																					1422
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
																					1820
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
																					2700
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
																					1540
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
																					1530
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
																					65
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
																					Ventilated Discs
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
																					Discs
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
																					Double Wishbone
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
																					Multiple links
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
																					195/65 R15
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
																					195/65 R15
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
																					15
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
																					15
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
                                    <h3><?php echo $eachRelated->ModelName;?></h3>
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
					<form id="frmEditListing" method="post" action="<?php echo base_url();?>main/editlisting" class="form inputs-underline" enctype="multipart/form-data">
						<section>
						<h3>Car Details</h3>
							<div class="row">
								<div class="col-md-6 col-sm-6">
									<div class="form-group">
										<label for="title">Model</label>
										<select class="form-control selectpicker" name="ALModel" id="ALModel">
											<option value="">Select a Model</option>
											<?php foreach($modelData as $eachModel):?>
											<option value="<?php echo $eachModel->ID;?>" <?php if($eachModel->ID == $listingData->ModelID):echo"selected";endif;?>><?php echo $eachModel->Name;?></option>
											<?php endforeach;?>
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
											<?php foreach($specificationData as $eachSpecification):?>
											<option value="<?php echo $eachSpecification->ID;?>" <?php if($eachSpecification->ID == $listingData->SpecificationID):echo"selected";endif;?>><?php echo $eachSpecification->Name;?></option>
											<?php endforeach;?>
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
											<option value="1" <?php if($listingData->Transmission == 1):echo"selected";endif;?>>Automatic</option>
											<option value="2" <?php if($listingData->Transmission == 2):echo"selected";endif;?>>Manual</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Manufacturing Year</label>
										<select class="form-control selectpicker" name="ALManufacturingYear" id="ALManufacturingYear">
											<option value="">Manufacturing Year</option>
											<option value="1" <?php if($listingData->ManufacturingYear == 1):echo"selected";endif;?>>2018</option>
											<option value="2" <?php if($listingData->ManufacturingYear == 2):echo"selected";endif;?>>2017</option>
											<option value="3" <?php if($listingData->ManufacturingYear == 3):echo"selected";endif;?>>2016</option>
											<option value="4" <?php if($listingData->ManufacturingYear == 4):echo"selected";endif;?>>2015</option>
											<option value="5" <?php if($listingData->ManufacturingYear == 5):echo"selected";endif;?>>2014</option>
											<option value="6" <?php if($listingData->ManufacturingYear == 6):echo"selected";endif;?>>2013</option>
											<option value="7" <?php if($listingData->ManufacturingYear == 7):echo"selected";endif;?>>2012</option>
											<option value="8" <?php if($listingData->ManufacturingYear == 8):echo"selected";endif;?>>2011</option>
											<option value="9" <?php if($listingData->ManufacturingYear == 9):echo"selected";endif;?>>2010</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Mileage</label>
										<select class="form-control selectpicker" name="ALMileage" id="ALMileage">
											<option value="">Select a Mileage</option>
											<option value="1" <?php if($listingData->Mileage == 1):echo"selected";endif;?>>0 KM</option>
											<option value="2" <?php if($listingData->Mileage == 2):echo"selected";endif;?>>5,000 KM</option>
											<option value="3" <?php if($listingData->Mileage == 3):echo"selected";endif;?>>10,000 KM</option>
											<option value="4" <?php if($listingData->Mileage == 4):echo"selected";endif;?>>15,000 KM</option>
											<option value="5" <?php if($listingData->Mileage == 5):echo"selected";endif;?>>20,000 KM</option>
											<option value="6" <?php if($listingData->Mileage == 6):echo"selected";endif;?>>25,000 KM</option>
											<option value="7" <?php if($listingData->Mileage == 7):echo"selected";endif;?>>30,000 KM</option>
											<option value="8" <?php if($listingData->Mileage == 8):echo"selected";endif;?>>35,000 KM</option>
											<option value="9" <?php if($listingData->Mileage == 9):echo"selected";endif;?>>40,000 KM</option>
											<option value="10" <?php if($listingData->Mileage == 10):echo"selected";endif;?>>45,000 KM</option>
											<option value="11" <?php if($listingData->Mileage == 11):echo"selected";endif;?>>50,000 KM</option>
											<option value="12" <?php if($listingData->Mileage == 12):echo"selected";endif;?>>55,000 KM</option>
											<option value="13" <?php if($listingData->Mileage == 13):echo"selected";endif;?>>60,000 KM</option>
											<option value="14" <?php if($listingData->Mileage == 14):echo"selected";endif;?>>65,000 KM</option>
											<option value="15" <?php if($listingData->Mileage == 15):echo"selected";endif;?>>70,000 KM</option>
											<option value="16" <?php if($listingData->Mileage == 16):echo"selected";endif;?>>75,000 KM</option>
											<option value="17" <?php if($listingData->Mileage == 17):echo"selected";endif;?>>80,000 KM</option>
											<option value="18" <?php if($listingData->Mileage == 18):echo"selected";endif;?>>85,000 KM</option>
											<option value="19" <?php if($listingData->Mileage == 19):echo"selected";endif;?>>90,000 KM</option>
											<option value="20" <?php if($listingData->Mileage == 20):echo"selected";endif;?>>95,000 KM</option>
											<option value="21" <?php if($listingData->Mileage == 21):echo"selected";endif;?>>100,000 KM</option>
											<option value="22" <?php if($listingData->Mileage == 22):echo"selected";endif;?>>105,000 KM</option>
										</select>
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Colour</label>
										<input type="text" class="form-control" name="ALColour" id="ALColour" placeholder="Colour" value="<?php echo $listingData->Colour;?>">
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Selling Price</label>
										<input type="text" class="form-control" name="ALSellingPrice" id="ALSellingPrice" placeholder="Selling Price" value="<?php echo number_format($listingData->SellingPrice);?>">
									</div>
									<!--end form-group-->
								</div>
								<!--col-md-6-->
								<div class="col-md-6 col-sm-6">
								<div class="form-group">
									<label for="category">State</label>
									<select class="form-control selectpicker" name="ALState" id="ALState">
										<?php foreach($state as $eachState):?>
										<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
										<?php endforeach;?>
									</select>
								</div>
								<!--end form-group-->
								  <div class="form-group">
									  <label for="address-autocomplete">Address</label>
									  <input type="text" class="form-control" name="ALAddress" id="ALAddressEdit" placeholder="Address" value="<?php echo $listingData->Address;?>">
								  </div>
								  <!--end form-group-->
								  <div class="map height-200px shadow" id="map-edit"></div>
								  <!--end map-->
								  <div class="form-group hidden">
									  <input type="text" class="form-control" id="ALLatitudeEdit" name="ALLatitude" hidden="" value="<?php echo $listingData->Latitude;?>">
									  <input type="text" class="form-control" id="ALLongitudeEdit" name="ALLongitude" hidden="" value="<?php echo $listingData->Longitude;?>">
								  </div>
								  <p class="note">Enter the exact address or drag the map marker to position</p>

								</div>
								<!--col-md-6-->
							</div>
							<!--end row-->
							<div class="form-group">
								<label for="description">Description</label>
								<textarea class="form-control" id="ALDescription" rows="4" name="ALDescription" placeholder="Describe the listing" value=""><?php echo $listingData->Description;?></textarea>
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
							<div class="panel-group" id="accordion-5-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-5-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-5-Edit" href="#accordion-collapse-5-Edit" aria-expanded="false" aria-controls="accordion-collapse-5-Edit">
												<i class="fa fa-list-ul"></i>General Specification
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-5-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-5-Edit">
										<div class="panel-body">
											<div class="row">
												<div class="col-md-3 col-sm-3 horizontal-input-title">
													<strong>Category</strong>
												</div>
												<!--end col-md-3-->
												<div class="col-md-9 col-sm-9">
													<div class="form-group">
														<input type="text" class="form-control" name="gs_category" placeholder="Passenger Car" value="<?php echo $listingData->gs_category;?>">
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
														<input type="text" class="form-control" name="gs_model_name" placeholder="Elantra" value="<?php echo $listingData->gs_model_name;?>">
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
														<input type="text" class="form-control" name="gs_body_type" placeholder="4 Doors" value="<?php echo $listingData->gs_body_type;?>">
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
														<input type="text" class="form-control" name="gs_seats" placeholder="5 Seats" value="<?php echo $listingData->gs_seats;?>">
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
											<a role="button" data-toggle="collapse" data-parent="#accordion-6-Edit" href="#accordion-collapse-6-Edit" aria-expanded="false" aria-controls="accordion-collapse-6-Edit">
												<i class="fa fa-area-chart"></i>Performance
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-6-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-6-Edit">
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
														<input type="text" class="form-control" name="pf_eg_label" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->pf_eg_label;?>">
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
														<input type="text" class="form-control" name="pf_eg_capacity" placeholder="1.6" value="<?php echo $listingData->pf_eg_capacity;?>">
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
														<input type="text" class="form-control" name="pf_eg_fuel_system" placeholder="MPI" value="<?php echo $listingData->pf_eg_fuel_system;?>">
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
														<input type="text" class="form-control" name="pf_eg_displacement" placeholder="MPI" value="<?php echo $listingData->pf_eg_displacement;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_power_label" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_power_label;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_power_ps" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_power_ps;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_power_kw" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_power_kw;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_power_rpm" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_power_rpm;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_torque_label" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_torque_label;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_touque_kgm" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_touque_kgm;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_touque_nm" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_touque_nm;?>">
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
														<input type="text" class="form-control" name="pf_eg_max_touque_rpm" placeholder="MPI" value="<?php echo $listingData->pf_eg_max_touque_rpm;?>">
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
														<input type="text" class="form-control" name="pf_eg_number_of_cylinders" placeholder="MPI" value="<?php echo $listingData->pf_eg_number_of_cylinders;?>">
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
														<input type="text" class="form-control" name="pf_eg_valve_of_cylinder" placeholder="MPI" value="<?php echo $listingData->pf_eg_valve_of_cylinder;?>">
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
														<input type="text" class="form-control" name="pf_tm_type" placeholder="MPI" value="<?php echo $listingData->pf_tm_type;?>">
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
														<input type="text" class="form-control" name="pf_tm_drive_type" placeholder="MPI" value="<?php echo $listingData->pf_tm_drive_type;?>">
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
														<input type="text" class="form-control" name="pf_tm_gear_speed" placeholder="MPI" value="<?php echo $listingData->pf_tm_gear_speed;?>">
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
														<input type="text" class="form-control" name="pf_tm_drive_config" placeholder="MPI" value="<?php echo $listingData->pf_tm_drive_config;?>">
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
							<div class="panel-group" id="accordion-7-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-7">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-7-Edit" href="#accordion-collapse-7-Edit" aria-expanded="false" aria-controls="accordion-collapse-7-Edit">
												<i class="fa fa-car"></i>Dimension
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-7-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-7-Edit">
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
														<input type="text" class="form-control" name="dm_ex_length" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_length;?>">
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
														<input type="text" class="form-control" name="dm_ex_width" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_width;?>">
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
														<input type="text" class="form-control" name="dm_ex_height" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_height;?>">
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
														<input type="text" class="form-control" name="dm_ex_wheel_base" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_wheel_base;?>">
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
														<input type="text" class="form-control" name="dm_ex_front_wheel_tread" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_front_wheel_tread;?>">
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
														<input type="text" class="form-control" name="dm_ex_rear_wheel_tread" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_rear_wheel_tread;?>">
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
														<input type="text" class="form-control" name="dm_ex_front_over_hang" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_front_over_hang;?>">
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
														<input type="text" class="form-control" name="dm_ex_rear_over_hang" placeholder="Gamma 1.6 Dual CVVT" value="<?php echo $listingData->dm_ex_rear_over_hang;?>">
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
														<input type="text" class="form-control" name="dm_cg_area_vda" placeholder="6 Speed Automatic FWD" value="<?php echo $listingData->dm_cg_area_vda;?>">
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
							<div class="panel-group" id="accordion-8-Edit" role="tablist" aria-multiselectable="true">
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="accordion-heading-8-Edit">
										<h4 class="panel-title">
											<a role="button" data-toggle="collapse" data-parent="#accordion-8-Edit" href="#accordion-collapse-8-Edit" aria-expanded="false" aria-controls="accordion-collapse-8-Edit">
												<i class="fa fa-gear"></i>Wheels
											</a>
										</h4>
									</div>
									<!--end panel-heading-->
									<div id="accordion-collapse-8-Edit" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-8-Edit">
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
														<input type="text" class="form-control" name="wh_front_wheel" placeholder="6 Speed Automatic FWD" value="<?php echo $listingData->wh_front_wheel;?>">
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
														<input type="text" class="form-control" name="wh_rear_wheel" placeholder="6 Speed Automatic FWD" value="<?php echo $listingData->wh_rear_wheel;?>">
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
														<input type="text" class="form-control" name="wh_front_tires" placeholder="6 Speed Automatic FWD" value="<?php echo $listingData->wh_front_tires;?>">
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
														<input type="text" class="form-control" name="wh_rear_tires" placeholder="6 Speed Automatic FWD" value="<?php echo $listingData->wh_rear_tires;?>">
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
