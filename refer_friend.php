<?php 
  include('config.php');
  $sql = "select `referalcode` from `create_client` where `clientName`='John'";
  $result = $conn ->query($sql);
  if($result -> num_rows > 0)
  {
    while ($row = $result ->fetch_assoc())
    {?>

    


<html>
    <title>Refer a friend</title>
    <head>
        <link rel="stylesheet" href="refer_friend.css">
    </head>
    <body>
        <?php include('event_calendar.php');?>
        <div class="container">
            <div class="image">
                <img src=".\images\refer-friend.svg"></div>
<div class="earn-title">
    <p><b>Earn Money By Refer<b></p>

</div>

<form action="" method="POST" id="form1">
<div class="code-area">
    <label name="cd-display" id="cd-ds">
        <?php
            echo $row['referalcode'];
            $code_value =$row['referalcode'];

        }}?>
    </label>
    <label name="copy" id="co-cs">copy</label>
</div>
<button type="submit" id="share" name="share">SHARE</button>
</div>
<div class="invite-friend">
    <p id="p-in-fr">Invite a Friend</p>
</div>
    <div class="search-icon">
        <img src=".\images\search.svg">
</div>
</form>

<?php
//$code_value= $_POST['cd-display'];
$sql = "select `clientName` , `referalcode` from `create_client` where `referalcode`='$code_value' and `clientName`!= 'John'";
$result= $conn ->query($sql);
if($result ->num_rows == 1)
 {
    <script>
    </script>  

     }?>

 

<!-----------------popup window--------->
<div class="pop1" id="pop1" style="width:369px; height: 500px; left: 593px; top: 220px;  border-radius: 32px;  background: #FFFFFF;
  position:fixed; display:none;">
   
    <span class="close" id="close"> &times;
    </span>
    <div class="image-css">
        <img src=".\images\code-use.svg">
    </div>
    <div class="msg-dis">
        <p id="msg">
            Congratulations <br>
         code is accepted.
    </p>
    </div>
    <div class="long-msg">
        <p id="lmsg"> One of your friends has joined by your referral code. Do more invitations to earn more.</p>
    </div>
    </div>
</div>

    


</body>
    </html>