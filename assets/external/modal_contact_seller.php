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
                <h2>Contact Seller</h2>
            </div>
        </div>
        <div class="modal-body">
            <form id="frmSignIn" class="form inputs-underline">
								<div class="form-group">										<label for="email">Name<span class="noti-error">*</span></label>										<input type="email" class="form-control" name="email" id="email" placeholder="Your Name">								</div>								<!--end form-group-->								<div class="form-group">
                    <label for="email">Email<span class="noti-error">*</span></label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your email">
                </div>
                <!--end form-group-->
								<div class="form-group">                    <label for="email">Telephone<span class="noti-error">*</span></label>                    <input type="email" class="form-control" name="email" id="email" placeholder="+601234567890">                </div>                <!--end form-group-->								<div class="form-group">										<label for="description">Message<span class="noti-error">*</span></label>										<textarea class="form-control" id="description" rows="4" name="description" placeholder="Message to the seller"></textarea>								</div>								<!--end form-group-->
					<input id="btnSignIn" type="button" value="Send Message" onclick="submitForm" class="btn btn-primary width-100" />                </div>
                <!--end form-group-->
            </form>						<hr>            <span class="noti-error">*</span>All field are required.            <!--end form-->

        </div>
        <!--end modal-body-->
    </div>
    <!--end modal-content-->
</div>
<!--end modal-dialog-->';
