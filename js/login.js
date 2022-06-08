// Get the modal
var mymodal = document.getElementById("myModal");

// Get the button that opens the modal
var l_btn = document.getElementById("loginBtn");

// Get the <span> element that closes the modal
var span = document.querySelector("[data-close]");


// When the user clicks on the button, open the modal
l_btn.onclick = function() {
  mymodal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  mymodal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == mymodal) {
    mymodal.style.display = "none";
  }
}


const pattern = /^[0-9]*[A-Z]*/;

