<?php
session_start();
require("__dbconf__.php");

$user = $_POST['user'];
$pass = $_POST['pass'];

$qry = mysql_query("select * from admin where user='$user' and pass='$pass'");

if(!$qry){echo mysql_error();}else{
	while($row=mysql_fetch_array($qry)){
			$username = $row['user'];
			$password = $row['pass'];
		}

	}

if($user==$username || $pass==$password){
			echo '<script>location="__main_index__.php?administrator%panel";</script>';
			
			isset($_SESSION['ad']);
			
			$_SESSION['ad'] = $username;
		}
		else{


			isset($_SESSION['error']);
			
			
			$_SESSION['error'] = "Incorrect username or password";
			

			echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},100);

							function myTimer()
							{
								window.location="index.php";

								}
							</script>';
			}





?>