<?php
include 'navbar.php';
$title = 'Edit Game';
?>

<!-- add game form -->

<div class="container w-25 mt-5">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header row">
						<h5 class="modal-title mt-5 text-center">Edit Game</h5>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" id="task-id">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name" class="form-control" id="task-title" required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="text" name="Price" class="form-control" id="task-title" required/>
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
					<div class="modal-footer mt-2">
						<a href="dashboard.php" class="btn btn-white border mx-2" >Cancel</a>
						<button type="submit" name="update" class="btn btn-warning task-action-btn" id="task-update-btn">Update</button> -->
						<button type="submit" name="save" class="btn btn-dark text-light task-action-btn" id="task-save-btn">Edit game</button>
					</div>
				</form>
			</div>
		</div>
	</div>


    <script src="js/vendor.min.js"></script>
	<script src="js/app.min.js"></script>
</body>
</html>
