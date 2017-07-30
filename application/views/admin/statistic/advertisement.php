				<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
				<script type="text/javascript">
				  google.charts.load('current', {'packages':['corechart']});
				  google.charts.setOnLoadCallback(drawChart);

				  function drawChart() {

					var dataStatus = google.visualization.arrayToDataTable([
						['Advertisement Status', 'Total Advertisement'],
						['New / Pending', <?php echo $newpending->val;?>],
						['Submitted', <?php echo $submitted->val;?>],
						['Approved', <?php echo $approved->val;?>],
						['Expired', <?php echo $expired->val;?>],
						['Rejected', <?php echo $rejected->val;?>]
					]);

					var optionsStatus = {
						title: 'Advertisement by Status',
						is3D: true,
						sliceVisibilityThreshold:0
					};

					var chartStatus = new google.visualization.PieChart(document.getElementById('chartStatus'));
					chartStatus.draw(dataStatus, optionsStatus);
					

					var dataType = google.visualization.arrayToDataTable([
					  ['Advertisement Type', 'Total Advertisement'],
					  ['Featured', <?php echo $featured->val;?>],
					  ['Not Featured', <?php echo $notfeatured->val;?>]
					]);

					var optionsType = {
						title: 'Advertisement by Type',
						is3D: true,
						sliceVisibilityThreshold:0
					};

					var chartType = new google.visualization.PieChart(document.getElementById('chartType'));
					chartType.draw(dataType, optionsType);
					
					var dataViewed = new google.visualization.DataTable();
					dataViewed.addColumn('date', 'Time of Day');
					dataViewed.addColumn('number', 'View');
					<?php foreach($recentlyviewed as $rv):?>
					dataViewed.addRow([new Date(<?php echo $rv['year'];?>, <?php echo (int)$rv['month']-1;?>, <?php echo $rv['day'];?>), <?php echo $rv['val'];?>]);
					<?php endforeach;?>
					var optionsViewed = {
						title: 'Total Advertisement View',
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
                        <h1 class="page-title"> <i class="icon-bar-chart"></i> Statistic
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                                <div class="portlet light bordered">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption">
                                            <i class=" icon-social-twitter font-dark hide"></i>
                                            <span class="caption-subject font-dark bold uppercase">Daily Advertisement Statistic</span>
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