<?php
include "config.php";
?>
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
body {
    height: 100vh;
    overflow: auto;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    font-size: 15px;
    padding: 20px;
}

.input-tag {
    background: #FFFFFF;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
    border-radius: 5px;
    padding: 7px;
    color: #C4C4C4;
}


.container {
    width: 65% !important;
}

.row {
    width: 100% !important;
    margin-top: 10px !important;
    ;
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

input {
    border: none;
}
</style>

<body>
    <div id="page">
        <?php include 'navbar.php'; ?>

        <div id="content">

            <div class="add-client-area">
                <form method="post" action="update_client_profile.php">
                    <br>
                    <?php

$id = $_GET['id'];
echo $id ;
$sql = "SELECT * from `addclient` where client_id='$id'";
$result = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($result)){
            $id = $row["plan_id"] ;

                        $sql1 = "SELECT * FROM create_plan WHERE `plan_id`= $id";
                        $result1 = mysqli_query($conn, $sql1);
                        $row1 = mysqli_fetch_assoc($result1);
                        $date1 = strtotime($row1["start_date"]);
                        $date2 = strtotime($row1["end_date"]);
                        $months = 0;
                        
                        while (($date1 = strtotime('+1 MONTH', $date1)) <= $date2)
                            $months++;
            // echo;
        ?>

                    <h4>Client Profile</h4>
                    <div class="container">
                        <div class="d-flex justify-content-center align-items-center" style="gap:50px">
                            <div class="" style="display:inline-block;"><img
                                    style="height:100px;weight:100px;border-radius:50%;" src="images/profile-image.png"
                                    alt=""></div>
                            <div class="" style="display:inline-block"><?php echo $row['name'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Email</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['email'] ?>">
                            </div>
                            <div class="col">
                                <div class="row">Phone No.</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['phone'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Gender</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['gender'] ?>">
                            </div>
                            <div class="col">
                                <div class="row">Height</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['height'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Age</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['age'] ?>">
                            </div>
                            <div class="col">
                                <div class="row">About</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['about'] ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Weight</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['weight'] ?>">
                            </div>
                            <div class="col">
                                <div class="row">Duration</div>
                                <div class="row input-tag"><?php echo $months ?> Months</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="row">Plan</div>
                                <div class="row">
                                    <div class="input-tag"
                                        style="display:inline-block;width:50% !important; margin-right:10%;">
                                        <?php echo $row1['name'] ?></div>
                                    <a href="select_client_plan.php?id=<?php echo $id?>" class="" style="display:inline-block;width:40% !important;background: #FFFFFF;text-align:center;padding-top:5px;
border: 1px solid #6883FB;
border-radius: 8px;">Select</a>
                                </div>
                            </div>
                            <div class="col">
                                <div class="row">Location</div>
                                <input type="text" class="row input-tag" value="<?php echo $row['location'] ?>">
                            </div>
                        </div>
                        <div class="row d-flex justify-content-center align-items-center">

                            <button type=" submit" class="editBtn" name="edit_client" style="width:20%;
    margin-top:30px"><a href="client_profile.php">Edit Profile</a></button>


                        </div>

                    </div>
                    <?php
      }?>
                </form>
            </div>
</body>

</html>