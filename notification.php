<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

    @font-face {
        font-family: 'NATS';
        src: url('./font/NATS.ttf.woff') format('woff'),
            url('./font/NATS.ttf.svg#NATS') format('svg'),
            url('./font/NATS.ttf.eot'),
            url('./font/NATS.ttf.eot?#iefix') format('embedded-opentype');
        font-weight: normal;
        font-style: normal;
    }

        /*--- Right bottom Div ---*/
.notification{
        font-family: 'NATS';
        font-style: normal;
        font-weight: 400;
        display: flex;
        flex-direction: column;
}

#notification-content{
        font-size: 2.2rem;
        position: relative;
        left: 10px;
        top: 25px;
}

.all-notification{
    position: relative;
    display: flex;
    flex-direction: row;
    width: 63%;
    justify-content: space-between;
    align-items: center;
    font-size: 22px;
    margin: 10px 0 5px 85px; 
}

.one{
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        width: 60%;
        margin: 0 0 0 120px;
        font-size: 20px;
        line-height: .8;
}

@media all and (max-width: 576px) {
    
    #notification-content{
        left: 0;
        margin: 0 auto 40px auto;
    }

    .all-notification{
        width: 60%;
        margin: 0 auto 20px auto;
    }

    .one{
        margin: 0 auto;
    }
}

    /*--- Toggle Switch ---*/

input[type="checkbox"].toggle {
  opacity: 0;
  position: absolute;
  left: -9000px;
  top: -9000px;
}

input[type="checkbox"].toggle + label {
  position: relative;
  display: flex;
  align-items: center;
  cursor: pointer;
}

input[type="checkbox"].toggle + label::before {
  content: "";
  width: 43.96px;
  height: 22.41px;
  background-color: #ddd;
  border-radius: 1em;
  margin-right: .25em;
  transition: background-color 200ms ease-in-out;
}

input[type="checkbox"].toggle + label::after {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  content: "";
  left: .2em;
  width: 13.79px;
  height: 13.79px;
  background-color: #FFFFFF;
  color: white;
  border-radius: 1em;
  transition: background-color 200ms ease-in-out, transform 200ms ease-in-out;
}

input[type="checkbox"].toggle:checked + label::before {
  background-color: #8C68F8;
}

input[type="checkbox"].toggle:checked + label::after {
    left: .45em;
  content: "";
  transform: translateX(100%);
  background-color: #fff;
}
</style>
<body>
<?php
    include("navbar.php")
    ?>

<div class="notification">
        <p id="notification-content">Notification Settings</p>
            <div class="all-notification">
                <p>All Notifications</p>
                <input type="checkbox" id="check1" class="toggle">
                <label for="check1"></label>
            </div>
                    <div class="one">
                        <p>Client Updates</p>
                            <input type="checkbox" id="check2" class="toggle">
                            <label for="check2"></label>
                    </div>
                    <div class="one">
                        <p>Consultation Reminders</p>
                            <input type="checkbox" id="check3" class="toggle">
                            <label for="check3"></label>
                    </div>
                    <div class="one">
                        <p>Appointments</p>
                            <input type="checkbox" id="check4" class="toggle">
                            <label for="check4"></label>
                    </div>
                    <div class="one">
                        <p>Notification to clients when going live</p>
                            <input type="checkbox" id="check5" class="toggle">
                            <label for="check5"></label>
                    </div>
                    <div class="one">
                        <p>New Message updates</p>
                            <input type="checkbox" id="check6" class="toggle">
                            <label for="check6"></label>
                    </div>
                    <div class="one">
                        <p>Payment Notifications</p>
                            <input type="checkbox" id="check7" class="toggle">
                            <label for="check7"></label>
                    </div>
                    <div class="one">
                        <p>Upcoming Calls with Clients</p>
                            <input type="checkbox" id="check8" class="toggle">
                            <label for="check8"></label>
                    </div>
                
    </div>
</body>
</html>