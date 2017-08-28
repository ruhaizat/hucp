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
					$(document).ready(function(){
						$("select[name=selMileage]").change(function(){
							$("input[name=Mileage]").val($("select[name=selMileage] option:selected").text());
						});
						$("select[name=selBrand]").change(function(){
							var car_brand = $("select[name=selBrand] option:selected").text();
							var datastr = '{"mode":"SelectBrand","car_brand":"'+car_brand+'"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									$('select[name=selModel]')
										.find('option')
										.remove()
										.end()
										.append('<option>Select a Model</option>');
									var gs_model = JSON.parse(data);
									gs_model.forEach(function(entry){
										$('select[name=selModel]').append('<option>' + entry.gs_model + '</option>');
									});
								}
							});
						});
						$("select[name=selModel]").change(function(){
							var gs_model = $("select[name=selModel] option:selected").text();
							var datastr = '{"mode":"SelectModel","gs_model":"'+gs_model+'"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									$('select[name=selYear]')
										.find('option')
										.remove()
										.end()
										.append('<option>Select a Year</option>');
									var gs_manu_year = JSON.parse(data);
									gs_manu_year.forEach(function(entry){
										$('select[name=selYear]').append('<option>' + entry.gs_manu_year + '</option>');
									});
								}
							});
						});
						$("select[name=selYear]").change(function(){
							var gs_model = $("select[name=selModel] option:selected").text();
							var gs_manu_year = $("select[name=selYear] option:selected").text();
							var datastr = '{"mode":"SelectYear","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									$('select[name=selTransmission]')
										.find('option')
										.remove()
										.end()
										.append('<option>Select a Transmission</option>');
									var tm_transmission = JSON.parse(data);
									tm_transmission.forEach(function(entry){
										$('select[name=selTransmission]').append('<option>' + entry.tm_transmission + '</option>');
									});
								}
							});
						});
						$("select[name=selTransmission]").change(function(){
							var gs_model = $("select[name=selModel] option:selected").text();
							var gs_manu_year = $("select[name=selYear] option:selected").text();
							var tm_transmission = $("select[name=selTransmission] option:selected").text();
							var datastr = '{"mode":"SelectTransmission","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									$('select[name=selSpecification]')
										.find('option')
										.remove()
										.end()
										.append('<option>Select a Specification</option>');
									var gs_variant = JSON.parse(data);
									gs_variant.forEach(function(entry){
										$('select[name=selSpecification]').append('<option>' + entry.gs_variant + '</option>');
									});
								}
							});
						});
						$("select[name=selSpecification]").change(function(){
							var gs_model = $("select[name=selModel] option:selected").text();
							var gs_manu_year = $("select[name=selYear] option:selected").text();
							var tm_transmission = $("select[name=selTransmission] option:selected").text();
							var gs_variant = $("select[name=selSpecification] option:selected").text();
							var datastr = '{"mode":"SelectSpecification","gs_model":"'+gs_model+'","gs_manu_year":"'+gs_manu_year+'","tm_transmission":"'+tm_transmission+'","gs_variant":"'+gs_variant+'"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									var qResult = JSON.parse(data);
									$("input[name=Brand]").val(qResult.car_brand);
									$("input[name=Category]").val(qResult.body_style);
									$("input[name=Model]").val(qResult.gs_model);
									$("input[name=Specification]").val(qResult.gs_variant);
									$("input[name=Year]").val(qResult.gs_manu_year);
									$("input[name=GDEngineCC]").val(qResult.en_cc);
									$("input[name=GDTransmission]").val(qResult.tm_transmission);
									$("input[name=SeatCapacity]").val(qResult.gn_seat_capacity);
									$("input[name=Mileage]").val("");
									$("input[name=Colour]").val("");
									$("input[name=Doors]").val(qResult.gn_doors);
									$("input[name=Assembled]").val(qResult.gn_assembled);
									
									$("input[name=TTransmission]").val(qResult.tm_transmission);
									$("input[name=FinalDriveRatio]").val(qResult.tm_final_drive_ratio);
									$("input[name=NoofGears]").val(qResult.tm_gears);
									
									$("input[name=ESEngineCC]").val(qResult.en_cc);
									$("input[name=Stroke]").val(qResult.en_stroke);
									$("input[name=PeakPower]").val(qResult.en_peak_power);
									$("input[name=EngineType]").val(qResult.en_engine_type);
									$("input[name=Aspiration]").val(qResult.en_aspiration);
									$("input[name=Bore]").val(qResult.en_bore);
									$("input[name=CompressionRatio]").val(qResult.en_compression_ratio);
									$("input[name=PeakTorque]").val(qResult.en_peak_torque);
									$("input[name=DirectInjection]").val(qResult.en_direct_injection);
									$("input[name=FuelType]").val(qResult.en_fuel_type);
									
									$("input[name=Length]").val(qResult.dm_length);
									$("input[name=Height]").val(qResult.dm_height);
									$("input[name=Width]").val(qResult.dm_width);
									$("input[name=WheelBase]").val(qResult.dm_wheel_base);
									$("input[name=FrontThread]").val(qResult.dm_front_thread);
									$("input[name=RearThread]").val(qResult.dm_rear_thread);
									$("input[name=FuelTank]").val(qResult.dm_fuel_tank);
									
									$("input[name=FrontBrakes]").val(qResult.br_front);
									$("input[name=RearBrakes]").val(qResult.br_rear);
									
									$("input[name=FrontSuspension]").val(qResult.sus_front);
									$("input[name=RearSuspension]").val(qResult.sus_rear);
									
									$("input[name=FrontTyres]").val(qResult.tw_front);
									$("input[name=RearTyres]").val(qResult.tw_rear);
									$("input[name=FrontRims]").val(qResult.tw_front_rim);
									$("input[name=RearRims]").val(qResult.tw_rear_rim);
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
								label: "<?php echo $user->FirstName." ".$user->LastName." [ ID : ".sprintf('%06d', $user->ID)." ]";?>",
								images: "<?php echo $user->ProfilePic;?>",
								type: "<?php echo $user->Type;?>"
							});
						<?php endforeach;?>
						
						$('input[name=AssignUser]').autocomplete({
							source: UsersData,
							select: function (event, ui) {
								$("input[name=AssignUser]").val(ui.item.label); // display the selected text
								$("input[name=AssignUserID]").val(ui.item.id); // save selected id to hidden input
							}
						}).data("ui-autocomplete")._renderItem = function (ul, item) {
							var imgSrc = "";
								
							if(item.type == "1"){
								imgSrc = "<?php echo base_url();?>assets/img/profile/" + item.images;
							}else{
								imgSrc = item.images;
							}
						
							var inner_html = '<div><img width="30px" height="30px" src="' + imgSrc + '"> ' + item.label + '</div>';
							return $("<li></li>")
									.data("ui-autocomplete-item", item)
									.append(inner_html)
									.appendTo(ul);
						};

						$("#btnCreateUser").click(function () {
							var Email = $("#email").val();
							var Password = $("#password").val();
							var ConfirmPassword = $("#confirm_password").val();
							var Role = $("#selRole").val();
							var IsProceed = true;
							
							if(Password != ConfirmPassword){
								IsProceed = false;
								$(".err-pwd").show();
							}else{
								$(".err-pwd").hide();
							}
							if(Role == "0"){
								IsProceed = false;
								$(".err-role").show();
							}else{
								$(".err-role").hide();
							}
							
							if(IsProceed == true){
								var datastr = '{"mode":"CreateUser","EmailAddress":"'+Email+'","Password":"'+Password+'","Role":"'+Role+'"}';
								$.ajax({
									url: "<?php echo base_url();?>admin/ajax",
									type: "POST",
									data: {"datastr":datastr},
									success: function(data){
										if(data == "Account registered"){
											$(".err-email").hide();
											window.location = "<?php echo base_url();?>admin/userall";
										}else{
											$(".err-email").show();
										}
									}
								});								
							}
						});
					
						var input = (document.getElementById('Address'));
						var searchBox = new google.maps.places.SearchBox((input));
						
						google.maps.event.addListener(searchBox, 'places_changed', function() {
							var places = searchBox.getPlaces();

							var bounds = new google.maps.LatLngBounds();

							for (var i = 0, place; place = places[i]; i++) {
								$("#Latitude").val(place.geometry.location.lat());
								$("#Longitude").val(place.geometry.location.lng());
							}
						});
					});		
					function PublishAd(){
						event.preventDefault();
						if($("#hIsAdded").val() == "True"){
							var formData = new FormData($("#frmAddAd")[0]);
							$.ajax({
								url : '<?php echo base_url();?>admin/updatetopublish',
								type : 'POST',
								data : formData,
								processData: false,  // tell jQuery not to process the data
								contentType: false,  // tell jQuery not to set contentType
								success : function(data) {
									window.open("<?php echo base_url();?>listing/details/" + $("#hLID").val() + "/" + $("#hLAddedBy").val());
								}
							});
						}else{
							var formData = new FormData($("#frmAddAd")[0]);
							$.ajax({
								url : '<?php echo base_url();?>admin/publishlisting',
								type : 'POST',
								data : formData,
								processData: false,  // tell jQuery not to process the data
								contentType: false,  // tell jQuery not to set contentType
								success : function(data) {
									$("#hIsAdded").val("True");
									var splittedData = data.split("_");
									$("#hLID").val(splittedData[0]);
									$("#hLAddedBy").val(splittedData[1]);
									window.open("<?php echo base_url();?>listing/details/" + splittedData[0] + "/" + splittedData[1]);
								}
							});								
						}
					}	
					function PreviewAd(){
						event.preventDefault();
						if($("#hIsAdded").val() == "True"){
							window.open("<?php echo base_url();?>listing/details/" + $("#hLID").val() + "/" + $("#hLAddedBy").val());
						}else{
							var formData = new FormData($("#frmAddAd")[0]);
							$.ajax({
								url : '<?php echo base_url();?>admin/addlisting',
								type : 'POST',
								data : formData,
								processData: false,  // tell jQuery not to process the data
								contentType: false,  // tell jQuery not to set contentType
								success : function(data) {
									$("#hIsAdded").val("True");
									var splittedData = data.split("_");
									$("#hLID").val(splittedData[0]);
									$("#hLAddedBy").val(splittedData[1]);
									window.open("<?php echo base_url();?>listing/details/" + splittedData[0] + "/" + splittedData[1]);
								}
							});	
						}
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
                                            <span class="caption-subject font-dark bold uppercase">Add Advertisement</span>
                                        </div>
                                    </div>

                                    <div class="portlet-body form">

                                        <form id="frmAddAd" method="post" action="<?php echo base_url();?>admin/addlisting" enctype="multipart/form-data" class="form-horizontal" role="form">

                                            <div class="form-body">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Assign User</label>
                                                    <div class="col-md-10">
                                                        <input name="AssignUser" type="text" class="form-control" placeholder=" " />
                                                        <input name="AssignUserID" type="hidden" />
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Brand</label>
                                                    <div class="col-md-4">
                                                        <select name="selBrand" class="form-control">
															<option>Select a Brand</option>
															<?php foreach($brand as $eachbrand):?>
															<option><?php echo $eachbrand->car_brand;?></option>
															<?php endforeach;?>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Model</label>
                                                    <div class="col-md-4">
                                                        <select name="selModel" class="form-control">
                                                            <option>Select a Model</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Year</label>
                                                    <div class="col-md-4">
                                                        <select name="selYear" class="form-control">
                                                            <option>Select a Year</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <select name="selTransmission" class="form-control">
                                                            <option>Select a Transmission</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Specification</label>
                                                    <div class="col-md-4">
                                                        <select name="selSpecification" class="form-control">
                                                            <option>Select a Specification</option>
                                                        </select>
                                                    </div>
                                                    <label class="col-md-2 control-label">Condition</label>
                                                    <div class="col-md-4">
                                                        <select name="selCondition" class="form-control">
                                                            <option>Select a Condition</option>
                                                            <option>Used</option>
                                                            <option>New</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mileage</label>
                                                    <div class="col-md-4">
                                                        <select name="selMileage" class="form-control">
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
                                                        <input name="SellingPrice" type="number" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">

                                                  <label class="col-md-2 control-label">State</label>
                                                  <div class="col-md-4">
                                                    <select name="selState" class="form-control">
                                                        <option value="">Select a State</option>
														<?php foreach($state as $eachState):?>
														<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
														<?php endforeach;?>
                                                    </select>
                                                  </div>
                                                  <label class="col-md-2 control-label">Address</label>
                                                  <div class="col-md-4">
                                                      <input id="Address" name="Address" type="text" class="form-control" placeholder=" ">
													  <input type="hidden" id="Latitude" name="Latitude" />
													  <input type="hidden" id="Longitude" name="Longitude" />
                                                  </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea name="Description" class="form-control" rows="8"></textarea>
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
                                                        <input name="Brand" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Category</label>
                                                    <div class="col-md-4">
                                                        <input name="Category" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Model</label>
                                                    <div class="col-md-4">
                                                        <input name="Model" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Specification</label>
                                                    <div class="col-md-4">
                                                        <input name="Specification" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Year</label>
                                                    <div class="col-md-4">
                                                        <input name="Year" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Engine CC</label>
                                                    <div class="col-md-4">
                                                        <input name="GDEngineCC" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <input name="GDTransmission" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Seat Capacity</label>
                                                    <div class="col-md-4">
                                                        <input name="SeatCapacity" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Mileage (km)</label>
                                                    <div class="col-md-4">
                                                        <input name="Mileage" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Colour</label>
                                                    <div class="col-md-4">
                                                        <input name="Colour" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Doors</label>
                                                    <div class="col-md-4">
                                                        <input name="Doors" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Assembled</label>
                                                    <div class="col-md-4">
                                                        <input name="Assembled" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Transmission</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Transmission</label>
                                                    <div class="col-md-4">
                                                        <input name="TTransmission" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Final Drive Ratio</label>
                                                    <div class="col-md-4">
                                                        <input name="FinalDriveRatio" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">No. of Gears</label>
                                                    <div class="col-md-4">
                                                        <input name="NoofGears" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Engine Specifications</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Engine CC</label>
                                                    <div class="col-md-4">
                                                        <input name="ESEngineCC" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Stroke (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="Stroke" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Peak Power (hp)</label>
                                                    <div class="col-md-4">
                                                        <input name="PeakPower" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Engine Type</label>
                                                    <div class="col-md-4">
                                                        <input name="EngineType" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Aspiration</label>
                                                    <div class="col-md-4">
                                                        <input name="Aspiration" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Bore (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="Bore" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Compression Ratio</label>
                                                    <div class="col-md-4">
                                                        <input name="CompressionRatio" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Peak Torque (Nm)</label>
                                                    <div class="col-md-4">
                                                        <input name="PeakTorque" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Direct Injection</label>
                                                    <div class="col-md-4">
                                                        <input name="DirectInjection" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Fuel Type</label>
                                                    <div class="col-md-4">
                                                        <input name="FuelType" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Dimensions & Weight</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Length (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="Length" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Height (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="Height" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Width (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="Width" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Wheel Base (mm)</label>
                                                    <div class="col-md-4">
                                                        <input name="WheelBase" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Thread</label>
                                                    <div class="col-md-4">
                                                        <input name="FrontThread" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Thread</label>
                                                    <div class="col-md-4">
                                                        <input name="RearThread" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Fuel Tank (litres)</label>
                                                    <div class="col-md-4">
                                                        <input name="FuelTank" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Brakes</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Brakes</label>
                                                    <div class="col-md-4">
                                                        <input name="FrontBrakes" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Brakes</label>
                                                    <div class="col-md-4">
                                                        <input name="RearBrakes" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Suspensions</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Suspension</label>
                                                    <div class="col-md-4">
                                                        <input name="FrontSuspension" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Suspension</label>
                                                    <div class="col-md-4">
                                                        <input name="RearSuspension" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <hr>
                                                <h4>Tyres & Wheels</h4>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Tyres</label>
                                                    <div class="col-md-4">
                                                        <input name="FrontTyres" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Tyres</label>
                                                    <div class="col-md-4">
                                                        <input name="RearTyres" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Front Rims</label>
                                                    <div class="col-md-4">
                                                        <input name="FrontRims" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                    <label class="col-md-2 control-label">Rear Rims</label>
                                                    <div class="col-md-4">
                                                        <input name="RearRims" type="text" class="form-control" placeholder=" ">
                                                    </div>
                                                </div>

                                            </div>

                                                <div class="row">
                                                    <div class="col-md-offset-3 col-md-9">
														<input type="hidden" id="hIsAdded" name="hIsAdded" />
														<input type="hidden" id="hLID" name="hLID" />
														<input type="hidden" id="hLAddedBy" name="hLAddedBy" />
                                                        <button type="submit" class="btn green" onclick="PreviewAd();">Preview</button>
                                                        <button type="submit" class="btn green" onclick="PublishAd();">Publish</button>
                                                        <button type="button" class="btn default" onclick="window.location.href = '<?php echo base_url();?>admin'">Cancel</button>
                                                    </div>
                                                </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->