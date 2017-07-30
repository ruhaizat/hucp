	
    <script src="<?php echo base_url();?>assets/pages/scripts/jquery.dataTables.min.js" type="text/javascript"></script>
    <link href="<?php echo base_url();?>assets/pages/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
	<style>
	#dataTableListing_filter, #dataTableListing_length, #dataTableListing thead
	{
		display: none;
	}
	.cellHide{
		display: none;
	}
	</style>
	<script>		
		function MakeFavourite(UserID, ListingID){
			var datastr = '{"mode":"MakeFavourite","UserID":"'+UserID+'","ListingID":"'+ListingID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var FavID = data;
					var lired = ".lired_fav_"+UserID+"_"+ListingID;
					var liblack = ".liblack_fav_"+UserID+"_"+ListingID;
					$(lired).show();
					$(liblack).hide();
				}
			});
		}
		function RemoveFavourite(UserID, ListingID){
			var datastr = '{"mode":"RemoveFavourite","UserID":"'+UserID+'","ListingID":"'+ListingID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var FavID = data;
					var lired = ".lired_fav_"+UserID+"_"+ListingID;
					var liblack = ".liblack_fav_"+UserID+"_"+ListingID;
					$(lired).hide();
					$(liblack).show();
				}
			});
		}
		var table;
		$(document).ready(function(){
			table = $('#dataTableListing').DataTable({
				"pageLength": 25,
				"deferRender": true
			});
			$("#sRes").text(table.page.info().recordsDisplay);
			
			$('#txtSearch').keyup( function() {
				table.search($(this).val()).draw() ;
			} );
			$('.selFilter').change( function() { 
				var sortby = this.value;
				
				if(sortby == "1"){
					table
						.order([1, "asc"])
						.draw();					
				}else if(sortby == "2"){
					table
						.order([1, "desc"])
						.draw();					
				}else if(sortby == "3"){
					table
						.order([2, "desc"])
						.draw();					
				}else if(sortby == "4"){
					table
						.order([2, "asc"])
						.draw();					
				}else if(sortby == "5"){
					table
						.order([3, "desc"])
						.draw();					
				}else if(sortby == "6"){
					table
						.order([3, "asc"])
						.draw();					
				}
			});
		
			$("#frmSearch").submit(function(e){
				e.preventDefault();
				var keyword = $("#keyword").val();
				var location = $("#location option:selected").text();
				var model = $("#model option:selected").text();
				var year = $("#year option:selected").text();
				var valuemin = $("#value-min").val();
				valuemin = valuemin.replace("RM", "");
				valuemin = valuemin.replace(".", "");
				var valuemax = $("#value-max").val();
				valuemax = valuemax.replace("RM", "");
				valuemax = valuemax.replace(".", "");
				
				table.search(keyword).draw();
				
				if(year != "Year"){
					table
						.column(2)
						.search(year)
						.draw();					
				}else{
					table
						.column(2)
						.search("")
						.draw();					
				}

				if(location != "Location"){
					table
						.column(4)
						.search(location)
						.draw();
				}else{
					table
						.column(4)
						.search("")
						.draw();					
				}

				if(model != "Model"){
					table
						.column(5)
						.search(model)
						.draw();
				}else{
					table
						.column(5)
						.search("")
						.draw();					
				}
				
				table.draw();
				$("#sRes").text(table.page.info().recordsDisplay);			
			});
			
			$.fn.dataTable.ext.search.push(
				function( settings, data, dataIndex ) {
					var valuemin = $("#value-min").val();
					valuemin = valuemin.replace("RM", "");
					valuemin = valuemin.replace(".", "");
					var valuemax = $("#value-max").val();
					valuemax = valuemax.replace("RM", "");
					valuemax = valuemax.replace(".", "");
					var pricing = parseFloat(data[1]); // use data for the age column
			 
					if ( ( isNaN( valuemin ) && isNaN( valuemax ) ) ||
						 ( isNaN( valuemin ) && pricing <= valuemax ) ||
						 ( valuemin <= pricing   && isNaN( valuemax ) ) ||
						 ( valuemin <= pricing   && pricing <= valuemax ) )
					{
						return true;
					}
					return false;
				}
			);
			$('#dataTableListing_next').click(function () {
				table.page("next").draw("page");
			} );
			$('#dataTableListing_previous').click(function () {
				table.page('previous').draw();
			} );
			
			
			var isSearch = <?php echo $isSearch;?>;
			
			if(isSearch == 1){
				var keyword = "<?php echo $keyword;?>";
				$("#keyword").val(keyword);
				
				var location = "<?php echo $location;?>";
				$("#location option").filter(function() {
					return $(this).text() == location; 
				}).prop('selected', true);
				
				var model = "<?php echo $modelStr;?>";
				$("#model option").filter(function() {
					return $(this).text() == model; 
				}).prop('selected', true);
				
				var valuemin = "<?php echo $minvalsrc;?>";
				valuemin = valuemin.replace("RM", "");
				valuemin = valuemin.replace(".", "");
				$("#value-min").val(valuemin);
				
				var valuemax = "<?php echo $maxvalsrc;?>";
				valuemax = valuemax.replace("RM", "");
				valuemax = valuemax.replace(".", "");
				$("#value-max").val(valuemax);
				
				var updateSlider = document.getElementById('price-slider');
				
				$(updateSlider).noUiSlider({
					start: [ parseInt(valuemin), parseInt(valuemax) ],
					connect: true,
					direction: "ltr",
					range: {
						'min': parseInt(<?php echo $priceThresData->MinVal;?>),
						'max': parseInt(<?php echo $priceThresData->MaxVal;?>)
					},
					step: 10
				});
				
				if( $(updateSlider).attr('data-value-type') == 'price' ) {
					if( $(updateSlider).attr('data-currency-placement') == 'before' ) {
						$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ prefix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: '.' }));
						$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ prefix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: '.' }));
					}
					else if( $(updateSlider).attr('data-currency-placement') == 'after' ){
						$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ postfix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: ' ' }));
						$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ postfix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: ' ' }));
					}
				}
				else {
					$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ decimals: 0 }));
					$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ decimals: 0 }));
				}
				
				table.search(keyword).draw();
				
				if(location != "Location"){
					table
						.column(4)
						.search(location)
						.draw();
				}else{
					table
						.column(4)
						.search("")
						.draw();					
				}

				if(model != "Model"){
					table
						.column(5)
						.search(model)
						.draw();
				}else{
					table
						.column(5)
						.search("")
						.draw();					
				}
				
				table.draw();
				$("#sRes").text(table.page.info().recordsDisplay);	
			}else{
				var updateSlider = document.getElementById('price-slider');
				
				$(updateSlider).noUiSlider({
					start: [ parseInt(<?php echo $priceThresData->MinVal;?>), parseInt(<?php echo $priceThresData->MaxVal;?>) ],
					connect: true,
					direction: "ltr",
					range: {
						'min': parseInt(<?php echo $priceThresData->MinVal;?>),
						'max': parseInt(<?php echo $priceThresData->MaxVal;?>)
					},
					step: 10
				});
				
				if( $(updateSlider).attr('data-value-type') == 'price' ) {
					if( $(updateSlider).attr('data-currency-placement') == 'before' ) {
						$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ prefix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: '.' }));
						$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ prefix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: '.' }));
					}
					else if( $(updateSlider).attr('data-currency-placement') == 'after' ){
						$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ postfix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: ' ' }));
						$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ postfix: $(updateSlider).attr('data-currency'), decimals: 0, thousand: ' ' }));
					}
				}
				else {
					$(updateSlider).Link('lower').to( $(updateSlider).children('.values').children('.value-min'), null, wNumb({ decimals: 0 }));
					$(updateSlider).Link('upper').to( $(updateSlider).children('.values').children('.value-max'), null, wNumb({ decimals: 0 }));
				}
			}
		});
	
		function drawMapNow(mapCenter, element){

			var mapOptions = {

				zoom: 14,

				center: mapCenter,

				disableDefaultUI: true,

				scrollwheel: true,

				styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":20},{"color":"#ececec"}]},{"featureType":"landscape.man_made","elementType":"all","stylers":[{"visibility":"on"},{"color":"#f0f0ef"}]},{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f0f0ef"}]},{"featureType":"landscape.man_made","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#d4d4d4"}]},{"featureType":"landscape.natural","elementType":"all","stylers":[{"visibility":"on"},{"color":"#ececec"}]},{"featureType":"poi","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"lightness":21},{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#d4d4d4"}]},{"featureType":"poi","elementType":"labels.text.fill","stylers":[{"color":"#303030"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"poi.attraction","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.business","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.government","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.medical","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"featureType":"poi.place_of_worship","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"poi.school","elementType":"geometry.stroke","stylers":[{"lightness":"-61"},{"gamma":"0.00"},{"visibility":"off"}]},{"featureType":"poi.sports_complex","elementType":"all","stylers":[{"visibility":"on"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#dadada"},{"lightness":17}]}]

			};

			var mapElement = document.getElementById(element);

			var map = new google.maps.Map(mapElement, mapOptions);

			var marker = new google.maps.Marker({

				position: mapCenter,

				map: map,

				draggable: false,

				icon: "http://localhost/hucp/assets/img/marker.png",

				flat: true

			});
		}
	</script>
	<div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Search Results</li>
            </ol>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <aside class="sidebar">
                        <section>
                            <h2>Search Filter</h2>
                            <form id="frmSearch" class="form inputs-underline">
                                <div class="form-group">
                                    <input id="keyword" type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="location" id="location">
										<option value="">Location</option>
										<?php foreach($state as $eachState):?>
										<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
										<?php endforeach;?>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="model" id="model">
                                        <option value="">Model</option>
										<?php foreach($modelData as $eachModel):?>
										<option><?php echo $eachModel->gs_model;?></option>
										<?php endforeach;?>
                                    </select>
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <select class="form-control selectpicker" name="year" id="year">
                                        <option value="">Year</option>
                                        <option value="1">2010</option>
                                        <option value="2">2011</option>
                                        <option value="3">2012</option>
                                        <option value="4">2013</option>
                                        <option value="5">2014</option>
                                        <option value="6">2015</option>
                                        <option value="7">2016</option>
                                        <option value="8">2017</option>
                                        <option value="9">2018</option>
                                        <option value="10">2019</option>
                                    </select>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <div class="ui-slider" id="price-slider" data-value-min="<?php echo $priceThresData->MinVal?>" data-value-max="<?php echo $priceThresData->MaxVal?>" data-value-type="price" data-currency="RM" data-currency-placement="before">
                                        <div class="values clearfix">
                                            <input class="value-min" name="value-min[]" id="value-min" readonly>
                                            <input class="value-max" name="value-max[]" id="value-max" readonly>
                                        </div>
                                        <div class="element"></div>
                                    </div>
                                    <!--end price-slider-->
                                </div>
                                <!--end form-group-->
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary pull-right">Search Now<i class="fa fa-search"></i></button>
                                </div>
                                <!--end form-group-->
                            </form>
                        </section>
                        <section>
                            <h2>Recent Listing</h2>
							<?php foreach($recentData as $eachRecent):?>
							    <div class="item" data-id="<?php echo $eachRecent->LID;?>">
									<a href="<?php echo base_url().'listing/details/'.$eachRecent->LID.'/'.$eachRecent->LAddedBy;?>">
										<div class="description">
											<h3>RM<?php echo number_format($eachRecent->SellingPrice);?></h3>
											<div class="label label-default">Used</div>
											<h3><?php echo $eachRecent->ManufacturingYear." ".$eachRecent->Brand." ".$eachRecent->ModelName;?></h3>
											<h4 style="padding: 0 0 5px 0;"><?php echo $eachRecent->SpecificationName?></h4>
											<h4><i class="fa fa-map-marker"></i> <?php echo $eachRecent->StateName;?></h4>
										</div>
										<!--end description-->
										<div class="image bg-transfer">
											<img src="<?php if($eachRecent->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachRecent->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
										</div>
										<!--end image-->
									</a>
									<div class="controls-more">
										<ul>
											<?php if($LoggedUser):?>
												<?php $favEleID = $LoggedUser["UserID"]."_".$eachRecent->LID;?>
												<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachRecent->LID);$favCount = $query->row()->val;?>
												<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachRecent->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
												<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachRecent->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
											<?php endif;?>
											<li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
											<li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
										</ul>
									</div>
								</div>
							<?php endforeach;?>
                        </section>
                    </aside>
                    <!--end sidebar-->
                </div>
                <!--end col-md-4-->

                <div class="col-md-9 col-sm-9">
                    <section>
                        <div class="search-results-controls clearfix">
                            <div class="pull-left">
                                <h1><span id="sRes"></span> Search Results</h1>
                            </div>
                            <!--end left-->
                            <div class="pull-right">
                                <div class="input-group inputs-underline min-width-200px">
                                    <select class="form-control selectpicker selFilter" name="sort">
                                        <option value="">Sort by</option>
                                        <option value="1">Price: Lowest to Highest</option>
                                        <option value="2">Price: Highest to Lowest</option>
                                        <option value="3">Year: New to Old</option>
                                        <option value="4">Year: Old to New</option>
                                        <option value="5">Mileage: High to Low</option>
                                        <option value="6">Mileage: Low to High</option>
                                    </select>
                                </div>
                            </div>
                            <!--end right-->
                        </div>
                        <!--end search-results-controls-->
                    </section>

                    <section>
						<table id="dataTableListing">
							<thead>
								<tr>
									<th></th>
									<th class="cellHide">Price</th>
									<th class="cellHide">Year</th>
									<th class="cellHide">Mileage</th>
									<th class="cellHide">Location</th>
									<th class="cellHide">Model</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 0;foreach($listingData as $eachList):$i++;?>
								<tr>
									<td>
										<div class="item item-row" data-id="<?php echo $eachList->LID;?>" data-latitude="<?php echo $eachList->Latitude;?>" data-longitude="<?php echo $eachList->Longitude;?>">
											<?php if($eachList->IsFeatured == 1):?><figure class="ribbon">Featured</figure><?php endif;?>
											<a href="<?php echo base_url().'listing/details/'.$eachList->LID.'/'.$eachList->LAddedBy;?>">
												<div class="image bg-transfer" style="background-image: url('<?php if($eachList->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachList->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>') !important;">
													<figure style="text-align: left; left: 8px;"><i class="fa fa-camera"></i> <?php echo $eachList->TotalImg;?></figure>
													<img src="<?php if($eachList->ListingPic): echo base_url().'assets/img/listing/'.$eachList->ListingPic; else: echo base_url().'assets/img/items/default.png';endif;?>" alt="">
												</div>
												<!--end image-->
												<div class="map" id="map<?php echo $eachList->LID;?>"></div>
												<script>
													var mapCenter = new google.maps.LatLng(<?php echo $eachList->Latitude;?>,<?php echo $eachList->Longitude;?>);
													drawMapNow(mapCenter, "map<?php echo $eachList->LID;?>");
												</script>
												<div class="description">
													<h3><?php echo $eachList->ManufacturingYear." ".$eachList->Brand." ".$eachList->ModelName;?></h3>
													<h4 style="padding: 0 0 5px 0;"><?php echo $eachList->SpecificationName?></h4>
													<h4><i class="fa fa-map-marker"></i> <?php echo $eachList->StateName;?></h4>
													<div class="label label-default">Used</div>
												</div>
												<!--end description-->
												<div class="additional-info">
													<h3 style="margin-bottom: 5px;">RM<?php echo number_format($eachList->SellingPrice);?></h3>
													<h4>RM3,400/month</h4>
													<h4><i class="fa fa-road"></i> <?php echo $eachList->Mileage;?>km</h4>
												</div>
												<!--end additional-info-->
											</a>
											<div class="controls-more">
												<ul>
													<?php if($LoggedUser):?>
														<?php $favEleID = $LoggedUser["UserID"]."_".$eachList->LID;?>
														<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachList->LID);$favCount = $query->row()->val;?>
														<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachList->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
														<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachList->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
													<?php endif;?>
													<li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
													<li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
												</ul>
											</div>
											<!--end controls-more-->
										</div>
										<!--end item.row-->						
									</td>
									<td class="cellHide">
										<?php echo $eachList->SellingPrice;?>
									</td>
									<td class="cellHide">
										<?php echo $eachList->ManufacturingYear;?>
									</td>
									<td class="cellHide">
										<?php echo $eachList->Mileage;?>
									</td>
									<td class="cellHide">
										<?php echo $eachList->StateName;?>
									</td>
									<td class="cellHide">
										<?php echo $eachList->ModelName;?>
									</td>
								</tr>
								<?php endforeach;?>	
							</tbody>
						</table>
		
                    </section>

                    <!--<section>
                        <div id="divPagination" class="center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    <li class="disabled previous">
                                        <a href="#" aria-label="Previous">
                                            <i class="arrow_left"></i>
                                        </a>
                                    </li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li class="active"><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li class="next">
                                        <a href="#" aria-label="Next">
                                            <i class="arrow_right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </section>-->
                </div>
                <!--end col-md-9-->
            </div>
            <!--end row-->
        </div>
        <!--end container-->
    </div>
    <!--end page-content-->