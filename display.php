<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,500&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
  .bg-light{
    background-color:transparent !important;
  }
</style>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Users Info</title>
    <link rel="stylesheet" href="styles/display.css">
</head>
<body>
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

<div class="page-container">
<div class="container">
  <h1 class="heading">User Details</h1>


<?php 
        include 'connection.php';
        $sql = "SELECT * FROM bank_system";
        $result = $conn->query($sql);
        ?>
        <table>
                  <tr>
                  <th>Sr. no.</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Account Balance</th>
                  <th>User Details</th></tr>
                  <?php
            if ($result->num_rows > 0) {
              $id=1;
                // output data of each row
                while($row = $result->fetch_assoc()) {
                 
                  ?>
                  <tr>
                    <td><?php echo $id;?></td>
                    <td><?php echo $row['Name'];?></td>
                    <td><?php echo $row['Email'];?></td>
                    <td><?php echo $row['Balance'];?></td>
                    <td><a href="transaction1.php?id=<?php echo $row['Name'];?>"><input class="form-control" type="submit" value="View User" name="info"></a></td>
                  </tr>

                  <?php
                  $id=$id+1;}
            }?>
                  </table>
                
                  </body>
</html>