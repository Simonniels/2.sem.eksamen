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



          <section class="half">

                <div class="button udenicon" >
                  <h2>Lastbil Højde</h2>

                  <?php echo $_GET["lastbil"]; ?>
                </div>
          </section>

        <section class="half">
          <a href="kasse.html">
          <div class="button  udenicon">
            <h2>Tilføj kasse oplysninger</h2>
          </div>
        </a>

        </section>

        <section class="half">
          <a href="palle.html">
          <div class="button  udenicon">
            <h2>Tilføj palle oplysninger</h2>
          </div>
        </a>
        </section>
        <section class="half">

        </section>
        <section class="half">


            <div class="next">
                <button onclick="goBack()">
              <h2>Tilbage</h2>
              </button>
            </div>

        </section>

        <section class="half">

        </section>
    </main>

  </body>
</html>
