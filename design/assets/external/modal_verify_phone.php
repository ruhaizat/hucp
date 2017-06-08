<?php

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Verify Phone Number</h2>
                <p>A verification number is SMS to your mobile number +601234567890. Please key in the number to verify.</p>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Verification Code">
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Verify</button>
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Cancel</button>
                </div>
                <!--end form-group-->
            </form>

            <hr>
            <div class="noti-error">We are sorry! You have entered an incorrect verification code.</div>
            <a href="#" data-modal-external-file="modal_reset_password.php" data-target="modal-reset-password">Resend verification code.</a>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
