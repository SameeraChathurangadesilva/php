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

<!--Customer Id Load-->
<?php

$connection = mysqli_connect("localhost", "root", "1234", "PHP");

if (!$connection){
    echo mysqli_connect_error();
}else{

    $resultset1 = mysqli_query($connection, "SELECT id from Customer");

    $resultset2 = mysqli_query($connection, "SELECT * FROM Item");

    ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                Order ID
            </div>
            <div class="col-sm-9">
                <input name="txtOID" class="form-control" placeholder="Order ID" id="txtOid">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Order Date
            </div>
            <div class="col-sm-9">
                <input name="OrderDate" class="form-control" placeholder="Order Date" type="date">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Customer ID
            </div>
            <div class="col-sm-9">
                <select class="form-control" id="cmbCustomerLoad" name="cmbCustomerId">
                <?php
                    while ($rowData = mysqli_fetch_row($resultset1)) {
                        echo "<option value=\"$rowData[0]\">$rowData[0]</option>";
            }
?>
    </select>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-sm-3">
                Customer Name
            </div>
            <div class="col-sm-9">
                <input name="txtCustomerName" id="txtCustomerName" class="form-control" readonly value="">
            </div>
        </div>
        <br>
    <div class="row">
    <div class="col-sm-2">
    Item Code
    <select id="cmbItemCode" name="cmbItem" class="form-control" onchange="getvalItem(this);">
    <?php
    while ($rowData1 = mysqli_fetch_row($resultset2)) {
        echo "<option value='$rowData1[0]'>$rowData1[0]</option>";
    }
    mysqli_free_result($resultset2);
    mysqli_close($connection);
}
?>
    </select>
    </div>
    <div class="col-sm-3">
        Description
        <input id="description" name="" class="form-control" readonly value="">
    </div>
    <div class="col-sm-2">
        Unit Price
        <input id="Unitprice" name="Unitprice" class="form-control" readonly value="">
    </div>
    <div class="col-sm-2">
        QTY On Hand
        <input id="qtyOnHand" name="" class="form-control" readonly value="">
    </div>
    <div class="col-sm-3">
        Order QTY
        <input id="Qty" name="TotalQty" class="form-control" >
    </div>

        <br>
        <br>
        <br>
        <br>
        <div class="col-sm-3">
            <button id="btnAddtable" type="button"  class="btn btn-primary">Add to Table</button>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-sm-12">
            <table class="table" id="tblItemDetails">
                <thead>
                <tr>
                    <th>Item ID</th>
                    <th>Description</th>
                    <th>Unit Price</th>
                    <th>QtyOnHand</th>
                    <th>Qty</th>
                    <th>Total</th>
                    <th>Remove</th>
                    <th>Edit</th>
                </tr>
                </thead>
                <tbody>


                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1">
            Total
        </div>
        <div class="col-sm-2">
            <input name="" class="form-control" id="txtTotal">
        </div>
        <div class="col-sm-6">
        </div>
        <div class="col-sm-3">
            <button type="submit" id="btnPlaceOrder" class="btn btn-primary">PLACE ORDER</button>
        </div>
    </div>
    </div>

<!--Load cmb data and fill textField-->
    <script>

        var items = new Array();

        <?php

        $connection = mysqli_connect("localhost", "root", "1234", "PHP");

        if (!$connection){
            echo mysqli_connect_error();
        }else {

            $resultset = mysqli_query($connection, "SELECT * FROM Item");

            while($rowData = mysqli_fetch_row($resultset)){

                echo "    
                items.push({
                    id : '$rowData[0]',
                    description : '$rowData[1]',
                    qty: '$rowData[2]',
                    price : '$rowData[3]'
                  });
                ";
            }

            mysqli_free_result($resultset);
            mysqli_close($connection);

        }

        ?>

        function getvalItem(sel)
        {
            var id=$(sel).val();

            for(var index in items){
                var item = items[index];
                if(item.id===id){
                    $('#description').val(item.description);
                    $('#Unitprice').val(item.qty);
                    $('#qtyOnHand').val(item.price);
                    break;
                }
            }

            $(document).ready(function(){
                $("#Qty").focus();
            });

        }
    </script>

<?php
include "footer.php";
?>