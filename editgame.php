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

<!-- edit game form -->

			<div class="vh-100 d-flex justify-content-center align-items-center">
				<form action="" method="POST" id="form" class="col-4 " data-parsley-validate>
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
									<?php
                                
                                    $selectFrom = "SELECT * FROM category";
                                    $res = mysqli_query($connect,$selectFrom);
                                    while ($category = mysqli_fetch_assoc($res)) {
										?>
                                       <option value="<?php echo $category['id'] ?>"<?php echo ($game['category_id'] == $category['id']) ?  "selected" : "" ;?>><?php echo $category['nameCategory'] ?></option>';
								    <?php
									}
                                    ?>
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
<?php
}
?>

    <script src="js/app.js"></script>
</body>
</html>
