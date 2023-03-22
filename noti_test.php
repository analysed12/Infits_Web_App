<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<style>
        
.notifications {
    display: flex;
    flex-direction: column;
    padding: 10px 25px 10px 5px;
    gap: 15px;
    overflow-y: scroll;
    overflow-x: hidden;
    height: 340px;
    
}
.notifications::-webkit-scrollbar{
    display: none;
}

.notification {
    display: flex;
    gap: 10px;
    align-items: center;
}
.notification .noti-description .title{
    font-size: 18px;
    line-height: 13px;
    color: #000000;
}

.noti-description {
    display: flex;
    flex-direction: column;
}

</style>


<script>

        localStorage.setItem('key', '0');
        setInterval(function() {
        $.ajax({
        url: 'noti_test.php',
        success: function(data) {
        $('#ref').html(data);
        }
        });
        }, 1800000);


        setInterval(function() {
        $.ajax({
        url: 'noti_test.php',
        success: function(data) {
        $('#2ref').html(data);
        }
        });
        }, 3600000);

</script>

<?php

function showAlert($message) {
        echo "<script>alert('$message');</script>";
      }



$time = date("Y-m-d H:i:s");
?>

<body>
        
       <div id="ref">
       <?php
        $conn = mysqli_connect('localhost','root', '', 'infits');
        if($conn == false){
                dir('Error: Cannot connect');
        }
        //change dietition_id to session variable 
        $sql = 'SELECT * FROM notification WHERE dietition_id = "Peter" AND read_or_not = "0" ORDER BY time DESC';
        $result = $conn->query($sql);
        
        ?>


        <div class="notifications">
        
                <?php
                if($result->num_rows > 0){

                        while($row = $result->fetch_assoc()){
                        echo('     <div class="notification">');
                        echo('          <img src="./upload/pp.jpg" alt="">');
                        echo('          <div class="noti-description">');
                        echo('              <span class="title">'.$row['message'].'</span>');
                        echo('              <span class="noti-time">'.($row['time']).'</span>');
                        echo('          </div>');
                        echo('     </div>');
                        }
      
                }

                else{
                        echo("no new notifcations");
                }

               

                ?>
        </div>
        <?php
        // 
        echo($time);
        $sql1 = "SELECT `dietitianuserID` FROM live WHERE 'dietitianuserID'= 'Peter' AND dateandtime BETWEEN NOW() AND ADDTIME(NOW(), '00:30:00')";
        $result1 = $conn->query($sql1);
        if($result1->num_rows > 0){
                while($row1 = $result1->fetch_assoc()){
                        $nameid = $row1['dietitianuserID'];
                        $sql2= "INSERT INTO `notification`(`dietition_id`, `message`, `time`, `read_or_not`) VALUES ('$nameid','You have a live session in 30 mins!',NOW(),'0')";
                        $conn->query($sql2);
                }}

        ?>

        </div>

        <div id="2ref">
        <?php

        //changes needed in dietition id while linking 
        $sql11 = 'SELECT * FROM notification WHERE dietition_id = "Peter" AND read_or_not = "0" ORDER BY time DESC LIMIT 1';
        $result11 = $conn->query($sql11);
        if($result11->num_rows > 0){
                while($row12= $result11->fetch_assoc()){
                        ?>
                         <script>

                               if(localStorage.getItem(key)=='0'){
                                       <?php
                                         showAlert($row12['message']);
                                         ?>
                                         localStorage.setItem('key', "1");
                                 } 
                        </script> 

                 <?php                      
                        $a = $row12['dietition_id'];
                        $b = $row12['message'];
                       $c = $row12['time'];

                        $sq = "UPDATE `notification` SET `read_or_not`='1' WHERE `dietition_id`='$a' AND `message`='$b' AND `time`='$c'"; 
                        $conn->query($sq);
                }
        }


        ?>
        </div>

</body>

</html>
