<?php  require('./template/head.php');?>
<?php  require('./template/headNavbar.php');  ?>
<?php  require('./template/spaceOperation.php');  ?> 

<div class="grid text-center">
  <div class="g-col-6 g-col-md-4"></div>
  <div class="g-col-6 g-col-md-4">
  <table class="table table-bordered border-primary">
       <thead>
          <tr>
              <th>#</th>
              <th>Number 1</th>
              <th>Number 2</th>
              <th>Result</th>
              <th>Delete</th>
          </tr>
       </thead>
       <tbody>
              <?php foreach($calculate as $operation) {?>
                    <tr>   
                      <td style="color:blue;"><?php echo $operation['id'];?></td>
                      <td><?php echo $operation['number1'];?></td>
                      <td><?php echo $operation['number2'];?></td>
                      <td><?php echo $operation['result'];?></td>
                      <td><a href="?delete=<?php echo $operation['id'];?>" class="btn btn-outline-danger">Delete</a></td>
                    </tr>  
              <?php   } ?>   
       </tbody>
    </table>
  </div>
  <div class="g-col-6 g-col-md-4"></div>
</div>

<?php require('./template/foot.php');?>