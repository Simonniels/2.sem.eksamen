<?php include "header.html"; ?>

  <main>



          <section class="half">

                <div class="button udenicon" >
                  <h2>Lastbil Højde</h2>

                  <?php echo $_GET["lastbil"]; ?>
                </div>
          </section>

        <section class="half">
          <a href="kasse.php">
          <div class="button  udenicon">
            <h2>Kasse oplysninger</h2>

                Højte: <?php echo $_GET["hojde"]; ?>
                Længde: <?php echo $_GET["lange"]; ?>
                Vægt: <?php echo $_GET["vagt"]; ?>
                Bredde: <?php echo $_GET["bred"]; ?>
                <a href="kasse.php">
                <div class="button  udenicon">
                  <h2>Tilføj en kasse mere</h2>
                </div>
              </a>
          </div>
        </a>

        </section>

        <section class="half">
          <a href="palle.php">
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
          <div class="button">
              <a href="overview.php">
            <h2>Overview</h2>
          </a>
          </div>
        </section>
    </main>

  </body>
</html>
