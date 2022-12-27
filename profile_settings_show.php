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

  input, input[type=file]{
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
  #content{
    
    background-image: "images/bottom_vec.svg";
    background-repeat: no-repeat;
  background-attachment: fixed;
    background-position: right bottom;
    background-repeat: no-repeat;
  }
  

</style>

</head>

<body>
    <?php include 'event_calendar.php'; ?>


  <div id="content">	 

  <!--<div class="add-client-area">-->
  <form method="post" action="profile_settings.php" enctype="multipart/form-data">
  	
    <br>

    <div class="flex-main">

        <div class="flex-left">
        User ID <br> <input name="dietitianuserID" value="<?php echo $dietitianuserID; ?>" disabled  />
        <br>

        Name <br> <input name="Name" value="<?php echo $name; ?>" disabled  />
        <br>

        Email <br>  <input  name="email" value="<?php echo $email; ?>" disabled  />
        <br>

        Mobile Number <br> <input name="mobile" value="<?php echo $mobile; ?>" disabled  />
        <br>

        Qualification <br><br>
        <?php if (is_null($qualification) or $qualification=='') { ?>
          <input type="text" name="qualification" value="<?php echo 'XXXXXX'; ?>" disabled >
        <?php } else { ?>
          <input  name="qualification" value="<?php echo $qualification; ?>" disabled >
        <?php } ?>
        <br>

        <br>

        Location <br> 
        <?php if (is_null($location) or $location=='') { ?>
          <input type="text" name="location" value="<?php echo 'XXXXXX'; ?>" disabled >
          <?php } else { ?>
          <input type="text" name="location" value="<?php echo $location; ?>" disabled required>
          <?php } ?>
        <br>

        </div>

<br><br>

        <div class="flex-middle">

        Profile Picture: 
		    <input type="file" name="my_image" style="width: 250px;" value="" required/>
        <br>

        Password: <br> <input type="password" name="password" value="<?php echo $password; ?>" disabled />
        <a href="reset-pw.php" class='reset'><p style="align: right; color: blue; font-size: 12px;">Reset Password?</p></a>
        <br>

        Gender: <br> 
        <?php if (is_null($gender) or $gender=='') { ?>
          <input type="text" name="gender" value="<?php echo 'Male'; ?>" disabled >
        <?php } else { ?>
          <input type="text" name="gender" value="<?php echo $gender; ?>" disabled >
        <?php } ?>
        <br>

        Experience <br>
        <?php if (is_null($experience) or $experience=='') { ?>
          <input type="text" name="experience" value="<?php echo 'XX Years'; ?>" disabled >
          <?php } else { ?>
            <input type="text" name="experience" value="<?php echo $experience; ?>" >
          <?php } ?>
        <br>

        Referral Code <br><input type="text" name="ref_code">
        <br>

        Age <br>
        <?php if (is_null($age) or $age=='') { ?>
          <input type="text" name="experience" value="<?php echo 'XX Years'; ?>" disabled >
          <?php } else { ?>
            <input type="text" name="age" value="<?php echo $age; ?>" disabled required>
          <?php } ?>
        <br>

</div>

<div class="flex-right">

  <img src=<?php echo $path;?> style="height: 100px; width: 100px; border-radius: 30%;" alt="" />  <br>

  <button class='socials'><img src="images/WhatsApp.svg" style="height: 33px;"> &nbsp; WhatsApp</button><br>
  <button class='socials'><img src="images/Twitter.svg" style="height: 33px;"> &nbsp; Twitter</button><br>
  <button class='socials'><img src="images/LinkedIn.svg" style="height: 33px;"> &nbsp; LinkedIn</button><br>
  <button class='socials'><img src="images/Instagram.svg" style="height: 33px;"> &nbsp; Instagram</button><br>
  <button class='socials'><img src="images/Facebook.svg" style="height: 33px;"> &nbsp; Facebook</button><br>

</div>


<!---------------------------SUBMIT BUTTON ----------------------------------->
  		
      <br><br>
      </div>

      <div class="center-flex align-middle"><button class="addBtn" a href="profile_settings_edit.php">Make Changes</button></div>
      <br>
  </form>
  </div>


</body>
</html>