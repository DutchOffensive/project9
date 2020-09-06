<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>ROC Rivor</h1><br>


        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

<div class="container">   
<table class='table table-striped'>
<tbody class="bigger-font">
    <td><p>Firstname</p></td>
    <td><p>Lastname</p> </td>  
    <td><p>Phone</p></td>  
    <td><p>Time</p></td>   
</tbody>
</table>    
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
    echo "<table class='table table-striped'>"; 
    echo "<tbody>";
    echo "<td>" . $array["firstname"] . "</td>" . "<td>" . $array["lastname"] . "</td>" . "<td>" . $array["phone"] . "</td>" . "<td>" . $array["timestamp"] . "</td>";
    echo "</tbody>";
    echo "</table>";
  }
?>
</div>

    </body>
</html>


