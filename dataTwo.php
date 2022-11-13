<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<div>
    <h1> Database 2 -Drinks Table</h1>
</div>

</br>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
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

          </br>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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


  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
