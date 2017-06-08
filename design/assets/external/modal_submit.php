<?php

echo

'<div class="modal-dialog width-800px" role="document" data-latitude="40.7344458" data-longitude="-73.86704922" data-marker-drag="true">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Add Listing (use for edit and add listing)</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
                <section>
                <h3>Car Details</h3>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="title">Model</label>
                                <select class="form-control selectpicker" name="category" id="category">
                                    <option value="">Select a Model</option>
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
                                    <option value="10">i10 Kappa</option>
                                    <option value="10">i30</option>
                                    <option value="10">i40</option>
                                    <option value="10">i40 Sedan</option>
                                    <option value="10">i40 Tourer</option>
                                    <option value="10">IONIQ</option>
                                    <option value="10">Matrix</option>
                                    <option value="10">Md Elantra</option>
                                    <option value="10">Santa FE</option>
                                    <option value="10">Sonata</option>
                                    <option value="10">Starex</option>
                                    <option value="10">Terracan</option>
                                    <option value="10">Trajet</option>
                                    <option value="10">Tucson</option>
                                    <option value="10">Veloster</option>
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--end col-md-6-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="category">Specification</label>
                                <select class="form-control selectpicker" name="category" id="category">
                                    <option value="">Select a Specification</option>
                                    <option value="1">Gamma 1.6L EX</option>
                                    <option value="2">Gamma 1.6L EX Sport</option>
                                    <option value="3">Gamma 1.6L EX Plus</option>
                                    <option value="4">Gamma 1.6L Premium</option>
                                    <option value="5">Nu 1.8L Premium</option>
                                </select>
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--col-md-6-->
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label for="category">Transmission</label>
                                <select class="form-control selectpicker" name="category" id="category">
                                    <option value="">Select a Transmission</option>
                                    <option value="1">Automatic</option>
                                    <option value="2">Manual</option>
                                </select>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="category">Manufacturing Year</label>
                                <select class="form-control selectpicker" name="category" id="category">
                                    <option value="">Manufacturing Year</option>
                                    <option value="1">2018</option>
                                    <option value="2">2017</option>
                                    <option value="3">2016</option>
                                    <option value="4">2015</option>
                                    <option value="5">2014</option>
                                    <option value="6">2013</option>
                                    <option value="7">2012</option>
                                    <option value="8">2011</option>
                                    <option value="9">2010</option>
                                </select>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="category">Mileage</label>
                                <select class="form-control selectpicker" name="category" id="category">
                                    <option value="">Select a Mileage</option>
                                    <option value="1">0 KM</option>
                                    <option value="2">5,000 KM</option>
                                    <option value="3">10,000 KM</option>
                                    <option value="4">15,000 KM</option>
                                    <option value="5">20,000 KM</option>
                                    <option value="5">25,000 KM</option>
                                    <option value="5">30,000 KM</option>
                                    <option value="5">35,000 KM</option>
                                    <option value="5">40,000 KM</option>
                                    <option value="5">45,000 KM</option>
                                    <option value="5">50,000 KM</option>
                                    <option value="5">55,000 KM</option>
                                    <option value="5">60,000 KM</option>
                                    <option value="5">65,000 KM</option>
                                    <option value="5">70,000 KM</option>
                                    <option value="5">75,000 KM</option>
                                    <option value="5">80,000 KM</option>
                                    <option value="5">85,000 KM</option>
                                    <option value="5">90,000 KM</option>
                                    <option value="5">95,000 KM</option>
                                    <option value="5">100,000 KM</option>
                                    <option value="5">105,000 KM</option>
                                </select>
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="category">Colour</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Colour">
                            </div>
                            <!--end form-group-->
                            <div class="form-group">
                                <label for="category">Selling Price</label>
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Selling Price">
                            </div>
                            <!--end form-group-->
                        </div>
                        <!--col-md-6-->
                        <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="category">State</label>
                            <select class="form-control selectpicker" name="category" id="category">
                                <option value="">Select a State</option>
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
                          <div class="form-group">
                              <label for="address-autocomplete">Address</label>
                              <input type="text" class="form-control" name="address" id="address-autocomplete" placeholder="Address">
                          </div>
                          <!--end form-group-->
                          <div class="map height-200px shadow" id="map-modal"></div>
                          <!--end map-->
                          <div class="form-group hidden">
                              <input type="text" class="form-control" id="latitude" name="latitude" hidden="">
                              <input type="text" class="form-control" id="longitude" name="longitude" hidden="">
                          </div>
                          <p class="note">Enter the exact address or drag the map marker to position</p>

                        </div>
                        <!--col-md-6-->
                    </div>
                    <!--end row-->
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" rows="4" name="description" placeholder="Describe the listing"></textarea>
                    </div>
                    <!--end form-group-->

                </section>
                <section>
                    <h3>Gallery</h3>
                    <div class="file-upload-previews"></div>
                    <div class="file-upload">
                        <input type="file" name="files[]" class="file-upload-input with-preview" multiple title="Click to add files" maxlength="10" accept="gif|jpg|png">
                        <span>Click or drag images here</span>
                    </div>
                    <!--end form-group-->
                </section>
                <section>
                    <h3>Specification</h3>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-heading-5">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accordion-collapse-5" aria-expanded="false" aria-controls="accordion-collapse-5">
                                        <i class="fa fa-list-ul"></i>General Specification
                                    </a>
                                </h4>
                            </div>
                            <!--end panel-heading-->
                            <div id="accordion-collapse-5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-5">
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Category</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Passenger Car">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Model Name</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Elantra">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Body Type</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="4 Doors">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Seats</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="5 Seats">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                </div>
                            </div>
                            <!--end panel-collapse-->
                        </div>
                        <!--end panel-->
                    </div>
                    <!--end panel-group-->
                </section>
                <section>
                    <div class="panel-group" id="accordion-6" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-heading-6">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-6" href="#accordion-collapse-6" aria-expanded="false" aria-controls="accordion-collapse-6">
                                        <i class="fa fa-area-chart"></i>Performance
                                    </a>
                                </h4>
                            </div>
                            <!--end panel-heading-->
                            <div id="accordion-collapse-6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-6">
                                <div class="panel-body">
                                    <div class="wrapper">

                                    <h4><b>ENGINE</b></h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Engine Label</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Engine Capacity</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="1.6">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Fuel System</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Displacement (cc)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Power Label</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Power (ps)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Power (kW)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Power (rpm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Torque Label</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Torque (kg.m)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Torque (Nm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Max Torque (rpm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Number of Cylinders</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Valve of Cylinder</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->

                                    <hr>

                                    <h4><b>TRANSMISSION</b></h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Transmission Type</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Drive Type</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Gear (Speed)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Drive Configuration</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="MPI">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->

                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end panel-body-->
                            </div>
                            <!--end panel-collapse-->
                        </div>
                        <!--end panel-->
                    </div>
                    <!--end panel-group-->
                </section>
                <section>
                    <div class="panel-group" id="accordion-7" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-heading-7">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-7" href="#accordion-collapse-7" aria-expanded="false" aria-controls="accordion-collapse-7">
                                        <i class="fa fa-car"></i>Dimension
                                    </a>
                                </h4>
                            </div>
                            <!--end panel-heading-->
                            <div id="accordion-collapse-7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-7">
                                <div class="panel-body">
                                    <div class="wrapper">

                                    <h4><b>EXTERIOR</b></h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Overall Length (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Overall Width (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Overall Height (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Wheel Base (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Front Wheel Tread (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Rear Wheel Tread (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Front Over Hang (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Rear Over Hang (mm)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="Gamma 1.6 Dual CVVT">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->


                                    <hr>

                                    <h4><b>CARGO</b></h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Cargo Area (VDA)</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="6 Speed Automatic FWD">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <!--end row-->

                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end panel-body-->
                            </div>
                            <!--end panel-collapse-->
                        </div>
                        <!--end panel-->
                    </div>
                    <!--end panel-group-->
                </section>
                <section>
                    <div class="panel-group" id="accordion-8" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="accordion-heading-8">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion-8" href="#accordion-collapse-8" aria-expanded="false" aria-controls="accordion-collapse-8">
                                        <i class="fa fa-gear"></i>Wheels
                                    </a>
                                </h4>
                            </div>
                            <!--end panel-heading-->
                            <div id="accordion-collapse-8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-heading-8">
                                <div class="panel-body">
                                    <div class="wrapper">
                                    <h4><b>WHEELS & TIRES</b></h4>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Front Wheels</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="6 Speed Automatic FWD">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Rear Wheels</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="6 Speed Automatic FWD">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Front Tires</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="6 Speed Automatic FWD">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 col-sm-3 horizontal-input-title">
                                            <strong>Rear Tires</strong>
                                        </div>
                                        <!--end col-md-3-->
                                        <div class="col-md-9 col-sm-9">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="open_hours[]" placeholder="6 Speed Automatic FWD">
                                            </div>
                                            <!--end form-group-->
                                        </div>
                                        <!--end col-md-9-->
                                    </div>


                                    </div>
                                    <!--end wrapper-->
                                </div>
                                <!--end panel-body-->
                            </div>
                            <!--end panel-collapse-->
                        </div>
                        <!--end panel-->
                    </div>
                    <!--end panel-group-->
                </section>

                <hr>
                <section class="center">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-rounded">Preview & Submit Listing</button>
                        <button type="submit" class="btn btn-primary btn-rounded">Save Changes</button>
                        <button type="submit" class="btn btn-primary btn-framed btn-rounded btn-light-frame">Cancel</button>
                    </div>
                    <!--end form-group-->
                </section>
            </form>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
