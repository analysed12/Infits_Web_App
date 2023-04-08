<?php
include 'navbar.php';
// if(isset($_SESSION['dietitianuserID'])){
//     $conn = new mysqli("localhost", "root", "", "infits");
//     if($conn->connect_error){
//         die("Connection failed :" . $conn->connect_error);
//     }
//     $tasks_id = $_SESSION['dietitianuserID'];
//     $sql="SELECT count(*) FROM dietition_tasks WHERE `dietitianuserID`='$tasks_id' ";
//     $result = $conn->query($sql);
//     if(empty($result->fetch_assoc())){
//         header('Location:tasklist.php');
//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />    

    <title>Task List</title>
  
</head>
<style>
  body{
    overflow-x: hidden;
  }
  ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #BBBBBB;
  opacity: 1; /* Firefox */
  padding:5px;
  }
 
#main {
    font-family: 'NATS';
    font-weight: 400;
    font-style: normal;
    /* padding-left: 4rem; */
    padding-top: 1rem;
    display: flex;
    flex-direction: column;
    gap:1rem;
    
    
}
.text{
  position: absolute;
  bottom: -150px;
  display: flex;

font-weight: 500;
}
.searchbar{
      display:flex;
      align-items: center;
      padding-left: 1rem;
      width: 349px;
      background: #FFFFFF;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
      border-radius: 10px;
    }
.col{
    padding: 0;
}
.title-bar {
    display: flex;
    justify-content: space-between;
    padding: 0 60px;
}
.heading{
    font-size: 48px;
}
.tabs-title {
    margin: 20px 0;
}
.client-card-container {
    padding: 40px 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
    gap: 20px;
}
.client-card {
    display: flex;
    justify-content: space-between;
    align-items: center;
    /* gap: 14rem; */
}
.bartab{
      padding-bottom: 0.5rem;
      /* color:black; */
    }
    .bartab:hover{
      border-bottom: 3.59764px solid #9E5EF4;

    }
    .bartab:active{
      border-bottom: 3.59764px solid #9E5EF4;
    }
    .bartab:focus{
      border-bottom: 3.59764px solid #9E5EF4 !important;
    }

.ccard-left {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 30px;
}

img.profile {
    width: 56px;
    height: 56px;
    border-radius: 100px;
}

span.client-name {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 27px;
    line-height: 88%;
    color: #000000;
}

button.btn {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 42px;
    color: #9E5EF4;

}

.ccard-right {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 20px;
}

span.date {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 42px;
    color: #CACACA;
}

span.time {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 20px;
    line-height: 42px;
    color: #CACACA;
}

.verified-client {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.verified-client span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 27px;
    line-height: 57px;
    color: #96C362;
}

.pending-client {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.pending-client span {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 27px;
    line-height: 57px;
    color: #FF0000;
}
@media (min-width:992px) {
    .gap-lg-6 {
        gap: 10rem!important;
    }
}
.code-box {
    background: #FFFFFF;
    box-shadow: 0px 2.48366px 6.20915px rgba(0, 0, 0, 0.25);
    border-radius: 18.6275px;
    width: 347px;
    height: 263px;
    display: flex;
    align-items: center;
    flex-direction: column;
    justify-content: center;
    gap: 15px;
    padding-top: 25px;
}

.code-box h4 {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 88%;
/* identical to box height, or 22px */
    display: flex;
    align-items: center;
    text-align: center;
    color: #000000;
}

.code-box .vcode {
    width: 238px;
    height: 63px;
    background: #4B9AFB;
    border: 1.24183px solid #4B9AFB;
    border-radius: 15px;
    justify-content: center;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 25px;
    line-height: 88%;
/* or 22px */
    display: flex;
    align-items: center;
    text-align: center;
    color: #FFFFFF;
}

p {}

.code-box p {
    width: 238px;
    height: 45px;
    background: #FFFFFF;
    border: 1px solid #9E5EF4;
    border-radius: 10px;
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 18px;
    line-height: 38px;
    display: flex;
    align-items: center;
    color: #9E5EF4;
    display: flex;
    justify-content: center;
    animation: c;
}

.dietitian-code {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    height: 100%;
    gap: 50px;
    position: relative;
}

.text-box {
    max-width: 80%;
}

.text {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    display: flex;
    align-items: center;
    color: #000000;
}

.text-box .text h3 {
    font-size: 24.8366px;
    line-height: 144%;
    color: #000000;
}
.tab,.share-btn{
    cursor: pointer;
}
.tab-content{
    display: none;
}
.share-pop {
    width: 404.99px;
    height: 169.57px;
    background: #FFFFFF;
    box-shadow: 0px 0px 30.7014px rgba(0, 0, 0, 0.25);
    border-radius: 23.026px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.profilepopup {
    width: 804.99px;
    padding:25px;
    background: #FFFFFF;
    box-shadow: 0px 0px 30.7014px rgba(0, 0, 0, 0.25);
    border-radius: 23.026px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 15px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.socials {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
}

.share-pop h4.title {
    font-family: 'NATS';
    font-style: normal;
    font-weight: 400;
    font-size: 27.9689px;
    color: #000000;
}
.popup1{
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 500ms;
  
  
}
.popup2{
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.6);
  transition: opacity 500ms;
  
  
}
.inputrow{
  display:flex;
  gap:2rem;
  justify-content: center;
}
.inputbar1{
  width: 294.98px;
height: 45.8px;
background: #FFFFFF;
box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.25);
border-radius: 10px;
border:none;
}
 .close {
  position: absolute;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
  background:none;
  border:none;
}
 .close:hover {
  color: #06D85F;
}
@media screen and (max-width: 500px){
  #flexchange{
        display: flex;
        flex-direction: column;
        gap:1rem;
      }
}
@media screen and (max-width: 720px){
      .img111{
        display: none;
      }
      .img112{
        display: none;
      }
      .searchbar{
        width:auto;
        height: 35px;

      }
      .tabsss{
        margin-left:2rem;
      }
      .code-box{
        margin-left:2rem;
      }
      .profilepopup{
        width:auto;
      }
      .inputbar1{
        width:auto;
      }
      .vcode_footer{
        margin-left: 2rem;
      }
     
    }
</style>
<body>
    <div id="main">

        <div class="row mt-3">
            <div class="col">
                <div class="title-bar">
                    <div class="heading">
                        <h1>Add Client</h1>
                    </div>
                    <div class="searchbar" >
                    <img src="images/vec_search.png" style="margin-right:1rem">
                    <input type="text" style="border:none;width:70%" placeholder="Search Clients">
                  </div>
                </div>
            </div>
        </div>
        <div class="row tabs-title mt-3 mb-3 tabsss" style="margin-top:2rem !important">
            <div class="col-4 tab " tab="vcode">
                <h3 class="text-center  bartab">Verification Code</h3>
            </div>
            <div class="col-4 tab" tab="vclients">
                <h3 class="text-center  bartab">Verified Clients</h3>
            </div>
            <div class="col-4 tab" tab="pclients">
                <h3 class="text-center  bartab">Pending Verification</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">

            <!----------verified clients--------------------> 
                <div id="vclients" class="tab-content client-card-container">
                    <div id="flexchange" class="client-card gap-1 gap-md-3 gap-lg-6 ">
                        <div class="ccard-left gap-md-2 gap-lg-5">
                            <img class="profile" src="images/client1.png" alt="">
                            <span class="client-name">Cheeku</span>
                            <button type="button" class="btn" id="btn_verified">profile</button>
                        </div>
                        <div class="ccard-right gap-md-2 gap-lg-5">
                            <span class="date">Dec 23,2022</span>
                            <span class="time">18:52</span>
                            <div class="verified-client">
                                <span>Verified!</span>
                                <img src="images/Approval.svg" alt="">
                            </div>
                        </div>
                    </div>
                    
                   
                </div>


<!--------------pending verification----------------> 
                <div id="pclients" class="tab-content client-card-container">
                    <div  id="flexchange" class="client-card gap-1 gap-md-3 gap-lg-6">
                        <div class="ccard-left gap-md-2 gap-lg-5">
                            <img class="profile" src="images/client1.png" alt="">
                            <span class="client-name">Cheeku</span>
                            <button type="button" class="btn" id="btn_pending">profile</button>
                        </div>
                        <div class="ccard-right gap-md-2 gap-lg-5">
                            <span class="date">Dec 23,2022</span>
                            <span class="time">18:52</span>
                            <div class="pending-client">
                                <span>pending!</span>
                                <img src="images/pending-client.svg" alt="">
                            </div>
                        </div>
                    </div>
                    
                </div>



                <!----------verification code--------------------> 


                <div id="vcode" class="dietitian-code tab-content " >
                    <div style="display: flex;justify-content: center">
                    <img  class="img112" src="images/lilac user icon.png" style="width:20%; right:15%;position: absolute">
                    <div class="code-container">
                        <div class="code-box">
                            <h4>Your Verification Code</h4>
                            <p class="vcode">XXXXXXXXXXX</p>
                            <p class="share-btn" style="display:flex;gap:1rem" > <img src="images/shareeee.png" alt="">Share Verification Code</p>
                        </div>
                    </div>
                    <img  class="img111"src="images/lilac user icon (1).png" style="width:18%;position:absolute;left:18%;bottom:10%" >
                    </div>
                    <div class="vcode_footer"style="display:flex;gap:1rem;margin-top:3rem">
                <div ><img src="images/vec_active_help.png" ></div>
                <div><p style="font-size: 20px;">This verification code will help you connect with the clients. You can share the code with your clients so that 
                  they can verify the code and succesfully connect with you!</p></div>
              </div> 
              
            </div>
            <!----------SHARE POPUP-------------------->                    
            <div class="popup1" id="popup1" style="display:none">
                    <div  class="share-pop">
                        <h4 style="text-align: center;" class="title">Share Via</h4>
                        <a class="close" href="add_client.php" style="top:15%;right:7%">&times;</a>
                        <div class="socials">
                            <img src="images/WhatsApp.svg" alt="">
                            <img src="images/Twitter.png" >
                            <img src="images/Facebook.png" >
                            <img src="images/LinkedIn_Circled.png" >
                            <img src="images/Instagram.png" >
                        </div>
                    </div>
                    </div>
  <!----------profile POPUP for verified clients and pending verification-------------------->     
                    <div class="popup2" id="popup2"  style="display:none">
                    <div  class="profilepopup">
                      <div class="profilehead" style="display:flex;gap:1.5rem;justify-content:center;align-items:center">
                        <img src="images/ronalduser.png" style="width:25%">
                        <p style="font-size:27px;display:flex;font-weight:500">Ronald Richards</p>
                        <a class="close" href="add_client.php" style="top:5%;right:7%">&times;</a>
                      </div>


                      <div class="inputrow">
                        <div>
                          <p>Email</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                        <div>
                          <p>Phone No</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                      </div>

                      <div class="inputrow">
                        <div>
                          <p>Gender</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                        <div>
                          <p>Height</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                      </div>

                      <div class="inputrow">
                        <div>
                          <p>Age</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                        <div>
                          <p>About</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                      </div>


                      <div class="inputrow">
                        <div>
                          <p>Weight</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                        <div>
                          <p>Duration</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                      </div>


                      <div class="inputrow">
                        <div>
                          <p>Plan</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                        <div>
                          <p>Location</p>
                          <input type="text" class="inputbar1" placeholder="---------">
                        </div>
                      </div>
                        
                    </div>
                    </div>
                </div>
            </div>
        </div>


        
    </div>
    <script>
        const tab =document.querySelectorAll('.tab');
        tab.forEach(el => {
            el.addEventListener('click', function(){
                const id = el.getAttribute('tab');
                document.querySelectorAll('.tab-content').forEach(element => {
                    element.style.display = 'none';
                });
                document.getElementById(id).style.display = 'flex';
            })
        });
        tab[0].click();

        const shareBtn =document.querySelector('.share-btn');
        shareBtn.addEventListener('click',()=>{
            document.querySelector('.popup1').classList.toggle('d-flex');
        })

        //profile popup javascript
        function showDiv() {
        var div = document.getElementById('popup2');
        div.style.display = 'block';
        }
        function showDivButton1() {
          showDiv();
        }
        function showDivButton2() {
          showDiv();
        }
        var button1 = document.getElementById('btn_verified');
        var button2 = document.getElementById('btn_pending');
        button1.addEventListener('click', showDivButton1);
        button2.addEventListener('click', showDivButton2);


  
       
    </script>
</body>
</html>