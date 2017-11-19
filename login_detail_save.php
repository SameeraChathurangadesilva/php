<?php

$user_first=$_POST['txtfirstname'];
$user_last=$_POST['txtLastname'];
$user_emial=$_POST['txtemail'];
$user_pwd=$_POST['txtpassword'];

$connection =mysqli_connect("localhost","root","1234","php");

if(!$connection){
    echo mysqli_connect_error();
}else{

    $result = mysqli_query($connection,"INSERT INTO users VALUES('0','$user_first','$user_last','$user_emial','$user_pwd')");

    if($result){

        echo "<script>window.location.replace(\"index.php\");</script>";
    }else{
        echo "Failed to save the customer","<br>",mysqli_error($connection);
    }

    mysqli_close($connection);
}