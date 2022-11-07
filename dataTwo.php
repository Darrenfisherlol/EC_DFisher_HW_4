<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <h1> Database 2 -Drinks Table</h1>
</div>

</br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

    <div>
        <form action="dataTwoAddPost.php" method="post">

            <lable for="drinkName" class="form-lable"> Drink Name </lable>
            <input type="text" name="drinkName" aria-describedby="Food Name">
            
            <lable for="drinkCost" class="form-lable"> Drink Cost </lable>
            <input type="text" name="drinkCost" aria-describedby="5.00">

            <lable for="drinkTemperature" class="form-lable"> Drink Temperature </lable>
            <input type="text" name="drinkTemperature" aria-describedby="Carb">

            <input type="submit">

        </form>
    </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>




<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>drinkId</th>
                <th>drinkName</th>
                <th>drinkCost</th>
                <th>drinkTemperature</th>
                <th>Edit</th>
                <th>Delete</th>
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

            $sql = "select drinkId, drinkName, drinkCost, drinkTemperature from Drink";
            //echo $sql;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row["drinkId"]?> </td>
                <td><?=$row["drinkName"]?> </td>
                <td><?=$row["drinkCost"]?></td>
                <td><?=$row["drinkTemperature"]?></td>

                <td>
                    <form method="post" action="dataTwoEdit.php">
                        <input type="hidden" name="drinkId" value="<?=$row["drinkId"]?>" />
                        <button type="submit" class="btn"> <div class="btn btn-primary"> Edit <div> </button>
                    </form>    
                </td>

                <td>
                    <form method="post" action="dataTwoDelete.php">
                        <input type="hidden" name="drinkId" value="<?=$row["drinkId"]?>" />
                        <button type="submit" class="btn" onclick="return confirm('Confirm delete?')"> <div class="btn btn-Danger"> Delete </div> </button>
                    </form>      
                </td>

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