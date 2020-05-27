/* Gemde kunder siden. Det viser forskerlige kunder navn og link til oplysninger. */
var gem, text, gemantal, i;
gem = ["aldi", "fotex", "netto", "bilka", "rema", "robot"];
gemantal = gem.length;

text="";

for (i = 0; i < gemantal; i++) {

  text += "<a href='" + gem[i] + ".php'><div onclick='kunderGem()' class='gem-kunder'><h2>" + gem[i] + "</h2></div></a>";

}

document.getElementById("gem").innerHTML = text;





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
