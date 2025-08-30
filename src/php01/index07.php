<?php

function triangle($base , $height) {
    return $base * $height / 2;
}

function square($base , $height) {
    return $base * $height;
}

function trapezoid($upperBase , $lowerBase , $height) {
    return ($upperBase + $lowerBase) * $height / 2;
}

echo triangle(5,3)."<br>";
echo square(30,122)."<br>";
echo trapezoid(39,54,12)."<br>";