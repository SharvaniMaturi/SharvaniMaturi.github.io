<!DOCTYPE html>
<head>
<link rel="stylesheet" type="text/css" href="r.css">
</head>
<body>
<?php
$usi="";$psi="";
$usc="";$psc="";
$l="";$t="";
$ll=1;
if($_SERVER['REQUEST_METHOD']=='POST')
	
{
	$l=$_POST['use'];
$t=$_POST['pas'];
   if(empty($l))
	{
		$psc=$t;
		$usi="!Required username";
		$ll=0;
	}
	else 
	{
		if($_POST['use']!=$_COOKIE['username']){
		$psc=$t;
		$usi="!Invalid username";
		$ll=0;
	}
	}
	if(empty($t))
	{ 
        $usc=$l;
		$psi="!Required password";
		$ll=0;
	}	
	else 
	{
		if($_POST['pas']!=$_COOKIE['password'])
	{    
        $usc=$l;
		$psi="!Invalid password";
		$ll=0;
	}
	}
	if($ll!=0){
		$usc=$l;
		$psc=$t;
		header('location:home.php');
	}
}
?>
<div id="header">
<h1 style="text-align:center;color:white">LOGIN PAGE</h1></div>
<!--<div id="left"></div>-->
<div id="content">
<form method="POST">
<table align="center" class="pos">
<tr>
<td>Username</td>
<td>:&nbsp&nbsp<input type="text" name="use" value=<?php echo $usc;?>></input></td><td class="n"><?php echo $usi;?></td>
</tr>
<tr>
<td>Password</td>
<td>:&nbsp&nbsp<input type="password" name="pas" value=<?php echo $psc;?>></input></td><td class="n"><?php echo $psi;?></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="submit" name="but" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>