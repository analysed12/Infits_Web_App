<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
     body {
        font-family: 'NATS', sans-serif !important;
    }
.dashboard{
    margin-top: 1rem;
    margin-left: 18rem;

    display: flex;
    flex-direction: column;
    gap: 1rem;
    /* margin-bottom: 1rem;  */
}
.container2{
    display:flex;
    width:50%;
    justify-content:space-between;
}
.btn-add {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-left:20px;
    margin-right:35px
}
#btn1{
    border: none;
    background-color:#8C68F8;
    color: white;
    padding: 0.4rem;
    border-radius: 8px;
    font-size: 1.8rem;
    padding-left: 1.1rem;
    padding-right: 1.1rem;
    position:relative;

}
.clients{
    display:flex;
    background: #FFFFFF;
    box-shadow: 0px 1.72308px 5.16923px rgba(0, 0, 0, 0.25);
    border-radius: 13.7846px;
    height:112px;
}
.container3{
    display:flex;
    flex-direction:row;
    flex-wrap:wrap;
    margin-top:2rem;
}
.points{
    width:474px;
    height:101px;
    margin-bottom:2rem;
    margin-right:6rem;
    justify:content:space-between;
    background: #FFFFFF;
    box-shadow: 0px 1.51167px 4.53501px rgba(0, 0, 0, 0.25);
    border-radius: 12.0934px;
}
.rectangle{
    background: #D6D5D5;
    border-radius: 75.5835px;
    width: 231px;
    height: 14px;
}
.container4{
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:10px 30px;
}
@media screen and (max-width: 720px) { 
    .dashboard_comtainer1{
        display: flex;
        gap:4rem;
    }
    .dashboard{
        margin-left: 2rem;
    } 
     .container2{
        display:flex;
        flex-direction:column;
    } 
     .clients{
        margin-bottom:30px;
    }
 }
@media screen and (max-width: 1000px){
    .clients{
        margin-right:50px;
    }
}
</style>
<body>

    <?php include 'navbar.php';?>
<div class="dashboard">
    <div class="dashboard_comtainer1">
            <p style="font-size: 48px;font-weight:500;margin-bottom: 0;">My Achievements</p>       
    </div>
    <div class="container2">
        <div class="clients" style="width:258px;margin-right:50px;">
        <div class="" style="display:flex !important;justify-content:center;align-items:center;">
            <div><button id="btn1" class="btn-add">0</button></div>
            <div style="font-size:34.5px; font-weight:400,margin:auto;">Total Clients</div>          
        </div>
        </div>
        <div class="clients" style="width:331px">
        <div class="" style="display:flex !important;justify-content:center;align-items:center;">
            <div><button id="btn1" class="btn-add">0</button></div>
            <div style="font-size:34px; font-weight:400">Achievements earned</div> 
        </div>
        </div>          
    </div>

    <div class="container3">
        <div class="points">
            <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 5 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
        <div class="points">
        <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 10 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
        <div class="points">
        <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 15 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
        <div class="points">
        <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 20 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
        <div class="points">
        <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 25 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
        <div class="points">
        <div class="container4">
                <div class="heading" style="">
                    <p style="font-weight: 400;font-size: 27px;align-items:center;display:flex;">Reach 30 Clients</p>
                    <div class="rectangle"></div>              
                </div>
                <div class="image">
                    <img src="images/medal (1).png">               
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>