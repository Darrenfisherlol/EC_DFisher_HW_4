<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <h1> Food Additions </h1>
</div>

</br>

<div>
    <form action="dataThreeAddPost.php" method="post">

        <lable for="foodName" class="form-lable"> Food Name </lable>
        <input type="text" name="foodName" aria-describedby="Food Name">
        
        <lable for="foodPrice" class="form-lable"> Food Price </lable>
        <input type="text" name="foodPrice" aria-describedby="5.00">

        <lable for="foodType" class="form-lable"> Food Type </lable>
        <input type="text" name="foodType" aria-describedby="Cold">

        <input type="submit">

    </form>

    </br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

