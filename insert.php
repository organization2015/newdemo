<?php

$NoOfDays=$_POST['day'];
$NoOfSubj=$_POST['subj'];
$BreakTime=$_POST['break'];
$NoOfBatch=$_POST['batch'];

echo $NoOfDays;
echo $NoOfSubj;
echo $BreakTime;
echo $NoOfBatch;

for($i=1;$i<=$_POST["subj"];$i++)
{
	$Subj[$i]=$_POST["s".$i."Name"];
	$Lect[$i]=$_POST["l".$i."No"];
	$Prac[$i]=$_POST["S".$i];
	echo $Subj[$i];
	echo $Lect[$i];
	echo $Prac[$i];

}
?>