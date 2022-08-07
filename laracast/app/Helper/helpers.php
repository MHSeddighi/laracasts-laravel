<?php

function slugify(String $str,String $divider){
    $str = preg_replace('#[^\pL\d]+#u', $divider, $str);
    $str=strolower($str);
    $str=trim($str);
    return $str;
}
