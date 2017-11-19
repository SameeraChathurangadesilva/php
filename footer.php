<footer>
    <hr>
    <div>
        <img src="images/ijse-logo.png">
        <small>Institute of Software Engineering</small>
        <br>
        <br>
        <small>sam.chathuranga97@gamil.com</small>
    </div>
</footer>
</main>
</div>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script>

    var customers = new Array();

    <?php

    $connection = mysqli_connect("localhost", "root", "1234", "PHP");

    if (!$connection){
        echo mysqli_connect_error();
    }else {

        $resultset = mysqli_query($connection, "SELECT * FROM Customer");

        while ($rowData = mysqli_fetch_row($resultset)) {

            echo "    
                customers.push({
                    id : '$rowData[0]',
                    name : '$rowData[1]',
                    address: '$rowData[2]',
                  });
                ";
        }

        mysqli_free_result($resultset);
        mysqli_close($connection);
    }
    ?>
    $('#cmbCustomerLoad').on('change', function () {
        var a = $("#cmbCustomerLoad")[0].selectedIndex;
        $("#txtCustomerName").val(customers[a].name);
    });

</script>
<script src="js/Home-controller.js"></script>
</form>
</body>
</html>
