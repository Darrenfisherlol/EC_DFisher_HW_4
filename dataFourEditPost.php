<!--
--  Darren Fisher
--  Homework 4
-->


<?php require_once("header.php")?>

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

    $storeId = $_POST['storeId'];

    $storeName = $_POST['storeName'];
    $storeCost = $_POST['storeCost'];
    $storeHours = $_POST['storeHours'];


    $sql = "update Store set storeName=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $storeName, $storeId);
        $stmt->execute();
    
    $sqlTwo = "update Store set storeCost=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlTwo);
        $stmt->bind_param("si", $storeCost, $storeId);
        $stmt->execute();
       
    $sqlThree = "update Store set storeHours=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlThree);
        $stmt->bind_param("si", $storeHours, $storeId);
        $stmt->execute();
          
    
    ?>
        
    <h1>Edit Store</h1>

    </br>
    <div class="alert alert-success" role="alert"> Store edited. </div>
    </br>
    <a href="dataFour.php" class="btn btn-primary"> Data Table Four</a>


</div>

</body>
</html>