<?php
include 'navbar.php';
$title = 'Edit Game';
?>

<!-- add game form -->
<div class="modal fade" id="modal-task">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form-task">
					<div class="modal-header">
						<h5 class="modal-title">Edit Game</h5>
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
					<div class="modal-footer">
						<a href="#" class="btn btn-white border" data-bs-dismiss="modal" id="task-cancel-btn">Cancel</a>
						<!-- <button type="submit" name="delete" id="delete-btn" hidden></button>
						<button type="button" onClick="Delete()" class="btn btn-danger task-action-btn" id="task-delete-btn">Delete</button>
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
