<?php

$currentLocation = "";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devhucp";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM tbl_listing WHERE ID = ".$_POST['id'];
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		json_encode(
			$data = array(
				[
					'ID'=>$row['ID'],
					'Status'=>$row['Status'],
					'Model'=>$row['Model'],
					'Specification'=>$row['Specification'],
					'Transmission'=>$row['Transmission'],
					'ManufacturingYear'=>$row['ManufacturingYear'],
					'Mileage'=>$row['Mileage'],
					'Colour'=>$row['Colour'],
					'SellingPrice'=>$row['SellingPrice'],
					'Description'=>$row['Description'],
					'Address'=>$row['Address'],
					'Latitude'=>$row['Latitude'],
					'Longitude'=>$row['Longitude'],
					//'S_Category'=>$row['S_Category'],
					//'S_ModelName'=>$row['S_ModelName'],
					//'S_BodyType'=>$row['S_BodyType'],
					//'S_Seats'=>$row['S_Seats'],
					//'PE_EngineLabel'=>$row['PE_EngineLabel'],
					//'PE_EngineCapacity'=>$row['PE_EngineCapacity'],
					//'PE_FuelSystem'=>$row['PE_FuelSystem'],
					//'PT_TransmissionType'=>$row['PT_TransmissionType'],
					//'PT_DriveType'=>$row['PT_DriveType'],
					//'PT_Gear'=>$row['PT_Gear'],
					//'DE_EngineLabel'=>$row['DE_EngineLabel'],
					//'DE_EngineCapacity'=>$row['DE_EngineCapacity'],
					//'DE_FuelSystem'=>$row['DE_FuelSystem'],
					//'DT_TransmissionType'=>$row['DT_TransmissionType'],
					//'DT_DriveType'=>$row['DT_DriveType'],
					//'DT_Gear'=>$row['DT_Gear'],
					//'WE_EngineLabel'=>$row['WE_EngineLabel'],
					//'WE_EngineCapacity'=>$row['WE_EngineCapacity'],
					//'WE_FuelSystem'=>$row['WE_FuelSystem'],
					//'WT_TransmissionType'=>$row['WT_TransmissionType'],
					//'WT_DriveType'=>$row['WT_DriveType'],
					//'WT_Gear'=>$row['WT_Gear'],
					'AddedOn'=>$row['AddedOn'],
					'AddedBy'=>$row['AddedBy'],
					'ModifiedOn'=>$row['ModifiedOn'],
					'ModifiedBy'=>$row['ModifiedBy'],
					'IsFeatured'=>$row['IsFeatured'],
					'category'	=> 'used'
				])
		);
    }
}

$sql = "SELECT * FROM tbl_listingimage WHERE ListingID = ".$_POST['id'];
$result = $conn->query($sql);
			$dataImg = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
		array_push($dataImg,$row['ListingPic']);
    }
}
json_encode($dataImg);


$currentLocation = $data[0]; // Loaded data must be stored in the "$currentLocation" variable
$imgFileName = $dataImg;
// Modal HTML code

echo

'<div class="modal-item-detail modal-dialog" role="document" data-latitude="'. $currentLocation['Latitude'] .'" data-longitude="'. $currentLocation['Longitude'] .'" data-address="'. $currentLocation['Address'] .'">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>'. $currentLocation['Model'] .'</h2>
                <div class="label label-default">'. $currentLocation['category'] .'</div>';

                // Ribbon ------------------------------------------------------------------------------------------

                if( ($currentLocation['IsFeatured'] == 1) ){
                    echo
                        '<figure class="ribbon">Featured</figure>';
                }

                // Rating ------------------------------------------------------------------------------------------

                if( !empty($currentLocation['rating']) ){
                    echo
                    '<div class="rating-passive" data-rating="'. $currentLocation['rating'] .'">
                        <span class="stars"></span>
                        <span class="reviews">'. $currentLocation['reviews_number'] .'</span>
                    </div>';
                }

                echo
                '<div class="controls-more">
                    <ul>
                        <li><a href="#">Add to favorites</a></li>
                        <li><a href="#">Add to watchlist</a></li>
                    </ul>
                </div>
                <!--end controls-more-->
            </div>
            <!--end section-title-->
        </div>
        <!--end modal-header-->
        <div class="modal-body">
            <div class="left">';

                // Gallery -----------------------------------------------------------------------------------------

                if( !empty($dataImg) ){
                    $gallery = "";
                    for($i=0; $i < count($dataImg); $i++){
                        $gallery .= '<img src="http://localhost/devhucp/assets/img/listing/'.$dataImg[$i] .'" alt="">';
                    }
                    echo
                    '<div class="gallery owl-carousel" data-owl-nav="1" data-owl-dots="0">'. $gallery .'</div>
                    <!--end gallery-->';
                }

                echo
                '<div class="map" id="map-modal-qd"></div>
                <!--end map-->

                <section>
                <h3>Contact</h3>';
                // Contact -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['Address']) ){
                    echo
                        '<h5><i class="fa fa-map-marker"></i>'. $currentLocation['Address'] .'</h5>';
                }

                // Phone -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['MobileNo']) ){
                    echo
                        '<h5><i class="fa fa-phone"></i>'. $currentLocation['MobileNo'] .'</h5>';
                }

                // Email -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['EmailAddress']) ){
                    echo
                        '<h5><i class="fa fa-envelope"></i>'. $currentLocation['EmailAddress'] .'</h5>';
                }

                echo
                '</section>
                <section>
                    <h3>Social Share</h3>
                    <div class="social-share"></div>
                </section>
            </div>
            <!--end left -->
            <div class="right">
                <section>
                    <h3>About</h3>
                    <div class="read-more"><p>'. $currentLocation['Description'] .'</p></div>
                </section>
                <!--end about-->';

                // Tags ----------------------------------------------------------------------------------------------------------------

                if( !empty($currentLocation['tags']) ){
                    $tags = "";
                    for($i=0; $i < count($currentLocation['tags']); $i++){
                        $tags .= '<li>'. $currentLocation['tags'][$i] .'</li>';
                    }
                    echo
                        '<section>
                            <h3>Features</h3>
                            <ul class="tags">'.  $tags .'</ul>
                    </section>
                    <!--end tags-->';
                }

                // Today Menu --------------------------------------------------------------------------------------

                if( !empty($currentLocation['today_menu']) ){
                    echo
                    '<section>
                        <h3>Today menu</h3>';
                    for($i=0; $i < count($currentLocation['today_menu']); $i++){
                        echo
                            '<ul class="list-unstyled list-descriptive icon">
                                <li>
                                    <i class="fa fa-cutlery"></i>
                                    <div class="description">
                                        <strong>'. $currentLocation['today_menu'][$i]['meal_type'] .'</strong>
                                        <p>'. $currentLocation['today_menu'][$i]['meal'] .'</p>
                                    </div>
                                </li>
                            </ul>
                            <!--end list-descriptive-->';
                    }
                    echo
                    '</section>
                    <!--end today-menu-->';
                }

                // Schedule ----------------------------------------------------------------------------------------

                if( !empty($currentLocation['schedule']) ){
                    echo
                    '<section>
                        <h3>Schedule</h3>';
                    for($i=0; $i < count($currentLocation['schedule']); $i++){
                        echo
                            '<ul class="list-unstyled list-schedule">
                                <li>
                                    <div class="left">
                                        <strong class="promoted">'. $currentLocation['schedule'][$i]['date'] .'</strong>
                                        <figure>'. $currentLocation['schedule'][$i]['time'] .'</figure>
                                    </div>
                                    <div class="right">
                                        <strong>'. $currentLocation['schedule'][$i]['location_title'] .'</strong>
                                        <figure>'. $currentLocation['schedule'][$i]['location_address'] .'</figure>
                                    </div>
                                </li>
                            </ul>
                            <!--end list-schedule-->';
                    }
                    echo
                    '</section>
                    <!--end schedule-->';
                }

                // Video -------------------------------------------------------------------------------------------

                if( !empty($currentLocation['video']) ){
                    echo
                    '<section>
                        <h3>Video presentation</h3>
                        <div class="video">'. $currentLocation['video'] .'</div>
                    </section>
                    <!--end video-->';
                }

                // Description list --------------------------------------------------------------------------------

                if( !empty($currentLocation['description_list']) ){
                    echo
                    '<section>
                        <h3>Listing Details</h3>';
                        for($i=0; $i < count($currentLocation['description_list']); $i++){
                            echo
                                '<dl>
                                    <dt>'. $currentLocation['description_list'][$i]['title'] .'</dt>
                                    <dd>'. $currentLocation['description_list'][$i]['value'] .'</dd>
                                </dl>
                                <!--end property-details-->';
                        }
                    echo
                    '</section>
                    <!--end description-list-->';
                }

                // Reviews -----------------------------------------------------------------------------------------

                if( !empty($currentLocation['reviews']) ){
                    echo
                    '<section>
                        <h3>Latest reviews</h3>';
                    for($i=0; $i < 2; $i++){
                        echo
                            '<div class="review">
                                <div class="image">
                                    <div class="bg-transfer" style="background-image: url('. $currentLocation['reviews'][$i]['author_image'] .')"></div>
                                </div>
                                <div class="description">
                                    <figure>
                                        <div class="rating-passive" data-rating="'. $currentLocation['reviews'][$i]['rating'] .'">
                                            <span class="stars"></span>
                                        </div>
                                        <span class="date">'. $currentLocation['reviews'][$i]['date'] .'</span>
                                    </figure>
                                    <p>'. $currentLocation['reviews'][$i]['review_text'] .'</p>
                                </div>
                            </div>
                            <!--end review-->';
                    }
                    echo
                    '</section>
                    <!--end reviews-->';
                }
            echo
            '</div>
            <!--end right-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->
';
