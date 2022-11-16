<?php
 //INCLUDE DATABASE FILE
 include ('database.php');

 session_start();

 if(isset($_POST['Add']))       addGame();
 if(isset($_POST['edit']))      editGame();                                                                                                                                          
 if(isset($_POST['delete']))    deleteGame();

 //counter
 $count = 0;
 
 function addGame(){

  $Name = $_POST['Name'];
  $Price = $_POST['Price'];
  $Quantity = $_POST['Quantity'];
  $Description = $_POST['Description'];

  require 'database.php';

  $sendTo = "INSERT INTO games(name, price, quantity, description) VALUES('$Name', '$Price', '$Quantity', '$Description')";
  mysqli_query($connect,$sendTo);

  header('location: dashboard.php');
 }

 function getGames(){
    require 'database.php';

    $selectFrom = "SELECT * FROM games";
    $query = mysqli_query($connect,$selectFrom);

    global $count;
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

 
 function editGame(){

 }

 function deleteGame(){

 }
?>