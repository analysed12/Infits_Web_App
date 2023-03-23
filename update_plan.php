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
    <title>Infits | Update Plan</title>
    <link rel="stylesheet" href="create_plan.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
  opacity: 1; /* Firefox */
}

    body {
        font-family: 'NATS', sans-serif;
    }
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
    
}

.features_left {
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;

    width: 64%;
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
    padding: 15px;
    width: 350px;
height: 50px;
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
    
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 21px;
    
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
select {
        width: 250px;
        margin: 10px;
    }

.input-group input:focus {
    outline: none !important;
}

.remove-textbox {
    color: black;
    background: white;
    border: none;
}
.cancelbutton{
    width: 183px;
height: 52px;

margin-left:2.5rem;
background: #FFFFFF;
border: 2px solid #7282FB;
border-radius: 10px;
}
.savebutton{
    width: 183px;
height: 52px;
border:none;
color:white;
margin-left:2.5rem;
background: #6883FB;
border-radius: 10px;
}


@media screen and (max-width: 720px) {
  .header{
    margin-left:0% !important; 
    font-size:25px !important;
  }
  .features_left {
    
    width: 100%;
}
  .ev-img{
    margin-top:3rem;
  }
  #width{
    width:auto !important;
  }
  #plussbutton{
    margin-left:40% !important;
  }
 
  
}
</style>

<body>
    <!-- Navbar Start -->

    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">

        <p class="header" style="font-size:30px;margin-left:3rem;margin-top:1rem">Update Plan</p>

        <!-- Other content -->
        <?php
        $id = $_GET['id'];
        // echo $id ;
        $sql = "SELECT * from `create_plan` where plan_id='$id'";
        $result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            // echo $row['name'];
        ?>

        <div class="plan_form">
            <!-- Person image -->
            <div class="event-image">
                <div class="ev-img" style="position:relative">
                    <div style="background: #7282FB;border-radius:100px;padding:0.5rem; z-index:2;margin-top:1rem;cursor:pointer;"> <img src="images/pencil.png" alt=""></div>
                    <img src="images/create_edit_plan.svg"  style="position:absolute;width:15rem" >
                </div>
            </div>
            <br>
            <form action="#" method="post">
                <!-- Plan name -->
                <div style="text-align:center; !important;;margin-top:2rem;" class="plan_name_box">
                    <input required type="text" placeholder="Plan Name" class="plan_name" name="plan_name" style="border:none;"
                        value="<?php echo $row['name']?>"><i class="fa-solid fa-pen" style="color:#7282FB;cursor:pointer;"></i>
                </div>

                <!-- Main form starts -->
                <div class="event_form" style="margin-left:23rem" >
                    <div class="evt-form">

                        <!-- Different Tags -->
                        <div class="tags">
                            <div class="tag_title" style="font-size:20px">Tags</div>
                            <div class="tag">
                                <div class="tag_select"
                                    style="display: inline-block; border:none; padding-top: 10px; font-size: 15px; width: auto;">
                                    <select id="fields_u"  style="padding-right:5rem"name="languages[]" multiple>
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


                                <button  id="plussbutton "onclick="showPopup()" style="display: inline-block; border:none;margin-left:35%;padding-left:1rem;padding-right:1rem;"
                                    class="tag-item openButton openBtn " >+</button>
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
                        <label for="" class="subject tag_title" style="font-size:20px">Plan Duration</label>
                        <div class="duration" style="display:flex; gap:2rem;margin-top:1rem">
                        <div>
                        <p style="font-size:15px;color: #6C6F71;">From</p>
                        <input required class="subject subject-text" type="date" name="start_date" id="width"
                            value="<?php echo $row['start_date']?>"
                            style="height: 45px;width: 226px; background: #FFFFFF;box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);border-radius: 10px;border:none;color: #BBBBBB;opacity: 0.5;padding:15px" />
                        
                        </div>
                        <div>
                        <p style="font-size:15px;color: #6C6F71;">To</p>
                        <input required class="subject subject-text" type="date" name="end_date" id="width"
                            value="<?php echo $row['end_date']?>"
                            style="height: 45px;width: 226px; background: #FFFFFF;box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);border-radius: 10px;border:none;color: #BBBBBB;opacity: 0.5;padding:15px" />
                        </div>
                        </div>
                        <br>

        
                        <label for="" class="subject tag_title" style="font-size:20px">Description</label>
                        <input required id="width"class="subject " type="text" name="description"  placeholder="Description"
                            value="<?php echo $row['description']?>" style="height: auto; background: #FFFFFF;width: 482px;box-shadow:0px 1.7px 5px rgba(0, 0, 0, 0.25);border-radius: 10px;border:none; padding:15px" />
                        <br />

                        <label for="" class="subject tag_title " style="font-size:20px">Features</label>

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

                       

                        <label for="" class="subject tag_title" style="font-size:20px;margin-top:1rem" id="width">Price</label>
                        <input required class="subject subject-text" type="number" value="<?php echo $row['price']?>"
                            name="price" placeholder="₹000 / month" style="height: 45px; background: #FFFFFF;box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);width: 482px;border-radius: 10px;border:none;padding:15px" />
                        <br>
                        <div style="display:flex">
                            <button name="final_cancel_btn" class="cancelbutton">Cancel</button>
                            <button name="final_update_btn" class="savebutton" type="submit">Save</button>
                            
                            
                        </div>
                        <button class="savebutton"
                                style="margin-top:1rem;margin-left:10rem"
                                name="final_save_btn" type="submit">Save as new</button>
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
        $dietitianuserID = $_SESSION['dietitianuserID'];
        // $duration="hello";
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


        $sql1 = "UPDATE `create_plan` SET name='$planname',tags='$tags',start_date='$start_date',end_date='$end_date',features='$features',description='$description',price='$price' WHERE plan_id=$id AND dietitianuserID = '$dietitianuserID'";
        // echo $sql1;
        $result1=mysqli_query($conn,$sql1);
        // echo $result1;
        // die();

        if($result1){
            header('Location: myplan.php');

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
    $dietitianuserID = $_SESSION['dietitianuserID'];
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

    $sql2 = "INSERT INTO `create_plan` (`dietitianuserID`,`name`,`tags`, `start_date`, `end_date`,`features`, `description`, `price`) VALUES ('$dietitianuserID','$planname','$tags','$start_date','$end_date','$features','$description','$price')";
    $result2=mysqli_query($conn,$sql2);

    if($result2){
        header('Location: myplan.php');
    }
    else{
        die(mysqli_error($conn));
    }
}
else if(isset($_POST['final_cancel_btn'])){
    header('Location: myplan.php');
    die('');
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
<?php
$output = ob_get_clean();

// Modify the headers
header('Content-Type: text/html');
header('Cache-Control: no-cache');

// Flush the headers to the browser
ob_end_flush();
echo $output;
?>
</html>