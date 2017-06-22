				<style>
					.file-upload {
					  position: relative;
					  height: 70px;
					  margin-bottom: 20px;
					  margin-top: 20px;
					}
					.file-upload .file-upload-input {
					  -moz-transition: 0.3s ease;
					  -webkit-transition: 0.3s ease;
					  transition: 0.3s ease;
					  -moz-border-radius: 4px;
					  -webkit-border-radius: 4px;
					  border-radius: 4px;
					  background-color: rgba(0, 0, 0, 0.03);
					  width: 100%;
					  border: 2px dashed rgba(0, 0, 0, 0.1);
					  height: 70px;
					  text-align: center;
					  cursor: pointer;
					  position: relative;
					  display: inline-block;
					  width: 100%;
					  padding: 70px 0 0 0;
					  overflow: hidden;
					  z-index: 1;
					}
					.file-upload .file-upload-input:hover {
					  border: 2px dashed rgba(0, 0, 0, 0.2);
					  background-color: rgba(0, 0, 0, 0.02);
					}
					.file-upload span {
					  position: absolute;
					  top: 0;
					  bottom: 0;
					  line-height: 75px;
					  width: 100%;
					  text-align: center;
					  margin: auto;
					  z-index: 0;
					  left: 0;
					  text-transform: uppercase;
					  color: #8a8a8a;
					  font-size: 12px;
					  font-weight: bold;
					}

					.file-upload-previews > .MultiFile-label {
					  -moz-border-radius: 4px;
					  -webkit-border-radius: 4px;
					  border-radius: 4px;
					  background-color: rgba(0, 0, 0, 0.03);
					  display: inline-block;
					  border: 2px solid rgba(0, 0, 0, 0.1);
					  padding: 10px;
					  position: relative;
					  margin-right: 10px;
					  width: 100%;
					}
					.file-upload-previews span.MultiFile-label {
					  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  position: relative;
					  text-align: center;
					  display: inline-block;
					  margin: 10px;
					}
					.file-upload-previews span.MultiFile-label .MultiFile-title {
					  position: absolute;
					  background-color: rgba(0, 0, 0, 0.4);
					  color: #fff;
					  padding: 10px;
					  bottom: 0;
					  font-size: 12px;
					  text-align: center;
					  width: 100%;
					}
					.file-upload-previews span.MultiFile-label .MultiFile-preview {
					  max-width: 200px !important;
					  max-height: 150px !important;
					}
					.file-upload-previews .MultiFile-remove {
					  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  -moz-border-radius: 50%;
					  -webkit-border-radius: 50%;
					  border-radius: 50%;
					  color: transparent;
					  position: absolute;
					  background-color: #ed2a21;
					  width: 20px;
					  height: 20px;
					  top: -10px;
					  right: -10px;
					  z-index: 1;
					}
					.file-upload-previews .MultiFile-remove:after {
					  text-shadow: none;
					  -webkit-font-smoothing: antialiased;
					  font-family: 'fontawesome';
					  speak: none;
					  font-weight: normal;
					  font-variant: normal;
					  line-height: 1;
					  text-transform: none;
					  content: "\f00d";
					  color: #fff;
					  top: -2px;
					  position: relative;
					  font-size: 10px;
					}

					.file-uploaded-images .image {
					  height: 150px;
					  display: inline-block;
					  margin-bottom: 18px;
					  margin-right: 15px;
					  position: relative;
					}
					.file-uploaded-images .image figure {
					  -moz-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  -webkit-box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.2);
					  -moz-border-radius: 100%;
					  -webkit-border-radius: 100%;
					  border-radius: 100%;
					  cursor: pointer;
					  background-color: #ed2a21;
					  width: 20px;
					  height: 20px;
					  position: absolute;
					  right: -10px;
					  top: -10px;
					  content: "";
					  text-align: center;
					  line-height: 15px;
					}
					.file-uploaded-images .image figure i {
					  color: #fff;
					  font-size: 10px;
					}
					.file-uploaded-images .image img {
					  height: 100%;
					}
				</style>
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
						$("input[name=editALAssignUser]").val("<?php echo $listingData->UFName;?>"); // display the selected text
						$("input[name=editALAssignUserID]").val("<?php echo $listingData->LAddedBy;?>"); // save selected id to hidden input
						
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
								}
							});
						});
						$("select[name=selEditALTransmission]").change(function(){
							var gs_model = $("select[name=selEditALModel] option:selected").text();
							var gs_manu_year = $("select[name=selEditALYear] option:selected").text();
							var tm_transmission = $("select[name=selEditALTransmission] option:selected").text();
							var datastr = '{"mode":"SelectEditALTransmission","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'"}';
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
								}
							});
						});
						$("select[name=selEditALSpecification]").change(function(){
							var gs_model = $("select[name=selEditALModel] option:selected").text();
							var gs_manu_year = $("select[name=selEditALYear] option:selected").text();
							var tm_transmission = $("select[name=selEditALTransmission] option:selected").text();
							var gs_variant = $("select[name=selEditALSpecification] option:selected").text();
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
						});
						
						if( $("input[type=file].with-preview").length ){
							$("input.file-upload-input").MultiFile({
								list: ".file-upload-previews"
							});
						}
	
						var UsersData = [];
						
						<?php foreach($users as $user):?>
							UsersData.push({
								id: "<?php echo $user->ID;?>",
								label: "<?php echo $user->FirstName;?>"
							});
						<?php endforeach;?>
						
						$('input[name=editALAssignUser]').autocomplete({
							source: UsersData,
							select: function (event, ui) {
								$("input[name=editALAssignUser]").val(ui.item.label); // display the selected text
								$("input[name=editALAssignUserID]").val(ui.item.id); // save selected id to hidden input
							}
						});

					
						var input = (document.getElementById('editALAddress'));
						var searchBox = new google.maps.places.SearchBox((input));
						
						google.maps.event.addListener(searchBox, 'places_changed', function() {
							var places = searchBox.getPlaces();

							var bounds = new google.maps.LatLngBounds();

							for (var i = 0, place; place = places[i]; i++) {
								$("#editALLatitude").val(place.geometry.location.lat());
								$("#editALLongitude").val(place.geometry.location.lng());
							}
						});
					});		
					function PublishAd(){
						
					}	
					function PreviewAd(){
						
					}
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-layers"></i> Advertisements
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">

                                <div class="portlet light bordered">

                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Edit Advertisement</span>
                                        </div>
                                    </div>

                                    <div class="portlet-body form">

                                        <form id="frmEditAd" method="post" action="<?php echo base_url();?>admin/editlisting" enctype="multipart/form-data" class="form-horizontal" role="form">

                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Assign User</label>
                                                    <div class="col-md-10">
                                                        <input name="editALAssignUser" type="text" class="form-control" placeholder=" " />
                                                        <input name="editALAssignUserID" type="hidden" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Brand</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALBrand" class="form-control">
                                                            <option>Hyundai</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Model</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALModel" class="form-control">
                                                            <option>Select a Model</option>
															<?php foreach($model as $eachModel):?>
                                                            <option><?php echo $eachModel->gs_model;?></option>
															<?php endforeach;?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Year</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALYear" class="form-control">
                                                            <option>Select a Year</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALTransmission" class="form-control">
                                                            <option>Select a Transmission</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Specification</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALSpecification" class="form-control">
                                                            <option>Select a Specification</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Condition</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALCondition" class="form-control">
                                                            <option>Select a Condition</option>
                                                            <option>Used</option>
                                                            <option>New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mileage</label>
                                                    <div class="col-md-4">
                                                        <select name="selEditALMileage" class="form-control">
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
                                                    <label class="col-md-2 control-label">Selling Price</label>
                                                    <div class="col-md-4">
                                                        <input name="editALSellingPrice" type="number" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                  <label class="col-md-2 control-label">State</label>
                                                  <div class="col-md-4">
                                                    <select name="seleditALState" class="form-control">
                                                        <option>Select a State</option>
														<?php foreach($state as $eachState):?>
														<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
														<?php endforeach;?>
                                                    </select>
                                                  </div>
                                                  <label class="col-md-2 control-label">Address</label>
                                                  <div class="col-md-4">
                                                      <input id="Address" name="editALAddress" type="text" class="form-control" placeholder=" ">
													  <input type="hidden" id="editALLatitude" name="Latitude" />
													  <input type="hidden" id="editALLongitude" name="Longitude" />
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea name="editALDescription" class="form-control" rows="8"></textarea>
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Gallery</h4>
                                                <div class="form-group">
													<div class="file-upload-previews"></div>
													<div class="file-upload">
														<input type="file" name="userfile[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
														<span>Click or drag images here</span>
													</div>
												</div>
                                                <hr>
                                                <h4>General Details</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Brand</label>
                                                    <div class="col-md-4">
                                                        <input name="editALBrand" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Category</label>
                                                    <div class="col-md-4">
                                                        <input name="editALCategory" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Model</label>
                                                    <div class="col-md-4">
                                                        <input name="editALModel" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Specification</label>
                                                    <div class="col-md-4">
                                                        <input name="editALSpecification" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Year</label>
                                                    <div class="col-md-4">
                                                        <input name="editALYear" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Engine CC</label>
                                                    <div class="col-md-4">
                                                        <input name="editALGDEngineCC" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <input name="editALGDTransmission" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Seat Capacity</label>
                                                    <div class="col-md-4">
                                                        <input name="editALSeatCapacity" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mileage (km)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALMileageDup" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Colour</label>
                                                    <div class="col-md-4">
                                                        <input name="editALColourDup" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Doors</label>
                                                    <div class="col-md-4">
                                                        <input name="editALDoors" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Assembled</label>
                                                    <div class="col-md-4">
                                                        <input name="editALAssembled" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Transmission</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <input name="editALTTransmission" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Final Drive Ratio</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFinalDriveRatio" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">No. of Gears</label>
                                                    <div class="col-md-4">
                                                        <input name="editALNoofGears" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Engine Specifications</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Engine CC</label>
                                                    <div class="col-md-4">
                                                        <input name="editALESEngineCC" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Stroke (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALStroke" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Peak Power (hp)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALPeakPower" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Engine Type</label>
                                                    <div class="col-md-4">
                                                        <input name="editALEngineType" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Aspiration</label>
                                                    <div class="col-md-4">
                                                        <input name="editALAspiration" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Bore (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALBore" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Compression Ratio</label>
                                                    <div class="col-md-4">
                                                        <input name="editALCompressionRatio" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Peak Torque (Nm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALPeakTorque" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Direct Injection</label>
                                                    <div class="col-md-4">
                                                        <input name="editALDirectInjection" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Fuel Type</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFuelType" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Dimensions & Weight</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Length (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALLength" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Height (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALHeight" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Width (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALWidth" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Wheel Base (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALWheelBase" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Thread</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFrontThread" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Thread</label>
                                                    <div class="col-md-4">
                                                        <input name="editALRearThread" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Fuel Tank (litres)</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFuelTank" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Brakes</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Brakes</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFrontBrakes" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Brakes</label>
                                                    <div class="col-md-4">
                                                        <input name="editALRearBrakes" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Suspensions</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Suspension</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFrontSuspension" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Suspension</label>
                                                    <div class="col-md-4">
                                                        <input name="editALRearSuspension" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Tyres & Wheels</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Tyres</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFrontTyres" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Tyres</label>
                                                    <div class="col-md-4">
                                                        <input name="editALRearTyres" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Rims</label>
                                                    <div class="col-md-4">
                                                        <input name="editALFrontRims" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Rims</label>
                                                    <div class="col-md-4">
                                                        <input name="editALRearRims" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>

                                            </div>

                                        </form>


                                    </div>




                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn green" onclick="PreviewAd();">Preview</button>
                                                        <button type="submit" class="btn green" onclick="PublishAd();">Publish</button>
                                                        <button type="button" class="btn default" onclick="window.location.href = '<?php echo base_url();?>admin'">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->