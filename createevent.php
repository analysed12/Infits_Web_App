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
    font-size: 18px;
    font-weight: bold;
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



.form {
    width: 100%;
    position: relative;
    height: 50px;
    overflow: hidden;
    margin-bottom: 10px;
}

.form input {
    width: 100%;
    height: 100%;
    /* padding-top: 20px; */
    border: none;
    outline: none;

}

.form label {
    position: absolute;
    bottom: 0px;
    left: 0%;
    width: 100%;
    height: 100%;
    pointer-events: none;
    font-size: 19px;
    border-bottom: 1px solid black;
}

.form label::after {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    left: 0px;
    bottom: -1px;
    border-bottom: 3px solid #5fa8d3;
    transform: translate(-100%);
    transition: all 0.3s ease;
}

.content-name {
    position: absolute;
    bottom: 5px;
    left: 0px;
    transition: all 0.3s ease;
}

.form input:focus+.label-name .content-name,
.form input:valid+.label-name .content-name {
    transform: translateY(-150%);
    /* font-size: 14px;
    color: #5fa8d3; */
}

.form input:focus+.label-name::after,
.form input:valid+.label-name::after {
    transform: translateX(0%);
}

.form_btn{
    width:100%;
    background: #4B9AFB;
border-radius: 10px;
color:white;
text-align:center;
padding:15px;
margin-top:30px;
}

/* MEDIA QUERY */


@media screen and (min-width: 720px) {

    /* Styles go here */
    .mobile-menu {
        display: none;
    }
}

@media (min-width: 0px) and (max-width: 720px) {
    
    .event-form {
        /* height: 100%; */
        margin-left:5%;
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
                <input class="subject" type="text" name="subject" style="padding:10px 0px;">
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
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-user"
                                        style="color: black; margin-right: 15px;"></i>Add Client</div>
                            </span>
                        </label>
                    </div>
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-suitcase rem_icon"
                                        style="color: black;margin-right: 15px;"></i>Meeting Type</div>
                            </span>
                        </label>
                    </div>
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-calendar-days"
                                        style="color: black;margin-right: 15px;"></i>Date and Time</div>
                            </span>
                        </label>
                    </div>
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-location"
                                        style="color: black;margin-right: 15px;"></i>Place of Meeting</div>
                            </span>
                        </label>
                    </div>
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-bars"
                                        style="color: black;margin-right: 15px;"></i>Add Description</div>
                            </span>
                        </label>
                    </div>
                    <div class="form">
                        <input type="text" name="name" required>
                        <label for="name" class="label-name">
                            <span class="content-name">
                                <div style="display: inline-block;"><i class="fa-solid fa-paperclip"
                                        style="color: black;margin-right: 15px;"></i>Attachment</div>
                            </span>
                        </label>
                    </div>
                    <div class="form_btn">Book Appointment</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contents End -->

</body>

</html>