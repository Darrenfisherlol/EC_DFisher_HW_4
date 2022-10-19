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

    $drinkId = $_POST['drinkId'];

    $drinkName = $_POST['drinkName'];
    $drinkCost = $_POST['drinkCost'];
    $drinkTemp = $_POST['drinkTemperature'];

    $sql = "update Drink set drinkName=? where drinkId=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $drinkName, $drinkId);
        $stmt->execute();
    
    $sqlTwo = "update Drink set drinkCost=? where drinkId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlTwo);
        $stmt->bind_param("ii", $drinkCost, $drinkId);
        $stmt->execute();
       
    $sqlThree = "update Drink set drinkTemperature=? where drinkId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlThree);
        $stmt->bind_param("ii", $drinkTemp, $drinkId);
        $stmt->execute();
          
    
    ?>
        
    <h1>Edit basket</h1>

    </br>
    <div class="alert alert-success" role="alert"> Basket edited. </div>
    </br>
    <a href="dataTwo.php" class="btn btn-primary"> Data Table Two</a>


</div>

</body>
</html>