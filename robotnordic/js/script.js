/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */

function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it

window.onclick = function(event) {
  if (!event.target.matches('.menu-line')) {
    var dropdowns = document.getElementsByClassName("menu-left-part");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}



function buttonFunction() {
  document.getElementById("button").classList.toggle("choose");
}
window.onclick = function(event) {
  if (!event.target.matches('.button')) {

      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }





function buttonFunction1() {
  document.getElementById("button1").classList.toggle("choose");
}
function buttonFunction2() {
  document.getElementById("button2").classList.toggle("choose");
}
function buttonFunction3() {
  document.getElementById("button3").classList.toggle("choose");
}
function buttonFunction4() {
  document.getElementById("button4").classList.toggle("choose");
}
