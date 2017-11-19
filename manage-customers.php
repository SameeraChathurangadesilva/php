<?php

session_start();
if(!isset($_SESSION['user_emial'])){
    echo "<script>
        window.location.replace('index.php');
    </script>";
}
?>

<?php
require "header.php";
?>
<?php
$connection = mysqli_connect("localhost","root","1234","PHP");

if(!$connection){
    echo mysqli_connect_error();
}else {
$resultset = mysqli_query($connection, ("SELECT * FROM Customer"));
?>
    <div>
        <button class="btn btn-primary" id="btndelete">Delete Customer</button>
        <button class="btn btn-primary" id="btnCustomerAdd">Add Customer</button>
    </div>

<br>
<br>

<table id="tblMarks" class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Id</th>
        <th>name</th>
        <th>Address</th>
        <th></th>
    </tr>
    <tody>
        <?php
        while ($rowdata = mysqli_fetch_row($resultset)) {
            echo "<tr>
                            <td><input type=\"checkbox\" value=$rowdata[0] name=\"custId[]\"></td>
                            <td>$rowdata[0]</td>
                            <td>$rowdata[1]</td>
                            <td>$rowdata[2]</td>
                            <td><a href='update-Customer-Form.php? custID=$rowdata[0] & custname=$rowdata[1] & custaddress=$rowdata[2] & title=Manage Customers>Update Customer'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
                            </tr>";
        }

        mysqli_free_result($resultset);

        mysqli_close($connection);
        }
        ?>
    </tody>
    </thead>
</table>
<?php
include "footer.php";
?>
