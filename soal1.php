<?php

$lumba_lumba = [95, 102, 98];
$koala = [100, 97, 101];

function hitungRataRata($skor)
{
    $total = array_sum($skor);
    $jumlah_pertandingan = count($skor);
    return $total / $jumlah_pertandingan;
}

$rataRata_tim_lumbaLumba = hitungRataRata($lumba_lumba);
$rataRata_tim_Koala = hitungRataRata($koala);

$skor_minimum = 100;

echo "<h2>Data 1</h2>";
echo "Lumba-Lumba: (95, 102, 98)";
echo "<br>";
echo "Koala: (100, 97, 101)";
echo "<br>";

if ($rataRata_tim_lumbaLumba > $rataRata_tim_Koala && $rataRata_tim_lumbaLumba >= $skor_minimum) {
    echo "Hasil = Tim Lumba-lumba menang ";
} elseif ($rataRata_tim_Koala > $rataRata_tim_lumbaLumba && $rataRata_tim_Koala >= $skor_minimum) {
    echo "Hasil = Tim Koala menang ";
} elseif ($rataRata_tim_lumbaLumba == $rataRata_tim_Koala && $rataRata_tim_lumbaLumba >= $skor_minimum && $rataRata_tim_Koala >= $skor_minimum) {
    echo "Hasil = Tim seri  ";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";

// Data Bonus 1
$lumbaLumba_bonus1 = [97, 112, 101];
$koala_bonus1 = [109, 95, 123];

$rataRata_tim_lumbaLumba_bonus1 = hitungRataRata($lumbaLumba_bonus1);
$rataRata_tim_Koala_bonus1 = hitungRataRata($koala_bonus1);

echo "<h2>Data Bonus 1</h2>";
echo "Lumba-Lumba: (97, 112, 101)";
echo "<br>";
echo "Koala: (109, 95, 123)";
echo "<br>";

if ($rataRata_tim_lumbaLumba_bonus1 > $rataRata_tim_Koala_bonus1 && $rataRata_tim_lumbaLumba_bonus1 >= $skor_minimum) {
    echo "Hasil = Tim Lumba-lumba menang ";
} elseif ($rataRata_tim_Koala_bonus1 > $rataRata_tim_lumbaLumba_bonus1 && $rataRata_tim_Koala_bonus1 >= $skor_minimum) {
    echo "Hasil = Tim Koala menang ";
} elseif ($rataRata_tim_lumbaLumba_bonus1 == $rataRata_tim_Koala_bonus1 && $rataRata_tim_lumbaLumba_bonus1 >= $skor_minimum && $rataRata_tim_koala_bonus1 >= $skor_minimum) {
    echo "Hasil = Tim seri ";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";

// Data Bonus 2
$lumbaLumba_bonus2 = [97, 112, 101];
$koala_bonus2 = [109, 95, 106];

$rataRata_tim_lumba_lumba_bonus2 = hitungRataRata($lumbaLumba_bonus2);
$rataRata_tim_koala_bonus2 = hitungRataRata($koala_bonus2);

echo "<h2>Data Bonus 2</h2>";
echo "Lumba-Lumba: (97, 112, 101)";
echo "<br>";
echo "Koala: (109, 95, 10)";
echo "<br>";

if ($rataRata_tim_lumba_lumba_bonus2 > $rataRata_tim_koala_bonus2 && $rataRata_tim_lumba_lumba_bonus2 >= $skor_minimum) {
    echo "Hasil = Tim Lumba-lumba menang";
} elseif ($rataRata_tim_koala_bonus2 > $rataRata_tim_lumba_lumba_bonus2 && $rataRata_tim_koala_bonus2 >= $skor_minimum) {
    echo "Hasil = Tim Koala menang";
} elseif ($rataRata_tim_lumba_lumba_bonus2 == $rataRata_tim_koala_bonus2 && $rataRata_tim_lumba_lumba_bonus2 >= $skor_minimum && $rataRata_tim_koala_bonus2 >= $skor_minimum) {
    echo "Hasil = Tim seri";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";
