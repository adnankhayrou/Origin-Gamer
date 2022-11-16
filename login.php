<?php
$title = 'Sign Up';
include 'navbar.php';
?>


<div class=" vh-100 d-flex justify-content-center align-items-center ">
<form class="col-4 ">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div  class="text-center">
    <button type="submit" class="btn btn-dark d-grid gap-2 col-6 mx-auto">Login</button>
  </div>
  <div  class="text-center">
    <p class=" my-2 ">don't have an acount! <a href="signup.php" class="register-text text-danger"> Register Now</a></p>
  </div>
</form>
</div>

</body>	
</html>