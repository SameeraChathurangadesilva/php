<?php

session_start();
if(!isset($_SESSION['user_emial'])){
    echo "<script>
        window.location.replace('index.php');
    </script>";
}
?>

?>
<?php
include "header.php";
?>


<?php

$connection = mysqli_connect("localhost","root","1234","php");

if(!$connection){
    mysqli_connect_error();
}else {

    $resultSetCustomer = mysqli_query($connection, "select * from customer");

    $resultSetItem = mysqli_query($connection, "select * from item");

    $resultSetOrders = mysqli_query($connection, "select * from orders");

    $resultSetOrderDetails = mysqli_query($connection, "select * from orderdetails");
}
?>
<section class="row text-center placeholders">
    <div class="col-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200"
             height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
        <h4>Customers</h4>
        <span>Total number of Customer : <?= mysqli_num_rows($resultSetCustomer)?></span>
    </div>
    <div class="col-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200"
             height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
        <h4>Items</h4>
        <span>Total number of Item : <?= mysqli_num_rows($resultSetItem)?></span>
    </div>
    <div class="col-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200"
             height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
        <h4>Orders</h4>
        <span>Today Orders : <?=mysqli_num_rows($resultSetOrders)?></span>
    </div>
    <div class="col-6 col-sm-3 placeholder">
        <img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200"
             height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
        <h4>Orders Details</h4>
        <span >Today OrderDetails : <?=mysqli_num_rows($resultSetOrderDetails)?></span>
    </div>
</section>
<?php
include "footer.php";
?>
