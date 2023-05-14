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
        src: url('font/NATS.ttf.woff') format('woff'),
        url('font/NATS.ttf.svg#NATS') format('svg'),
        url('font/NATS.ttf.eot'),
        url('font/NATS.ttf.eot?#iefix') format('embedded-opentype'); 
    font-weight: normal;
    font-style: normal;
}

    ::placeholder {
        /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
        opacity: 1;
        /* Firefox */
}

   
body {
        /* height: 100vh; */
    overflow: auto;
    font-family: 'NATS', sans-serif;
        font-weight: 400;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
        font-family:'NATS';
    font-style: normal;
    font-weight: 500;
        font-size: 20px;
    padding-bottom: 20px;
}

.input-tag {
        height: 40px;
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
        border-radius: 7px;
        padding:0px 0px 0px 1rem;
    color: #C4C4C4;
        display: flex;
        align-items: center;
        margin-top: 0.3rem;
}


.container {
    width: 100% !important;
}

.row {
        width: 100%;
        /* margin-top: 10px;
        margin-left: 2rem; */
}

.editBtn {
        border: 2px solid #7282FB;
    border-radius: 10px;
        /* padding: 5px; */
    background-color: white;
    color: #7282FB;
        /* width:18%; */
        width: 197px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none !important;
}
    .client-form{
        display: flex;
        align-items: center;
        width: 100% !important;
        /* border: 2px solid red; */
        flex-direction: column;
        margin-bottom: 4rem;
}
    .form-row{
        margin-bottom: 1rem;
        width: 60% !important;
    }
    .form{
        width: 45%;
    }
    @media screen and (max-width: 725px) {
        .heading{
            margin-left: 0rem !important;
            font-size: 30px !important;
    }
        .client-form {
            width:100% ;
            display: flex !important;
            flex-direction: column !important;
    }
        .form-row {
            width: 100% !important;
            flex-direction: column !important; 
            gap: 0px !important;
            margin-bottom: 0rem !important;
    }
        .form{
            margin-bottom: 1rem !important;
            width: 100% !important;
        }
        h4 {
            /* margin-bottom: 2rem !important; */
            font-size: 25px !important;
}

        .ronald {
            width: 90px !important;
            height: 90px !important;
    }
  
        .editBtn {
            /* width:25% !important;
            height: 52px !important; */
            width: 110px;
            height: 52px;
        }
        .edit-profile{
            font-size: 20px !important;
        }
        .name {
            margin-top: 0 !important;
            font-size: 25px !important;
        }
    }
/*********media query for mediun devices*************/
@media screen and (min-width: 725px) and (max-width: 1200px) {
    .form-row{
        width: 100% !important;
    }
    /* .edit-profile{
            font-size: 20px !important;
        } */
        /* .editBtn {
            width:30% !important;
            height: 52px !important;
            padding: 0px !important;
        }   */
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
                <div class="d-flex justify-content-between align-items-center ps-4 pe-4">
                    <h4 class="heading" style="font-size: 42px;margin-left:2rem;">Client Profile</h4>
                    <!-----------------------------EDIT BUTTON---------------------------------->


                        <a class="editBtn" name="edit_client" 
                            href="update_client_profile.php?client_id=<?php echo $client_id?>"><p class="mb-0 edit-profile" style="font-size: 27px;" > Edit Profile</p></a>
                   
                </div>    
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center" style="gap:20px; margin: 2rem;">
                            <div class="" style="display:inline-block;"><img class="ronald"
                                    style="height:150px;width:150px;border-radius:50%;" src="images/ronalduser.png"
                                    alt=""></div>
                            <div style="font-size: 30px;display: flex; align-items: center;" class="name" style="display:inline-block">
                                <?php echo $row['name'] ?>
                        </div>
                    </div >
                        <div class="client-form">
                        <div class=" form-row d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                            <div class="form">
                                <div>Email</div>
                                <div class=" input-tag">
                                    <?php echo $row['email'] ?>
                            </div>
                            </div>
                            <div class="form">
                                <div class="">Phone No.</div>
                                <div class=" input-tag">
                                    <?php echo $row['phone'] ?>
                        </div>
                            </div>
                            </div>
                        <div class="form-row  d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                            <div class="form">
                                <div class="">Gender</div>
                                <div class=" input-tag">
                                    <?php echo $row['gender'] ?>
                        </div>
                            </div>
                            <div class="form">
                                <div class="">Height</div>
                                <div class="input-tag">
                                    <?php echo $row['height'] ?>
                            </div>
                        </div>
                            </div>
                        <div class="form-row  d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                            <div class="form">
                                <div class="">Age</div>
                                <div class=" input-tag">
                                    <?php echo $row['age'] ?>
                            </div>
                        </div>
                            <div class="form">
                                <div class="">About</div>
                                <div class=" input-tag">
                                    <?php echo $row['about'] ?>
                            </div>
                            </div>
                        </div>
                        <div class="form-row  d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                            <div class="form">
                                <div class="">Weight</div>
                                <div class=" input-tag">
                                    <?php echo $row['weight'] ?>
                                </div>
                            </div>
                            <div class="form">
                                <div class="">Duration</div>
                                <div class=" input-tag">
                                    <?php echo $months ?> Months
                                </div>
                            </div>
                        </div>
                        <div class="form-row  d-flex flex-row w-100 justify-content-center align-items-center gap-5">
                            <div class="form">
                                <div class="">Plan</div>
                                <div class=" input-tag">
                                    <?php echo $row1['name'] ?>
                                </div>
                            </div>
                            <div class="form">
                                <div class="">Location</div>
                                <div class=" input-tag">
                                    <?php echo $row2['location'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                        <!-----------------------------EDIT BUTTON---------------------------------->
                        <!-- <div class="row d-flex justify-content-center align-items-center">

                            <a class="editBtn" name="edit_client" style="width:20%;text-align:center"
                                href="update_client_profile.php?client_id=<?php echo $client_id?>">Edit Profile</a>


                        </div> -->

                    </div>
                    <?php
      }?>
                </form>
            </div>
</body>

</html>