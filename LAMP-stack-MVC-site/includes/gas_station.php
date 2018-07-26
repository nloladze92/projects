<?php
session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Gas Station Plan</title>


<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/pictures.css" />
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/planstyle.css" />
<link rel="stylesheet" type="text/css" href="../styles_styles/stylesheets/mastercss.css" />
<link rel="stylesheet" type="text/css" href="../stylesheets/menu_animation.css">
<link rel="stylesheet" type="text/css" href="../stylesheets/MasterClass.css">

<script type="text/javascript" src="../libraries/gasplanselection.js"></script>
<script>
alert("Please select the kinds of changes you want to see for the business and then hit the submit button to see the next page.");
</script>


</head>

<body>


<div id="top">
<div class="icon-menu"> Menu </div>
	<img src="../styles_styles/logo.png" alt="Conversiologo" align="top" class="logo">
	<!-- menu animation-->
	<div class="menu">
      <!-- Menu icon -->
      <div class="icon-close">
      <button type="button" class="burgerbutton"></button>
      </div>
      <!-- Menu -->
      <ul>
        <li><a href="index.php?deletetype">Go Back</a></li>
        <li><a href="../server/Smarty/demo/planview.php">Browse Plans</a></li>
        <li><a href="mailto:admin@spendvow.com">Contact</a></li>
        <li><a href="../index.php?logout">Logout</a></li>
      </ul>
    </div>
    
 </div>


<div id="body">

<br />
<br />
<br />
<br />
<br />
	<!-- BEGIN THE super-table -->

<table align="center" cellspacing="15px" border="0" class="description">
<tr>
<td align="center" class="description">

<table align="center" cellpadding="3px">
<tr>
<td>
<img src="../styles_styles/images/textfield/typeofstore/gasstation.png" id="businesstype"/>
</td>
</tr>

<tr>
<td>
<div id="businessname">
<?php

$parts = explode(",", $_SESSION['address']);

$businessname = array_shift($parts);
echo $businessname;

$_SESSION['bizname'] = $businessname;  ?>
</div>
</td>
</tr>


<tr>
<td>
<div id="businessaddress">
<font id="fontaddress"> Address: </font>
<?php
$businessaddress = implode(",", $parts);

$_SESSION['businessaddress'] = $businessaddress;

echo $businessaddress;
 ?>

</div>
</td>
</tr>

<tr>
<td>
<!--
<textarea id="userinput" rows="15" cols="26" maxlength="300" name="userinput" placeholder="Type comments here (300 char max)"> </textarea>

-->
</td>
</tr>
</table>
 
</td>

<!-- super-table -->
<td class="description">
  
<table align="center" border="0" width="474">

<tr>
<td align="center">
  <img src="../styles_styles/images/textfield/squareft.png" id="tcost" align="middle">
	<input type="text" id="num1" class="icon2" maxlength="20" readonly value="<?php echo $_SESSION['squarefeet']?>" border="0"/>
</td>
</tr>

<form name="Augustus" action='../index.php' method="post">

<tr>
<td align="center">
  <img src="../styles_styles/images/textfield/textfield.png" id="tcost" align="middle" />
	<font class="text-bar"><input type="text" name="businesscost" id="totalcost" class="icon" maxlength="20" readonly align="baseline" border="0"/></font>
</td>
</tr>
</table>
  
  
  
  <!-- the main content page -->

<!-- the profile table (#1), row for picture and content of profile -->




<!-- the main table (#2), expressing row for specific page content -->



<!-- the table for pictures -->
<table align="center" border="5px" bordercolor="silver" id="tableoptions" style="border-collapse:collapse;">
<tr>


<td>
<img src="../styles_styles/images/unselected/fuelpumpgas.jpg" name="pump" id="19pump" class="button16" onclick="func(40, 's8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/employee.jpg" name="employee" id="02employee" class="button2"  onclick="calc(.05, 'b8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/solarpanel.jpg" name="solar" id="03solar" class="button3" onclick="calc(1.7, 'c8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/biodieseltrucks.jpg" name="biofuel" id="11biofuel" class="button9" onclick="func(12, 'k8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/ledlighting.jpg" name="led" id="06led" class="button5" onclick="calc(.4, 'f8');" />
</td>

</tr>

<tr>

<td>
<img src="../styles_styles/images/unselected/3dtv.jpg" id="01television" onclick="calc(.9, 'a8');"  />
</td>

<td>
<img src="../styles_styles/images/selected/facialrecog.jpg" name="camera" id="12camera" class="button10" onclick="func(0, 'l8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/wifi.jpg" name="wifi" id="14wifi" class="button12" onclick="func(.3, 'n8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/coffee.jpg" name="coffee" id="07coffee" class="button6" onclick="calc(1, 'g8');" />
</td>

<td>
<img src="../styles_styles/images/unselected/airfilter.jpg" name="hvac" id="20hvac" class="button20" onclick="func(10, 't8');" />
</td>

</tr>

<tr>

<td>
<img src="../styles_styles/images/unselected/recycledump.jpg" name="recycle" id="08recycle" class="button7" onclick="calc(30, 'h8');" />
</td>

</tr>

</table>

<p align="center">
 <input type="submit" name="submitplan" id="submit" value="" />
<input type="text" class="selectedimages" id="selectedimages"  name="selectedimages" readonly="readonly" />
</form>

</p>
<!-- super-table -->
</td>




<!-- super-table -->
<td class="description">

<!-- the picture content table (#3), row for description and youtube video link and explanation of ideas -->

<table width="200">
<tr>
<td>
<img id="sidepanel" src="../styles_styles/images/textfield/transparent.png" />


</td>
</tr>
</table>


<!-- end of content -->


<!-- super-table -->
</td>
</tr>
</table>

</div>

<!--
<div id="footer">
<table align="right">
<tr>
<td>
Spend Vow -- Copyright 2017 --- Alpha Version 0.6
</td>
</tr>
</table>
</div>
-->

<script src="../scripts/required/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../scripts/menu_animation.js"></script>



</body>
</html>
