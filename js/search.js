
var s_modal = document.getElementById("s_Modal");
// Get the <span> element that closes the modal

var searchBar = document.getElementById("searchBar");

// Get the button that opens the modal
var s_btn = document.getElementById("searchBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
s_btn.onclick = function() {
  s_modal.style.display = "block";
  searchBar.style.display = "inline-block";
}


// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  s_modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == s_modal) {
    s_modal.style.display = "none";
  }
}