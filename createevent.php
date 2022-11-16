<?php
include "config.php" ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="createevent.css">
    <title>Create Event</title>
</head>

<body>
    <!-- Navbar Start -->
    <!--  -->
    <!-- Navbar End -->

    <!-- Contents Start -->
    <div id="content">
        <div class="event-form">
            <div class="ev-img">
                <img class="event-image" src="images/eventlist.png" alt="">
            </div>
            <br>
            <form action="createevent.php" method="post">
                <div class="eve_form">
                    <!-- Event name field -->
                    <label for="subject" class="event_title">EVENT NAME</label>
                    <select class="subject" type="text" name="subject" placeholder="Category" style="padding:10px 0px;">
                        <option value="Consultation">Consultation</option>
                        <option value="Dietplan">Diet Plan</option>
                        <option value="Followup">Follow Up</option>
                    </select>
                    <br>
                    <!-- Reminder types display -->
                    <!--***** Add an array to store these values -->
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
                    </div>
                    <br>

                    <!-- Main event details form -->
                    <div class=" event_title">EVENT DETAILS</div>

                    <div style="max-width:100%;margin:auto">
                        <!-- Add client field -->
                        <div class="input-icons">
                            <i class="fa-solid fa-user icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                name="client_name" placeholder="Add Client">
                        </div>

                        <!-- Meeting type fields -->
                        <div class="input-icons">
                            <i class="fa-solid fa-suitcase icon">
                            </i>
                            <select style="border-top:none;border-left:none;border-right:none" name="meetingtype"
                                class="input-field">
                                <option value="select">Meeting Type</option>
                                <option value="Videocall">Video Call</option>
                                <option value="Call">Call</option>
                                <option value="In person">In person</option>
                            </select>
                        </div>

                        <!-- Date and Time fields -->
                        <div class="txt button" style="border-bottom:1.8px solid black;" id="button">
                            <i class="fa-solid fa-calendar-days txticon" style="display:inline-block">
                            </i>
                            <p style="display:inline-block">Date and Time</p>
                        </div>

                        <!-- Date and Time Pop up -->
                        <div id="bg_container" class="bg-popContainer">
                            <div class="pop-box">
                                <div id="close" class="closer">+</div>
                                <div>
                                    <p style="display:inline-block; margin-right:10px">Start Date</p>
                                    <input style="display:inline-block;" type="datetime-local" name="startdate"
                                        placeholder="StartDate" id="startdate">
                                </div>
                                <div>
                                    <p style="display:inline-block;margin-right:18px;">End Date</p>
                                    <input style="display:inline-block;" type="datetime-local" id="enddate"
                                        placeholder="EndDate" name="enddate">
                                </div>

                            </div>
                        </div>

                        <!-- Place of meeting field -->
                        <div class="input-icons">
                            <i class="fa-solid fa-location icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="text" placeholder="Place of meeting" name="placeofmeeting">
                        </div>

                        <!-- Add Description Field -->
                        <div class="input-icons">
                            <i class="fa-solid fa-bars icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="text" placeholder="Add Description" name="description">
                        </div>

                        <!-- Add attachment field -->
                        <div class="input-icons">
                            <i class="fa-solid fa-paperclip icon">
                            </i>
                            <input style="border-top:none;border-left:none;border-right:none" class="input-field"
                                type="text" placeholder="Attachment" name="attachment">
                        </div>
                    </div>

                    <button class="form_btn" type="submit">Book Appointment</button>
                </div>
        </div>
        </form>
    </div>
    </div>
    <!-- Appointment booked popup -->
    <div id="appointment_booked"></div>
    <!-- Contents End -->

    <!-- Php part -->

    <?php
    $eventname=$clientuserid=$start_date=$end_date=$place_of_meeting=$description=$attachment="";
    $err = "";

    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $eventname = $_POST['subject'];
        $clientuserid = "Azarudeen";
        $meeting_type = $_POST['meetingtype'];
        $start_date = $_POST['startdate'];
        $end_date = $_POST['enddate'];
        $place_of_meeting = $_POST['placeofmeeting'];
        $description = $_POST['description'];
        $attachment = "hello";
        $start__date = strtotime($start_date);
        $end__date = strtotime($end_date);

        // $sql1 = "SELECT * FROM create_event WHERE ((start_date <= $curtimestamp1 && end_date > $curtimestamp1) ||(start_date < $curtimestamp2 && end_date >= $curtimestamp2))";


        $sql1 = "SELECT * FROM create_event WHERE ((start_date >= $start__date AND end_date <= $start__date) OR(start_date <= $end__date AND end_date >= $end__date ) OR (start_date <= $start__date AND end_date >= $start__date) OR (start_date >= $end__date AND end_date <= $end__date ))";

        $result1 = mysqli_query($conn,$sql1);
        $num = mysqli_num_rows($result1);

        if($num > 0)
        {
            echo "Appointment Booked";
            $err = "Appointment Booked";
        }
        else
        {
            $sql = "INSERT INTO create_event (eventname, clientuserid, meeting_type, start_date, end_date, place_of_meeting, description, attachment) VALUES ('$eventname','$clientuserid','$meeting_type','$start_date','$end_date','$place_of_meeting','$description','$attachment')";
            $result=mysqli_query($conn,$sql);
            echo "Inserted";
        }


    }
    ?>




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