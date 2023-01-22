<?php 
 include "navbar.php";
    $currentUser = $_SESSION['name'];
   $query = "select * from `dietitian` where `dietitianuserID` = '$currentUser' ";
    $result = mysqli_query($conn, $query); // Use curly braces to access array members inside strings
    if($result->num_rows > 0){ 
      while($row = $result->fetch_assoc()){
        $dietitianuserID = $row['dietitianuserID'];
        $name = $row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $password = $row['password'];
        $qualification = $row['qualification'];
        $location = $row['location'];
        $experience = $row['experience'];
        $gender = $row['gender'];
        $age = $row['age'];
        $facebook = $row['facebook'];
        $whatsapp = $row['whatsapp'];
        $twitter = $row['twitter'];
        $linkedin = $row['linkedin'];
        $instagram = $row['instagram'];
        $profilePhoto = $row['profilePhoto'];

        //if (is_null($row['profilePhoto']) or $row['profilePhoto']=' ') {
         //$path = "./upload/pp.jpg";
          
      
      //} else { 

        //   $ext= explode('|',$row['profilePhoto']);
        //   $path = $ext[1] . "/" .$ext[0];
      //}
      }
    }

?>



<!DOCTYPE html>
<html>

<head>
    <title>Infits | Add Client</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <style>
    body {
        font-family: 'Poppins' !important;

    }

    input,
    input[type=file] {
        background: #FFFFFF;
        box-shadow: 0px 0.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border: none;
        width: 100%;
        min-width: 250px;
        padding: 8px 16px;
        gap: 8px;
    }

    select {
        background: #EFF8FFD9;
        border: none;
        border-radius: 4px;
        width: 100%;
        min-width: 250px;
        padding: 8px 16px;
        gap: 8px;
    }

    input[type=sign-up] {
        border: 1px solid #EBEBEB;
        color: #7282FB;
        align-items: center;
        padding: 10px 22px;
        border-radius: 10px;
        text-decoration: none;
        margin: 4px 2px;
        width: auto;
    }

    /* Shared */
    .addBtn {
        background-color: RoyalBlue;
        border: none;
        color: white;
        padding: 10px 22px;
        border-radius: 10px;
        text-decoration: none;
        margin: 5px;
        width: 600px;
    }

    .center-flex {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }

    .signup {
        border: 1px solid #EBEBEB;
        padding: 10px;
        border-radius: 5px;
        min-width: auto;
        width: 150px;
        background-color: #FFFFFF;
        text-decoration: none;
        color: black;
    }

    .float-right {
        float: right;
    }

    .flex-left,
    .flex-right,
    .flex-middle {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .flex-main {
        display: flex;
        flex-direction: row;
        justify-content: space-evenly;
        flex-wrap: wrap;
        align-content: flex-start;
    }

    .align-middle {
        margin-left: 15%;
    }

    .reset a {
        color: RoyalBlue;
    }

    .socials {
        border: none;
        background: white;
    }

    #content {

        background-image: "images/bottom_vec.svg";
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-position: right bottom;
        background-repeat: no-repeat;
        /* display: flex;
        flex-direction: column;
        height: 90%;
        font-family: 'Poppins';
        font-style: normal;
        font-weight: 500;
        font-size: 35px; */
        padding: 20px;
    }
    </style>

</head>

<body>


    <div id="content">

        <br>
        <h4 style="margin-left:20px !important;">&nbsp&nbsp Profile Settings</h4>

        <!--<div class="add-client-area">-->
        <form method="post" action="" enctype="multipart/form-data">

            <br>

            <div class="flex-main">

                <div class="flex-left">
                    User ID <br> <input name="dietitianuserID" value="<?php echo $dietitianuserID; ?>" disabled />
                    <br>

                    Name <br> <input name="Name" value="<?php echo $name; ?>" disabled />
                    <br>

                    Email <br> <input name="email" value="<?php echo $email; ?>" disabled />
                    <br>

                    Mobile Number <br> <input name="mobile" value="<?php echo $mobile; ?>" disabled />
                    <br>

                    Qualification <br>
                    <?php if (is_null($qualification) or $qualification=='') { ?>
                    <input type="text" name="qualification" value="<?php echo 'XXXXXX'; ?>" disabled>
                    <?php } else { ?>
                    <input name="qualification" value="<?php echo $qualification; ?>" disabled>
                    <?php } ?>
                    <br>

                    Password: <br> <input type="password" name="password" value="<?php echo $password; ?>" disabled />
                    <br>



                </div>

                <br><br>

                <div class="flex-middle">

                    Location <br>
                    <?php if (is_null($location) or $location=='') { ?>
                    <input type="text" name="location" value="<?php echo 'XXXXXX'; ?>" disabled>
                    <?php } else { ?>
                    <input type="text" name="location" value="<?php echo $location; ?>" disabled required>
                    <?php } ?>
                    <br>

                    Age <br>
                    <?php if (is_null($age) or $age=='') { ?>
                    <input type="text" name="experience" value="<?php echo 'XX Years'; ?>" disabled>
                    <?php } else { ?>
                    <input type="text" name="age" value="<?php echo $age; ?>" disabled required>
                    <?php } ?>
                    <br>



                    Gender: <br>
                    <?php if (is_null($gender) or $gender=='') { ?>
                    <input type="text" name="gender" value="<?php echo 'Male'; ?>" disabled>
                    <?php } else { ?>
                    <input type="text" name="gender" value="<?php echo $gender; ?>" disabled>
                    <?php } ?>
                    <br>

                    Experience <br>
                    <?php if (is_null($experience) or $experience=='') { ?>
                    <input type="text" name="experience" value="<?php echo 'XX Years'; ?>" disabled>
                    <?php } else { ?>
                    <input type="text" name="experience" value="<?php echo $experience; ?>" disabled>
                    <?php } ?>
                    <br>

                    Referral Code <br><input type="text" name="ref_code">
                    <br>

                    Achievements and Certificates <br><input type="text" name="ref_code">
                    <br>



                </div>

                <div class="flex-right">

                    <img src=<?php echo $path;?> style="height: 100px; width: 100px; border-radius: 30%;" alt="" /> <br>

                    <button class='socials'><img src="images/WhatsApp.svg" style="height: 33px;"> &nbsp; <a
                            href="<?php echo $whatsapp; ?>"
                            style="text-decoration:none; color:black;">WhatsApp</button><br>
                    <button class='socials'><img src="images/Twitter.svg" style="height: 33px;"> &nbsp; <a
                            href="<?php echo $twitter; ?>"
                            style="text-decoration:none; color:black;">Twitter</button><br>
                    <button class='socials'><img src="images/LinkedIn.svg" style="height: 33px;"> &nbsp; <a
                            href="<?php echo $linkedin; ?>"
                            style="text-decoration:none; color:black;">LinkedIn</button><br>
                    <button class='socials'><img src="images/Instagram.svg" style="height: 33px;"> &nbsp; <a
                            href="<?php echo $instagram; ?>"
                            style="text-decoration:none; color:black;">Instagram</button><br>
                    <button class='socials'><img src="images/Facebook.svg" style="height: 33px;"> &nbsp; <a
                            href="<?php echo $facebook; ?>" style="text-decoration:none; color:black;">Facebook
                    </button><br>

                </div>


                <!---------------------------SUBMIT BUTTON ----------------------------------->

                <br><br>
            </div>

            <div class="center-flex">
                <a href="profile_settings_edit.php">
                    <div class="addBtn">
                        <center>Edit Profile Details</center>
                    </div>
                </a>
                <!--link not working to move to next page-->
            </div>
            <br>
        </form>
    </div>


</body>

</html>