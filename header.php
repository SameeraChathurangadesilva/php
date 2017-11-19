
<?php

if (!empty($_GET["title"])){
    $title = $_GET["title"];
}else{
    $title = "Overview";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP POS - IJSE : <?= $title ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<form id="formCustomer" action="js/Home-controller.js" method="POST" enctype="application/x-www-form-urlencoded">
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <a class="navbar-brand" href="DashboardStyle.php">PHP - POS</a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="DashboardStyle.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Settings</a>
            </li>
        </ul>
    </div>
<div>
<!--    <form id="logout" method="POST" action="logout.php" enctype="application/x-www-form-urlencoded">-->
<!--        <button type="submit" name="submit" id="submit">Log Out</button>-->
<!--    </form>-->

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="DashboardStyle.php"> <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a href="logout.php" style="text-decoration: none;padding: 10px;background-color: #2e3032">LogOut</a>
            </li>
        </ul>
    </div>

</div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link <?= ($title === "Overview")? "active" : ""  ?>" href="DashboardStyle.php">Overview <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($title === "Manage Customers")? "active" : ""  ?>" href="manage-customers.php?title=Manage Customers">Manage Customers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($title === "Manage Items")? "active" : ""  ?>" href="manage-items.php?title=Manage Items">Manage Items</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($title === "Place Order")? "active" : ""  ?>" href="place-order.php?title=Place Order">Place Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= ($title === "Reports")? "active" : ""  ?>" href="reports.php?title=Reports">Reports</a>
                </li>
            </ul>
        </nav>

        <main class="col-sm-9 ml-sm-auto col-md-10 pt-3" role="main">

            <h1><?= $title ?></h1>
