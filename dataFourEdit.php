<!--
--  Darren Fisher
--  Homework 4
-->


<?php require_once("header.php")?>


<div>
    <h1>Edit </h1>
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

    $sql = "SELECT storeId, storeName, storeCost, storeHours from Store where storeId=?";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $storeId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>

    <div>

        <form action="dataFourEditPost.php" method="post">

            <input type="hidden" name="storeId" value="<?=$storeId?>" />

            <lable for="storeName" class="form-lable"> Name </lable>
            <input type="text" name="storeName" aria-describedby="Store Name">
            
            <lable for="storeCost" class="form-lable"> Store cost </lable>
            <input type="text" name="storeCost" aria-describedby="Store Cost">

            <lable for="storeHours" class="form-lable"> Hours Open </lable>
            <input type="text" name="storeHours" aria-describedby="Hours">

            <input type="submit">

        </form>

        </br>
    </div>

    <?php
    }
    } else {
    echo "0 results";
    }
    $conn->close();
    ?>

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>