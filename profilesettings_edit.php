<?php
        include "navbar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFITS</title>

</head>
<style>
     body {
        font-family: 'NATS', sans-serif !important;
        font-weight: 400;
            
        }
        ::placeholder {
            color: #AEAEAE;
            padding:10px;
        }
    .maincontainer{
        display:flex;
        flex-direction: column;
        padding-top: 2rem;
        padding-left:2.5rem;
        padding-right:4rem;
    }
    .maincontainer_wrapper{
        display: flex;
        justify-content: space-between;
        font-size: 25px;
        
    }
    
     .input_field{
        width:342px;
        height: 48px;
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border:none;
        padding: 10px;
        color: #AEAEAE;

    }
    .gender{
        width: 157px;
        height: 48px;
        background: #FFFFFF;
        box-shadow: 0px 1.7px 5px rgba(0, 0, 0, 0.25);
        border-radius: 10px;
        border:none;
        padding: 10px;
        color: #AEAEAE;

    }
    .editbutton{
width: 342px;
height: 48px;
background: #0177FD;
border-radius: 10px;
color:white;
border:none;
font-size: 29px;
display:flex;
justify-content: center;
align-items: center;
text-decoration: none;
margin-top: 3rem;
    }
    .sharebutton{
        width: 342px;
height: 48px;
border-radius: 10px;
font-size: 29px;
background: #FFFFFF;
border: 2px solid #0177FD;
display:flex;
justify-content: center;
align-items: center;
text-decoration: none;
margin-top: 3rem;
color: #0177FD;

    }
    .footer{
        display:flex;
        gap:14.5%;

    }
       
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup {
    
  margin: 290px ;
  margin-left:550px;
  padding: 20px;
  background: #fff;
  box-shadow: 0px 0px 34.0377px rgba(0, 0, 0, 0.25);
border-radius: 25.5283px;
  width: 400px;
  position: relative;
  transition: all 5s ease-in-out;
  
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: Tahoma, Arial, sans-serif;
}
.popup .close {
 
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
  background:none;
  border:none;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
.my-modal {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.6);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .my-modal:target {
        visibility: visible;
        opacity: 1;
    }

    .modal-img {
        margin: 290px;
        margin-left: 480px;
        margin-top: 190px;
        padding: 20px;
        background: #fff;
        border-radius: 34px;
        width: 501px;
        height: 250px;
        position: relative;
        box-shadow: 0px 0px 34.0377px rgba(0, 0, 0, 0.25);
    }

    .modal-img .pop {
        margin-top: 15px;
        margin-left: 10px;
    }

    .modal-img .upload {
        gap: 1.5rem;
        margin-left: 40px;
        margin-top: 20px;
    }

    .modal-img .upload .upload-btn {
        width: 200px;
        height: 50px;
        border-radius: 8px;
        border: none;
        margin-top: 8px;
        box-shadow: 0px 1.5px 1.5px 1.5px rgba(0, 0, 0, 0.15);
        background-color: #FFFFFF;
        Font size: 20.42px;
    }

    .modal-img .upload .upload-btn .up {
        margin-left: 40px;
        margin-bottom: 8px;
    }

    .modal-img .upload .upload-btn .del {
        margin-left: 20px;
        margin-bottom: 8px;
    }


    .modal-img .img-close {
        position: absolute;
        top: 2px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
        background: none;
        border: none;
    }

    .modal-img .close:hover {
        color: #06D85F;
    }

    .modal-img .content {
        max-height: 30%;
        overflow: auto;
    }
    .modal {
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        transition: opacity 500ms;
        align-items: center;

    }

    .modal-content {
        width: 440px;
        height: 300px;
        padding: 20px;
        border-radius: 25px;
        margin: 210px;
        margin-left: 500px;
        margin-top: 220px;
        overflow: hidden;
    }

    .modal-content .close {
        position: absolute;
        top: 10px;
        right: 20px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
        background: none;
        border: none;
    }

    .modal-content #socials {
        margin-top: 30px;
        height: 55px;
        background-color: white;
        box-shadow: 0px 1.76208px 5.28625px rgba(0, 0, 0, 0.25);
        border-radius: 8.81041px;
        color: #BBBBBB;
        width: 390px;
        Font size: 21.14px;
        display:flex;
        align-items:center;
    }
    .addBtn1 {
        border: none;
        background: #8C68F8;
        border-radius: 8px;
        width: 185px;
        height: 50px;
        color: white;
        display:flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
        margin-right: 0.7rem;
    }

    .discard {
        border: 2px solid #8C68F8;
        background: white;
        border-radius: 8px;
        padding: 0.5rem;
        width: 182px;
        height: 50px;
        display:flex;
        justify-content: center;
        align-items: center;
        font-size: 20px;
    }
    .d-flex{
    display: flex!important;
    justify-content: center;
    }
 
       
    @media screen and (max-width: 350px){
        .gender{
        width:100px !important;
    }
    }
    @media screen and (max-width: 1200px){
        .input_field{
        width:auto !important;
    }
    .editbutton{
        width:auto !important;  
    }
    .sharebutton{
        width:auto !important;  
    }
    .footer{
        display:flex;
        flex-direction: column;
        justify-content: center;
        gap:0rem;

    }
    .maincontainer{
        padding-right: 2rem;
    }
    .popup {
            margin-left:10% !important;
            margin-right:10% !important;
            width:auto
        }
        .modal-img{
            margin-left:10% !important;
            margin-right:10% !important;
            width:auto;

        }
        .modal-content{
            margin-left:10% !important;
            margin-right:10% !important;
            width:auto ;
        }
        .modal-content #socials{
            width:100%;
        }
        .modal-img .upload .upload-btn{
            width:auto;
        }

    @media screen and (max-width: 1120px){
        .maincontainer_wrapper{
        display: flex;
        flex-direction: column;
        justify-content: center;
        gap:1rem;
    }

    }

    }
</style>
<body>
    <div class="maincontainer">
    <h1 style="font-size:40px;fontweight:400;padding-bottom:1rem">Profile Settings</h1>
        <div class="maincontainer_wrapper">
            <div class="leftside" style="display:flex;flex-direction:column;gap:1rem">
            
            <span style="display:flex;flex-direction:column">
                        User ID <input type="text" class="input_field" placeholder="XXXXX" required>
            </span>
            <span style="display:flex;flex-direction:column">
                    Name <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Email <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Mobile No <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Qualification <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column" >
                   <span>
                   Password 
                    <span style="display:flex;align-items:center;justify-content:space-between " class="input_field"><input type="text"  id="password" placeholder="XXXXX" style="border:none;" required>
                    <img style="cursor: pointer"
                                src="images/eye.svg" id="eyeicon" alt="eye"></span>
                   </span>
                   <span style="font-size:15px;display:flex;justify-content:space-between"><a href="forgot_password.php">Change Paswword</a> <a href="forgot_password.php">Forget Password</a></span>
                </span>
               
                 
                

            </div>

            <div class="middle" style="display:flex;flex-direction:column;gap:1rem">
            <span style="display:flex;flex-direction:column">
                    Username <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>

                <span style="display:flex;flex-direction:column">
                    Location <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>


                <span style="display:flex;gap:1.5rem">
                <span style="display:flex;flex-direction:column">
                    Gender <input type="text"  placeholder="XXXXX" class="gender" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Age <input type="text"  placeholder="XXXXX" class="gender" required>
                </span>

                </span>

                <span style="display:flex;flex-direction:column">
                    Experience <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Refferal Code <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>
                <span style="display:flex;flex-direction:column">
                    Acheivements and Certificates <input type="text" class="input_field" placeholder="XXXXX" required>
                </span>

            </div>


            <div class="rightside" style="display:flex;flex-direction:column;justify-content:center;align-items:center;gap:2rem">
            <div class="profiles"
                        style="display:flex;flex-direction:column;position:relative; width:fit-content;">
                        <img src="images/Profile_dp.svg"
                            style="height: 150px; width: 150px; border-radius: 25px;z-index:-1;" alt="">
                        <a href="#popup2" class="edit" id="edit"
                            style="border:3px solid white; background:#0177FD; border-radius:50%; width:38px;height:38px;position:absolute;right:15px;bottom:18px;text-decoration: none;display:flex;align-items:center;justify-content:center">
                            <img src="images/Edit-Img.svg"></a>
                    
                    </div>
            <input class="chooseimage" id="chooseimage" type="file" name="my_image"
                style="width: 250px; display:none;" value="" required />
            <div style="display:flex;flex-direction:column;gap:2rem">
                <div style="display:flex;align-items:center;gap:1rem"><img src="images/WhatsApp.svg"><span>Whatsapp</span></div>
                <div style="display:flex;align-items:center;gap:1rem"><img src="images/twitter.svg"><span>Twitter</span></div>
                <div style="display:flex;align-items:center;gap:1rem"><img src="images/facebook.svg"><span>Facebook</span></div>
                <div style="display:flex;align-items:center;gap:1rem"><img src="images/LinkedIn-Circled.svg"><span>Linkdin</span></div>
                <div style="display:flex;align-items:center;gap:1rem"><img src="images/Instagram.svg"><span>Instagram</span></div>
            </div>
             <!-- Trigger/Open The Modal -->
             <button id="myBtn" style="border:none; background:none;"><img
                            src="images/edit.svg"></button>
                    <!-- The Modal -->
                    <div id="myModal" class="modal">
                        <!--Modal content-->
                        <div class="modal-content">
                            <span class="close"></span>

                            <form method="post" action=" " enctype="multipart/form-data">
                                <div class="form-floating">
                                    <select select class="form-select" id="socials"
                                        aria-label="Floating label select example">
                                        <option selected>Platform</option>
                                        <option value="whatsapp"><img src="images/WhatsApp.svg">WhatsApp</option>
                                        <option value="twitter">Twitter</option>
                                        <option value="facebook">Facebook</option>
                                        <option value="linkedin">LinkedIn</option>
                                        <option value="instagram">Instagram</option>
                                    </select>
                                    <br>
                                    <input type="text" placeholder="Copy link here..." name="link"
                                        style="width:100%;height:50px;background-color:white;box-shadow: 0px 1.76208px 5.28625px rgba(0, 0, 0, 0.25);border-radius: 8.81041px; color: #BBBBBB;border:none">
                                    <br>
                                    <div style="display:flex;justify-content:space-evenly;margin-top:35px;">
                                        <button type="submit" class="addBtn1" name="save_socials">Save Changes</button>
                                        <button class="discard">Discard</button>
                                    </div>
                                </div>
                        </div>
                    </div>
            

            </div>
            
        </div>
        <div class="footer">
            <button class="editbutton">Confirm Changes</button>
            <a id="sharebutton" class="sharebutton" style="text-decoration: none;" href="#popup1"> Share Profile</a>
        </div>

</div>

<!-------------------------------------POPUPS-------------------------------------------------->
<div id="popup1" class="overlay">
	<div class="popup">
		<div style="display:flex;justify-content:space-between;align-items:center">
        <h5>Share Via <img src="images/Share.svg" ></h5>
		<a class="close" href="#">&times;</a>
        </div>
        
		<div class="content" style="display:flex;gap:1rem;justify-content:center">
        <a href="whatsapp://send?text=The text to share!" data-action="share/whatsapp/share"><img src="images/WhatsApp.svg" ></a>
        <a class="twitter-share-button" href="https://twitter.com/intent/tweet"><img src="images/twitter.svg" ></a>
        <a href="https://www.facebook.com/sharer/sharer.php?u=#url" target="_blank"> <img src="images/facebook.svg" ></a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url={url}"><img src="images/LinkedIn-Circled.svg" ></a>
            <img src="images/Instagram.svg" >
		</div>
	</div>
    </div>

    <div id="popup2" class="my-modal">
        <div class="modal-img">
            <a class="img-close" href="#">&times;</a>
            <div class="d-flex pop">
                <img src="images/Profile_dp.svg">
                <div class="d-flex flex-column upload">
                    <button class="upload-btn" id="upload-btn" onclick="clickMe()">Upload New<img
                            src="images/Edit-Profile.svg" class="up"> </button>
                    <button class="upload-btn">Remove Picture<img src="images/del-Profile.svg"
                            class="del"></button>
                </div>
            </div>
        </div>
    </div>

       
  <script>
    let eyeicon = document.getElementById("eyeicon");
    let password = document.getElementById("password");
    eyeicon.onclick = function() {
        if (password.type == "password") {
            password.type = "text";
            eyeicon.src = "images/eye-open.png";
        } else {
            password.type = "password";
            eyeicon.src = "images/eye.svg";
        }
    }

    var upload = document.getElementById("upload-btn");
        var chooseimage = document.getElementById("chooseimage");

        function clickMe() {
            chooseimage.click();
        }
        var modal = document.getElementById("myModal");

                    // Get the button that opens the modal
                    var btn = document.getElementById("myBtn");

                    // Get the <span> element that closes the modal
                    var span = document.getElementsByClassName("close")[0];

                    // When the user clicks the button, open the modal 
                    btn.onclick = function() {
                        event.preventDefault(); //keeps page from refreshing
                        modal.style.display = "block";
                    }

                    // When the user clicks on <span> (x), close the modal
                    span.onclick = function() {
                        modal.style.display = "none";
                    }

                    // When the user clicks anywhere outside of the modal, close it
                    window.onclick = function(event) {
                        if (event.target == modal) {
                            modal.style.display = "none";
                        }
                    }

                    
    </script>
</body>
</html>