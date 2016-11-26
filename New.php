<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) 
{	
	$name = $_POST['Name'];
	$un = $_POST['Username'];
	$add = $_POST['Address'];
	$phn = $_POST['Phone'];
	$email = $_POST['email'];
	$pass = $_POST['Password'];
	$cpass = $_POST['Confirm_Password'];
		
	if(empty($name) || empty($un) || empty($add)|| empty($pass)|| empty($phn)|| empty($cpass)|| empty($email)) 
	{
		if(empty($name)) 
		{
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($un)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($add)) {
			echo "<font color='red'>Address field is empty.</font><br/>";
		}
		
		if(empty($phn)) {
			echo "<font color='red'>Phone field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		if(empty($pass)) {
			echo "<font color='red'>Pass field is empty.</font><br/>";
		}
		
		if(empty($cpass)) {
			echo "<font color='red'>cpass field is empty.</font><br/>";
		}
		
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	
	else 
	{ 

		if($cpass==$pass) 
		{
			DBopen();
			
			$result=mysql_query ("SELECT * FROM user_table"); 
		
			while($res = mysql_fetch_array($result)) 
			{
				$r[]=$res;
			}
		
			$i=0;
			foreach($r as $res)
			{
				if($email==$res['email'])
				{
					$i=2;
					break;
				}
			}
			if($i==0)
			{
			
				$result=mysql_query ("SELECT * FROM login_table"); 
			
				while($res = mysql_fetch_array($result)) 
				{
					$r[]=$res;
				}

				$j=0;
				foreach($r as $res)
				{
					if($un==$res['login_name'])
					{
							$j++;
							break;
					}
				}
			
				if($j==0)
				{
					$user = mysql_query ("INSERT INTO user_table(first_name,phone,email) VALUES('$name','$phn','$email')");
					
					$uId = mysql_query ("SELECT * FROM user_table WHERE email='$email'");
			
					while($res = mysql_fetch_array($uId)) 
					{
						$id=$res['user_id'];
						//echo "<h1>HOITASEEEee".$res['user_id']."</h1>";
					}
					$result = mysql_query ("INSERT INTO login_table(login_name,user_type,password,user_id) VALUES('$un','customer','$pass','$id')");
					echo "<h1 color='green'>Data added successfully ID = ".$id." PHONE ".$phn."<h1>";
					echo "<br/><a href='index.php'>View Result</a>";
					header("Location:index.html");
				}
				else
				{
					echo "<h2 color='red'>Sorry, This User Name is already used.</h2><br/>";
				}

			}
			else
			{
				echo "<h2 color='red'>Sorry, This Email address is already used.</h2><br/>";
			}
		}
		else
		{
			echo "<font color='red'>Password are not matched.</font><br/>";
		}
		DBclose();
	}
}
?>

<html>
	<head>
		<title> New Account </title>
		<style style="text/css">
			body
			{
				background-image: url("images/contact.jpg");
				background-repeat: repeat;
				margin-right: 20px;
				background-attachment: scrrol;
			}
			a { text-decoration: none; }
			h1 { font-size: 1em; }
			h1, p
			{
				margin-bottom: 10px;
			}
			strong
			{
				font-weight: bold;
			}
			.uppercase { text-transform: uppercase; }
			#login 
			{
				margin: 50px auto;
				width: 300px;
			}
			form fieldset input[type="text"], input[type="password"] 
			{
				background-color: #e5e5e5;
				border: none;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				color: #5a5656;
				font-family: 'Open Sans', Arial, Helvetica, sans-serif;
				font-size: 14px;
				height: 50px;
				outline: none;
				padding: 0px 10px;
				width: 280px;
				-webkit-appearance:none;
			}
			form fieldset input[type="submit"]
			{
				background-color: #008dde;
				border: none;
				border-radius: 3px;
				-moz-border-radius: 3px;
				-webkit-border-radius: 3px;
				color: #f4f4f4;
				cursor: pointer;
				font-family: 'Open Sans', Arial, Helvetica, sans-serif;
				height: 50px;
				text-transform: uppercase;
				width: 300px;
				-webkit-appearance:none;
			}
			form fieldset a 
			{
				color: Blue ;
				font-size: 15px;
			}
			form fieldset a:hover { text-decoration: underline; }
			.btn-round 
			{
				background-color: #5a5656;
				border-radius: 50%;
				-moz-border-radius: 50%;
				-webkit-border-radius: 50%;
				color: #f4f4f4;
				display: block;
				font-size: 12px;
				height: 50px;
				line-height: 50px;
				margin: 30px 125px;
				text-align: center;
				text-transform: uppercase;
				width: 50px;
			}
			
			.form {float:right;}
		</style>
	</head>
	
	<body>
		<a href="index.html"><img src="images/paradise.png" alt="Work" style="width:100px;height:88px;"></a>
			<div id="login">
				<h1 style="color:GoldenRod ; text-align:center; font-size: 40px"><strong>Welcome</strong></h1>
				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					<fieldset>
						<p>Name:<input type="text" required name="Name" onFocus="if(this.value=='Name')this.value='' "></p>
						<p>Username:<input type="text" required name="Username" onFocus="if(this.value=='Username')this.value='' "></p>
						<p>Address:<input type="text" required name="Address" onFocus="if(this.value=='Address')this.value='' "></p>
						<p>Phone Number:<input type="text" required name="Phone"  onFocus="if(this.value=='Phone')this.value='' "></p>
						<p>Email:<input type="text" required name="email" onFocus="if(this.value=='Email')this.value='' "></p>
						<p>Password:<input type="password" required name="Password" onFocus="if(this.value=='Password')this.value='' "></p>
						<p>Confirm Password:<input type="password" required name="Confirm_Password" onFocus="if(this.value=='Confirm-Password')this.value='' "></p>
						<p onclick="chk_function()"><input type="Submit" name="Submit" value="Submit"></p>
					</fieldset>
				</form>
				
				<script>
					function chk_function() 
					{
						
					}
				</script>
				
			</div>
	</body>
</html>