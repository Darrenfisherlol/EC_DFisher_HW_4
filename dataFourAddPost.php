<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <div class="alert alert-success"> New Store Added</div>
</div>

</br>

<div>

    <?php
        $servername = "localhost";
        $username = "darrenfi_darrenfi_homework4";
        $password = "darrenfi_homework4";
        $dbname = "darrenfi_homework_4";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        // GET & POST 
        $storeName = $_POST['storeName'];
        $storeCost = $_POST['storeCost'];
        $storeHours = $_POST['storeHours'];

        // prepare and bind
        $sql = "INSERT INTO Food (storeName, storeCost, fostoreHoursodType) VALUES (?, ?, ?)";

        $saveSql = $conn->prepare($sql);

        $saveSql->bind_param("sss", $storeName, $storeCost, $storeHours);

        $saveSql->execute();

        $saveSql->close();
        ?>


    <a href="dataFour.php" class="btn btn-primary"> Back to Store table</a>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

