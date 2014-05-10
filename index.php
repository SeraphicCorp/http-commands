<?php

require('Bootstrap.php');

function main(){
    if (empty($_GET) || !array_key_exists(MODULE, $_GET) || !array_key_exists(COMMAND, $_GET)){
        die("Nothing called");
    }

    $module = new $_GET[MODULE]();
    $module->execute($_GET[COMMAND]);
    echo "Done";
}
main();