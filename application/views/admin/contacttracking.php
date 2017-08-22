				<style>
				#dataTableUser_filter
				{
					display:none;
				}
				</style>
				<script>					
					$(document).ready(function(){
						var table = $('#dataTableUser').DataTable();
						
						$('#txtSearch').keyup( function() {
							table.search($(this).val()).draw() ;
						} );
					});
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Contact Tracking
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Contact Tracking Listing</span>
                                        </div>
                                    </div>

                                        <div class="form-body">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-search"></i>
                                                    </span>
                                                    <input id="txtSearch" type="text" class="form-control" placeholder="Search name, message, or timestamp"> </div>
                                            </div>
                                        </div>

                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table id="dataTableUser">
													<thead>
														<tr>
															<th>From</th>
															<th>To</th>
															<th>Message</th>
															<th>Timestamp</th>
															<th>Advertisement</th>
														</tr>
													</thead>
													<tbody>
														<?php foreach($contacttrackings as $ctdata): ?>
														<tr>
															<td>
																<p class="mt-action-desc"><?php echo $ctdata->FromName;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo $ctdata->ToName;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo $ctdata->Message;?></p>
															</td>
															<td>
																<p class="mt-action-desc"><?php echo date("j M Y H:i A", strtotime($ctdata->SentOn));?></p>
															</td>
															<td>
																<div class="btn-group btn-group-circle">
                                                                    <button type="button" class="btn btn-outline blue btn-sm" onclick="window.location.href='<?php echo base_url();?>listing/details/<?php echo $ctdata->AdsID;?>/<?php echo $ctdata->SellerID;?>'">Preview</button>
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