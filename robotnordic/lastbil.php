
<?php include "header.html"; ?>

  <main>

          <section class="full info">
            <h1>Vælg Lastbil Højde</h1>
              </section>

        <section id="lastbil"></section>

        <section class="half">
          <div class="button udenicon">
            <h3>Indtaste speciel høj</h3>
              <form action="overview-lastbil.php"  method="get">
              <input type="text" name="lastbil">
              <input type="submit">
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

    </main>

<script type="text/javascript">

/* Lasbil siden. Det viser forskerlige lastbil højt oplysninger. */
var lastbil, text, lastbilLen, i;
lastbil = ["2.70", "2.75", "2.80", "2.85"];
lastbilLen = lastbil.length;
text="";
for (i = 0; i < lastbilLen; i++) {
  text += "<div class='lastbil-button'><form action='overview-lastbil.php'  method='get'> <input type='submit' name='lastbil' value='" + lastbil[i] + "'></form></div>";
}
text += "";

document.getElementById("lastbil").innerHTML = text;

</script>

  </body>
</html>
