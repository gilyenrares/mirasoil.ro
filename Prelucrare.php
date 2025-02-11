<!DOCTYPE html>
<html lang="ro">

<head>
    <title>Prelucrare</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" content="...">
    <link rel="stylesheet" type="text/css" href="styles/style.css">    
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <script type="text/javascript" src="js/main.js"></script> 
</head>

<body class="wrapper"> 
    <!--Left Sidebar Holder --> 
    <?php include 'sections/left-sidebar.sec.php'; ?>

    <!-- Page Content Holder -->
    <div id="content">
         <?php include'sections/navigation.sec.php' ?>
            <div class="process-title">
                <h1>Procesul de prelucrare</h1>
            </div>

    <section id="descriere">
        <div class="bg-text">
            <h3 class="titlu-prelucrare">Procesul de prelucare în urma căruia se obține uleiul esențial constă în mai multe etape: </h3>
             <p class="text-centrat">Primul pas constă în recoltarea florilor de lavandă, care se face manual momentan, de 2 ori pe an. Prima recoltă are loc în luna iulie și este cea mai bogată recoltă. <br>A doua recoltă are loc în luna septembrie, însă aceasta este considerabil mai mică decât precedenta.
            </p>
            <div class="row1">
                <div class="column5">
                    <iframe class="videoclip" src="https://www.youtube.com/embed/690nVZoRM5g" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="column5">
                    <p class="text-prelucrare"><span class="process-text">Imediat ce florile de lavandă au fost recoltate,</span>începe procesul de distilare prin care se obține apa cu uleiul esențial. Această metodă este una destul de complexă.
                        Florile de lavandă sunt puse într-un recipient cu capacitatea de 1000 de litri, în așa fel încât aceasta să fie compresată bine pentru a nu rămâne aer. <br>Într-un alt recipient mai mic se încălzește apa prin sistemul de ardere al lemnelor, iar când aceasta a ajuns la o temperatură suficient de ridicată, aburul este eliberat printr-un tub ermetic în recipientul cu lavandă. Astfel, aburul trece prin florile de lavandă, extrage uleiul și esența din acestea, iar printr-n alt tub ermetic ajung într-un al treile recipient, plin cu apă rece, unde prin condens se transformă în apă florală și ulei. <br>Acestea din urmă sunt colectate într-un vas mai mic. Datorită densității mult mai mari a uleiului, aceste două compoziții nu se amestecă, uleiul rămânând la suprafață, fapt ce ușurează foarte mult separarea uleiului.

                    </p>
                    <p class="text-prelucrare">
                        <span class="process-text">Toată</span>ideea constă în transformarea apei din lichid în vapori (abur) pentru a putea urca prin vasul încărcat cu flori. Datorită temperaturii ridicate a aburului și a recipientului închis etanș, mugurele de lavandă (caliciul) este stimulat să își elibereze uleiurile esențiale.<br> Al treilea recipient la care se leagă sistemul este numit condensator, care are rolul de a răci țeava care conține aburul și particulele de ulei esențial. Datorită conținutului său de apă rece, aburul trece din starea de gaz în starea lichidă, prin procesul de condensare.
                        Apa din jurul bobinei condensatorului se încălzește în timpul acestui proces, astfel încât avem ieșirea apei calde din robinet în partea superioară a condensatorului. Apa caldă este înlocuită cu apa rece care intră în fundul vasului condensatorului. Acest lucru permite condensatorului să răcească aburul treptat. După ce se răcește și se întoarce la lichid, se scurge de capătul condensatorului în pâlnia noastră separatoare.
                    </p>
                    <p class="text">Acesta este procesul de prelucrare al florilor de lavandă. Bineînțeles, el diferă de la regiune la regiune și de la producător de la producător.
            </p>
                </div>
            </div>
          </div>
    </section>

    <!----------------Footer----------->
    <?php include 'sections/footer.sec.php'; ?>
    </div>
    <!--Right Sidebar Holder --> 
    <?php include 'sections/right-sidebar.sec.php' ?>  
    <script src="js/prelucrare.js"></script>
</body>

</html>