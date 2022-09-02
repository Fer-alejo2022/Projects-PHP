<?php  require('./template/head.php');  ?>

<nav class="navbar bg-light">
  <div class="container-fluid" >
    <div class="vh-50 row m-0 text-center align-items-center justify-content-center">
           <div class="col-auto">
                   <h1>Welcome</h1>                               
           </div>                          
     </div>
  </div>
</nav>
<?php  require('./template/space.php');  ?>
<div class="container text-center">
  <div class="row">
    <div class="col">
              <a href="addition.php" class="btn btn-outline-primary">Addition</a>
    </div>
    <div class="col">
              <a href="subtraction.php" class="btn btn-outline-primary" >Subtraction</a>
    </div>
    <div class="col">
              <a href="split.php" class="btn btn-outline-primary">Split</a>
    </div>
  </div>
</div>
<?php  require('./template/space.php');  ?>
<div class="container text-center">
  <div class="row">
    <div class="col">
              <a href="multiplication.php" class="btn btn-outline-primary">Multiplication</a>
    </div>
    <div class="col">
              <a href="table.php" class="btn btn-outline-info">Table</a>
    </div>
    <div class="col">
              <a href="power.php" class="btn btn-outline-primary">Power</a>
    </div>
  </div>
</div>

<?php require('./template/foot.php');   ?>