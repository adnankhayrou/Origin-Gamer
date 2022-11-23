<?php
include 'script.php';
$title = 'Statistics';
include 'navbar.php';


if(!isset($_SESSION['name'])){
   header('location: login.php');
}
?>

<!-- <div class="container-fluid"> -->
    <div class="d-flex">
        <!-- ***********side bar************ -->
        <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark position-fixed">
            <div class=" d-flex flex-column align-items-center align-items-sm-start my-5 px-3 pt-2 text-white vh-100">
               
                    <span class="fs-4 d-none d-sm-inline my-3">Welcome<br><?php echo $_SESSION['name'] ?></span>
                
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start pt-4" id="menu">
                    
                    <li >
                        <a href="dashboard.php" class="nav-link px-0 align-middle ">
                        <i class="fa-solid fa-gauge text-light"></i> <span class="ms-1 d-none d-sm-inline text-light ">Dashboard</span> </a>
                    </li>
                    <li class="nav-item">
                        <a href="statistics.php" class="nav-link align-middle px-0">
                        <i class="fa-solid fa-chart-pie text-light"></i> <span class="ms-1 d-none d-sm-inline text-light">Statistics</span>
                        </a>
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
        
        
        <!-- ***********statistics cards*************** -->
            <div class="d-flex justify-content-start flex-column my-5 position-fixed " id="divCards"> 

                     <div class="d-flex">
                    <div class=" card bg-black my-5 mx-5" style="width: 10rem; height: 6rem;">
                            <div class="float-end card-body">
                            <h5 class="card-title text-light">GAMES</h5>
                            <p class="card-text text-light"><?php echo counterGames();?></p>
                        </div>  
                        </div>

                        <div class=" card bg-black my-5 mx-5" style="width: 10rem; height: 6rem;">
                            <div class="float-end card-body">
                            <h5 class="card-title text-light">CATEGORYS</h5>
                            <p class="card-text text-light"><?php echo counterCategorys();?></p>
                        </div>  
                        </div>

                        <div class=" card bg-black my-5 mx-5" style="width: 10rem; height: 6rem;">
                            <div class="float-end card-body">
                            <h5 class="card-title text-light">PRICE</h5>
                            <p class="card-text text-light"><?php echo counterPrice();?>$</p>
                        </div>  
                        </div>

                        <div class=" card bg-black my-5 mx-5" style="width: 10rem; height: 6rem;">
                            <div class="float-end card-body">
                            <h5 class="card-title text-light">ADMINS</h5>
                            <p class="card-text text-light"><?php echo counterAdmins();?></p>
                        </div>  
                        </div>

                        <div class=" card bg-black my-5 mx-5" style="width: 10rem; height: 6rem;">
                            <div class="float-end card-body">
                            <h5 class="card-title text-light">QUANTITY</h5>
                            <p class="card-text text-light"><?php echo counterQuantity();?></p>
                        </div>  
                        </div>
                    </div>
         <!-- ***********table of all games******************* -->
          <div class=" ms-2 text-center  vw-100 me-5 table-responsive " id="divTable1">
             <table class="table">
              <thead class="bg-dark text-light">
               <tr>
                 <th scope="col">Name</th>
                 <th scope="col">Price</th>
                 <th scope="col">Quantity</th>
                 <th scope="col">Category</th>
                 <th scope="col">Description</th>
              </tr> 
                </thead>
                <tbody>
                <?php
				 // DATA FROM getGames() FUNCTION
				  $allGames = getGames();
                  $count=1;
                  while ($element = mysqli_fetch_assoc($allGames)) {
                    
                    ?>
                      <tr>
                            <td><?php echo $element['name']?></td>
                            <td><?php echo $element['price']?>$</td>
                            <td><?php echo $element['quantity']?></td>
                            <td><?php echo $element['CategoryName']?></td>
                            <td class="text-truncate"><?php echo $element['description']?></td>
                        </tr>
                  <?php
                  $count++;      
                  }
				?>
               </tbody>
            </table>
          </div>
         </div>       
       </div>
      
      
      
	

    <script src="js/app.js"></script>
</body>
</html>