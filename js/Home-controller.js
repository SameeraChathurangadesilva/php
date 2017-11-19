/**
 * Created by Sameera Chathuranga on 31/10/2017.
 */



// Manage Customer

$("#btnCustomerAdd").click(function () {
    $("#formCustomer").attr("action","NewCustomer.php ?title= Manage-Customer > New customer");
    $("#formCustomer").submit;
});

$("#btnSaveDetails").click(function () {
    $("#formCustomer").attr("action","SaveCustomer.php");
    $("#formCustomer").submit;
});

$("#btnUpdate").click(function () {
    $("#formCustomer").attr("action","Update-Customer.php");
    $("#formCustomer").submit;
});

$("#btndelete").click(function () {
    $("#formCustomer").attr("action","DeleteCustomer.php");
    $("#formCustomer").submit;
});



// Manage Item

$("#btnAddItem").click(function () {
    $("#formCustomer").attr("action","New-Item-Form.php ? title= Manage-Item > New Customer");
    $("#formCustomer").submit;
});

$("#btnSaveItem").click(function () {
    $("#formCustomer").attr("action","Save-Item.php");
    $("#formCustomer").submit;
});

$("#btnUpdateItem").click(function () {
    $("#formCustomer").attr("action","Update-Item.php");
    $("#formCustomer").submit;
});

$("#btnDeleteItem").click(function () {
    $("#formCustomer").attr("action","DeleteItem.php");
    $("#formCustomer").submit;
});


// Place Order
$("#btnPlaceOrder").click(function () {
    $("#formCustomer").attr("action","Place_Order_save.php");
    $("#formCustomer").submit;
});

$(document).ready(function(){
    $("#txtOid").focus();
});

// Load table

$("#btnAddtable").click(function () {
    var itemcode =$("#cmbItemCode").val();
    var description =$("#description").val();
    var unitprice =$("#Unitprice").val();
    var qtyOnHand =$("#qtyOnHand").val();
    var qty =$("#Qty").val();

    var total=unitprice*qty;
    $("#txtTotal").val(total);

    if (itemcode.trim().length === 0){
        $("#cmbItemCode").focus();
        $("#cmbItemCode").addClass("error");
        return;
    }

    if (description.trim().length === 0){
        $("#description").focus();
        $("#description").addClass("error");
        return;
    }

    if (unitprice.trim().length === 0){
        $("#Unitprice").focus();
        $("#Unitprice").addClass("error");
        return;
    }

    if (qtyOnHand.trim().length === 0){
        $("#qtyOnHand").focus();
        $("#qtyOnHand").addClass("error");
        return;
    }

    var regExp = /^[0-9]+$/;
    if (!regExp.test(qty)){
        $("#qty").focus();
        $("#qty").addClass("error");
        return;
    }

    $("#tblItemDetails tbody").append('<tr>' +
        '<td>' + itemcode + ' </td>' +
        '<td>' + description + '</td>' +
        '<td>' + unitprice + '</td>' +
        '<td>' + qtyOnHand + '</td>' +
        '<td>' + qty + '</td>' +
        '<td>' + total + '</td>' +
        '<td><i class="fa fa-trash-o" aria-hidden="true" id="remove"></i></td>' +
        '<td><i class="fa fa-pencil" aria-hidden="true"></i></td>' +
        '</tr>');


    $("#remove").click(function(){
        var row = $(this).parents("tr");
        row.fadeOut(500);
        setTimeout(function(){
            $(row).remove();
        },600);

    });
    $("#description").val("");
    $("#Unitprice").val("");
    $("#qtyOnHand").val("");
    $("#Qty").val("");

});


// $("#submit").click(function () {
//     $("#logout").attr("action","logout.php");
//     $("#logout").submit;
// });
//
