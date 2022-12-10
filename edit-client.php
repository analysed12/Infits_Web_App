<!DOCTYPE HTML>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
    <title>Edit Client</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="css/style.css" rel="stylesheet" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="edit-client-profile.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2" />

</head>

<style>
    @import url('https://fonts.googleapis.com/earlyaccess/nats.css');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap');

    body {
        margin: 0;
        /* width: 100vw;
        height: 100vh; */
    }

    .nav {
        height: 0px;
        background-color: black;
    }

    .nav-res {
        display: none;
    }

    .sidenav {
        min-width: 15vw;
        max-width: fit-content;
        height: 100vh;
        background-color: white;
        text-align: left;
        position: sticky;
        top: 0;
        float: left;
        display: flex;
        flex-direction: column;
        border-right: #E8ECF5 2px solid;
    }

    .sidenav .sidenavlink {
        color: #131635;
        float: left;
        border: none;
        outline: none;
        cursor: pointer;
        font-family: 'Poppins', serif;
        text-decoration: none;
        margin-bottom: 2vh;
        margin-left: 43px;
        font-style: normal;
        font-weight: 500;
        font-size: 18px;
        margin-right: 30px;
    }

    .sidenav .menu-bottom {
        position: absolute;
        bottom: 40px;
        display: flex;
        flex-direction: column;
    }

    .sidenav .sidenavlink:hover {
        cursor: pointer;
    }

    #logo {
        height: auto;
        width: 174px;
        margin-left: 10px;
        margin-bottom: 3vh;
        margin-top: 2vh;
    }

    .sidenav .nav-icon {
        height: 16px;
        width: 16px;
        margin-right: 15px;
    }

    .tabcontent {
        color: white;
        display: none;
        padding: 40px 20px;
        height: 100%;
    }

    .topnav {
        position: relative;
        min-height: 10%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 1vh;
        border-bottom: #E8ECF5 2px solid;
    }

    .topnav .topnav-content p {
        margin: 0;
    }

    .topnav-content {
        margin-left: 30px;
        color: #8D8D8D;
        font-style: normal;
        font-family: 'Manrope', serif;
        font-weight: 700;
        display: flex;
        justify-content: center;
        flex-direction: column;
    }

    #topnav-content-1 {
        font-size: 20px;
        letter-spacing: 0.05em;
        margin-bottom: 5px;
    }

    #topnav-content-2 {
        letter-spacing: 1px;
        font-weight: 500;
        font-size: 15px;
    }

    .topnav-content #topnav-content-3 {
        font-family: 'Poppins';
        /* NATS */
        font-style: normal;
        font-weight: 400;
        font-size: 33px;
        color: #000000;
    }

    #topnav-content-1-name {
        color: #212121;
    }

    .topnav-icons {
        height: 100%;
        margin-right: 3vw;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .topnav-icons img {
        margin-left: 30px;
        justify-self: center;
    }

    a:hover,
    .active {
        align-items: center;
        border: 1px solid #E5F1FF;
        background-color: #E5F1FF;
        color: #0177FB !important;
        border-radius: 10px;
    }

    a {
        padding: 1px 2px 1px 3px;
        text-decoration: none;
    }

    /* css for client */

    .container {
        margin-left: 250px;
        /* margin-right:200px; */
        padding-right: 200px;
        height: 100%;
        background-color: #ffffff;

        justify-content: center;
        align-items: center;
    }

    .top-side {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px;
        margin: 20px;
        line-height: 75px;
    }

    .btn {
        width: 150px;
        padding: 10px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        border-radius: 5px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }

    .cancel {
        outline: 2px solid #6883FB;
        color: #6883FB;
    }

    .save {
        background-color: #6883FB;
        color: white;
    }

    .plan {
        outline: 2px solid #6883FB;
        color: #6883FB;
        width: 100px;
        height: 40px;
        padding: 0px;
        margin: 0px;
    }

    .cancel:hover {
        background-color: #DC3545;
        color: white;
    }

    .save:hover {
        outline: 2px solid #6883FB;
        color: white;
        background-color: #6883FB;
    }

    @media screen and (min-width: 720px) {

        /* Styles go here */
        .mobile-menu {
            display: none;
        }
    }

    @media (min-width: 0px) and (max-width: 720px) {
        .sidenav {
            display: none;
        }
    }

    /*--------------------- MOBILE SIDENAV---------------------*/
    /*HAMBURGER MENU*/
    .sidenavv {
        height: 100%;
        width: 0;
        position: fixed;
        z-index: 1;
        top: 0;
        left: 0;
        background-color: #ffffff;
        overflow-x: hidden;
        transition: 0.5s;
        padding-top: 60px;
    }

    .sidenavv a {
        padding: 8px 8px 8px 32px;
        text-decoration: none;
        font-size: 20px;
        color: #818181;
        display: block;
        transition: 0.3s;
    }

    .sidenavv a:hover {
        border: 1px solid #E5F1FF;
        background-color: #E5F1FF;
        color: #0177FB !important;
        border-radius: 10px;
    }

    .sidenavv .closebtn {
        position: absolute;
        top: 0;
        right: 25px;
        font-size: 36px;
        margin-left: 50px;
    }
</style>



<body>

    <div class="nav">
        <div class="navcontent">
        </div>
    </div>
    <div class="nav-res" id="navbar-res">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <img src="./icons/menu.png">
        </a>
        <a onclick="openPage('Home','nav-res', 'HOME')" class="active" id="defaultOpen" style="margin-top:10vh;">Dashboard</a>
        <a onclick="openPage('Key_Projects','nav-res','KEY PROJECTS')">Messages</a>
        <a onclick="openPage('Client','nav-res','CLIENT TESTIMONIAL')">Live</a>
        <a onclick="openPage('Careers','nav-res','CAREERS')">Mail</a>
        <a onclick="openPage('Contact','nav-res','CONTACT US')">Recipes</a>
        <a onclick="openPage('Careers','nav-res','CAREERS')">Appoinments</a>
        <a onclick="openPage('Contact','nav-res','CONTACT US')">Client List</a>
        <a>Settings</a>
        <a>Get Help</a>
        <a>Log Out</a>
    </div>

    <div class="sidenav" id="sidenavbar">
        <img src="images/logo.png" class="sidenavlink" id="logo">
        <a class="sidenavlink" onclick="openPage('Home','sidenav','HOME')" id="defaultOpen"><img src="images/vec_dashboard.png" class="nav-icon">Dashboard</a>
        <a class="sidenavlink" onclick="openPage('Key_Projects','sidenav','KEY PROJECTS')"><img src="images/vec_messages.png" class="nav-icon">Messages</a>
        <a class="sidenavlink" onclick="openPage('Client','sidenav','CLIENT TESTIMONIAL')"><img src="images/vec_live.png" class="nav-icon">Live</a>
        <a class="sidenavlink" onclick="openPage('Careers','sidenav','CAREERS')"><img src="images/vec_mail.png" class="nav-icon">Mail</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="images/vec_recipies.png" class="nav-icon">Recipies</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="images/vec_appointments.png" class="nav-icon">Appoinments</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="images/vec_client_list.png" class="nav-icon">Client List</a>
        <div class="menu-bottom">
            <a class="sidenavlink"><img src="images/vec_gethelp.png" class="nav-icon">Get Help</a>
            <a class="sidenavlink"><img src="images/vec_settings.png" class="nav-icon">Settings</a>
            <a href="logout.php" class="sidenavlink"><img src="images/vec_logout.png" class="nav-icon">Log Out</a>
        </div>
    </div>

    <div class="topnav">
        <div class="topnav-content" id="topnav-change">
            <p id="topnav-content-1">Good Morning, <span id="topnav-content-1-name">

                    </strong></p>

            </span></p>
            <p id="topnav-content-2">Your performance summary this week</p>
        </div>
        <div class="topnav-icons">
            <img src="images/pp.png" style="height: 24px; width: 24; display:none;" id="addusermale">

            <img src="images/vec_search.png" style="height: 20px; width: 20px;">
            <img src="images/vec_notification.png" style="height: 20px; width: 20px;">


        </div>

    </div>
    <div class="container">
        <!-- form -->
        <form>
            <div class="top-side">
                <h3 class="text">Edit Client Profile</h3>
                <div class="right-end">
                    <button class="btn cancel" type="cancel">Cancel</button>
                    <button class="btn save" type="submit">Save</button>
                </div>
            </div>
            <img src="images/editClient.svg" class="rounded mx-auto d-block" alt="...">
            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" placeholder="Name" />
            </div>

            <!-- Gender Radio Buttons -->
            <label for="inputName">Gender</label>
            <div class="custom-control custom-radio custom-control-inline">

                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" />
                <label class="custom-control-label" for="customRadioInline1">&nbsp;&nbsp;&nbsp;&nbsp; Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">

                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" />
                <label class="custom-control-label" for="customRadioInline2"> &nbsp;&nbsp;&nbsp;&nbsp; Female</label>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail">Email</label>
                    <input type="text" class="form-control" id="inputEmail" placeholder="Email" />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPhone">Phone No.</label>
                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone No." />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputAge">Age</label>
                    <input type="text" class="form-control" id="inputAge" placeholder="Age" />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputHeight">Height</label>
                    <input type="text" class="form-control" id="inputHeight" placeholder="Height" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputWeight">Weight</label>
                    <input type="text" class="form-control" id="inputWeight" placeholder="Weight" />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputAbout">About</label>
                    <input type="text" class="form-control" id="inputAbout" placeholder="About" />
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputLocation">Location</label>
                    <input type="text" class="form-control" id="inputLocation" placeholder="Location" />
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Plan</label>
                    <br />
                    <button class="btn plan" type="submit">Save</button>
                </div>
            </div>


        </form>
    </div>


    <!----------------------------------- MOBILE MENU ----------------------------------------->

    <div class="mobile-menu">
        <div id="mySidenav" class="sidenavv">
            <img src="images/logo.png" id="logo">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#"><img src="images/vec_active_dashboard.png"> &nbsp&nbsp Dashboard</a>
            <a href="#"><img src="images/vec_messages.png">&nbsp&nbsp Messages</a></a>
            <a href="#"><img src="images/vec_live.png">&nbsp&nbsp Live</a>
            <a href="#"><img src="images/vec_mail.png">&nbsp&nbsp Mail</a>
            <a href="#"><img src="images/vec_recipies.png">&nbsp&nbsp Recipies</a>
            <a href="#"><img src="images/vec_appointments.png">&nbsp&nbsp Appointments</a>
            <a href="#"><img src="images/vec_client_list.png">&nbsp&nbsp Client List</a>
            <a href="#"><img src="images/vec_gethelp.png">&nbsp&nbsp Get Help</a>
            <a href="#"><img src="images/vec_settings.png">&nbsp&nbsp Settings</a>
            <a href="#"><img src="images/vec_logout.png">&nbsp&nbsp Log Out</a>
        </div>
        <span style="font-size:20px;cursor:pointer; margin: 5px;" onclick="openNav()">&#9776; Menu</span>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script>
        function openPage(pageName, elmnt, name) {
            // Hide all elements with class="tabcontent" by default */
            var i, tabcontent;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            if (tabcontent.display == "none") {
                elmnt = "nav-res";
            }
            // Show the specific tab content
            document.getElementById(pageName).style.display = "block";
            if (pageName == "Errorpage") {
                document.getElementById(pageName).style.display = "flex";
            }
            if (elmnt == "nav-res") {
                var topnav = document.getElementById("navbar-res");
                var i;
                topnav.className = "nav-res";
            }
            show = document.getElementById("show");
            show.innerHTML = name;
            callaos();
            document.documentElement.scrollTop = 0;
            document.body.scrollTop = 0;
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();

        /* Toggle between adding and removing the "responsive" class to sidenav when the user clicks on the icon */
        function myFunction() {
            var x = document.getElementById("navbar-res");
            if (x.className === "nav-res") {
                x.className += " responsive";
            } else {
                x.className = "nav-res";
            }
        }
    </script>
</body>

</html>