<?php
$title = 'Login';
include 'navbar.php';
?>


<div class="vh-100 d-flex justify-content-center align-items-center">
    <form class="col-4">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" class="form-control" >
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
        <div  class="text-center">
            <button type="submit" class="btn btn-dark d-grid gap-2 col-6 mx-auto">sign Up</button>
        </div>
        <div  class="text-center">
            <p class=" my-2 ">already have an acount! <a href="login.php" class="register-text text-danger"> login</a></p>
        </div>
    </form>
</div>

</body>
</html>