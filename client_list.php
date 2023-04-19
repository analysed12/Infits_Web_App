<?php
include('navbar.php');

if(isset($_SESSION['dietitianuserID'])){
    $id = $_SESSION['dietitianuserID'] ;
    $sql="SELECT * FROM addclient WHERE dietitianuserID='$id'";
    $result = $conn->query($sql);
    if(mysqli_num_rows($result)<1){
        header('Location:clientlist.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
</head>
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
  color: #BBBBBB;
  opacity: 1; /* Firefox */
}
body{
    font-family: 'NATS', sans-serif !important;
    overflow-x:hidden !important;
}

.clients {
    margin-left: 20rem;
    font-weight: 400;
    margin-top: 1.5rem;
   
}

.clients_container {
    display: flex;
    /* gap: 18rem; */
}

.clients_operations {
    display: flex;
    gap: 3rem;
}

#btn1 {
    background-color: white;
    border: none;
    color: #9C74F5;
    width: auto;

}

.add_set_client {
    width: auto;
    margin-top: 1rem;
    color: #9C74F5;
    background-color: white;
    box-shadow: 0.7px 0.7px 2.5px 1.5px rgb(231, 208, 253);
    border-radius: 0.6rem;
    font-size: 20px;
    font-weight:400;
    border: none;
    display: flex;
    padding-top: 0.5rem;
    padding-right: 1rem;
    padding-left:0.5rem;
}

#btn2 {
    width: auto;
    background-color: #FD2B2B;
    border: none;
    color: white;
    margin-top: 1rem;
    border-radius: 0.6rem;
    box-shadow: 0.6px 0.6px 2px 1px #ccc;
    padding: 0.5rem;
    padding-bottom: 0.3rem;
}

.search_client {
    width:343px;
    margin-top: 1rem;
    color: #BBBBBB;
    background-color: white;
    box-shadow: 0.6px 0.6px 2px 1px #ccc;
    border-radius: 0.6rem;
    font-size: 20px;
    font-weight:400;
    border: none;
    display: flex;
    padding-top: 0.5rem;
    padding-right: 0.5rem;
    margin-right:1rem;
}

#btn3 {
    width: auto;
    background-color: white;
    border: none;
    color: #ACACAC;
    margin-left:0.5rem;
}

.seach_clients_text {
    border: none;
}

.clients_container2 {
    margin-top: 2rem;
    font-size:25px;
}

/* .clients_container3 {
    display: none;
} */

#active {
    border: none;
    background-color: white;
    font-weight: 500;
    font-size: 1.2rem;
    border: 1px solid transparent;
    width: auto;
}

#active:hover {
    border-bottom: 0.25rem solid #4B9AFB;
    border-radius:17px;
}

.client_wrapper1 {
    padding: 1.5rem;
    display: flex;
    gap: 1rem;
}

.client_wrapper2 {
    padding: 1.5rem;
    display: flex;
    gap: 1rem;
}

.client_profile {
    height: 9rem;
    width: auto;
    background-color: #FAFAFA;
    border-radius: 1rem;
    padding: 1.5rem;
    display: flex;
    gap: 1.5rem;
}

img {
    width:87px;
    height: 87px;
    border-radius: 100%;
}

#btn4 {
    background-color: white;
    border-color: #4B9AFB;
    border-radius: 0.3rem;
    font-size: 0.8rem;
    margin-top: 0.8rem;
    width: auto;
}
#add_set_client{
    margin-left:5rem !important;
}
#toast{
    position: fixed;
    bottom: 0;
    left: 20%;
    display:flex;
    justify-content: space-evenly;
    align-items: center;
    padding:10px 5px;
    width: 70%;
    margin: 0 auto;
    margin-bottom: 1rem;
    /* background-color:rgba(0, 0, 0, 0.1); */
    border-radius: 10px;
    /* backdrop-filter: blur(10px); */
    display: none;
    transition: all 0.4 ease-in-out !important;
}
#toast__h1{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    color: #000000;
}
.btn1{
    background: #9C74F5;
    color: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    transition: all 0.2 .2 ease-in ;
}
.btn2{
    color: #9C74F5 !important;
    background: #FFFFFF;
    border: 1px solid #9C74F5;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
}
 .btn{
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    margin:0 5px;    
}
.myCheckboxs{
  
    position: absolute;
    top: 10%;
    right:6%;
    display: none;
    border:1px solid #7282FB;
}



@media screen and (max-width: 720px) {
    .clients {
        margin-left: 2rem;
    }

    .clients_container {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .add_set_client {
        font-size: 0.8rem;
    }
    #add_set_client{
    margin-left:0% !important;

}

    

    .add_set {
        /* margin-bottom:1rem; */
        font-size:25px;
        font-weight:400;
    }

    .client_wrapper1 {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 0.1rem;
    }

    .client_wrapper2 {
        display: flex;
        flex-direction: column;
        gap: 1rem;
        padding: 0.1rem;
    }

    .clients_container3 {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }

    .clients_operations {
        display: flex;
        
        gap: 0.5rem;
        max-width:fit-content;
        margin-left:0rem !important;
    }

    .clients_container3 {
        display: none;
    }
    #toast{
        flex-direction: column;
         width: 70%;
    }

}

.client-container {
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
}

.client-item {
    padding: 30px 10px;
    /* border: 1px solid grey; */
    /* text-align: center; */
    margin: 5px;
    width: 150px;
    flex-basis: 300px;
    background: #FAFAFA;
    /* border: 1px solid #D9D9D9; */
    /* box-shadow: 0px 10px 15px rgba(136, 136, 136, 0.05); */
    border-radius: 15px;
    position: relative;
    

}
.client-item:hover{
    border: 1px solid #D9D9D9;
    box-shadow: 0px 10px 15px rgba(136, 136, 136, 0.05);

}

.button-top{
    border:none;
    background:white;
    
    

}


.button-top:focus{
    border-bottom : 4px solid #4B9AFB;


}
.button-top:active{
    border-bottom : 4px solid #4B9AFB;

}
.button-top:hover{
    border-bottom : 4px solid #4B9AFB;

}
@media screen and (max-width: 1100px){
    .clients_container{
        display:flex !important;
        flex-direction:column !important;
        gap:0.5rem;
    }
    .clients_operations{
        margin-left:-5rem;
    }
}
</style>

<body>
    <div class="clients">
        <p style="font-size:40px; font-weight:500">Clients</p>
        <div class="clients_container">
            <div class="search_client" style="justify-content:center;align-items:center">
                <div><button id="btn3"><span class="material-symbols-outlined">search</span></button> </div>
                <div style="margin-left:1rem;margin-right:4rem;margin-bottom:0.5rem;"> <input type="text" name="search_client" placeholder="Search Clients"
                        class="seach_clients_text" style="width:60%"></div>
            </div>


            <div class="clients_operations">
                <div class="add_set_client" id="add_set_client" >
                    <div><button id="btn1" ><span class="material-symbols-outlined">add</span></button> </div>
                    <div class="add_set"> <span">Add Clients</span></div>
                </div>
                <div onclick="toast('Set Goals');" class="add_set_client">
                    <div><button  id="btn1"><span class="material-symbols-outlined">settings</span></button> </div>
                    <div class="add_set"> <span>Set Goals</span></div>
                </div>

                <div onclick="toast('Set Reminders');" class="add_set_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">notification_add</span></button>
                    </div>
                    <div class="add_set"> <span>Set Reminders</span></div>
                </div>
                <div class="delete_client">
                    <button id="btn2"><span class="material-symbols-outlined">delete</span></button>

                </div>
            </div>
        </div>

        <div class="clients_container2">
            <form action="" method="post">
                <button class="button-top active-button" name="active-btn">Active</button>
                <button class="button-top pending-btn" name="pending-btn" style="margin-left:2rem">Pending</button>
            </form>
        </div>
        <br><br>
        
        <div class="client-container" >
            <?php
                if(isset($_POST['pending-btn']))
                {
                    $sql = "SELECT * FROM addclient WHERE dietitianuserID='$id' AND status=0";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                        $client_id = $row["client_id"];
                        $plan_id = $row["plan_id"] ;


                        $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $plan_id";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $date1 = strtotime($row1["start_date"]);
                        $date2 = strtotime($row1["end_date"]);
                        $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
                        
                            $plan_name = $row1['name'] ;
                            $plan_duration = $months." Month" ;
                        // echo $months;

                        if(mysqli_num_rows($result1) > 0)
                    {
                        // $name_of_plan = $row1["name"];
                
                    echo "<div class='client-item'id='card' >";
                    echo "<div class='profile1' style='float:left; margin-right:10px;'><img src='images/unsplash.png'></div>";
                    echo "<div class='profile2'>";
                    echo "<input style='cursor:pointer;border:1px solid #7282FB;' id='chk' class='myCheckboxs' type='checkbox' name='checkbox_name[]' value='".$row["client_id"]."'>";
                    echo "<p style='font-weight:400;text-transform:capitalize;font-size:22px;line-height:88%;'>".$row["name"]."</p>";
                    echo "<a href='client_profile.php?client_id=".$row['client_id']."' style='font-size:18px;font-weight:400;line-height:88%;padding:0px !important;margin-top:-1rem;'>Profile</a>";
                    echo "<div>";
                    echo "<div class='box1' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;font-size:13px;font-weight:400;
                    border-radius: 6px;padding:5px;margin-top:5px;margin-right:15px;'>".$plan_name."</div>";
                    echo "<div class='box2' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;font-size:13px;font-weight:400;
                    border-radius: 6px;padding:5px;margin-top:5px;margin-left:5px;'>".$plan_duration." </div>";
                    echo "</div>";
    
                    echo "</div>";
                    echo "</div>";
    
                
                 }}}
                }
                else
                {
                   
                    $sql = "SELECT * FROM addclient WHERE dietitianuserID='$id' AND status=1";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                        $client_id = $row["client_id"] ;
                        $plan_id = $row["plan_id"] ;


                        if($plan_id == 0){
                            $plan_name ="No plan";
                            $plan_duration = "No Plan";

                        }
                        else{
                        $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $plan_id";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $date1 = strtotime($row1["start_date"]);
                        $date2 = strtotime($row1["end_date"]);
                        $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;

                        $plan_name = $row1['name'] ;
                        $plan_duration = $months." Month" ;
                    }
                 
                    echo "<div class='client-item' id='card'>";
                    echo "<input style='cursor:pointer;solid border:1px solid #7282FB;' id='chk' class='myCheckboxs' type='checkbox' name='checkbox_name[]' value='".$row['client_id']."'>";
                    echo "<div class='profile1' style='float:left; margin-right:10px;'><img src='images/unsplash.png'></div>";
                    echo "<div class='profile2'>";
                    echo "<p style='font-weight:400;text-transform:capitalize;font-size:22px;line-height:88%;'>".$row["name"]."</p>";
                    echo "<a href='client_dashboard.php?client_id=".$row['client_id']."' style='font-size:18px;font-weight:400;line-height:88%;padding:0px !important;margin-top:-1rem;'>Profile</a>";
                    echo "<div>";
                    echo "<div class='box1' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;font-size:13px;font-weight:400;
                    border-radius: 6px;padding:5px;margin-top:5px;margin-right:5px;'>".$plan_name."</div>";
                    echo "<div class='box2' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;font-size:13px;font-weight:400;
                    border-radius: 6px;padding:5px;margin-top:5px';margin-right:5px;'>".$plan_duration." </div>";
                    echo "</div>";
    
                    echo "</div>";
                    echo "</div>";
                
                 }}
                }
                ?>


        </div>
    
    </div>
    <div id="toast">
        <h1 id="toast__h1">
          Select the clients for whom you want the reminders to be set!
        </h1>

        <div id="toast__btns">
            <form action=""  method="POST" id='form'>
            <input style='cursor:pointer' id='form__input' type='text' hidden name='clientList' value=''>
             <button type="submit" class="btn btn1" >
            <span>
                    <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.3767 3.99431V8.54725H13.859V3.99431M13.859 10.0649H15.3767V11.5825H13.859M7.02961 0.200195C6.6271 0.200195 6.24108 0.36009 5.95647 0.644704C5.67185 0.929318 5.51196 1.31534 5.51196 1.71784C5.50663 1.7911 5.50663 1.86464 5.51196 1.9379C3.32655 2.5829 1.71784 4.61655 1.71784 7.02961V11.5825L0.200195 13.1002V13.859H13.859V13.1002L12.3414 11.5825V7.02961C12.3414 4.61655 10.7327 2.5829 8.54725 1.9379C8.55258 1.86464 8.55258 1.7911 8.54725 1.71784C8.54725 1.31534 8.38736 0.929318 8.10275 0.644704C7.81813 0.36009 7.43211 0.200195 7.02961 0.200195ZM5.51196 14.6178C5.51196 15.0203 5.67185 15.4064 5.95647 15.691C6.24108 15.9756 6.6271 16.1355 7.02961 16.1355C7.43211 16.1355 7.81813 15.9756 8.10275 15.691C8.38736 15.4064 8.54725 15.0203 8.54725 14.6178H5.51196Z" fill="white"/>
                    </svg>

                </span><span class='btn__span'></span>
          </button>
           <button onclick='close()' class="btn btn2">Cancel</button>

        </form>

         

        </div>
    </div>
    
<script>
    document.getElementsByClassName('client-item').onclick=function(){
        var checkbox= document.getElementById('chk');
        checkbox.checked=!checkbox.checked;
    }
   
        const popUp = document.querySelector("#toast");
        const btn1 = document.querySelector(".btn1");
        const btn2 = document.querySelector(".btn2");
        const btn__span = document.querySelector(".btn__span");
        const myCheckBox = document.querySelectorAll(".myCheckboxs");
        const form = document.querySelector("#form");
        const from__input = document.querySelector("#from__input");

        let selectedClients = [];

        // display checkBox and popUp here...
        const toast = (val) => {
            popUp.style.display = "inline-flex";
            btn__span.innerHTML = val;
            myCheckBox.forEach((items) => {
                items.style.display = "block";
            });
        };

        // after checking the checkbox...the further opration...
        btn1.addEventListener("click", () => {
        if (btn__span.innerHTML == "Set Goals") { //the set goals page linking and sending the data...
            myCheckBox.forEach((items) => {
                if (items.checked) {
                    selectedClients.push(items.value);
                }
                form__input.value = JSON.stringify(selectedClients);
                form.action = "setgoals.php";
                console.log( "setgoals");
            });
            window.location.href = "setgoals.php";
        } else if (btn__span.innerHTML == "Set Reminders") {   //the set Reminders page linking and sending the data...
             
            myCheckBox.forEach((items) => {
                if (items.checked) {
                    selectedClients.push(items.value);
                }
                form__input.value = JSON.stringify(selectedClients);
                form.action = 'set_reminders.php';
                console.log( "Set Reminders", selectedClients);
            });
            window.location.href = "set_reminders.php";
        }
        });

        // hide checkBox and popUp here...
        btn2.addEventListener("click", (e) => {
            e.preventDefault();
            popUp.style.display = "none";
            myCheckBox.forEach((items) => {
                items.style.display = "none";
            });
        });

</script>
</body>
</html>