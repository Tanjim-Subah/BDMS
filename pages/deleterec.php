<?php

if(isset($_GET['id'])){
$id=$_GET['id'];

include 'dbconnect.php';


$qry="delete from receiver where id=$id";
$result=mysqli_query($conn,$qry);

if($result){
    echo"DELETED";
    header('Location:viewreceiver.php');
}else{
    echo"ERROR!!";
}
}
?>