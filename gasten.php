<?php
require_once "config.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $emailaddress = $_POST['emailaddress'];
  $phone = $_POST['phone'];
  $checkcovid = $_POST['checkcovid'];

  $sql = "INSERT INTO `guests` (firstname, lastname, email, phone, covid) VALUES ('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['emailaddress']."','".$_POST['phone']."','".$_POST['checkcovid']."')";
  mysqli_query($link,$sql);
  }

?>

<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <h1>Gasten registratie</h1><br>
        <div class="container">
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault01">Voornaam</label>
                <input type="text" class="form-control" id="validationDefault01" name="firstname" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault02">Achternaam</label>
                <input type="text" class="form-control" id="validationDefault02" name="lastname" required>
              </div>
            </div>
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Email-adres</label>
                <input type="email" class="form-control" id="validationDefault03" name="emailaddress" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationDefault03">Telefoonnummer</label>
                <input type="number" class="form-control" id="validationDefault04" name="phone" required>
              </div>
            </div>
            <div class="form-group">
              <div class="form-check">
              <label for="validationDefault04">Heeft u klachen van Covid-19?</label>
              <select name="checkcovid" class="browser-default custom-select">
                <option selected value="1">Ja</option>
                <option value="2">Nee</option>
            </select>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Registreren</button> 
          </form>
          <a href="index.php"><button class="btn btn-danger">Terug</button></a>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>