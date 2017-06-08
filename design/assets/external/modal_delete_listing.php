<?php

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Delete Advertisement</h2>
                <p>Please share your reason to delete the listing.</p>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
            <div class="form-group">
                <select class="form-control selectpicker" name="category" id="category">
                    <option value="">Select a Reason</option>
                    <option value="1">I sold my car using this website.</option>
                    <option value="1">I sold my car elsewhere.</option>
                    <option value="2">I decided not to sell my car.</option>
                    <option value="3">No reason.</option>
                </select>
            </div>
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Delete Listing</button>
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Cancel</button>
                </div>
                <!--end form-group-->
            </form>


        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
