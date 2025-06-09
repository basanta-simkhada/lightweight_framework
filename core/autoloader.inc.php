<?php

/**
 * -----------------------------------------------------------------------------
 * Autoloader recursively look up library for available class and import the
 * class on object creation.
 * 
 * @version 1.0
 * @author Alpha Box Pvt. Ltd.
 * -----------------------------------------------------------------------------
 */

// ---------------- configurations ----------------
require_once(dirname(__DIR__) . "/core/config.php");

// ---------------- core directory ----------------
if (!defined("CORE")) {
    define("CORE", __DIR__);
}

// ---------------- autoloader function ----------------
spl_autoload_register(function ($className) {
    // iterator
    $fileIterator = NULL;

    // recursively lookup
    $directory = new RecursiveDirectoryIterator(CORE, RecursiveDirectoryIterator::SKIP_DOTS);

    // one time lookup
    if (is_null($fileIterator)) {
        $fileIterator = new RecursiveIteratorIterator($directory, RecursiveIteratorIterator::LEAVES_ONLY);
    }

    // file name
    $filename = $className . ".php";

    foreach ($fileIterator as $file) {

        if (strtolower($file->getFilename()) === strtolower($filename)) {

            if ($file->isReadable()) {

                require_once $file->getPathname();
            }
            break;
        }
    }
});