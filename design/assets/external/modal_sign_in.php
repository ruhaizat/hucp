<?php

echo

'<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Sign In</h2>
            </div>
        </div>
        <div class="modal-body">
            <form class="form inputs-underline">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com">
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                </div>
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100">Sign In</button>
                </div>
                <!--end form-group-->
                <div class="form-group center">
                    <button type="submit" class="btn btn-primary width-100"><i class="fa fa-facebook-official"></i> Sign In with Facebook</button>
                </div>
                <!--end form-group-->
            </form>

            <hr>
            <div class="noti-error">We are sorry! You have entered an incorrect username/password combination.</div>
            <a href="#" data-modal-external-file="modal_reset_password.php" data-target="modal-reset-password">I have forgot my password</a>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
