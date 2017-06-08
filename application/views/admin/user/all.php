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
					
					$(document).ready(function(){
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
                        <h1 class="page-title"> <i class="icon-user"></i> Users
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">User Listing</span>
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
                                                        <a class="aFilter" href="javascript:;">Administrator</a>
                                                    </li>
                                                    <li>
                                                        <a class="aFilter" href="javascript:;">Basic Members</a>
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
												<table id="dataTableUser">
													<thead>
														<tr>
															<th></th>
															<th>Name</th>
															<th>ID#</th>
															<th>Member Since</th>
															<th></th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($users as $user): ?>
														<tr>
															<td>
																<img width="41px" height="41px" <?php if($user->Type == 2):echo "src='".$user->ProfilePic."'";else: echo "src='../assets/img/profile/".$user->ProfilePic."'";endif;?> />
															</td>
															<td>
																<a href="<?php echo base_url().'user/index/'.$user->ID;?>" target="_blank"><span class="mt-action-author"><?php echo $user->FirstName;?></span></a>
                                                                <p class="mt-action-desc"><?php if($user->Group == 1): echo "Administrator"; elseif($user->Group == 2): echo "Basic Members"; endif;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo sprintf('%06d', $user->ID);?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo date("j M Y", strtotime($user->AddedOn));?></p>
															</td>
															<td>
																<div class="btn-group btn-group-circle">
                                                                        <button type="button" class="btn btn-outline dark btn-sm" onclick="UserEdit(<?php echo $user->ID;?>)">Preview</button>
                                                                        <button type="button" class="btn btn-outline dark btn-sm" onclick="UserEdit(<?php echo $user->ID;?>)">Edit</button>
                                                                        <button class="btn btn-outline red btn-sm mt-sweetalert" onclick="UserDelete(<?php echo $user->ID;?>)">Delete</button>
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