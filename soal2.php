<?php

function calculateBMI($massa, $tinggi)
{
    return $massa / ($tinggi * $tinggi);
}

//Data 1
$massa_mark1 = 78;
$tinggi_mark1 = 1.69;

$massa_john1 = 92;
$tinggi_john1 = 1.95;

$bmi_mark1 = calculateBMI($massa_mark1, $tinggi_mark1);
$bmi_john1 = calculateBMI($massa_john1, $tinggi_john1);

$markHigherBMI_1 = $bmi_mark1 > $bmi_john1;

echo "<h2>Data 1:</h2>";
echo "BMI Mark: $bmi_mark1\n";
echo "<br>";
echo "BMI John: $bmi_john1\n";
echo "<br>";
echo "Data 1 Mark Memiliki BMI Lebih Tinggi Dari John: " . ($markHigherBMI_1 ? 'True' : 'False') . "\n";
echo "<hr>";

//Data 2
$massa_mark2 = 95;
$tinggi_mark2 = 1.88;

$massa_john2 = 85;
$tinggi_john2 = 1.76;


$bmi_mark2 = calculateBMI($massa_mark2, $tinggi_mark2);
$bmi_john2 = calculateBMI($massa_john2, $tinggi_john2);


$markHigherBMI_2 = $bmi_mark2 > $bmi_john2;


echo "<h2>Data 2:</h2>";
echo "BMI Mark: $bmi_mark2\n";
echo "<br>";
echo "BMI John: $bmi_john2\n";
echo "<br>";
echo "Data 2 Mark Memiliki BMI Lebih Tinggi Dari John: " . ($markHigherBMI_2 ? 'True' : 'False') . "\n";
