<html>
<head>
	<title>Prepare Your TimeTable</title>
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
	<script>
	var flag=true;
	function CreateTextBox()
	{
		var subj=document.f.subj.value;
		if(flag==true)
		{
			for(i=1;i<=subj;i++)
			{
			//For name of Subject
			var lsubname=document.createElement("label");
			lsubname.innerHTML='<br> Enter Name of Subject: '+i+'&nbsp;';
			document.getElementById('s').appendChild(lsubname);
			var tsubname=document.createElement("input");
			tsubname.type='text';
			tsubname.name='s'+i+'Name';
			tsubname.required='true';
			document.getElementById('s').appendChild(tsubname);
			
			//For no of lectures of Subject
			var lsubno=document.createElement("label");
			lsubno.innerHTML='&nbsp;&nbsp;Total No. of Lectures in a week for Subject: '+i+'&nbsp;';
			document.getElementById('s').appendChild(lsubno);
			var tsubno=document.createElement("input");
			tsubno.type='number';
			tsubno.name='l'+i+'No';
			tsubno.required='true';
			document.getElementById('s').appendChild(tsubno);
			
			//To confirm if pracs are there or not
			var lsprac=document.createElement("label");
			lsprac.innerHTML='&nbsp;&nbsp;Pracs for Subj: '+i+'&nbsp;';
			document.getElementById('s').appendChild(lsprac);
			
			var radpracy=document.createElement("input");
			radpracy.type='radio';
			radpracy.name='S'+i;
			radpracy.value='True';
			radpracy.checked='true';
			document.getElementById('s').appendChild(radpracy);
			var lpracy=document.createTextNode("Yes");
			document.getElementById('s').appendChild(lpracy);
	
			var radpracn=document.createElement("input");
			radpracn.type='radio';
			radpracn.name='S'+i;
			radpracn.value='False';
			document.getElementById('s').appendChild(radpracn);
			var lpracn=document.createTextNode("No");
			document.getElementById('s').appendChild(lpracn);
			flag=false;
			}
		}
	}
	</script>
</head>
<body style="background-color:violet">
<center>
	<img src="2pic.jpg" width="60%" height="12%">
</center>
<br>
	<h3><marquee class="mar">AR TimeTable Maker</marquee></h3>
<br>
	<form name="f" method="post" style="background-color:purple" action="PrepTTpg2.php">
		<fieldset>
			<legend style="color:white; font-size:50" align=center>Enter Details</legend>
		<center>
		<h3>
			<div style="color:white">
				Select College Start Timing:	&nbsp;<select name="StartTime">
							      <option VALUE='1'>8am</option>
							      <option VALUE='2'>9am</option>
							      <option VALUE='3'>10am</option>
							      </select>
			</div><br>
			<div style="color:white">
				Select College End Timing:	&nbsp;<select name="EndTime">
							      <option VALUE='1'>2pm</option>
							      <option VALUE='2'>3pm</option>
							      <option VALUE='3'>4pm</option>
							      <option VALUE='3'>5pm</option>
							      </select>
			</div><br>
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
		</fieldset>
	</form>
</body>
</html>