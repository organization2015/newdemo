<?php
$StartTime=$_POST['StartTime'];
$EndTime=$_POST['EndTime'];
$NoOfDays=$_POST['day'];
$NoOfSubj=$_POST['subj'];
$BreakTime=$_POST['break'];
$NoOfBatch=$_POST['batch'];

echo $StartTime;
echo $EndTime;
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

<html>
<head>
	<title>Final TimeTable</title>
	<style>
		.button
		{
			border-radius: 6px;
			width:100px;
			height:30px;
			background: seagreen;
			color:white;
			font-weight:bold;
			font-size:13;
		}
		.mar
		{
			color:rgb(0,50,10); 
			font-weight:bold; 
			font-family:Times New Roman;
			font-size:60;
			font-style:italic;
		}
	</style>
</head>
<body style="background-color:violet">
<script>
document.createElement("td");
</script>
<center>
	<img src="2pic.jpg" width="60%" height="12%">
</center>
<br>
	<h3><marquee class="mar">AR TimeTable Maker</marquee></h3>
<br>
	<table style="background-color:purple">
		<center>
		<h3>
			<tr>
			<td>
			</td>
			</tr>


			<div style="color:white">
				Enter Number of working days in a Week:	&nbsp;<input type="number" name="day" required>
			</div><br>
			<div style="color:white">
				Enter Number of Subjects:	&nbsp;&nbsp;&nbsp;<input type="number" name="subj" required>
			</div><br>
			<div style="color:white">
				Select Lunch Break Time:	&nbsp;&nbsp;<select name="break">
									    <option VALUE='4'>11am-12pm</option>
									    <option VALUE='5'>12pm-1pm</option>
									    <option VALUE='6'>1pm-2pm</option>
									    </select>
			</div><br>
			<div style="color:white">
				Enter No. of Batches for Pracs:	&nbsp;&nbsp;&nbsp;<input type="number" name="batch" required>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
			</div><br>
			<div style="color:white" id="s">
			
			</div><br>
			<div><center><a  style="color:white" href="first.html"><input type="button" value="BACK" class="button"></a>&nbsp;&nbsp;&nbsp;<input type="submit" value="PREPARE TT" class="button" onClick="CreateTextBox()">&nbsp;&nbsp;<input type="reset" value="CLEAR" class="button"></center></div>
		</h3>
		</center>
		</table>
</body>
</html>