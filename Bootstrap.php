<?php

require('Constants.php');

function loadClass($module){
    $filename = $module.'.module.php';
    if (!file_exists($filename)){
        die("Module unknown : ".$filename);
    }
    require($filename);
}
spl_autoload_register('loadClass');