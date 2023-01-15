<?php  include('config.php');
//session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infits | Client List</title>

</head>
<style>
body {
    height: 100vh;
    overflow: auto;
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

.topnav-content #topnav-content-3 {
    font-family: 'Poppins';
    /* NATS */
    font-style: normal;
    font-weight: 400;
    /* font-size: 25px !important; */
    color: #000000;
}

#addclient-topnav {
    display: flex;
    width: 100%;
    align-items: center;
    font-family: 'NATS', 'Poppins';
    font-style: normal;
    font-weight: 400;
    font-size: 27px;
    color: #000000;
}

#addclient-topnav p {
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

#addclient-topnav-active {
    border-bottom: 5px solid #4B9AFB;
}

#clients {
    height: 60vh;
    padding: 30px;
    display: grid;
    grid-template-columns: 19% 19% 19% 19% 19%;
    column-gap: 1%;
    row-gap: 50px;
    overflow: scroll;
}

::-webkit-scrollbar {
    width: 0;
    /* Remove scrollbar space */
    background: transparent;
    /* Optional: just make scrollbar invisible */
}

.client {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.clientname {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 21px;
    color: #000000;
    margin-top: 5px;
}

.buttons {
    width: 70%;
    display: flex;
    justify-content: space-between;
}

.client button {
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

.profile {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    color: #4B9AFB;
    padding-top: 15px;
    height: auto;
    width: 100px;;
    text-align: center;
    /* border: 3px solid #4B9AFB; */
}

.profile a{
    background: #FFFFFF;
border: 1px solid #F1F1F1;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
border-radius: 8px;
border:none;
padding-left:10px;
padding-right:10px;
    width:100px !important;
}
#addclient-topnav p a {
    text-decoration: none;
    outline: none;
    color: #000000;
}

@media (max-width:1023px) {
    #contents {
        position: fixed;
        /* top: 10%; */
        width: 100vw;
    }

    #clients {
        grid-template-columns: 49% 49%;
        column-gap: 1%;
    }
}

#addclient-topnav button{
    /* border-left:none;
    border-right:none;
    border-top:none; */
    border:none;
    background-color:white;
    margin-right:10px;
    border-bottom:2px solid #4B9AFB;
    
}
/* 
#addclient-topnav button:focus{
    border-bottom:2px solid #4B9AFB;
} */
</style>

<body>
    <?php include 'navbar.php'; ?>

    <div id="contents">
        <h4>Client List</h4>
        <div id="addclient">
            <form id="addclient-topnav" method="post">
                <button id="addclient-topnav-active" name="active-btn">Active</button>
                <button id="addclient-topnav-pending" name="pending-btn">Pending</button>
            </form>
            <div id="clients">

                <?php 
                if(isset($_POST['pending-btn']))
                {
                    $sql = "SELECT * FROM addclient WHERE dietitianuserID='Azarudeen' AND status=0";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row["plan_id"] ;

                        $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $id";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $date1 = strtotime($row1["start_date"]);
                        $date2 = strtotime($row1["end_date"]);
                        $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
                        
                        // echo $months;

                        if(mysqli_num_rows($result1) > 0)
                    {
                        // $name_of_plan = $row1["name"];
                
                    echo "<div class='client'>";
                    echo "<div><img src='./icons/profile6.png'></div>";
                    // echo "<div class='clientname'>".$row["plan_id"]."</div>";
                    echo "<div class='clientname'>".$row["name"]."</div>";
                    echo "<div class='buttons'><button>".$row1["name"]."</button><button>".$months." Month</button></div>";
                    echo '<div class="profile"><a href="client_profile.php?id='.$row1['plan_id'].'">Profile</a></div>';
                    echo "</div>";
                
                 }}}
                }
                else
                {
                    $sql = "SELECT * FROM addclient WHERE dietitianuserID='Azarudeen' AND status=1";
                    $result = mysqli_query($conn, $sql);
                    if(mysqli_num_rows($result) > 0)
                    {
                      while($row = mysqli_fetch_assoc($result))
                    {
                        $id = $row["plan_id"] ;

                        $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $id";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $date1 = strtotime($row1["start_date"]);
                        $date2 = strtotime($row1["end_date"]);
                        $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
                        
                        // echo $months;

                        if(mysqli_num_rows($result1) > 0)
                    {
                        // $name_of_plan = $row1["name"];
                
                    echo "<div class='client'>";
                    echo "<div><img src='./icons/profile6.png'></div>";
                    // echo "<div class='clientname'>".$row["plan_id"]."</div>";
                    echo "<div class='clientname'>".$row["name"]."</div>";
                    echo "<div class='buttons'><button>".$row1["name"]."</button><button>".$months." Month</button></div>";
                    echo '<div class="profile"><a href="client_profile.php?id='.$row['client_id'].'">SELECT</a></div>';
                    echo "</div>";
                
                 }}}
                }
?>



                    
            </div>
        </div>
    </div>
</body>

</html>