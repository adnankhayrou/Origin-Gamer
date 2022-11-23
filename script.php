<?php
 //INCLUDE DATABASE FILE
 include ('database.php');

 session_start();

 if(isset($_POST['Add']))       addGame();
 if(isset($_POST['edit']))      editGame();                                 
 if(isset($_POST['delete']))    deleteGame();
 if(isset($_POST['signup']))    signup();
 if(isset($_POST['login']))     login();
 if(isset($_GET['action']) && $_GET['action'] === 'logOut') logOut();
 
 function addGame(){
   require 'database.php';

  $Name = $_POST['Name'];
  $Price = $_POST['Price'];
  $Quantity = $_POST['Quantity'];
  $Category = $_POST['categorey'];
  $Description = $_POST['Description'];


  $sendTo = "INSERT INTO games(name, price, quantity, category_id, description) VALUES('$Name', '$Price', '$Quantity','$Category', '$Description')";
  mysqli_query($connect,$sendTo);

  header('location: dashboard.php');
 }

 function getGames(){
    require 'database.php';

    $selectFrom = "SELECT category.nameCategory as CategoryName, games.* FROM games INNER JOIN category on category.id = games.category_id";
   
    $query = mysqli_query($connect,$selectFrom);
    return  $query;
   
 }

 function counterGames(){
    require 'database.php';
    $countAll = "SELECT * FROM games";

    $query = mysqli_query($connect, $countAll);
    $counter = mysqli_num_rows($query);

    return $counter;
 }

 function counterAdmins(){
   require 'database.php';
   $countAll = "SELECT * FROM admins";

   $query = mysqli_query($connect, $countAll);
   $counter = mysqli_num_rows($query);

   return $counter;
}

function counterCategorys(){
   require 'database.php';
   $countAll = "SELECT * FROM category";

   $query = mysqli_query($connect, $countAll);
   $counter = mysqli_num_rows($query);

   return $counter;
}

function counterPrice(){
   require 'database.php';
   $countAll = "SELECT SUM(price) as Price FROM games";

   $query = mysqli_query($connect, $countAll);
   $counter = mysqli_fetch_assoc($query);
   $price = $counter['Price'];
   return  $price;
}

function counterQuantity(){
   require 'database.php';
   $countAll = "SELECT SUM(quantity) as Quantity FROM games";

   $query = mysqli_query($connect, $countAll);
   $counter = mysqli_fetch_assoc($query);
   $Quantity = $counter['Quantity'];
   return  $Quantity;
}

 function editGame(){
  require 'database.php';

  $id  = $_POST['id'];
  $Name = $_POST['Name'];
  $Price = $_POST['Price'];
  $Quantity = $_POST['Quantity'];
  $Category = $_POST['categorey'];
  $Description = $_POST['Description'];

  $updatefrom = "UPDATE games SET name = '$Name', price = '$Price', quantity = '$Quantity',category_id = '$Category', description = '$Description' WHERE id = '$id'";
  mysqli_query($connect,$updatefrom);

  header('location: dashboard.php');
 }

 function deleteGame(){
    require 'database.php';

    $id = $_POST['id'];
    $deleteFrom = "DELETE FROM games WHERE id = '$id'";
    mysqli_query($connect, $deleteFrom);

    header('location: dashboard.php');
 }

 function signup(){
   require 'database.php';
   
   $fullName = mysqli_real_escape_string($connect,trim(($_POST['Name'])));
   $Email = htmlspecialchars(strtolower(trim($_POST['Email'])));
   $Password = htmlspecialchars(password_hash($_POST['Password'],PASSWORD_BCRYPT));

   $compir = "SELECT * FROM admins WHERE email = '$Email'";
   $query = mysqli_query($connect, $compir);

   if (mysqli_num_rows($query) > 0) {

      echo 'This Email already exist';
   }else{

      $query1 = "INSERT INTO admins (name, email, password) VALUES('$fullName','$Email','$Password')";
      mysqli_query($connect, $query1);
   
      header('location: login.php');
   }
}

 function login(){
   require 'database.php';

      $Email = $_POST['Email'];
      $Password = $_POST['Password'];

      $query = "SELECT * FROM admins WHERE email='$Email'";
      $res = mysqli_query($connect, $query);
      $data = mysqli_fetch_assoc($res);

      if(mysqli_num_rows($res) > 0){

         $_SESSION['name'] = $data['name'];
         $Password_v = password_verify($Password,$data['password']); 

         if($Password_v == $Password){
           
            header('location: dashboard.php');
        }else {

         echo 'incorrect inputs';
      }
         
      }
  
 }

 function logOut(){
   if (isset($_SESSION['name'])) {
      // sessiondestroy
      unset($_SESSION['name']);

      header('location: login.php');
   }
 }
?>