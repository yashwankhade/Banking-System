<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Transaction History</title>
 
  
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="styles/history1.css">



  
</head>
<body>
  <div class="page-container">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
 <span> <a class="navbar-brand" href="#"> <img src="./images/bank.png" alt="" id="logo"><h2 class="logo-text">TSF Bank</h2>  </a></span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="create1.php">Create User</a>
        <a class="nav-link" href="display.php">Show Users</a>
        <a class="nav-link" href="#">Transaction History</a>
        
      </div>
    </div>
  </div>
</nav>
<div class="container">
<?php 
        include 'connection.php';
        $sql = "SELECT * FROM transact order by time";
        $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
              $id=1;
              ?>
              <h1 class="heading">Transaction History</h1>
              <table>
              <tr>
                  <th>Id</th>
                  <th>Sender</th>
                  <th>Receiver</th>
                  <th>Amount</th>
                  <th>Time</th>
              </tr>
              <?php
                while($row = $result->fetch_assoc()) {
                    
                  ?>
                  <tr>
                  <td><?php echo $id;?></td>
                  <td><?php echo $row['sender'];?></td>
                  <td><?php echo $row['receiver'];?></td>
                  <td><?php echo $row['amt'];?></td>
                  <td><?php echo $row['time'];?></td>
                </tr>
                  <?php
                     $id=$id+1;
                    }}
                    ?>
    
    </table>
</div>

</body>
</html>