

<?php include "header.html"; ?>


  <main>

      <section class="full">

        <div class="button button1" onclick="buttonFunction1()"  id="button1" >

        <h2>Konto</h2>
        <h2>Velkommen <?php echo $_GET["username"]; ?></h2>
        </div>

          </section>

          <section class="half">

                <div class="button" >
                    <a href="gemde-kunder.html">
                <img src="image/icon/box.png" alt="icon">
                <h2>Gemt kunder</h2>
              </a>
                </div>

          </section>

        <section class="half">

          <div class="button" >
    <a href="ny.html">
            <img src="image/icon/palle.png" alt="icon">
            <h2>Tilføj ny varer</h2></a>
          </div>


        </section>


    </main>

  </body>
</html>
