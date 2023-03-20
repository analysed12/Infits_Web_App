<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
        font-family: 'NATS', sans-serif !important;
    }
    .dashboard{
    margin-top: 1rem;
    margin-left: 17rem;
    
    display: flex;
    flex-direction: column;
    gap: 1rem;
    
   }
   
   .container3{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    margin:auto;
   }
   .request{
    font-size:24px;
   }
   #request{
    background: #7282FB;
    border-radius: 10px;
    color:white;
    border:none;
    width:211px;
    margin-top:1.5rem;
    width:200px;
}
.clients_container2 {
    margin-top: 2rem;
    font-size:25px;
}
.button-top{
    border:none;
    background:white;
    border-bottom : 4px solid #4B9AFB;
}
@media screen and (max-width: 720px) { 
    .dashboard_comtainer1{
        display: flex;
        gap:4rem;
    }
    .dashboard{
        margin-left: 2rem;
    } 
    .lilac1{
        position:absolute;
        top:40vh;
        right:5vw;
        z-index:-2;
    }
    .lilac2{
        position:absolute;
        z-index:-2;
        left:0;
        bottom:0;
    }
    .container3{
        flex-wrap:wrap;
        margin:auto;
    }
    
}
    </style>
</head>
<body>
    <?php include 'navbar.php'?>

    <div class="dashboard">
        <div class="dashboard_comtainer1">
            <p style="font-size: 48px;font-weight:500;margin-bottom: 0;">Client List</p>       
        </div>
        <div class="clients_container2">
            <form action="" method="post">
                <button class="button-top" name="active-btn">Active</button>
                <button class="button-top" name="pending-btn" style="margin-left:2rem">Pending</button>
            </form>
        </div>
        <br><br>
        <div class="lilac1">   
                <img src="images/lilac user icon (2).png" style="position: absolute;width:30vw;height:40vh;top:10%; right:7%;" class="image1"> 
            </div>
        <div class="container3">   
            
            <div style="font-size:35px;font-weight:500;margin-top:30px;" class="clients_title">No clients added yet!</div>
                <div class="request">
                    <a href="#"><button id="request">Send Request</button></a>
                </div>               
        </div>       
        <div class="lilac2">
            <img src="images/lilac user icon (4).png" style="width:25vw;height:40vh;position:absolute;left:20vw;bottom:3vh" > 
        </div>
    </div>
</body>
</html>