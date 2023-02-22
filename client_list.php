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
    width: auto;
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
    width: 4rem;
    height: 5rem;
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
        margin-top: 0.3rem;
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
    }

    .clients_container3 {
        display: none;
    }


}

.client-container {
    display: flex;
    flex-wrap: wrap;
    max-width: 1000px;
}

.client-item {
    padding: 30px 10px;
    border: 1px solid grey;
    /* text-align: center; */
    margin: 5px;
    width: 150px;
    flex-basis: 300px;
    background: #FAFAFA;
    border: 1px solid #D9D9D9;
    /* box-shadow: 0px 10px 15px rgba(136, 136, 136, 0.05); */
    border-radius: 15px;

}

.button-top{
    border:none;
    background:white;
    border-bottom : 4px solid #4B9AFB;
    

}
</style>

<body>
    <div class="clients">
        <p style="font-size:40px; font-weight:500">Clients</p>
        <div class="clients_container">
            <div class="search_client" style="justify-content:center;align-items:center">
                <div><button id="btn3"><span class="material-symbols-outlined">search</span></button> </div>
                <div style="margin-left:1rem;margin-right:4rem"> <input type="text" name="search_client" placeholder="Seach Clients"
                        class="seach_clients_text" style="width:60%"></div>
            </div>


            <div class="clients_operations">
                <div class="add_set_client" id="add_set_client" >
                    <div><button id="btn1" ><span class="material-symbols-outlined">add</span></button> </div>
                    <div class="add_set"> <span>Add Clients</span></div>
                </div>
                <div onclick="open_link('setgoals.php')" class="add_set_client">
                    <div><button id="btn1"><span class="material-symbols-outlined">settings</span></button> </div>
                    <div class="add_set"> <span>Set Goals</span></div>
                </div>

                <div onclick="open_link('set_reminders.php')" class="add_set_client">
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
                <button class="button-top" name="active-btn">Active</button>
                <button class="button-top" name="pending-btn" style="margin-left:2rem">Pending</button>
            </form>
        </div>
        <br><br>

        <div class="client-container">
            <?php
                if(isset($_POST['pending-btn']))
                {
                    $id = $_SESSION['name'] ;
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
                
                    echo "<div class='client-item'>";
                    echo "<div class='profile1' style='float:left; margin-right:10px;'><img src='./icons/profile6.png'></div>";
                    echo "<div class='profile2'>";
                    echo "<p style='font-weight:bold;text-transform:uppercase;'>".$row["name"]."</p>";
                    echo "<a href='client_profile.php?client_id=".$row['client_id']."'>Profile</a>";
                    echo "<div>";
                    echo "<div class='box1' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;
                    border-radius: 6px;padding:5px;margin-top:5px';margin-right:5px;>".$plan_name."</div>";
                    echo "<div class='box2' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;
                    border-radius: 6px;padding:5px;margin-top:5px;margin-left:5px;'>".$plan_duration." </div>";
                    echo "</div>";
    
                    echo "</div>";
                    echo "</div>";
    
                
                 }}}
                }
                else
                {
                    $id = $_SESSION['name'] ;
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
                 
                    echo "<div class='client-item'>";
                    echo "<div class='profile1' style='float:left; margin-right:10px;'><img src='./icons/profile6.png'></div>";
                    echo "<div class='profile2'>";
                    echo "<p style='font-weight:bold;text-transform:uppercase;'>".$row["name"]."</p>";
                    echo "<a href='client_dashboard.php?client_id=".$row['client_id']."'>Profile</a>";
                    echo "<div>";
                    echo "<div class='box1' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;
                    border-radius: 6px;padding:5px;margin-top:5px';margin-right:5px;>".$plan_name."</div>";
                    echo "<div class='box2' style='display:inline-block;background: #FFFFFF;
                    border: 1px solid #4B9AFB;
                    border-radius: 6px;padding:5px;margin-top:5px;margin-left:5px;'>".$plan_duration." </div>";
                    echo "</div>";
    
                    echo "</div>";
                    echo "</div>";
                
                 }}
                }
                ?>


        </div>

    </div>
    
    </div>
<script>
    function open_link(url){
        window.location.href = url;
    }
</script>
</body>
</html>