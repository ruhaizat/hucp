				<script>
					function AdApprove(id){
						swal({
							title: "Are you sure you want to approve this advertisement?",
							text: "",
							type: "success",
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
									var datastr = '{"mode":"ApproveAd","id":"'+id+'"}';
									$.ajax({
										url: "<?php echo base_url();?>admin/ajax",
										type: "POST",
										data: {"datastr":datastr}
									});

									swal({
										title: "Selected advertisement has been aprroved!",
										text: "",
										type: "success"
										},
										function(){
											window.location.replace("<?php echo base_url();?>admin");
									});
								}
							}
						);						
					}
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
											window.location.replace("<?php echo base_url();?>admin");
									});
								}
							}
						);						
					}
					
					function AdEdit(id,addedBy){
						window.location.replace("<?php echo base_url();?>listing/details/" + id + "/" + addedBy);
					}
					
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
											window.location.replace("<?php echo base_url();?>admin");
									});
								}
							}
						);						
					}
					
					function UserEdit(id){
						window.location.replace("<?php echo base_url();?>user/index/" + id);
					}
					
					function PAViewAll(){
						$(".clsHidePA").show();
					}
					
					function NUViewAll(){
						$(".clsHideNU").show();
					}
					
					$(document).ready(function(){
						if ($('#list_site_activities').size() != 0) {
							//site activities
							var previousPoint2 = null;
							$('#list_site_activities_loading').hide();
							$('#list_site_activities_content').show();

							var data1 = [
								<?php $i = 0;$len = count($listmonthstr); foreach($listmonthstr as $lmSTR):$i++;?>
									<?php if($i == $len - 1):?>
										<?php echo "['".$lmSTR."', ".$listmonthval[$i-1]."]";?>
									<?php else:?>
										<?php echo "['".$lmSTR."', ".$listmonthval[$i-1]."],";?>
									<?php endif;?>
								<?php endforeach;?>
							];


							var plot_statistics = $.plot($("#list_site_activities"),

								[{
									data: data1,
									lines: {
										fill: 0.2,
										lineWidth: 0,
									},
									color: ['#BAD9F5']
								}, {
									data: data1,
									points: {
										show: true,
										fill: true,
										radius: 4,
										fillColor: "#9ACAE6",
										lineWidth: 2
									},
									color: '#9ACAE6',
									shadowSize: 1
								}, {
									data: data1,
									lines: {
										show: true,
										fill: false,
										lineWidth: 3
									},
									color: '#9ACAE6',
									shadowSize: 0
								}],

								{

									xaxis: {
										tickLength: 0,
										tickDecimals: 0,
										mode: "categories",
										min: 0,
										font: {
											lineHeight: 18,
											style: "normal",
											variant: "small-caps",
											color: "#6F7B8A"
										}
									},
									yaxis: {
										ticks: 5,
										tickDecimals: 0,
										tickColor: "#eee",
										font: {
											lineHeight: 14,
											style: "normal",
											variant: "small-caps",
											color: "#6F7B8A"
										}
									},
									grid: {
										hoverable: true,
										clickable: true,
										tickColor: "#eee",
										borderColor: "#eee",
										borderWidth: 1
									}
								});

							$("#list_site_activities").bind("plothover", function(event, pos, item) {
								$("#x").text(pos.x.toFixed(2));
								$("#y").text(pos.y.toFixed(2));
								if (item) {
									if (previousPoint2 != item.dataIndex) {
										previousPoint2 = item.dataIndex;
										$("#tooltip").remove();
										var x = item.datapoint[0].toFixed(2),
											y = item.datapoint[1].toFixed(2);
										showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' New Ads');
									}
								}
							});

							$('#list_site_activities').bind("mouseleave", function() {
								$("#tooltip").remove();
							});
						}
						
						if ($('#user_site_activities').size() != 0) {
							//site activities
							var previousPoint2 = null;
							$('#user_site_activities_loading').hide();
							$('#user_site_activities_content').show();

							var data1 = [
								<?php $i = 0;$len = count($usermonthstr); foreach($usermonthstr as $umSTR):$i++;?>
									<?php if($i == $len - 1):?>
										<?php echo "['".$umSTR."', ".$usermonthval[$i-1]."]";?>
									<?php else:?>
										<?php echo "['".$umSTR."', ".$usermonthval[$i-1]."],";?>
									<?php endif;?>
								<?php endforeach;?>
							];


							var plot_statistics = $.plot($("#user_site_activities"),

								[{
									data: data1,
									lines: {
										fill: 0.2,
										lineWidth: 0,
									},
									color: ['#BAD9F5']
								}, {
									data: data1,
									points: {
										show: true,
										fill: true,
										radius: 4,
										fillColor: "#9ACAE6",
										lineWidth: 2
									},
									color: '#9ACAE6',
									shadowSize: 1
								}, {
									data: data1,
									lines: {
										show: true,
										fill: false,
										lineWidth: 3
									},
									color: '#9ACAE6',
									shadowSize: 0
								}],

								{

									xaxis: {
										tickLength: 0,
										tickDecimals: 0,
										mode: "categories",
										min: 0,
										font: {
											lineHeight: 18,
											style: "normal",
											variant: "small-caps",
											color: "#6F7B8A"
										}
									},
									yaxis: {
										ticks: 5,
										tickDecimals: 0,
										tickColor: "#eee",
										font: {
											lineHeight: 14,
											style: "normal",
											variant: "small-caps",
											color: "#6F7B8A"
										}
									},
									grid: {
										hoverable: true,
										clickable: true,
										tickColor: "#eee",
										borderColor: "#eee",
										borderWidth: 1
									}
								});

							$("#user_site_activities").bind("plothover", function(event, pos, item) {
								$("#x").text(pos.x.toFixed(2));
								$("#y").text(pos.y.toFixed(2));
								if (item) {
									if (previousPoint2 != item.dataIndex) {
										previousPoint2 = item.dataIndex;
										$("#tooltip").remove();
										var x = item.datapoint[0].toFixed(2),
											y = item.datapoint[1].toFixed(2);
										showChartTooltip(item.pageX, item.pageY, item.datapoint[0], item.datapoint[1] + ' New User');
									}
								}
							});

							$('#user_site_activities').bind("mouseleave", function() {
								$("#tooltip").remove();
							});
						}
					});			

					function showChartTooltip(x, y, xValue, yValue) {
						$('<div id="tooltip" class="chart-tooltip">' + yValue + '<\/div>').css({
							position: 'absolute',
							display: 'none',
							top: y - 40,
							left: x - 40,
							border: '0px solid #ccc',
							padding: '2px 6px',
							'background-color': '#fff'
						}).appendTo("body").fadeIn(200);
					}		
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-home"></i> Dashboard
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <!-- BEGIN DASHBOARD STATS 1-->
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 dark" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $ListingCount->LWeek;?>">0</span></div>
                                        <div class="desc"> New Advertisement This Week </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 dark" href="#">
                                    <div class="visual">
                                        <i class="fa fa-bar-chart-o"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $ListingCount->LTotal;?>"></span></div>
                                        <div class="desc"> Total Advertisement </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $UserCount->UWeek;?>">0</span>
                                        </div>
                                        <div class="desc"> New User This Week </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                <a class="dashboard-stat dashboard-stat-v2 blue" href="#">
                                    <div class="visual">
                                        <i class="fa fa-user"></i>
                                    </div>
                                    <div class="details">
                                        <div class="number">
                                            <span data-counter="counterup" data-value="<?php echo $UserCount->UTotal;?>">0</span>
                                        </div>
                                        <div class="desc"> Total User </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <!-- END DASHBOARD STATS 1-->
                        <div class="row">
                          <div class="col-lg-6 col-xs-12 col-sm-12">
                              <!-- BEGIN PORTLET-->
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <i class="icon-share font-red-sunglo hide"></i>
                                          <span class="caption-subject font-dark bold uppercase">Advertisement Created</span>
                                          <span class="caption-helper">monthly stats</span>
                                      </div>
                                  </div>
                                  <div class="portlet-body">
                                      <div id="list_site_activities_loading">
                                          <img src="assets/global/img/loading.gif" alt="loading" /> </div>
                                      <div id="list_site_activities_content" class="display-none">
                                          <div id="list_site_activities" style="height: 228px;"> </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- END PORTLET-->
                          </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <!-- BEGIN PORTLET-->
                                <div class="portlet light bordered">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="icon-share font-red-sunglo hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">User Sign Up</span>
                                            <span class="caption-helper">monthly stats</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div id="user_site_activities_loading">
                                            <img src="assets/global/img/loading.gif" alt="loading" /> </div>
                                        <div id="user_site_activities_content" class="display-none">
                                            <div id="user_site_activities" style="height: 228px;"> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END PORTLET-->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Pending Advertisement</span>
                                            <span class="caption-helper">Latest 10</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn dark btn-sm" onclick="PAViewAll();">
                                                <input type="radio" name="options" class="toggle" id="option2">View All</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<?php $i = 0; foreach($pendinglistings as $pendinglisting): $i++;?>
                                                <div class="mt-actions <?php if($i > $pendinglistingsview):echo "clsHidePA";endif;?>" <?php if($i > $pendinglistingsview):echo "style='display:none;'";endif;?>>
                                                    <div class="mt-action">
                                                        <div class="mt-action-img">
                                                            <img width="41px" height="41px" <?php if($pendinglisting->UType == 2):echo "src='".$pendinglisting->UPPic."'";else: echo "src='".base_url()."assets/img/profile/".$pendinglisting->UPPic."'";endif;?> />
														</div>
                                                        <div class="mt-action-body">
                                                            <div class="mt-action-row">
                                                                <div class="mt-action-info ">
                                                                    <div class="mt-action-details">
                                                                        <a href="<?php echo base_url().'listing/details/'.$pendinglisting->LID.'/'.$pendinglisting->LAB;?>" target="_blank"><span class="mt-action-author"><?php echo $pendinglisting->MName;?></span></a>
                                                                        <p class="mt-action-desc">submitted by <?php echo $pendinglisting->UFName;?></p>
                                                                    </div>
                                                                </div>
                                                                <div class="mt-action-buttons">
                                                                    <div class="btn-group btn-group-circle">
																		<button class="btn btn-outline dark btn-sm" onclick="AdEdit(<?php echo $pendinglisting->LID.','.$pendinglisting->LAB;?>)">Preview</button>
																		<button class="btn btn-outline green btn-sm" onclick="AdApprove(<?php echo $pendinglisting->LID;?>)">Approve</button>
																		<button class="btn btn-outline red btn-sm" onclick="AdDelete(<?php echo $pendinglisting->LID;?>)">Reject</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												<?php endforeach;?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">New Sign Ups</span>
                                            <span class="caption-helper">Latest 10</span>
                                        </div>
                                        <div class="actions">
                                            <div class="btn-group btn-group-devided" data-toggle="buttons">
                                                <label class="btn blue btn-sm" onclick="NUViewAll();">
                                                    <input type="radio" name="options" class="toggle" id="option2">View All</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<?php $i = 0; foreach($newusers as $newuser): $i++;?>
												<div class="mt-actions <?php if($i > $newusersview):echo "clsHideNU";endif;?>" <?php if($i > $newusersview):echo "style='display:none;'";endif;?>>
													<div class="mt-action">
														<div class="mt-action-img">
															<img width="41px" height="41px" <?php if($newuser->Type == 2):echo "src='".$newuser->ProfilePic."'";else: echo "src='".base_url()."assets/img/profile/".$newuser->ProfilePic."'";endif;?> /> </div>
														<div class="mt-action-body">
															<div class="mt-action-row">
																<div class="mt-action-info ">
																	<div class="mt-action-details">
																		<a href="<?php echo base_url().'user/index/'.$newuser->ID;?>" target="_blank"><span class="mt-action-author"><?php echo $newuser->FirstName;?></span></a>
																		<p class="mt-action-desc">signed up on <?php echo date("j M Y", strtotime($newuser->AddedOn));?></p>
																	</div>
																</div>
																<div class="mt-action-buttons">
																	<div class="btn-group btn-group-circle">
																		<button type="button" class="btn btn-outline dark btn-sm" onclick="UserEdit(<?php echo $newuser->ID;?>)">Preview</button>
																		<button type="button" class="btn btn-outline dark btn-sm" onclick="UserEdit(<?php echo $newuser->ID;?>)">Edit</button>
																		<button type="button" class="btn btn-outline red btn-sm" onclick="UserDelete(<?php echo $newuser->ID;?>)">Delete</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<?php endforeach;?>
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