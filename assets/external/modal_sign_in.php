<?php

echo

'	<script>
		$(document).ready(function(){
			$("#btnSignIn").click(function(){
				var pUsername = $("#email").val();
				var pPassword = $("#password").val();
				var datastr = "{"+"mode":"SignIn","Username":"+pUsername+","Password":"+pPassword+"}";
				alert(datastr);
				$.ajax({
					url: "<?php echo base_url();?>main/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						//success
					}
				});
				alert($("#email").val());
				alert($("#password").val());
			});
		});
		
		window.fbAsyncInit = function() {
			FB.init({
				appId      : "812906572199004",
				cookie     : true,  // enable cookies to allow the server to access 
									// the session
				xfbml      : true,  // parse social plugins on this page
				version    : "v2.9" // use graph api version 2.8
			});
		};
	
		(function(d, s, id) {
			var js, fjs = d.getElementsByTagName(s)[0];
			if (d.getElementById(id)) return;
			js = d.createElement(s); js.id = id;
			js.src = "//connect.facebook.net/en_US/sdk.js";
			fjs.parentNode.insertBefore(js, fjs);
		}(document, "script", "facebook-jssdk"));
			
		function statusChangeCallback(response) {
			if (response.status === "connected") {
				getUserFBInfo();
			} else {
				// The person is not logged into your app or we are unable to tell.
			}
		}
		
		function checkLoginState() {
			FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
			});
		}
		
		function getUserFBInfo() {
			FB.api("/me", function(response) {
				console.log("Successful login for: " + response.name);
			});
		}
	</script>
	<div class="modal-dialog width-400px" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="section-title">
                <h2>Sign In</h2>
            </div>
        </div>
        <div class="modal-body">
            <form id="frmSignIn" class="form inputs-underline">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                </div>
                <!--end form-group-->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                </div>
                <div class="form-group center">
					<input id="btnSignIn" type="button" value="Sign In" onclick="submitForm" class="btn btn-primary width-100" />
					<br/>
					<br/>
					OR
					<br/>
					<br/>
					<fb:login-button scope="public_profile,email" onlogin="checkLoginState();"></fb:login-button>
                </div>
                <!--end form-group-->
            </form>

            <hr>

            <a href="#" data-modal-external-file="modal_reset_password.php" data-target="modal-reset-password">I have forgot my password</a>
            <!--end form-->
        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';