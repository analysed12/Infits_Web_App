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
    <title>LIVE</title>
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
body {
        font-family: 'NATS', sans-serif;
        font-weight:400;
        
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #6D6D6D;
}
    .live_personalcall{
        margin:2rem;
        margin-left:17rem;
        display:flex;
        flex-direction:column;
        gap:1.5rem;
    }
    .ronald{
        height:80%;
        width:80%;
    }
    #micon{
        background: #FF0000;
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.7rem;
        padding-right:0.7rem;
    }
    #micoff{
        background: #FFFFFF;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
        
        display:none;
    }
    #cameraon{
        background: #FF0000;
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.6rem;
        padding-right:0.6rem;

    }
    #cameraof{
        background: #FFFFFF;
        box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
        border:none;
        border-radius:50%;
        padding:0.4rem;
        padding-left:0.5rem;
        padding-right:0.5rem;
       
        display:none;
    }
    .buttons1{
        display:flex;
        gap:1.5rem;
        justify-content:left;
    }
    .bottom_buttons{
        display:flex;
        justify-content:space-between;
        width: 88%;
    }
    .leave{
       margin-right:20%;
    }
    .leave_btn{
        width: 176px;
        height: 45px;
        background: #FF0000;
        box-shadow: 0px 8px 24px rgba(176, 190, 197, 0.32), 0px 3px 5px rgba(176, 190, 197, 0.32);
        border-radius: 10px;
        border:none;
        color:white;

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
.upload{
    border:none;
    border-radius:50%;
    width: 40px;
height: 40px;
text-align:center;
padding-top:0.3rem;
    
background: #FFFFFF;
box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.25);
}
.modal{
                            position: fixed;
                            
  
                        }
                        .modal-content{
                            width: 364px;
                            height: 545px;
                            background: #FFFFFF;
                            border: 2px solid #F3F3FF;
                            border-radius: 20px;
                            margin: 100px ;
                            margin-left:950px;
                            position:relative;
                            display:flex;
                            flex-direction:column;
                            animation-duration: 2s;
                            animation-name: slidein;
                           
                        }
  @keyframes slidein {
  from {
    margin-top: 100%;
    
  }

  to {
    margin-top: 100px;
    
  }
}
.chatmsg{
    bottom:0px;
        position:absolute;
        display:flex;
       gap:1.5rem;
        padding:10px;
}
.msg{
    width: 253px;
height: 43px;
background: #F3F3F3;
border-radius: 49px;
display: flex;
align-items: center;
color: #6D6D6D;
border:none;
padding:10px;
padding-left:20px;
}
.left_arrow{
    width: 43px;
height: 43px;
background: #F3F3F3;
border-radius: 50%;
text-align:center;
padding-top:0.5rem;
}
.modal_header{
    display:flex;
    justify-content:space-between;
    padding:20px;
}
.incomingmsg{
    display:flex;
    justify-content:space-between;
    width: 321px;
    height: 56px;
    background: #FFFFFF;
    border: 1px solid #E9E9E9;
    border-radius: 39px;
    padding:10px;
    margin:20px;
    margin-top:0px;
}
.outgoingmsg{
    width: 321px;
    height: 91px;
    background: #FFFFFF;
    border: 1px solid #E9E9E9;
    border-radius: 20px;
    padding:10px;
    margin:20px;
    margin-top:0px;
}




    @media screen and (max-width: 720px){
        .popup{
            margin:10%;
            margin-top:50%;
            width:auto;
        }
        .modal-content{
            margin:10%;
            margin-top:50%;
            width:auto;
        }
        .incomingmsg{
            width:auto
        }
        .outgoingmsg{
            width:auto
        }
        .msg{
            width:auto;
        }
        .live_personalcall{
            margin-left:2rem;

        }
        .ronald{
        height:100%;
        width:100%;
    }
    .bottom_buttons{
        display:flex;
        flex-direction:column;
        gap:1.5rem;

        align-items:center;
    }
    .leave_btn{
        margin-left:4rem;
    }
    .buttons1{
        display:flex;
        gap:0.2rem;
    }
  
    
    }
    </style>
</head>
<body>
    <div class="live_personalcall">
    <div style="display:flex;gap:1rem"><img src="images/liveprofile.png" style="width: 40.91px;height: 40.91px;border-radius:50%"> <span style="font-size:30px">John Wayne</span></div>
    <div><img src="images/ronald_large.png" style="height:70%;width:70%" class="ronald"></div>

         <div class="bottom_buttons">


                <div class="buttons1">
                        <div class="firstbutton1">
                        <button  id="micon"><img src="images/micon.png" alt=""></button>
                        <button id="micoff"><img src="images/micoff.png" alt=""></button>
                        <script>
                            var x = document.getElementById("micoff");
                                var selectbtn1 = document.getElementById("micon");
                                selectbtn1.onclick = function() {
                                    
                                if (x.style.display === "block") {
                                x.style.display = "none";
                                selectbtn1.style.display="block";
                                
                            } else {
                                x.style.display = "block";
                                selectbtn1.style.display="none";
                            
                            }
                            }
                            var y = document.getElementById("micon");
                                var selectbtn2 = document.getElementById("micoff");
                                selectbtn2.onclick = function() {
                                    
                                if (y.style.display === "none") {
                                y.style.display = "block";
                                selectbtn2.style.display="none";
                                
                            } else {
                                y.style.display = "none";
                                selectbtn2.style.display="block";
                            
                            }
                            }
                                
                        </script> 
                        </div>

                        <div class="firstbutton2">
                        <button  id="cameraon"><img src="images/cameraon.png" alt=""></button>
                        <button id="cameraof"><img src="images/cameraof.png" alt=""></button>
                        <script>
                            var a = document.getElementById("cameraof");
                                var selectbtn3 = document.getElementById("cameraon");
                                selectbtn3.onclick = function() {
                                    
                                if (a.style.display === "block") {
                                a.style.display = "none";
                                selectbtn3.style.display="block";
                                
                            } else {
                                a.style.display = "block";
                                selectbtn3.style.display="none";
                            
                            }
                            }
                            var b = document.getElementById("cameraon");
                                var selectbtn4 = document.getElementById("cameraof");
                                selectbtn4.onclick = function() {
                                    
                                if (b.style.display === "none") {
                                b.style.display = "block";
                                selectbtn4.style.display="none";
                                
                            } else {
                                b.style.display = "none";
                                selectbtn4.style.display="block";
                            
                            }
                            }
                                
                        </script> 
                        </div>
                        <div class="upload"style="padding-top:0.4rem">
                        <span class="material-symbols-outlined" style="width:80%;;font-weight:500">upload</span>
                        </div>

                        <div class="upload" style="padding-top:0.5rem">
                        <span class="material-symbols-outlined" style="width:70%;font-weight:500">back_hand</span>
                        </div>
                        <button id="popup_btn"style="background:none;border:none">
                        <div class="upload" style="padding-top:0.5rem">
                       <img src="images/chat1.png" alt="" style="width:40%">
                        </div>
                        </button>
                        <div class="upload" style="padding-top:0.5rem">
                       <img src="images/contacts.png" alt="" style="width:40%">
                        </div>
                        
                        
                    
                       

                </div>


                <div class="leave">
                    <a href="#popup1" style="background-color:none;"><button class="leave_btn">Leave</button></a>
                </div>


         </div>
    </div>

<!------------------------------POPUP-------->
    <div id="popup1" class="overlay">
	<div class="popup">
        <div class="popup_msg">Sure you want to leave the call?</div>
        <div>
            <a href="live.php" style="background-color:none"><button class="end">Leave</button></a>
            <a href="live_personalcall.php" style="background-color:none"><button class="cancel">Cancel</button></a>
        </div>
		
	</div>
   </div>

   <!------------------------------POPUP-------->

   <!-----------    CHAT POPUP-------->
   <div id="myModal" class="modal">

<!--Modal content-->
<div class="modal-content" >
    <div class="modal_header">
        <h3>In-call messages</h3>
        <span class="close" style="font-size:30px;cursor:pointer">&times;</span>
    </div>

    <div class="incomingmsg">
        <div style="display:flex;gap:1rem"><img src="images/liveprofile.png" style="width: 35.91px;height: 35.91px;border-radius:50%"> <span style="font-size:20px;margin-top:0.2rem;">Hello !</span></div>
        <div style="color: #6D6D6D;font-size: 10px;padding-right:10px;display:flex;align-items:center">16:36</div>   
    </div>

    <div class="outgoingmsg">
        <span style="color: #6D6D6D;font-size: 10px">16:36</span>
        <div style="display:flex;justify-content:space-between;">
            <div> <span>Hello!</span><br> <span>Can you send me the docs!</span></div>
            <div><img src="images/liveprofile.png" style="width: 35.91px;height: 35.91px;border-radius:50%"></div>
        </div>
    </div>
    <div class="chatmsg">
        <input type="text" class="msg" placeholder="Send a message">
        <div class="left_arrow"><img src="images/left_arrow.png" alt=""></div>
    </div>
    
</div>

</div>



   <!-----------    CHAT POPUP-------->
   
   <script>
                    // Get the modal
                    var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("popup_btn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }
                    </script>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>