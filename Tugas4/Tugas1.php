<?php
$warna = array("hijau", "kuning", "kelabu", "merah muda");
$warna_biru = array("biru");

echo "Balonku ada lima.</br> 
    Rupa-rupa warna-nya.</br> " .
    implode(",", $warna) . " dan " . implode(",", $warna_biru) . ".<br>
    Meletus balon " . $warna[0] . " DOR!!!.</br>
    Hatiku sangat kacau.";
?>