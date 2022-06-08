
// When the user scrolls the page, execute myFunction
window.onscroll = function() {myFunction()};

// Get the header
  var header = document.getElementById("myHeader");
  var nav = document.querySelectorAll("[data-nav]  a");

  // Get the offset position of the navbar
  var sticky = header.offsetTop;

  // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
  function myFunction() {
    if (window.pageYOffset > sticky) {
      header.classList.add("sticky");
      header.style.backgroundColor = "#eee";
      // header.style.marginTop = "10px";
    header.style.transition = "ease-in 0.2s";
    nav.forEach(link => {
      link.style.color = "black";
    })
  } else{
    header.classList.remove("sticky");
    header.style.backgroundColor = "transparent";
    nav.forEach(link => {
      link.style.color = "white";
    })
  }
}
