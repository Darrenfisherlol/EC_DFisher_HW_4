<!--
--  Darren Fisher
--  Homework 4
-->

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

    $basketID = $_POST['basketID'];
    
    $basketName = $_POST['basketOwnerName'];
    $foodID = $_POST['basketFoodId'];
    $drinkID = $_POST['basketDrinkId'];


    $sql = "update basket set basketOwnerName=? where basketID=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $basketName, $basketID);
        $stmt->execute();
    
    $sql = "update basket set basketFoodId=? where basketID=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $foodID, $basketID);
        $stmt->execute();
       
    $sql = "update basket set basketDrinkId=? where basketID=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ii", $drinkID, $basketID);
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