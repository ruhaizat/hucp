<?php

echo

'<div class="modal-dialog width-350px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Help us understand what is happening?</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
            <div class="form-group">
              <label for="category">Condition</label>
              <select class="form-control selectpicker" name="ALTransmission" id="ALTransmission">
                <option value="">What is going on?</option>
                <option value="1">This car is sold.</option>
                <option value="2">The images are not the car sold.</option>
                <option value="3">The spec are as per advertise.</option>
              </select>
            </div>
            <!--end form-group-->
            <div class="form-group">
              <label for="description">Description</label>
              <textarea class="form-control" id="ALDescription" rows="5" name="ALDescription" placeholder="Describe what is happening."></textarea>
            </div>
            <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Send Report</button>
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

';
