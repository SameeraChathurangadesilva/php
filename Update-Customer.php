<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sameera Chathuranga
 * Date: 31/10/2017
 * Time: 09:56
 */


$id =$_POST['txtId'];
$name  =$_POST['txtName'];
$address  =$_POST['txtAddress'];

$connection = mysqli_connect("localhost","root","1234","PHP");

if(!$connection){
    echo mysqli_connect_error();
}else{
    $result =mysqli_query($connection,"UPDATE Customer SET name='$name',address='$address' WHERE id='$id'");

    if($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(\"manage-customers.php\");</script>";
    }else{
        echo "Failed to save the customer","<br>",mysqli_error($connection);
    }

    mysqli_close($connection);
}

?>

