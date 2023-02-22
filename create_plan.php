<?php
ob_start();
include "navbar.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Create Plan</title>
    <!-- <link rel="stylesheet" href="create_plan.css" /> -->
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
html {
    overflow-x: hidden;
    font-size: 13px !important;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: "Poppins";
    font-style: normal;
    font-weight: 500;
    font-size: 13px !important;
    /* padding: 20px; */
}

.plan_form {
    /* margin-left: 10%; */
    width: 100%;
    /* background-color: aquamarine; */
}

.event-image {
    display: flex;
    justify-content: center;
    align-items: center;
    /* margin-top: 5%; */
}

.ev-img {
    display: flex;
    justify-content: center;
    align-items: center;
    /* background-color: pink; */
    color: white;
    height: 50px;
    width: 50px;
    margin-bottom:15px;
    /* padding: 2%; */
    /* border-radius: 50%; */
}

.event-image i {
    font-size: 85px;
    padding: 10px;
    width: 10%;
      height: 10%;
}

.event_form {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left: 20%;
    width: 60%;
    /* margin-right: 10%; */
    /* background-color: brown; */
    /* margin-top: 5%;
    padding: 2%; */
    margin-bottom: 5%;
}

.evt-form {
    width: 60%;
}

input{
    padding-left:10px !important;
}

.tag_title {
    /* font-size: 15px; */
    letter-spacing: 1.5px;
    text-transform: capitalize;
    font-weight: 600;
    color: #1d1e20;
}

.tag-item {
    background: #7282fb;
    border-radius: 10px;
    color: white;
    padding: 10px;
    /* margin: 10px; */
    /* font-size: 15px; */
    width: auto;
}

.subject {
    display: block;
    /* font-size: 18px; */
    /* box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25) !important; */
/* height:35px; */
    width: 100%;
}

.subject-text {
    font-size: 13px;
}

.btns button {
    width:40%;
    margin-left:20px;
    margin-right:20px;
    height: 40px;
    /* padding:10px; */
    background: #ffffff;
    border: 2px solid #7282fb;
    border-radius: 10px;
    font-size: 13px;
}

.loginPopup {
    position: relative;
    text-align: center;
    width: 100%;
}

.formPopup {
    /* display: ; */
    position: fixed;
    left: 45%;
    top: 5%;
    transform: translate(-50%, 5%);
    border: 3px solid #999999;
    z-index: 9;
}

.formContainer {
    max-width: 300px;
    padding: 20px;
    background-color: #fff;
}

.formContainer input[type="text"],
.formContainer input[type="password"] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 20px 0;
    border: none;
    background: #eee;
}

.formContainer input[type="text"]:focus,
.formContainer input[type="password"]:focus {
    background-color: #ddd;
    outline: none;

}

.formContainer .btn {
    padding: 12px 20px;
    border: none;
    background-color: #8ebf42;
    color: #fff;
    cursor: pointer;
    width: 100%;
    margin-bottom: 15px;
    opacity: 0.8;
}

.formContainer .cancel {
    background-color: #cc0000;
}

.formContainer .btn:hover,
.openButton:hover {
    opacity: 1;
}

.plan_name {
    text-align: center !important;
    border-top: none !important;
    border-left: none !important;
    border-right: none !important;
    outline: none;
    font-size: 12px !important;
    /* margin-top: 10px; */
}

.plan_name_box {
    text-align: center !important;
}

@media (min-width: 0px) and (max-width: 720px) {
    .plan_name_box {
        text-align: center;
        /* width:50% !important; */
    }

    .plan_form {
        margin-left: 0% !important;
        width: 100% !important;
        /* background-color: aquamarine; */
    }

    .event_form {
        margin-left: 0% !important;
        width: 100%;
    }

    .tag_title {
        font-size: 12px !important;
    }

    .tag-item {
        font-size: 12px !important;
    }
}

.caret {
    display: none !important;
}

.btn-default {
    text-shadow: none !important;
}

.multiselect {
    background: none !important;
    border:none !important;
    color: black !important;
    padding: 10px !important;
    font-size: 12px !important;
    width: 100% !important;
}

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
    /* margin-top: 20px; */
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
    /* float:right; */

}

.features_box {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 6px;
    height: 35px;
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
    font-size: 12px;
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
    width:50%;
}

.input-group input:focus {
    outline: none !important;
}

.remove-textbox {
    color: black;
    background: white;
    border: none;
}

label{
    margin-bottom:0px !important;
}

::placeholder {
  color: #bbbbbb;
  opacity: 1; /* Firefox */
}

/* placeholder text style */
input[type="date"]::-webkit-datetime-edit-text,
input[type="date"]::-webkit-datetime-edit-month-field,
input[type="date"]::-webkit-datetime-edit-day-field,
input[type="date"]::-webkit-datetime-edit-year-field {
  color: #bbbbbb;
}

</style>

<body>
    <!-- Navbar Start -->

    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

        <h4 style="font-size:30px;margin-left:3rem;margin-top:1rem" class="header">Create Plan</h4>

        <!-- Other content -->
        <div class="plan_form">
            <!-- Person image -->
            <div class="event-image">
                <div class="ev-img" style="position:relative">
                <div style="background: #7282FB;border-radius:100px;padding:0.5rem; z-index:2;margin-top:1rem;cursor:pointer;"> <img src="images/pencil.png" alt=""></div>
                    <img src="images/create_edit_plan.svg"  style="position:absolute;width:15rem;margin-top:2rem" >
                </div>
                </div>
            </div>
            <br>
            <form action="create_plan.php" method="post">
                <!-- Plan name -->
                <div style="text-align:center; !important;;margin-top:2rem;" class="plan_name_box">
                    <input type="text" placeholder="Plan Name" class="plan_name" name="plan_name" style="border:none;" required><i class="fa-solid fa-pen" style="color:#7282FB;cursor:pointer;"></i>
                </div>
                <!-- Main form starts -->
                <div class="event_form">
                    <div class="evt-form">

                        <!-- Different Tags -->
                        <div class="tags" style="margin-top:1rem">
                            <div class="tag_title">Tags</div>
                            <div class="tag" style="width:100%;">
                                <div
                                    style="display: inline-block; border:none;font-size: 12px; width: 80%;background: white !important;
    border-radius: 10px !important;
    /* border: 1px solid black !important; */
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25) !important;">
                                    <select id="fields_u" name="languages[]" multiple >
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
                                        $('#fields_u').multiselect('select', ['$textValue']);

                                        console.log('added');
                                        event.preventDefault();
                                        $('#fields_u').multiselect('rebuild');
                                        popup.classList.remove('open');
                                    });


                                });
                                </script>


                                <button onclick="showPopup()" style="float:right;display: inline-block;width:10%; border:none;"
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
                        <div style="width:100%;">
                            <div style="display:inline-block;width:45%; margin-right:6%;">
                                <p style="font-size:12px;">Start Time</p>
                                <input class="subject subject-text" type="date" name="start_date" style="height: 35px; background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />
                            </div>
                            <div style="display:inline-block;width:45%;">
                                <p style="font-size:12px; margin-top:10px;">End Time</p>
                                <input class="subject subject-text" type="date" name="end_date" style="height: 35px; background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />
                            </div>
                        </div>
                        <br>

                        <label for="" class="subject tag_title">Features</label>

                        <div class="features_main">
                            <div class="features_left textbox-wrapper">
                                <div class="input-group">

                                </div>

                            </div>
                            <div class="features_right">
                                <button style="font-size:15px" type="button" class="plan_btn_add plan_btn add-textbox">
                                    +
                                </button>
                            </div>
                        </div>

                        <br>
                        <label for="" class="subject tag_title">Description</label>
                        <input class="subject " placeholder="Description" type="text" name="description" style="height: 35px;  background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />
                        <br />

                        <label for="" class="subject tag_title">Price</label>
                        <input class="subject subject-text" type="number" name="price" placeholder="Rs. /month" style="height: 35px; background: #FFFFFF;
    box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    border:none;" />

                        <br>
                        <div class="btns">
                            <button>Cancel</button>
                            <button style="float: right;background-color:#6883FB;color:white;" name="final_save_btn" type="submit">Save</button>
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
    // $tags = "hello" ;
        $planname = $_POST['plan_name'];
        // dieticianid....This is a session variable
        $dietitianuserID = $_SESSION['dietitianuserID'];
        // $profile = "Azarudeen";
        $duration="hello";
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        if(isset($_POST['text_arr'])){
            $myarray = $_POST['text_arr'];
        }
        $features = '';
        if(!empty($myarray)){
            $features = implode(" , ",$myarray);
        }
  
            $sql1 = "INSERT INTO `create_plan` (`dietitianuserID`,`name`,`tags`, `start_date`, `end_date`,`features`, `description`, `price`) VALUES ('$dietitianuserID','$planname','$tags','$start_date','$end_date','$features','$description','$price')";
            echo $sql1;
            $result1=mysqli_query($conn,$sql1);
            header('Location: myplan.php');
   
}
            ?>

    <!-- Pop up ends -->

</body>
<?php
$output = ob_get_clean();

// Modify the headers
header('Content-Type: text/html');
header('Cache-Control: no-cache');

// Flush the headers to the browser
ob_end_flush();
echo $output;
?>
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