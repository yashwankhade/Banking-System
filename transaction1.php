<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css2?family=Texturina:ital,wght@1,500&display=swap" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.min.js" integrity="sha384-lpyLfhYuitXl2zRZ5Bn2fqnhNAKOAaM/0Kr9laMspuaMiZfGmfwRNFh8HlMy49eQ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <title>User Details</title>
        <link rel="stylesheet" href="styles/transact1.css">
        
</head>
<style>
    .bg-light{
    background-color:transparent !important;
  }

</style>
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
        

<div class="container">
<?php
        include 'connection.php';
        
        $ids = $_GET['id'];

        $select = "Select * from bank_system where Name='$ids'";
        $row = $conn->query($select);
        $res = $row->fetch_assoc();
        ?>
    <div class="row"> <div class="col">
    <h3 class="head">Account Details</h3></div></div> 

    <div class="row">
        <div class="col">Name</div>
        <div class="col"><?php echo $res['Name'];?></div>
    </div>
    <div class="row">
        <div class="col">Email</div>
        <div class="col"><?php echo $res['Email'];?></div>
    </div>
    <div class="row">
        <div class="col">Current Balance</div>
        <div class="col"><?php echo $res['Balance'];?></div>
    </div>
    <form action="" method="POST">
        <?php
    $sql = "SELECT * FROM bank_system where Name <> '$ids'";
         $result = $conn->query($sql);
         
             if ($result->num_rows > 0) {
               $id=1;
                 
                 ?>
                 <div id="transfer-form">
                 <label for="user2">Transfer To</label>
                 <select name="user2" id="">
                
                 <?php
                 while($row = $result->fetch_assoc()) {
                     ?> 
                  <option value="<?php echo $row['Name']; ?>"><?php echo $row['Name']; echo " (Balance ₹"; echo $row['Balance'];echo ")"?></option>
 
                  <?php
                  }}
                   ?>
                   </select>
                  <label for="amt">Amount</label>
                   <input type="number" name="amt" id="" placeholder="0" min=100>
                    
                <a href="#" id="a1"><input type="submit" class="transfer form-control" value="Transfer" name="trans"></a>
                   </select>
                   </div>
    <input type="button" value="Transfer Money" name='transfer' class="form-control" id="b1">
    <input type="button" value="View Mini Statement" class="form-control" id="b2">
    </form>

                </div>
    <script>
        $(document).ready(function(){
            $("#b1").click(function(){
                $(this).hide();
                $("#transfer-form").slideDown();
                $("#b2").css({"color":"red"});
                $(".container").css({"height":"490px"},{"margin-bottom":"20px"});
            });

            $("#b2").click(function(){
                $(".container1").css({"display":"block"});
            });
            $("#b3").click(function(){
                $(".container1").css({"display":"none"});
            });
        });
    </script>

<div class="container1">
        <div class="header1">
            <h2 class="header">Mini Statement</h2>
        </div>
        <span><button id="b3">&times;</button></span>
        <div class="sent">
            <h4 class="header2">Money Sent</h4>
            <table>
                
                <?php
                include 'connection.php';
                $name=$res['Name'];
                $sql = "SELECT * FROM transact where sender='$name'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    ?>
                    <h6 style="text-align:center">No Money Sent.</h6>
                    <?php
                }
                else if(($result->num_rows > 0)){
                    ?>
                    <tr>
                    <th>Sent To</th>
                    <th>Amount</th>
                    <th>When?</th>
                </tr>
                <?php
                    while($row = $result->fetch_assoc()) {
                     ?>
                    <tr>
                        <td><?php echo $row['receiver'];?></td>
                        <td><?php echo $row['amt'];?></td>
                        <td><?php echo $row['time'];?></td>
                    </tr>
                    <?php
                    }
                }?>
            </table>
        </div>
        <div class="received">
            <h4 class="header2">Money Received</h4>
           
                <?php
                include 'connection.php';
                $sql = "SELECT * FROM transact where receiver='$name'";
                $result = $conn->query($sql);
                if ($result->num_rows == 0) {
                    ?>
                    <h6 style="text-align:center">No Money Received.</h6>
                    <?php
                }
                else if(($result->num_rows > 0)){
                    ?>
                    <table>
                <tr>
                    <th>Sent By</th>
                    <th>Amount</th>
                    <th>When?</th>
                </tr>
                <?php
                    while($row = $result->fetch_assoc()) {
                     ?>
                    <tr>
                        <td><?php echo $row['sender'];?></td>
                        <td><?php echo $row['amt'];?></td>
                        <td><?php echo $row['time'];?></td>
                    </tr>
                    <?php
                    }
                }?>
            </table>
        </div>
            </div>
            </body>
            </html>


<?php
    include 'connection.php';

    if(isset($_POST['trans'])){
             
            $u1 = $res['Name'];
            $u2 = $_POST['user2'];
            $amount = $_POST['amt'];
            $status = "Transfer Successful";
            if($amount==0 || $amount<0){
                    ?>
                    <script>
                            alert("Enter Valid Amount!");
                    </script>
                    <?php
            }elseif($amount>$res['Balance']){
                    ?>
                    <script>
                                    alert("Insufficient Balance!");
                            </script>
                    
<?php
            $st = "Failed";
            $st1 = "Insert into transact1 values('$u1','$u2','$amount',NOW(),'$st')";
            $conn->query($st1);
            }
            
            
            elseif($amount<$res['Balance']){
                $q2 = "Update bank_system set Balance=Balance-$amount where Name='$u1'";
                $q3 = "Update bank_system set Balance=Balance+$amount where Name='$u2'";
               $conn->query($q2);
                 $conn->query($q3);
                    $sql ="Insert into transact values('$u1','$u2','$amount',NOW(),'$status')";
                    if($conn->query($sql)===TRUE){
                            ?>
                            <script>
                                window.location='history1.php';
                                    alert("Transfer Succcessful");
                                    
                                    $(document).ready(function(){
                                        $(".trans").click(function(){
                                            $("#a1").attr("href","history1.php");
                                        });
                                    });
                            </script>
                             

                            <?php
                    }}
                    else
                    echo $conn->error;
            }
            
?>