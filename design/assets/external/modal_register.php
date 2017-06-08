<?php

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Register</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
                    <div class="noti-error">Email address already exists for another account.</div>
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                    <div class="noti-error">Password does not match.</div>
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Register Now</button>
                </div>
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100"><i class="fa fa-facebook-official"></i> Register with Facebook</button>
                </div>
                <!--end form-group-->
            </form>

            <hr>
            <p class="note">By clicking on “Register Now” or "Register with Facebook" button you are accepting the <a href="terms-and-conditions.html" class="underline">Terms & Conditions</a></p>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
