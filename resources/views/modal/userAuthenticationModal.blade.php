<!-- login popup -->
<div class="modal fade signin" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body login-popup">
		<div class="left">
			<img src="img/logo-high.png" width="400" height="auto">
		</div>

		<div class="right">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Sign in</h1>
			<p>Welcome to tribe!</p>

			<form action="/loginUser" method="post">
			{{ csrf_field() }}
			<fieldset>
				<div class="form-group">
				<label for="disabledTextInput">Email address or Username</label>
				<input type="text" id="disabledTextInput" required name="email" class="form-control" placeholder="john.doe@gmail.com">
				</div>
				<div class="form-group">
				<label for="disabledTextInput">Password</label>
				<input type="password" id="disabledTextInput" required name="password" class="form-control" placeholder="">
				</div>
				<button type="submit" class="btn btn-primary btn-block">Sign In</button>
				<div class="form-check">
				<a data-toggle="modal" data-target="#forgot"  data-dismiss="modal" class="link1">Reset password</a>
				</div>
				<div class="form-check">
				<a href="#" data-toggle="modal" data-target="#signup" data-dismiss="modal" class="link2">Create new account</a>
				</div>
				<div class="login-or">
					<hr class="hr-or">
					<span class="span-or">or</span>
				</div>
				<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-google" aria-hidden="true"></i> Sign In with Google</button>
				<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign In with Facebook</button>
			</fieldset>
			</form>
		</div>


      </div>
    
    </div>
  </div>
</div>


<!-- signup popup -->
<div class="modal fade signin" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body signup-popup">
		<div class="left">
			<img src="img/logo-high.png" width="400" height="auto">
		</div>

		<div class="right">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Create an Account</h1>
			<p>Welcome to tribe!</p>

			<form action="/register-user" method="post">
			{{ csrf_field() }}
			<fieldset>
				
				<div class="row">
					<div class="form-group col-md-6">
					<label for="disabledTextInput">First Name</label>
					<input type="text" id="disabledTextInput" required name="fname" class="form-control" placeholder="">
					</div>
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Last Name</label>
					<input type="text" id="disabledTextInput" required name="lname" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-4">
					<label for="disabledTextInput">Date of Birth</label>
					<input type="text" id="disabledTextInput" required name="birthday" class="form-control" placeholder="DD/MM/YYYY">
					</div>
					<div class="form-group col-md-8">
					<label for="disabledTextInput">Mobile number</label> <small>(Optional)</small>
					<input type="text" id="disabledTextInput" required name="mobile" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					<label for="disabledTextInput">Email</label>
					<input type="text" id="disabledTextInput" required name="email" class="form-control" placeholder="john.doe@gmail.com">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Password</label>
					<input type="password" id="disabledTextInput" required name="password" class="form-control" placeholder="">
					</div>
					<div class="form-group col-md-6">
					<label for="disabledTextInput">Retype Password <span class="red">*</span></label>
					<input type="password" id="disabledTextInput" required name="passwordCon" class="form-control" placeholder="">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-secondry btn-block">CREATE ACCOUNT</button>
					</div>
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-gray btn-block" data-dismiss="modal">CANCEL</button>
					</div>
				</div>
				<div class="login-or">
					<hr class="hr-or">
					<span class="span-or">or</span>
				</div>
				<div class="row">
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-google" aria-hidden="true"></i> Sign In with Google</button>
					</div>
					<div class="form-group col-md-6">
					<button type="submit" class="btn btn-outline btn-block"><i class="fa fa-facebook-official" aria-hidden="true"></i> Sign In with Facebook</button>
					</div>
					<div class="text-center">
					<small >By continuing you agree to our <a href="#">terms of use</a> and <a href="#">privacy policy</a></small>
					</div>
				</div>
			</fieldset>
			</form>
		</div>
      </div>
    
    </div>
  </div>
</div>

<!-- forgot password link popup -->
<div class="modal fade signin" id="forgot" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body forgot-popup">
		<div class="left">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			<h1>Reset Password</h1>
			<form action="/emailLink" method="post">
				{{ csrf_field() }}
			<fieldset>
				<div class="form-group">
				<label for="disabledTextInput">Email</label>
				<input type="text" id="disabledTextInput" required name="email" class="form-control" placeholder="">
				</div>
				<div class="row">
					<div class="form-group col-md-12">
					<button type="submit" class="btn btn-secondry btn-block">Send Link</button>
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