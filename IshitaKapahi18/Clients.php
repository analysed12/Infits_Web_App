<?php
include('event_calender.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Clients.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
<body>
    <div class="clients">
        <p style="font-size:1.7rem; font-weight:500">Clients</p>
        <div class="clients_container">
            <div class="search_client">
                    <div><button id="btn3"><span class="material-symbols-outlined">search</span></button> </div>
                    <div>&nbsp&nbsp&nbsp&nbsp <input type="text" name="search_client" placeholder="Seach Clients" class="seach_clients_text">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</div>   
            </div>
                

            <div class="clients_operations">
                <div class="add_set_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">add</span></button> </div>
                    <div class="add_set"> <span>Add Clients</span></div>   
                </div>
                <div class="add_set_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">settings</span></button> </div>
                    <div class="add_set"> <span>Set Goals</span></div>   
                </div>
                
                <div class="add_set_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">notification_add</span></button> </div>
                    <div class="add_set"> <span>Set Reminders</span></div>   
                </div>
                <div class="delete_client">
                    <button id="btn2"><span class="material-symbols-outlined">delete</span></button>
                     
                </div>
                
            
            </div>


        </div>

        <div class="clients_container2">
            <button id="active" onclick="openPage('client', this)">Active</button>
            <button id="active">Pending</button>
                
        </div>

        <div class="clients_container3" id="client">
            <div class="client_wrapper1">
                <div class="client_profile">
                    <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                    <div class="profile_2">
                        <span>Ronald Richards </span><br>
                        <span style="color:#4B9AFB">Profile</span>
                        <div class class="profile_3">
                        <button id="btn4">Muscle Plan</button>
                        <button id="btn4">2 Months</button>  
                        </div>
                         
                    </div>
                </div>

                <div class="client_profile">
                    <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                    <div class="profile_2">
                        <span>Ronald Richards </span><br>
                        <span style="color:#4B9AFB">Profile</span>
                        <div class class="profile_3">
                        <button id="btn4">Muscle Plan</button>
                        <button id="btn4">2 Months</button>  
                        </div>
                         
                    </div>
                </div>


                <div class="client_profile">
                    <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                    <div class="profile_2">
                        <span>Ronald Richards </span><br>
                        <span style="color:#4B9AFB">Profile</span>
                        <div class class="profile_3">
                        <button id="btn4">Muscle Plan</button>
                        <button id="btn4">2 Months</button>  
                        </div>
                         
                    </div>
                </div>


            </div>


            <div class="client_wrapper2">
                <div class="client_profile">
                        <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                        <div class="profile_2">
                            <span>Ronald Richards </span><br>
                            <span style="color:#4B9AFB">Profile</span>
                            <div class class="profile_3">
                            <button id="btn4">Muscle Plan</button>
                            <button id="btn4">2 Months</button>  
                            </div>
                            
                        </div>
                </div> 



                <div class="client_profile">
                        <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                        <div class="profile_2">
                            <span>Ronald Richards </span><br>
                            <span style="color:#4B9AFB">Profile</span>
                            <div class class="profile_3">
                            <button id="btn4">Muscle Plan</button>
                            <button id="btn4">2 Months</button>  
                            </div>
                            
                        </div>
                </div> 



                <div class="client_profile">
                        <div class="profile_1"><img src="images/pic3.jpeg" id="pic1"></div>
                        <div class="profile_2">
                            <span>Ronald Richards </span><br>
                            <span style="color:#4B9AFB">Profile</span>
                            <div class class="profile_3">
                            <button id="btn4">Muscle Plan</button>
                            <button id="btn4">2 Months</button>  
                            </div>
                            
                        </div>
                </div> 
            </div>
            
        </div>



 
    </div>
    
</body>
</html>