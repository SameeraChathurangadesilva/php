<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sameera Chathuranga
 * Date: 31/10/2017
 * Time: 09:56
 */


$ItemCode =$_POST['txtItemCode'];
$Description   =$_POST['txtDescription'];
$UnitPrice  =$_POST['txtUnitPrice'];
$Qty  =$_POST['txtQty'];

$connection = mysqli_connect("localhost","root","1234","PHP");

if(!$connection){
    echo mysqli_connect_error();
}else{
    $result =mysqli_query($connection,"UPDATE Item SET Description='$Description',UnitPrice='$UnitPrice',Qty='$Qty' WHERE ItemCode='$ItemCode'");

    if($result && mysqli_affected_rows($connection) > 0){
        echo "<script>window.location.replace(\"manage-items.php\");</script>";
    }else{
        echo "Failed to save the Item","<br>",mysqli_error($connection);
    }

    mysqli_close($connection);
}

?>

