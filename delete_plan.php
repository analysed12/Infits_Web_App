<?php
include "config.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $sql = "Delete from `create_plan` where plan_id=$id"; 
    $result= mysqli_query($conn,$sql);

    if($result){
        echo "Deleted Successfully";
        header("Location: myplan.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>