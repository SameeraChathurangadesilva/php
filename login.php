<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'php');
define('DB_USER','root');
define('DB_PASSWORD','1234');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());

$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());

$user_emial = $_POST['txtlogemial'];
$user_pwd = $_POST['txtlogpassword'];


function SignIn()
{

    session_start();

    if (!empty($_POST['txtlogemial'])) {

        global $con;

        $_SESSION['user_emial']=true;

        $query = mysqli_query($con, "SELECT * FROM users where user_emial = '$_POST[txtlogemial]' AND user_pwd  = '$_POST[txtlogpassword]'") or die(mysqli_error());
        $row = mysqli_fetch_array($query) or header("Location :../index.php?error");

        if (!empty($row['user_emial']) AND !empty($row['user_pwd'])) {

            $_SESSION['user_emial'] = $row['user_pwd'];
            echo "<script>window.location.replace(\"DashboardStyle.php?login\");</script>";


        } else {
            echo "<script>window.location.replace(\"index.php\");</script>";
        }
    }
}
if(isset($_POST['submit']))
{
    SignIn();
}
?>



