<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<style>
.plan_container{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
 
}
.text{
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 35px;
line-height: 24px;
/* identical to box height, or 50% */

margin-top: 30px;
margin-left: 60px !important;

color: #000000;
}
.plan_name{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
   padding: 40px;
}
.plan_text{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 30px;
line-height: 88%;
/* identical to box height, or 31px */



color: #000000;
    margin-right: 20px;
}
.plan_btns{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 5px;
    /* padding-right: 20px; */
    margin-right:20px;
    width: 400px;
}
.plan_btn_add{
   width:40px;
   display: flex;
    align-items: center;
    justify-content: center;
}
.plan_btn{
    color:#FFFFFF;
background: #7282FB;
border-radius: 10px;
height: 40px;
padding-top:15px;
padding-bottom:15px;
padding-left: 5px;
padding-right: 5px;
margin-right: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21px;
line-height: 24px;
/* identical to box height, or 104% */

display: flex;
align-items: center;
text-align: right;
letter-spacing: 0.44px;
}
.header{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 25px;
line-height: 16px;
/* identical to box height, or 64% */
margin: 20px;
letter-spacing: 1.5px;
text-transform: capitalize;
/* margin-left: -350px; */
width: 400px;
color: #1D1E20;
    
}
.features_main{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 20px;
    width: 430px;
}
.features_left{
    display: flex;
    flex-wrap: wrap;
    flex-direction: row;
    
    width:360px;
}
.features_right{
    display: flex;
    flex-direction: column;
    align-items: center;

}
.features_box{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    padding: 6px;
    height:50px;
    width: 170px;
    background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
margin: 5px;
}
.ip_box{
    background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
border:none;
width: 400px;
padding: 10px;
}
.price{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: left;
    margin: 10px;
height:50px;
    width: 400px;
    padding:15px;
background: #FFFFFF;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
}
.bottom_btns{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    margin: 10px;
    width: 400px;
    padding:15px;
}
.cancel_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 173px;
height: 52px;
background: #FFFFFF;
border: 2px solid #7282FB;
border-radius: 10px;
}
.save_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    width: 173px;
height: 52px;
color: #FFFFFF;
background: #7282FB;
border: 2px solid #7282FB;
border-radius: 10px;
}

.add_pop_tags{
    width: 224px;
height: 161px;
background: #FFFFFF;
border-radius: 7px;
box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
}
</style>
<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->
    <div id="content">
        <div class="text">
            <p>Create Plan</p>
        </div>
        <div class="plan_container">
            <img src="images/create_edit_plan.svg" alt="">
        
        <div class="plan_name">
            <div class="plan_text">
                <span>Plan Name</span>
            </div>
            <img src="images/pen_icon_dark.svg" alt="">
        </div>
            <div class="header">
                Tags
            </div>

            <div class="plan_btns">
            <!-- <div class="add_pop_tags">

            </div> -->
            <div class="plan_btn">
                    Keto Diet
            </div>
            <div class="plan_btn">
                    Vegan Diet
            </div>
            <div class="plan_btn">
                    Diet Chart
            </div>
            <div class="plan_btn_add plan_btn ">
                    +
            </div>
            </div>

            <div class="header">
                Plan Duration
            </div>
            <div class="plan_inputs">
                <div >
                    <input class="ip_box" type="date" placeholder="    MM/DD/YYYY">
                </div>
            </div>
            <div class="header">
                Description
            </div>
            <div class="plan_inputs">
                <div >
                    <input class="ip_box" type="text" placeholder="Description">
                </div>
            </div>
            <div class="header">
                Features
            </div>
            <div class="features_main">
                <div class="features_left">
                    <div class="features_box">
                        Feature1
                    </div>
                    <div class="features_box">
                        Feature1
                    </div>
                    <div class="features_box">
                        Feature1
                    </div>
                    <div class="features_box">
                        Feature1
                    </div>
                </div>
                <div class="features_right">
                        <div class="plan_btn_add plan_btn ">
                            +
                        </div>
                </div>
            </div>
            <div class="header">
                Price
            </div>
            <div class="price">
                200/month
            </div>
            <div class="bottom_btns">
                <div class="cancel_btn">
                    Cancel
                </div>
                <div class="save_btn">
                    Save
                </div>
            </div>
        </div>
    </div>
</body>
</html>