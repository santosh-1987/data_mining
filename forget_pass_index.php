<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
<title>DATA MINING RECORD</title>
<link rel="stylesheet" type="text/css" href="assets/layout.css">
<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
.style3 {color: #64B8E6}
.style19 {font-size: 24px; font-family: Geneva, Arial, Helvetica, sans-serif; }
</style>

<script>
function validateForm(){
var name = document.adminLogin.user.value;


if(name==null || name=="")
	{
		alert("Please Enter your username!");
		return false;
	}
return;

}
</script>

</head>

<body>
<div class="add-container">
  <div class="banner-div">
    <div class="logo"> <img src="assets/images/logo.png"   /> </div>
    <div class="site-title style3">DATA MINING GLOBAL RECORD </div>
    <div class="date">
      <script language="JavaScript" type="text/javascript">
            document.write(TODAY);
      </script>
    </div>
    <div class="time">
      <script type="text/javascript">
        <!--
        var currentTime = new Date()
        var hours = currentTime.getHours()
        var minutes = currentTime.getMinutes()
        if (minutes < 10){
        minutes = "0" + minutes
        }
        document.write(hours + ":" + minutes + " ")
        if(hours > 11){
        document.write("PM")
        } else {
        document.write("AM")
        }
        //-->
      </script>
    </div>
  </div>
  <!--end of banner-->
  <div class="add-user-menus-panel">
    <table width="669" align="center">
      <tr>
        <td height="43" colspan="2" bgcolor="#000099"><h2 align="center"><span class="style3"> Welcome to Mining Global Feed </span></h2></td>
      </tr>
    </table>
  </div>
  <!--###########################################################################-->
  <div class="add-user-main-panel">
    <form id="form1" name="adminLogin" method="post" action="forget_pass_code.php" onsubmit="return validateForm();">
      <label></label>
      <label></label>
      <label for="Submit"></label>
      <table width="315" align="center">
        <tr>
          <td height="43" colspan="2" bgcolor="#000099"><span class="style3">
            <h4 align="center">Authorized User Login Area</h4>
          </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><span class="style1">Use <a href="valid_information.php">valid information </a></span> </td>
        </tr>
        <tr>
          <td>Username:</td>
          <td width="195"><input type="text" name="user" tabindex="2" /></td>

              <br />
              <font color="red" size="1">
              <?php if(isset($_SESSION['error'])){echo $_SESSION['error'];} unset($_SESSION['error']);?>
            </font> </td>
        </tr>

        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Login" tabindex="2" id="Submit" /></td>
        </tr>
        <tr><td><a href="index.php"><button>Back</button></a></td></tr>
      </table>
    </form>
  </div>
  <div class="footer-div">
  <h5 align="center"><font color="#e05e18">Brought To You by PRASANT| Contact us 0123456789</font></h5>
  </div>
</div>
</body>
</html>

