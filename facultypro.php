<html>
<head>
	
	<link href="pronotes.css" rel="stylesheet">
<style>
	body{
	margin:0px;
	}
		
		
</style>
</head>
<body>
	<form onsubmit="return check()">	
		<div class="main">
		

				<div class="headers">
					
				<h1>
			Registration Page</h1>
			

				</div>
				
				
			
			<div class ="mainarea">
			<p class="usernametextlog" >
			
			Register
			
			<?php
			echo "<table > <tr><td><p class=\"usernametext\" >Id</td>";
			echo "<td><input type= 'text' placeholder='Enter mobile number' class='u' name='id'></td></tr>
			<tr><td><p class=\"usernametext\" > Name</td>
			
			<td> <input type='text' placeholder='Enter password' class ='u' name='nm'></td></tr> 
		
				<tr><td><p class=\"usernametext\" >	Branch</td>	<td> 
				<select class=\"u\" name='br'>
				<option> CS</option>
				<option> EEE</option>
				<option> IT</option>
				<option> Mech</option>
				<option> Civil</option>
				</select>
				</td></TR>
					
					
				<tr><td><p class=\"usernametext\" >	Mobile </td>	<td><input type='text' placeholder='Enter mobile' class ='u' name='mo'></td></tr> 
			<tr><td> <p class=\"usernametext\" >Semester</td>	<td>
				<select class=\"u\" name='sm'>
				<option> 1st</option>
				<option> 2nd</option>
				<option> 3rd</option>
				<option> 4th</option>
				<option> 5th</option>
				<option> 6th</option>
				</select>
				</td></TR> 
			 
			<tr><td><p class=\"usernametext\" > Password </td>	<td><input type='text' placeholder='Enter password' class ='u' name='ps'></td></tr>
			
			</table>";
			
	 echo "<input type='submit' value='Register'class='loginbutton'>";
		
		 ?>
		
			</div>
				</div>
				 </form>
				
				<?php
	
		if(isset($_REQUEST["id"]))
		{
			$id=$_REQUEST["id"];
			$nm=$_REQUEST["nm"];
			$br=$_REQUEST["br"];
			$mo=$_REQUEST["mo"];
			$sm=$_REQUEST["sm"];
			$ps=$_REQUEST["ps"];
			
			$st="student";
			
			
			 $con=mysqli_connect('localhost','root','','noteupload');
			 
			 $q= "insert into register values('$nm','$id','$br','$mo','$sm','$ps')";
			$res= mysqli_query($con,$q);
			
			
			
			if($res)
					{
						echo "Thankyou :) You are succesfully registered!";
					}
					
					else
						{
							echo "please enter again";
						}
					
			$qr="insert into login values('$id','$ps','$st')";		
				$rs= mysqli_query($con,$qr);
								
		}
		?>
				