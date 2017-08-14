
<style>
				#dataTableUser_filter
				{
					display:none;
				}
				</style>
				<script>
					function NewsletterDelete(id){
						swal({
							title: "Are you sure you want to delete this newsletter?",
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
									var datastr = '{"mode":"DeleteNewsletter","id":"'+id+'"}';
									$.ajax({
										url: "<?php echo base_url();?>admin/ajax",
										type: "POST",
										data: {"datastr":datastr}
									});

									swal({
										title: "Selected newsletter has been deleted!",
										text: "",
										type: "success"
										},
										function(){
											window.location.replace("<?php echo base_url();?>admin/newsletterall");
									});
								}
							}
						);						
					}
					
					function NewsletterEdit(id){
						window.location.replace("<?php echo base_url();?>admin/newsletteredit/" + id);
					}
					
					function NewsletterSendToSubscribers(id){
						var datastr = '{"mode":"NewsletterSendToSubscribers","id":"'+id+'"}';
						$.ajax({
							url: "<?php echo base_url();?>admin/ajax",
							type: "POST",
							data: {"datastr":datastr},
							success: function(data){
								swal({
									title: "Selected newsletter successfully sent!",
									text: "",
									type: "success"
									},
									function(){
										window.location.replace("<?php echo base_url();?>admin/newsletterall");
								});
							}
						});
					}
					
					function OptChange(elem,id){
						if($(elem).is(':checked')){
							var datastr = '{"mode":"NewsletterOptInAgain","NewsletterID":"'+id+'"}';
							$.ajax({
								url: "<?php echo base_url();?>main/ajax",
								type: "POST",
								data: {"datastr":datastr},
								success: function(data){
									
								}
							});
						}else{
							var datastr = '{"mode":"NewsletterOptOut","NewsletterID":"'+id+'"}';
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
					});
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Newsletters
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Newsletter Listing</span>
                                        </div>
                                    </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input id="txtSearch" type="text" class="form-control" placeholder="Search newsletter subject"> </div>
                                            </div>
                                        </div>

                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table id="dataTableUser">
													<thead>
														<tr>
															<th>Subject</th>
															<th>Added On</th>
															<!--<th>Status</th>-->
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($newsletters as $newsletter): ?>
														<tr>
															<td>
																<?php echo $newsletter->Subject;?>
															</td>
															<td>
																<?php echo date("j M Y", strtotime($newsletter->AddedOn));?>
															</td>
															<!--<td>
																<div class="btn-group btn-group-circle">
                                                                    <input type="checkbox" name="chkToggle" <?php if($newsletter->Status == 1):echo 'checked';endif;?> onchange="OptChange(this,<?php echo $newsletter->ID;?>);" />
                                                                </div>
															</td>-->
															<td>
																<div class="btn-group btn-group-circle">
                                                                        <button type="button" class="btn btn-outline blue btn-sm" onclick="NewsletterSendToSubscribers(<?php echo $newsletter->ID;?>)">Send to Subscribers</button>
                                                                        <button type="button" class="btn btn-outline dark btn-sm" onclick="NewsletterEdit(<?php echo $newsletter->ID;?>)">Edit</button>
                                                                        <button class="btn btn-outline red btn-sm mt-sweetalert" onclick="NewsletterDelete(<?php echo $newsletter->ID;?>)">Delete</button>
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