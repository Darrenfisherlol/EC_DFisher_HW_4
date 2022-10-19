<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <h1> Shopping Basket Additions </h1>
</div>

</br>

<div>
    <form action="dataOneAddPost.php" method="post">

        <lable for="basketOwnerName" class="form-lable"> Name </lable>
        <input type="text" name="basketOwnerName" aria-describedby="Your Name">
        
        <lable for="basketFoodId" class="form-lable"> Drink ID </lable>
        <input type="text" name="basketFoodId" aria-describedby="Food ID">

        <lable for="basketDrinkId" class="form-lable"> Food ID </lable>
        <input type="text" name="basketDrinkId" aria-describedby="Drink ID">

        <input type="submit">

    </form>

    </br>
</div>

<!--Show items that the user can add-->
<div>

    <div>
        <h2>Foods You Can Add</h2>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Food Id</th>
                <th>Food Name</th>
            </tr>
        </thead>

        <tbody>

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
            //echo $iid;

            $sql = "select foodID, foodName from Food";
            //echo $sql;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row["foodID"]?> </td>
                <td><?=$row["foodName"]?> </td>
            </tr>
            <?php
            }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
        </tbody>

    </table>
</div>


<!--Show items that the user can add-->
<div>

    <div>
        </br>
        <h2>Drinks You Can Add</h2>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Drink Id</th>
                <th>Drink Name</th>
            </tr>
        </thead>

        <tbody>

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
            //echo $iid;

            $sql = "select drinkId, drinkName from Drink";
            //echo $sql;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row["drinkId"]?> </td>
                <td><?=$row["drinkName"]?> </td>
            </tr>
            <?php
            }
            } else {
                echo "0 results";
            }
            $conn->close();
        ?>
        </tbody>

    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

