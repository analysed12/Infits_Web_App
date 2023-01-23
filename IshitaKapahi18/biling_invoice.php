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
    <link rel="stylesheet" href="biling_invoice.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
<body>
<div class="biling_invoice">
        <p style="font-family:Poppins">Biling And Invoice</p>
    <div class="biling_invoice_wrapper1">
        <p>Latest Bills</p>
        <div><p>&nbsp&nbsp&nbsp&nbsp&nbspNo latest bill issued currently!</p></div>
        
    </div>

    <div class="biling_invoice_wrapper2">
        <p id=text1>Previous Bills</p>
        <div class="biling_invoice_container1">
            <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">October 2022</span><br>
                            <span id="text3">16 Clients added</span>
                            </div>
                            <div class="part3">
                            <p id="text2">Download Invoice <span class="material-symbols-outlined">Download</span></p>
                            </div>
                            
                        </div>
                        <span id="text4">View Invoice</span>
                        <button id="btn">Paid</button>
                    </div>
                    
                </div>
                
            </div>

            <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">September 2022</span><br>
                            <span id="text3">16 Clients added</span>
                            </div>
                            <div class="part3">
                            <p id="text2">Download Invoice <span class="material-symbols-outlined">Download</span></p>
                            </div>
                            
                        </div>
                        <span id="text4">View Invoice </span>
                        <button id="btn">Paid</button>
                    </div>
                    
                </div>
                
            </div>

            
        </div>


        <div class="biling_invoice_container2">
        <div class="previousbills_container1">
                <div class="previousbills">
                    <div class="part1">
                        <div class="part2">
                            <div>
                            <span id="text2">August 2022</span><br>
                            <span id="text3">16 Clients added</span>
                            </div>
                            <div class="part3">
                            <p id="text2">Download Invoice <span class="material-symbols-outlined">Download</span></p>
                            </div>
                            
                        </div>
                        <span id="text4">View Invoice </span>
                        <button id="btn">Paid</button>
                    </div>
                    
                </div>
                
            </div>
        </div>
        
    </div>


</div>
    
    



    
</body>
</html>