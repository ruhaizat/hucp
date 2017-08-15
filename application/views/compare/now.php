	<script>		
		function MakeFavourite(UserID, ListingID){
			var datastr = '{"mode":"MakeFavourite","UserID":"'+UserID+'","ListingID":"'+ListingID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var FavID = data;
					var afav = "#a_fav_"+UserID+"_"+ListingID;
					var lired = ".lired_fav_"+UserID+"_"+ListingID;
					var liblack = ".liblack_fav_"+UserID+"_"+ListingID;
					$(afav).attr("onclick","RemoveFavourite("+UserID+","+ListingID+")");
					$(lired).show();
					$(lired).css("display","block");
					$(liblack).hide();
				}
			});
		}
		
		function RemoveFavourite(UserID, ListingID){
			var datastr = '{"mode":"RemoveFavourite","UserID":"'+UserID+'","ListingID":"'+ListingID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var FavID = data;
					var afav = "#a_fav_"+UserID+"_"+ListingID;
					var lired = ".lired_fav_"+UserID+"_"+ListingID;
					var liblack = ".liblack_fav_"+UserID+"_"+ListingID;
					$(afav).attr("onclick","MakeFavourite("+UserID+","+ListingID+")");
					$(lired).hide();
					$(liblack).show();
					$(liblack).css("display","block");
				}
			});
		}

		function submitContactSeller(){
			var Name = $("#name").val();
			var Email = $("#buyer_email").val();
			var Telephone = $("#telephone").val();
			var Description = $("#description").val();

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

		function TriggerCS(LID,ModelName,LAddedBy){
			ListingID = LID;
			Model = ModelName;
			SellerID = LAddedBy;
			
			$("#ContactSeller").modal("show");
		}
		
		$(".liCompare").hide();
		var ListingID;
		var Model;
		var SellerID;
	</script>
    <div id="page-content">
      <div class="container">
          <ol class="breadcrumb">
              <li><a href="#">Home</a></li>
              <li class="active">Compare Listing</li>
          </ol>
          <!--end breadcrumb-->
          <section class="page-title">
              <h1>Compare Listing</h1>
          </section>
          <!--end section-title-->

          <section>
              <div class="row">
                  <div class="col-md-3 col-sm-3">
                      <div class="pricing box description">
                          <h3 style="margin-bottom: 0; margin-top: 332px;">General Details</h3>
                          <ul style="margin-top: 0;">
                              <li>Brand</li>
                              <li>Category</li>
                              <li>Model</li>
                              <li>Specification</li>
                              <li>Year</li>
                              <li>Engine CC</li>
                              <li>Transmission</li>
                              <li>Seat Capacity</li>
                              <li>Doors</li>
                              <li>Seat Capacity</li>
                              <li>Assembled</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Transmission</h3>
                          <ul style="margin-top: 0;">
                              <li>Transmission</li>
                              <li>Final Drive Ratio</li>
                              <li>Number of Gears</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Engine Specifications</h3>
                          <ul style="margin-top: 0;">
                              <li>Engine CC</li>
                              <li>Stroke (mm)</li>
                              <li>Peak Power (hp)</li>
                              <li>Engine Type</li>
                              <li>Aspiration</li>
                              <li>Bore (mm)</li>
                              <li>Compression Ratio</li>
                              <li>Direct Injection</li>
                              <li>Fuel Type</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Dimension & Weight</h3>
                          <ul style="margin-top: 0;">
                              <li>Length (mm)</li>
                              <li>Height (mm)</li>
                              <li>Width (mm)</li>
                              <li>Wheel Base (mm)</li>
                              <li>Front Thread</li>
                              <li>Rear Thread</li>
                              <li>Fuel Tank (litres)</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Brakes</h3>
                          <ul style="margin-top: 0;">
                              <li>Front Brakes</li>
                              <li>Rear Brakes</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Suspensions</h3>
                          <ul style="margin-top: 0;">
                              <li>Front Suspension</li>
                              <li>Rear Suspension</li>
                          </ul>
                          <h3 style="margin-bottom: 0;">Tyres & Wheels</h3>
                          <ul style="margin-top: 0;">
                              <li>Front Tyres</li>
                              <li>Rear Tyres</li>
                              <li>Front Rims</li>
                              <li>Rear Rims</li>
                          </ul>
                      </div>
                      <!--end pricing-box description-->
                  </div>
                  <!--end col-md-4-->
				  <?php foreach($compareLData as $eachCLD):?>
					  <div class="col-md-3 col-sm-3">
						  <div style="text-align: center;">
						  <div style="width: 100%; height: 200px; background-image: url('<?php if($eachCLD->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachCLD->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>'); background-position: center; overflow: hidden; background-size: cover; margin-right: 10px;"></div>
						  <h3 style="margin: 10px 0"><?php echo $eachCLD->ManufacturingYear?> <?php echo $eachCLD->Brand;?> <?php echo $eachCLD->ModelName?></h3>
						  <b>RM<?php echo number_format($eachCLD->SellingPrice)?></b> | <?php echo $eachCLD->Mileage;?>KM<br/>
						  <?php echo $eachCLD->StateName?><br/>
						  <a onclick="TriggerCS(<?php echo $eachCLD->LID;?>,'<?php echo $eachCLD->ModelName;?>',<?php echo $eachCLD->LAddedBy;?>)" href="#" class="btn btn-primary btn-rounded" style="margin: 10px 0;">Contact Seller</a>
							<?php if($LoggedUser):?>
								<?php $favEleID = $LoggedUser["UserID"]."_".$eachCLD->LID;?>
								<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachCLD->LID);$favCount = $query->row()->val;?>
								<a id="a_fav_<?php echo $favEleID;?>" href="#" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon" style="margin: 10px 0;" onclick="<?php if($favCount > 0):?><?php echo 'RemoveFavourite'?><?php else:?><?php echo 'MakeFavourite'?><?php endif;?>(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachCLD->LID;?>)">
								<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><i class="fa fa-heart fi_<?php echo $favEleID;?>" style="color:red;"></i></li>
								<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><i class="fa fa-heart fi_<?php echo $favEleID;?>" style="color:#8a8a8a;"></i></li>
								</a>
							<?php endif;?>
						  </div>
						  <div class="pricing box">
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->Brand): echo $eachCLD->Brand; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->body_style): echo $eachCLD->body_style; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->ModelName): echo $eachCLD->ModelName; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->SpecificationName): echo $eachCLD->SpecificationName; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->ManufacturingYear): echo $eachCLD->ManufacturingYear; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_cc): echo $eachCLD->en_cc; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->Transmission): echo $eachCLD->Transmission; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->gn_seat_capacity): echo $eachCLD->gn_seat_capacity; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->gn_doors): echo $eachCLD->gn_doors; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->gn_seat_capacity): echo $eachCLD->gn_seat_capacity; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->gn_assembled): echo $eachCLD->gn_assembled; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->Transmission): echo $eachCLD->Transmission; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->tm_final_drive_ratio): echo $eachCLD->tm_final_drive_ratio; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->tm_gears): echo $eachCLD->tm_gears; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->en_cc): echo $eachCLD->en_cc; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_stroke): echo $eachCLD->en_stroke; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_peak_power): echo $eachCLD->en_peak_power; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_engine_type): echo $eachCLD->en_engine_type; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_aspiration): echo $eachCLD->en_aspiration; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_bore): echo $eachCLD->en_bore; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_compression_ratio): echo $eachCLD->en_compression_ratio; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_direct_injection): echo $eachCLD->en_direct_injection; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->en_fuel_type): echo $eachCLD->en_fuel_type; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->dm_length): echo $eachCLD->dm_length; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_height): echo $eachCLD->dm_height; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_width): echo $eachCLD->dm_width; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_wheel_base): echo $eachCLD->dm_wheel_base; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_front_thread): echo $eachCLD->dm_front_thread; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_rear_thread): echo $eachCLD->dm_rear_thread; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->dm_fuel_tank): echo $eachCLD->dm_fuel_tank; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->br_front): echo $eachCLD->br_front; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->br_rear): echo $eachCLD->br_rear; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->sus_front): echo $eachCLD->sus_front; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->sus_rear): echo $eachCLD->sus_rear; else: echo"-"; endif;?></li>
							</ul>
							<h3 style="margin-bottom: 0;">-</h3>
							<ul style="margin-top: 0;">
								<li><?php if($eachCLD->tw_front): echo $eachCLD->tw_front; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->tw_rear): echo $eachCLD->tw_rear; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->tw_front_rim): echo $eachCLD->tw_front_rim; else: echo"-"; endif;?></li>
								<li><?php if($eachCLD->tw_rear_rim): echo $eachCLD->tw_rear_rim; else: echo"-"; endif;?></li>
							</ul>
							<a onclick="TriggerCS(<?php echo $eachCLD->LID;?>,'<?php echo $eachCLD->ModelName;?>',<?php echo $eachCLD->LAddedBy;?>)" href="#" class="btn btn-primary btn-rounded" style="margin: 10px 0;">Contact Seller</a>
							<?php if($LoggedUser):?>
								<?php $favEleID = $LoggedUser["UserID"]."_".$eachCLD->LID;?>
								<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachCLD->LID);$favCount = $query->row()->val;?>
								<a id="a_fav_<?php echo $favEleID;?>" href="#" class="btn btn-primary btn-framed btn-rounded btn-light-frame icon" style="margin: 10px 0;" onclick="<?php if($favCount > 0):?><?php echo 'RemoveFavourite'?><?php else:?><?php echo 'MakeFavourite'?><?php endif;?>(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachCLD->LID;?>)">
								<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><i class="fa fa-heart fi_<?php echo $favEleID;?>" style="color:red;"></i></li>
								<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><i class="fa fa-heart fi_<?php echo $favEleID;?>" style="color:#8a8a8a;"></i></li>
								</a>
							<?php endif;?>
						  </div>
						  <!--end pricing-box-->
					  </div>
					  <!--end col-md-3-->
				  <?php endforeach;?>
              </div>
          </section>

      </div>
      <!--end container-->
        <!--end container-->
        <div class="container">
            <div class="row">

            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->
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
							<button type="submit" class="btn btn-primary width-100" onclick="$('#ContactSellerSuccess').modal('hide');$('#ContactSeller').modal('hide')">OK</button>
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