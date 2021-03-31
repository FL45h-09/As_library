<?php
session_start();
$regdate = date("Y/m/d");
$plan = $_SESSION["card_v"];
$duration = $_SESSION["card_d"];
if ($duration == 3) {
    $expdate = date('Y/m/d', strtotime('+3 months'));
} elseif ($duration == 12) {
    $expdate = date('Y/m/d', strtotime('+12 months'));
} elseif ($duration == 24) {
    $expdate = date('Y/m/d', strtotime('+24 months'));
} elseif ($duration == 36) {
    $expdate = date('Y/m/d', strtotime('+36 months'));
}

echo $regdate;
echo "<br>";
echo $expdate;
?>