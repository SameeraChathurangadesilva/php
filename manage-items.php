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
$resultset = mysqli_query($connection, ("SELECT * FROM Item"));
?>
    <div>
        <button class="btn btn-primary" id="btnDeleteItem">Delete Item</button>
        <button class="btn btn-primary" id="btnAddItem">Add Item</button>
    </div>

<br>
<br>

<table id="tblMarks" class="table table-hover">
    <thead>
    <tr>
        <th></th>
        <th>Item Code</th>
        <th>Description</th>
        <th>Unit Price</th>
        <th>Qty</th>
        <th></th>
    </tr>
    <tody>
        <?php
        while ($rowdata = mysqli_fetch_row($resultset)) {
            echo "<tr>
                            <td><input type=\"checkbox\" value=$rowdata[0] name=\"Itemcode[]\"></td>
                            <td>$rowdata[0]</td>
                            <td>$rowdata[1]</td>
                            <td>$rowdata[2]</td>
                            <td>$rowdata[3]</td>
                            <td><a href='update-item-form.php? Itemcode=$rowdata[0] & Description=$rowdata[1] & UnitPrice=$rowdata[2] & Qty=$rowdata[3] & title=Manage Item>Update Item'><i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></a></td>
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
