<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    <a href="bachstraat.php"><button class="btn btn-danger">Terug</button></a>
    <h1>Gegevens Bijwerken</h1>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

<?php
require_once "config.php";

if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){

}
else
header("location: index.php");

$id = $_GET['id'];
$sql = "SELECT * FROM `guests` WHERE `id_guests` = $id";
$query = mysqli_query($link,$sql) or die(mysqli_error($link));

$rows = array();

while($row = mysqli_fetch_assoc($query)){
    array_push($rows, $row);
  }
  foreach ($rows as $key => $array) {
      $firstname = $array["firstname"];
      $lastname = $array["lastname"];
      $email = $array["email"];
      $phone = $array["phone"];
      $covid = $array["covid"];
    echo "<div class='container-lg'>" .
    "<form action='<?php echo htmlspecialchars($_SERVER[PHP_SELF]); ?>' method='post'>" .
     "<div class='form-row'>" .
    "<div class='col-md-6 mb-3'>" .
      "<label for='validationDefault01'>Voornaam</label>" .
      "<input type='text' class='form-control' value= $firstname id='validationDefault01' name='firstname' required>" .
        "</div>" . "</div>" . 
        "<div class='form-row'>" .
        "<div class='col-md-6 mb-3'>" .
          "<label for='validationDefault02'>Achternaam</label>" .
          "<input type='text' class='form-control' value= $lastname id='validationDefault02' name='lastname' required>" .
        "</div>" . "</div>" .
        "<div class='form-row'>" .
        "<div class='col-md-6 mb-3'>" .
          "<label for='validationDefault03'>Email</label>" .
          "<input type='email' class='form-control' value= $email id='validationDefault03' name='email' required>" .
        "</div>" . "</div>" .
        "<div class='form-row'>" .
        "<div class='col-md-6 mb-3'>" .
          "<label for='validationDefault04'>Achternaam</label>" .
          "<input type='number' class='form-control' value= $phone id='validationDefault04' name='phone' required>" .
        "</div>" . "</div>"
        . "</div>" . "</form>";
  }
?>



