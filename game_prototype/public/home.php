<?php require_once("../connection/connection.php"); ?>
<?php
    //initialize session
    session_start();

    require_once("controller/localVariables.php");
    require_once("controller/sessionController.php");
    require_once("controller/gameController.php");

?>

<html>
    <head>
        <title>Home</title>
        <meta charset="UTF-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="resources/css/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="resources/css/general.css">
    </head>
    
    <body onload="initialize()">       
        <?php require_once("fragments/header.php"); ?>
        <main>
            <div id="infoCharacter">
                <div class="infoElement ibe">
                    <h5 id="character_name"><?php echo $character_name ?></h5>
                    <h5 id="character_class"><?php echo $character_class ?></h5>
                </div>
                <div class="infoElement ibe">
                    <h5 id="">Peso: 50/500</h5>
                    <h5 id="">Gold: 500g</h5>
                </div>
                <h5 id="life" class="infoCenter ibe text-center"><?php echo "Life: " . $life . "/" . $max_life ?></h5>
                <h5 id="mana" class="infoCenter ibe text-center"><?php echo "Mana: " . $mana . "/" . $max_mana ?></h5>
                <h5 id="exp" class="infoCenter ibe text-center"><?php echo "Exp: 25/40000" ?></h5>
            </div>

            <!-- Tabs -->
            <div id="principal" class="tab">
                <?php include("fragments/tabs/principal.php"); ?>
            </div>

            <div id="character" class="tab">
                <?php include("fragments/tabs/character.php"); ?>
            </div>

            <div id="map" class="tab">
                <?php include("fragments/tabs/map.php"); ?>
            </div>

            <!-- Tab Selector -->
            <div>
                <button id="btnPrincipal" class="tablink" onclick="openTab('principal')">Principal</button>
                <button id="btnCharacter" class="tablink" onclick="openTab('character')">Personagem</button>
                <button id="btnMap" class="tablink" onclick="openTab('map')">Map</button>
            </div>    
        </main>
        <?php require_once("fragments/footer.php"); ?>
    </body>
</html>