<?php

include('SqlCon.php');
$userN = $_SESSION['user_n'];

$sqlQ = "SELECT * FROM subdtls WHERE userid = '$userN'";
$reslt = mysqli_query($conn, $sqlQ);
$subRowCount = mysqli_num_rows($reslt);

if ($subRowCount > 0) {

    while ($row = mysqli_fetch_array($reslt)) {
        $subPlan = $row['plan'];
        $subExp = $row['Expdate'];
        $subReg = $row['Regdate'];
        $subId = $row['Subid'];
        $subAutoR = $row['Autorenew'];
    }
    $card_v = $subPlan;
    $ts2 = strtotime($subExp);
    $ts1 = strtotime($subReg);

    $year2 = date('Y', $ts2);
    $year1 = date('Y', $ts1);

    $month2 = date('m', $ts2);
    $month1 = date('m', $ts1);

    $durationM = (($year2 - $year1) * 12) + ($month2 - $month1);
    $yesno = (bool)$subAutoR; //1 = true, 0 = false

    $checked = ($yesno) ? 'checked="checked"' : ''; //see ternary operator
}
?>