<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sidebar menu With Sub-menus | Using HTML, CSS & JQuery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./styles/event_calendar.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2">
</head>
<script>
    <?php
        $name= "John Wayne";
    ?>
</script>
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
        <a class="sidenavlink" onclick="openPage('Home','sidenav','HOME')" id="defaultOpen"><img src="./icons/dashboard.png" class="nav-icon">Dashboard</a>
        <a class="sidenavlink" onclick="openPage('Key_Projects','sidenav','KEY PROJECTS')"><img src="./icons/messages.png" class="nav-icon">Messages</a>
        <a class="sidenavlink" onclick="openPage('Client','sidenav','CLIENT TESTIMONIAL')"><img src="./icons/live.png" class="nav-icon">Live</a>
        <a class="sidenavlink" onclick="openPage('Careers','sidenav','CAREERS')"><img src="./icons/mail.png" class="nav-icon">Mail</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="./icons/recipies.png" class="nav-icon">Recipies</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="./icons/calendar.png" class="nav-icon">Appoinments</a>
        <a class="sidenavlink" onclick="openPage('Contact','sidenav','CONTACT US')"><img src="./icons/clientlist.png" class="nav-icon">Client List</a>
        <div class="menu-bottom">
            <a class="sidenavlink"><img src="./icons/gethelp.png" class="nav-icon">Get Help</a>
            <a class="sidenavlink"><img src="./icons/settings.png" class="nav-icon">Settings</a>
            <a class="sidenavlink"><img src="./icons/logout.png" class="nav-icon">Log Out</a>
        </div>
    </div>

    <div class="topnav">
        <div class="topnav-content" id="topnav-change">
            <p id="topnav-content-1">Good Morning, <span id="topnav-content-1-name"><?php echo $name; ?></span></p>
            <p id="topnav-content-2">Your performance summary this week</p>
        </div>
        <div class="topnav-icons">
            <img src="./icons/addusermale.png" style="height: 24px; width: 24; display:none;" id="addusermale">
            <img src="./icons/search.png" style="height: 20px; width: 20px;">
            <img src="./icons/notifications.png" style="height: 20px; width: 20px;">
            <img src="./icons/profile.png" style="height: 33px; width: 33px; border-radius: 100%;">
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="./styles/event_calendar.js" async defer></script>
</body>

</html>