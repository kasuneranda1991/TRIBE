<!-- login popup -->
<div class="modal fade signin" id="exampleModalEmailVerification" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
			
			<h3 class="text-center text-success">Hello {{ Auth::user()->fname }} we sent verification email,please check your inbox</h3>
      </div>
    </div>
  </div>
</div>