<?php include "header.html"; ?>

  <main>

          <section class="half">
              <h2>Lastbil oplysninger</h2>
                <div class="button udenicon" >
                  <h2>Lastbil Højde</h2>

                  <?php echo $_GET["lastbil"]; ?>
                </div>
          </section>

        <section class="half">
            <h2>Kasse oplysninger</h2>
          <a href="kasse.php">
          <div class="button  udenicon">
            <h2>Tilføj kasse oplysninger</h2>
          </div>
        </a>

        </section>

        <section class="half">
            <h2>Palle oplysninger</h2>
          <a href="palle.php">
          <div class="button  udenicon">
            <h2>Tilføj palle oplysninger</h2>
          </div>
        </a>
        </section>
        <section class="half">
          <div class="button">
              <a href="overview.php">
            <h2>Overview</h2>
          </a>
          </div>
        </section>

        <section class="full">
            <div class="button">
                <button onclick="goBack()">
              <h2>Tilbage</h2>
              </button>
            </div>

        </section>


    </main>

  </body>
</html>
