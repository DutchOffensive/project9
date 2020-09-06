<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

<a href="home.php"><button class="btn btn-danger">Terug</button></a>
        <h1>Registraties</h1><br>

<div class="container-lg">
<table class='table table-striped'>
<tbody class="bigger-font">
    <td scope="col"><p>Firstname</p></td>
    <td scope="col"><p>Lastname</p> </td>  
    <td scope="col"><p>Phone</p></td>  
    <td scope="col"><p>Time</p></td>   
</tbody>
</table>   
</div>
<?php

require_once "config.php";

session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

}
else
header("location: index.php");

$sql = "SELECT * FROM `guests`";
$query = mysqli_query($link,$sql) or die(mysqli_error($link));

$rows = array();

while($row = mysqli_fetch_assoc($query)){
    array_push($rows, $row);
  }
  foreach ($rows as $key => $array) {
    $id = $array['id_guests'];
    echo "<div class='container-lg'>"; 
    echo "<table class='table table-striped'>"; 
    echo "<tbody>";
    echo "<td scope='col'>" . $array["firstname"] . "</td>" . "<td scope='col'>" . $array["lastname"] . "</td>" . "<td scope='col'>" . $array["phone"] . "</td>" . "<td scope='col'>" . $array["timestamp"] . "</td>";
    echo "</tbody>";
    echo "</table>";
    echo "<a href='details.php?id=" .  $array['id_guests'] . "'" . ">" . "<button class='btn btn-info' type='button' title='Edit'>" . 'Edit' . "</button>" . "</a>";
    echo "</div>";
  }
?>
</div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>


