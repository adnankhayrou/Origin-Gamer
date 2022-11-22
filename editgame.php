<?php
include 'script.php';
$title = 'Edit Game';
include 'navbar.php';

if(!isset($_SESSION['name'])){
	header('location: login.php');
 }

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $select = "SELECT * FROM games WHERE id = $id";
    $query = mysqli_query($connect, $select);
    $game = mysqli_fetch_assoc($query);

?>

<!-- add game form -->

<div class="container d-flex- mt-5">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="" method="POST" id="form" data-parsley-validate>
					<div class="modal-header row">
						<h5 class="modal-title mt-5 text-center">Edit Game</h5>
					</div>
					<div class="modal-body">
			
							<input type="hidden" name="id" id="task-id" value="<?php echo $id ?>">
							<div class="mb-3">
								<label class="form-label">Name</label>
								<input type="text" name="Name" class="form-control" value="<?php echo $game['name'] ?>" data-parsley-minlength="3" required/>
							</div>

                            <div class="mb-3">
								<label class="form-label">Price</label>
								<input type="text" name="Price" class="form-control" value="<?php echo $game['price'] ?>" required/>
							</div>
							
							<div class="mb-3">
								<label class="form-label">Quantity</label>
								<input type="number" name="Quantity" class="form-control" value="<?php echo $game['quantity'] ?>" required/>
							</div>

							<div class="mb-3">
								<label class="form-label">Category</label>
								<select class="form-select" name="categorey" required>
									<option value="">Please select</option>
									<option value="1"<?php echo ($game['category_id']== '1') ?  "selected" : "" ;?>>Action</option>
									<option value="2"<?php echo ($game['category_id']== '2') ?  "selected" : "" ;?>>Adventure</option>
									<option value="3"<?php echo ($game['category_id']== '3') ?  "selected" : "" ;?>>Shooting</option>
									<option value="4"<?php echo ($game['category_id']== '4') ?  "selected" : "" ;?>>Horror</option>
								</select>
							</div>

							<div class="mb-0">
								<label class="form-label">Description</label>
								<textarea class="form-control" name="Description" rows="7" data-parsley-trigger="keyup" data-parsley-minlength="5" data-parsley-maxlength="100" data-parsley-minlength-message="You need to enter at least a 20 character comment.." data-parsley-validation-threshold="10" required><?php echo $game['description'] ?></textarea>
							</div>
						
					</div>
					<div class="modal-footer mt-2">
						<a href="dashboard.php" class="btn btn-white border " >Cancel</a>
                        <button onClick="deleteGame()" type="button" class="btn btn-danger text-light task-action-btn mx-2" id="delete-button">Delete</button>
                        <button type="submit" name="delete" hidden id="delete-submit"></button>
						<button type="submit" name="edit" class="btn btn-dark task-action-btn" >Edit Game</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
}
?>

    <script src="js/app.js"></script>
</body>
</html>
