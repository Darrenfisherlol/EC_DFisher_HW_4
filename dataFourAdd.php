<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<div>
    <h1> Store Additions </h1>
</div>

</br>

<div>
    <form action="dataTwoAddPost.php" method="post">

        <lable for="storeName" class="form-lable"> Store Name </lable>
        <input type="text" name="storeName" aria-describedby="Drink Name">
        
        <lable for="storeCost" class="form-lable"> Store Cost </lable>
        <input type="text" name="storeCost" aria-describedby="5.00">

        <lable for="storeHours" class="form-lable"> Store Hours </lable>
        <input type="text" name="storeHours" aria-describedby="24/7">

        <input type="submit">

    </form>

    </br>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>
</html>

