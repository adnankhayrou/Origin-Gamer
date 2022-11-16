<?php
include 'navbar.php';
$title = 'Dashboard';
?>

<div class="container-fluid">
    <div class="row flex-nowrap">
        <!-- ***********side bar************ -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
            <div class=" d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white vh-100">
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
        <!-- ***********title and add button*************** -->
        <div class="test col py-3">
			     <div class="row">
             <h3 class=" text-end col-6 my-5">all games</h3>
          <div class=" col text-end">
				     <button class="  rounded text-light bg-black mx-2 my-5" type="button" >Add Game <i class="fa-solid fa-plus"></i></button>
         </div>
			</div>
      <!-- ***********table of all games******************* -->
     <div class="test">
           <table class="table">
              <thead class="bg-dark text-light">
               <tr>
                 <th ">#</th>
                 <th >Name</th>
                 <th >Price</th>
                 <th >Quantity</th>
                 <th >Description</th>
                 <th >Edit</th>
                 <th >Delete</th>
              </tr>
                </thead>
                <tbody>
             <tr>
                <th >1</th>
                <td>Mark</td>
                <td>23.99$</td>
                <td>2331</td>
                <td>@mdo hgrjrf hghff jgrjgf jrnjghg ghufnfg jrkgjg</td>
                <td><a href="editgame.php"><i class="fa-solid fa-edit mx-2"></i></a></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>

             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
             <tr>
                <th >2</th>
                <td>Mark</td>
                <td>19.99$</td>
                <td>1255</td>
                <td>@mdo ngfjjg jfkrfhg kdhght jhbfi kfjngfbngj jfhgb</td>
                <td><i class="fa-solid fa-edit mx-2"></i></td>
                <td><i class="fa-solid fa-trash text-danger mx-3"></i></td>
             </tr>
               </tbody>
            </table>
        </div>
    </div>
</div>


	<!-- TASK MODAL -->
	<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Add Task</h5>
						<a href="#" class="btn-close" data-bs-dismiss="modal"></a>
					</div>
					<div class="modal-body">
							<!-- This Input Allows Storing Task Index  -->
							<input type="hidden" name="id" id="task-id">
							<div class="mb-3">
								<label class="form-label">Title</label>
								<input type="text" name="Title" class="form-control" id="task-title" required/>
							</div>
							<div class="mb-3">
								<label class="form-label">Type</label>
								<div class="ms-3">
									<div class="form-check mb-1">
										<input class="form-check-input" name="task-type" type="radio" value="1" id="task-type-feature" required/>
										<label class="form-check-label" for="task-type-feature">Feature</label>
									</div>
									<div class="form-check">
										<input class="form-check-input" name="task-type" type="radio" value="2" id="task-type-bug" required/>
										<label class="form-check-label" for="task-type-bug">Bug</label>
									</div>
								</div>
								
							</div>
							<div class="mb-3">
								<label class="form-label">Priority</label>
								<select class="form-select" name="Priority" id="task-priority" required>
									<option value="">Please select</option>
									<option value="1">Low</option>
									<option value="2">Medium</option>
									<option value="3">High</option>
									<option value="4">Critical</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Status</label>
								<select class="form-select" name="Status" id="task-status" required>
									<option value="">Please select</option>
									<option value="1">To Do</option>
									<option value="2">In Progress</option>
									<option value="3">Done</option>
								</select>
							</div>
							<div class="mb-3">
								<label class="form-label">Date</label>
								<input type="date" name="Date" class="form-control" id="task-date"/ required>
							</div>
							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="10" id="task-description" required></textarea>
							</div>
						
					</div>
					<div class="modal-footer">
						<a href="#" class="btn btn-white" data-bs-dismiss="modal" id="task-cancel-btn">Cancel</a>
						<!-- <button type="submit" name="delete" id="delete-btn" hidden></button>
						<button type="button" onClick="Delete()" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</button>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</button> -->
						<button type="submit" name="save" class="btn btn-primary task-action-btn" id="task-save-btn">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>



</body>
</html>