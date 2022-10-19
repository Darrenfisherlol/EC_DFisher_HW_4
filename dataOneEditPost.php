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

    $basketName = $_POST['basketID'];
    $basketID = $_POST['basketID'];

    $sql = "update basket set basketOwnerName=? where basketID=?";
    //echo $sql;
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("si", $basketName, $basketID);
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