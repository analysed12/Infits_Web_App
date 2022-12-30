<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
.search_box{
    background: #FFFFFF;
border: 1px solid #E1E1E1;
border-radius: 10px;
width:300px;
height: 40px;
z-index=-1;
padding-left:40px;
}
.top_bar{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: center;
   margin: 20px;
   padding: 5px;
}
.top_bar span{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 40px;
line-height: 24px;
/* or 50% */
margin-left: 20px;
display: flex;
align-items: center;
line
color: #000000;
margin-bottom:7px;
}
.search_bar img{
    margin-right: -40px;
    z-index: 0;
    position: relative;
}
.plans_section{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;    
   /* margin-left: -40px;     */
   padding: 3px;
}
.plan_card{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    width: 472px;
/* height: 318px; */
    background: #FFFFFF;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
border-radius: 20px;
margin: 20px;
}
.plan_card_top{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
    width: 460px;
    
    padding: 10px;
    margin:20px;
}
.pc_first{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
}
.pc_first img{
    width: 126px;
height: 133px;
}
.price_duration{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 5px;
    margin-left: 20px;
}
.plan_text{
    margin: 5px;
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 22px;
line-height: 31px;
/* identical to box height, or 140% */


color: #000000;

}
.plan_name{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 28px;
line-height: 59px;
display: flex;
align-items: flex-end;
letter-spacing: 1px;
text-transform: capitalize;

color: #000000;

}
.pc_third_header{
    display: flex;
    flex-direction: row;
    align-items: left;
    justify-content: center;
    font-family: 'NATS';
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 18px;
line-height: 38px;
/* identical to box height */

display: flex;
align-items: flex-end;
letter-spacing: 1px;
text-transform: capitalize;

color: #000000;

}
.pc_third{
    display: flex;
    flex-direction: column;
    align-items: left;
    justify-content: center;
  

}
.diet_description{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    font-family: 'NATS';
}
.diet_button{
    background: #7282FB;
border-radius: 10px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 24px;
/* identical to box height, or 120% */

display: flex;
align-items: center;
text-align: right;
letter-spacing: 0.44px;
padding : 5px;
/* White Base */
height: 40px;
color: #FFFFFF;
margin: 10px;
padding-left: 20px;
padding-right: 20px;
}
.pc_second{
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 16px;
line-height: 14px;
/* or 88% */

text-align: justify;

color: #919191;
}
.features_section{
    display: flex;
    flex-wrap: wrap;
    width: 460px;
    /* padding: 10px; */
    /* margin:10px;   */
}
.features img{
    margin-right:3px;
}
.features{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    /* padding: 5px; */
    font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 17px;
line-height: 36px;
/* identical to box height */

margin: 4px;

letter-spacing: 1px;
text-transform: capitalize;

color: #000000;

}

.options img{
    width: 24px;
height: 24px;
margin-top:-90px;
}
.add_button{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    padding: 5px;
    background: #9C74F5;
border-radius: 50%;
width: 60px;
height: 60px;
font-size: 50px;
color: #FFFFFF;
padding-bottom: 13px;
margin: 10px;
margin-top: -20px;
margin-left: -20px;
margin-right: 20px;
}
.add_btn_sec{

    display: flex;
    flex-direction: row;
    align-items: right;
    justify-content: flex-end;
   padding : 10px;
}
.dlt_popup{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    margin-top:10px;
    background: #FFFFFF;
border: 0.707105px solid #E4E4E4;
box-shadow: 0px 2.12132px 2.82842px rgba(0, 0, 0, 0.09);
border-radius: 12.7279px;
width: 173px;
height: 153px;
z-index: 1;
margin-left: -110px;
margin-top: -70px;

}
.edit_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;

    background: #A85CF1;
border-radius: 10.6364px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21.2727px;
line-height: 75%;
color: #FFFFFF;
width: 84.76px;
height: 36.16px;
margin: 10px;
}
.dlt_btn{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    
    background: #FF3D3D;
border-radius: 10.6364px;
font-family: 'NATS';
font-style: normal;
font-weight: 400;
font-size: 21.2727px;
line-height: 75%;
color: #FFFFFF;
width: 84.76px;
height: 36.16px;
margin: 10px;
}
</style>
<body>
     <!-- Navbar Start -->
     <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->
    <div id="content">
        <div class="top_bar">
            <span>My Plans</span>
            <div class="search_bar">
                <img src="images/search.svg" alt="">
                <input class="search_box" type="text" placeholder="  Search Plan">
            </div>
        </div>
        <div class="plans_section">
        <?php for ($i=0; $i <4 ; $i++) { 
            # code...
        ?>
         <div class="plan_card">
            <div class="plan_card_top">
                <div class="pc_first">
                    
                    <img src="images/fruit_salad.svg" alt="">
                    <div class="name">
                        <div class="plan_name">
                            Healty Diet
                        </div>

                        <div class="price_duration">
                            <div class="plan_text">₹ 199/month</div>
                            <div class="plan_text">2 Months</div>
                        </div>
                        <div class="diet_description">
                            <div class="diet_button">
                                Keto
                            </div>
                            <div class="diet_button">
                                Vegan
                            </div>
                        </div>
                    </div>
                    <div class="options">
                        <img src="images/options.svg" alt="">
                        <div class="dlt_popup">
                        <div class="edit_btn">
                            Edit
                        </div>
                        <div class="dlt_btn">
                            Delete
                        </div>
                    </div>
                    </div>
                   
                </div>
                <div class="pc_second">
                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam dolorum magni culpa at cupiditate cum molestiae ex corrupti accusamus unde! Dignissimos reiciendis rem soluta id cum similique quia ab quod!</p>
                </div>
                <div class="pc_third">
                    <div class="pc_third_header">
                        FEATURES
                    </div>
                    <div class="features_section">
                        <?php for ($j=0; $j < 4; $j++) { 
                            # code...
                        ?>
                        <div class="features">
                            <img src="images/tick.svg" alt="">
                            <span>lorem epsum</span>
                        </div>
                        <?php
                        }?>
                    </div>
                </div>
            </div>
           
         </div>
        <?php
        }?>
        
        </div>
        <div class="add_btn_sec">
            <div class="add_button">
                +
            </div>
        </div>
        
    </div>
</body>
</html>