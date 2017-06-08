				<script>
					$(document).ready(function(){
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
                                      <form class="form-horizontal" onsubmit="event.preventDefault();">
                                          <div class="form-body">
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Email Address</label>
                                                  <div class="col-md-4">
                                                      <div class="input-group">
                                                          <span class="input-group-addon">
                                                              <i class="fa fa-envelope"></i>
                                                          </span>
                                                          <input id="email" type="email" class="form-control" placeholder="Email Address"> </div>
                                                          <span class="help-block font-red-mint err-email" style="display:none;"> Email already exist. Please use a different email. </span>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Password</label>
                                                  <div class="col-md-4">
                                                      <div class="input-group">
                                                          <span class="input-group-addon">
                                                              <i class="fa fa-user"></i>
                                                          </span>
                                                          <input id="password" type="password" class="form-control" placeholder="Password">
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="form-group">
                                                  <label class="col-md-3 control-label">Confirm Password</label>
                                                  <div class="col-md-4">
                                                      <div class="input-group">
                                                          <span class="input-group-addon">
                                                              <i class="fa fa-user"></i>
                                                          </span>
                                                          <input id="confirm_password" type="password" class="form-control" placeholder="Password"> </div>
                                                          <span class="help-block font-red-mint err-pwd" style="display:none;"> Password does not match. </span>
                                                  </div>
                                              </div>
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
                                          </div>
                                          <div class="form-actions">
                                              <div class="row">
                                                  <div class="col-md-offset-3 col-md-4">
                                                      <button id="btnCreateUser" type="submit" class="btn green btn-outline">Create User</button>
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