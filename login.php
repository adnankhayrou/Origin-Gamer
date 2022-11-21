<?php
include 'script.php';
$title = 'Sign Up';
include 'navbar.php';

?>


<div class=" vh-100 d-flex justify-content-center align-items-center ">
<form action="" method="POST" id="form" class="col-4 " data-parsley-validate>
<div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">LOGIN</h5>
					</div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="Email" class="form-control" aria-describedby="emailHelp" data-parsley-type="email" required>
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="Password" class="form-control" id="exampleInputPassword1" data-parsley-minlength="8"
      data-parsley-errors-container=".errorspanpassinput"
      data-parsley-required-message="Please enter your password."
      data-parsley-uppercase="1"
      data-parsley-lowercase="1"
      data-parsley-number="1"
      data-parsley-special="1"
      data-parsley-required>
  </div>
  <div  class="text-center">
    <button type="submit" name="login" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Login</button>
  </div>
  <div  class="text-center">
    <p class=" my-2 ">don't have an acount! <a href="signup.php" class="register-text text-danger"> Register Now</a></p>
  </div>
</form>
</div>

</body>	
</html>