
<?php
  include('config.php');?>
<?php 
  $dtname = 'John';
  $sql = "select `referral_code` from `dietitian` where `name`= '{$dtname}'";
  $result = $conn ->query($sql);
  if($result -> num_rows > 0)
  {
    while ($row = $result ->fetch_assoc())
    {?>

    


<html>
    <title>Refer a friend</title>
    <head>
        <link rel="stylesheet" href="refer_friend.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    </head>
    <body>
        <!----sidenavbar--->
    <?php include("recipe_navbar.php")?>

        
 <div class="container">
            <div class="image">
                <img src=".\images\refer-friend.svg" style="top:0px; position:absolute;">
</div>
<div class="earn-title">
    <p><b>Earn Money By Refer<b></p>

</div>

<form action="search_friend.php" method="POST" id="form1">
<div class="code-area">
    <label name="cd-display" id="cd-ds">
        <?php
            echo $row['referral_code'];
         $_SESSION['code_value'] =$row['referral_code'];

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
        <img id="ser-ic"  src=".\images\search.svg" style="cursor:pointer;">
    </div>




 
 
<div id="frd-dsp">

  
  <table id="tbl_sty" style="position:absolute; left: 567px;top:567px; width: 460px;height:400px ">
    <thead>
        <tr>
            <td>#</td>
            <td></td>
            <td>Name</td>
            <td></td>
            <td>Mobile</td>
            <td colspan="4"></td>
            <td></td> 
        </tr>
    </thead>
    <?php
    $sql="select `name`,`mobile` from `dietitian` where `name` != '{$dtname}' limit 5";
 $result_frd = $GLOBALS['conn']  -> query($sql);
 $cnt=1;
 
 if($result_frd -> num_rows >0 )
 
 {
    
    while($row = $result_frd -> fetch_assoc()) 
    {?>
 



    <tbody>
        <tr>
            <td><?php echo $cnt?></td>
            <td></td>
            <td><?php echo $row['name']?></td>
            <td></td>
            <td><?php echo $row['mobile']?></td>
            <td colspan="4"></td>
            <td> Invite</td>
    

    </tr>
    <?php $cnt++; }}?>
 
    </tbody>
    </table>

    
    </div>


     

 

<!-----------------popup window--------->
<div class="pop1" id="pop1" style="width:369px; height: 450px; left: 593px; top: 220px;  border-radius: 32px;  background: #FFFFFF;
  position:fixed;border-color: black; display: none;">
   
    <span class="close" id="close"> &times;
    </span>
    <div class="image-css">
        <img src=".\images\code-use.svg">
    </div>
    <div class="msg-dis">
        <p id="msg">
             congratulations<br>
         code accepted .
    </p>
    </div>
    <div class="long-msg">
        <p id="lmsg"> One of your friends has joined by your referral code. Do more invitations to earn more.</p>
    </div>
    <?php
      $cv = $_SESSION['code_value'];
     $sql = "select `name`, `dietitianuserID` from `dietitian` where `referral_code`= '{$cv}' and
     `name`!='{$dtname}'";
     $getname= $conn ->query($sql);
     if($getname -> num_rows >0)
     {
        while($rw= $getname ->fetch_assoc())
            {?>  

    <div class="dv-id-dsp" style="width:280px; height:80px; text-align: center;"><p id="nm-id-dsp"><?php echo $rw['name']."  ".  $rw['dietitianuserID']." ".'used your code' ; } }else{echo"error";}?>
        
    </p> </div>
    </div>

    <!--------js code for popup---->
    {
        <script >

                var open_btn = document.getElementById("ser-ic");
                var cls_btn = document.getElementById("close");
                var modal = document.getElementById("pop1");
                open_btn.onclick = function(){
                    pop1.style.display ="block";
                }
                cls_btn.onclick = function (){
                 pop1.style.display = "none";
                 event.preventDefault();
                }
            
            
        </script>
        
    }
  
 </div> 
    </div>
    </form>
</body>
    </html>