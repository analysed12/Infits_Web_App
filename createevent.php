<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Create Event</title>
</head>
<style>
html {
    overflow-x: hidden;
}

#content {
    display: flex;
    flex-direction: column;
    height: 90%;
    font-family: 'Poppins';
    font-style: normal;
    font-weight: 500;
    /* font-size: 35px; */
    padding: 20px;
}

.event-form {
    width: 50%;
    padding: 2%;
    margin-left: 10%;
    /* background-color: palegoldenrod; */
}

.ev-img {
    display: flex;
    justify-content: center;
    align-items: center;
    /* width: 260px;
height: 190px; */
}

.event-image {
    width: 260px;
    height: 190px;
}

.event_title {
    font-size: 15px;
    font-weight: 800;
    margin-bottom: 15px;
}

.eve_form {
    /* background-color: azure; */
    padding: 10px;
    /* width: 60%; */

}

.subject {
    display: block;
    /* font-size: 18px;
    font-weight: bold; */
    width: 100%;
}

.rem-item {
    background: #FFFFFF;
    border: 1px solid #4B9AFB;
    border-radius: 45px;
    padding: 10px;
    margin: 10px;
    font-size: 18px;
}

.rem_icon {
    color: #4B9AFB;
    margin-right: 15px;
}



.content-name {
    position: absolute;
    bottom: 5px;
    left: 0px;
    transition: all 0.3s ease;
}



.form_btn {
    width: 100%;
    background: #4B9AFB;
    border-radius: 10px;
    color: white;
    text-align: center;
    padding: 15px;
    margin-top: 30px;
}

.txt {
    width: 100%;
    margin-bottom: 10px;
    margin-top: 15px;
    cursor: pointer;
}

.txt p{
    padding-left:15px;
}
.txticon {
    padding:10px;
}

.input-icons i {
    position: absolute;
}

.input-icons {
    width: 100%;
    margin-bottom: 10px;
    border: none;
}

.icon {
    padding: 10px;
    color: black;
    min-width: 50px;
}

.input-field {
    width: 100%;
    padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 50px;
}

/* POPUP */

.pop-box .button {
    font-size: 18px;
    text-decoration: none;
    color: black;
    border: 1px solid black;
    border-radius: 20px;
    margin-top: 20px;
    padding: 10px 20px;
}

.bg-popContainer {
    display: none;
}

.pop-box {
    width: 100%;
    height: auto;
    background: #FFFFFF;
    border: 1px solid rgba(225, 225, 225, 0.66);
    box-shadow: 0px 11px 25px rgba(0, 0, 0, 0.1);
    padding: 20px;
    position: relative;
}

.cont {
    border-radius: 20px;
}

input {
    width: 50%;
    display: block;
    margin: 15px auto;
    padding: 5px;
}

.closer {
    position: absolute;
    top: 0;
    right: 14px;
    font-size: 30px;
    transform: rotate(45deg);
    cursor: pointer;
}

::placeholder {
  color: black;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: black;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: black;
}
/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {
    #content {
        /* padding: 0 !important; */
    }

    .event-form {
        /* height: 100%; */
        margin-left: 0 !important;
        width: 100%;
        display: flex;
        /* justify-content: center; */
        justify-content: space-around;
        align-items: center;
        flex-direction: column;
    }

}
</style>

<body>
    <!-- Navbar Start -->
    <?php
    include("navbar.php")
    ?>
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">
        <div class="event-form">
            <div class="ev-img">
                <img class="event-image" src="images/eventlist.png" alt="">
            </div>
            <br>
            <div class="eve_form">
                <label for="subject" class="event_title">EVENT NAME</label>
                <!-- <input class="subject" type="text" name="subject" placeholder="Category" style="padding:10px 0px;"> -->
                <select class="subject" type="text" name="subject" placeholder="Category" style="padding:10px 0px;">
                    <option value="consultation">Consultation</option>
                    <option value="dietplan">Diet Plan</option>
                    <option value="followup">Follow Up</option>
                </select>
                <br>
                <div class="reminder">
                    <div class="event_title">REMINDER TYPE</div>
                    <div class="rem">
                        <div style="display: inline-block;" class="rem-item"><i
                                class="fa-solid fa-suitcase rem_icon"></i>Consultation</div>
                        <div style="display: inline-block;" class="rem-item"><i
                                class="fa-solid fa-apple-whole rem_icon"></i>Diet Plan</div>
                        <div style="display: inline-block;" class="rem-item"><i
                                class="fa-solid fa-phone rem_icon"></i>Call
                        </div>
                        <div style="display: inline-block;" class="rem-item"><i
                                class="fa-solid fa-add rem_icon"></i>Others


                        </div>
                    </div>
                    <br>
                    <div class=" event_title">EVENT DETAILS</div>

                    <form style="max-width:100%;margin:auto">
                        <div class="input-icons">
                            <i class="fa-solid fa-user icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="password" placeholder="Add Client">
                        </div>
                        <div class="input-icons">
                            <i class="fa-solid fa-suitcase icon">
                            </i>
                            <select style="border-top:none;border-left:none;border-right:none" class="input-field">
                                <option value="select">Meeting Type</option>
                                <option value="videocall">Video Call</option>
                                <option value="call">Call</option>
                                <option value="3">In person</option>
                            </select>
                        </div>
                        <div class="txt button" style="border-bottom:1.8px solid black;" id="button">
                            <i class="fa-solid fa-calendar-days txticon" style="display:inline-block">
                            </i>
                            <p style="display:inline-block">Date and Time</p>
                        </div>

                        <div id="bg_container" class="bg-popContainer">
                            <div class="pop-box">
                                <div id="close" class="closer">+</div>
                                <div>
                                <p style="display:inline-block; margin-right:10px">Start Date</p>
                               <input style="display:inline-block;" type="datetime-local" placeholder="Name">
                               </div>
                               <div>
                               <p style="display:inline-block;margin-right:18px">End Date</p>
                                <input style="display:inline-block;" type="datetime-local" placeholder="Username">
                                </div>
                                <button>Done</button>

                            </div>
                        </div>
                        <div class="input-icons">
                            <i class="fa-solid fa-location icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="password" placeholder="Place of meeting">
                        </div>
                        <div class="input-icons">
                            <i class="fa-solid fa-bars icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="password" placeholder="Add Description">
                        </div>
                        <div class="input-icons">
                            <i class="fa-solid fa-paperclip icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="password" placeholder="Attachment">
                        </div>
                    </form>

                    <div class="form_btn">Book Appointment</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contents End -->
    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="title">Example Modal</div>
            <button data-close-button class="close-button">&times;</button>
        </div>
        <div class="modal-body">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse quod alias ut illo doloremque eum ipsum
            obcaecati distinctio debitis reiciendis quae quia soluta totam doloribus quos nesciunt necessitatibus,
            consectetur quisquam accusamus ex, dolorum, dicta vel? Nostrum voluptatem totam, molestiae rem at ad autem
            dolor ex aperiam. Amet assumenda eos architecto, dolor placeat deserunt voluptatibus tenetur sint officiis
            perferendis atque! Voluptatem maxime eius eum dolorem dolor exercitationem quis iusto totam! Repudiandae
            nobis nesciunt sequi iure! Eligendi, eius libero. Ex, repellat sapiente!
        </div>
    </div>

</body>
<script>
// get elements by id

const popOutButton = document.getElementById("button")

const exitcontainer = document.getElementById("bg_container")
const bg_container = document.querySelector(".bg-popContainer")
// Add event listeners 

popOutButton.addEventListener("click", popOutNow);

function popOutNow(e) {
    e.preventDefault();

    document.querySelector(".bg-popContainer").style.display = "flex";

}


const cancelPop = document.getElementById("close");

cancelPop.addEventListener("click", CancelPopOut);

function CancelPopOut(e) {
    e.preventDefault();
    bg_container.style.display = "none";


}

</script>

</html>