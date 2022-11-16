<?php
include 'navbar.php';
$title = 'Dashboard';
?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">
                <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                    <span class="fs-4 d-none d-sm-inline my-5">Welcome<br> name name</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-house text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-gauge text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Dashboard</span> </a>
                    </li>
                    
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-user text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Profile</span> </a>
                    </li>
                    <li>
                        <a href="login.php" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-right-from-bracket text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Sign out</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col py-3">
			<div class="row">
        <h3 class=" text-end col-6 my-5">all games</h3>
        <div class=" col text-end">
				<button class="  rounded text-light bg-black mx-2 my-5" type="button" >Add Game <i class="fa-solid fa-plus"></i></button>
        </div>
			</div>
     
    </div>
</div>



</body>
</html>