<?php
include('event_calender.php');
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="Search_Friend.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Document</title>
</head>
<body>
    <div class="searchfriend">
        <p style="font-size:1.5rem; font-weight:500">Refer to a friend</p>


        <div class="searchfriend_wrapper">


            <div class="searchfriend_container1">
                <div class="image1">
                <img src=".\images\refer-friend.svg" id=image1>
                </div>
                <div class="referal_code_section">
                    <input type="text" name="code" id="code_display"  value="<?php 
                    $dtname = 'John Wayne';
                    $sql = "select `referal_code` from `dietitian` where `name`= '{$dtname}'";
                    $result = $conn ->query($sql);
                    if($result -> num_rows > 0)
                    {
                        while ($row = $result ->fetch_assoc())
                    {
                     echo $row['referal_code'];
                     $_SESSION['code_value'] =$row['referal_code'];
                     }}?>">
               
                   
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
                <p style="font-size:1rem; font-weight:500">Invite a friend <span class="material-symbols-outlined">search</span></p>
                </div>

                <div class="friends_display" style="overflow-y:scroll;">
                    <table id="friends_table">
                       

                        <?php
                        $sql="select `name`,`profilephoto` from `dietitian` where `name` != '{$dtname}' limit 5";
                        $result_frd = $GLOBALS['conn']  -> query($sql);
                        $cnt=1;
                        
                        if($result_frd -> num_rows >0 )
                        {   
                        while($row = $result_frd -> fetch_assoc()) 
                        {?>

                        <tbody>
                            <tr>
                            <td><?php echo $row['profilephoto']?></td>
                            <td id="friend_name"><?php echo $row['name']?></td>
                            <td></td>
                            
                            </tr>
                            <?php $cnt++; }}?>
                        
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
        
    </div>
    
</body>
</html>