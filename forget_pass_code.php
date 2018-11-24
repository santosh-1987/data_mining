<?php
session_start();
require("__dbconf__.php");

$user = $_POST['user'];


$qry = mysql_query("select * from admin where user='$user'");

if(!$qry){echo mysql_error();}else{
	while($row=mysql_fetch_array($qry)){
			$username = $row['user'];
			$password = $row['pass'];
		}

	}

if($user==$username){
			echo '<script>location="show_pass_index.php?forget_pass%panel";</script>';

			isset($_SESSION['pass']);

			$_SESSION['pass'] = $password;
		}
		else{


			isset($_SESSION['error']);


			$_SESSION['error'] = "Incorrect username or password";


			echo '<script type="text/javascript">
									var myVar=setInterval(function(){myTimer()},50);

							function myTimer()
							{
								window.location="forget_pass_index.php";

								}
							</script>';
			}





?>