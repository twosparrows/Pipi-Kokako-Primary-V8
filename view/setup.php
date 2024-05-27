<?php 

/*

THEME SETUP

Updated at 27/05/2024 4:06.37am UTC

Included via functions/site.php

*/


$GLOBALS['updatedTimeStamp'] = 1716782797;

// Development Modes
$GLOBALS['kokakoDevelopmentMode'] = false;
$GLOBALS['kokakoNoJavaScriptTestMode'] = false;

// Additional Body Classes
$GLOBALS['additionalBodyClasses'] = "";

// Sections
$GLOBALS['availableSectionTypes'] = array( // NB: Text section is always available
     "text",
);

// JS Dependencies
$GLOBALS['jsDependencies'] = array();

// Widget areas
$GLOBALS['widgetAreas'] = array(
     "header-widget" => true,
     "number-of-footer-columns" => 4,
     "subfooter-widget" => false,
);

// Colour Schemes
$GLOBALS['colourSchemes'] = array(
);

// Logos
$GLOBALS['headerLogoWidth'] = 185;
$GLOBALS['headerLogoWidthRetina'] = 370;
$GLOBALS['footerLogoWidth'] = 255;
$GLOBALS['footerLogoWidthRetina'] = 510;

// Functions

function tsp_updated_timeStamp() { // Can also be called as a function if required, although higher overhead than a variable
     return 1716782797;
}

?>