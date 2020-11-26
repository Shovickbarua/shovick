<!DOCTYPE html>
<html>
	<body>
	<?php
	
		print_r($_POST);
		$fullName ="";
		if(isset($_POST['btn'])){
		$fNum = $_POST['fNum'];
		$lNum = $_POST['lNum'];
		
	}
		for($i=0;$i<=10;$i++)
		{
			if(i%2==0)
			{
				echo "even :".$i."+";
			}
			else{
				echo "odd :".$i."+";
			}
			echo "series :".$i."+";
		
		}
		

	?>
	<form method ="POST">
		<table>
		  <tr>
			<td>First Number</td>
			<td><input type ="text" name="fNum"></td>
		  </tr>
		  <tr>
			<td>Last Number</td>
			<td><input type ="text" name="lNum"></td>
		  </tr>
		  <tr>
			<td><input type ="submit" name="btn" value="submit"></td>
		  </tr>
		</table>
	</form>
	</body>
</html>

 