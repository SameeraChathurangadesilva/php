<?php
/**
 * Created by IntelliJ IDEA.
 * User: Sameera Chathuranga
 * Date: 11/5/2017
 * Time: 7:50 PM
 */

$oid=$_POST['txtOID'];
$orderDate=$_POST['OrderDate'];
$id=$_POST['cmbCustomerId'];

$ItemCode=$_POST['cmbItem'];
$oid=$_POST['txtOID'];
$orderqty=$_POST['TotalQty'];
$amount=$_POST['Unitprice'];

$connection = mysqli_connect("localhost","root","1234","PHP");

if (!$connection){
    echo mysqli_connect_error();
}else{

    mysqli_autocommit($connection, FALSE);

    $result = mysqli_query($connection, "INSERT INTO Orders VALUES('$oid','$orderDate','$id')");

    if ($result){

        $result = mysqli_query($connection,"INSERT INTO OrderDetails VALUES('$ItemCode','$oid','$orderqty','$amount')");

        if ($result){
            mysqli_commit($connection);
            echo "<script>window.location.replace(\"place-order.php\");alert('Order have been successfully added ');</script>";
        }else{
            mysqli_rollback($connection);
            echo "<script>window.location.replace(\"place-order.php\");alert('Order Has been add to fail');</script>";
        }

    }else{
        mysqli_rollback($connection);
        echo "<script>window.location.replace(\"place-order.php\");alert('Order Has been add to fail');</script>";
    }

    mysqli_autocommit($connection, TRUE);
    mysqli_close($connection);
}