<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="styles/create1.css">
</head>
<body>
    <div class="page-container">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
  <a class="navbar-brand" href="#"> <img src="./images/bank.png" alt="" id="logo"><h2 class="logo-text">TSF Bank</h2>  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="create1.php">Create User</a>
        <a class="nav-link" href="display.php">Show Users</a>
        <a class="nav-link" href="history1.php">Transaction History</a>
        
      </div>
    </div>
  </div>
</nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Enter User Details</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
            
            <img src="./images/profile (1).png" alt="" class="createimg">
            </div>
        </div>
        
        
        <div class="row">
            
            <div class="col">
            <form action="" method="POST">
                <label for="username">Name</label>
                <input type="text" name="username" id="" class="form-control" required>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <label for="mail">Email</label>
                <input type="email" name="mail" id="" class="form-control" required>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <label for="bal">Balance</label>
                <input type="number" min=100 name="bal" id="" class="form-control" required>
            </div>
        </div>
        <div class="row">
            
            <div class="col">
                <input type="submit" name="Submit" value="Add User" class="form-control">
            </div>
        </div>
        </form>
    </div>

    <footer class="page-footer1">
  <p>&copy; Yash 2021. Basic Banking System.</p> 
</footer>
</div>
</body>
</html>

<?php

    include 'connection.php';

    if(isset($_POST['Submit'])){
      $name = $_POST['username'];
      $balance = $_POST['bal'];
      $mailid = $_POST['mail'];

      $insert = "Insert into bank_system values ('$name','$mailid','$balance')";
      $result = $conn->query($insert);
      if($result==True){
      ?>
      <script>
        alert("User Added Successfully!");
        window.location="display.php";
      </script>
      <?php
    }
  }
    ?>  