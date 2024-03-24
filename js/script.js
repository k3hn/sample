var navLinks = document.getElementById("navLinks");

function showMenu(){
    navLinks.style.right = "0";

}
function hideMenu(){
    navLinks.style.right = "-200px";
    
}
var currentPage = window.location.href;
function setBackground() {
    var backgroundImage;

    if (currentPage.includes("about.php")) {
        backgroundImage = "aboutusbanner.jpg";
    } else if (currentPage.includes("course.php")) {
        backgroundImage = "courses.jpg";
    } else if (currentPage.includes("contact.php")) {
        backgroundImage = "contact.jpg";
    } else {
        backgroundImage = "default.jpg"; 
    }

    document.querySelector(".subheader-section").style.backgroundImage = "linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)), url('images/" + backgroundImage + "')";
}

window.onload = setBackground;