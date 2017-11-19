<?php
require "header.php";
?>

    <div class="form-group">
        <label>Customer Id :</label>
        <input class="form-control" id="customer_id" placeholder="Customer Id" name="txtId">
    </div>
    <div class="form-group">
        <label>Customer Name :</label>
        <input  class="form-control" id="customer_name" placeholder="Customer Name" name="txtName">
    </div>
    <div class="form-group">
        <label>Customer Address :</label>
        <input class="form-control" id="customer_address" placeholder="Customer Address" name="txtAddress">
    </div>

    <button type="submit" class="btn btn-default" id="btnSaveDetails">Submit</button>

<?php
include "footer.php";
?>
