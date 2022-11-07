<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <h1> Database 1 - Shopping Basket </h1>
</div>

</br>

<div>
    <td><a class="btn btn-primary" href="dataOneAdd.php"  role="button"> Add Data </a></td>

</div>

<div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>basketID</th>
                <th>basketOwnerName</th>
                <th>basketFoodId</th>
                <th>basketDrinkId</th>
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

            $sql = "select basketID, basketOwnerName, basketFoodId, basketDrinkId from Basket";
            //echo $sql;
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?=$row["basketID"]?> </td>
                <td><?=$row["basketOwnerName"]?> </td>
                <td><?=$row["basketFoodId"]?></td>
                <td><?=$row["basketDrinkId"]?></td>

                <td>
                    <!-- <form method="post" action="dataOneEdit.php">
                        <input type="hidden" name="basketID" value="<?=$row["basketID"]?>" />
                        <button type="submit" class="btn"> <div class="btn btn-primary"> Edit <div> </button>
                    </form>   -->

                    <div class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Save changes</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                    </div>
                    </div>  
                    
                </td>

                <td>
                    <form method="post" action="dataOneDelete.php">
                        <input type="hidden" name="basketID" value="<?=$row["basketID"]?>" />
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