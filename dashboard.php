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
     <div class=" text-center table-responsive" id="divTable">
           <table class="table">
              <thead class="bg-dark text-light">
               <tr>
                 <th scope="col">#<?php echo counter();?></th>
                 <th scope="col">Name</th>
                 <th scope="col">Price$</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Category</th>
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
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header">
						<h5 class="modal-title">New Game</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" >
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name" class="form-control" data-parsley-minlength="3" required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="Number" name="Price" class="form-control" step="any" required/>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Quantity</label>
								<input type="number" name="Quantity" class="form-control" id="task-date"/ required>
							</div>
							
                            <div class="mb-3">
								<label class="form-label">Categorey</label>
								<select class="form-select" name="categorey" required>
									<option value="">Please select</option>
									<option value="1">Action</option>
									<option value="2">Adventure</option>
									<option value="3">Shooting</option>
									<option value="4">Horror</option>
								</select>
							</div>

                            <div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="7" data-parsley-trigger="onkeyup" data-parsley-minlength="5" data-parsley-maxlength="100" data-parsley-minlength-message="You need to enter at least a 5 character comment.." data-parsley-validation-threshold="10" required></textarea>
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


    <script src="js/app.js"></script>
</body>
</html>