<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="r.css">
</head>
<body>
<div id="header"><h1 style="text-align:center;color:white"><?php echo strtoupper("Welcome to Home Page");?></h1></div>

<br /><br /><br /><br /><br /><br />
<!--<div id="left"></div>-->
<h2 style="text-align:center;">Using cookies</h2>
<?php
/*echo "Name : ";
echo $_COOKIE['Name'];
echo "<br />";
echo "Username : ";
echo $_COOKIE['username'];
echo "<br />";
echo "Email : ";
echo $_COOKIE['email'];
echo "<br />";
echo "Phone :";
echo  $_COOKIE['phone'];
echo "<br />";
echo "Cellphone :";
echo $_COOKIE['cell'];
echo "<br />";
echo "gender:";
echo $_COOKIE['gender'];
echo "<br />";
echo "languages:";
echo $_COOKIE['languages'];
echo "<br />";*/
?>
<h3 style="text-align:center;"><?php echo "Welcome to " . $_COOKIE['username'];?></h3>
<table align="center">
<tr>
<td>Name</td>
<td>:<?php echo " ".$_COOKIE['Name'];?></td>
</tr>
<tr>
<td>Username</td>
<td>:<?php echo " ".$_COOKIE['username'];?></td>
</tr>
<tr>
<td>Email</td>
<td>:<?php echo " ".$_COOKIE['email'];?></td>
</tr>
<tr>
<td>Phone</td>
<td>:<?php echo  " ".$_COOKIE['phone'];?></td>
</tr>
<tr>
<td>Cellphone</td>
<td>:<?php echo " ".$_COOKIE['cell'];?></td>
</tr>
<tr>
<td>gender</td>
<td>:<?php echo " ".$_COOKIE['gender'];?></td>
</tr>
<tr>
<td>D.O.B</td>
<td>:<?php echo " ".$_COOKIE['dat'];?></td>
</tr>
<tr>
<td>languages</td>
<td>:<?php echo " ".$_COOKIE['languages'];?></td>
</tr>
</table>

<?php
session_start();
?>
<?php
/*echo "Name : ";
echo $_SESSION['name'];
echo "<br />";
echo "Username : ";
echo $_SESSION['uname'];
echo "<br />";
echo "Email : ";
echo $_SESSION['mail'];
echo "<br />";
echo "Phone :";
echo $_SESSION['phon'];
echo "<br />";
echo "Cellphone :";
echo $_SESSION['cphon'];
echo "<br />";
echo "gender:";
echo $_SESSION['gend'];
echo "<br />";
echo "languages:";
echo $_SESSION['lang'];
echo "<br />";*/
?>
<h2 style="text-align:center;">Using session</h2>
<table align="center">
<tr>
<td>Name</td>
<td>:<?php echo " ".$_SESSION['name'];?></td>
</tr>
<tr>
<td>Username</td>
<td>:<?php echo " ".$_SESSION['uname'];?></td>
</tr>
<tr>
<td>Email</td>
<td>:<?php echo " ".$_SESSION['mail'];?></td>
</tr>
<tr>
<td>Phone</td>
<td>:<?php echo  " ".$_SESSION['phon'];?></td>
</tr>
<tr>
<td>Cellphone</td>
<td>:<?php echo " ".$_SESSION['cphon'];?></td>
</tr>
<tr>
<td>gender</td>
<td>:<?php echo " ".$_SESSION['gend'];?></td>
</tr>
<tr>
<td>D.O.B</td>
<td>:<?php echo " ".$_SESSION['date1'];?></td>
</tr>
<!--<tr>
<td>Hobbies</td>
<td>:<?php //echo " ".$_SESSION['hobb'];?></td>
</tr>-->
<tr>
<td>languages</td>
<td>:<?php echo " ".$_SESSION['lang'];?></td>
</tr>
<td>hobbies</td>
<td>:
<?php
$sess=$_SESSION['hobbies'];
foreach($sess as $se)
{
	echo $se;
	echo " ";
}
?>
</td>
</tr>
</table>
</body>
</html>