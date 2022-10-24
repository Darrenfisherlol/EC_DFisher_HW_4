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

    $foodID = $_POST['foodID'];

    $foodName = $_POST['foodName'];
    $foodPrice = $_POST['foodPrice'];
    $foodtype = $_POST['foodType'];

    $sql = "update Food set foodName=? where foodID=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $foodName, $foodID);
        $stmt->execute();
    
    $sqlTwo = "update Food set foodPrice=? where foodID=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlTwo);
        $stmt->bind_param("ii", $foodPrice, $foodID);
        $stmt->execute();
       
    $sqlThree = "update Food set foodType=? where foodID=?";
    //echo $sql;
        $stmt = $conn->prepare($sqlThree);
        $stmt->bind_param("si", $foodtype, $foodID);
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