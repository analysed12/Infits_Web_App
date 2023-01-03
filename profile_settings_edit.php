<?php 
 // profile settings

 session_status() === PHP_SESSION_ACTIVE ?: session_start();

 $db = mysqli_connect('localhost', 'root', '', 'infits');


  $currentUser = $_SESSION['name'];
   $query = "select * from `dietitian` where `dietitianuserID` = '$currentUser' ";
    $result = mysqli_query($db, $query); // Use curly braces to access array members inside strings
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


<style>

  body{
    font-family: 'Poppins' !important;
  }

  input/*, input[type=file]*/{
    background: #EFF8FFD9;
    border: none;
    border-radius: 4px;
    width: 100%;
    min-width: 250px;
    padding: 8px 16px;
    gap: 8px;
  }
  select{
    background: #EFF8FFD9;
    border: none;
    border-radius: 4px;
    width: 100%;
    min-width: 250px;
    padding: 8px 16px;
    gap: 8px;
  }

  input[type=sign-up]{
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
      width: 60%;
  }
  .center-flex{
      display: flex;
      align-items: center;
      justify-content: space-around;
      }

  .signup{
        border: 1px solid #EBEBEB;
        padding: 10px;
        border-radius: 5px;
        min-width: auto;
        width: 150px;
        background-color: #FFFFFF;
        text-decoration: none;
        color: black;
    }

  .float-right{
    float: right;
  }

  .flex-left, .flex-right, .flex-middle{
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }

  .flex-main{
    display: flex;
    flex-direction: row;
    justify-content: space-evenly;
    flex-wrap: wrap;
    align-content: flex-start;
  }

  .align-middle{
    margin-left: 15%;
  }

  .reset a{
    color: RoyalBlue;
  }
  .socials{
    border:none;
    background: white;
  }

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 50%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 40% !important;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
</style>

</head>

<body>
    <?php include 'event_calendar.php'; ?>


  <div id="content">	 

  <form method="post" action="" enctype="multipart/form-data">
  	
    <br>

    <div class="flex-main">

        <div class="flex-left">
        User ID <br> <input type="text" name="dietitianuserID" value="<?php echo $dietitianuserID; ?>" disabled required />
        <br>

        Name <br> <input type="text" name="Name" value="<?php echo $name; ?>" disabled required />
        <br>

        Email <br>  <input type="email" name="email" value="<?php echo $email; ?>" disabled required />
        <br>

        Mobile Number <br> <input type="text" name="mobile" value="<?php echo $mobile; ?>" required />
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
          <input type="text" name="qualification" value="<?php echo $qualification; ?>" required>
        <?php } ?>
        <br>

        Location <br> 
        <?php if (is_null($location) or $location=='') { ?>
          <input type="text" name="location" required>
          <?php } else { ?>
          <input type="text" name="location" value="<?php echo $location; ?>" required>
          <?php } ?>
        <br>

        </div>

<br><br>

        <div class="flex-middle">
        <br>

        Password: <br> <input type="password" name="password" value="<?php echo $password; ?>" disabled required />
        <a href="reset-pw.php" class='reset'><p style="align: right; color: blue; font-size: 12px;">Reset Password?</p></a>
        <br>

        Gender: <br> 
        <?php if (is_null($gender) or $gender=='') { ?>
        <select name="gender" id="gender" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
          <option value="other">Other</option>
          <option value="choosenot">Choose not to say</option>
        </select>
        <?php } else { ?>
          <input type="text" name="gender" value="<?php echo $gender; ?>" disabled required>
        <?php } ?>
        <br>

        Experience <br>
        <?php if (is_null($experience) or $experience=='') { ?>
          <input type="text" name="experience" required>
          <?php } else { ?>
            <input type="text" name="experience" value="<?php echo $experience; ?>" >
          <?php } ?>
        <br>

        Referral Code <br><input type="text" name="ref_code">
        <br>

        Age <br>
        <?php if (is_null($age) or $age=='') { ?>
          <input type="text" name="age" required>
          <?php } else { ?>
            <input type="text" name="age" value="<?php echo $age; ?>" required>
          <?php } ?>
        <br>

</div>

<div class="flex-right">
<img src=<?php echo $path;?> style="height: 100px; width: 100px; border-radius: 30%;" alt="" />  <br>
Profile Picture: 
		    <input type="file" name="my_image" style="width: 250px;" value="" required/>
        <br>

<!--   socials  -->
<button class='socials'><img src="images/WhatsApp.svg" style="height: 33px;"> &nbsp; WhatsApp</button><br>
<button class='socials'><img src="images/Twitter.svg" style="height: 33px;"> &nbsp; Twitter</button><br>
<button class='socials'><img src="images/LinkedIn.svg" style="height: 33px;"> &nbsp; LinkedIn</button><br>
<button class='socials'><img src="images/Instagram.svg" style="height: 33px;"> &nbsp; Instagram</button><br>
<button class='socials'><img src="images/Facebook.svg" style="height: 33px;"> &nbsp; Facebook</button><br>

<!-- Trigger/Open The Modal -->
<button id="myBtn" style="border:none; background:none;"><img src="images/edit.svg"></button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>

    <form method="post" action=" " enctype="multipart/form-data">
    <select name="socials" id="socials" placeholder="Platform">
          <option value="whatsapp">WhatsApp</option>
          <option value="twitter">Twitter</option>
          <option value="facebook">Facebook</option>
          <option value="linkedin">LinkedIn</option>
          <option value="instagram">Instagram</option>
      </select>
      <br>
     <input type="text" placeholder="Copy Link Here" name="link">
     <br>
     <div class="center-flex align-middle"><button type="submit" class="addBtn" name="save_socials">Save</button></div>
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

      <div class="center-flex align-middle"><button type="submit" class="addBtn" name="update">Save Changes</button></div>
      <br>
  </form>
  </div>
</body>
</html>