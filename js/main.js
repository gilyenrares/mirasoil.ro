        /* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
  
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";


}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}

function openNavRight() {
  
  document.getElementById("mySidebar1").style.width = "250px";
  document.getElementById("main1").style.marginRight = "250px";


}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNavRight() {
  document.getElementById("mySidebar1").style.width = "0";
  document.getElementById("main1").style.marginRight = "0";
}
/*
// Get the modal
var modal = document.getElementById("nav-bar");

// Get the button that opens the modal
var btn = document.getElementsByClassName("navbar-toggler");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
*/

