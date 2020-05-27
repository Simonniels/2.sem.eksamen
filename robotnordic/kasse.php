<?php include "header.html"; ?>

  <main>



      <section class="full">

        <div class="kasse-form">

          <form action="overview-kasse.php"  method="get">
          <h1>Udfylde kasse oplysninger</h1>
          <label>Højte</label>
          <input type="text" name="hojde" required><br>
          <label>Længde</label>
          <input type="text" name="lange" required>
          <label>Vægt</label>
          <input type="text" name="vagt" required>
          <label>Bredde</label>
          <input type="text" name="bred" required>
            <label></label>
          <input type="submit" >
        </form>
        </div>


        </section>


        <section class="half">

          <div class="button">
            <a href="historik.php">
            <img src="image/icon/palle.png" alt="icon">
            <h2>Historik</h2></a>
          </div>

        </section>

        <section class="half">

          <div class="button" >
            <a href="qr.php">
            <img src="image/icon/qr.png" alt="icon">
            <h2>QR kode</h2></a>
          </div>

        </section>
        <section class="full">

            <div class="button">
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
