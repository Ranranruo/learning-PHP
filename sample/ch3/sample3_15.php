<?php
    $thisday = mktime(0, 0, 0, 8, 3, 20);
    $tomorrow = mktime(0, 0, 0, date("m"), date("d")+1, date("Y"));
    $lastmonth = mktime(0, 0, 0, date("m")-1, date("d"), date("Y"));
    $nextyear = mktime(0, 0, 0, date("m"), date("d"), date("Y")+1);

    echo "$thisday => ". date("Y-m-d", $thisday). "<br/>";
    echo "$tomorrow => ". date("Y-m-d", $tomorrow). "<br/>";
    echo "$lastmonth => ". date("Y-m-d", $lastmonth). "<br/>";
    echo "$nextyear => ". date("Y-m-d", $nextyear). "<br/>";
?>
