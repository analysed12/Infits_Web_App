<?php  include('config.php');?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Sidebar 03</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="css/Recipies.css">
		<link rel="stylesheet" href="css/mobiscroll.javascript.min.css">
		<script src="js/mobiscroll.javascript.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <title>Client Personal Profile</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="./styles/event_calendar.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
  </head>
  <body>
		<?php 
           // $clientuserID =$_SESSION['clientuserID'];
                   //Session variable for client Id
             $clientuserID = "Azarudeen";
              $sql = "select * from `client` where `clientuserID` = '{$clientuserID}'";
              $result = $conn -> query($sql);
              if($result ->num_rows > 0)
              {
                while($row = $result -> fetch_assoc())
                {?>

		<?php include 'navbar.php';?>
        <div class="form-body">
            <img src="images/profile_pic.svg" style="width: 300; height: 300;">
            <span> <?php echo $row['name']; ?> </span>
            <p><?php echo $row['age'];?> years old</p>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Gender</p>
                </div>
                <span><?php echo $row['gender']; ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Weight</p>
                </div>
                <span><?php echo $row['weight']; ?> kg</span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>BMI</p>
                </div>
                <span>?php ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Height</p>
                </div>
                <span><?php echo $row['height']; ?> feet</span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Phone No</p>
                </div>
                <span><?php echo $row['mobile']; ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Email Id</p>
                </div>
                <span><?php echo $row['email']; ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Subscribed Plan</p>
                </div>
                <span><?php echo $row['plan']; }}?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Duration</p>
                </div>
                <?php 
                $sql1 = "select `duration` from `createplan` , `client` where `createplan`.`name` = `client`.`plan`";
                $result1 = $conn -> query($sql1);
                if($result1 ->num_rows >0)
                {
                    while($row1 = $result1 -> fetch_assoc()){?>

                
                <span>  <?php echo $row1['duration']; }} ?> months</span>
                
            </div>
        
            
         

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>