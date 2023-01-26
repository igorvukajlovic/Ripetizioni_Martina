<!DOCTYPE HTML>

<html>
  <head>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }

      th, td {
        border: 2px solid black;
        padding: 12px;
        text-align: left;
      }

      th {
        background-color: red;
      }

      ul {

      }

      li {
        margin-right: 10 px;
      }

      h2 {
        color: black;
      }

      h1 {
        background-color:blue;
        color: yellow;
      }

    </style>
    
    <title>Negozio online sportivo</title>

  </head>

  <body bgcolor="#ABCDEF">
    <h1> <center> <i> AW LAB STORE </i> </center> </div> </h1>
    <h3><i> <center> Cosa aspetti, passa a trovarci in store! </center> </i></h3>

    <img src= "https://www.imarsiweb.it/wp-content/uploads/2012/11/awlab4.jpg" width="30%" align="right">

    <br> <br>

    <p> <h3> <i>Alcune inforzioni sul nostro store </i> </h3> </p>

    <ul>
      <li>
        <b><i>DOVE CI TROVI?</i></b>
        <br>
        Via Maestri del Lavoro, F.V.
      </li>
      <li>
        <b><i>ORARI DI APPERTURA:</i></b>
        <br>
        LUN-SAB: 09:00-20:30 <br>
        DOM: 09:30-20:00
      </li>
      <li>
        <b><i>N&deg; DI TELEFONO:</i> </b>
        <br>
        +39 0434939718
      </li>
      <li> 
        <b>
          <i>
            <a href="https://www.aw-lab.com/?gclid=CjwKCAiAoL6eBhA3EiwAXDom5g-zZNc_h5HvWCTkMeK9WiQcBPUx6b1Vi_pr576bQdIxQHlBYBLBFhoCzmkQAvD_BwE&gclsrc=aw.ds">
              Il nostro sito web!
            </a>
          </i>
        </b>
      </li>
    </ul> 
    <p> <h3><i> Ecco cosa puoi trovare in store:</i></h3></p>
    <ul>
      <li>Scarpe da ginnastica</li>
      <li>Scarpe sportive</li>
      <li>Completi sportivi</li>
    </ul>
    <br>

    <img src= https://p1.nicelocal.it/preview/z9q91PsbE9sZkUD2OwvSZQ/1120x700x85/1/4/b/original_6158553a4f1164795f7c9f7a_61596ab2088b3.jpg width=30%" align="right">

    <!-- <br>

     <table style="width: 30%;">
      <thead>
        <tr>
          <th>DESCRIZIONE</th>
          <th>Prezzo</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td>COMPLETI SPORTIVI</td>
          <td>dai 90&euro; ai 150&euro; </td>
        </tr>

        <tr>
          <td>SCARPE DA GINNASTICA</td>
          <td>dai 30&euro; ai 70&euro;</td>
        </tr>

        <tr>
          <td>SCARPE SPORTIVE</td>
          <td>dai 50&euro; ai 150&euro;</td>
        </tr>
      </tbody>
    </table>
    
    <br> -->
    
      <!-- Qui scrivo la tabella e il contenuto lo carico via php -->
      <table style="width: 30%; ">
        <thead>
          <tr>
            <th>Articolo</th>
            <th>Prezzo</th>
            <th>Quantita</th>
            <th></th>
          </tr>
        </thead>
        
        <tbody>
          <?php

            $articoli = array(
              array("Nome" => "Giacca", "Prezzo" => 200),
              array("Nome" => "Pantaloni", "Prezzo" => 80),
              array("Nome" => "Scarpe", "Prezzo" => 45),
              // array("Nome" => "Stivali", "Prezzo" => 132.5),
              array("Nome" => "Calzini", "Prezzo" => 2.5),
              array("Nome" => "Tuta", "Prezzo" => 83.5),
              array("Nome" => "Leggins", "Prezzo" => 10.70),
            );

            foreach ($articoli as $key => $articolo) {
              $nome = $articolo['Nome'];
              $prezzo = $articolo['Prezzo'];

              echo "
              <form method='POST' action='acquisto.php'>
                <input type='hidden' name='nome' value='$nome'></input>
                <input type='hidden' name='prezzo' value=$prezzo></input>

                  <tr>
                    <td>$nome</td>
                    <td>$prezzo&euro;</td>
                    <td><input type='text' name='quantita' value='1' /></td>
                    <td><button type='submit'>Acquista</button></td>
                  </tr>

              </form>";
            }

          ?>
        </tbody>

      </table>

    <p><i>La spedizione oggi viene solo 5&euro;!</i></p>

  </body>
</html>