<?php

$autoloadPath = __DIR__;

$found = false;

while (!$found && $autoloadPath !== DIRECTORY_SEPARATOR) { // Prevent infinite loop

    $autoloadFile = $autoloadPath . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

    if (file_exists($autoloadFile)) {

        $found = true;

        break;

    }

    $autoloadPath = dirname($autoloadPath);

}

if ($found) {

    require_once $autoloadFile;

} else {

    // Load the autoload() for composer dependencies located in the Services folder

    print '<h1>Try running <code>composer install</code> from the root directory of your project.</h1>';

    die(1);

}

