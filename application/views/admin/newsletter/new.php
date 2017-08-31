<!-- include libries(jQuery, bootstrap, fontawesome) -->
<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

<!-- include summernote css/js-->
<link href="//oss.maxcdn.com/summernote/0.5.1/summernote.css" rel="stylesheet">
<script src="//oss.maxcdn.com/summernote/0.5.1/summernote.min.js"></script>


    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css" type="text/css">
	<script src="<?php echo base_url();?>assets/js/html2canvas.min.js"></script>
<style>
.note-editor.fullscreen {
    position: fixed;
    top: 50px;
    left: 0;
    z-index: 1050;
    width: 100%;
}
</style>
				<script>
					function renderContent() {

						var htmlstr = $("#summernote").code() + '<center><div class="container" style="width: 550px;"><ol class="breadcrumb"></ol><img src="<?php echo base_url();?>assets/img/logo_kuc.png" height="20px" align="left"><p class="pull-right"><a href="<?php echo base_url();?>listing"><b>Click here</b></a> to view all listings.</p></div><div class="container" style="width: 550px; padding-top: 50px;text-align:left;"><div class="row"><div class="col-md-12 col-sm-12"><div id="gallery-nav"></div><section style="text-align:left;"><h1>Hyundai Veloster</h1><h2>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h2><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur tristique enim, ac tincidunt massa pulvinar non. Donec scelerisque libero eu tincidunt cursus. Phasellus vel commodo nunc, nec suscipit enim. Integer suscipit, mauris consectetur pharetra ultrices, neque sem malesuada mauris, id tristique ante leo vel magna. Phasellus ac risus vel erat elementum fringilla et non massa. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p></section><section><div class="row">';
						htmlstr += '<?php $i = 0;foreach($recentData as $eachRecent):$i++;?>';
						htmlstr += '<a href="<?php echo base_url().'listing/details/'.$eachRecent->ListingID.'/'.$eachRecent->AddedBy;?>"><img id="divEROri_<?php echo $i;?>" class="col-md-6 col-sm-6" style="width:245px;height:220px;" src="<?php echo base_url();?>assets/img/newsletter/<?php echo $eachRecent->FileName;?>"></img></a>';
						htmlstr += '<?php endforeach;?></div>';
						htmlstr += '</section></div></div><p data-toggle="modal" data-target="#myModal" style="font-size: 12px; padding-bottom: 50px;text-align:left;">You received this message because this email was used to create an account at <a href="<?php echo base_url();?>">Hyundai Used Car.</a> Ensure delivery of future emails by adding <a href="#">newsletter@email.com</a> to your address book, or <a href="<?php echo base_url();?>main/unsubscribe/1">unsubscribe.</a></p></div></center>';

						$('#summernote').code(htmlstr);
<<<<<<< HEAD

						soch2c();
=======
						
>>>>>>> 59466521cf931206fd5d02a2373b686eb2ed1d38
						$("#hhtmlstr").val($("#summernote").code());
					}

					$(document).ready(function(){
						//document.body.style.overflow = 'hidden';
						$("#iLL").click(function () {
							renderContent();
						});

						$("#frmNewCampaign").submit(function(e){
							$("#hhtmlstr").val($("#summernote").code());
						});
					});
<<<<<<< HEAD

					var counth2c = 1;
					window.soch2c = function(){
						html2canvas(document.getElementById("divER_"+counth2c), {
							onrendered: function(canvas) {
								var img = canvas.toDataURL("image/png");
								var output = encodeURIComponent(img);

								var Parameters = "image=" + output;
								$.ajax({
									type: "POST",
									url: "savePNG",
									data: Parameters,
									success : function(data)
									{
										$("#divEROri_"+counth2c).attr("src", "<?php echo base_url();?>assets/img/newsletter/"+data);
										counth2c++;
										if(counth2c < 8){soch2c();}
										else{counth2c = 1;$(".rowHide").hide();}
									}
								});
							}
						});
					}
=======
					
>>>>>>> 59466521cf931206fd5d02a2373b686eb2ed1d38
					window.onload = function() {
						$('#summernote').summernote({
							height: 300
						});
					};
				</script>
                <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> <i class="icon-envelope"></i> Newsletter
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-lg-12 col-xs-12 col-sm-12">
                              <div class="portlet light bordered">
                                  <div class="portlet-title">
                                      <div class="caption">
                                          <span class="caption-subject font-dark bold uppercase">New Campaign</span>
                                      </div>
                                  </div>
                                  <div class="portlet-body form">
                                      <!-- BEGIN FORM-->
                                      <form id="frmNewCampaign" method="post" action="newslettersendmail" class="form-horizontal">
                                          <div class="form-body">
											  <input id="iLL" type="button" class="btn green" value="Latest Listings" />
                                          </div>
										  <div class="form-body">
                                            <label class="col-md-3 control-label">Newsletter Subject<br/>(will appear in email subject)</label>
                                            <div class="col-md-4">
											   <input name="subject" type="text" placeholder="New Listings" />
                                            </div>
                                          </div>
										  <br/>
                                          <div class="form-body">
											  <div id="summernote">

											  </div>
										  </div>
                                          <div class="form-actions">
                                              <div class="row">
                                                  <div class="col-md-offset-3 col-md-4">
                                                      <button id="btnCreateUser" type="submit" class="btn green">Save</button>
                                                  </div>
                                              </div>
                                          </div>
										  <input type="hidden" name="hhtmlstr" id="hhtmlstr"/>
                                      </form>
                                      <!-- END FORM-->
                                  </div>
                              </div>
                            </div>
                        </div>
<<<<<<< HEAD
						<div class="row" style="visibility:collapse;">
							<?php $i = 0;foreach($recentData as $eachRecent):$i++;?>
							<div id="divER_<?php echo $i;?>" style="width:245px;">
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
										</div>
										<!--end controls-more-->
									</div>
									<!--end additional-info-->
								</div>
								<!--end item-->
							</div>
							<!--<end col-md-3-->
							<?php endforeach;?>

							<div id="test1" style="width:245px;">
							</div>
						</div>
						<!--end row-->
=======
>>>>>>> 59466521cf931206fd5d02a2373b686eb2ed1d38
                        </div>
					</div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
