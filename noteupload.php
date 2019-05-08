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
			Home</h1>
			

				</div>
				
				<div class="welcome1">
				<a href="noteupload.php"><h2><p class="headermenu" > Login</h2></a>
			<a href="facultypro.php"><h2><p class="headermenu" > Register</h2></a>
				
			</div>
			
			<div class ="mainarea">
			<p class="usernametextlog" >
			
			Login
			
			<p class="usernametext" >Username
			<?php
			echo "<input type= 'text' placeholder='Enter mobile number' class='u' name='u'><br>
			<p class= 'usernametext' >Password 
			
			 <input type='text' placeholder='Enter password' class ='u' name='p'> <br>
		
					
			 
			 
		 <input type='submit' value='login'class='loginbutton'>";
		 
		
		 
		 
		 ?>
			</div>
				
				
				</div>
				
				</form>
			<?php
		
		if(isset($_REQUEST["u"]))
		{
			$un=$_REQUEST["u"];
			$pw=$_REQUEST["p"];
			
			
			
			
			
				$con=mysqli_connect('localhost','root','','noteupload');
				$q= "select status from login where roll='$un' AND pass='$pw'";
				$res= mysqli_query($con,$q);
		
				session_start();
					$_SESSION['K']="$q";
						

		
		
			if($row=mysqli_fetch_array($res))
				{
					if($row['status']=='student')
					{
							 header('Location: studentnote.php');
					}
					
					else if($row['status']=='admin')
					
					{	
					 header('Location: adminnote.php');
					}
					
					else
						
					 header('Location: teachernote.php');
				}
				
			else
				{	
					echo "Please register yourself";
				}
		}
		?>	
				
				
				</body>

</html> 