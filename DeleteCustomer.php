<?php
$connection = mysqli_connect("localhost", "root", "1234", "PHP");

if (!$connection) {
    echo mysqli_connect_error();

} else {
    foreach ($_POST['custId'] as $value) {
        $query = "delete from Customer where id='$value' ";
        $result = mysqli_query($connection, $query);

        if ($result && mysqli_affected_rows($connection) > 0) {
            echo "<script>window.location.replace(\"manage-customers.php?title=Save Item\");</script>";
        } else {

            echo "delete fail";
            mysqli_error($connection);
        }
    }
}
mysqli_close($connection);