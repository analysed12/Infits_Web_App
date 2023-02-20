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

        if (is_null($row['profilePhoto']) or $row['profilePhoto']=' ') {
          $path = "./upload/pp.jpg";
          
      
      } else { 

          $ext= explode('|',$row['profilePhoto']);
          $path = $ext[1] . "/" .$ext[0];
      }
      }
    }

//profile updation save button 
if(isset($_POST['update']) || isset($_FILES['my_image'])) {
  // receive all input values from the form
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $ref_code = mysqli_real_escape_string($db, $_POST['ref_code']);
  $age = mysqli_real_escape_string($db, $_POST['age']);


  $img_name= $_FILES['my_image']['name'];
  $img_size = $_FILES['my_image']['size'];
  $tmp_name = $_FILES['my_image']['tmp_name'];
    $error =$_FILES['my_image']['error'];
     $file_type= $_FILES['my_image']['type'];
   if($error === 0)
   {
      if($img_size > 209712)
      {
            echo("file too large");

       }
       else
      {
               $img_ex=pathinfo($img_name, PATHINFO_EXTENSION);
              $img_ex_lc=strtolower($img_ex);
             $allowed_ex = array("jpg","png");

               if(in_array($img_ex_lc, $allowed_ex))
              {
                 $new_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = "./images/" .$new_name;
   
                move_uploaded_file($tmp_name,$img_upload_path );  
                $imageandpath="$new_name|$img_upload_path";


  //updating to db
  $query = "UPDATE dietitian SET qualification = '$qualification',
              location = '$location',
              gender = '$gender',
              experience = '$experience',
              age = '$age',
              profilePhoto = '$imageandpath'
              where `dietitianuserID` = '$currentUser'";
    mysqli_query($db, $query);

  	$_SESSION['success'] = "Information Updated";
    header('location: profile_settings_show.php');
              }
            }
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
   @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
  opacity: 1; /* Firefox */
}


body {
    font-family: 'NATS', sans-serif;
    font-weight:400;
    padding-bottom:2rem;
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

   

    .center-flex {
        display: flex;
        margin-left:20.3rem;
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
        align-items: left;
        justify-content: top;
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
        margin-left: 5%;
    }

    .reset a {
        color: RoyalBlue;
    }

    .socials {
        border: none;
        background: none;
    }

  
    .sharebutton{
        width: 342px;
    height: 48px;
    background: #FFFFFF;
    border: 2px solid #0177FD;
    border-radius: 10px;
    padding-top:0.5rem;
        font-size: 20px;
        underline:none;
        margin-left:5.5rem;
    }
    .sharebutton:hover{
      background-color:whit;
      background:white;
    }

   


    .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    
  margin: 290px ;
  margin-left:550px;
  padding: 20px;
  background: #fff;
  border-radius: 5px;
  width: 25%;
  position: relative;
  transition: all 5s ease-in-out;
  box-shadow: 0px 0px 34.0377px rgba(0, 0, 0, 0.25);
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
  background:none;
  border:none;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
  /* Shared */
  .addBtn {
        width: 342px;
        height: 48px;
        background: #0177FD;
        border-radius: 10px;
        color:white;
        padding-top:0.5rem;
        font-size: 20px;
    }
    .addBtn:hover{
        background-color:none;
    }
    .modal{
                            position: fixed;
                            width:100%;
                            height:100%;
                            background: rgba(0, 0, 0, 0.6);
                            transition: opacity 500ms;
                            align-items:center;
  
                        }
                        .modal-content{
                            width:400px;
                            height:250px;
                            padding:20px;
                            border-radius:20px;
                            margin: 200px ;
                            margin-left:550px;
                            overflow:hidden;
                            
                        }
                         /* Shared */
                        .addBtn1 {
                            border:none;
                            background: #8C68F8;
                            border-radius: 10px;
                            color:white;
                            padding:0.5rem;
                            padding-left:2.5rem;
                            padding-right:2rem;
                            font-size: 20px;
                        }
                        .addBtn1:hover{
                            background-color:none;
                        }
                        .discard{
                            border: 2px solid #8C68F8; 
                            background: white;
                            border-radius: 10px;
                            padding:0.5rem;
                            padding-left:2.5rem;
                            padding-right:2.5rem;
                            font-size: 20px;
                        }

    @media screen and (max-width: 720px) {
        .popup{
            margin:30%;
            margin-top:50%;
            width:40%;
        }
        .heading{
            margin-left:2rem !important;
        }
        .leftinput{
            width:auto !important;
        }
        .flex-left{
            margin-left:2rem;
        }
        .flex-middle{
            margin-left:2rem;
        }
        .flex-main_wrapper{
            display:flex;
            flex-direction:column;
            gap:0 !important;
        }
        .flex-main{
            display:flex;
            flex-direction:column;
        }
        .user{
            margin-left:6rem !important;
        }
        .star{
            margin-left:7.5rem !important;
        }
        .center-flex {
        display: flex;
        flex-direction:column;
        gap:1rem;
        margin-left:2.3rem;
    }
    .addBtn{
        width:auto;
        margin-right:2rem;
    }
    .sharebutton{
        width:auto;
        margin-left:0;
        margin-right:2rem;
    }
    .image1{
        margin-left:10rem !important;
    }
    .chooseimage{
        margin-left:6rem !important;
    }
    .text{
        margin-left:6rem !important;
    }
    }

    </style>

</head>

<body>
  <div id="content">
        <br>
        <h4 class="heading" style="margin-left:20rem; font-size:40px"> Profile Settings</h4>

        <form method="post" action="" enctype="multipart/form-data">

            <br>

            <div class="flex-main">

                <div style="display:flex; gap:3rem;margin-left:2rem;" class="flex-main_wrapper">
                <div class="flex-left" style="font-size:18px">
                    User ID <br> <input type="text" name="dietitianuserID" value="<?php echo $dietitianuserID;  ?>"
                        disabled required style="width: 342px;color: #AEAEAE;" />
                    <br>

                    Name <br> <input type="text" name="Name" value="<?php echo $name; ?>" disabled required style="color: #AEAEAE;" />
                    <br>

                    Email <br> <input type="email" name="email" value="<?php echo $email; ?>" disabled required style="color: #AEAEAE;"/>
                    <br>

                    Mobile Number <br> <input type="text" name="mobile" value="<?php echo $mobile; ?>" required style="color: #AEAEAE;"/>
                    <br>

                    Qualification <br>
                    <?php if (is_null($qualification) or $qualification=='') { ?>
                    <select name="qualification" id="qualification" required>
                        <option value="bachelors">Bachelors</option>
                        <option value="masters">Masters</option>
                        <option value="highschool">High School</option>
                        <option value="phd">PhD</option>
                    </select>
                    <?php } else { ?>
                    <input type="text" name="qualification" value="<?php echo $qualification; ?>" required style="color: #AEAEAE;">
                    <?php } ?>
                    <br>

                    Password: <br> <input type="password" name="password" value="<?php echo $password; ?>" disabled
                        required style="color: #AEAEAE;"/>
                    <a href="reset-pw.php" class='reset' style="display:flex;justify-content:space-between;padding-left:3rem;padding-right:3rem">
                        <p style=" color: blue; font-size: 12px;">Change Password</p>
                        <p style=" color: blue; font-size: 12px">Forgot Password</p>
                    </a>
                    <br>


                </div>

                <br><br>

                <div class="flex-middle" style="font-size:18px;font-weight:400">

                    Location <br>
                    <?php if (is_null($location) or $location=='') { ?>
                    <input type="text" name="location" required style="width: 342px;" class="leftinput" style="color: #AEAEAE;">
                    <?php } else { ?>
                    <input type="text" name="location" value="<?php echo $location; ?>" required style="width: 342px;" class="leftinput" style="color: #AEAEAE;">
                    <?php } ?>
                    <br>

                    Age <br>
                    <?php if (is_null($age) or $age=='') { ?>
                    <input type="text" name="age" required class="leftinput" style="color: #AEAEAE;">
                    <?php } else { ?>
                    <input type="text" name="age" value="<?php echo $age; ?>" required class="leftinput" style="color: #AEAEAE;">
                    <?php } ?>
                    <br>

                    Gender: <br>
                    <?php if (is_null($gender) or $gender=='') { ?>
                    <select name="gender" id="gender" required class="leftinput">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                        <option value="choosenot">Choose not to say</option>
                    </select>
                    <?php } else { ?>
                    <input type="text" name="gender" value="<?php echo $gender; ?>" disabled required class="leftinput" style="color: #AEAEAE;">
                    <?php } ?>
                    <br>

                    Experience <br>
                    <?php if (is_null($experience) or $experience=='') { ?>
                    <input type="text" name="experience" required class="leftinput" style="color: #AEAEAE;">
                    <?php } else { ?>
                    <input type="text" name="experience" value="<?php echo $experience; ?>" class="leftinput" style="color: #AEAEAE;">
                    <?php } ?>
                    <br>

                    
                    Referral Code <br><input type="text" name="ref_code" class="leftinput">
                    <br>

                    Achievements and Certificates <br><input type="text" name="ref_code" class="leftinput">
                    <br>


                </div>

                </div>
                    <div class="flex-right">
                    <img class="image1" src=<?php echo $path;?> style="height: 100px; width: 100px; border-radius: 30%;margin-left:4rem" alt="" /> <br>
                    <span class="text"'>Profile Picture:</span>
                    <input class="chooseimage"type="file" name="my_image" style="width: 250px;" value="" required />
                    <br>

                    <!--   socials  -->
                    <button class='socials'><img src="images/WhatsApp.svg" style="height: 33px;"> &nbsp;
                        WhatsApp</button><br>
                    <button class='socials'><img src="images/Twitter.svg" style="height: 33px;"> &nbsp;
                        Twitter</button><br>
                    <button class='socials'><img src="images/LinkedIn.svg" style="height: 33px;"> &nbsp;
                        LinkedIn</button><br>
                    <button class='socials'><img src="images/Instagram.svg" style="height: 33px;"> &nbsp;
                        Instagram</button><br>
                    <button class='socials'><img src="images/Facebook.svg" style="height: 33px;"> &nbsp;
                        Facebook</button><br>

                    <!-- Trigger/Open The Modal -->
                    <button id="myBtn" style="border:none; background:none;"><img src="images/edit.svg"></button>

                    <!-- The Modal -->
                    <div id="myModal" class="modal">

                        <!--Modal content-->
                        <div class="modal-content" >
                            <span class="close">&times;</span>

                            <form method="post" action=" " enctype="multipart/form-data">
                                <select name="socials" id="socials" placeholder="Platform" style="background-color:white;box-shadow: 0px 1.76208px 5.28625px rgba(0, 0, 0, 0.25);border-radius: 8.81041px;margin-right:1rem; color: #BBBBBB;">
                                    <option value="whatsapp">WhatsApp</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="linkedin">LinkedIn</option>
                                    <option value="instagram">Instagram</option>
                                </select>
                                <br>
                                <input type="text" placeholder="Copy Link Here" name="link">
                                <br>
                                <div style="display:flex;justify-content:space-evenly">
                                    <button type="submit" class="addBtn1" name="save_socials">Save Changes</button>
                                    <button class="discard">Discard</button>
                                    
                                    </div>
                        </div>

                    </div>
                    
                    <?php
//profile updation save button 
if(isset($_POST['save_socials']) ) {
  // receive all input values from the form
  $socials = mysqli_real_escape_string($db, $_POST['socials']);
  $link = mysqli_real_escape_string($db, $_POST['link']);

  if ($socials == 'whatsapp'){
  $query = "UPDATE dietitian SET whatsapp = '$link' where `dietitianuserID` = '$currentUser'";
    mysqli_query($db, $query);
  }

  if ($socials == 'twitter'){
    $query = "UPDATE dietitian SET twitter = '$link' where `dietitianuserID` = '$currentUser'";
      mysqli_query($db, $query);
  }

  if ($socials == 'linkedin'){
    $query = "UPDATE dietitian SET linkedin = '$link' where `dietitianuserID` = '$currentUser'";
      mysqli_query($db, $query);
    }

  if ($socials == 'facebook'){
    $query = "UPDATE dietitian SET facebook = '$link' where `dietitianuserID` = '$currentUser'";
      mysqli_query($db, $query);
    }

  if ($socials == 'instagram'){
    $query = "UPDATE dietitian SET instagram = '$link' where `dietitianuserID` = '$currentUser'";
      mysqli_query($db, $query);
    }
}
?>

                    <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        event.preventDefault(); //keeps page from refreshing
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>

                </div>



                <!---------------------------SUBMIT BUTTON ----------------------------------->

                <br><br>
            </div>

            <div class="center-flex"> <br> <br>
                <a id="addBtn" href="profile_settings_edit.php">
                    <div class="addBtn">
                        <center>Confirm Changes</center>
                    </div>
                </a>

                <a id="sharebutton" href="#popup1"  >
                    <div class="sharebutton">
                        <center >Share Profile</center>
                    </div>
                </a>
                <!--link not working to move to next page-->
            </div>
        </form>
    </div>




    <!-------------------------------------POPUPS-------------------------------------------------->
    <div id="popup1" class="overlay">
	<div class="popup">
		<h5 style="margin-left:1.5rem">Share Via <img src="images/shareeee.png" style="margin-left:0.5rem;width:4%"></h2>
		<a class="close" href="#">&times;</a>
		<div class="content" style="display:flex;gap:1rem;margin-left:1rem">
			<img src="images/WhatsApp.png" >
            <img src="images/Twitter.png" >
            <img src="images/Facebook.png" >
            <img src="images/LinkedIn_Circled.png" >
            <img src="images/Instagram.png" >
		</div>
	</div>
   
</body>

</html>