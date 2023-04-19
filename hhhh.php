<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    <title>LIVE CALL</title>
    <style>
                   @font-face {
    font-family: 'NATS';
    src:url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}
::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color:white;
}
body {
        font-family: 'NATS', sans-serif;
        font-weight:400;
        
    }
    .live_call{
        display:flex;
        
        

    }
    .livecall_leftside{
        margin:2rem;
        
    }
    .livecall_rightside{
        margin:2rem;
        display:flex;
        flex-direction:column;
        gap:1.5rem;
        
    }
   
    
    .btn_endlive{
        width: 176px;
        height: 45px;
        background: #FF0000;
        box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
        border-radius: 10px;
        border:none;
        color:white;
        margin-top:1rem;
        float:right;
    }
    .rightside_header{
        display:flex;
        gap:1rem;
        float:left;
        align-items: center
    }
  
    .mic_icon{
        padding:0.5rem;
        padding-left:0.7rem;
        padding-right:0.7rem;
        background: rgba(175, 175, 175, 0.4);
        border-radius: 50%;
        width: 12%;
    }
    .live{
        width: 70.8px;
        height: 30.29px;
        background: linear-gradient(90deg, #2667FF -0.43%, #D553E7 100%);
        box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
        border-radius: 46px;
        color:white;
        text-align:center;
        font-size: 16px;
        margin-top:0.3rem;
        padding-top:0.2rem;
    }
    .eye{
        width: 70px;
        height: 30.38px;
        background: #676767;
        box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
        border-radius: 46px;
        display:flex;
        color:white;
        font-size: 20px;
       padding-left:0.5rem;
       margin-top:0.25rem;
        
    }
    .cross{
        width: 41px;
        height: 41px;
        background: linear-gradient(90deg, #2667FF 10.19%, #D553E7 100%);
        color:white;
        border-radius:50%;
        font-size:30px;
       padding-left:0.9rem;   
    }
    .rightside_main{
        width: 364px;
        height: 545px;
        background: #FFFFFF;
        border: 2px solid #F3F3FF;
        border-radius: 15px;
        position:relative;
    }
    .chatbottom{
        bottom:0px;
        position:absolute;
        display:flex;
       gap:0.7rem;
        padding:10px;
    }
    .meassage_input{
        width: 80%;
        height: 36px;
        background: #C9C9C9;
        border-radius: 8px;
        color:white;
        font-size: 20px;
        border:none;
        padding:15px;
    }
    .thumb{
        width: 36px;
        height: 36px;
        background: #C9C9C9;
        backdrop-filter: blur(2.4px);
        border-radius: 50%;
        text-align:center;
        padding-top:0.2rem;
    }
    .overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    
  margin: 290px ;
  margin-left:550px;
  padding: 20px;
  position: relative;
  transition: all 5s ease-in-out;
    width: 400px;
    height: 250px;
    background: #FFFFFF;
    border: 1.74869px solid #E4E4E4;
    box-shadow: 0px 5.24607px 6.99476px rgba(0, 0, 0, 0.09);
    border-radius: 31.4764px;
    display:flex;
    flex-direction:column;
    gap:2rem;
    align-items:center;
}
.popup_msg{
    width: 257px;
height: 100px;
display: flex;
align-items: center;
text-align: center;
font-size: 40px;
}
.end{
    width: 130px;
height: 46px;
font-size: 25px;
border:none;
text-decoration:none;
color:white;
background-color: #FF0000;
border-radius: 10px;

}
.cancel{
 
width: 130px;
height: 46px;
font-size: 25px;
color:#B636DF;
background: #FFFFFF;
border: 1px solid #B636DF;
border-radius: 10px;

}

@media screen and (max-width: 720px){
    .live_call {
    flex-direction: column;
  }
  .livecall_leftside, .livecall_rightside {
    margin: 2rem 0;
  }

    .popup{
            margin:10%;
            margin-top:50%;
            width:auto;
          height:auto;
        }

    .popup_msg{
    width:auto;
height:auto;
display: flex;
align-items: center;
text-align: center;
font-size: 20px;
}
    .end{
        width:auto;
        height:auto;
        font-size: 20px;

    }
    .cancel{
        width:auto;
        height:auto;
        font-size: 20px;
    }
    .ronald{
        margin-top: 1rem; 
     margin-left: 0rem;

    }
    .livecall_rightside{
        position: relative;
    bottom: 4rem;
    }
     .rightside_header{
    justify-content: center;
      }
        .rightside_main{
            width: auto;
        }  
    .livebtn{
        display: flex;
    justify-content: center;
    }
    .mic_icon{
        width: 12%;
    }

}

@media screen and (max-width: 1200px){
   
        .live_call{
        display:flex;
        flex-direction:column;
        gap:1.5rem;
    }
    .pic_live{
        width:100%;
        height:80%;
        
    }
    }
    </style>
</head>
<body>
    <div class="live_call">
        <div class="livecall_leftside">
            <div style="display:flex;gap:1rem"><img src="images/liveprofile.png" style="width: 40.91px;height: 40.91px;border-radius:50%"> <span style="font-size:30px">John Wayne</span></div>
            <div style="margin-top:1rem" class="ronald"><img src="images/ronald.png"class="pic_live"></div>
            <a href="#popup1"><div class="livebtn"><button class="btn_endlive">End Live Video</button></div></a>

        </div>
        <div class="livecall_rightside">
            <div class="rightside_header" >
            <img  src="images/mic.png"  class="mic_icon">
                <span class="live">LIVE</span>
                <span class="eye"><img src="images/darkeye.png" style="margin-right:0.3rem;width:40%;height:50%;margin-top:0.5rem">2k</span>
                <span class="cross">x</span>
                
                
            </div>
            <div class="rightside_main">
                <div class="chatbottom">

                    <input type="text" class="meassage_input" placeholder="Message">
                    <span class="thumb"><img src="images/thumbsup.png" style="width:49%"></span>
                    <span class="thumb"><img src="images/emoji.png" style="width:70%"></span>
                    
                </div> 

            </div>
            

        </div>
        
        
    </div>

    <div id="popup1" class="overlay">
	<div class="popup">
        <div class="popup_msg">Sure you want to end live video?</div>
        <div>
            <a href="live.php" style="background-color:none"><button class="end">End</button></a>
            <a href="live_streaming.php" style="background-color:none"><button class="cancel">Cancel</button></a>
        </div>
		
	</div>
   </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>