<?php

$tuition = 9000; // tuition fee

$commission = ($tuition > 20000) ? ($tuition * 0.25) : (($tuition >= 10000) ? ($tuition * 0.2) : (($tuition >= 7000) ? ($tuition * 0.15) : "Invalid Data"));

if ($commission != "Invalid Data") {
    echo "The commission for a tuition fee of $tuition is $commission.";
} else {
    echo $commission;
}

?>