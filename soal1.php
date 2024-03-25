<?php

$lumba_lumba = [95, 102, 98];
$koala = [100, 97, 101];

function hitungRataRata($skor)
{
    $total = array_sum($skor);
    $jumlah_pertandingan = count($skor);
    return $total / $jumlah_pertandingan;
}

$rata_rata_tim_lumba_lumba = hitungRataRata($lumba_lumba);
$rata_rata_tim_koala = hitungRataRata($koala);

$skor_minimum = 100;

echo "<h2>Data 1</h2>";
echo "Lumba-Lumba: (95, 102, 98)";
echo "<br>";
echo "Koala: (100, 97, 101)";
echo "<br>";

if ($rata_rata_tim_lumba_lumba > $rata_rata_tim_koala && $rata_rata_tim_lumba_lumba >= $skor_minimum) {
    echo "Tim Lumba-lumba menang ";
} elseif ($rata_rata_tim_koala > $rata_rata_tim_lumba_lumba && $rata_rata_tim_koala >= $skor_minimum) {
    echo "Tim Koala menang ";
} elseif ($rata_rata_tim_lumba_lumba == $rata_rata_tim_koala && $rata_rata_tim_lumba_lumba >= $skor_minimum && $rata_rata_tim_koala >= $skor_minimum) {
    echo "Hasilnya seri  ";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";

// Data Bonus 1
$lumba_lumba_bonus1 = [97, 112, 101];
$koala_bonus1 = [109, 95, 123];

$rata_rata_tim_lumba_lumba_bonus1 = hitungRataRata($lumba_lumba_bonus1);
$rata_rata_tim_koala_bonus1 = hitungRataRata($koala_bonus1);

echo "<h2>Data Bonus 1</h2>";
echo "Lumba-Lumba: (97, 112, 101)";
echo "<br>";
echo "Koala: (109, 95, 123)";
echo "<br>";

if ($rata_rata_tim_lumba_lumba_bonus1 > $rata_rata_tim_koala_bonus1 && $rata_rata_tim_lumba_lumba_bonus1 >= $skor_minimum) {
    echo "Tim Lumba-lumba menang ";
} elseif ($rata_rata_tim_koala_bonus1 > $rata_rata_tim_lumba_lumba_bonus1 && $rata_rata_tim_koala_bonus1 >= $skor_minimum) {
    echo "Tim Koala menang ";
} elseif ($rata_rata_tim_lumba_lumba_bonus1 == $rata_rata_tim_koala_bonus1 && $rata_rata_tim_lumba_lumba_bonus1 >= $skor_minimum && $rata_rata_tim_koala_bonus1 >= $skor_minimum) {
    echo "Hasilnya seri ";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";

// Data Bonus 2
$lumba_lumba_bonus2 = [97, 112, 101];
$koala_bonus2 = [109, 95, 10];

$rata_rata_tim_lumba_lumba_bonus2 = hitungRataRata($lumba_lumba_bonus2);
$rata_rata_tim_koala_bonus2 = hitungRataRata($koala_bonus2);

echo "<h2>Data Bonus 2</h2>";
echo "Lumba-Lumba: (97, 112, 101)";
echo "<br>";
echo "Koala: (109, 95, 10)";
echo "<br>";

if ($rata_rata_tim_lumba_lumba_bonus2 > $rata_rata_tim_koala_bonus2 && $rata_rata_tim_lumba_lumba_bonus2 >= $skor_minimum) {
    echo "Tim Lumba-lumba menang";
} elseif ($rata_rata_tim_koala_bonus2 > $rata_rata_tim_lumba_lumba_bonus2 && $rata_rata_tim_koala_bonus2 >= $skor_minimum) {
    echo "Tim Koala menang";
} elseif ($rata_rata_tim_lumba_lumba_bonus2 == $rata_rata_tim_koala_bonus2 && $rata_rata_tim_lumba_lumba_bonus2 >= $skor_minimum && $rata_rata_tim_koala_bonus2 >= $skor_minimum) {
    echo "Hasilnya seri";
} else {
    echo "Hasil = Tidak ada tim yang memenangkan trofi.";
}
echo "<hr>";
