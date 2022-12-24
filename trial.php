<?php 
 // profile settings
 session_start();
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

      }
    }

//profile updation save button 
if (isset($_POST['update'])) {
  // receive all input values from the form
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
  $location = mysqli_real_escape_string($db, $_POST['location']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $experience = mysqli_real_escape_string($db, $_POST['experience']);
  $ref_code = mysqli_real_escape_string($db, $_POST['ref_code']);
  $age = mysqli_real_escape_string($db, $_POST['age']);
  $profilePhoto = mysqli_real_escape_string($db, $_POST['profilePhoto']);

  //profile pic
  $imageName = "$dietitianuserID.jpg";
  $image = 'upload/'.$imageName;
   $type = pathinfo($image, PATHINFO_EXTENSION);
   $data = file_get_contents($image);
   $profilePhoto= base64_encode($data);

  


  //updating to db
  $query = "UPDATE dietitian SET qualification = '$qualification',
              location = '$location',
              gender = '$gender',
              experience = '$experience',
              age = '$age',
              profilePhoto = $profilePhoto'
              where `dietitianuserID` = '$currentUser'";
    mysqli_query($db, $query);

  	$_SESSION['success'] = "Information Updated";
  

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
  <form method="post" action="profile_settings.php">
  	
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

        Qualification <br> <input type="text" name="qualification" required />
        <br>

        Location <br> <input type="text" name="location" required>
        <br>

        </div>

<br><br>

        <div class="flex-right">

        Profile Picture: 
		    <input type="file" name="profilePhoto" value="" />
        <br>

        Gender: <br> <input type="text" name="gender" required>
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
      
  </form>
  </div>
</body>
</html>