<?php
session_start();
?>
<!DOCTYPE html>
<meta charset="utf-8"/>
<html>
<meta http-equiv="Content-Type" content="text/html; charset="utf-8"/>
<title>DATA MINING RECORD</title>
<link href="assets/layout.css" rel="stylesheet" type="text/css" />

<script language="JavaScript" type="text/javascript">
//--------------- LOCALIZEABLE GLOBALS ---------------
var d=new Date();
var monthname=new Array("January","February","March","April","May","June","July","August","September","October","November","December");
//Ensure correct for language. English is "January 1, 2004"
var TODAY = monthname[d.getMonth()] + " " + d.getDate() + ", " + d.getFullYear();
//---------------   END LOCALIZEABLE   ---------------
</script>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
.style19 {font-size: 24px; font-family: Geneva, Arial, Helvetica, sans-serif; }
-->
</style>

<script>
function validateForm(){
var name = document.adminLogin.user.value;
var pass = document.adminLogin.pass.value


if((name==null || name=="") || (pass==null || pass==""))
  {
    alert("Blank field are not accepted!");
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
    <div class="site-slogan"> </div>
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
          <td height="43" colspan="2" bgcolor="#000099"><h2 align="center"><span class="style3"> Valid Information </span></h2></td>
        </tr>
        </tr>
        <tr>
          <td width="417"><a href="index.php">
          <button>Back</button></a>
		  </td>
		  </tr>
    </table>

  </div>
  <!--###########################################################################-->
 <div class="add-user-main-panel">
	 <table width="669" align="center">
	 	<tr>
	 	  <td bgcolor="#000099"><h3><span class="style3">Overview </span></h3></td>
 	    </tr>
	 	<tr>
	 	  <td></p>
            <div align="justify">This chapter discusses the introduction, historical background of the study, statement of existing problem, objectives of the study, significance of the study and scope and limitation of the study, definition of terms and project organization.
              Over the past few years (57 years), computerization has reached most corners of human Endeavour. The best way to introduce the application of computer is to take a view of its purpose; the purpose is the processing of data and information. Data is a symbolic representation of facts about people, transformed offer undergoing a series of process known as information. Sometimes, certain information is further processed into information.
              It is clearly that information is very important in organization (such as companies, industries, etc.) and computers make significant impact in improving the processing of the information. There are many ways of computer to perform such useful, vital and intriguing work for mankind.
              With all these, I discover that this technology is very low in third world countries such as Nigeria in the sense that it’s rare to see private and public sectors with computerized activities. Due to the above information, I decided to carry out my project work which will reduce or eliminate the problems associated with the existing system (conventional or manual) of a billing system in Power Holding Company of Nigeria PHCN. That is “computerization of Electricity Consumption billing system” in order to offer our contribution to the development of our beloved nation.
  </p>

            </div>
            <p align="justify">Electricity as one of the most important basics of life has been playing a basic and virtual role in the life of almost everything. Globalization has made the world a small village in which one man is any other man’s neighbor no matter how far in kilometric distance. The standard of living of each country is now been measured with respect to that of other countries in the world. It is no more a village to village comparison but a global analysis. Access to electricity consumption is considered as one of the indices used in measuring the standard of a living of a nation. That is to say a country whose population has little or no access to portable supply of electricity is said to be a poor nation. In this regard the effectiveness of electricity consumption whether publicity or privately owned is of vital important. The work of billing is very vital in the continual supply of electricity to every user or customer. This is because; it is when bills are settled by the customers. As such effective billing is very important and hence the automation of billing system becomes very pertinent.</p>
		<p align="justify">The process of billing customer without using sufficient and reliable data has resulted in less effective billing which causes a volume of complain from customers as a result of over-billing, disconnection or stoppage of electricity supply to customer without prior notice.
After careful investigation and research was undergone on the current manual method of billing in Power Holding Company of Nigeria PHCN, the researcher discovered the following problems:
a)	TIME WASTAGE: The  process of editing and retrieval of the data is very slow as everything is done manually
b)	LACK OF HIGH DEGREE OF ACCURACY: In manual processing of data there are usually mistake. Thus, a computerized can help to improve the degree of accuracy.
c)	MIS-PLACEMENT OF PROGRAMME SCHEDULE: There are cases of misplacing program schedule as a result of work load.
d)	MONEY WASTAGE: as the data is processing manually, there is need for
Writing materials, printing materials, etc. And this may cause money wastage.
</p>
</td>
 	    </tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
	 	<tr>
	 	  <td>&nbsp;</td>
 	    </tr>
     </table>
 </div>
 	<div class="footer-div">
	<h5 align="center"><font color="white">Brought To You by <a href="http://www.code-projects.org">Code Projects</a> @ <a href="http://www.code-projects.org" target="_blank">Code-projects</a> | Contact us <a href="mailto:contact@itypeng.com">Here</a></font></h5>


 	</div>
</div>
</body>
</html>
