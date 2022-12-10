<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.header{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 48px;
line-height: 24px;
/* identical to box height, or 50% */

display: flex;
align-items: center;

color: #000000;
margin: 20px;
margin-left: 40px;
}
.main_container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  
}
.content{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 33px;
line-height: 111.34%;
/* identical to box height, or 37px */


color: #000000;
margin:30px;
}

.create_plan_btn{
    background: #0177FD;
border-radius: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 29px;
line-height: 61px;
text-align: center;

color: #FFFFFF;
padding-left: 30px;
padding-right: 30px;
}
</style>
<body>
      <!-- Navbar Start -->
     <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->
    <div id="content">
           <div class="header">
             Diet Plan
           </div>
            <div class="main_container">
                <img src="images/no_plans.svg" alt="">
                <div class="content">
                    You haven't created any plans yet !
                </div>
                <div class="create_plan_btn">
                    Create plan
                </div>
            </div>
    </div>
</body>
</html>