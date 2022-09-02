<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mathematics</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script>
              function validation(){
                    let check = true;
                    if(!document.form_post.number.value){
                        alert("Fill in the Number field");
                        return check = false;
                    }else if(!document.form_post.number2.value){
                        alert("Fill in the Number 2 field");
                        return check = false;
                    }
                    if(check){
                         document.form_post.submit();
                    } 
              }
            onload = function(){
                document.getElementById("send").onclick = validation;
            }  
    </script>

</head>
<body style="font-family: Arial, Helvetica, sans-serif;">
<?php  require('./template/conection.php');   ?>
<?php 
     function parameters($num1,$num2,$result,$conection){
          $sql = "INSERT INTO `dates`(`id`, `number1`, `number2`, `result`) VALUES (NULL,'$num1','$num2','$result')";
          $conection->run($sql);
     }
     $conection = new Connection();
     if(isset($_POST['addition'])){
               $number1 = $_POST['number'];
               $number2 = $_POST['number2'];
               $Result = $number1 + $number2;
               parameters($number1,$number2,$Result,$conection); 
               header('location: addition.php');
     }else if(isset($_POST['power'])){
               $number1 = $_POST['number'];
               $number2 = $_POST['number2'];
               $Result = $number1**$number2;
               parameters($number1,$number2,$Result,$conection);
               header('location: power.php'); 
     }else if(isset($_POST['subtraction'])){
               $number1 = $_POST['number'];
               $number2 = $_POST['number2'];
               $Result = $number1 - $number2;
               parameters($number1,$number2,$Result,$conection);
               header('location: subtraction.php'); 
     }else if(isset($_POST['split'])){
               $number1 = $_POST['number'];
               $number2 = $_POST['number2'];
               $Result = $number1 / $number2;
               parameters($number1,$number2,$Result,$conection);
               header('location: split.php'); 
     }else if(isset($_POST['multiplication'])){
               $number1 = $_POST['number'];
               $number2 = $_POST['number2'];
               $Result = $number1 * $number2;
               parameters($number1,$number2,$Result,$conection);
               header('location: multiplication.php'); 
     }
     if($_GET){
          $sql = "DELETE FROM `dates` WHERE `dates`.`id` = ".$_GET['delete'];
          $conection->run($sql);
          header('location: table.php');
     }
     $calculate = $conection->consult("SELECT * FROM `dates`");
?>
