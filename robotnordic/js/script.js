
/* Lasbil siden. Det viser forskerlige lastbil højt oplysninger. */
var lastbil, text, lastbilLen, i;
lastbil = ["2.70", "2.75", "2.80", "2.85", "2.90","2.95"];
lastbilLen = lastbil.length;
lastbil.push("<?php echo $_GET['lastbil']; ?>");
text="";
for (i = 0; i < lastbilLen; i++) {
  text += "<div class='lastbil-button'><form action='overview-lastbil.php'  method='get'> <input type='submit' name='lastbil' value='" + lastbil[i] + "'></form></div>";
}
text += "";

document.getElementById("lastbil").innerHTML = text;



/* Tilbage knap, det sender windows histroie siden.  */

function goBack() {
  window.history.back();
}


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
