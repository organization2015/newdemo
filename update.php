<?php
include('database.php');

$sql="UPDATE Persons SET Age=24 WHERE FirstName='Rita' AND LastName='John'";

// Execute query
if (mysqli_query($con,$sql))
  {
  	echo "1 record deleted successfully";
  }
else
  {
  	echo "Error deleting values: " . mysqli_error($con);
  }
?>
