	<script>
		function AddCompare(ListingID){
			if($("#liCompare_"+ListingID).length == 0){
				var datastr = '{"mode":"AddCompare","ListingID":"'+ListingID+'"}';
				$.ajax({
					url: "<?php echo base_url();?>main/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						var dataArr = data.split("|");
						if(dataArr[0] == "3"){
							alert("You can only compare 3 listing");
						}else{
							var BrandName = dataArr[1];
							var ModelName = dataArr[2];
							var SpecificationName = dataArr[3];
							var SellingPrice = dataArr[4];
							var Mileage = dataArr[5];
							var ListingPIC = dataArr[6];
							var ListingID = dataArr[7];
							var LAddedBy = dataArr[8];
							
							var imgURL = "";
							if(ListingPIC == ""){
								imgURL = "<?php echo base_url().'assets/img/items/default.png';?>";
							}else{
								imgURL = "<?php echo base_url().'assets/img/listing/';?>"+ListingPIC;
							}
							
							if($("#liCompareNow").length == 0){
								$(".ulCompare").append('<li id="liCompareNow"><a href="<?php echo base_url();?>compare">Compare Now</a></li>');
							}
							
							$("#liNoCompare").remove();
							var sCompare = parseInt($(".sCompare").text());
							$(".sCompare").text(sCompare+1);
							$(".ulCompare li:last").before('<li id="liCompare_'+ListingID+'" style="padding: 5px; height: 90px;"><div style="width: 80px; height: 80px; float: left; background-position: center; overflow: hidden; background-size: cover; margin-right: 10px;background-image:url('+imgURL+');"></div><div class="row" style="width: 400px; height: 80px;"><a href="<?php echo base_url();?>listing/details/'+ListingID+'/'+LAddedBy+'"><b>'+BrandName+' '+ModelName+'</b></a>'+SpecificationName+' | RM'+SellingPrice+' | '+Mileage+'KM<br/><a href="#" onclick="RemoveCompare('+ListingID+');"><i class="fa fa-close"></i> Remove</a></div></li>');
						}
					}
				});				
			}
		}
		function RemoveCompare(ListingID){
			var datastr = '{"mode":"RemoveCompare","ListingID":"'+ListingID+'"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					var sCompare = parseInt($(".sCompare").text());
					$(".sCompare").text(sCompare-1);
					$("#liCompare_"+ListingID).remove();
					
					if($('.ulCompare li').length == 1){
						$("#liCompareNow").remove();
						$(".ulCompare").append('<li id="liNoCompare"><a href="#">You have not selected any listing</a></li>');
					}
				}
			});
		}
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
		$(document).ready(function(){
			$("#frmSearch").submit(function(e){
				e.preventDefault();

				var keyword = $("#keyword").val();
				if(keyword == ""){
					keyword = "NA"
				}

				var location = $("#location option:selected").text();

				var model = $("#model option:selected").text();

				var valuemin = $("#value-min").val();
				valuemin = valuemin.replace("RM", "");
				valuemin = valuemin.replace(".", "");

				var valuemax = $("#value-max").val();
				valuemax = valuemax.replace("RM", "");
				valuemax = valuemax.replace(".", "");

				window.location = "<?php echo base_url();?>listing/search/"+keyword+"/"+location+"/"+model+"/"+valuemin+"/" + valuemax;
			});

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
		});
		function ViewAllNewCars(){
			var valuemin = $("#value-min").val();
			valuemin = valuemin.replace("RM", "");
			valuemin = valuemin.replace(".", "");

			var valuemax = $("#value-max").val();
			valuemax = valuemax.replace("RM", "");
			valuemax = valuemax.replace(".", "");
			
			window.location = "<?php echo base_url();?>listing/ViewNewCars/"+valuemin+"/" + valuemax;
		}
	</script>
    <div id="page-content">
        <div class="hero-section has-background height-500px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <img src="assets/img/logo_kuc_white.png">
                        </div>
                        <div class="form search-form horizontal inputs-dark">
                            <form id="frmSearch">
                                <div class="row">
                                    <div class="col-md-3 col-sm-2">
                                        <div class="form-group">
                                            <input id="keyword" type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="form-group">
                                            <select id="location" class="form-control selectpicker" name="location">
                                                <option value="">Location</option>
												<?php foreach($state as $eachState):?>
												<option value="<?php echo $eachState->ID;?>"><?php echo $eachState->Name;?></option>
												<?php endforeach;?>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select id="model" class="form-control selectpicker" name="model">
                                                <option value="">Model</option>
												<?php foreach($model as $eachModel):?>
												<option><?php echo $eachModel->gs_model;?></option>
												<?php endforeach;?>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="ui-slider" id="price-slider" data-value-min="<?php echo $priceThresData->MinVal?>" data-value-max="<?php echo $priceThresData->MaxVal?>" data-value-type="price" data-currency="RM" data-currency-placement="before">
                                            <div class="values clearfix">
                                                <input class="value-min" name="value-min[]" id="value-min" readonly>
                                                <input class="value-max" name="value-max[]" id="value-max" readonly>
                                            </div>
                                            <div class="element"></div>
                                        </div>
                                        <!--end price-slider-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-1 col-sm-4">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary pull-right darker"><i class="fa fa-search"></i></button>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                </div>
                                <!--end row-->
                            </form>
                            <!--end form-hero-->
                        </div>
                        <!--end form-->
                    </div>
                </div>
            </div>
            <div class="background-wrapper">
                <div class="bg-transfer opacity-50"><img src="assets/img/background-06.jpg" alt=""></div>
                <div class="background-color background-color-black"></div>
            </div>
            <!--end background-wrapper-->
        </div>
        <!--end hero-section-->

        <section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>Featured Listing</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile">Promote yours</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="<?php echo $featuredDataCount;?>" data-owl-loop="0" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">

					<?php $i = 0;foreach($featuredData as $eachFeatured):$i++;?>
					<div class="item featured" data-id="<?php echo $eachFeatured->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachFeatured->LID.'/'.$eachFeatured->LAddedBy;?>">
                            <div class="description">
                                <figure>RM<?php echo number_format($eachFeatured->SellingPrice);?></figure>
                                <div class="label label-default"><?php echo $eachFeatured->Condition?></div>
                                <h3><?php echo $eachFeatured->ManufacturingYear." ".$eachFeatured->Brand." ".$eachFeatured->ModelName;?></h3>
                                <h4 style="padding: 0 0 5px 0;"><?php echo $eachFeatured->SpecificationName?></h4>
                                <h4><i class="fa fa-map-marker"></i> <?php echo $eachFeatured->StateName;?></h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="<?php if($eachFeatured->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachFeatured->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <a href="<?php echo base_url().'listing/details/'.$eachFeatured->LID.'/'.$eachFeatured->LAddedBy;?>">Contact Seller</a>
                            <div class="controls-more">
                                <ul>
									<?php if($LoggedUser):?>
										<?php $favEleID = $LoggedUser["UserID"]."_".$eachFeatured->LID;?>
										<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachFeatured->LID);$favCount = $query->row()->val;?>
										<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachFeatured->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
										<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachFeatured->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
									<?php endif;?>
									<li><a onclick="AddCompare(<?php echo $eachFeatured->LID;?>)">Compare<i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                    <li><a href="#Report" data-toggle="modal">Report<i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
					<?php endforeach;?>
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-90"></div>
                <div class="background-color background-color-default opacity-30"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        <section class="block">
            <div class="container">
                <div class="center">
                    <div class="section-title">
                        <div class="center">
                            <h2>Recent Listing</h2>
                        </div>
                    </div>
                    <!--end section-title-->
                </div>
                <!--end center-->
                <div class="row">
					<?php $i = 0;foreach($recentData as $eachRecent):$i++;?>
                    <div class="col-md-3 col-sm-3">
						<div class="item" data-id="<?php echo $eachRecent->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachRecent->LID.'/'.$eachRecent->LAddedBy;?>">
                                <div class="description">
                                    <figure>RM<?php echo number_format($eachRecent->SellingPrice);?></figure>
                                    <div class="label label-default"><?php echo $eachRecent->Condition?></div>
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
                            <div class="additional-info">
                                <a href="<?php echo base_url().'listing/details/'.$eachRecent->LID.'/'.$eachRecent->LAddedBy;?>">Contact Seller</a>
                                <div class="controls-more">
                                    <ul>
										<?php if($LoggedUser):?>
											<?php $favEleID = $LoggedUser["UserID"]."_".$eachRecent->LID;?>
											<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachRecent->LID);$favCount = $query->row()->val;?>
											<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachRecent->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
											<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachRecent->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
										<?php endif;?>
                                        <li><a onclick="AddCompare(<?php echo $eachRecent->LID;?>)">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#Report" data-toggle="modal">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
					<?php endforeach;?>
                </div>
                <!--end row-->
                <div class="center">
                    <a href="<?php echo base_url();?>listing" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">View all listings</a>
                </div>
            <!--end center-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

        <section class="block big-padding">
            <div class="container">
                <div class="vertical-aligned-elements">
                    <div class="element width-50">
                      <h2>Newsletter</h2>
                        <h3>Subscribe and be notified about new listings</h3>
                    </div>
                    <!--end element-->
                    <div class="element width-50">
                        <form id="frmNewsletter" class="form form-email inputs-underline" id="form-subscribe">
                            <div class="input-group">
                                <input type="text" class="form-control" name="newsletterEmail" placeholder="Your email" required="">
                                <span class="input-group-btn">
                                    <button class="btn" type="submit"><i class="arrow_right"></i></button>
                                </span>
                            </div><!-- /input-group -->
                        </form>
                        <!--end form-->
                    </div>
                    <!--end element-->
                </div>
                <!--end vertical-aligned-elements-->
            </div>
            <!--end container-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-5"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->

        <section class="block">
            <div class="container">
                <div class="section-title">
                    <h2>Recently Viewed</h2>
                </div>
                <!--end section-title-->
                <div class="row">

					<?php $i = 0;foreach($recentViewed as $eachViewed):$i++;?>
                    <div class="col-md-3 col-sm-3">
						<div class="item" data-id="<?php echo $eachViewed->RVID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachViewed->LID.'/'.$eachViewed->LAddedBy;?>">
                                <div class="description">
                                    <figure>RM<?php echo number_format($eachViewed->LSellingPrice);?></figure>
                                    <div class="label label-default"><?php echo $eachViewed->LCondition?></div>
                                    <h3><?php echo $eachViewed->LManufacturingYear." ".$eachViewed->LBrand." ".$eachViewed->ModelName;?></h3>
                                    <h4 style="padding: 0 0 5px 0;"><?php echo $eachViewed->SpecificationName?></h4>
                                    <h4><i class="fa fa-map-marker"></i> <?php echo $eachViewed->StateName;?></h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachViewed->LListingPic): echo base_url();?>assets/img/listing/<?php echo $eachViewed->LListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <a href="<?php echo base_url().'listing/details/'.$eachViewed->LID.'/'.$eachViewed->LAddedBy;?>">Contact Seller</a>
                                <div class="controls-more">
                                    <ul>
										<?php if($LoggedUser):?>
											<?php $favEleID = $LoggedUser["UserID"]."_".$eachViewed->LID;?>
											<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachViewed->LID);$favCount = $query->row()->val;?>
											<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachViewed->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
											<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachViewed->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
										<?php endif;?>
                                        <li><a onclick="AddCompare(<?php echo $eachViewed->LID;?>)">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#Report" data-toggle="modal">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                    </ul>
                                </div>
                                <!--end controls-more-->
                            </div>
                            <!--end additional-info-->
                        </div>
                        <!--end item-->
                    </div>
                    <!--<end col-md-3-->
					<?php endforeach;?>
                </div>
                <!--end row-->
                <div class="background-wrapper">
                    <div class="background-color background-color-black opacity-10"></div>
                </div>
                <!--end background-wrapper-->
            </div>
            <!--end container-->
        </section>
        <!--end block-->

		<section class="block background-is-dark">
            <div class="container">
                <div class="section-title vertical-aligned-elements">
                    <div class="element">
                        <h2>New Cars</h2>
                    </div>
                    <div class="element text-align-right">
                        <a href="#" class="btn btn-framed btn-rounded btn-default invisible-on-mobile" onclick="ViewAllNewCars();">View All New Car</a>
                        <div id="gallery-nav"></div>
                    </div>
                </div>
                <!--end section-title-->
            </div>
            <div class="gallery featured">
                <div class="owl-carousel" data-owl-items="<?php echo $featuredDataCount;?>" data-owl-loop="0" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">

					<?php $i = 0;foreach($newData as $eachNew):$i++;?>
					<div class="item featured" data-id="<?php echo $eachNew->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachNew->LID.'/'.$eachNew->LAddedBy;?>">
                            <div class="description">
                                <figure>RM<?php echo number_format($eachNew->SellingPrice);?></figure>
                                <div class="label label-default"><?php echo $eachNew->Condition?></div>
                                <h3><?php echo $eachNew->ManufacturingYear." ".$eachNew->Brand." ".$eachNew->ModelName;?></h3>
                                <h4 style="padding: 0 0 5px 0;"><?php echo $eachNew->SpecificationName?></h4>
                                <h4><i class="fa fa-map-marker"></i> <?php echo $eachNew->StateName;?></h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="<?php if($eachNew->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachNew->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <a href="<?php echo base_url().'listing/details/'.$eachNew->LID.'/'.$eachNew->LAddedBy;?>">Contact Seller</a>
                            <div class="controls-more">
                                <ul>
									<?php if($LoggedUser):?>
										<?php $favEleID = $LoggedUser["UserID"]."_".$eachNew->LID;?>
										<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachNew->LID);$favCount = $query->row()->val;?>
										<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachNew->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
										<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachNew->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
									<?php endif;?>
                                    <li><a onclick="AddCompare(<?php echo $eachNew->LID;?>)">Compare<i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                    <li><a href="#Report" data-toggle="modal">Report<i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end additional-info-->
                    </div>
                    <!--end item-->
					<?php endforeach;?>
                </div>
            </div>
            <!--end gallery-->
            <div class="background-wrapper">
                <div class="background-color background-color-black opacity-90"></div>
                <div class="background-color background-color-default opacity-30"></div>
            </div>
            <!--end background-wrapper-->
        </section>
        <!--end block-->
    </div>
    <!--end page-content-->
	<div class="modal fade" id="OptInSuccess" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2 id="OISH"></h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline">
						<div class="form-group center">
						<span id="OISValue"></span>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100" onclick="$('#OptInSuccess').modal('hide');">OK</button>
						</div>
						<!--end form-group-->
					</form>
					<!--end form-->
				</div>
				<!--end modal-body-->
			</div>
			<!--end modal-content-->
		</div>
		<!--end modal-dialog-->
	</div>
