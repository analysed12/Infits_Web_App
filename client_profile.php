<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <title>Infits | Client Profile</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


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

   
body {
    height: 100vh;
    overflow: auto;
    font-family: 'NATS', sans-serif;
    font-weight:400;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    padding-bottom: 20px;
}

.input-tag {
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 10px;
    padding: 7px;
    color: #C4C4C4;
}


.container {
    width: 100% !important;
}

.row {
    width: 87% ;
    margin-top: 10px ;
    margin-left:2rem;
}

.editBtn {
    border: 1px solid #7282FB;
    border-radius: 10px;
    padding: 10px;
    background-color: white;
    color: #7282FB;

}

.editBtn a:hover {
    outline: none !important;
}
@media screen and (max-width: 720px){
    .row{
        margin-left:0% !important;
        width:auto;
    }
    h4{
        margin-bottom:2rem !important;
    }
    .ronald{
        width:90px !important;
        height:90px !important;
    }
    .editBtn{
        width: 197px !important;
height: 52px !important;
    }
    .name{
        margin-top:0 !important;
    }
}

@media screen and (max-width: 400px){
    .row {
        display: block;
        width: 100%;
    }
  
}
</style>

<body>
    <div id="page">
       

        <div id="content">

            <div class="add-client-area">
                <form method="post" action="update_client_profile.php">
                    <br>
                    <?php
$client_id = $_GET['client_id'];
// echo $id ;
$sql = "SELECT * from `addclient` where client_id='$client_id'";
$result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            $plan_id = $row["plan_id"] ;

            $plan_id = $row["plan_id"] ;
            $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $plan_id";
            $sql2 = "SELECT * FROM client WHERE client_id = $client_id";
            $result1 = mysqli_query($conn, $sql1);
            $result2 = mysqli_query($conn, $sql2);
            $row1 = mysqli_fetch_assoc($result1);
            $row2 = mysqli_fetch_assoc($result2);
            $date1 = strtotime($row1["start_date"]);
            $date2 = strtotime($row1["end_date"]);
            $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
            // echo;
        ?>

                    <h4 style="font-size: 30px;margin-left:2rem">Client Profile</h4>
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center; margin-top:10px" style="gap:20px">
                            <div class="" style="display:inline-block;"><img class="ronald"
                                    style="height:150px;width:150px;border-radius:50%;" src="images/ronalduser.png"
                                    alt=""></div>
                            <div style="font-size: 30px;margin-top:50px"class="name" style="display:inline-block"><?php echo $row['name'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Email</div>
                                <div class="row input-tag"><?php echo $row['email'] ?></div>
                            </div>
                            <div class="col">
                                <div class="row">Phone No.</div>
                                <div class="row input-tag"><?php echo $row['phone'] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Gender</div>
                                <div class="row input-tag"><?php echo $row['gender'] ?></div>
                            </div>
                            <div class="col">
                                <div class="row">Height</div>
                                <div class="row input-tag"><?php echo $row['height'] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Age</div>
                                <div class="row input-tag"><?php echo $row['age'] ?></div>
                            </div>
                            <div class="col">
                                <div class="row">About</div>
                                <div class="row input-tag"><?php echo $row['about'] ?></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Weight</div>
                                <div class="row input-tag"><?php echo $row['weight'] ?></div>
                            </div>
                            <div class="col">
                                <div class="row">Duration</div>
                                <div class="row input-tag"><?php echo $months ?> Months</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Plan</div>
                                <div class="row input-tag"><?php echo $row1['name'] ?></div>
                            </div>
                            <div class="col">
                                <div class="row">Location</div>
                                <div class="row input-tag"><?php echo $row2['location'] ?></div>
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">

                            <a class="editBtn" name="edit_client" style="width:20%;margin-top:20px;text-align:center" href="update_client_profile.php?client_id=<?php echo $client_id?>">Edit Profile</a>


                        </div>

                    </div>
                    <?php
      }?>
                </form>
            </div>
</body>

</html>