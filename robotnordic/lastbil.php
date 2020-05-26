<!DOCTYPE html>
<html lang="da" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
    <title>Robot Nordic</title>


  </head>
  <body>
            <header>

              <div id="logo">
                <a href="index.html" ><img src="image/logo.png" alt="Robot Nordic"></a>
                </div>
              <div class="toggle-holder">
                  <div onclick="myFunction()"  id="toggle"  class="menu-line">
                    <div class="menu-line"></div>
                  </div>
                </div>

                        <nav  id="myDropdown" class="menu-left-part">
                        <ul class="menu">

                            <li class="menu-item active-menu"><img src="image/home-icon.png" alt=""> <a href="index.html" >Forside</a></li>
                            <li class="menu-item"><img src="image/spil-icon.png" alt=""><a href="inst.html">Indstillinger</a></li>
                            <li class="menu-item"><img src="image/produkt-icon.png" alt=""><a href="gemt.html">Gemt</a></li>
                            <li class="menu-item"><img src="image/kupon-icon.png" alt=""><a href="historik.html">Historik</a></li>
                            <li class="menu-item"><img src="image/kurv-icon.png" alt=""><a href="logud.html">Logud</a></li>

                        </ul>
                    </nav>

            </header>

  <main>

          <section class="full info">

            <h1>Vælg Lastbil Højde</h1>

              </section>

        <section id="lastbil"></section>



        <section class="half">

          <div class="button udenicon">
            <h3>Indtaste speciel høj</h3>

              <form action="lastbil.php"  method="get">
              <input type="text" name="lastbil">
              <input type="submit">
            </form>


          </div>

        </section>

        <section class="half">

            <div class="button">
                <button onclick="goBack()">
              <h2>Tilbage</h2>
              </button>
            </div>

        </section>

    </main>
          <script>
            var lastbil, text, fLen, i;
            lastbil = ["2.55", "2.60", "2.65", "2.70"];
            fLen = lastbil.length;
            lastbil.push("<?php echo $_GET["lastbil"]; ?>");
            text="";
            for (i = 0; i < fLen; i++) {
              text += "<div class='lastbil-button'><form action='overview-lastbil.php'  method='get'> <input type='submit' name='lastbil' value='" + lastbil[i] + "'></form></div>";
            }
            text += "";

            document.getElementById("lastbil").innerHTML = text;

          </script>
  </body>
</html>
