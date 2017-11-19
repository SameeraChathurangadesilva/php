<?php

$id =$_GET["custID"];
$name =$_GET["custname"];
$address = $_GET["custaddress"];
?>
<?php
require "header.php";
?>



<div class="form-group">
    <label>Customer Id :</label>
    <input class="form-control" id="customer_id" placeholder="Customer Id" name="txtId" value="<?= $id?>">
</div>
<div class="form-group">
    <label>Customer Name :</label>
    <input  class="form-control" id="customer_name" placeholder="Customer Name" name="txtName" value="<?=$name?>">
</div>
<div class="form-group">
    <label>Customer Address :</label>
    <input class="form-control" id="customer_address" placeholder="Customer Address" name="txtAddress" value="<?=$address?>">
</div>

<button type="submit" class="btn btn-default" id="btnUpdate">Submit</button>

<?php
include "footer.php";
?>
