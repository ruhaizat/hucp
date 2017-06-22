				<style>
				#dataTableAd_filter
				{
					display:none;
				}
				</style>
				<script>
					function AdDelete(id){
						swal({
							title: "Are you sure you want to delete this advertisement?",
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
									var datastr = '{"mode":"DeleteAd","id":"'+id+'"}';
									$.ajax({
										url: "<?php echo base_url();?>admin/ajax",
										type: "POST",
										data: {"datastr":datastr}
									});

									swal({
										title: "Selected advertisement has been deleted!",
										text: "",
										type: "success"
										},
										function(){
											window.location.replace("<?php echo base_url();?>admin/adall");
									});
								}
							}
						);						
					}
					function AdReject(id){
						swal({
							title: "Are you sure you want to reject this advertisement?",
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
									var datastr = '{"mode":"RejectAd","id":"'+id+'"}';
									$.ajax({
										url: "<?php echo base_url();?>admin/ajax",
										type: "POST",
										data: {"datastr":datastr}
									});

									swal({
										title: "Selected advertisement has been rejected!",
										text: "",
										type: "success"
										},
										function(){
											window.location.replace("<?php echo base_url();?>admin/adall");
									});
								}
							}
						);						
					}
					
					function AdEdit(id,addedBy){
						window.location.href = "<?php echo base_url();?>admin/adedit/" + id + "/" + addedBy;
					}
					function AdPreview(id,addedBy){
						window.open("<?php echo base_url();?>listing/details/" + id + "/" + addedBy, "_blank");
					}
					
					$(document).ready(function(){
						var table = $('#dataTableAd').DataTable();
						
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
                                            <span class="caption-subject font-dark bold uppercase">All Advertisement</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group">
                                                <a class="btn btn-sm dark dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Filter
                                                    <i class="fa fa-angle-down"></i>
                                                </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a class="aFilter" href="javascript:;">All</a>
                                                    </li>
                                                    <li>
                                                        <a class="aFilter" href="javascript:;">On-going</a>
                                                    </li>
                                                    <li>
                                                        <a class="aFilter" href="javascript:;">Featured</a>
                                                    </li>
                                                    <li>
                                                        <a class="aFilter" href="javascript:;">Expired</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input id="txtSearch" type="text" class="form-control" placeholder="Search advertisement title or user's name"> </div>
                                            </div>
                                        </div>

                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table id="dataTableAd">
													<thead>
														<tr>
															<th></th>
															<th>Model</th>
															<th>ID#</th>
															<th>Status</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($listings as $listing): ?>
														<tr>
															<td>
																<img width="41px" height="41px" <?php if($listing->Type == 2):echo "src='".$listing->ProfilePic."'";else: echo "src='../assets/img/profile/".$listing->ProfilePic."'";endif;?> />
															</td>
															<td>
																<a href="<?php echo base_url().'listing/details/'.$listing->LID.'/'.$listing->LAB;?>" target="_blank"><span class="mt-action-author"><?php echo $listing->ManufacturingYear." ".$listing->Brand." ".$listing->MName;?></span></a>
                                                                <p class="mt-action-desc">submitted by <a href="<?php echo base_url().'user/index/'.$listing->LAB;?>"><?php echo $listing->FirstName;?></a></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo sprintf('%06d', $listing->LID);?></p>
															</td>
															<td>
																<?php if($listing->LS == 1):echo "<p class='mt-action-desc'>On-going</p>";elseif($listing->LS == 2):echo"<p class='mt-action-desc font-blue'>Expired</p>";elseif($listing->LS == 3):echo"<p class='mt-action-desc font-red-mint'>Rejected</p>";endif;?>
															</td>
															<td>
																<div class="btn-group btn-group-circle">
																	<button type="button" class="btn btn-outline dark btn-sm" onclick="AdPreview(<?php echo $listing->LID.','.$listing->LAB;?>)">Preview</button>
																	<button type="button" class="btn btn-outline dark btn-sm" onclick="AdEdit(<?php echo $listing->LID.','.$listing->LAB;?>)">Edit</button>
																	<button class="btn btn-outline red btn-sm mt-sweetalert" onclick="AdDelete(<?php echo $listing->LID;?>)">Delete</button>
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