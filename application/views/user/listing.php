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
                                <a href="<?php echo base_url();?>user/index/<?php echo $user->ID;?>"><h4>My Profile</h4></a>
                              <hr>
                                <a href="<?php echo base_url();?>user/listing/<?php echo $user->ID;?>"><h4>My Advertisements</h4></a>
                              <hr>
                                <a href="<?php echo base_url();?>user/favourite/<?php echo $user->ID;?>"><h4>My Favourites</h4></a>
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
									<li><a href="#" onclick="AddCompare(<?php echo $eachList->LID;?>)">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
									<li><a href="#Report" data-toggle="modal">Report <i class="fa fa-flag" style="padding-left: 5px;"></i></a></li>
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
