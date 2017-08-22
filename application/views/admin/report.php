				<style>
				#dataTableUser_filter
				{
					display:none;
				}
				</style>
				<script>					
					$(document).ready(function(){
						$("[name=chkToggle]").bootstrapSwitch({size:'mini'});
						var table = $('#dataTableUser').DataTable();
						
						$('#txtSearch').keyup( function() {
							table.search($(this).val()).draw() ;
						} );
					});
					function OptChange(elem,id){
						if($(elem).is(':checked')){
							var datastr = '{"mode":"ReportStatus","ReportID":"'+id+'","Status":"1"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									
								}
							});
						}else{
							var datastr = '{"mode":"ReportStatus","ReportID":"'+id+'","Status":"0"}';
							$.ajax({
								url: "<?php echo base_url();?>admin/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									
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
                        <h1 class="page-title"> <i class="icon-user"></i> Reports
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Report Listing</span>
                                        </div>
                                    </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input id="txtSearch" type="text" class="form-control" placeholder="Search name, email, telephone, message, or timestamp"> </div>
                                            </div>
                                        </div>

                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table id="dataTableUser">
													<thead>
														<tr>
															<th>Name</th>
															<th>Email</th>
															<th>Telephone</th>
															<th>Message</th>
															<th>Timestamp</th>
															<th>Advertisement</th>
															<th>Attended</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($reports as $reportData): ?>
														<tr>
															<td>
																<p class="mt-action-desc"><?php echo $reportData->Name;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo $reportData->EmailAddress;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo $reportData->Telephone;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo $reportData->Message;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo date("j M Y H:i A", strtotime($reportData->SentOn));?></p>
															</td>
															<td>
																<div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline blue btn-sm" onclick="window.location.href='<?php echo base_url();?>listing/details/<?php echo $reportData->AdsID;?>/<?php echo $reportData->SellerID;?>'">Preview</button>
                                                                </div>
															</td>
															<td>
                                                                    <input data-on-text="Yes" data-off-text="No" type="checkbox" name="chkToggle" <?php if($reportData->Status == 1):echo 'checked';endif;?> onchange="OptChange(this,<?php echo $reportData->ID;?>);" />
															</td>
														</tr>
														<?php endforeach;?>
													</tbody>
												</table>
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