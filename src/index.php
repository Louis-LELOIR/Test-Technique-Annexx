<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <title>Annexx's Technical Test</title>
</head>
<body>
    <?php
        #phpinfo();
        #echo("<p>Hello World<p>")
    ?>
    <section class="reservation">
        <div id="reservationTitle">
            <h1>
                Réservez votre box en 4 étapes
            </h1>
        </div>
        <div id="reservationSteps">
            <div class="box" id="choose">
                <div class="stepText">
                    <h2>1. CHOISISSEZ</h2>
                    <p>La taille de box qu'il vous faut avec notre <span id="links"><a href="https://www.annexx.com/guide-des-tailles.php">simulateur en ligne</a></span>
                    </p>
                </div>
                <div class="stepLogo">
                    <img width="70px" alt="Icone de box" src="img/BOX-v2.png">
                </div>
            </div>
            <div class="box" id="reserve">
                <div class="stepText">
                    <h2>2. RÉSERVEZ</h2>
                    <p>Le box dans la ville de votre choix en quelques clics</p>
                </div>
                <div class="stepLogo">
                    <img width="80px" height="35px" alt="Icone représentant une main qui clic sur un bouton réserver" src="img/Reserver.png">
                </div>
            </div>
            <div class="box" id="finalize">
                <div class="stepText">
                    <h2>3. FINALISEZ</h2>
                    <p>Votre contrat à distance avec la <b>location zéro contact</b></p>
                </div>
                <div class="stepLogo">
                    <img width="35px" alt="Icone représentant un contrat" src="img/contract-2.png">
                </div>
            </div>
            <div class="box" id="move">
                <div class="stepText">
                    <h2>4. DÉMÉNAGEZ</h2>
                    <p>Quand vous le souhaitez.<br/> Besoin de <span id="links"><a href="https://www.boutiquedudemenagement.com/">cartons</a></span> ?</p>
                </div>
                <div class="stepLogo">
                    <img width="50px" alt="Icone représentant un camion de livraison" src="img/delivery-truck.png" style="transform: scaleX(-1);">
                </div>
            </div>
        </div>
        <div id="reservationForm">
            
            <form action="post.php" method="POST"> 
                <img width="auto" src="img/fleche.png" id="fleche">
                <input type="text" name="code_postal" pattern="[0-9]{5}" placeholder="Ville ou code postal ..." id="finBoxZipCode"/>
                <input type="submit" value="TROUVER MON BOX" id="finBoxInputButton"/>
            </form>
        </div>
    </section>
    
</body>
</html>