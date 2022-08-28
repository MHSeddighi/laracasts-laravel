<?php

function slugify(String $str, String $divider)
{
    $str = preg_replace('#[^\pL\d]+#u', $divider, $str);
    $str = strtolower($str);
    $str = trim($str, '-');
    return $str;
}
