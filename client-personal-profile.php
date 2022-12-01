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
	  <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	  <link rel="stylesheet" type="text/css" href="./styles/event_calendar.css">
	  <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
  </head>
  <body>
		<?php 
        
            // $clientuserID = $_POST['clientuserID'];
            $clientuserID = "Azarudeen";
            // $dietitianID = $_POST['dietitianID'];
            $dietitianID = "Rahul";
            $stmnt = $conn -> prepare("SELECT * FROM client,diet_chart where client.clientuserID = ? and diet_chart.dietitianuserID = ?");
            
            $stmnt-> bind_param("ss",$clientuserID,$dietitianID);
            $stmnt-> execute();
            $stmnt-> bind_result($clientuserID,$password,$name,$location,$email,$mobile,$plancl,$profilePhoto,$dietitianID,$gender,$age,$verification,$height,$weight,$dietitianID,$clientID,$dun,$mon,$tue,$wed,$thur,$fri,$sat);
            
        
            $stmnt2 = $conn2 -> prepare("select  clientID FROM diet_chart where diet_chart.dietitianuserID = ?");
            
            $stmnt2-> bind_param("s",$dietitianID);
            $stmnt2-> execute();
            $stmnt2-> bind_result($clientID);
        
            $products = array();
            
            $plan = "null";
        
            $dietChartClient = array();
        
            while ($stmnt2 -> fetch()) {
                array_push($dietChartClient,$clientID);
            }
        
            // print_r($dietChartClient);
        
            while($stmnt->fetch()){
        
                // echo $clientID." <br> ".$clientuserID;
        
              $temp = array();
              
                  $imageName = "$clientuserID.jpg";
                 $image = 'upload/'.$imageName;
                $type = pathinfo($image, PATHINFO_EXTENSION);
                $data = file_get_contents($image);
        
              $temp['clientuserID']= $clientuserID;
              $temp['password']= $password;
              $temp['name']= $name;
              $temp['location']= $location;
              $temp['email']= $email;
              $temp['location']= $location;
              $temp['email']= $email;
              $temp['mobile']= $mobile;
              $temp['age']= $age;
              if(in_array($clientuserID,$dietChartClient)){
                $plan = "Diet Chart";
            }
            else if(!in_array($clientuserID,$dietChartClient)){
            $plan = "null";
            }
              $temp['plan']= $plan;
              $temp['profilePhoto']= base64_encode($data);
              $temp['gender']= $gender;
              $temp['dietitianID']= $dietitianID;
              $temp['height'] = $height;
              $temp['weight'] = $weight;
              
              array_push($products,$temp);
            }
            // echo json_encode($products);
        ?>
		<?php include 'event_calendar.php';?>
        <div class="form-body">
            <img src="images/profile_pic.svg" style="width: 300; height: 300;">
            <span>Ronald Richards</span>
            <p>25 years old</p>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Gender</p>
                </div>
                <span><?php echo $gender ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Weight</p>
                </div>
                <span><?php echo $weight ?> kg</span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>BMI</p>
                </div>
                <span>20.2</span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Height</p>
                </div>
                <span><?php echo $height ?> feet</span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Phone No</p>
                </div>
                <span><?php echo $mobile ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Email Id</p>
                </div>
                <span><?php echo $weight ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Subscribed Plan</p>
                </div>
                <span><?php echo $plan ?></span>
                
            </div>
            <div class="profile-box">
                <div class="attribute-box">
                    <div class="attribute-dot"></div>
                    <p>Duration</p>
                </div>
                <span><?php echo $weight ?> months</span>
                
            </div>
        
            
         

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>