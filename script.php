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
  $Description = $_POST['Description'];


  $sendTo = "INSERT INTO games(name, price, quantity, description) VALUES('$Name', '$Price', '$Quantity', '$Description')";
  mysqli_query($connect,$sendTo);

  header('location: dashboard.php');
 }

 function getGames(){
    require 'database.php';

    $selectFrom = "SELECT * FROM games";
    $query = mysqli_query($connect,$selectFrom);

    $count=0;
    while ($element = mysqli_fetch_assoc($query)) {
        $count++;
        echo '
        <tr>
                <th >'.$count.'</th>
                <td>'.$element['name'].'</td>
                <td>'.$element['price'].'$</td>
                <td>'.$element['quantity'].'</td>
                <td class="text-truncate">'.$element['description'].'</td>
                <td><a href="editgame.php?id='.$element['id'].'"><i class="fa-solid fa-edit mx-2"></i></a></td>
                <!--<td><i class="fa-solid fa-trash text-danger mx-3" name="delete"></i></td>-->
             </tr>
        ';
    }
 }

 function cnount(){
    require 'database.php';
    $countAll = "SELECT * FROM games";

    $query = mysqli_query($connect, $countAll);
    $counter = mysqli_num_rows($query);

    return $counter;
 }

 
 function editGame(){
  require 'database.php';

  $id  = $_POST['id'];
  $Name = $_POST['Name'];
  $Price = $_POST['Price'];
  $Quantity = $_POST['Quantity'];
  $Description = $_POST['Description'];

  $updatefrom = "UPDATE games SET name = '$Name', price = '$Price', quantity = '$Quantity', description = '$Description' WHERE id = '$id'";
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
   
   $fullName = htmlspecialchars(trim($_POST['Name']));
   $Email = htmlspecialchars(strtolower(trim($_POST['Email'])));
   $Password = htmlspecialchars(trim(md5($_POST['Password'])));
   
   $query = "INSERT INTO admins (name, email, password) VALUES('$fullName','$Email','$Password')";
   mysqli_query($connect, $query);

   header('location: login.php');
}

 function login(){
   require 'database.php';

      $Email = $_POST['Email'];
      $Password =md5($_POST['Password']);
      // echo $Password;

      $query = "SELECT * FROM admins WHERE email='$Email' AND password='$Password'";
      $res = mysqli_query($connect, $query);
      $data = mysqli_fetch_assoc($res);
      // var_dump($data);

      $test = mysqli_num_rows($res);
      if($test > 0){
         $_SESSION['name'] = $data['name'];
         // $_SESSION['id']=$data['id'];
         header('location: dashboard.php');
      }else {
         echo 'incorrect inputs';
      }
  
 }


 function logOut(){
   if (isset($_SESSION['name'])) {
      // session_destroy();
      unset($_SESSION['name']);
      
      header('location: login.php');
   }
 }
?>