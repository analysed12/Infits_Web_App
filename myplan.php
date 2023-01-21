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

    body {
        font-family: 'NATS', serif !important;
        letter-spacing: 1px;
    }

    .card {
        /* background-color: dodgerblue; */
        color: black;
        padding: 1rem;
        height: auto;
        width: 100%;
        background: #FFFFFF;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }

    .cards {
        max-width: 1200px;
        margin: 0 auto;
        display: grid;
        gap: 1rem;
        grid-template-columns: repeat(auto-fit, minmax(450px, 1fr));
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
        /* width: 20%; */
        display: inline;
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
        border-radius: 5px;
    }

    .card-middle {
        padding: 1rem;
    }

    .card-below {
        /* margin-top: 5px; */
        padding: 1rem;
        /* background-color: red; */
    }

    .search-box {
        border: none !important;

    }

    input:focus {
        outline: none !important;
    }

    .search-icon {
        border: none;
        background: white;

    }

    .search-form {
        border: 1px solid #E1E1E1;
        width: fit-content;
        float: right;
        /* padding: 2px; */
        border-radius: 5px;
    }

    a:hover {
        cursor: pointer;
        background-color: yellow;
    }

    .box input {
        width: 100%;
        background-color: blue;
    }

    .search-list {
        width: 200px;
    }

    .search-list li {
        border: 1px solid black;
        background-color: lightblue;
    }

    #display {
        z-index: 10 !important;
    }
    </style>
    <script>
    $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
    </script>
</head>

<body>
    <?php
include "navbar.php";
?>




    <div class="row" style="padding:1rem;">
        <div class="col-6" style="font-weight:bold;font-size:20px;"><a href="myplan.php">My Plans</a></div>
        <div class="col-6" style="text-align:right">
            <div class="card-body">
                <div style="display:inline-block;padding:8px;background-color:#7282FB;margin-right:10px">
                    <a style="color:white" href="create_plan.php">CREATE PLAN</a>
                </div>
                <form method="POST" class="search-form form-inline" style="width:200px;display:inline-block;">
                    <input type="text" placeholder="Search plan" class="search-box form-control w-75" id="search"
                        name="search">
                    <button type="submit" id="btn_search" class="search-icon" name="search-btn"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                    <div id="display">
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="list-group list-group-item-action" id="content">
                </div>
            </div>

        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="container">
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
                                        style="margin-top:5px;margin-bottom:5px; font-size:20px;font-weight:bold;">
                                        <?php echo $row1['name']?></div>
                                    <div class="w-100"></div>
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; "><span
                                            style="font-weight:bold">Rs.<?php echo $row1['price'] ?></span>/month
                                    </div>
                                    <div class="col-7"
                                        style="margin-top:5px;margin-bottom:15px;font-size:13px;font-weight:bold;display:flex;align-items:center;justify-content:center;">
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
                            <div class="card-upper-options col-1">
                                <div class="row">
                                    <div style="display:inline-block">
                                        <a href="update_plan.php?id=<?php echo $row1['plan_id'] ?>"
                                            title="Update Record" style="color#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-pencil"></span></a>
                                    </div>
                                    <div style="display:inline-block">
                                        <a onclick="return confirm('Are you sure?')"
                                            href="delete_plan.php?id=<?php echo $row1['plan_id'] ?>"
                                            title="Delete Record" style="color:#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-trash "></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-middle row"><?php echo $row1['description']?></div>
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
                            <div class="card-upper-details col-8">
                                <div class="row">
                                    <div class="col"
                                        style="margin-top:5px;margin-bottom:5px; font-size:20px;font-weight:bold;">
                                        <?php echo $row['name']?></div>
                                    <div class="w-100"></div>
                                    <div class="col-5" style="margin-top:5px;margin-bottom:5px; "><span
                                            style="font-weight:bold">Rs.<?php echo $row['price'] ?></span>/month
                                    </div>
                                    <div class="col-7"
                                        style="margin-top:5px;margin-bottom:15px;font-size:13px;font-weight:bold;display:flex;align-items:center;justify-content:center;">
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
                            <div class="card-upper-options col-1">
                                <div class="row">
                                    <div style="display:inline-block">
                                        <a href="update_plan.php?id=<?php echo $row['plan_id'] ?>" title="Update Record"
                                            style="color#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-pencil"></span></a>
                                    </div>
                                    <div style="display:inline-block">
                                        <a onclick="return confirm('Are you sure?')"
                                            href="delete_plan.php?id=<?php echo $row['plan_id'] ?>"
                                            title="Delete Record" style="color:#7282FB" data-toggle="tooltip"><span
                                                class="fa fa-trash "></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-middle row"><?php echo $row['description']?></div>
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

</body>

<script>
function fill(Value) {
    $('#search').val(Value);
    $('#display').hide();
}
$(document).ready(function() {
    $("#search").keyup(function() {
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
                success: function(html) {
                    $("#display").html(html).show();
                }
            });
        }
    });
});
</script>

</html>