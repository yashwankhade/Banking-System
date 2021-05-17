<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome to TSF Bank!</title>
 
  <link rel="stylesheet" href="styles/index.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,500&display=swap" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<style>
  .bg-light{
    background-color:transparent !important;
  }
</style>

<script src="transact.js"></script>
  
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
        <a class="nav-link" href="history1.php">Transaction History</a>
        
      </div>
    </div>
  </div>
</nav>

<div class="typewriter">
        <h1 class="anim">Welcome To TSF Bank!</h1>
    </div>


  <div class="container">
  <div class="row">
  <div class="col">
   
  <img class="cardimg" src="images\profile.png" alt="Card image cap">
  <div class="card-body">
     <a href="create1.php" class="btn btn-primary" id="b1">Create User</a>
  </div>
</div>
  <div class="col">
   
  <img class="cardimg" src="images\youth.png" alt="Card image cap">
  <div class="card-body">
    <a href="display.php" class="btn btn-primary" id="b2">Show Users</a>
  </div>
</div>
  <div class="col">
  
  <img class="cardimg" src="images\lending.png" alt="Card image cap">
  <div class="card-body">
    <a href="history1.php" class="btn btn-primary" id="b3">Transaction History</a>
  </div>
</div>
  </div>
  </div>
  </div>
  </div>

<footer class="page-footer1">
  <p>&copy; Yash 2021. Basic Banking System.</p> 
</footer> 
 </div>
</body>
</html>

<script>
  $(document).ready(function(){
    $(".nav-link").click(function(){
      $(this).addClass("active");
    });
    
});
  
</script>