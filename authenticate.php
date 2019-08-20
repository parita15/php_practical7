<?php
$conn=mysqli_connect("localhost:3308","root","","practical7");
if(!$conn)
{
	die("Connection fail".mysqli_connect_error());
}
echo "connected successfully";
$usname=$_POST['Uname']."<br>";
$pass=$_POST['Pwd'];
$sql="select Uname,Pwd from login";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	if('$usname'=='Uname')
	{
		echo "<table>";
    	echo "<tr>";
   		echo "<th>UserName</th>";
    	echo "<th>Password</th>";
   		echo "</tr>";
  		while($row = mysqli_fetch_array($result))
  		{
    		echo "<tr>";
    		echo "<td>" . $row['Uname'] . "</td>";
   			echo "<td>" . $row['Pwd'] . "</td>";
   			echo "</tr>";
 		}
    	echo "</table>";
        // Free result set
    	mysqli_free_result($result);
	}	 
	else{
        echo "No records matching your query were found.";
    }
}
else
{
	echo "Byee...";
}
$conn->close();
?>