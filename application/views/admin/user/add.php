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
						$("#frmUserAdd").submit(function(){
								event.preventDefault();
							var Role = $("#selRole").val();
							var FirstName = $("#FirstName").val();
							var LastName = $("#LastName").val();
							var Email = $("#email").val();
							var MobileNo = $("#MobileNo").val();
							var ICNo = $("#ICNo").val();
							var State = $("#selState").val();
							var Address = $("#Address").val();
							var Password = $("#password").val();
							var ConfirmPassword = $("#confirm_password").val();
							var IsProceed = true;
							
							if(Role == "0"){
								IsProceed = false;
								$(".err-role").show();
							}else{
								$(".err-role").hide();
							}
							if(FirstName == ""){
								IsProceed = false;
								$(".err-fname").show();
							}else{
								$(".err-fname").hide();
							}
							if(LastName == ""){
								IsProceed = false;
								$(".err-lname").show();
							}else{
								$(".err-lname").hide();
							}
							if(State == "0"){
								IsProceed = false;
								$(".err-state").show();
							}else{
								$(".err-state").hide();
							}
							if(Password == ""){
								IsProceed = false;
								$(".err-pwd-empty").show();
							}else{
								$(".err-pwd-empty").hide();
							}
							if(Password != ConfirmPassword){
								IsProceed = false;
								$(".err-pwd").show();
							}else{
								$(".err-pwd").hide();
							}
							
							if(IsProceed == true){
								var datastr = '{"mode":"CreateUser","Role":"'+Role+'","FirstName":"'+FirstName+'","LastName":"'+LastName+'","EmailAddress":"'+Email+'","MobileNo":"'+MobileNo+'","ICNo":"'+ICNo+'","State":"'+State+'","Address":"'+Address+'","Password":"'+Password+'"}';
								$.ajax({
									url: "<?php echo base_url();?>admin/ajax",
									type: "POST",
									data: {"datastr":datastr},
									success: function(data){
										var aResult = data.split("|");
										if(aResult[0] == "Account registered"){
											if($('input[name=userfile]')[0].files[0] != undefined){
												var formData = new FormData();
											
												alert($('input[name=userfile]')[0].files[0]);
												formData.append('file', $('input[name=userfile]')[0].files[0]);
												$.ajax({
													url : '<?php echo base_url();?>user/upload/update',
													type : 'POST',
													data : formData,
													processData: false,  // tell jQuery not to process the data
													contentType: false,  // tell jQuery not to set contentType
													success : function(data) {
														alert(data);
														var datastr = '{"mode":"UpdateUserImage","UserID":"'+aResult[1]+'","ProfilePic":"'+data+'"}';
														$.ajax({
															url: "<?php echo base_url();?>admin/ajax",
															type: "POST",
															data: {"datastr":datastr},
															success: function(data){
																$(".err-email").hide();
																window.location = "<?php echo base_url();?>admin/userall";
															}
														});
													}
												});	
											}else{
												$(".err-email").hide();
												window.location = "<?php echo base_url();?>admin/userall";
											}
										}else{
											$(".err-email").show();
										}
									}
								});							
							}
						});
					});			
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Users
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <span class="caption-subject font-dark bold uppercase">Add User</span>
                                      </div>
                                  </div>
                                  <div class="portlet-body form">
                                      <!-- BEGIN FORM-->
                                      <form id="frmUserAdd" action="#" class="form-horizontal">
                                          <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Role</label>
                                                <div class="col-md-4">
                                                    <select id="selRole" class="form-control">
                                                        <option value="0">Select a role</option>
                                                        <option value="1">Administrator</option>
                                                        <option value="2">Basic Member</option>
                                                    </select>
                                                    <span class="help-block font-red-mint err-role" style="display:none;"> You must select a role. </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Profile Image</label>
                                                <div class="col-md-4">
												<div class="file-upload-previews"></div>
												<div class="file-upload">
													<input id="userfile" type="file" name="userfile" class="file-upload-input with-preview" title="Click to add files" maxlength="10" accept="gif|jpg|png" style="margin-top: 0; width: 500px;">
													<span>
													Drop files here or click to upload
													<p> Can only upload 1 image. </p>
													</span>
                                                    
												</div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">First Name</label>
                                                <div class="col-md-4">
                                                        <input id="FirstName" type="text" class="form-control" placeholder="">
                                                        <span class="help-block font-red-mint err-fname" style="display:none;"> Please insert a first name. </span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Last Name</label>
                                                <div class="col-md-4">
                                                        <input id="LastName" type="text" class="form-control" placeholder="">
                                                        <span class="help-block font-red-mint err-lname" style="display:none;"> Please insert a last name. </span>
                                                </div>
                                            </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Email Address</label>
                                                  <div class="col-md-4">
                                                          <input id="email" type="email" class="form-control" placeholder="">
                                                          <span class="help-block font-red-mint err-email" style="display:none;"> Email already exist. Please use a different email. </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Phone No.</label>
                                                  <div class="col-md-4">
                                                      <div class="input-group">
                                                          <input id="MobileNo" type="text" class="form-control" value="+60" placeholder=""></div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Identity Card No.</label>
                                                  <div class="col-md-4">
                                                          <input id="ICNo" type="text" class="form-control" value="" placeholder="">
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">State</label>
                                                  <div class="col-md-4">
                                                      <select id="selState" class="form-control">
                                                          <option>Select a state</option>
                                                          <option>Kuala Lumpur</option>
                                                          <option>Selangor</option>
                                                      </select>
                                                      <span class="help-block font-red-mint err-state" style="display:none;"> Please select a state. </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Address</label>
                                                  <div class="col-md-4">
                                                          <input id="Address" type="text" class="form-control" placeholder=" ">
                                                  </div>
                                              </div>


                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Password</label>
                                                  <div class="col-md-4">
                                                          <input id="password" type="password" class="form-control" placeholder="Password">
                                                          <span class="help-block font-red-mint err-pwd-empty" style="display:none;"> Please insert a password. </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Confirm Password</label>
                                                  <div class="col-md-4">
                                                          <input id="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
                                                          <span class="help-block font-red-mint err-pwd" style="display:none;"> Password does not match. </span>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="form-actions">
                                              <div class="row">
                                                  <div class="col-md-offset-3 col-md-4">
                                                    <button id="btnSaveUser" type="submit" class="btn green">Save</button>
                                                    <button id="btnAddUser" type="submit" class="btn green">Add User</button>
                                                    <button id="btnCancelUser" type="button" class="btn default">Cancel</button>
                                                  </div>
                                              </div>
                                          </div>
                                      </form>
                                      <!-- END FORM-->
                                  </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->