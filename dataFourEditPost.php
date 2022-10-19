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

    $basketName = $_POST['storeName'];
    $storeCost = $_POST['storeCost'];
    $storeHours = $_POST['storeHours'];


    $sql = "update Basket set storeName=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $basketName, $storeId);
        $stmt->execute();
    
    $sqlTwo = "update Basket set storeCost=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlTwo);
        $stmt->bind_param("ii", $storeCost, $storeId);
        $stmt->execute();
       
    $sqlThree = "update Basket set storeHours=? where storeId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlThree);
        $stmt->bind_param("ii", $storeHours, $storeId);
        $stmt->execute();
          
    
    ?>
        
    <h1>Edit basket</h1>

    </br>
    <div class="alert alert-success" role="alert"> Basket edited. </div>
    </br>
    <a href="dataOne.php" class="btn btn-primary"> Data Table One</a>


</div>

</body>
</html>