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
        $gender = $row['gender'];
      }
    }

//profile updation save button 
if(isset($_POST['submit']) || isset($_FILES['my_image'])) {
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

  input{
    background: #EFF8FFD9;
    border: none;
    border-radius: 4px;
    width: 100%;
    min-width: 400px;
    padding: 8px 16px;
    gap: 8px;
  }
  select{
    background: #EFF8FFD9;
    border: none;
    border-radius: 4px;
    width: 100%;
    min-width: 400px;
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

  .flex-left, .flex-right{
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
        User ID <br> <input type="text" name="dietitianuserID" value="<?php echo $dietitianuserID; ?>" disabled required />
        <br>

        Name <br> <input type="text" name="Name" value="<?php echo $name; ?>" disabled required />
        <br>

        Email <br>  <input type="email" name="email" value="<?php echo $email; ?>" disabled required />
        <br>

        Mobile Number <br> <input type="text" name="mobile" value="<?php echo $mobile; ?>" disabled required />
        <br>

        Qualification <br>
        <?php if (is_null($qualification)) { ?>
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
        <?php if (is_null($qualification)) { ?>
          <input type="text" name="location" required>
          <?php } else { ?>
          <input type="text" name="location" value="<?php echo $location; ?>" disabled required>
          <?php } ?>
        <br>

        </div>

<br><br>

        <div class="flex-right">

        Profile Picture: 

		    <input type="file" name="my_image" value="" />
        <br>

        Password: <br> <input type="password" name="password" value="<?php echo $password; ?>" disabled required />
        <p style="align: right; color: blue; font-size: 12px;">Reset Password?</p>
        <br>

        Gender: <br> 
        <?php if (is_null($gender)) { ?>
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

        Experience <br><input type="text" name="experience" required>
        <br>

        Referral Code <br><input type="text" name="ref_code">
        <br>

        Age <br><input type="text" name="age" required>
        <br>

</div>


<!---------------------------SUBMIT BUTTON ----------------------------------->
  		
      <br><br>
      </div>

      <div class="center-flex align-middle"><button type="submit" class="addBtn" name="update">Save</button></div>
      <br>
  </form>
  </div>
</body>
</html>