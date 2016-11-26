<?php
	// including the database connection file
	include_once("config.php");
	if(isset($_POST['Submit'])) 
	{	
		$email=$_POST['email'];	
	
	// checking empty fields
	if(empty($email)) 
	{	
			if(empty($email)) 
			{
				echo "<font color='red'>Email field is empty.</font><br/>";
			}		
	} 
	else 
	{	
		DBopen();
		$result = mysql_query("SELECT * FROM user_table");
		while($res = mysql_fetch_array($result)) 
			{
				$r[]=$res;
			}
			$i=0;
			foreach($r as $res)
			{
				echo $res['email'];
				if($email==$res['email'])
				{
					$i=2;
					break;
				}
				else 
					$i=5;
			}
			echo $i." ---- ";
		DBclose();
	}
}
?>


<html>
<head>	
	<title>FORGET PASS</title>
</head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<style style="text/css">
			
		.midle
		{
			background-color: #FFDAB9;
				border: 1px solid black;
				opacity: 0.9;
				filter: alpha(opacity=90);	
				height:300px;
				text-align: center;
		}
		</style>
<body>
	<a href="index.html">Home</a>
	<br/><br/>
	
	<div class="midle">
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<fieldset>
				<p></p>
				<p id="chk"></p>
				<p >Email Address:<br/><input type="text" required name="email" value="Email Address" onBlur="if(this.value=='')this.value='Email Address'" onFocus="if(this.value=='Email Address')this.value='' "></p>
				<br/>
				<input class="button" type="Submit" name="Submit" Value="Submit">	
				<br/>
				</fieldset>
		</form>		
		
		<script>
			document.getElementById('chk').innerHTML = 'YOUR PASSWORD WILL BE SENT TO YOUR Email';
		<?php
			echo "document.getElementById('chk').innerHTML = 'YOUR PASSWORD WILL BE SENT TO YOUR Email';";
			if($i==2)
			{
				echo "document.getElementById('chk').innerHTML = 'YOUR PASSWORD IS SENT TO YOUR Email';";
			}
			
			if($i==5)
			{
				echo "document.getElementById('chk').innerHTML = 'SORRY, THE Email Address IS NOT FOUND';";	
			}
		?>
		</script>
		
		</div>
</body>
</html>