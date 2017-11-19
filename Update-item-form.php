<?php

$ItemCode =$_GET['Itemcode'];
$Description   =$_GET['Description'];
$UnitPrice  =$_GET['UnitPrice'];
$Qty  =$_GET['Qty'];
?>
<?php
require "header.php";
?>



<div class="form-group">
    <label>Item Code :</label>
    <input class="form-control" id="Item_code" placeholder="Item Code" name="txtItemCode" value="<?=$ItemCode?>">
</div>
<div class="form-group">
    <label>Description :</label>
    <input  class="form-control" id="Description" placeholder="Description" name="txtDescription" value="<?=$Description?>">
</div>
<div class="form-group">
    <label>Unit price :</label>
    <input class="form-control" id="unit_price" placeholder="Unit_price" name="txtUnitPrice" value="<?=$UnitPrice?>">
</div>

<div class="form-group">
    <label>Qty :</label>
    <input class="form-control" id="Qty" placeholder="Qty" name="txtQty" value="<?=$Qty?>">
</div>

<button type="submit" class="btn btn-default" id="btnUpdateItem">Submit</button>
<?php
include "footer.php";
?>
