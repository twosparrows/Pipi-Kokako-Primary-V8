<?php 

/*

THEME SETUP

Updated at 30/05/2024 3:46.29am UTC

Included via functions/site.php

*/


$GLOBALS['updatedTimeStamp'] = 1717040788;

// Development Modes
$GLOBALS['kokakoDevelopmentMode'] = false;
$GLOBALS['kokakoNoJavaScriptTestMode'] = false;

// Additional Body Classes
$GLOBALS['additionalBodyClasses'] = "header-fixed";

// Sections
$GLOBALS['availableSectionTypes'] = array( // NB: Text section is always available
     "call-to-action",
     "centred-images",
     "image-grid",
     "latest-posts",
     "multiple-columns",
     "multiple-rows",
     "page-banner",
     "page-heading",
     "slider",
     "testimonials",
     "text",
     "text-with-photo",
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
     "colour-scheme-light" => array(
          "description" => "Light Colour Scheme (Light background, dark text)",
          "background"  => "#fff",
     ),
     "colour-scheme-dark" => array(
          "description" => "Dark Colour Scheme (dark background, light text)",
          "background"  => "#1a1a1a",
     ),
     "colour-scheme-foo" => array(
          "description" => "Foo Colour Scheme (Foo background, light text)",
          "background"  => "[colour-brand-foo]",
     ),
);

// Logos
$GLOBALS['headerLogoWidth'] = 185;
$GLOBALS['headerLogoWidthRetina'] = 370;
$GLOBALS['footerLogoWidth'] = 255;
$GLOBALS['footerLogoWidthRetina'] = 510;

// Functions

function tsp_updated_timeStamp() { // Can also be called as a function if required, although higher overhead than a variable
     return 1717040788;
}

?>