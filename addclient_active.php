<?php // include('config.php');
//session_start();?>

<html>

<head>
    <style>
        body {
            height: 100vh;
            overflow: hidden;
        }
        #contents {
            display: flex;
            flex-direction: column;
            height: 90%;
            font-family: 'Poppins';
            font-style: normal;
            font-weight: 500;
            font-size: 35px;
            padding: 20px;
        }
        p {
            margin: 0px 0px;
        }
        .topnav-content #topnav-content-3{
            font-family: 'Poppins'; /* NATS */
            font-style: normal;
            font-weight: 400;
            font-size: 33px;
            color: #000000;
        }
        #addclient-topnav{
            display: flex;
            width: 100%;
            align-items: center;
            font-family: 'NATS', 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 27px;
            color: #000000;
        }
        #addclient-topnav p{
            margin: 0;
            font-family: 'NATS', 'Poppins';
            font-style: normal;
            font-weight: 400;
            font-size: 27px;
            line-height: 57px;
            width: 90px;
            height: 50px;
            margin-right: 30px;
            color: #000000;
            text-align: center;
        }
        #addclient-topnav-active{
            border-bottom: 5px solid #4B9AFB; 
        }
        #clients{
            height: 80vh;
            padding: 30px;
            display: grid;
            grid-template-columns: 19% 19% 19% 19% 19%;
            column-gap: 1%;
            row-gap: 50px;
            overflow: scroll;
        }
        ::-webkit-scrollbar {
            width: 0;  /* Remove scrollbar space */
            background: transparent;  /* Optional: just make scrollbar invisible */
        }
        .client{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .clientname{
            font-family: 'NATS';
            font-style: normal;
            font-weight: 400;
            font-size: 21px;
            color: #000000;
            margin-top: 5px;
        }
        .buttons{
            width: 70%;
            display: flex;
            justify-content: space-between;
        }
        .client button{
            background: #FFFFFF;
            border: 1px solid #4B9AFB;
            border-radius: 9px;
            font-family: 'NATS';
            font-style: normal;
            font-weight: 400;
            font-size: 12px;
            color: #000000;
            margin-top: 10px;
        }
        .profile{
            font-family: 'NATS';
            font-style: normal;
            font-weight: 400;
            font-size: 18px;
            color: #4B9AFB;
            padding-top: 15px;
            height: 40px;
            width: 40px;
            text-align: center;
            border-bottom: 3px solid #4B9AFB; 
        }
        #addclient-topnav p a{
            text-decoration: none;
            outline: none;
            color: #000000;
        }
        @media (max-width:1023px) {
            #contents {
                position: fixed;
                top: 10%;
                width: 100vw;
            }
            #clients{
                grid-template-columns: 49% 49%;
                column-gap: 1%;
            }
        }
    </style>
</head>
<script>
    <?php
        $name1 = "Ronald Richards";
    ?>
</script>
<body>
    <?php include 'event_calendar.php'; ?>
               
                     
    <div id="contents">
        <div id="addclient">
            <div id="addclient-topnav">
                <p id="addclient-topnav-active"><a href="./addclient_active.php">Active</a></p>
                <p id="addclient-topnav-pending"><a href="./addclient_pending.php">Pending</a></p>
            </div>
            <div id="clients">
            
                 <?php 
                //  $sql= "Select `name` from `addclient`";
         
                    $sql = "SELECT name FROM addclient";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                
                    echo "<div class='client'>";
                    echo "<div><img src='./icons/profile6.png'></div>";
                    echo "<div class='clientname'>".$row["name"]."</div>";
                    echo "<div class='buttons'><button>Muslce Plan</button><button>2 Months</button></div>";
                    echo "<div class='profile'>Profile</div>";
                    echo "</div>";
                
                 }} ?>
            </div>
        </div>
    </div>
    <script async defer>
        var topnavchange=document.getElementById("topnav-change");
        topnavchange.innerHTML="<p id='topnav-content-3'>Client List</p>";
        var addusermale=document.getElementById("addusermale");
        addusermale.style.display="block";
    </script>
</body>

</html>