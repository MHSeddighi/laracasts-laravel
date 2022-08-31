<?php

function slugify(String $str, String $divider)
{
    $str = preg_replace('#[^\pL\d]+#u', $divider, $str);
    $str = strtolower($str);
    $str = trim($str, '-');
    return $str;
}

function convertSecondsToClockTime($seconds)
{
    $hours = floor($seconds / 3600);

    if ($hours > 0) {
        $minutes = sprintf("%02d", ($seconds / 60) % 60);
        $remainSeconds = sprintf("%02d", $seconds % 60);
        return "${hours}h ${minutes}m ${remainSeconds}s";
    }

    $minutes = ($seconds / 60) % 60;
    $remainSeconds = sprintf("%02d", $seconds % 60);
    return "${minutes}m ${remainSeconds}s";
}
