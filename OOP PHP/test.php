<?php 
//soal1
$input = "Total Belanja RP 675.000";

$expInput = explode(" ", $input);

// echo $expInput[3];
echo end($expInput);

echo "<br>";
$akhir = str_replace(".", "", $expInput[3]);

echo $akhir;
echo "<br>";
echo "<br>";
//soal 2
$input = "Kd Brg:5000, NmBrg=Susu Bear Breand, HrgBrg:11.500, QtyBrg=4, TtlBayar:46.000";

$input1 = str_replace(":", "=", $input);
$input2 = str_replace(", ", "&", $input1);

echo $input2;
echo "<br>";

// parse_str("$Kd_Brg=5000&NmBrg=Susu Bear Breand&HrgBrg=11.500&QtyBrg=4&TtlBayar=46.000");
parse_str($input2);

echo $Kd_Brg."<br>";
echo $NmBrg."<br>";
echo $HrgBrg."<br>";
echo $QtyBrg."<br>";
echo $TtlBayar."<br>";