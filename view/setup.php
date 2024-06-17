<?php 

/*

THEME SETUP

Updated at 17/06/2024 7:08.09am UTC

Included via functions/site.php

*/


$GLOBALS['updatedTimeStamp'] = 1718608087;

// Development Modes
$GLOBALS['kokakoDevelopmentMode'] = false;
$GLOBALS['kokakoNoJavaScriptTestMode'] = false;

// Additional Body Classes
$GLOBALS['additionalBodyClasses'] = "header-fixed";

// Sections
$GLOBALS['availableSectionTypes'] = array( // NB: Text section is always available
     "columns",
     "heading",
     "posts",
     "text",
     "text-and-image",
);

// JS Dependencies
$GLOBALS['jsDependencies'] = array(
     "jquery" => array(
          "source" => "//ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js",
          "dependencies" => "",
          "version" => "3.6.0",
          "in_footer" => "1",
          "user_logged_in" => "",
     ),
     "gsap" => array(
          "source" => "//cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js",
          "dependencies" => "",
          "version" => "3.9.1",
          "in_footer" => "1",
          "user_logged_in" => "",
     ),
     "scrollMagic" => array(
          "source" => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js",
          "dependencies" => array("jquery", "gsap"),
          "version" => "2.0.7",
          "in_footer" => "1",
          "user_logged_in" => "",
     ),
     "scrollMagicJquery" => array(
          "source" => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/jquery.ScrollMagic.min.js",
          "dependencies" => array("jquery", "gsap", "scrollMagic"),
          "version" => "2.0.7",
          "in_footer" => "1",
          "user_logged_in" => "",
     ),
     "scrollMagicGsap" => array(
          "source" => "//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js",
          "dependencies" => array("jquery", "gsap", "scrollMagic", "scrollMagicJquery"),
          "version" => "2.0.7",
          "in_footer" => "1",
          "user_logged_in" => "",
     ),
);

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
          "background"  => "#f00",
     ),
     "colour-scheme-green" => array(
          "description" => "Green Colour Scheme (Green background, dark text)",
          "background"  => "#81d742",
     ),
);

// Logos
$GLOBALS['headerLogoWidth'] = 185;
$GLOBALS['headerLogoWidthRetina'] = 370;
$GLOBALS['footerLogoWidth'] = 255;
$GLOBALS['footerLogoWidthRetina'] = 510;

// Additional settings
$GLOBALS['apply_text_content_width_max_site_wide'] = true;

// Functions

function tsp_updated_timeStamp() { // Can also be called as a function if required, although higher overhead than a variable
     return 1718608087;
}

?>