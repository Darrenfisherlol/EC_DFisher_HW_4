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

    $foodId = $_POST['foodId'];

    $foodName = $_POST['foodName'];
    $foodCost = $_POST['foodPrice'];
    $foodtype = $_POST['foodType'];

    $sql = "update Food set foodName=? where foodId=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $foodName, $foodId);
        $stmt->execute();
    
    $sqlTwo = "update Food set foodPrice=? where foodId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlTwo);
        $stmt->bind_param("ii", $foodPrice, $foodId);
        $stmt->execute();
       
    $sqlThree = "update Food set foodType=? where foodId=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlThree);
        $stmt->bind_param("si", $foodtype, $foodId);
        $stmt->execute();
          
    
    ?>
        
    <h1>Edit Food</h1>

    </br>
    <div class="alert alert-success" role="alert"> Food edited. </div>
    </br>
    <a href="dataThree.php" class="btn btn-primary"> Data Table Three</a>


</div>

</body>
</html>