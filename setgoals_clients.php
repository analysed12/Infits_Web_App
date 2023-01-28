<?php
include('navbar.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">


<style>
@font-face {
    font-family: 'NATS';
    src:url('NATS.ttf.woff') format('woff'),
        url('NATS.ttf.svg#NATS') format('svg'),
        url('NATS.ttf.eot'),
        url('NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

body{
    overflow-x: hidden;
    font-family: 'NATS', sans-serif;
}
.setgoals{
    margin-top: 1rem;
    margin-left: 17rem;
}
.generalgoals{
    display: flex;
    gap: 2rem;
    
    padding-left: 2rem;
}
.tooltip-text {
    visibility: hidden;
    position: absolute;
    z-index: 1;
    width: 22rem;
    color: black;
    font-size: 14px;
    border: 1px solid  #e4e1e1;
    box-shadow: 0 4px 4px rgba(0,0,0,0.12);
    border-radius: 10px;
    padding: 0.4rem;
  }
  
  .hover-text:hover .tooltip-text {
    visibility: visible;
  }
  #right {
    top: -8px;
    left: 120%;
  }
  
  .hover-text {
    position: relative;
    display: inline-block;
    margin: 40px;
    font-family: Avenir;
    text-align: center;
  }
  .setgoals_contaner1{
    margin-left: 4rem;
    margin-right: 4rem;
    padding-bottom: 2rem;
    border-bottom: 2px solid #EFEFEF;
  }
  .setgoals_button{
    color: white;
    height: 8rem;
    width: 7rem;
    background: linear-gradient(208.27deg, rgba(255, 108, 108, 0.792) 43.71%, rgba(255, 92, 0, 0.416) 95.3%);
    border: 1.31579px solid #FF6666;
    box-shadow: 0px 1.81819px 13.6364px rgba(0, 0, 0, 0.25);
    border-radius: 19.7368px;

  
  }
  #button3{
    background: linear-gradient(217.35deg, #F97EAA 0%, #C389D5 100%) !important;
    border: 1.31579px solid #E266A9 !important;
    
  }
  #button5{
    background: linear-gradient(212.32deg, #633FDD 0%, #AB83F0 93.37%) !important;
    border: 1.31578px solid #7D5DE6 !important;
  }
  #button7{
    background: linear-gradient(38.98deg, #768B93 7.65%, #8FC4C3 87.93%) !important;
border: 1.31578px solid #267E7B !important;
  }
  #button9{
    background: linear-gradient(216.13deg, #5CA7F8 9.2%, #ABB3F0 91.57%) !important;
    border: 1.31579px solid #3A97FF !important;
  }
  #button11{
    background: linear-gradient(37.35deg, #E2809B 0%, #EBD3C8 100%) !important;
border: 1.31578px solid #E3738D !important;
  }
  .setgoals_popup2{
    width: 330px;
    height: 360px;
    background: #FFFFFF;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    padding-left: 2rem;
    padding-right: 2rem;
    display: none;
    background: url('images/Vector1.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-position: bottom right ;
    
  
    
  }
  .block1{
    display: flex;
    gap: 5rem;
  }
  .block2{
    display: flex;
    gap: 5rem;
  }
  .firstbutton{
    display: flex;
  }

  #close {
    color: #100e0e;
    float: right;
    font-size: 35px;
    font-weight: bold;
  }
  #close2{
    color: #90AEF4;
    font-size: 1.2rem;
    margin-left: 1.5rem;
  }
  #close2:hover,
  #close2:focus {
    
    cursor: pointer;
  }
  
  #close:hover,
  #close:focus {
    color: rgb(111, 108, 108);
    text-decoration: none;
    cursor: pointer;
  }
  #label1{
    margin-left: 2.5rem;
    width: 184px;
    height: 40px;
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    color: #ABA3A3;
    padding: 0.5rem;
    text-align: center;
  }
  .setbutton{
    width: 124px;
    height: 45px;
    background: linear-gradient(262.45deg, #FA8686 9.26%, #F1A680 93.19%);
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.28);
    border-radius: 10px;
    border: none;
    color: white;
    margin-left: 4rem;
    margin-top: 0.5rem;
    box-sizing: border-box;
  }
  #button4{
    background: linear-gradient(264.28deg, #D483C6 1.62%, #F37FAF 93.12%) !important;

  }
  #button6{
    background: linear-gradient(263.28deg, #AB84F0 0%, #9FB0F2 0.01%, #633FDD 93.31%) !important;
  }
  #button8{
    background: linear-gradient(263.28deg, #8EC2C1 0%, #8CBFBE 0.01%, #788F97 93.31%) !important;
  }
  #button10{
    background: linear-gradient(263.28deg, #FA8686 0%, #9FB0F2 0.01%, #5CA7F8 93.31%) !important;
  }
  #button12{
    background: linear-gradient(263.28deg, #E69BAF 0%, #E69EB0 0.01%, #E07498 93.31%) !important;
  }
  .container1_wrapper1{
    display: flex;
    gap: 5rem;
  }
  .container1_wrapper2{
    display: flex;
    gap: 5rem;
    margin-top: 2rem;
  }
  .leftside_wrapper1{
    width: 620px;
    height: 118px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    background: #FFFFFF;
    border-radius: 15px;
    margin-left: 2.8rem;
    background: url('images/Vector1.png');
    background-repeat: no-repeat;
    background-attachment:scroll;
    background-position: bottom right ;
  }
  #image1{
    margin-top: 2.2rem;
    margin-left: 2rem;
  }
  .leftside_wrapper1{
    display: flex;
    gap: 2rem;
    font-weight: 500;
    font-size: 1.2rem;
    
  }
  #label2{
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    padding: 0.3rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    color: #DDDDDD;
    margin-top: 0.8rem;

  }
  #label3{
    background: #FFFFFF;
    border: 1px solid #DFDFDF;
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.08);
    border-radius: 10px;
    padding: 0.3rem;
    padding-left: 1.5rem;
    padding-right: 1.5rem;
    color: #DDDDDD;
    margin-top: 0.5rem;
    margin-left: 1rem !important;
    text-align: center;

  }
  .userimage{
  border-radius: 15px;
  border: none;
  width: 45px;
height: 45px;
margin-top: 2.5rem;

  }
  .userimage2{
    box-shadow: 0px 1.7079px 4.26974px rgba(0, 0, 0, 0.25);
    border-radius: 8.53948px;
    margin-top: 1rem;
    border: none;
    width: 45px;
  height: 45px;
  
    }
    .userimage3{
      border-radius: 15px;
      border: none;
      width: 45px;
    height: 45px;
    margin-top: 1rem;
    
      }
  .pastreminders_leftside{
    display: flex;
    flex-direction: column;
    gap: 3rem;
  }

  .pastreminders{
    display: flex;
    gap: 3rem;
  }
.rightside_wrapper1{
    width: 347px;
    height: auto;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 15px;
    padding-top: 2rem;
    display: flex;
    flex-direction: column;
    gap: 0.7rem;
    
    
}

#rightside_wrapper1{
    display: none;
}
#rightside_wrapper2{
    display: none;
}
#rightside_wrapper3{
    display: none;
}
#rightside_wrapper4{
    display: none;
}
#rightside_wrapper5{
    display: none;
}
#rightside_wrapper6{
    display: none;
}

.searchclient{
    width: 233px;
    height: 45px;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    margin-top: 1rem;
    margin-left: 1rem;
    padding: 0.4rem;
    font-size: 1.4rem;
}
.bluetext{
    color: #90AEF4;
    font-size: 1.2rem;
    display: flex;
    flex-direction: row;
    padding: 0.5rem;
    align-items: center;
    width: auto;
    height: 35.8px;
    background: #EFF4FF;
    border-radius: 8px;
}
#clientscheck{
    border: 1.84977px solid #7282FB;
    border-radius: 7.3991px;
    color:  #7282FB;
    margin-left: 1rem;
}
#checklabel{
    font-size:1.3rem;
    color: #7282FB ;
    font-weight: 400;
    margin-left: 1rem;
}
.checkbox{
    overflow-y: scroll;
    margin-top: 1rem;
    padding-bottom: 1rem;
}
#vector1{
    position:absolute;  
    left: 515px;
    top: 259.08px;
    background: linear-gradient(180.84deg, #F3F3FF 45.23%, rgba(243, 243, 255, 0.29) 96.71%, #F2F2FF 96.71%);
    transform: rotate(-121.89deg);
}
.mobview_pastgoals{
  display: none;
}
.mobview_wrapper1{
  width: 272px;
  height: 300px;
  background: #FFFFFF;
  border-radius: 15px;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
  margin-left: 2rem;
  padding: 1rem;
  background: url('images/Vector 1.png');
  background-repeat: no-repeat;
  background-attachment: scroll;
  background-position: bottom left;
}


  
  @media screen and (max-width: 720px) {
    .setgoals{
        margin-left: 1rem;
    }
    .tooltip-text{
        width: auto;
    }
    .container1_wrapper1{
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .setgoals_contaner1{
        margin-left: 1rem;
      }
      .setgoals_popup2{
        left: 25px;
        top: 307.5px;
        position: absolute;
      }
      .pastreminders_leftside{
        display: none;
      }
      .pastreminders{
        display: flex;
        flex-direction: column;
        gap: 1rem;
      }
      .mobview_pastgoals{
        display: flex;
        flex-direction: column;
        gap: 2rem;
      }
      .rightside_wrapper1{
        display: flex;
        left: 35px;
        top: 307.5px;
      }
      .pastreminders_rightside{
        left: 35px;
        top: 307.5px;

      }
      #mobside_wrapper1{
        display: none;
      }
      #mobside_wrapper2{
        display: none;
      }
      #mobside_wrapper3{
        display: none;
      }
      #mobside_wrapper4{
        display: none;
      }
      #mobside_wrapper5{
        display: none;
      }
      #mobside_wrapper6{
        display: none;
      }
     
      

  }
  
</style>
</head>
<body>

    <div class="setgoals">
        <p style="font-size:2rem; font-weight:400">Set Goals For Clients</p>
        <div class="generalgoals"><div style="font-size:1.5rem; font-weight:400">General Goals</div>
            <div class="hover-text"style="margin-top:0.3rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">Set default daily fitness for all the clients from here!</span></div> 
        </div>

        <div class="setgoals_contaner1">
            <div class="container1_wrapper1">
                <div class="block1">
                    <div class="firstbutton">
                        <button class="setgoals_button" id="button1">
                        <img src="images/white1.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.1rem">
                        <span style=" margin-top:1.3rem;margin-left:0.3rem ;font-size:1.4rem">Steps</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals1">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Set Goal</span>
                                <span class="close" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Steps</span> <br>
                            <img src="images/setgoals.jpg" style="margin-left:4rem"><br>
                            <label id="label1">0000 Steps</label>
                            <button id="button2" class="setbutton">Set</button>  
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button3">
                        <img src="images/white2.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.4rem">
                        <span style=" margin-top:1.3rem;margin-left:0.5rem ;font-size:1.4rem">Heart Rate</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals2">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Heart Rate Goal</span>
                                <span class="close2" id="close">&times;</span>
                            </div>
                            <span style="color:#FF8B8B">Daily Heart Rate</span> <br>
                            <img src="images/heartrate.jpg" style="margin-left:3.8rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button4" class="setbutton">Set</button>  
                        </div>
                        

                    </div>


                    
                </div>

                <div class="block2">
                   <div class="firstbutton">
                        <button class="setgoals_button" id="button5">
                        <img src="images/white3.png" style="font-size:2.8rem;font-weight:500; margin-top:0.4rem;margin-left:0.4rem">
                        <span style=" margin-top:2rem;margin-left:0.5rem ;font-size:1.4rem">Sleep</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals3">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Sleep Goal</span>
                                <span class="close3" id="close">&times;</span>
                            </div>
                            <span style="color: #633FDD;">Daily Sleep Hours</span> <br>
                            <img src="images/sleep.jpg" style="margin-left:3.5rem"><br>
                            <label id="label1">0000 Hours</label>
                            <button id="button6" class="setbutton">Set</button>  
                        </div>
                        

                    </div>

                    <div class="firstbutton">
                        <button class="setgoals_button" id="button7">
                        <img src="images/white6.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Weight</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals4">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Weight Goal</span>
                                <span class="close4" id="close">&times;</span>
                            </div>
                            <span style="color: #788F97">Daily Weight Count</span> <br>
                            <img src="images/weight.jpg" style="margin-left:3.5rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button8" class="setbutton">Set</button>  
                        </div>
                        

                    </div>
                    
                </div>
                
            </div>

            <div class="container1_wrapper2">
                 <div class="firstbutton">
                        <button class="setgoals_button" id="button9">
                        <img src="images/white5.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.9rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Water</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals5">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Water Intake Goal</span>
                                <span class="close5" id="close">&times;</span>
                            </div>
                            <span style="color: #5CA7F8">Daily Water Consumption</span> <br>
                            <img src="images/water.jpg" style="margin-left:4rem"><br>
                            <label id="label1">0000 litres</label>
                            <button id="button10" class="setbutton">Set</button>  
                        </div>
                        

                 </div>

                 <div class="firstbutton">
                        <button class="setgoals_button" id="button11">
                        <img src="images/white4.png" style="font-size:2.8rem;font-weight:500; margin-top:0.5rem;margin-left:0.3rem">
                        <span style=" margin-top:1rem;margin-left:0.5rem ;font-size:1.4rem">Calories</span>   
                        </button>

                        
                        <div class="setgoals_popup2" id="setgoals6">
                            <div style="justify-content:space-between;display:flex;margin-top:0.5rem">
                                <span style="font-size:1.4rem; font-weight:400;margin-top:0.5rem">Calorie Goal</span>
                                <span class="close6" id="close">&times;</span>
                            </div>
                            <span style="color:  #E48FA7">Daily Calorie Count</span> <br>
                            <img src="images/calorie.jpg" style="margin-left:3rem"><br>
                            <label id="label1">0000 BPM</label>
                            <button id="button12" class="setbutton">Set</button>  
                        </div>
                        

                    </div>
                
            </div>
            
        </div>


        <div class="generalgoals"><div style="font-size:1.5rem; font-weight:400;margin-top:1rem">Past Goals</div>
            <div class="hover-text"style="margin-top:1.2rem" ><span class="material-symbols-outlined" style="color:#9C74F5">error</span>
            <span class="tooltip-text" id="right">View all the goals already set for the clients from here!!</span></div> 
        </div>

<!-------------------------------------------------------PAST GOALS START   ----------------------------------------------------------->

        <div class="pastreminders">
            <div class="pastreminders_leftside">

            <!---------------------------------------------------------------------------------------------->
                <div class="leftside_wrapper1">
                    
                    <div><img src="images/Frame.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#FFA578">Step Goals</span>
                        <span style="color:#FF8B8B">Daily Steps</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;margin-left:3.6rem ;font-size:1.2rem; font-weight:400">
                        <span >No. of steps</span>
                        <label id="label2">00000 Steps</label>
                    </div>
                    <button class="userimage" style="background-color: #F3A181 ; position:static;margin-left:0.5rem" id="userimage1"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #F3A181;position:static"><img src="images/right.png" ></button>
                    
                    
                    
                </div>


                 <!---------------------------------------------------------------------------------------------->
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-1.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#E882B8">Heart Rate Goal</span>
                        <span style="color:#FF8B8B">Daily Heart Rate</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400;margin-left:1.5rem">
                        <span >Beats per minute</span>
                        <label id="label2">00000 BPM</label>
                    </div>
                    <button class="userimage" style="background-color: #DA83C3;margin-left:0.7rem" id="userimage2"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #DA83C3;"><img src="images/right.png" ></button>
                    
                </div>



                 <!---------------------------------------------------------------------------------------------->
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-2.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#68A9F7">Water Goal</span>
                        <span style="color:#FF8B8B">Daily Water Intake</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem ;font-size:1.2rem; font-weight:400;margin-left:0.7rem">
                        <span >Quantity</span>
                        <label id="label2">00000 litres</label>
                    </div>
                    <button class="userimage" style="background-color: #68A9F7;margin-left:0.5rem" id="userimage3"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #68A9F7;"><img src="images/right.png" ></button>
                    
                </div>



                 <!---------------------------------------------------------------------------------------------->
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-3.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#805AE5">Sleep Goal</span>
                        <span style="color:#FF8B8B">Daily Sleep Duration</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400">
                        <span >Sleep time</span>
                        <label id="label2">00000 hours</label>
                    </div>
                    <button class="userimage" style="background-color: #805AE5;" id="userimage4"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #805AE5;"><img src="images/right.png" ></button>
                    
                </div>



                 <!---------------------------------------------------------------------------------------------->
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-4.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#7F9FA4">Weight Goal</span>
                        <span style="color:#FF8B8B">Daily Weight Count</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem;font-size:1.2rem; font-weight:400;margin-left:0.5rem">
                        <span >Weight Count</span>
                        <label id="label2">00000 kg</label>
                    </div>
                    <button class="userimage" style="background-color: #7F9FA4;position:static;margin-left:1.3rem" id="userimage5"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #7F9FA4;position:static"><img src="images/right.png" ></button>
                    
                </div>



                 <!---------------------------------------------------------------------------------------------->
                 <div class="leftside_wrapper1">
                    <div><img src="images/Frame-5.png" id="image1"></div>
                    <div style="display:flex;flex-direction:column; margin-top:2rem">
                        <span style="color:#E39F9A">Calorie Goal</span>
                        <span style="color:#FF8B8B">Daily Calorie Count</span>
                    </div>
                    <div style="display:flex;flex-direction:column; margin-top:1.2rem ;font-size:1.2rem; font-weight:400;margin-left:0.7rem">
                        <span >Calorie Count</span>
                        <label id="label2">00000 kcal</label>
                    </div>
                    <button class="userimage" style="background-color: #E39F9A;margin-left:0.5rem" id="userimage6"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage" style="background-color: #E39F9A;"><img src="images/right.png" ></button>
                    
                </div>




                
            </div>






<!--------------------------------------MOB View OF past GOALS BUTTONS-------------------------------------------------------->


            <div class="mobview_pastgoals">
<!----------------------------------------------------------------------------------------------------------------------->        
               <div style="display:flex; flex-direction:column;gap:1rem">
               <div class="mobview_wrapper1">
                    <div style="margin-left:3rem;margin-top:0.8rem"><img src="images/Frame.png" style="width:2rem"><span style="color:#FFA578 ; font-size:1.5rem;margin-left:0.5rem">Step Goals</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:4.5rem">Daily Steps</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:4rem ">No. of steps</span>
                        <label id="label3">00000 Steps</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #F3A181 ; position:static;margin-left:4.2rem" id="mob_userimage1"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #F3A181;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>


                <!------------------------------------------1 wrapper-------------------------------------------------->
            <div class="rightside_wrapper1" id="mobside_wrapper1">
                <div style="text-align:center"><img src="images/Frame.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Step Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #FFB38E"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>



               </div>



<!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->        
                 <div class="mobview_wrapper1">
                    <div style="margin-left:2rem;margin-top:0.8rem"><img src="images/Frame-1.png" style="width:2rem"><span style="color:#E882B8 ; font-size:1.5rem;margin-left:0.5rem">Heart Rate Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:4rem">Daily Heart Rate</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:3.8rem ">Beats per min</span>
                        <label id="label3">00000 BPM</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #E882B8 ; position:static;margin-left:4.2rem" id="mob_userimage2"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #E882B8;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>


                <!-------------------------------------------------2 wrapper------------------------------------------->
             <div class="rightside_wrapper1" id="mobside_wrapper2">
                <div style="text-align:center"><img src="images/Frame-1.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Heart Rate Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #E882B8"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>







    <!------------------------------------------------------------------------------------------------------------------------------------------->        
                <div class="mobview_wrapper1">
                    <div style="margin-left:2.4rem;margin-top:0.8rem"><img src="images/Frame-2.png" style="width:2rem"><span style="color:#68A9F7 ; font-size:1.5rem;margin-left:0.5rem">Water Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:3.4rem">Daily Water Intake</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:3.8rem ">Quantity</span>
                        <label id="label3">00000 litres</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #68A9F7 ; position:static;margin-left:4.2rem" id="mob_userimage3"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #68A9F7;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>



                <!-------------------------------------------------3 wrapper------------------------------------------->
            <div class="rightside_wrapper1" id="mobside_wrapper3">
                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Water Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                    
                </div>
            </div>





<!---------------------------------------------------------------------------------------------------------------------------------------------------------------->        
                <div class="mobview_wrapper1">
                    <div style="margin-left:2.4rem;margin-top:0.8rem"><img src="images/Frame-3.png" style="width:2rem"><span style="color:#805AE5 ; font-size:1.5rem;margin-left:0.5rem">Sleep Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:2.8rem">Daily Sleep Duration</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:3.8rem ">Sleep time</span>
                        <label id="label3">00000 hours</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #805AE5 ; position:static;margin-left:4.2rem" id="mob_userimage4"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #805AE5;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>


                 <!--------------------------------------------------4 wrapper------------------------------------------>
            <div class="rightside_wrapper1" id="mobside_wrapper4">
                <div style="text-align:center"><img src="images/Frame-3.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Sleep Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #805AE5"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>


    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->        
                 <div class="mobview_wrapper1">
                    <div style="margin-left:2.4rem;margin-top:0.8rem"><img src="images/Frame-4.png" style="width:2rem"><span style="color:#7F9FA4 ; font-size:1.5rem;margin-left:0.5rem">Weight Goal</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:2.8rem">Daily Weight Count</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:3.8rem ">Weight Count</span>
                        <label id="label3">00000 KG</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #7F9FA4 ; position:static;margin-left:4.2rem" id="mob_userimage5"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #7F9FA4;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>




                <!-----------------------------------------------5 wrapper--------------------------------------------->
             <div class="rightside_wrapper1" id="mobside_wrapper5">
                <div style="text-align:center"><img src="images/Frame-4.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Weight Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #7F9FA4"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                

                    
                </div>
            </div>





    <!--------------------------------------------------------------------------------------------------------------------------------------------------------------------->        
                 <div class="mobview_wrapper1">
                    <div style="margin-left:2.4rem;margin-top:0.8rem"><img src="images/Frame-5.png" style="width:2rem"><span style="color:#E39F9A ; font-size:1.5rem;margin-left:0.5rem">Calorie Count</span></div>  
                    <span style="color:#FF8B8B; font-size:1.3rem; margin-left:3rem">Daily Calorie Count</span>
                    <div style="display:flex;flex-direction:column;font-size:1.5rem; font-weight:400;margin-top:1rem">
                        <span style="font-weight:600;margin-left:3.8rem ">Calorie Count</span>
                        <label id="label3">00000 kcal</label>
                    </div> 
                    
                    <button class="userimage3" style="background-color: #E39F9A ; position:static;margin-left:4.2rem" id="mob_userimage6"><img src="images/mdi_user-circle-outline.png" ></button>
                    <button class="userimage3" style="background-color: #E39F9A;position:static ; margin-left:0.5rem"><img src="images/right.png" ></button>
                </div>

<!-----------------------------------------------------------------------WRAPPER 6------------------------------------------>

                <div class="rightside_wrapper1" id="mobside_wrapper6">
                <div style="text-align:center"><img src="images/Frame-5.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Calorie Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #E39F9A"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                

                    
                </div>
            </div>



                
                




            </div>




     <!-------------------------------------------------------------------MOB VIEW CODE ENDS----------------------------------------------------------------------------------------------------------------->       


<!----------------------------------------------------rightside past goals popup div code starts----------------------------------------------------------------------->

            <div class="pastreminders_rightside">

            <!------------------------------------------1 wrapper-------------------------------------------------->
            <div class="rightside_wrapper1" id="rightside_wrapper1">
                <div style="text-align:center"><img src="images/Frame.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Step Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #FFB38E"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>






             <!-------------------------------------------------2 wrapper------------------------------------------->
             <div class="rightside_wrapper1" id="rightside_wrapper2">
                <div style="text-align:center"><img src="images/Frame-1.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Heart Rate Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #E882B8"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>






            <!--------------------------------------------------3 wrapper------------------------------------------>
            <div class="rightside_wrapper1" id="rightside_wrapper3">
                <div style="text-align:center"><img src="images/Frame-3.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Sleep Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #805AE5"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                

                    
                </div>
            </div>




            <!-------------------------------------------------4 wrapper------------------------------------------->
            <div class="rightside_wrapper1" id="rightside_wrapper4">
                <div style="text-align:center"><img src="images/Frame-2.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Water Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #68A9F7"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                
                    
                </div>
            </div>






             <!-----------------------------------------------5 wrapper--------------------------------------------->
             <div class="rightside_wrapper1" id="rightside_wrapper5">
                <div style="text-align:center"><img src="images/Frame-4.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Weight Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #7F9FA4"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                

                    
                </div>
            </div>







            <!-----------------------------------------------6 wrapper--------------------------------------------->
            <div class="rightside_wrapper1" id="rightside_wrapper6">
                <div style="text-align:center"><img src="images/Frame-5.png" style="width:2.2rem" ><span style="font-size:2rem;margin-left:1rem">Calorie Goal</span></div>
                <span style="font-size:1.7rem; margin-left:2.1rem">Select clients to assign goal</span>
                <div style="display:flex; gap:1rem">
                    <div class="searchclient">
                    <img src="images/greyglass.png">
                    <span style="color:#ACACAC"> Search Clients</span>
                    </div>
                    <button class="userimage2" style="background-color: #E39F9A"><img src="images/right.png" ></button>
                    
                </div>
                <div style="display:flex; flex-direction:column;gap:0.5rem;margin-top:2rem;margin-left:1rem">
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Ronald Richards <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Harry Roy <span class="close" id="close2">&times;</span></span>
                    <span class="bluetext" style="margin-left:1rem">Client 4 <span class="close" id="close2">&times;</span></span>
                    </div>
                    <div style="display:flex">
                    <span class="bluetext" style="margin-left:1rem">Client4 <span class="close" id="close2">&times;</span></span>
                    </div>
                </div>

                <div class="checkbox" style="padding-left:2rem">
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Ronald Richards</label><br>
                <input type="checkbox" id="clientscheck">
                <label id="checklabel" >Client 4</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                <input type="checkbox" id="clientscheck" >
                <label id="checklabel" >Client 7</label><br>
                

                    
                </div>
            </div>










                
            </div>
          
            





        </div>        
</div>

<!--------------------------------------------------------SCRIPT for General Goals---------------------------------->

                        <script>
                        var modal = document.getElementById("setgoals1");
                        var modal2 = document.getElementById("setgoals2");
                        var modal3 = document.getElementById("setgoals3");
                        var modal4 = document.getElementById("setgoals4");
                        var modal5 = document.getElementById("setgoals5");
                        var modal6 = document.getElementById("setgoals6");

                        // Get the button that opens the modal
                        var btn = document.getElementById("button1");
                        var btn3 = document.getElementById("button3");
                        var btn5 = document.getElementById("button5");
                        var btn7 = document.getElementById("button7");
                        var btn9 = document.getElementById("button9");
                        var btn11 = document.getElementById("button11");

                        // Get the button that sets the modal
                        var btn2 = document.getElementById("button2");
                        var btn4 = document.getElementById("button4");
                        var btn6 = document.getElementById("button6");
                        var btn8 = document.getElementById("button8");
                        var btn10 = document.getElementById("button10");
                        var btn12 = document.getElementById("button12");

                        // Get the <span> element that closes the modal
                        var span = document.getElementsByClassName("close")[0];
                        var span2 = document.getElementsByClassName("close2")[0];
                        var span3 = document.getElementsByClassName("close3")[0];
                        var span4 = document.getElementsByClassName("close4")[0];
                        var span5 = document.getElementsByClassName("close5")[0];
                        var span6 = document.getElementsByClassName("close6")[0];

                        // When the user clicks the button, open the modal 
                        btn.onclick = function() {
                        modal.style.display = "block";
                        btn.style.display = "none";
                        }
                        btn3.onclick = function() {
                        modal2.style.display = "block";
                        btn3.style.display = "none";
                        }
                        btn5.onclick = function() {
                        modal3.style.display = "block";
                        btn5.style.display = "none";
                        }
                        btn7.onclick = function() {
                        modal4.style.display = "block";
                        btn7.style.display = "none";
                        }
                        btn9.onclick = function() {
                        modal5.style.display = "block";
                        btn9.style.display = "none";
                        }
                        btn11.onclick = function() {
                        modal6.style.display = "block";
                        btn11.style.display = "none";
                        }


                        // When the user clicks the button, sets the modal 
                        btn2.onclick = function() {
                        modal.style.display = "none";
                        btn.style.display = "block";
                        }
                        btn4.onclick = function() {
                        modal2.style.display = "none";
                        btn3.style.display = "block";
                        }
                        btn6.onclick = function() {
                        modal3.style.display = "none";
                        btn5.style.display = "block";
                        }
                        btn8.onclick = function() {
                        modal4.style.display = "none";
                        btn7.style.display = "block";
                        }
                        btn10.onclick = function() {
                        modal5.style.display = "none";
                        btn9.style.display = "block";
                        }
                        btn12.onclick = function() {
                        modal6.style.display = "none";
                        btn11.style.display = "block";
                        }

                        // When the user clicks on <span> (x), close the modal
                        span.onclick = function() {
                        modal.style.display = "none";
                        btn.style.display = "block";
                        }
                        span2.onclick = function() {
                        modal2.style.display = "none";
                        btn3.style.display = "block";
                        }
                        span3.onclick = function() {
                        modal3.style.display = "none";
                        btn5.style.display = "block";
                        }
                        span4.onclick = function() {
                        modal4.style.display = "none";
                        btn7.style.display = "block";
                        }
                        span5.onclick = function() {
                        modal5.style.display = "none";
                        btn9.style.display = "block";
                        }
                        span6.onclick = function() {
                        modal6.style.display = "none";
                        btn11.style.display = "block";
                        }
                      </script>







<!---------------------------------------------SCRIPT OF RIGHTSIDE POPUP OF PAST GOALS---------------->
                   <script>
                     var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn1 = document.getElementById("userimage1");
                        userbtn1.onclick = function() {
                            
                        if (x.style.display === "block") {
                        x.style.display = "none";
                    
                    } else {
                        x.style.display = "block";
                        y.style.display = "none";
                        z.style.display = "none";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                
                    }
                    }




                    var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn2 = document.getElementById("userimage2");
                        userbtn2.onclick = function() {
                            
                        if (y.style.display === "block") {
                        y.style.display = "none";
                    
                    } else {
                        y.style.display = "block";
                        x.style.display = "none";
                        z.style.display = "none";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                
                    }
                    }


                    var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn4 = document.getElementById("userimage4");
                        userbtn4.onclick = function() {
                            
                        if (z.style.display === "block") {
                        z.style.display = "none";
                    
                    } else {
                        z.style.display = "block";
                        x.style.display = "none";
                        y.style.display = "none";
                        a.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                
                    }
                    }

                    var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn3 = document.getElementById("userimage3");
                        userbtn3.onclick = function() {
                            
                        if (a.style.display === "block") {
                        a.style.display = "none";
                    
                    } else {
                        a.style.display = "block";
                        x.style.display = "none";
                        y.style.display = "none";
                        z.style.display = "none";
                        b.style.display = "none";
                        c.style.display = "none";
                
                    }
                    }


                     var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn5 = document.getElementById("userimage5");
                        userbtn5.onclick = function() {
                            
                        if (b.style.display === "block") {
                        b.style.display = "none";
                    
                    } else {
                        b.style.display = "block";
                        x.style.display = "none";
                        y.style.display = "none";
                        z.style.display = "none";
                        a.style.display = "none";
                        c.style.display = "none";
                
                    }
                    }



                    var x = document.getElementById("rightside_wrapper1");
                     var y = document.getElementById("rightside_wrapper2");
                     var z = document.getElementById("rightside_wrapper3");
                     var a = document.getElementById("rightside_wrapper4");
                     var b = document.getElementById("rightside_wrapper5");
                     var c = document.getElementById("rightside_wrapper6");
                        var userbtn6 = document.getElementById("userimage6");
                        userbtn6.onclick = function() {
                            
                        if (c.style.display === "block") {
                        c.style.display = "none";
                    
                    } else {
                        c.style.display = "block";
                        x.style.display = "none";
                        y.style.display = "none";
                        z.style.display = "none";
                        a.style.display = "none";
                        b.style.display = "none";
                
                    }
                    }
                        
                </script> 





<!--------------------------------------------Script for mobview side past goals popup------------------------------->
                     <script>

                     var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn1 = document.getElementById("mob_userimage1");
                        mobuserbtn1.onclick = function() {
                            
                        if (e.style.display === "block") {
                        e.style.display = "none";
                    
                    } else {
                        e.style.display = "block";
                        f.style.display = "none";
                        g.style.display = "none";
                        h.style.display = "none";
                        i.style.display = "none";
                        j.style.display = "none";
                
                    }
                    }



                    var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn2 = document.getElementById("mob_userimage2");
                        mobuserbtn2.onclick = function() {
                            
                        if (f.style.display === "block") {
                        f.style.display = "none";
                    
                    } else {
                        f.style.display = "block";
                        e.style.display = "none";
                        g.style.display = "none";
                        h.style.display = "none";
                        i.style.display = "none";
                        j.style.display = "none";
                
                
                    }
                    }



                    var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn3 = document.getElementById("mob_userimage3");
                        mobuserbtn3.onclick = function() {
                            
                        if (g.style.display === "block") {
                        g.style.display = "none";
                    
                    } else {
                        
                        g.style.display = "block";
                        f.style.display = "none";
                        e.style.display = "none";
                        h.style.display = "none";
                        i.style.display = "none";
                        j.style.display = "none";
                
                
                    }
                    }



                    var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn4 = document.getElementById("mob_userimage4");
                        mobuserbtn4.onclick = function() {
                            
                        if (h.style.display === "block") {
                        h.style.display = "none";
                    
                    } else {
                        h.style.display = "block";
                        f.style.display = "none";
                        g.style.display = "none";
                        e.style.display = "none";
                        i.style.display = "none";
                        j.style.display = "none";
                
                
                    }
                    }

                    var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn5 = document.getElementById("mob_userimage5");
                        mobuserbtn5.onclick = function() {
                            
                        if (i.style.display === "block") {
                        i.style.display = "none";
                    
                    } else {
                        i.style.display = "block";
                        f.style.display = "none";
                        g.style.display = "none";
                        h.style.display = "none";
                        e.style.display = "none";
                        j.style.display = "none";
                
                
                    }
                    }




                    var e = document.getElementById("mobside_wrapper1");
                     var f = document.getElementById("mobside_wrapper2");
                     var g = document.getElementById("mobside_wrapper3");
                     var h = document.getElementById("mobside_wrapper4");
                     var i = document.getElementById("mobside_wrapper5");
                     var j = document.getElementById("mobside_wrapper6");
                        var mobuserbtn6 = document.getElementById("mob_userimage6");
                        mobuserbtn6.onclick = function() {
                            
                        if (j.style.display === "block") {
                        j.style.display = "none";
                    
                    } else {
                        j.style.display = "block";
                        f.style.display = "none";
                        g.style.display = "none";
                        h.style.display = "none";
                        i.style.display = "none";
                        e.style.display = "none";
                
                
                    }
                    }
                        
                     </script>






                      
</body>
</html>