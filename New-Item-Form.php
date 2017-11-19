<?php
require "header.php";
?>

<div class="form-group">
    <label>Item Code :</label>
    <input class="form-control" id="Item_code" placeholder="Item Code" name="txtItemCode">
</div>
<div class="form-group">
    <label>Description :</label>
    <input  class="form-control" id="Description" placeholder="Description" name="txtDescription">
</div>
<div class="form-group">
    <label>Unit price :</label>
    <input class="form-control" id="unit_price" placeholder="Unit_price" name="txtUnitPrice">
</div>

<div class="form-group">
    <label>Qty :</label>
    <input class="form-control" id="Qty" placeholder="Qty" name="txtQty">
</div>

<button type="submit" class="btn btn-default" id="btnSaveItem">Submit</button>

<?php
include "footer.php";
?>
