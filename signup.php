<?php
include 'script.php';
$title = 'Login';
include 'navbar.php';

?>

<!-- edit game form -->
<div class="vh-100 d-flex justify-content-center align-items-center">
    <form action="" method="POST" id="form-task" class="col-4" data-parsley-validate>
    <div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">REGISTER</h5>
					</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="Name" class="form-control " required>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control" aria-describedby="emailHelp" data-parsley-type="email" required>
            </div>
            <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="Password" id="password1" class="form-control"  data-parsley-minlength="8"
                 data-parsley-errors-container=".errorspanpassinput"
                 data-parsley-required-message="Please enter your password."
                 data-parsley-uppercase="1"
                 data-parsley-lowercase="1"
                 data-parsley-number="1"
                 data-parsley-special="1"
                 data-parsley-required/>
       </div>
       <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Comnfirm Password</label>
          <input type="password" name="Password" class="form-control"  data-parsley-minlength="8"
          data-parsley-minlength="8"
          data-parsley-errors-container=".errorspanconfirmpassinput"
          data-parsley-required-message="Please re-enter your password."
          data-parsley-equalto="#password1"
          data-parsley-required/>
       </div>
        <div  class="text-center">
            <button type="submit" name="signup" class="btn btn-dark d-grid gap-2 col-6 mx-auto">sign Up</button>
        </div>
        <div  class="text-center">
            <p class=" my-2 ">already have an acount! <a href="login.php" class="register-text text-danger"> login</a></p>
        </div>
    </form>
</div>

</body>
</html>