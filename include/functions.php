<?php

//Creates a fontawsome icon
function createIcon($icon_code)
{
    $icon = '<i class="fa fa-'. $icon_code .'"></i>';
    echo $icon;
}

//Creates a fontawsome icon and sets the line-height
function createIconLineHeight($icon_code, $line_height)
{
    $icon = '<i class="fa fa-'. $icon_code .'" style="line-height: '.$line_height.' !important;"></i>';
    echo $icon;
}