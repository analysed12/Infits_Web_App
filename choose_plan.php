<?php
include "config.php";

if(isset($_GET['id']) && isset($_GET['planid'])  ){
    $id = $_GET['id'];
    $planid = $_GET['planid'];

    echo $id;
    echo $planid ;

    $sql = "UPDATE `addclient` SET plan_id=$planid WHERE client_id=$id";
    $result=mysqli_query($conn,$sql);

    if($result){
        echo "Done" ;
        header("Location: update_client_profile.php");
    }
    else{
        die(mysqli_error($conn));
    }
}
?>