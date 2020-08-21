<!DOCTYPE html>
<html lang="ro">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="Description" content="...">
<link rel="stylesheet" type="text/css" href="styles/prelucrare.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src='https://kit.fontawesome.com/a076d05399.js'></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body> 

  <div id="nav-bar"> 
        <ul> 
            <li><a class="home" href="index.php">Acasă</a></li>
            <li><a class="shop" href="Preturi.php">Magazin</a></li>
            <li><a class="friends" href="https://www.facebook.com/mirasoil16/">Hai să fim prieteni!</a></li>
        </ul>
    </div>
    <div class="title">
        <h1>Procesul de prelucrare</h1>
    </div>
    <div class="topnav">
  <a class="active" href="index.php">Acasă</a>
  <!-- Navigation links (hidden by default) -->
  <div id="myLinks">
    <a class="shop" href="Preturi.php">Magazin</a>
    <a class="friends" href="https://www.facebook.com/mirasoil16/">Hai să fim prieteni!</a>
  </div>
  <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
  <a href="javascript:void(0);" class="icon" onclick="meniu()">
    <i class="fa fa-bars"></i>
  </a>
</div>

    <section id="descriere">
        <div class="bg-text">
            <h3 class="text">Procesul de prelucare în urma căruia se obține uleiul esențial constă în mai multe etape: </h3>
             <p class="text-centrat" style="text-align: center; font-size: 16px;">Primul pas constă în recoltarea florilor de lavandă, care se face manual momentan, de 2 ori pe an. Prima recoltă are loc în luna iulie și este cea mai bogată recoltă. <br>A doua recoltă are loc în luna septembrie, însă aceasta este considerabil mai mică decât precedenta.
            </p>
            <div class="row1">
                <div class="column1">
                    <iframe class="videoclip" src="https://www.youtube.com/embed/690nVZoRM5g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="column1">
                    <p class="text"><span>Imediat ce florile de lavandă au fost recoltate,</span>începe procesul de distilare prin care se obține apa cu uleiul esențial. Această metodă este una destul de complexă.
                        Florile de lavandă sunt puse într-un recipient cu capacitatea de 1000 de litri, în așa fel încât aceasta să fie compresată bine pentru a nu rămâne aer. <br>Într-un alt recipient mai mic se încălzește apa prin sistemul de ardere al lemnelor, iar când aceasta a ajuns la o temperatură suficient de ridicată, aburul este eliberat printr-un tub ermetic în recipientul cu lavandă. Astfel, aburul trece prin florile de lavandă, extrage uleiul și esența din acestea, iar printr-n alt tub ermetic ajung într-un al treile recipient, plin cu apă rece, unde prin condens se transformă în apă florală și ulei. <br>Acestea din urmă sunt colectate într-un vas mai mic. Datorită densității mult mai mari a uleiului, aceste două compoziții nu se amestecă, uleiul rămânând la suprafață, fapt ce ușurează foarte mult separarea uleiului.

                    </p>
                    <p class="text">
                        <span>Toată</span>ideea constă în transformarea apei din lichid în vapori (abur) pentru a putea urca prin vasul încărcat cu flori. Datorită temperaturii ridicate a aburului și a recipientului închis etanș, mugurele de lavandă (caliciul) este stimulat să își elibereze uleiurile esențiale.<br> Al treilea recipient la care se leagă sistemul este numit condensator, care are rolul de a răci țeava care conține aburul și particulele de ulei esențial. Datorită conținutului său de apă rece, aburul trece din starea de gaz în starea lichidă, prin procesul de condensare.
                        Apa din jurul bobinei condensatorului se încălzește în timpul acestui proces, astfel încât avem ieșirea apei calde din robinet în partea superioară a condensatorului. Apa caldă este înlocuită cu apa rece care intră în fundul vasului condensatorului. Acest lucru permite condensatorului să răcească aburul treptat. După ce se răcește și se întoarce la lichid, se scurge de capătul condensatorului în pâlnia noastră separatoare.
                    </p>
                    <p class="text">Acesta este procesul de prelucrare al florilor de lavandă. Bineînțeles, el diferă de la regiune la regiune și de la producător de la producător.
            </p>
                </div>
            </div>

        </div>
        </div>
    </section>
    <!----------------Portofoliu
        <section>
            <div class="row">
                <div class="column">
                  <img src="img/recoltare1.jpg" alt="recoltare" width="100%" onclick="myFunction(this);">
                </div>
                <div class="column">
                  <img src="img/recoltare4.jpg" alt="recoltare" width="100%" onclick="myFunction(this);">
                </div>
                <div class="column">
                  <img src="img/recoltare5.jpg" alt="recoltare" width="100%" onclick="myFunction(this);">
                </div>
                <div class="column">
                  <img src="img/distilare1.jpg" alt="distilare"  width="100%" onclick="myFunction(this);">
                </div>
                <div class="column">
                    <img src="img/distilare2.jpg" alt="distilare"  width="100%" onclick="myFunction(this);">
                  </div>
                  <div class="column">
                    <img src="img/distilare3.jpg" alt="distilare"  width="100%" onclick="myFunction(this);">
                  </div>
              </div>
              ------------------->
              <!-- The expanding image container -->
              <div class="container">
                <!-- Close the image -->
                <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
              
                <!-- Expanded image -->
                <img id="expandedImg" style="width:100%">
              
                <!-- Image text -->
                <div id="imgtext"></div>
              </div>

        
    </section>
    <?php include 'sections/footer.sec.php'; ?>
    <script src="js/prelucrare.js"></script>
</body>

</html>