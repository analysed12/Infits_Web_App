<?php
include "config.php";

if(isset($_GET['client_id']) && isset($_GET['plan_id'])  ){
    $id = $_GET['client_id'];
    $planid = $_GET['plan_id'];

    // echo $id;
    // echo $planid ;

    $sql = "UPDATE `addclient` SET plan_id=$planid WHERE client_id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "Done" ;
        header("Location: update_client_profile.php?client_id=".$id);
    }
    else{
        die(mysqli_error($conn));
    }
}
?>