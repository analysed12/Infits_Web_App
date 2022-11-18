<?php include('config.php')?>
<?php
if(isset($_POST['done']))
{
//$name = $_SESSION['client_name'];
$name='John';
 $code= $_POST['referral_code'];
 $sql="update create_client set `referalcode`='$code' where `clientName`='$name'";
$conn ->query($sql);

}?>




<html>
    <title>referral code</title>
    <head>
        <link rel="stylesheet" href="referral_code.css">
    </head>
    <body>
        <div class="container">
   
            <div class="wrapper">
                <div class ="image">
                    <img src="./images/referral_code.svg">
</div>
                    <div class="plan-title">
                        <p id="plan-p-tt">Plan Saved </p>
                        
</div>
<div class="para-space">
    <p class="text-para">Lorem ipsum dolor sit amet, consecteadipiscing elit, sed do eiusmod labore aliqua.</p>
</div>
 <div class="referral-space">

    <p id ="referral-title"> Referal Code</p>
</div>
<form id="form1" action="" method="POST">
    <input type="text" name="referral_code" id="referral_code_input" value ="<?php echo strtoupper(bin2hex(random_bytes(4)));?>"/>

 <button type="submit" name="done" id="done">Done</button>
</form>

</div>
</div>

</body>
</html>