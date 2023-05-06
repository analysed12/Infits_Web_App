<?php

if(isset($_SESSION['dietitianuserID'])){
    $conn = new mysqli("localhost", "root", "", "infits");
    if($conn->connect_error){
        die("Connection failed :" . $conn->connect_error);
    }
    $tasks_id = $_SESSION['dietitianuserID'];
    $sql="SELECT count(*) FROM create_plan WHERE `dietitianuserID`='$tasks_id'";
    $result = $conn->query($sql);
    if(empty($result->fetch_assoc())){
        header('Location:dietplan.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Infits | My Plans</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');

    @font-face {
    font-family: 'NATS';
            src: url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

    body {
        font-family: 'NATS', serif !important;
        letter-spacing: 1px;
    }

    .card {
        /* background-color: dodgerblue; */
        color: black;
        padding: 1rem;
            /* height: auto;
        width: auto; */
            width: 475px;
            height: 318px;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
            border-radius: 1.25rem !important;
            border: none !important;
    }

    .cards {
            /* max-width: 1000px; */
        margin: 0 auto;
            /* display: grid; */
            gap: 3.5rem;
            /* grid-template-columns: repeat(auto-fit, minmax(450px, 1fr)); */
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
    }

    .card-upper {
        /* width: 100%; */
    }

    .card-upper-image {
        /* background-color: pink; */
        /* width: 20%; */

        display: inline;
    }

    .card-upper-details {
        /* background-color: green; */
        /* width: 60%; */
        display: inline;
        /* padding: 1rem; */
    }

    .card-upper-options {
        /* background-color: blue; */
            width: 20% !important;
            /* border: 1px solid red; */
            /* display: flex;
        flex-direction: row !important;
        border: 1px solid red; */
            display: flex;
            justify-content: end;
    }

    .card-upper-image img {
        max-width: 100%;
        max-height: 100%;
        display: block;

    }

    .tag-element {
        background-color: #7282FB;
        color: white;
        margin: 5px;
        padding: 5px;
            border-radius: 10px;
            margin:1rem 0rem 1rem 1rem  !important;
    }

    .card-middle {
            padding-left: 1rem;
    }

    .card-below {
        /* margin-top: 5px; */
            padding: 0.5rem 1rem;
        /* background-color: red; */
    }

    .search-box {
        border: none !important;


    }

    input:focus {
        outline: none !important;
    }

    /* .search-icon {
        border: none;
        background: white;
        padding: 0 10px;

    } */

    /* .search-form {
        border: 1px solid #E1E1E1;
        width: fit-content;
        float: right;
        /* padding: 2px; */
        /* border-radius: 5px;
        box-sizing: border-box;
        position: absolute;
        width:40%;
        right: 20%;
        left:70%;
       background: #FFFFFF;
       border: 2px solid #E1E1E1;
    
    } */ 

    a:hover {
        cursor: pointer;
            background-color: none;
    }

    .box input {
        width: 100%;
        background-color: blue;
    }

    /* .search-list {
        width: 200px;
    }

    .search-list li {
        border: 1px solid black;
        background-color: lightblue;
    } */

    
    
        #btn1 {
    border: none;
    background-color: #0177FD;
    color: white;
    border-radius: 100%;
            font-size: 2.7rem;
    padding-left: 1.4rem;
    padding-right: 1.4rem;
            position: relative;
            /* margin-left:93%; */
    overflow: hidden;
    margin-bottom: 1rem;
}

.searchbox {
            /* width: 400px; */
            height: 48px;
            width:343px !important;
            /* margin-left: 10rem; */
    background: #ffffff;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 10px;
}


        @media screen and (max-width: 763px) {
            #heading {
                font-size: 35px !important;
}

            .head-sec {
                margin-left: 0rem !important;
                display: flex;
                flex-direction: column;
                padding: 0px !important;
    }
            .search{
                margin-bottom: 2rem !important;
    }
    }

@media screen and (max-width: 720px) {
            .card {
                /* margin: auto; */
                width: 100%;
                padding-right: 2rem;

    }

            .cards {
                place-items: center;
    }
    
            .card-sec {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-left: 0rem !important;
}
}

@media screen and (max-width: 720px) {
            .searchbox {
        /* width: 2rem; */
        margin: auto;
        width: auto;
    }
}

@media screen and (max-width: 720px) {
            #btn1 {
        
       right: 3rem;
    }
}
     /****************************media query for mediun devices**************************************/
        @media screen and (min-width: 720px) and (max-width: 1200px) {
            .cards {
                place-items: center;
}
            .search-bar{
                width: 50% !important;
            }
        }
        @media screen and (min-width: 763px) and (max-width: 767px) {
           .search-bar{
            width:100% !important;
           }
           .search{
            width: 50% !important;
           }
        }

    </style>
    <script>
        $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>

<body>
    <?php
include "navbar.php";
?>




    <div class="head-sec" style="padding:1rem; margin-left: 15rem; display: flex;  justify-content: space-between;">
        <div class="col-6" id="heading" style="font-weight:400;font-size:40px;color:black !important;margin-left:0.3rem !important;margin-top:1rem;">Plans</div>
        <div class="search col-lg-6 col-sm-12 col-md-6 d-flex justify-content-center align-items-center" style="text-align:right">
            <div class="card-body dig searchbox col-12">
                <form method="POST" class="search-form form-inline">
                    <!-- <button type="submit" id="btn_search" class="search-icon" name="search-btn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <input type="text" placeholder="Search plan" class="search-box form-control w-75" id="search"
                        name="search" > -->
                    <button style="background-color:white;border:none;" id="btn_search" class="search-icon ms-2"
                        name="search-btn"><img src="images/vec_search.png" alt=""></button>
                    <input type="text" placeholder="Search" class="search-box form-control w-50" id="search"
                        name="search" style="border:none;font-size:20px;margin-left:1rem  ">
       
                    <div id="display">
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="list-group list-group-item-action" id="content">
                </div>
            </div>
        </div>
        <!----------------SEARCH BAR---------------------->
        <!-- <div class="input-group search-bar mb-3 col-lg-6 col-md-6 col-sm-12 mt-3" >
            <span class="input-group-text border-end-0 bg-white" style="height: 48px; border-radius: 10px 0px 0px 10px; border: 2px solid #E8ECF5;" id="basic-addon1"><i class="fa-solid fa-magnifying-glass" style="color: #667080; "></i></span>
            <input type="text" class="form-control border-start-0 ps-0"  style="height: 48px; border-radius: 0px 10px 10px 0px; border: 2px solid #E8ECF5;font-size:20px; " placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
    </div> -->
            </div>

    <div class="card-sec" style="display: flex; justify-content:center;">
        <div class="col-md-12">
            <div class="">
                <div class="cards">
                    <?php

if(isset($_POST['search-btn']))
{
  if(!empty($_POST['search']))
	{
    $search = $_POST['search'];
    $sql1 = "SELECT * FROM create_plan WHERE name='$search'";
 if($result1 = mysqli_query($conn, $sql1)){
     if(mysqli_num_rows($result1) > 0){
             while($row1 = mysqli_fetch_array($result1)){
              ?>

                    <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-3">
                                <img src="images/fruit_salad.svg" alt="">
                            </div>
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style=" font-size:30px;font-weight:400 !important;">
                                        <p>
                                            <?php echo $row1['name']?>
                                        </p>

                                    </div>


                                    <div class="w-100"></div>
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; "><span
                                            style="font-weight:bold">Rs.
                                            <?php echo $row1['price'] ?>
                                        </span>/month
                                    </div>
                                    <div class="col-7"
                                        style="margin-top:5px;font-size:13px;font-weight:bold;display:flex;align-items:center;justify-content:center;">
                                        <?php $orgDate = $row1['start_date']; $newDate = date("d/m/Y", strtotime($orgDate)); echo $newDate ?>
                                        to
                                        <?php $orgDate = $row1['end_date']; $newDate = date("d/m/Y", strtotime($orgDate)); echo $newDate ?>
                                    </div>
                                    <div class="w-100"></div>
                                    <?php
                                            $mark=explode(',', $row1['tags']);//what will do here
                                            foreach($mark as $out) {
                                               echo '<div class="tag-element" style="width:auto;">'.$out.'</div>';
                                            }
                                            ?>

                                </div>
                            </div>
                            <!-- <div class="card-upper-options">
                                <div class="">
                                    <div style="">
                                        <a href="update_plan.php?id=<?php echo $row1['plan_id'] ?>"
                                            title="Update Record" style="color#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-pencil"></span></a>
                                    </div>
                                    <div style="">
                                        <a onclick="return confirm('Are you sure?')"
                                            href="delete_plan.php?id=<?php echo $row1['plan_id'] ?>"
                                            title="Delete Record" style="color:#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-trash "></span></a>
                                </div>
                            </div>
                            </div> -->
                        </div>
                        <div class="card-middle row" style="color:#919191 !important">
                            <?php echo $row1['description']?>
                        </div>
                        <div class="card-below row">
                            <div class="col">
                                <div class="row">FEATURES</div>
                                <div class="row">
                                    <?php
                                            $mark=explode(',', $row1['features']);//what will do here
                                            foreach($mark as $out) {
                                              
                                                echo '<div style="display:inline-block;width:auto; margin-right:0.2px;"><i style="color:black;" class="fa-regular fa-circle-check"></i></div>';
                                                echo '<div style="display:inline-block;width:auto;">'.$out.'</div>';
                                            }
                                            ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php
             }
            }
          }

    
  }
}
else{                       
 $sql = "SELECT * FROM create_plan";
 if($result = mysqli_query($conn, $sql)){
     if(mysqli_num_rows($result) > 0){
             while($row = mysqli_fetch_array($result)){
               ?>

                    <div class="card" container>
                        <div class="card-upper row">
                            <div class="card-upper-image col-3">
                                <img src="images/fruit_salad.svg" alt="">
                            </div>
                            <div class="card-upper-details col-9">
                                <div class="row">
                                    <div
                                        style=" display: flex; justify-content: space-between; align-items: center;">
                                        <div class="col ps-0"
                                        style="margin-top:5px;margin-bottom:5px; font-size:30px;font-weight:400;">
                                            <?php echo $row['name']?>
                                        </div>
                                        <span class="border-1 ">
                                            <a href="update_plan.php?id=<?php echo $row['plan_id'] ?>"
                                                title="Update Record"
                                                style="color:#7282FB;height: 30px;border-radius: 8px;"
                                                data-toggle="tooltip"><img src="./images/edit-icon.svg" alt="">
                                            </a>
                                            <a onclick="return confirm('Are you sure?')"
                                                href="delete_plan.php?id=<?php echo $row['plan_id'] ?>"
                                                title="Delete Record"
                                                style="color:#FF3D3D;height: 30px;border-radius: 8px;margin-top:10rem"
                                                data-toggle="tooltip"><img src="./images/delete-icon.svg" alt="">
                                            </a>
                                        </span>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col-5" style=" "><span
                                            style="font-weight:bold">Rs.
                                            <?php echo $row['price'] ?>
                                        </span>/month
                                    </div>
                                    <div class="col-7"
                                        style="font-size:13px;font-weight:bold;display:flex;align-items:center;justify-content:center;">
                                        <?php $orgDate = $row['start_date']; $newDate = date("d/m/Y", strtotime($orgDate)); echo $newDate ?>
                                        to
                                        <?php $orgDate = $row['end_date']; $newDate = date("d/m/Y", strtotime($orgDate)); echo $newDate ?>
                                    </div>
                                    <div class="w-100"></div>
                                    <?php
                                            $mark=explode(',', $row['tags']);//what will do here
                                            foreach($mark as $out) {
                                               echo '<div class="tag-element" style="width:auto;">'.$out.'</div>';
                                            }
                                            ?>
                                            

                                </div>
                               
                            </div>
                            
                            
                            
                            <!-- <div class="card-upper-options col-1" style="position:relative;display:flex">
                                
                            
                                <div class="row" style="position:absolute;display:flex">
                                <div class="setting" id="setting">
                                    <a id="edit" class="settingbtn">Edit</a>
                                    <a id="delete" class="settingbtn">Delete</a>
                                </div>
                               <div> <button type="submit" class="dots" ><i class="fa-solid fa-ellipsis-vertical"></i></button></div>
                                    
                                </div>
                                
                            </div> -->
                            
                            <!-- <div class="card-upper-options ">
                                
                                <div class="">
                                        <a href="update_plan.php?id=<?php echo $row['plan_id'] ?>" title="Update Record"
                                            style="color:#7282FB;padding-left:0.5rem;padding-right:0.5rem;height: 30px;border-radius: 8px;" data-toggle="tooltip"><img src="./images/edit-icon.png" alt=""></a>
                                    
                                    
                                        <a onclick="return confirm('Are you sure?')"
                                            href="delete_plan.php?id=<?php echo $row['plan_id'] ?>"
                                            title="Delete Record" style="color:#FF3D3D;padding-left:0.5rem;padding-right:0.5rem;height: 30px;border-radius: 8px;margin-top:10rem" data-toggle="tooltip"><img src="./images/delete-icon.png" alt=""></a>
                                
                                    </div>
                            </div> -->

                                </div>
                        <div class="card-middle row" style="color:#919191 !important">
                            <?php echo $row['description']?>
                            </div>
                        <div class="card-below row">
                            <div class="col">
                                <div class="row">FEATURES</div>
                                <!-- <div class="row"> -->
                                <?php
                                            $mark=explode(',', $row['features']);//what will do here
                                            foreach($mark as $out) {

                                                // echo '<div>';
                                                echo '<div style="display:inline-block;width:auto;margin-right:5px; "><i style="color:black;" class="fa-regular fa-circle-check"></i></div>';
                                                echo '<div style="display:inline-block;width:auto; margin-right:20px;">'.$out.'</div>';
                                                // echo '</div>';
                                            
                                            }
                                            ?>
                                <!-- </div> -->
                            </div>
                        </div>
                    </div>

                    <?php
             }

         // Free result set
         mysqli_free_result($result);
     } else{
         echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
     }
 } else{
     echo "Oops! Something went wrong. Please try again later.";
 }

 // Close connection
 mysqli_close($conn);
}
                        ?>

                    <div>
                    </div>
                </div>
            </div>

            <div class="d-flex  justify-content-end">
                <a onclick="window.location.href = 'create_plan.php';"><img src="./images/9_plus.png" alt="img"></a>
    </div>
    

</body>

<script>
function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}
    $(document).ready(function () {
        $("#search").keyup(function () {
        var name = $('#search').val();
        if (name == "") {
            $("#display").html("");
        } else {
            $.ajax({
                type: "POST",
                url: "search.php",
                data: {
                    search: name
                },
                    success: function (html) {
                    $("#display").html(html).show();
                }
            });
        }
    });
});
</script>

</html>