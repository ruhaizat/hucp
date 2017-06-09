	<script>
		var map;
		function initializeListingDetail() {
			var markers = [];
			map = new google.maps.Map(document.getElementById('map-detail'), {
				mapTypeId: google.maps.MapTypeId.ROADMAP
			});

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
		}
		google.maps.event.addDomListener(window, 'load', initializeListingDetail);
	</script>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Listing Details</li>
            </ol>
            <section class="page-title pull-left">
                <h1><?php echo $listingData->ModelName;?></h1>
								<h3 style="margin-bottom: 10px;">Gamma 1.6L Premium</h3>
                <h2>RM<?php echo $listingData->SellingPrice;?></h2>
            </section>
            <!--end page-title-->
            <a id="btnSubmitListing_<?php echo $listingData->ID;?>" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-check-circle"></i>Submit</a>
            <a href="#write-a-review" class="btn btn-primary btn-rounded icon scroll pull-right"><i class="fa fa-close"></i>Delete</a>
            <a href="#EditListing" class="btn btn-primary btn-rounded icon scroll pull-right" data-toggle="modal"><i class="fa fa-edit"></i>Edit</a>
						<a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-flag"></i>Report</a>
            <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-print"></i>Print</a>
            <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-clone"></i>Compare</a>
            <a href="#write-a-review" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon scroll pull-right"><i class="fa fa-heart"></i>Favourite </a>
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
                    <section>
                        <h2>Seller's Comment</h2>
                        <p>
							<?php echo $listingData->Description;?>
                        </p>
                    </section>

										<section>
                        <h2>Car Details</h2>
                        <div class="panel-group" id="accordion-5-Detail" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div id="accordion-collapse-5-Detail" class="panel-collapse" role="tabpanel" aria-labelledby="accordion-heading-5-Detail">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Model</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_category;?>
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
                                                    <?php echo $listingData->gs_model_name;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Manufacturing Year</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_body_type;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Mileage</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_seats;?>
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
                                                    <?php echo $listingData->gs_seats;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
																				<div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Selling Price</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_seats;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
																				<div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>State</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_seats;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
																				<div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Address</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_seats;?>
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
                        <h2>Specification</h2>
                        <div class="panel-group" id="accordion-5-Detail" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-heading-5-Detail">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-5-Detail" href="#accordion-collapse-5-Detail" aria-expanded="false" aria-controls="accordion-collapse-5">
                                            <i class="fa fa-list-ul"></i>General Specification
                                        </a>
                                    </h4>
                                </div>
                                <!--end panel-heading-->
                                <div id="accordion-collapse-5-Detail" class="panel-collapse" role="tabpanel" aria-labelledby="accordion-heading-5-Detail">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Category</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_category;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Model Name</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_model_name;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Body Type</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_body_type;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Seats</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->gs_seats;?>
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
                        <div class="panel-group" id="accordion-6-Detail" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-heading-6-Detail">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-6-Detail" href="#accordion-collapse-6-Detail" aria-expanded="false" aria-controls="accordion-collapse-6">
                                            <i class="fa fa-area-chart"></i>Performance
                                        </a>
                                    </h4>
                                </div>
                                <!--end panel-heading-->
                                <div id="accordion-collapse-6-Detail" class="panel-collapse" role="tabpanel" aria-labelledby="accordion-heading-6-Detail">
                                    <div class="panel-body">
                                        <div class="wrapper">

                                        <h4><b>ENGINE</b></h4>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Engine Label</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_label;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Engine Capacity</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_capacity;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Fuel System</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_fuel_system;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Displacement (cc)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_displacement;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Power Label</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_power_label;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Power (ps)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_power_ps;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Power (kW)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_power_kw;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Power (rpm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_power_rpm;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Torque Label</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_torque_label;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Torque (kg.m)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_touque_kgm;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Torque (Nm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_touque_nm;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Max Torque (rpm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_max_touque_rpm;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Number of Cylinders</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_number_of_cylinders;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Valve of Cylinder</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_eg_valve_of_cylinder;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->

                                        <hr>

                                        <h4><b>TRANSMISSION</b></h4>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Transmission Type</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_tm_type;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Drive Type</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_tm_drive_type;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Gear (Speed)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_tm_gear_speed;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Drive Configuration</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->pf_tm_drive_config;?>
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
                        <div class="panel-group" id="accordion-7-Detail" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-heading-7-Detail">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-7-Detail" href="#accordion-collapse-7-Detail" aria-expanded="false" aria-controls="accordion-collapse-7">
                                            <i class="fa fa-car"></i>Dimension
                                        </a>
                                    </h4>
                                </div>
                                <!--end panel-heading-->
                                <div id="accordion-collapse-7-Detail" class="panel-collapse" role="tabpanel" aria-labelledby="accordion-heading-7-Detail">
                                    <div class="panel-body">
                                        <div class="wrapper">

                                        <h4><b>EXTERIOR</b></h4>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Overall Length (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_length;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Overall Width (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_width;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Overall Height (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_height;?>
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
                                                    <?php echo $listingData->dm_ex_wheel_base;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Front Wheel Tread (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_front_wheel_tread;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Rear Wheel Tread (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_rear_wheel_tread;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Front Over Hang (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_front_over_hang;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Rear Over Hang (mm)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_ex_rear_over_hang;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <!--end row-->


                                        <hr>

                                        <h4><b>CARGO</b></h4>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Cargo Area (VDA)</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->dm_cg_area_vda;?>
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
                        <div class="panel-group" id="accordion-8-Detail" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="accordion-heading-8-Detail">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion-8-Detail" href="#accordion-collapse-8-Detail" aria-expanded="false" aria-controls="accordion-collapse-8">
                                            <i class="fa fa-gear"></i>Wheels
                                        </a>
                                    </h4>
                                </div>
                                <!--end panel-heading-->
                                <div id="accordion-collapse-8-Detail" class="panel-collapse" role="tabpanel" aria-labelledby="accordion-heading-8-Detail">
                                    <div class="panel-body">
                                        <div class="wrapper">
                                        <h4><b>WHEELS & TIRES</b></h4>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Front Wheels</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->wh_front_wheel;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Rear Wheels</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->wh_rear_wheel;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Front Tires</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->wh_front_tires;?>
                                                </div>
                                                <!--end form-group-->
                                            </div>
                                            <!--end col-md-9-->
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3">
                                                <strong>Rear Tires</strong>
                                            </div>
                                            <!--end col-md-3-->
                                            <div class="col-md-9 col-sm-9">
                                                <div class="form-group">
                                                    <?php echo $listingData->wh_rear_tires;?>
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

                    <p style="font-size: 12px;"><i>* Specifications and equipment have been sourced from RedBook and are based on manufacturer standard specifications. Actual specifications for this vehicle may differ, please confirm with the seller.</i></p>
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
                                              <a href="#" class="btn btn-primary btn-rounded btn-xs">Contact Seller</a>
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
						<?php $i = 0;foreach($recentData as $eachRecent):$i++;?>
						<div class="item" data-id="<?php echo $eachRecent->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachRecent->LID.'/'.$eachRecent->LAddedBy;?>">
                                <div class="description">
                                    <figure>RM<?php echo $eachRecent->SellingPrice;?></figure>
                                    <div class="label label-default">Used</div>
                                    <h3><?php echo $eachRecent->ModelName;?></h3>
                                    <h4><?php echo $eachRecent->Address;?></h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachRecent->ListingPic): echo base_url().'assets/img/listing/'.$eachRecent->ListingPic; else: echo base_url().'assets/img/items/default.png';endif;?>" alt="">
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
										<input type="text" class="form-control" name="ALColour" id="ALColour" placeholder="Colour" value="<?php echo $listingData->Colour;?>">
									</div>
									<!--end form-group-->
									<div class="form-group">
										<label for="category">Selling Price</label>
										<input type="text" class="form-control" name="ALSellingPrice" id="ALSellingPrice" placeholder="Selling Price" value="<?php echo $listingData->SellingPrice;?>">
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
									  <input type="text" class="form-control" name="ALAddress" id="ALAddress" placeholder="Address" value="<?php echo $listingData->Address;?>">
								  </div>
								  <!--end form-group-->
								  <div class="map height-200px shadow" id="map-modal"></div>
								  <!--end map-->
								  <div class="form-group hidden">
									  <input type="text" class="form-control" id="ALLatitude" name="ALLatitude" hidden="" value="<?php echo $listingData->Latitude;?>">
									  <input type="text" class="form-control" id="ALLongitude" name="ALLongitude" hidden="" value="<?php echo $listingData->Longitude;?>">
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
