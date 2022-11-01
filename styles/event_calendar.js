function openPage(pageName, elmnt, name) {
    // Hide all elements with class="tabcontent" by default */
    var i, tabcontent;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    if(tabcontent.display=="none"){
        elmnt="nav-res";
    }
    // Show the specific tab content
    document.getElementById(pageName).style.display = "block";
    if(pageName=="Errorpage"){
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