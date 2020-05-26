

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
                <img src="image/icon/box.png" alt="icon">
                <h2>Gemt</h2>

                </div>

          </section>

        <section class="half">

          <div class="button button2" onclick="buttonFunction2()"  id="button2" >
    <a href="ny.html">
            <img src="image/icon/palle.png" alt="icon">
            <h2>Tilføj ny varer</h2></a>
          </div>


        </section>


    </main>

  </body>
</html>
