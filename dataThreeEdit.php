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

    $foodID = $_POST['foodID'];

    $sql = "SELECT foodID, foodName, foodPrice, foodType from Food where foodID=(?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $foodID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>

    <div>

        <form action="dataThreeEditPost.php" method="post">

            <input type="hidden" name="foodID" value="<?=$foodID?>" />

            <lable for="foodName" class="form-lable"> Name </lable>
            <input type="text" name="foodName" aria-describedby="Food Name">
            
            <lable for="foodPrice" class="form-lable"> Food Price </lable>
            <input type="text" name="foodPrice" aria-describedby="Food Price">

            <lable for="foodType" class="form-lable"> Food type </lable>
            <input type="text" name="foodType" aria-describedby="Food type">

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