<?php
include('connection.php');
?>
<?php 
// $id= $_SESSION['dietitian_id'];
$id = 'd005';
  $sql ="select `referral_code` from `dietitian` where `dietitianuserID` = '$id'";
  $result = $conn -> query($sql);
  if($result -> num_rows >0)
  {
    while ($row = $result->fetch_assoc())
    {  
         $GLOBALS['code']   = $row['referral_code'];
        ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="referral_friend_new.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>
    <div class="page">
        <!--------sidenav bar-------->
        <?php include('event_calendar.php'); ?> 
    <div class="searchfriend">
        <p style="font-size:1.5rem; font-weight:500">Refer to a friend</p>


        <div class="searchfriend_wrapper">


            <div class="searchfriend_container1">
                <div class="image1">
                <img src=".\images\refer-friend.svg" id=image1>
                </div>
                <div class="referal_code_section">
                    <label id="label1" name="code" id="code_display" style="height:50px; mwrgin-left:10px;"> <?php echo $row['referral_code']; }}?> </label>
                    
               
                   
                    <button onclick="copyText()" id="copy">Copy</button>
                    <script>
                        function copyText() {
                            var copyText = document.getElementById("code_display");

                            // Select the text field
                            copyText.select();
                            copyText.setSelectionRange(0, 99999); // For mobile devices

                            // Copy the text inside the text field
                            navigator.clipboard.writeText(copyText.value);

                        }
                   </script>
                </div>
                <button type="submit" id="share" name="share">Share</button>  
            </div>



            <div class="searchfriend_container2">
                <div>
                <p style="font-size:1rem; font-weight:500">Invite a friend 
                <span class="material-symbols-outlined"id="search" onclick ="search_fun()" style="cursor:pointer;">
                    search</span></p>
                </div>

                <div class="friends_display" id="frd_dsp" style="overflow-y:scroll; display:none;">
                    <table id="friends_table">
                       

                        <?php
                        $sql="select *  from `dietitian` where `dietitianuserID` != '{$id}'";
                        $result_frd = $GLOBALS['conn']  -> query($sql);
                        $cnt=1;
                        
                        if($result_frd -> num_rows >0 )
                        {   
                        while($row = $result_frd -> fetch_assoc()) 
                           
                        {
                             $ext= explode('|',$row['profilePhoto']);
                             $path = $ext[1];
                            
                            ?>

                        <tbody>
                            <tr>
                            <td><div class="img-display"  style="height:48px; width:50px; border-radius:50%;"> 
                     <img src="<?php echo $path;?>" alt="" title="<?php $ext[0];?>" style="height:100%; width:100%; object-fit:cover;"/>
                             </div></td> 
                            <td></td>
                            <td id="friend_name"><?php echo $row['name']; ?></td>
                            <td></td>
                            <td> </td>  
                            <td> </td>
                           
        
                               <td> <?php 
                                             $cd = $GLOBALS['code'];
                                        
                               if($row['referral_code'] == $cd){?>

                               <span style="color: green;">Approved</span>
                             <?php  }  else { ?> <span style="color: #4B9AFB;">  Invite </span>  <?php } ?>  </td>

                               <td> </td>
                            </tr>
                            <?php $cnt++; }}?>
                        
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
        
    </div>
                     </div>

                     <script>
                         var id = document.getElementById("frd_dsp");
                         function search_fun()
                         {
                              id.style.display ="block";
                         }

                        </script>
                        </body>

                        </html>
                        