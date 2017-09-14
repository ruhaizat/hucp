    <script>
	$(document).ready(function(){
		var Status = "<?php echo $Status;?>";
		
		if(Status == "AlreadyUsed"){
			$(".chgNo").show();
			$(".chgYes").hide();
			$("#sNoti").text("Link already used. Please apply for a new request.");
			//$("#ChangePwdNoti").modal("show");
		}else if(Status == "LinkExpired"){
			$(".chgNo").show();
			$(".chgYes").hide();
			$("#sNoti").text("Link already expired. Please apply for a new request.");
			//$("#ChangePwdNoti").modal("show");
		}else{
			$(".chgNo").hide();
			$(".chgYes").show();
		}
	});
		
		function ChangePassword(){
			var pPassword = $("#chg_password").val();
			var pConfirmPassword = $("#chg_confirm_password").val();
			var pToken = $("#hToken").val();
			var pEmailAddress = "<?php echo $chgPwdEmail;?>";
			
			if(pPassword == ""){
				isProceed = false;
				$("#noti-error-chg-pwd-empty").show();
				$("#noti-error-chg-pwd-match").hide();
			}else{
				if(pPassword != pConfirmPassword){
					isProceed = false;
					$("#noti-error-chg-pwd-empty").hide();
					$("#noti-error-chg-pwd-match").show();
				}else{
					isProceed = true;
					$("#noti-error-chg-pwd-empty").hide();
					$("#noti-error-chg-pwd-match").hide();
				}
			}

			if(isProceed == true){
				var datastr = '{"mode":"ChangePassword","EmailAddress":"'+pEmailAddress+'","Password":"'+pPassword+'","Token":"'+pToken+'"}';
				$.ajax({
					url: "<?php echo base_url();?>ForgotPwd/ajax",
					type: "POST",
					data: {"datastr":datastr},
					success: function(data){
						$("#sHeader").text("Success");
						$("#sNotiSuccess").text("Password successfully changed");
						$("#ChangePwdNoti").modal("show");
					}
				});
			}
		}
    </script>
	<div id="page-content">
	<input type="hidden" id="hToken" value="<?php echo $Token;?>"/>
      <section class="block big-padding">
          <div class="container">
			<form id="frmChangePwd" onsubmit="event.preventDefault();ChangePassword();" class="form inputs-underline">
              <div class="vertical-aligned-elements">
                  <div class="element width-50">
                    <h2>Change Password</h2>
                      <h3>Change password for account with email address <b><i><?php echo $chgPwdEmail;?></b></i>.</h3>
                  </div>
                  <!--end element-->
						<div class="form-group chgNo">
							<h3><span id="sNoti"></span></h3>
						</div>
						<div class="form-group chgYes">
							<label for="password">New Password</label>
							<input type="password" class="form-control" name="password" id="chg_password" placeholder="Password">
							<div id="noti-error-chg-pwd-empty" class="noti-error" style="display:none;">Password cannot empty.</div>
						</div>
						<!--end form-group-->
						<div class="form-group chgYes">
							<label for="confirm_password">Confirm New Password</label>
							<input type="password" class="form-control" name="confirm_password" id="chg_confirm_password" placeholder="Confirm Password">
							<div id="noti-error-chg-pwd-match" class="noti-error" style="display:none;">Password does not match.</div>
						</div>
						<!--end form-group-->
						<input type="submit" class="btn btn-primary btn-light-frame btn-rounded btn-framed arrow chgYes" value="Change Password" />
              </div>
              <!--end vertical-aligned-elements-->
			  </form>
          </div>
          <!--end container-->
          <div class="background-wrapper">
              <div class="background-color background-color-black opacity-5"></div>
          </div>
          <!--end background-wrapper-->
      </section>
      <!--end block-->

    </div>
    <!--end page-content-->
	<div class="modal fade" id="ChangePwdNoti" tabindex="-1" role="basic" aria-hidden="true">
		<div class="modal-dialog width-400px" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<div class="section-title center">
						<h2><span id="sHeader"></span></h2>
					</div>
				</div>
				<div class="modal-body">
					<form class="form inputs-underline" action="<?php echo base_url();?>">
						<div class="form-group center">
						<span id="sNotiSuccess"></span>
						</div>
						<!--end form-group-->
						<div class="form-group center">
							<button type="submit" class="btn btn-primary width-100">OK</button>
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
	</div>