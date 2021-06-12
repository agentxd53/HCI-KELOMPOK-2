<?php

$serverName = "localhost";
$dBUsername = "id16484008_pujonstrawberry30";
$dBPassword = "p<B)Aget1Hwr3vl4";
$dBName = "id16484008_pujonstrawberry";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}