<!-- forgot password popup -->
<div class="modal fade signin" id="resetPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body forgot-popup">
		<div class="left">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Change Password</h1>
			<form action="/reset-password" method="post">
				{{ csrf_field() }}
			<fieldset>
				<div class="form-group">
				<label for="disabledTextInput">Email</label>
				<input type="text" id="disabledTextInput" name="email" required class="form-control" placeholder="john.doe@gmail.com">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">New Password</label>
				<input type="text" id="disabledTextInput" name="password" required class="form-control" placeholder="">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">Confirm Password</label>
				<input type="text" id="disabledTextInput" name="passwordCon" required class="form-control" placeholder="">
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					<button type="submit" class="btn btn-secondry btn-block">Change Password</button>
					</div>
					<div class="form-group col-md-12">
					<button type="submit" class="btn btn-gray btn-block">Cancel</button>
					</div>
				</div>
			</fieldset>
			</form>
		</div>

		<div class="right">
			<img src="img/forgot-password-img.png" width="100%" height="auto">
			
		</div>


      </div>
    
    </div>
  </div>
</div>