<?php  require('./template/head.php');?>
<?php require('./template/headNavbar.php');  ?>
<?php  require('./template/spaceOperation.php');  ?>

<div class="container text-center">
  <div class="row">
     <div class="col order-last"></div>
    <div class="col">
      <form  method="POST" name="form_post">
       <div class="mb-3">
           <label for="number" class="form-label">Number</label>
           <input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="number" >
       </div>
       <div class="mb-3">
           <label for="number2" class="form-label">Number 2</label>
           <input type="text" class="form-control" onKeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" name="number2" >
       </div>
       <div class="vh-50 row m-0 text-center align-items-center justify-content-center">
           <div class="col-auto">
                   <input type="hidden" name="split" value="post"> 
                   <input type="button" value="Calculate" id="send" class="btn btn-outline-success">                                
           </div>                          
       </div>
      </form>
     </div>
      <div class="col order-first"></div>
  </div>
</div>



<?php require('./template/foot.php');?>