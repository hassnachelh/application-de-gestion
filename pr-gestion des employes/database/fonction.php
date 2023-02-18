<?php
include('database.php');
function emp_insert($con,$values=array()){
   $par="'".implode("','",$values)."'";
   $reuq="INSERT INTO employe VALUES(' ',".$par.")";
 
if (mysqli_query($con, $reuq)) {
   return true;
 } else {
   return false;
 }
  
}

function emp_get($con){
   $query="SELECT * FROM employe";
   $result=mysqli_query($con,$query);
   if($result !=null){
      return $result;
   }
   else{
      return false;
   }
}

function redirect($page){
  header("location: ".$page);
 

}

function get_emp_by_id($con,$id){
   $query="SELECT * FROM employe where id='$id'";
   $result=mysqli_query($con,$query);
   if($result !=null){
      return $result;
   }
   else{
      return false;
   }
}

function emp_update($con,$id,$values){
   $par=implode("','",$values);
   $val=explode("','",$par);
   $reuq="UPDATE employe SET nom='$val[0]',prenom='$val[1]',age='$val[2]',service='$val[3]',matricule='$val[4]' WHERE  id='$id'";
 
   $result=mysqli_query($con,$reuq);
   if($result !=null){
      return $result;
   }
   else{
      return false;
   }
}

function emp_delet($con,$id){
   $reuq="DELETE FROM employe WHERE id='$id'";
   $result=mysqli_query($con,$reuq);
   if($result !=null){
      return $result;
   }
   else{
      return false;
   }
}
?>