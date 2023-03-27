<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
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
    /* margin-bottom: 1rem;  */
}
#details{
    color: #717171;
    border: none;
    background-color: white;

}
.details {
    /* margin-left: 45rem; */
    border: none;
    margin-right: 4rem;
    font-size: 20px;
}
.dashboard_container3 {
    display: flex;
    margin-top: 0.5rem;
    justify-content: space-between;
}
.dashboard_container2{
    display:flex;
    justify-content:space-between;
    text-align:center;
    margin:auto;
}
#schedule{
    background: #7282FB;
    border-radius: 10px;
    color:white;
    border:none;
    width:211px;
}
.schedule{
    margin-left:2rem;
    border:none;
    font-size:24px;
}
.dashboard_container4{
    margin-left: 0.4rem;
}
.symbols-container{
    display: flex;
    /* gap: 4rem; */
    font-weight: 400;
    justify-content: flex-end;
    width: 75%;
    align-items: center;
    font-size: 20px;
}
.symbols{
    display: flex;
    gap:0.2rem;
}
.symbols.col-2 img {
	scale: 0.8;
}
.container4_wrapper1 {
    display: flex;
    justify-content: flex-end;

    padding-right: 1.5rem;
    margin:auto;
}
.btn-add {
    width: 50px;
    height: 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    
}
#btn1{
    border: none;
    background-color: #0177FD;
    color: white;
    padding: 0.4rem;
    border-radius: 100%;
    font-size: 1.8rem;
    padding-left: 1.1rem;
    padding-right: 1.1rem;
    position:relative;
    
}
.dashboard_container5{
    background: #FDFDFD;
    border: 0.922082px solid #F4F4F4;
    border-radius: 9.22082px;
    box-sizing:border-box;
    display:flex;
    justify-content:space-around;
    height:75px;
    align-items:center;
    margin-right:4rem;
}
.hyphen p{
    color:#454545;
    font-weight:400;
    font-size:18px;
}
.dashboard_container6{
    display:flex;
    margin-top: 0.5rem;
}
.task,.message{
    display:flex;
    
    justify-content:space-between;
}
.view{
    border:none;
    font-size:20px;
    margin-top:0.6rem;
    margin-right:4rem;
}
.dashboard_container7{
    display:flex;
    align-items:center;
    justify-content:center;
    width:30%;
    margin-left:11rem;
    margin-top:2rem;
}
#today{
    color:white;
    width:10rem;
    height:2.5rem;
    border:none;
    border:1px solid white;
    background: #7282FB;
    border-radius: 9.29612px;
    font-size:23px;
}
#upcoming{
    color:black;
    width:10rem;
    border:none;
    height:2.5rem;
    border:1px solid white;
    background: #FFFFFF;
    border-radius: 9.29612px;
    font-size:23px;
}
.dashboard_container8{
    background: #FDFDFD;
    border: 0.929612px solid #F4F4F4;
    box-shadow: 0px 59.4952px 59.4952px -59.4952px rgba(50, 50, 50, 0.11);
    border-radius: 11.1553px;
    width:100%;
    margin-right:4rem;
    height:300px;
}
.dashboard_container9{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
}
.dashboard_container11{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
    margin-top:4rem;
}
@media screen and (max-width: 720px) {
    .dashboard_comtainer1{
        display: flex;
        gap:2rem;
    }
    .dashboard{
        margin-left: 2rem;
    }
    .dashboard_container10{
        display:flex;
        flex-direction:column;
        flex-wrap:wrap;      
    }
    .dashboard_container8{
        width:80%;
        margin-bottom:3rem;
    }
    .dashboard_container7{
        margin:auto;
        display:flex;
        margin-top:1rem;
        flex-direction:column;
    }
    .dashboard_container6{
        flex-direction:column;   
    }
    .task,.message{
        width:100%;
    }
    .dashboard_container2{
        flex-wrap:wrap;
    }
    .dashboard_container2 div{
        margin:auto;
    }
    .dashboard_comtainer1{
        /* flex-wrap:wrap; */
        flex-direction:column;
        
    }
    .dashboard_comtainer1 p{
        margin-top:-30px;
    }
    .dashboard_container12{
        width:100% !important;
        flex-wrap:wrap;
    }
}
@media screen and (max-width: 920px) {
    .dashboard_container4{
        display: none;
    }
    .dashboard_container3{
        display: flex;
        flex-direction: column;
        
    }
    .details{
        margin-left:0px;
    } 
    .dashboard_container12{
        width:100% !important;
        flex-wrap:wrap;
    }
}
</style>
<body>
    <?php
    include 'navbar.php';
    ?>

<div class="dashboard">
   <div class="dashboard_comtainer1">
            <p style="font-size: 40px;font-weight:600;margin-bottom: 0;" class="dash">Dashboard</p>
            <p style="font-weight:600;font-size:25px">Upcoming Events</p>
        
    </div>
    <div class="dashboard_container2">
        <div style="font-size:24px;font-weight:500;color:#434343;">No Upcoming events currently!</div>
        <div class="schedule">
            <a href="calendar_of_events.php"><button id="schedule">Check schedule</button></a>
        </div>
    </div>
    <div class="dashboard_container3">
            <div style="font-size:35px; font-weight:600"> Client Progress</div>
            <div class="details">
                <a href="#"><button id="details">View All</button></a>
                <a href="#"><button id="details">View Detailed Progress</button></a>
            </div>
            
    </div>

    <div class="dashboard_container4">

        <div class="container4_wrapper1">
            <div style="width: 35%;" class="plus">
                <div><a href=""><button id="btn1" class="btn-add">+</button></a></div>
            </div>
            <div class="symbols-container col-8">
                <div class="symbols col-2"><img src="images/Frame.png" style="width:1.8rem"><span>Steps</span></div>
                <div class="symbols col-2"><img src="images/Frame-1.png" style="width:1.8rem"><span>Heart Rate</span></div>
                <div class="symbols col-2"><img src="images/Frame-2.png" style="width:1.8rem"><span>Water</span></div>
                <div class="symbols col-2"><img src="images/Frame-3.png" style="width:1.8rem"><span>Sleep</span></div>
                <div class="symbols col-2"><img src="images/Frame-4.png" style="width:1.8rem"><span>Weight</span></div>
                <div class="symbols col-2"><img src="images/Frame-5.png" style="width:1.8rem"><span>Calories</span></div>
            </div>
        </div>
    </div>

    <div class="dashboard_container5">
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
        <div class="hyphen"><p>-</p></div>
    </div>

    <!-- <div class="dashboard_container6">
        <div class="task">
            <p style="font-weight:600;font-size:2rem;">My Tasks List</p>
            <div class="view"><a href="#"><button id="details">View All</button></a></div>
        </div>
        <div class="message" >
            <p style="font-weight:600;font-size:2rem;">Messages</p>
            <div class="view"><a href="#"><button id="details">View All</button></a></div>
        </div>
    </div>


    <div class="dashboard_container10" style="display:flex;flex-direction:row; justify-content:space-between;">
        <div class="dashboard_container8">
            <div class="dashboard_container7">
                <a href="#"><button id="today">Today</button>
                <a href="#"><button id="upcoming">Upcoming</button>
            </div>
            <div class="dashboard_container9">
                <div style="font-size:24px;font-weight:500;color:#434343;">No task created for today!</div>
                <a href="#"><button id="today">Create task</button>
            </div>
        </div>
        <div class="dashboard_container8">
            <div class="dashboard_container11">
                <div style="font-size:24px;font-weight:500;color:#434343;">No message yet!</div>
                <a href="#"><button id="today">Start a chat</button>
            </div>
        </div>
    </div> -->
    <div class="dashboard_container10" style="display:flex;flex-direction:row; justify-content:space-between; width:100%;">
    <div class="dashboard_container12" style="display:flex;flex-direction:column; margin-top: 0.5rem; width:40%;">
        <div class="task">
            <p style="font-weight:600;font-size:2rem;">My Tasks List</p>
            <div class="view"><a href="#"><button id="details">View All</button></a></div>
        </div>
        <div class="dashboard_container8">
            <div class="dashboard_container7">
                <a href="#"><button id="today">Today</button>
                <a href="#"><button id="upcoming">Upcoming</button>
            </div>
            <div class="dashboard_container9">
                <div style="font-size:24px;font-weight:500;color:#434343;">No task created for today!</div>
                <a href="task_list.php"><button id="today">Create task</button>
            </div>
        </div>
    </div>
    <div class="dashboard_container12" style="display:flex;flex-direction:column; margin-top: 0.5rem; width:40%;">
        <div class="message" >
            <p style="font-weight:600;font-size:2rem; color:black;">Messages</p>
            <div class="view"><a href="#"><button id="details">View All</button></a></div>
        </div>
        <div class="dashboard_container8">
            <div class="dashboard_container11">
                <div style="font-size:24px;font-weight:500;color:#434343;">No message yet!</div>
                <a href="chat_home.php"><button id="today">Start a chat</button>
            </div>
        </div>
    </div>
    </div> 
</div>
</body>
</html>