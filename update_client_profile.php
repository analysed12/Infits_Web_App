<?php include 'navbar.php'; 

$client_id = $_GET['client_id'];

$sql = "SELECT * from `addclient` where client_id='$client_id'";
$result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
                    $plan_id = $row["plan_id"] ;
                    $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $plan_id";
                    $sql2 = "SELECT * FROM client WHERE client_id = $client_id";
                    $result1 = mysqli_query($conn, $sql1);
                    $result2 = mysqli_query($conn, $sql2);
                    $row1 = mysqli_fetch_assoc($result1);
                    $row2 = mysqli_fetch_assoc($result2);
                    $date1 = strtotime($row1["start_date"]);
                    $date2 = strtotime($row1["end_date"]);
                    $months = 0;
                        
                while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
            // echo;
            
        if(isset($_POST['update'])){
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $height = mysqli_real_escape_string($conn, $_POST['height']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);
            $gender = mysqli_real_escape_string($conn, $_POST['gender']);
            $age = mysqli_real_escape_string($conn, $_POST['age']);
            $about = mysqli_real_escape_string($conn, $_POST['about']);


            $sql3 = "UPDATE addclient SET email = '$email',
              gender = '$gender',
              phone = '$phone',
              height = '$height',
              age = '$age',
              about = '$about'
              where `client_id` = '$client_id'";
             mysqli_query($conn, $sql3);

            $_SESSION['success'] = "Information Updated";
            header("Location: client_profile.php?client_id=$client_id");
              }

?>
<!DOCTYPE html>
<html>

<head>
    <title>Infits | Client Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>
<style>
@font-face {
    font-family: 'NATS';
        src: url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
        opacity: 1;
        /* Firefox */
}

body {
    overflow: auto;
    font-family: 'NATS', sans-serif;
        font-weight: 400;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
        font-family: 'NATS';
    font-style: normal;
    font-weight: 500;
        font-size: 20px;
    padding-bottom: 20px;
}

.input-tag {
        width: 100%;
        height: 40px;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        padding:0px 0px 0px 1rem;
    color: #C4C4C4;
        display: flex;
        align-items: center !important;
        /* margin-top: 0.3rem; */
}


.container {
    width: 100% !important;
}

    .cancelbutton {
        margin-right:24px;
        color: #7282FB;
        width:197px;
        height: 52px;
        /* padding: 10px; */
        background: #ffffff;
        border: 2px solid #7282fb;
        border-radius: 10px;
        font-size: 25px;
}

    .savebutton {
        border: none;
        width:197px;
        height: 52px;
        background-color: #6883FB;
        color: white;
        /* padding: 10px; */
    border-radius: 10px;
        font-size: 25px;
    }
    input {
        border: none;
}

    .client-form {
        display: flex;
        align-items: center;
        width: 100% !important;
        /* border: 2px solid red; */
        flex-direction: column;
        margin-bottom: 4rem;
}

    .form-row {
        margin-bottom: 1rem;
        width: 60% !important;
        gap: 8% !important;
}

    .form {
        width: 46%;
    }
    .gender-icons{
        width: 43px;
     height: 43px;
     background: #FFFFFF;
     border: 0.5px solid #F3F3F3;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: row;
    border-radius: 50%;
    }
    .gender-icons:hover{
    cursor: pointer;
    }
    /* Style the selected radio button */
  input[type="radio"]:checked + label {
    background-color: #ccc;
    }
/*************************************media query for small devices************************************************/
    @media screen and (max-width: 733px) {
        h4 {
            margin-left: 0px !important;
            margin-bottom: 2rem !important;
    }

        .ronald {
            width: 90px !important;
            height: 90px !important;
        }

        .cancelbutton, .savebutton{
            width: 120px !important;
            height: 45px !important;
        }

        .name {
            margin-top: 0 !important;
        }
        .form-row {
        padding: 0rem !important;
        margin-bottom:0rem !important;
        width: 100% !important;
        gap:0rem !important;
}

       .form {
        width: 100%;
        margin-bottom: 1rem;
    }
       .top-btns{
        display: none !important;
       } 
    }
    /*************************media query for mediun devices************************************************/
@media screen and (min-width: 733px) and (max-width: 1200px) {
    .form-row{
        /* padding: 0rem !important; */
        width: 100% !important;
    }
    .top-btns{
        display: none !important;
       }
    .bottom-btns{
        display: block !important;
    }
}
</style>

<body>
    <div id="page">
        

        <div id="content">

            <div class="add-client-area">
                <form method="post" action="">
                    <br>
                    <div class="d-flex justify-content-between pe-3 ps-3">
                        <h4 class="heading" style="font-size: 42px;margin-left:2rem;">Edit Client Profile</h4>
<!------------------------------------------SAVE AND CANCEL BUTTONS------------------------------------------>
                        
                       <div class=" top-btns d-flex justify-content-center d-lg-block d-md-none">
                        <button class="cancelbutton">Cancel</button>
                        <button class="savebutton">Save</button>
                       </div>
                    </div> 
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center; margin-top:10px" style="margin: 2rem;">
                            <div class="" style="display:inline-block;"><img class="ronald"
                                    style="height:150px;weight:150px;border-radius:50%;" src="images/ronalduser.png"
                                    alt="">
                        </div>
                            </div>
                        <div class="client-form">
<!-------------------------------------------NAME------------------------------------------------------------------ -->
                            <div
                                class="form-row d-flex flex-row w-100 justify-content-center align-items-center">
                                <div class="w-100 form">
                                    <div class="">Name</div>
                                    <input type="text" name="name" class=" input-tag"
                                        value="<?php echo $row['name'] ?>">
                            </div>
                        </div>
<!--------------------------------------------GENDER---------------------------------------------------------------->
                              <div
                              class="form-row d-flex flex-row w-100 justify-content-start align-items-center">
                              <div class="form d-flex gap-4 align-items-center pt-1 pb-1">
                                  <div class="">Gender</div>
                                  <!-- <input type="text" name="gender" class=" input-tag"
                                      value="<?php echo $row['gender'] ?>"> -->
                                      <input type="radio" name="gender" value="male" id="male" class="d-none">
                                        <label for="male" class="gender-icons mb-0"><i class="fa fa-mars fs-3"></i></label>
                                      <input type="radio" name="gender" value="female" id="female" class="d-none">
                                         <label for="female" onclick="gender" class="gender-icons mb-0"><i class="fa fa-venus fs-3"></i></label>
                            </div>
                            </div>
<!--------------------------------------EMAIL AND PHONE NO.-------------------------------------------------------->
                            <div
                                class="form-row d-flex flex-row justify-content-center align-items-center">
                                <div class="form">
                                    <div class="">Email</div>
                                    <input type="text" name="email" class=" input-tag"
                                        value="<?php echo $row['email'] ?>">
                        </div>
                                <div class="form">
                                    <div class="">Phone No.</div>
                                    <input type="text" name="phone" class=" input-tag"
                                        value="<?php echo $row['phone'] ?>">
                            </div>
                            </div>
<!-----------------------------------------HEIGHT AND AGE----------------------------------------->
                            <div
                                class="form-row d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                                <div class="form">
                                    <div class="">Age</div>
                                    <input type="text" name="age" class="input-tag"
                                        value="<?php echo $row['age'] ?>">
                        </div>
                                <div class="form">
                                    <div class="">Height</div>
                                    <input type="text" name="height" class=" input-tag"
                                        value="<?php echo $row['height'] ?>">
                            </div>
                            </div>
<!-----------------------------------------WEIGHT AND ABOUT----------------------------------------->
                            <div
                                class="form-row d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                                <div class="form">
                                    <div class="">Weight</div>
                                    <input type="text" class="input-tag" value="<?php echo $row['weight'] ?>">
                        </div>
                                <div class="form">
                                    <div class="">About</div>
                                    <input type="text" name="about" class="input-tag"
                                        value="<?php echo $row['about'] ?>">
                                </div>
                            </div>
<!--------------------------------LOCATION AND PLAN------------------------------------------------->
                            <div
                                class="form-row d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                                <div class="form">
                                    <div class="">Location</div>
                                    <input type="text" class="input-tag" value="<?php echo $row2['location']; ?>">
                                </div>
                                <div class="form">
                                    <div class="">Plan</div>
                                    <div class="d-flex justify-content-center align-items-center ">
                                    <div class="input-tag"
                                            style="width:50% !important; margin-right:10%;">
                                            <?php echo $row1['name'] ?>
                                        </div>
                                        
                                        <a href="select_client_plan.php?client_id=<?php echo $client_id?>" class=""
                                            style="display:flex;justify-content: center;align-items: center; width:40% !important;height: 40px; background: #FFFFFF;
                                        border: 1px solid #6883FB;color: #6883FB; text-decoration: none ;
border-radius: 8px;">Select</a>
                                </div>
                            </div>
                               
                            </div>
                        </div>
<!------------------------------------------SAVE AND CANCEL BUTTONS------------------------------------------>
                        <div class="bottom-btns d-flex justify-content-center align-items-center d-lg-none d-md-block d-sm-block">
                            <div class="d-flex justify-content-center align-items-center">
                            <button class="cancelbutton">Cancel</button>
                            <button class="savebutton">Save</button>
                        </div>
                        </div>

                    </div>
                    <?php
      }?>
                </form>
            </div>
            <script>
                function gender(){
                    document.getElementById('female').style.cssText = 'background-color:red; color:white;';
                }
            </script>
</body>

</html>