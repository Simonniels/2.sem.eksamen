<?php include "header.html"; ?>

  <main>


      <section class="full info">


          </section>
          <section class="full">
            <div class="kasse-form">

              <form action="overview-palle.php"  method="get">
              <h1>Udfylde palle oplysninger</h1>
              <label>Højte</label>
              <input type="text" name="hojde" required><br>
              <label>Længde</label>
              <input type="text" name="lange" required>
              <label>Bredde</label>
              <input type="text" name="bred" required>
                <label></label>
              <input type="submit" >
            </form>
            </div>

          </section>

          <section class="half">

                <div class="button">
                <img src="image/4-vejs.jpg" alt="icon">
                <form action="overview-palle.php"  method="get">
                <input type="submit" name="palle" value="4-vejs palle ">
                            </form>
                </div>

          </section>

        <section class="half">

          <div class="button" >

            <img src="image/2-vejs.jpg" alt="icon">

              <form action="overview-palle.php"  method="get">
                <input type="submit" name="palle" value="2-vejs palle ">
                  </form>
          </div>


        </section>

        <section class="half">

          <div class="button">

            <img src="image/lukket.jpg" alt="icon">
            <form action="overview-palle.php"  method="get">
              <input type="submit" name="palle" value="Lukket palle">
                </form>
          </div>

        </section>

        <section class="half">

          <div class="button">

            <img src="image/icon/palle.png" alt="icon">
            <form action="overview-palle.php"  method="get">
              <input type="submit" name="palle" value="halv">
                </form>
          </div>

        </section>
        <section class="half">

                    <div class="button">

                      <img src="image/europalle.jpg" alt="icon">
                      <form action="overview-palle.php"  method="get">
                        <input type="submit" name="palle" value="europalle">
                          </form>
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
