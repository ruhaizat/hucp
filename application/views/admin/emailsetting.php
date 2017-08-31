				<script>
					$(document).ready(function(){
						<?php foreach($emailsettings as $eachSetting):?>
							<?php if($eachSetting->Setting == "New Ads"):?>
								$("#NewAds").val("<?php echo $eachSetting->EmailAddress;?>");
							<?php elseif($eachSetting->Setting == "New User"):?>
								$("#NewUser").val("<?php echo $eachSetting->EmailAddress;?>");
							<?php elseif($eachSetting->Setting == "Contact Seller"):?>
								$("#ContactSeller").val("<?php echo $eachSetting->EmailAddress;?>");
							<?php elseif($eachSetting->Setting == "Report"):?>
								$("#Report").val("<?php echo $eachSetting->EmailAddress;?>");
							<?php endif;?>
						<?php endforeach;?>
					});		
					function SaveEmailSetting(){
						var NewAds = $("#NewAds").val();
						var NewUser = $("#NewUser").val();
						var ContactSeller = $("#ContactSeller").val();
						var Report = $("#Report").val();
						
						var datastr = '{"mode":"SaveEmailSetting","NewAds":"'+NewAds+'","NewUser":"'+NewUser+'","ContactSeller":"'+ContactSeller+'","Report":"'+Report+'"}';
						$.ajax({
							url: "<?php echo base_url();?>admin/ajax",
							type: "POST",
							data: {"datastr":datastr},
							success: function(data){
								swal({
									title: "Email setting successfully saved!",
									text: "",
									type: "success"
									});
							}
						});	
					}					
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Email Setting
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <span class="caption-subject font-dark bold uppercase">Update Email Address</span>
                                      </div>
                                  </div>
                                  <div class="portlet-body form">
                                      <!-- BEGIN FORM-->
                                      <form id="frmEmailSetting" action="#" class="form-horizontal">
                                          <div class="form-body">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">New Ads</label>
                                                <div class="col-md-4">
                                                    <input id="NewAds" type="email" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">New User</label>
                                                <div class="col-md-4">
                                                    <input id="NewUser" type="email" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Contact Seller</label>
                                                <div class="col-md-4">
                                                    <input id="ContactSeller" type="email" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Report</label>
                                                <div class="col-md-4">
                                                    <input id="Report" type="email" class="form-control" placeholder="">
                                                </div>
                                            </div>
                                          </div>
                                          <div class="form-actions">
                                              <div class="row">
                                                  <div class="col-md-offset-3 col-md-4">
                                                    <button id="btnSave" type="submit" class="btn green" onclick="event.preventDefault();SaveEmailSetting();">Save</button>
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