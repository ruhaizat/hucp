
<style>
				#dataTableUser_filter
				{
					display:none;
				}
				</style>
				<script>					
					$(document).ready(function(){
						$('#iExport').click(function(){
							window.location.href = "exportUser";
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
                                            <span class="caption-subject font-dark bold uppercase">User Import / Export</span>
                                        </div>
                                    </div>
                                    <div class="form-body">
										<div class="form-body">
											<input id="iExport" type="button" class="btn green" value="Export CSV" />
											<br/>
											<br/>
											<br/>
											<form method="post" enctype="multipart/form-data" action="importUser">
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->