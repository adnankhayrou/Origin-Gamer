<?php
include 'script.php';
$title = 'Login';
include 'navbar.php';


// if(isset($_POST['signup']))
// {
//    $fullName = htmlspecialchars(trim($_POST['Name']));
//    $Email = htmlspecialchars(strtolower(trim($_POST['Email'])));
//    $Password = htmlspecialchars(trim(md5($_POST['Password'])));
  
//    $query = "INSERT INTO admins (name, email, password) VALUES('$fullName','$Email','$Password')";
//    mysqli_query($connect, $query);
// }
?>


<div class="vh-100 d-flex justify-content-center align-items-center">
    <form action="" method="POST" id="form-task" class="col-4">
    <div class="modal-header row">
						<h5 class="modal-title mt-5 fs-3 text-center">REGISTER</h5>
					</div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Full Name</label>
            <input type="text" name="Name" class="form-control " required>
            </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="Password" class="form-control" id="exampleInputPassword1" required>
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