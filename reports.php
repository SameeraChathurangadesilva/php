<?php

session_start();
if(!isset($_SESSION['user_emial'])){
    echo "<script>
        window.location.replace('index.php');
    </script>";
}
?>

<?php
include "header.php";
?>
<?php
include "footer.php";
?>