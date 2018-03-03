<?php
    // Game Controller
    $options = array(0, 0);
    $image_path = array("", "");
    $btn_name   = array("", "");

    // select options
    for ($i = 0; $i < 2; $i++) {
        $options[$i] = rand(0, 4);
        list($path, $name) = definePath($options[$i]);
        $image_path[$i] = $path;
        $btn_name[$i] = $name;
    }
    
    // controlls the path chosen
    if ( isset($_POST['option_1']) ) {
        $action = $_POST['option_1'];
        if ($action == "Battle enemy") {
            $life = $life - 10;
        }
        if ($action == "Take Chest") {
            $life = $life + 20;
        }
    } else if ( isset($_POST['option_2']) ) {
        $action = $_POST['option_2'];
        if ($action == "Battle enemy") {
            $life = $life - 10;
        }
        if ($action == "Take Chest") {
            $life = $life + 20;
        }
    }

    $_SESSION["life"] = $life; $_SESSION["mana"] = $mana;
    $_SESSION["exp"] = $exp;
    $_SESSION["damage"] = $damage; $_SESSION["armor"] = $armor;
    $_SESSION["str"] = $str; $_SESSION["agi"] = $agi; $_SESSION["int"] = $int;

    function definePath ($option) {
        switch ($option) {
            case 0:
                $path = "resources/images/chest.png";
                $name = "Take Chest";
                break;
            case 1:
                $path = "resources/images/dungeon_01.png";
                $name = "Take Path";
                break;
            case 2:
                $path = "resources/images/dungeon_02.png";
                $name = "Take Path";
                break;
            case 3:
                $path = "resources/images/dungeon_03.png";
                $name = "Take Path";
                break;
            case 4:
                $path = "resources/images/enemy.png";
                $name = "Battle enemy";
                break;
        }
        return array($path, $name);
    }
?>