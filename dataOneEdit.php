<!--
--  Darren Fisher
--  Homework 4
-->

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

    $basketID = $_POST['basketID'];

    $sql = "SELECT basketID, basketOwnerName, basketFoodId, basketDrinkId from Basket where basketID=(?)";
    $stmt = $conn->prepare($sql);

    $stmt->bind_param("i", $basketID);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    ?>
    <form method="post" action="dataOneEditPost.php">

        <div>
            <label for="basketOwenerName" class="form-label">Name</label>
            <input type="text" class="form-control" id="basketOwenerName" aria-describedby="nameHelp" name="basketOwenerName" value="<?=$row['basketOwenerName']?>">
            <div> Enter the new basekt owner name.</div>
        </div>


        <input type="hidden" name="iid" value="<?=$row['basketID']?>">

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
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