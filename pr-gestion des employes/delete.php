<?php 
 include('database/database.php');
include('database/fonction.php');
$id=$_GET['id'];
if(emp_delet($con,$id)==true){
        
    redirect('index.php?message=delet');
   }




?>