<!--
--  Darren Fisher
--  Homework 4
-->

<?php require_once("header.php")?>


<div>
    <h1>
        Check out:
    </h1>

    <a class="btn btn-primary btn-lg" href="dataOne.php"  role="button"> Baskets </a> 
    <a class="btn btn-secondary btn-lg" href="dataTwo.php"  role="button"> Drinks </a> 
    <a class="btn btn-success btn-lg" href="dataThree.php"  role="button"> Food </a> 
    <a class="btn btn-info btn-lg" href="dataFour.php"  role="button"> Stores </a> 
</div>



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
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
