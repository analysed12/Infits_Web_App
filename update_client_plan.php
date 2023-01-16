<?php
include "navbar.php";
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
/* Add Tags Popup */
.popup {
    display: none;

}

.popup.open {
    display: block;
}

.blocker {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    content: ' ';
    background: rgba(0, 0, 0, .5);
}

.popup .contents {

    border: 1px solid #ccc;
    border-radius: 5px;
    width: auto;
    height: auto;
    display: flex-box;
    align-items: center;
    justify-content: center;
    background: #FFF;
    position: fixed;
    top: 50vh;
    left: 50vw;
    transform: translate(-50%, -50%);
    padding: 20px;
}

.popup .contents p {
    text-align: center;
    margin-top: 5px;
}

.popup .contents input {
    text-align: center;
    margin-top: 5px;
    /* margin-left:5px;
  margin-right:5px; */
}

.popup .contents button {
    text-align: center;
    margin-top: 15px;
    margin-left: 30%;
    text-decoration: none;
    border: none;
    background-color: #6883FB;
    color: white;
    padding: 5px;
    width: 40%;
    border-radius: 5px;


}

/* End of Add Tags Popup */


.features_main {
    display: flex;
    flex-direction: row;
    /* align-items: center;
  justify-content: center; */
    margin-top: 20px;
    width: 100%;
}

.features_left {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;

    width: 100%;
}

.features_right {
    display: flex;
    flex-direction: column;
    align-items: center;

}

.features_box {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 6px;
    height: 50px;
    width: 70%;
    background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin: 5px;
}

.ip_box {
    background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border: none;
    width: 400px;
    padding: 10px;
}


.plan_btn_add {
    width: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-top: 5%;
}

.plan_btn {
    color: #FFFFFF;
    background: #7282FB;
    border-radius: 10px;
    height: 40px;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 5px;
    padding-right: 5px;
    margin-right: 10px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 21px;
    line-height: 24px;
    border: none;
    /* identical to box height, or 104% */

    display: flex;
    align-items: center;
    text-align: right;
    letter-spacing: 0.44px;
}

.input-group input {
    border: none;
}

.input-group input:focus {
    outline: none !important;
}

.remove-textbox {
    color: black;
    background: white;
    border: none;
}
</style>

<body>
 
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

        <h4 class="header">Create Plan</h4>

        <!-- Other content -->
        <?php
        $plan_id = $_GET['plan_id'];
        // echo $id ;
        $sql = "SELECT * from `create_plan` where plan_id='$id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            echo $row['name'];
        ?>

        <div class="plan_form">
            <!-- Person image -->
            <div class="event-image">
                <div class="ev-img">
                    <img src="images/create_edit_plan.svg" alt="">
                </div>
            </div>
            <br>
            <form action="select_client_plan.php" method="post">
                <!-- Plan name -->
                <div style="text-align:center; !important" class="plan_name_box">
                    <input required type="text" placeholder="Plan Name" class="plan_name" name="plan_name"
                        value="<?php echo $row['name']?>">
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
                                    <select id="fields_u" name="languages[]" multiple>
                                        <option value="Keto Diet">Keto Diet</option>
                                        <option value="Vegan Diet">Vegan Diet</option>
                                        <option value="Diet Chart">Diet Chart</option>
                                    </select>

                                </div>

                                <script type="text/javascript">
                                $(document).ready(function() {
                                    $('#fields_u').multiselect();
                                    $('#fields_u').multiselect('select', ['Keto Diet']);
                                    $('#fields_u').multiselect('select', ['Vegan Diet']);
                                    $('#fields_u_add').on('click', function() {
                                        $textValue = document.getElementById("txt").value;
                                        $('#fields_u').append('<option value="' + $textValue + '">' +
                                            $textValue + '</option>');
                                        console.log('added');
                                        event.preventDefault();
                                        $('#fields_u').multiselect('rebuild');
                                        popup.classList.remove('open');
                                    });


                                });
                                </script>


                                <button onclick="showPopup()" style="display: inline-block; border:none;"
                                    class="tag-item openButton openBtn">+</button>
                                <div class="popup">
                                    <div class="blocker" onclick="hidePopup()"></div>
                                    <div class="contents">
                                        <p>Add Tags</p>
                                        <input type="text" id="txt" name="tag_name"
                                            placeholder="Type Tag Name here....">
                                        <br>
                                        <button id="fields_u_add">Add</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Tags end here -->


                        <br>
                        <label for="" class="subject tag_title">Plan Duration</label>
                        <p style="font-size:15px;">Start Time</p>
                        <input required class="subject subject-text" type="date" name="start_date"
                            value="<?php echo $row['start_date']?>"
                            style="height: 45px; background: #FFFFFF;box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);border-radius: 10px;border:none;" />
                        <p style="font-size:15px; margin-top:10px;">End Time</p>
                        <input required class="subject subject-text" type="date" name="end_date"
                            value="<?php echo $row['end_date']?>"
                            style="height: 45px; background: #FFFFFF;box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);border-radius: 10px;border:none;" />
                        <br>

                        <label for="" class="subject tag_title">Features</label>

                        <div class="features_main">
                            <div class="features_left textbox-wrapper">
                                <div class="input-group">
                                </div>

                            </div>
                            <div class="features_right">
                                <button type="button" class="plan_btn_add plan_btn add-textbox">
                                    +
                                </button>
                            </div>
                        </div>

                        <br>
                        <label for="" class="subject tag_title">Description</label>
                        <input required class="subject " type="text" name="description"
                            value="<?php echo $row['description']?>" style="height: 79px; background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />
                        <br />

                        <label for="" class="subject tag_title">Price</label>
                        <input required class="subject subject-text" type="number" value="<?php echo $row['price']?>"
                            name="price" placeholder="Rs. /month" style="height: 45px; background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />
                        <br>
                        <div class="btns">
                            <button style="display:inline-block;width:30%; font-size:90%;" name="final_cancel_btn">Cancel</button>
                            <button
                                style="display:inline-block;width:30%; font-size:90%; background-color:#6883FB;color:white"
                                name="final_update_btn" type="submit">Save</button>
                            <button
                                style="display:inline-block;width:35%; font-size:90%; background-color:#6883FB;color:white"
                                name="final_save_btn" type="submit">Save as new</button>
                        </div>
                        <br><br><br>
                    </div>
                </div>
            </form>
        </div>
        <?php }
        ?>
    </div>


    <!-- Contents End -->

    <!-- Add everything in database -->
    <?php
if (isset($_POST['final_update_btn'])){
        
        $id = $_GET['id'];
    // For tags
        $name_arr = $_POST['languages'];
        $tags = implode(" , ",$name_arr);
        $planname = $_POST['plan_name'];
        // dieticianid....This is a session variable
        $profile = "Azarudeen";
        $duration="hello";
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $myarray = $_POST['text_arr'];
        $features = implode(" , ",$myarray);


        $sql1 = "UPDATE `create_plan` SET plan_id=$id,name='$planname',tags='$tags',start_date='$start_date',end_date='$end_date',features='$features',description='$description',price='$price' WHERE plan_id=$id";
        $result1=mysqli_query($conn,$sql1);

        if($result){

        }
        else{
            die(mysqli_error($conn));
        }
   
}
else if (isset($_POST['final_save_btn'])){
        
    $id = $_GET['id'];
// For tags
    $name_arr = $_POST['languages'];
    $tags = implode(" , ",$name_arr);
    $planname = $_POST['plan_name'];
    // dieticianid....This is a session variable
    $profile = "Azarudeen";
    $duration="hello";
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $myarray = $_POST['text_arr'];
    $features = implode(" , ",$myarray);

    $sql2 = "INSERT INTO `create_plan` (`profile`,`name`,`tags`, `start_date`, `end_date`,`features`, `description`, `price`) VALUES ('$profile','$planname','$tags','$start_date','$end_date','$features','$description','$price')";
    $result2=mysqli_query($conn,$sql2);

    if($result2){

    }
    else{
        die(mysqli_error($conn));
    }
}
            ?>

    <!-- Pop up ends -->

</body>
<script>
$(document).ready(function() {
    $('#languages').multiselect({
        nonSelectedText: 'Select Tags'
    });
});

const popup = document.querySelector('.popup');

function showPopup() {
    popup.classList.add('open');
    event.preventDefault();

}

function hidePopup() {
    popup.classList.remove('open');
}
</script>


<script>
$(document).ready(function() {
    var max = 10;
    var cnt = 1;
    $(".add-textbox").on("click", function(e) {
        e.preventDefault();
        if (cnt < max) {
            cnt++;
            $(".textbox-wrapper").append(
                '<div class="input-group"><div class="features_box"><input type="text" name="text_arr[]" placeholder="Type feature here.." /><button type="button" class="remove-textbox"><i class="fa-solid fa-xmark"></i></button></div></div>'
            );
        }
    });

    $(".textbox-wrapper").on("click", ".remove-textbox", function(e) {
        e.preventDefault();
        $(this).parents(".input-group").remove();
        cnt--;
    });
});
</script>

</html>