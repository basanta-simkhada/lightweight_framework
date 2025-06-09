<?php

/**
 * -----------------------------------------------------------------------------
 * Warning: Do not modify the configurations if you are not sure.
 * 
 * Note: Make sure to backup the configuration file before any modification
 * 
 * @version 1.0
 * @author Alpha Box Pvt. Ltd.
 * -----------------------------------------------------------------------------
 */

// ---------------- project constants ----------------
define("ROOT_DIR", dirname(__DIR__));
define("CORE", ROOT_DIR . DIRECTORY_SEPARATOR . "core" . DIRECTORY_SEPARATOR);
define("LOG_DIR", ROOT_DIR . DIRECTORY_SEPARATOR . "storage" . DIRECTORY_SEPARATOR . "log" . DIRECTORY_SEPARATOR);
define("SESSION", ROOT_DIR . DIRECTORY_SEPARATOR .  "storage" . DIRECTORY_SEPARATOR . "session" . DIRECTORY_SEPARATOR);

// ---------------- timezone & timestamp settings ----------------
define("TIME_ZONE", "Asia/Kathmandu");
define("TIME_STAMP", "[ Y-n-j ─ g:i:s A ]");