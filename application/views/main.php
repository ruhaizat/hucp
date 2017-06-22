	<script>

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
	</script>
    <div id="page-content">
        <div class="hero-section has-background height-500px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <img src="assets/img/logo_hyundai_white.png">
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
                                <div class="label label-default">Used</div>
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
                                    <li><a href="#">Favorite<i class="fa fa-heart" style="padding-left: 5px;"></i></a></li>
                                    <li><a href="#">Compare<i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                    <li><a href="#">Report<i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
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
                            <div class="additional-info">
                                <a href="<?php echo base_url().'listing/details/'.$eachRecent->LID.'/'.$eachRecent->LAddedBy;?>">Contact Seller</a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Favorite <i class="fa fa-heart" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
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
                        <form class="form form-email inputs-underline" id="form-subscribe">
                            <div class="input-group">
                                <input type="text" class="form-control" name="email" placeholder="Your email" required="">
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
                                    <figure>RM<?php echo number_format($eachViewed->SellingPrice);?></figure>
                                    <div class="label label-default">Used</div>
                                    <h3><?php echo $eachViewed->ManufacturingYear." ".$eachViewed->Brand." ".$eachViewed->ModelName;?></h3>
                                    <h4 style="padding: 0 0 5px 0;"><?php echo $eachViewed->SpecificationName?></h4>
                                    <h4><i class="fa fa-map-marker"></i> <?php echo $eachViewed->StateName;?></h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachViewed->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachViewed->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <a href="<?php echo base_url().'listing/details/'.$eachViewed->LID.'/'.$eachViewed->LAddedBy;?>">Contact Seller</a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Favorite <i class="fa fa-heart" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
                                        <li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
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

				<section class="block">
						<div class="container">
								<div class="center">
										<div class="section-title">
												<div class="center">
														<h2>Looking for a New Car?</h2>
												</div>
										</div>
										<!--end section-title-->
								</div>
								<!--end center-->
								<div class="row" style="padding-bottom: 25px;">
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-i10.png"><br/><h3>i10</h3><i><span>from</span> RM51,234.07</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-elantra.png"><br/><h3>Elantra</h3><i><span>from</span> RM116,388.00</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-veloster.png"><br/><h3>Veloster</h3><i><span>from</span> RM135,461.13</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-veloster-turbo.png"><br/><h3>Veloster turbo</h3><i><span>from</span> RM154,437.49</i></a></div>
										<!--<end col-md-3-->
								</div>
								<!--end row-->
								<div class="row" style="padding-bottom: 25px;">
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-ioniq.png"><br/><h3>IONIQ Hybrid</h3><i><span>from</span> RM100,328.00</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-sonata.png"><br/><h3>Sonata</h3><i><span>from</span> RM139,295.24</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-genesis.png"><br/><h3>Genesis</h3><i><span>from</span> RM388,921.52</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-tucson.png"><br/><h3>Tucson</h3><i><span>from</span> RM129,990.87</i></a></div>
										<!--<end col-md-3-->
								</div>
								<!--end row-->
								<div class="row">
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-santa-fe.png"><br/><h3>Santa FE</h3><i><span>from</span> RM167,735.65</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"><a href="#"><img src="assets/img/hyundai-starex.png"><br/><h3>Grand Starex Royale</h3><i><span>from</span> RM164,018.32</i></a></div>
										<div class="col-md-3 col-sm-3 newcar" style="text-align: center;"></div>
										<!--<end col-md-3-->
								</div>
								<!--end row-->
						</div>
						<!--end container-->
				</section>
				<!--end block-->


    </div>
    <!--end page-content-->
