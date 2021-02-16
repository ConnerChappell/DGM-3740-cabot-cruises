//Create a button and give it an ID of "hamburgerBtn"
//Attach an ID of "primaryNav" to the UL of the unordered list that holds your links

function toggleMenu() {
    document.getElementById("hamburgerBtn").classList.toggle("open");
    document.getElementById("primaryNav").classList.toggle("open");
}
var x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu; 



// Adds activeLink class to current menu item
var urlString = document.location.href;

var urlArray = urlString.split('/');

var pageHREF = urlArray[urlArray.length - 1];

var menu = document.querySelectorAll('ul#primaryNav li a');

if (pageHREF !== "") {
    var i;

    for(i = 0; i < menu.length; i++) {
        var currentURL = (menu[i].getAttribute("href"));

        if (currentURL === pageHREF) {
            menu[i].parentNode.className = "activeLink";

            if(menu[i].parentNode.parentNode.parentNode.tagName === "LI") {
                menu[i].parentNode.parentNode.parentNode.className = "parent activeLink";
            }
        } else {
            menu[i].parentNode.className = "";
        }
    } // End of search for a match
} else {
    menu[0].parentNode.className = "activeLink";
}