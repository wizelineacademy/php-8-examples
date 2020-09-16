<?php

/** 
 * Convert HTML into PDF format.
 */
function convertHtmlToPdf(
    $htmlFilePath,
    $embedImages = false,
    $embedFonts = true,
    $scale = 1.0,
    $color = true,
) {
    $images = $embedImages ? 'embedded' : 'linked';
    $fonts  = $embedFonts  ? 'embedded' : 'linked';
    $color  = $color ? 'Full Color' : 'Grayscale';

    print "Converting {$htmlFilePath} to PDF, hold tight!\n\n"
        . "\tImage mode:      {$images}\n"
        . "\tFont mode:       {$fonts}\n"
        . "\tScale factor:    {$scale}\n"
        . "\tColor:           {$color}\n";
    
    // ... do magic ...
}

convertHtmlToPdf(
    'my-business-report.html'
);
