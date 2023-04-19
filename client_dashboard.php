<?php
include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Infit</title>
    <!-- <link rel="stylesheet"  /> -->
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
</head>
<style>

body {
    /* height: 200vh; */
    overflow: auto;
    font-family: 'NATS', sans-serif !important;
}

#content {
    display: flex;
    flex-direction: column;
    /* height: 60%; */
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    padding: 20px;
    /* margin-bottom: 20px; */
    gap:25px;
}

.col {
      /* margin-right: 30px;
     margin-left: 70px; */
    width: 276px ; 
    /* margin-bottom: 20px ; */
    border-radius: 15px;
    padding: 15px;
    /* height: 200px; */
    height: 272.26px; 
    font-size:20px;
}

 i {
    font-size: 100px;
    margin-top: 20px;
    margin-bottom: 20px; 
}

a {
    text-decoration: none ;
}
 .box{
    position: relative;
    /* margin-bottom: 10px; */
    width:85%;
    /* height:150px; */
    padding:10px 27px ;
    margin-left: 10%;
    margin-right: 17%;
    margin-bottom: 8px;
    /* padding-bottom: 10px; */




    /* margin-bottom: 1%; */
    /* top: 60%; */
   /* margin-top: 70%;
   margin-bottom: 20%; */
   background: #FFF0D3;
   box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.15);
   border-radius: 5px;
} 
.box p{
    /* position: absolute; */
    /* width: 806px; */
    /* height: 61px; */
    /* left: 450px; 
    top: 800px; */
   /* left: 120px;
   top: 100rem; */
   /* margin-top: 5rem; */
   margin-left:25px;
   margin-bottom:18px;


   font-family: 'Julius Sans One';
   font-style: normal;
   font-weight: 400;
   font-size: 35px;
   line-height: 153.5%;
   padding-left: 40px;
   padding-right: 20px;


   display: flex;
   align-items: center;
   text-align: center;

color: #000000;
}
/* .box img{
    width: 110%;
    margin-left: auto;
    margin-right: auto;
   
} 
.box img{
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-direction: column;
    width: 30px; */
/* }  */
.image{
    float: left;
    width:100%;
    height:auto;
    /* padding-top: 20px;
    padding-right: 20px;
    padding-left: 20px; */

}
.image img:nth-of-type(2) {
    float: right;
}
.row{
    display: flex;
    flex-wrap:wrap;
    gap:55px 80px;
    margin-left:70px;
}






@media screen and (min-width: 300px) and (max-width: 600px) {
    #content{
        margin: auto;
        width:100%;
        flex-direction: column;
    }
    .box{
        margin-left: 0;
}
}
/* @media screen and (min-width: 300px) and (max-width: 600px) {
    .col{
         display: flex;
        flex-direction: column;
        margin-left: auto;
        margin-right: 2rem;
        width: 100%;
    }


} */
@media screen and (min-width: 300px) and (max-width: 600px) {
   .box{
        display: flex;
        flex-direction: column;
        width: 100%;
        height: auto;
        top: auto;
   }
   .box img{
    width: 10%;
    margin:1rem;
    height:40%;
    /* margin-left: auto; */
    margin-right: auto;
   }
   .box p{
     font-size:2rem;
     width: 100%;
     margin: auto;
   }
}
@media screen and (min-width: 300px) and (max-width: 673px) {
     /* .row img{
        margin-left: auto;
        width: 40%;
        height: auto;

    } */
    .box{
        margin-left: 0;
    }
    .box p{
        margin-left:-10px;
    }
   /* .row p{
        align-items: center;
        margin-left: auto;
        font-size: 20px;
        /* margin-right: 3rem; */

    }  */




</style>

<body>
    <div id="content">
        <?php
        // $client_id=$_SESSION['client_id'];
        $client_id = $_GET['client_id'];
        $sql = "SELECT name FROM addclient where client_id = $client_id";
        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $name = $row['name'];
        ?>
        <h4>Client Dashboard for "<span style="text-transform:uppercase;font-weight:bold"><?php echo $name ?></span>"</h4>
        <br>
        <div class="row row-cols-2 row-cols-lg-3"  ;>

            <div class="col " style="border: 1px solid #FFA381;color: #FFA381;text-align:center; justify-content: center;margin-left: -77px;">
                <?php echo '<a style="color:#FFA381" href="client_profile.php?client_id='.$client_id.'">' ?>
                <div class="topbar" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -37px;
    height: 100%;
">
                <div>
                Personal Info
                </div>  
                <div>
                <img src="images/User copy.png" style="width:60%;" alt="">
                </div> 
                <div>
                Name,Plan,etc
                </div>
              </div>
                <!-- <div class="row">
                        <p style="text-align:center ;">Personal Info</p>
                    </div>
                    <div class="row"><img src="images/User copy.png" style="width:80%;" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Name,Plan,etc</p>
                    </div> -->
                </a>
            </div>

            <div class="col " style="border: 1px solid #9C74F5;
        color: #9C74F5;text-align:center;">
                <?php echo '<a style="color: #9C74F5;" href="nameofpage.php?client_id='.$client_id.'">' ?>
                <div class="topbar" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -37px;
    height: 100%;
">
                <div>
                Diet Chart
                </div>  
                <div>
                <img src="images/Clipboard.png" style="width:60%;" alt="">
                </div> 
                <div>
                Plan your diet
                </div>
</div>
                    <!-- <div class="row">
                        <p style="text-align:center ; ">Diet Chart</p>
                    </div>
                    <div class="row"><img src="images/Clipboard.png"  alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Plan your diet</p>
                    </div> -->
                </a>
            </div>

            <div class="col " style="border: 1px solid #E375B3;
        color: #E375B3;text-align:center;">
                <?php echo '<a style="color: #E375B3;" href="nameofpage.php?client_id='.$client_id.'">' ?>
                <div class="topbar" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -37px;
    height: 100%;
">
                <div>
                Metrics
                </div>  
                <div>
                <img src="images/Combo Chart.png" style="width:60%;" alt="">
                </div> 
                <div>
                Check progress
               </div>
</div>
                    <!-- <div class="row">
                        <p style="text-align:center !important;">Metrics</p>
                    </div>
                    <div class="row"><img src="images/Combo Chart.png" style="width:80%;" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Check progress</p>
                    </div> -->
                </a>
            </div>



            <div class="col " style="border: 1px solid #76A5FF;
        color: #76A5FF;text-align:center;">
                <?php echo '<a style="color:#76A5FF;" href="mealTracker.php?client_id='.$client_id.'">' ?>
                <div class="topbar" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -37px;
    height: 100%;
">
                <div>
                Tracker
                </div>  
                <div>
                <svg width="147" height="120" viewBox="0 0 147 120" fill="none" style="margin-left:27px;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<rect width="84.2262" height="80" transform="matrix(0.736649 -0.676275 0.734578 0.678525 26 60.1094)" fill="url(#pattern0)"/>
<rect width="117.426" height="120" fill="url(#pattern1)"/>
<defs>
<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image0_6309_25929" transform="matrix(0.01 0 0 0.0105283 0 -0.00667779)"/>
</pattern>
<pattern id="pattern1" patternContentUnits="objectBoundingBox" width="1" height="1">
<use xlink:href="#image1_6309_25929" transform="matrix(0.0102192 0 0 0.01 -0.183061 0)"/>
</pattern>
<image id="image0_6309_25929" width="100" height="100" xlink:href="data:image/png;base64,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"/>
<image id="image1_6309_25929" width="100" height="100" xlink:href="data:image/png;base64,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"/>
</defs>
</svg>

                <!-- <img src="images/Cutlery.png" style="width:60%;" alt=""> -->
                </div> 
                <div>
                Track Meal
               </div>
</div>
                    <!-- <div class="row">
                        <p style="text-align:center !important; ">Tracker</p>
                    </div>
                    <div class="row"><img src="images/Cutlery.png" style="width:80%;" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Track Meal</p>
                    </div> -->
                </a>
            </div>

            <div class="col " style="border: 1px solid #1FB688;
        color: #1FB688;text-align:center;">
                <?php echo '<a style="color: #1FB688;" href="nameofpage.php?client_id='.$client_id.'">' ?>
                <div class="topbar" style="
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-top: -37px;
    height: 100%;
">
                <div>
                Health Details
                </div>  
                <div>
                <img src="images/Health Report.png" style="width:60%;" alt="">
                </div> 
                <div>
                Form,Document
               </div>  
            </div> 
                <!-- <div class="row">
                        <p style="text-align:center ;">Health Details</p>
                    </div>
                    <div class="row"><img src="images/Health Report.png" style="width:80%;" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Form,Document</p>
                    </div> -->
                </a>
            </div>
            <div class="col " style="border: 1px solid #FFA381;
        color: #FFA381;text-align:center;">
                <?php echo '<a style="color: #FFA381;" href="nameofpage.php?client_id='.$client_id.'">' ?>
        <div class="topbar" style="display: flex;flex-direction: column;justify-content: space-between;margin-top: -37px;height: 100%;">
                <div>
                Chats
                </div>  
                <div>
                <img src="images/Chat Bubble.png" style="width:60%;" alt="">
                </div> 
                <div>
                Chat with ...
               </div>
        </div>  
                    <!-- <div class="row">
                        <p style="text-align:center !important; ">Chats</p>
                    </div>
                    <div class="row"><img src="images/Chat Bubble.png" style="width:80%;" alt=""></div>
                    <div class="row">
                        <p style="text-align:center;">Chat with ...</p>
                    </div> -->
                </a>
            </div>



        </div>
        <div class="box">
        <!-- <img  src="Group 10044.png">
     -->
     <div class="image">
        <img src="images/Vector (3) (1).png" style= " padding: 10 90px; ">
        <img src="images/Vector (4) (1).png" style= " padding: 90 0px; ">
     </div>

        <p>NEVER GIVE UP ! GREAT THINGS TAKE TIME. </p>
</div>
    </div>
</body>

</html>