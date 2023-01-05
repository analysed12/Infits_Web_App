<?php include "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Create Plan</title>
    <link rel="stylesheet" href="create_plan.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js">
    </script>
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/css/bootstrap-multiselect.css">

</head>

<body>
    <!-- Navbar Start -->
    <?php
include "navbar.php"
?>
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

        <h4 class="header">Create Plan</h4>

        <!-- Other content -->
        <div class="plan_form">
            <!-- Person image -->
            <div class="event-image">
                <div class="ev-img">
                <img src="images/create_edit_plan.svg" alt="">
                </div>
            </div>
            <br>
            <form action="create_plan.php" method="post">
                <!-- Plan name -->
                <div style="text-align:center; !important" class="plan_name_box">
                    <input type="text" placeholder="Plan Name" class="plan_name" name="plan_name">
                </div>

                <!-- Main form starts -->
                <div class="event_form">
                    <div class="evt-form">

                        <!-- Different Tags -->
                        <div class="tags">
                            <div class="tag_title">Tags</div>
                            <div class="tag">
                                <div
                                    style="display: inline-block; border:none; padding: 10px; font-size: 15px; width: auto;">
                                    <select id="languages" name="languages[]" multiple>
                                        <?php    
                                $sql = "SELECT * FROM plans";
                                    $result=mysqli_query($conn,$sql);
                                    $num = mysqli_num_rows($result);
                                    if ($num >0){
                                    while ($row =mysqli_fetch_assoc($result)){
                                    ?>
                                        <option value="<?php echo $row['planname']?>"><?php echo $row['planname'] ?>
                                        </option>

                                        <?php
                                }
                                    }?>
                                    </select>
                                </div>
                                
                                <!-- <button  style="display: inline-block; border:none;"
                                    class="tag-item openButton openBtn" >
                                    
                                </button> -->
                                <?php 
                                // include 'add_plan_popup.php'; 
                                ?>
                            </div>
                        </div>
                        <!-- Tags end here -->

                        <br>
                        <label for="" class="subject tag_title">Plan Duration</label>
                        <p style="font-size:15px;">Start Time</p>
                        <input class="subject subject-text" type="date" name="start_date" style="height: 45px;" />
                        <p style="font-size:15px; margin-top:10px;">End Time</p>
                        <input class="subject subject-text" type="date" name="end_date" style="height: 45px;" />

                        <br />
                        <label for="" class="subject tag_title">Description</label>
                        <input class="subject " type="text" name="description" style="height: 79px;" />
                        <br />

                        <label for="" class="subject tag_title">Price</label>
                        <input class="subject subject-text" type="number" name="price" placeholder="Rs. /month"
                            style="height: 45px;" />

                        <br>
                        <div class="btns">
                            <button>Select</button>
                            <button style="float: right;" name="final_save_btn" type="submit">Save</button>
                        </div>
                        <br><br><br>
                    </div>

                </div>

            </form>

        </div>
    </div>
    <!-- Contents End -->
    <!-- Add everything in database -->
    <?php
if (isset($_POST['final_save_btn'])){
    // For tags
    $name_arr = $_POST['languages'];
    $tags = implode(" , ",$name_arr);
        $planname = $_POST['plan_name'];
        $profile = "hello";
        $duration="hello";
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $description = $_POST['description'];
        $price = $_POST['price'];
  
            $sql1 = "INSERT INTO `create_plan` (`name`,`tags`, `start_date`, `end_date`, `description`, `price`) VALUES ('$planname','$tags','$start_date','$end_date','$description','$price')";
            $result1=mysqli_query($conn,$sql1);
   
}
            ?>
    <!-- Database adding ends here -->


    <!-- Pop up for adding new tags -->
    <!-- <div class="loginPopup">
        <div class="formPopup" id="popupForm">
            <form action="sample_for_plan.php" method="post">
                <input type="text" name="tag_name">
                <button type="submit" name="add_to_tags_btn">Add</button>
                <button type="button" class="btn cancel " onclick="closeForm()">X</button>
            </form>
        </div>
    </div> -->
    <!-- <?php
                             if (isset($_POST['add_to_tags_btn'])) {
                             $planname = $_POST['tag_name']; 
                             if ($planname != ""){
                             $sql1 = "INSERT INTO plans  VALUES ('$planname')";
                             $result1=mysqli_query($conn,$sql1);
                             echo "<meta http-equiv='refresh' content='0'>";
                             }
                             }
            ?> -->
    <!-- Pop up ends -->

</body>
<script>
$(document).ready(function() {
    $('#languages').multiselect({
        nonSelectedText: 'Select Tags'
    });
});
</script>

</html>