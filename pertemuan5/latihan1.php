<?php
// Array
// Element pada array boleh memiliki tipe data yang berbeda
// Cara lama
$hari = array("Senin","Selasa","Rabu");

// Cara baru
$bulan = ["Jan","Feb"];
print_r($hari);
echo "<br>";
echo $hari[0];

$hari[] = "kamis";
echo "<br>";

?>