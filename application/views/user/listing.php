	<script>
		$(document).ready(function(){

		});
	</script>
    <div id="page-content">
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Profile</a></li>
                <li class="active">My Listings</li>
            </ol>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                  <div class="detail-sidebar">
                      <section class="shadow">
                          <div class="content">
                              <div class="vertical-aligned-elements">
                                <div class="review" style="margin-bottom: 20px;">
                                    <div class="image">
                                        <div class="bg-transfer"><img <?php if($user->Type == 2):echo "src='".$user->ProfilePic."'";else: echo "src='".base_url()."assets/img/profile/".$user->ProfilePic."'";endif;?> alt=""></div>
                                    </div>
                                    <div class="description">
                                            <h4><?php echo $user->FirstName." ".$user->LastName;?></h4>
                                            ID# <?php echo sprintf('%06d', $user->ID);?>
                                    </div>
                                </div>
                              </div>
                              <hr>
                              <address>
                                  <figure><i class="fa fa-map-marker"></i><?php echo $user->Address;?> </figure>
                                  <figure><i class="fa fa-envelope"></i><?php $out = strlen($user->EmailAddress) > 19 ? substr($user->EmailAddress,0,19)." ..." : $user->EmailAddress; echo $out;?><?php if($user->Status == 2):?> <i class="fa fa-check-circle" style="margin-left: 5px;"></i><?php endif;?></figure>
                                  <figure><i class="fa fa-phone"></i><?php echo $user->MobileNo;?> <i class="fa fa-check-circle mobileVerified" style="margin-left: 5px;<?php if($user->MobileVerification == 0):?>display:none;<?php endif;?>"></i></figure>
								  <?php if($user->MobileVerification == 0):?>
								  <br/>
                                  <a id="btnVerifyNo" class="btn btn-primary btn-rounded btn-xs mobileNotVerified">Verify Mobile No</a>
                                  <br/><br/>
                                  <p>Verifying your mobile number will increase your chances to be contacted by interested buyers.</p>
								  <?php endif;?>
                              </address>
															<hr>
                                <a href="<?php echo base_url();?>user"><h4>My Profile</h4></a>
                              <hr>
                                <a href="<?php echo base_url();?>user/listing"><h4>My Advertisements</h4></a>
                              <hr>
                                <a href="#"><h4>My Favourites</h4></a>
                          </div>
                      </section>
                  </div>
                  <!--end detail-sidebar-->
                </div>
                <!--end col-md-4-->
                <div class="col-md-9 col-sm-9">
                  <section>
                      <div class="search-results-controls clearfix">
                          <div class="pull-left">
                              <h1>My Listing / Favourites</h1>
                          </div>
                          <!--end left-->
                          <div class="pull-right">
                              <div class="input-group inputs-underline min-width-150px">
                                  <select class="form-control selectpicker" name="sort">
                                      <option value="">Sort by</option>
                                      <option value="1">Price: Lowest to Highest</option>
                                      <option value="2">Price: Highest to Lowest</option>
                                      <option value="3">Year: New to Old</option>
                                      <option value="3">Year: Old to New</option>
                                      <option value="3">Milage: High to Low</option>
                                      <option value="3">Milage: Low to High</option>
                                  </select>
                              </div>
                          </div>
                          <!--end right-->
                      </div>
                      <!--end search-results-controls-->
                  </section>
                  <section>
						<?php $i = 0;foreach($listingData as $eachList):$i++;?>
                        <div class="item item-row" data-id="<?php echo $eachList->LID;?>" data-latitude="<?php echo $eachList->Latitude;?>" data-longitude="<?php echo $eachList->Longitude;?>">
                            <?php if($eachList->IsFeatured == 1):?><figure class="ribbon">Featured</figure><?php endif;?>
                            <a href="<?php echo base_url().'listing/details/'.$eachList->LID.'/'.$eachList->LAddedBy;?>">
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachList->ListingPic): echo base_url().'assets/img/listing/'.$eachList->ListingPic; else: echo base_url().'assets/img/items/default.png';endif;?>" alt="">
                                </div>
                                <!--end image-->
                                <div class="map"></div>
                                <div class="description">
                                    <h3><?php echo $eachList->ModelName;?></h3>
																		<h4 style="padding: 0 0 5px 0;"><?php echo $eachList->SpecificationName?></h4>
                                    <h4><i class="fa fa-map-marker"></i> <?php echo $eachList->Address;?></h4>
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
									<li><a href="#">Favorite <i class="fa fa-heart" style="padding-left: 5px;"></i></a></li>
									<li><a href="#">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
									<li><a href="#">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
                                </ul>
                            </div>
                            <!--end controls-more-->
                        </div>
                        <!--end item.row-->
						<?php endforeach;?>
                  </section>
                  <!--<section>
                      <div class="center">
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
