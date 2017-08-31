
<style>
				#dataTableUser_filter
				{
					display:none;
				}
				</style>
				<script>
					function UserDelete(id){
						swal({
							title: "Are you sure you want to delete this user?",
							text: "",
							type: "error",
							showCancelButton: true,
							confirmButtonClass: "btn-info",
							confirmButtonText: "Yes",
							cancelButtonClass: "btn-danger",
							cancelButtonText: "No",
							closeOnConfirm: false,
							allowOutsideClick: true
							},
							function(isConfirm) {
								if (isConfirm) {
									var datastr = '{"mode":"DeleteUser","id":"'+id+'"}';
									$.ajax({
										url: "<?php echo base_url();?>admin/ajax",
										type: "POST",
										data: {"datastr":datastr}
									});

									swal({
										title: "Selected user has been deleted!",
										text: "",
										type: "success"
										},
										function(){
											window.location.replace("<?php echo base_url();?>admin/userall");
									});
								}
							}
						);						
					}
					
					function UserEdit(id){
						window.location.replace("<?php echo base_url();?>user/index/" + id);
					}
					
					function OptChange(elem,id){
						if($(elem).is(':checked')){
							var datastr = '{"mode":"OptInAgain","SubscriberID":"'+id+'"}';
							$.ajax({
								url: "<?php echo base_url();?>main/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									
								}
							});
						}else{
							var datastr = '{"mode":"OptOut","SubscriberID":"'+id+'"}';
							$.ajax({
								url: "<?php echo base_url();?>main/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									
								}
							});							
						}

					}
					
					$(document).ready(function(){
						$("[name=chkToggle]").bootstrapSwitch({size:'mini'});
						var table = $('#dataTableUser').DataTable();
						
						$('#txtSearch').keyup( function() {
							table.search($(this).val()).draw() ;
						} );
						$('.aFilter').click( function() { 
							if($(this).text() == "All"){
								table
									.columns(1)
									.search("")
									.draw();				
							}else{
								table
									.columns(1)
									.search($(this).text())
									.draw();
							}
						});
						$('#iExport').click(function(){
							window.location.href = "exportSubscriber";
						});
					});
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Subscribers
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Subscriber Listing</span>
                                        </div>
                                    </div>

                                        <div class="form-body">
											<div class="form-body">
												<input id="iExport" type="button" class="btn green" value="Export CSV" />
												<br/>
												<br/>
												<br/>
												<form method="post" enctype="multipart/form-data" action="importSubscriber">
													<input type="file" name="file" /><br />
													<input type="submit" class="btn green" value="Import (CSV)" />
												</form>
												<?php if ($upload_error): ?>
													<p class="notice">Invalid file</p>
												<?php endif; ?>
												<?php if ($upload_ok): ?>
													<p class="notice">
														<?php echo number_format($total_updates); ?> Record Updated. <?php echo number_format($total_new); ?> Record Added. 
													</p>
												<?php endif; ?>
											</div>
											<br/>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input id="txtSearch" type="text" class="form-control" placeholder="Search name, email address or subscribe date">
												</div>
                                            </div>
                                        </div>

                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table id="dataTableUser">
													<thead>
														<tr>
															<th>Name</th>
															<th>Email Address</th>
															<th>ID#</th>
															<th>Subscribe Since</th>
															<th>Status</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($users as $user): ?>
														<tr>
															<td>
																<?php echo $user->FirstName;?>
															</td>
															<td>
																<?php echo $user->EmailAddress;?>
															</td>
															<td>
																<?php echo sprintf('%06d', $user->ID);?>
															</td>
															<td>
																<?php echo date("j M Y", strtotime($user->AddedOn));?>
															</td>
															<td>
																<div class="btn-group btn-group-circle">
                                                                    <input type="checkbox" name="chkToggle" <?php if($user->IsSubscribe == 1):echo 'checked';endif;?> onchange="OptChange(this,<?php echo $user->ID;?>);" />
                                                                </div>
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