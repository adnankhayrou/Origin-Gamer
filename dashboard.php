<?php
include 'script.php';
$title = 'Dashboard';
include 'navbar.php';


if(!isset($_SESSION['name'])){
   header('location: login.php');
}
?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- ***********side bar************ -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed">
            <div class=" d-flex flex-column align-items-center align-items-sm-start my-5 px-3 pt-2 text-white vh-100">
               
                    <span class="fs-4 d-none d-sm-inline my-3">Welcome<br><?php echo $_SESSION['name'] ?></span>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item">
                        <a href="#" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-house text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Home</span>
                        </a>
                    </li>
                    <li >
                        <a href="dashboard.php" class="nav-link px-0 align-middle ">
                        <i class="fa-solid fa-gauge text-light"></i> <span class="ms-1 d-none d-sm-inline text-light ">Dashboard</span> </a>
                    </li>
                    <li>
                        <a href="#" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-user text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Profile</span> </a>
                    </li>
                    <li>
                        <a href="script.php?&action=logOut" class="nav-link px-0 align-middle">
                        <i class="fa-solid fa-right-from-bracket text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Sign out</span> </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- ***********title and add button*************** -->
        <div class="test col py-3">
			     <div class="row">
             <h3 class=" text-end col-7 my-5">all games</h3>
          <div class=" col text-end">
				     <button class="  rounded text-light bg-black mx-2 my-5" href="#modal-task" data-bs-toggle="modal" type="button" >Add Game <i class="fa-solid fa-plus"></i></button>
         </div>
			</div>
      <!-- ***********table of all games******************* -->
     <div class="col-lg-10 col-md-9 col-sm-6 float-end text-center overflow-auto">
           <table class="table ">
              <thead class="bg-dark text-light">
               <tr>
                 <th scope="col">#<?php echo cnount();?></th>
                 <th scope="col">Name</th>
                 <th scope="col">Price$</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Description</th>
                 <th scope="col">Edit</th>
              </tr> 
                </thead>
                <tbody>
                <?php
				 // DATA FROM getGames() FUNCTION
				  getGames();
				?>
               </tbody>
            </table>
        </div>
    </div>
</div>


	<!-- add game form -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">New Game</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" id="task-id">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name" class="form-control" id="task-title" required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="Number" name="Price" class="form-control" id="task-title" />
							</div>
							
							<div class="mb-3">
								<label class="form-label">Quantity</label>
								<input type="number" name="Quantity" class="form-control" id="task-date"/ required>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="10" id="task-description" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="task-cancel-btn">Cancel</a>
						<button type="submit" name="Add" class="btn btn-dark text-light task-action-btn" id="game-save-btn">Add Game</button>
					</div>
				</form>
			</div>
		</div>
	</div>


    <!-- <script src="js/vendor.min.js"></script> -->
	<!-- <script src="js/app.min.js"></script> -->

    <script src="js/app.js"></script>
</body>
</html>