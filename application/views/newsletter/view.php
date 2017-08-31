<!DOCTYPE html>

<html lang="en-US">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="KNI">

    <link href="<?php echo base_url();?>assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700,900,400italic" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/jquery.nouislider.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">

    <title>Hyundai Used Car</title>
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
<<<<<<< HEAD

=======
							var ListingID = dataArr[7];
							var LAddedBy = dataArr[8];
							
>>>>>>> 59466521cf931206fd5d02a2373b686eb2ed1d38
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
	</script>
</head>

<body class="subpage-detail">
<div class="page-wrapper">

    <div id="page-content">
        <div class="container" style="width: 550px;">
            <ol class="breadcrumb">
            </ol>
            <img src="<?php echo base_url();?>assets/img/logo_kuc.png" height="20px">
            <!--end page-title-->
            <p class="pull-right"><a href="<?php echo base_url()?>listing"><b>Click here</b></a> to view all listings.</p>
        </div>
        <!--end container-->
        <div class="container"  style="width: 550px; padding-top: 50px;">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div id="gallery-nav"></div>
                    <section>
                      <h1>Hyundai Veloster</h1>
                        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt
                            massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit
                            enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique
                            ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant
                            morbi tristique senectus et netus et malesuada fames ac turpis egestas.
                        </p>
                    </section>
                    <section>
						<div class="row">
							<?php $i = 0;foreach($recentData as $eachRecent):$i++;?>
							<div class="col-md-6 col-sm-6">
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
												<li><a href="#" onclick="AddCompare(<?php echo $eachRecent->LID;?>)">Compare <i class="fa fa-clone" style="padding-left: 5px;"></i></a></li>
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
					</section>
				</div>
				<!--end col-md-12-->
			</div>
			<!--end row-->

			<p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;">You received this message because this email was used to create an account at <a href="<?php echo base_url();?>">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="<?php echo base_url();?>main/unsubscribe">unsubscribe.</a></p>

        </div>
        <!--end container-->
    </div>
    <!--end page-content-->

    <footer id="page-footer">

            <div class="footer-navigation">
                <div class="container" style="width: 550px;">
                    <div class="vertical-aligned-elements">
                        <div class="element width-50">© 2017 Hyundai Used Car, All right reserved</div>
                    </div>
                </div>
            </div>
    </footer>
    <!--end page-footer-->
</div>
<!--end page-wrapper-->
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>
<a href="#" class="to-top scroll" data-show-after-scroll="600"><i class="arrow_up"></i></a>

<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-2.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyBEDfNcQRmKQEyulDN8nGWjLYPm8s4YB58&libraries=places"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/richmarker-compiled.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/maps.js"></script>

<script>
    rating(".visitor-rating");
    var _latitude = 40.7344458;
    var _longitude = -73.86704922;
    var element = "map-detail";
    simpleMap(_latitude,_longitude, element);
</script>

</body>
</html>
