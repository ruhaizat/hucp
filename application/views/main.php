    <div id="page-content">
        <div class="hero-section has-background height-500px">
            <div class="wrapper">
                <div class="inner">
                    <div class="container">
                        <div class="page-title center">
                            <img src="assets/img/logo_hyundai_white.png">
                        </div>
                        <div class="form search-form horizontal inputs-dark">
                            <form>
                                <div class="row">
                                    <div class="col-md-3 col-sm-2">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="location">
                                                <option value="">Location</option>
                                                <option value="1">Kuala Lumpur</option>
                                                <option value="2">Selangor</option>
                                                <option value="3">Johor</option>
                                                <option value="4">Penang</option>
                                                <option value="5">Perak</option>
                                                <option value="6">Kedah</option>
                                                <option value="7">Negeri Sembilan</option>
                                                <option value="8">Pahang</option>
                                                <option value="9">Sabah</option>
                                                <option value="9">Sarawak</option>
                                                <option value="9">Terengganu</option>
                                                <option value="9">Melaka</option>
                                                <option value="9">Kelantan</option>
                                                <option value="9">Perlis</option>
                                                <option value="9">Putrajaya</option>
                                                <option value="9">Labuan</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-2 col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control selectpicker" name="category">
                                                <option value="">Model</option>
                                                <option value="1">Accent</option>
                                                <option value="2">Atos</option>
                                                <option value="3">Avante</option>
                                                <option value="4">Azera</option>
                                                <option value="5">Coupe</option>
                                                <option value="6">Elantra</option>
                                                <option value="7">Getz</option>
                                                <option value="8">Grandeur XG250</option>
                                                <option value="9">Grand Starex</option>
                                                <option value="10">i10</option>
                                                <option value="11">i10 Kappa</option>
                                                <option value="12">i30</option>
                                                <option value="13">i40</option>
                                                <option value="14">i40 Sedan</option>
                                                <option value="15">i40 Tourer</option>
                                                <option value="16">IONIQ</option>
                                                <option value="17">Matrix</option>
                                                <option value="18">Md Elantra</option>
                                                <option value="19">Santa FE</option>
                                                <option value="20">Sonata</option>
                                                <option value="21">Starex</option>
                                                <option value="22">Terracan</option>
                                                <option value="23">Trajet</option>
                                                <option value="24">Tucson</option>
                                                <option value="25">Veloster</option>
                                            </select>
                                        </div>
                                        <!--end form-group-->
                                    </div>
                                    <!--end col-md-4-->
                                    <div class="col-md-3 col-sm-4">
                                        <div class="ui-slider" id="price-slider" data-value-min="80000" data-value-max="800000" data-value-type="price" data-currency="$" data-currency-placement="before">
                                            <div class="values clearfix">
                                                <input class="value-min" name="value-min[]" readonly>
                                                <input class="value-max" name="value-max[]" readonly>
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
                <div class="owl-carousel" data-owl-items="<?php echo $featuredDataCount;?>" data-owl-loop="1" data-owl-auto-width="1" data-owl-nav="1" data-owl-dots="1" data-owl-nav-container="#gallery-nav">

					<?php $i = 0;foreach($featuredData as $eachFeatured):$i++;?>
					<div class="item featured" data-id="<?php echo $eachFeatured->LID;?>">
                            <a href="<?php echo base_url().'listing/details/'.$eachFeatured->LID.'/'.$eachFeatured->LAddedBy;?>">
                            <div class="description">
                                <figure>RM<?php echo $eachFeatured->SellingPrice;?></figure>
                                <div class="label label-default">Used</div>
                                <h3><?php echo $eachFeatured->ModelName;?></h3>
                                <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                <h4><i class="fa fa-map-marker"></i> <?php echo $eachFeatured->Address;?></h4>
                            </div>
                            <!--end description-->
                            <div class="image bg-transfer">
                                <img src="<?php if($eachFeatured->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachFeatured->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                            </div>
                            <!--end image-->
                        </a>
                        <div class="additional-info">
                            <a href="#">Contact Seller</a>
                            <div class="controls-more">
                                <ul>
                                    <li><a href="#">Add to favorites</a></li>
                                    <li><a href="#">Compare</a></li>
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
                                    <figure>RM<?php echo $eachRecent->SellingPrice;?></figure>
                                    <div class="label label-default">Used</div>
                                    <h3><?php echo $eachRecent->ModelName;?></h3>
                                    <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                    <h4><i class="fa fa-map-marker"></i> <?php echo $eachRecent->Address;?></h4>
                                </div>
                                <!--end description-->
                                <div class="image bg-transfer">
                                    <img src="<?php if($eachRecent->ListingPic): echo base_url();?>assets/img/listing/<?php echo $eachRecent->ListingPic;?><?php else: echo base_url().'assets/img/items/default.png'?><?php endif;?>" alt="">
                                </div>
                                <!--end image-->
                            </a>
                            <div class="additional-info">
                                <a href="#">Contact Seller</a>
                                <div class="controls-more">
                                    <ul>
                                        <li><a href="#">Add to favorites</a></li>
                                        <li><a href="#">Compare</a></li>
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
                  <div class="col-md-3 col-sm-3">
                      <div class="item" data-id="1">
                          <a href="<?php echo base_url();?>details">
                              <div class="description">
                                  <figure>RM800,000</figure>
                                  <div class="label label-default">USED</div>
                                  <h3>Hyundai Tucson</h3>
                                  <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                  <h4><i class="fa fa-map-marker"></i> Selangor</h4>
                              </div>
                              <!--end description-->
                              <div class="image bg-transfer">
                                  <img src="assets/img/items/5.jpg" alt="">
                              </div>
                              <!--end image-->
                          </a>
                          <div class="additional-info">
                              <a href="#">Contact Seller</a>
                              <div class="controls-more">
                                  <ul>
                                      <li><a href="#">Add to favorites</a></li>
                                      <li><a href="#">Compare</a></li>
                                  </ul>
                              </div>
                              <!--end controls-more-->
                          </div>
                          <!--end additional-info-->
                      </div>
                      <!--end item-->
                  </div>
                  <!--<end col-md-3-->
                  <div class="col-md-3 col-sm-3">
                      <div class="item" data-id="1">
                          <a href="<?php echo base_url();?>details">
                              <div class="description">
                                  <figure>RM800,000</figure>
                                  <div class="label label-default">USED</div>
                                  <h3>Hyundai IONIQ</h3>
                                  <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                  <h4><i class="fa fa-map-marker"></i> Selangor</h4>
                              </div>
                              <!--end description-->
                              <div class="image bg-transfer">
                                  <img src="assets/img/items/4.jpg" alt="">
                              </div>
                              <!--end image-->
                          </a>
                          <div class="additional-info">
                              <a href="#">Contact Seller</a>
                              <div class="controls-more">
                                  <ul>
                                      <li><a href="#">Add to favorites</a></li>
                                      <li><a href="#">Compare</a></li>
                                  </ul>
                              </div>
                              <!--end controls-more-->
                          </div>
                          <!--end additional-info-->
                      </div>
                      <!--end item-->
                  </div>
                  <!--<end col-md-3-->
                  <div class="col-md-3 col-sm-3">
                      <div class="item" data-id="1">
                          <a href="<?php echo base_url();?>details">
                              <div class="description">
                                  <figure>RM800,000</figure>
                                  <div class="label label-default">USED</div>
                                  <h3>Hyundai Elantra</h3>
                                  <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                  <h4><i class="fa fa-map-marker"></i> Selangor</h4>
                              </div>
                              <!--end description-->
                              <div class="image bg-transfer">
                                  <img src="assets/img/items/2.jpg" alt="">
                              </div>
                              <!--end image-->
                          </a>
                          <div class="additional-info">
                              <a href="#">Contact Seller</a>
                              <div class="controls-more">
                                  <ul>
                                      <li><a href="#">Add to favorites</a></li>
                                      <li><a href="#">Compare</a></li>
                                  </ul>
                              </div>
                              <!--end controls-more-->
                          </div>
                          <!--end additional-info-->
                      </div>
                      <!--end item-->
                  </div>
                  <!--<end col-md-3-->
                  <div class="col-md-3 col-sm-3">
                      <div class="item" data-id="1">
                          <a href="<?php echo base_url();?>details">
                              <div class="description">
                                  <figure>RM800,000</figure>
                                  <div class="label label-default">USED</div>
                                  <h3>Hyundai Veloster Turbo</h3>
                                  <h4 style="padding: 0 0 5px 0;">Gamma 1.6L Premium(model)</h4>
                                  <h4><i class="fa fa-map-marker"></i> Selangor</h4>
                              </div>
                              <!--end description-->
                              <div class="image bg-transfer">
                                  <img src="assets/img/items/1.jpg" alt="">
                              </div>
                              <!--end image-->
                          </a>
                          <div class="additional-info">
                              <a href="#">Contact Seller</a>
                              <div class="controls-more">
                                  <ul>
                                      <li><a href="#">Add to favorites</a></li>
                                      <li><a href="#">Compare</a></li>
                                  </ul>
                              </div>
                              <!--end controls-more-->
                          </div>
                          <!--end additional-info-->
                      </div>
                      <!--end item-->
                  </div>
                  <!--<end col-md-3-->
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
