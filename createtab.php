<?php
include("database.php");


// Create table
$sql="CREATE TABLE TTM(ID INT NOT NULL AUTO_INCREMENT,PRIMARY KEY(ID),
Cols INT,
Rows INT,
BreakTime INT,
SubjNo INT,
Subj1Name CHAR(30),Lect1 INT,Prac1 Boolean,
Subj2Name CHAR(30),Lect2 INT,Prac2 Boolean,
Subj3Name CHAR(30),Lect3 INT,Prac3 Boolean,
Subj4Name CHAR(30),Lect4 INT,Prac4 Boolean,
Subj5Name CHAR(30),Lect5 INT,Prac5 Boolean,
Subj6Name CHAR(30),Lect6 INT,Prac6 Boolean,
Subj7Name CHAR(30),Lect7 INT,Prac7 Boolean,
Subj8Name CHAR(30),Lect8 INT,Prac8 Boolean,
Batches INT
)";

// Execute query
if (mysqli_query($con,$sql))
  {
  echo "Table created successfully";
  }
else
  {
  echo "Error creating table: " . mysqli_error($con);
  }
?>
