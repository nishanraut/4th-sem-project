<?php require_once("config.php"); $id=$_GET['id'] ;
 $res=mysqli_query($db,"SELECT * from items where id=$id");
 if($row=mysqli_fetch_array($res))
 {
     $delimage=$row['image'];
 
 }
 unlink($folder.$delimage);
 $result=mysqli_query($db,"DELETE from items where id=$id"); 
 if($result)
 {
    header("location:admineddit.php?deleted=1");
 }
 else{
    echo 'Something went wrong';
 }
?>