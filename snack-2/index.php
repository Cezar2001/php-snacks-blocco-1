<?php

if (key_exists("name", $_GET) && key_exists("mail", $_GET) && key_exists("age", $_GET)) {

    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];
    
    if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
        echo "Accesso Riuscito";
    } else {
        echo "Accesso Negato";
    }
} else {
    echo "Sei pregato ad inserire i tuoi dati nell'Url.";
}
// esempio corretto: ?name=ciccio&mail=lollo@yahoo.com&age=30
// esempio errato: ?name=ciccio&mail=lolloyahoo.com&age=30
?>