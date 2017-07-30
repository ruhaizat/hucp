				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				<script type="text/javascript">
				  google.charts.load('current', {'packages':['corechart']});
				  google.charts.setOnLoadCallback(drawChart);

				  function drawChart() {

					var dataStatus = google.visualization.arrayToDataTable([
						['User Status', 'Total User'],
						['New', <?php echo $new->val;?>],
						['Email Verified', <?php echo $emailverified->val;?>],
						['Deleted', <?php echo $deleted->val;?>]
					]);

					var optionsStatus = {
						title: 'User by Status',
						is3D: true,
						sliceVisibilityThreshold:0
					};

					var chartStatus = new google.visualization.PieChart(document.getElementById('chartStatus'));
					chartStatus.draw(dataStatus, optionsStatus);
					

					var dataType = google.visualization.arrayToDataTable([
					  ['User Group', 'Total User'],
					  ['Admin', <?php echo $admin->val;?>],
					  ['User', <?php echo $user->val;?>]
					]);

					var optionsType = {
						title: 'User by Group',
						is3D: true,
						sliceVisibilityThreshold:0
					};

					var chartType = new google.visualization.PieChart(document.getElementById('chartType'));
					chartType.draw(dataType, optionsType);
					
					var dataViewed = new google.visualization.DataTable();
					dataViewed.addColumn('date', 'Time of Day');
					dataViewed.addColumn('number', 'Total');
					<?php foreach($useradded as $ua):?>
					dataViewed.addRow([new Date(<?php echo $ua['year'];?>, <?php echo (int)$ua['month']-1;?>, <?php echo $ua['day'];?>), <?php echo $ua['val'];?>]);
					<?php endforeach;?>
					var optionsViewed = {
						title: 'Total New User',
						is3D: true,
						sliceVisibilityThreshold:0,
						hAxis: {
							format: 'd MMM yy',
							gridlines: {count: 15}
						}
					};

					var chartViewed = new google.visualization.LineChart(document.getElementById('chartViewed'));
					chartViewed.draw(dataViewed, optionsViewed);
				  }
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-user"></i> Statistic
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Daily User Statistic</span>
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tab_actions_pending">
												<table>
													<tr>
														<td>
															<div id="chartStatus" style="width: 525px; height: 500px;"></div>
														</td>
														<td>
															<div id="chartType" style="width: 525px; height: 500px;"></div>
														</td>
													</tr>
													<tr>
														<td colspan="2">
															<div id="chartViewed" style="width: 900px; height: 500px;"></div>
														</td>
													</tr>
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