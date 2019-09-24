<?php
echo "Hoeveel vrienden zal ik vragen om hun droom?\r\n";
$a = readline();
$b = 0;
$dromen = array();
while ($b < $a) {
	echo "Wat is jouw naam?\r\n";
	$naam = readline();
	echo "Hoeveel dromen ga je opgeven?\r\n";
	$c = readline();
	$d = 0;
	$droom = array();
	while ($d < $c) {
		echo "Wat is jouw droom?\r\n";
		array_push($droom, readline());
		$d++;
	}
	$e = array("dromen" => $droom, "naam"=>$naam);
	array_push($dromen, $e);
	echo "\r\n\r\n\r\n";
	$b++;
}
foreach ($dromen as $droom) {
	echo $droom["naam"];
	echo " heeft dit als droom: ";
	$bbb = count($droom['dromen']);
	$ccc = 1;
	foreach ($droom["dromen"] as $aaa) {
		if ($ccc == $bbb) {
			echo $aaa;
			echo ".\r\n";
		} else {
			echo $aaa;
			echo ", ";
		}
		$ccc++;
	}
}
?>