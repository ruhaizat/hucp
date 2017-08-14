    <script>
		function OptOut(){
			var datastr = '{"mode":"OptOut","SubscriberID":"<?php echo $SubscriberID;?>"}';
			$.ajax({
				url: "<?php echo base_url();?>main/ajax",
				type: "POST",
				data: {"datastr":datastr},
				success: function(data){
					$("#OptOutSuccess").modal("show");
				}
			});
		}
    </script>
	<div id="page-content">
      <section class="block big-padding">
          <div class="container">
              <div class="vertical-aligned-elements">
                  <div class="element width-50">
                    <h2>Unsubscribe</h2>
                      <h3>Opt-out <b><i><?php echo $optEmail;?></b></i> of all marketing emails.</h3>
                  </div>
                  <!--end element-->
                  <div class="element width-50">
                      <a onclick="OptOut();" class="btn btn-primary btn-light-frame btn-rounded arrow">Unsubscribe Now</a>
                      <a href="<?php echo base_url();?>" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow">Don't Unsubscribe</a>
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
                <div class="owl-carousel" data-owl-items="<?php echo $featuredDataCount;?>" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">
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
									<?php if($LoggedUser):?>
										<?php $favEleID = $LoggedUser["UserID"]."_".$eachFeatured->LID;?>
										<?php $query = $this->db->query("SELECT COUNT(ID) AS val FROM tbl_favourite WHERE UserID = ".$LoggedUser["UserID"]." AND ListingID = ".$eachFeatured->LID);$favCount = $query->row()->val;?>
										<li class="lired_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:block;'?><?php else:?><?php echo 'display:none;'?><?php endif;?>"><a onclick="RemoveFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachFeatured->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:red;"></i></a></li>
										<li class="liblack_fav_<?php echo $favEleID;?>" style="<?php if($favCount > 0):?><?php echo 'display:none;'?><?php else:?><?php echo 'display:block;'?><?php endif;?>"><a onclick="MakeFavourite(<?php echo $LoggedUser['UserID'];?>,<?php echo $eachFeatured->LID;?>)">Favorite<i class="fa fa-heart fi_<?php echo $favEleID;?>" style="padding-left:5px;color:black;"></i></a></li>
									<?php endif;?>
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
                                    <div class="label label-default">Used</div>
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

    </div>
    <!--end page-content-->
	<div class="modal fade" id="OptOutSuccess" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2>Success</h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" action="<?php echo base_url();?>">
						<div class="form-group center">
						You have successfully unsubscribed.
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100">OK</button>
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