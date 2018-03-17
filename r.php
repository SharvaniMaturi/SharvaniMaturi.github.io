<!DOCTYPE hmtl>
<head>
<title>hello</title>
<link rel="stylesheet" type="text/css" href="r.css">
</head>
<body>
<?php
$ni="";$ui="";$pi="";$cp="";$ei="";$phi="";$ci="";$gi="";$cpi="";
$nc="";$uc="";$pc="";$cpc="";$ec="";$phc="";$cc="";$gc="";$cpic="";
$k=1;$ge="";$ac="";$di="";$ssi="";$g="";$cb="";$h="";$hh="";$e="";
$s="";$dd="";$st="display:none";
//if($_SERVER['REQUEST_METHOD']=='POST')
//{ 
	if(isset($_POST['but']))
	{

	$n=$_POST['name'];
	$u=$_POST['user'];
	$p=$_POST['pass'];
	$e=$_POST['mail'];
	$ph=$_POST['pho'];
	$c=$_POST['cel'];
	$cp=$_POST['cpass'];
	$g=$_POST['gen'];
	 $s=$_POST['ss'];
	 $dd=$_POST['dob'];
	$h=$_POST['hob'];
	 //$hh=$_POST['hobb'];
	if(empty($n))
	{
		$ni="!Required name";
		$uc=$u;$pc=$p;$cpic=$cp;$phc=$ph;$cc=$c;$ec=$e;
		$k=0;
	}
	else if(!preg_match("/^[a-zA-Z]+[a-zA-Z\.\s]{5,30}$/",$n))
		{
		 $ni="!Invalid name";
        $uc=$u; $pc=$p;$cpic=$cp;$ec=$e;$phc=$ph;$cc=$c;$k=0;
	}
	else{
		$ni=" ";
	}
	 if(empty($u))
	{ 
       $nc=$n;$pc=$p;$cpic=$cp;$phc=$ph;$cc=$c;$ec=$e;
		$ui="!Required username";
		$k=0;
	}
	else if(!preg_match("/^[a-zA-Z]+[0-9]{1,5}/",$u))
	{
		$nc=$n;$pc=$p;$cpic=$cp;$ec=$e;$phc=$ph;$cc=$c;
		$ui="!Invalid username";
		$k=0;
		}
		else{
			$ui=" ";
		}
	if(empty($p))
	{    $nc=$n;$uc=$u;$cpic=$cp;$phc=$ph;$cc=$c;$ec=$e;
		$pi="!Required password";
		$k=0;
	}
	else if(!preg_match("/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[\.\$]){6,30}/",$p))
	{
			$nc=$n;$uc=$u;$cpic=$cp;$ec=$e;$phc=$ph;$cc=$c;
			$pi="!Invalid password";
			$k=0;
	}
	else{
		$pi=" ";
	}
    if(empty($cp))
	{  $nc=$n;$uc=$u; $pc=$p;$phc=$ph;$cc=$c;$ec=$e;
		$cpi="!Required confirm password";
		$k=0;
	}
	else if($p!=$cp)
	{   
		$nc=$n;$uc=$u; $pc=$p; $ec=$e;	$cc=$c;$phc=$ph; $cc=$c;		
		$cpi="!password didn't match";
		$k=0;
	}
	else{
		$cpi=" ";
	}
	 if(empty($e))
	{  $nc=$n; $uc=$u;$pc=$p;$cpic=$cp;$phc=$ph;$cc=$c;
		$ei="!Required email";
		$k=0;
	}
	else if(!preg_match("/^[a-zA-Z0-9]+[@][a-z]{1,5}[\.][a-z]{1,3}$/",$e))
	{
			$nc=$n;$uc=$u; $pc=$p;$cpic=$cp; $phc=$ph;	$cc=$c;
			$ei="!Invalid email";
			$k=0;
	}
	else
	{
		$ei=" ";
	}
	if(empty($ph))
	{
		$nc=$n;$uc=$u;$pc=$p;$cpic=$cp;$ec=$e;$cc=$c;
		$phi="!Required phone";
		$k=0;
	}
	else if(!preg_match("/[(][\d]{3}[)][-][(][\d]{6}[)]/",$ph))
	{
			$nc=$n;$uc=$u;$pc=$p;$cpic=$cp; $ec=$e;$cc=$c;
			$phi="!Invalid phone";
			$k=0;
	}
	else{
		$phi=" ";
	}
	if(empty($c))
	{   $nc=$n;$uc=$u;$pc=$p;$cpic=$cp;	$ec=$e; $phc=$ph;
		$ci="!Required cell";
		$k=0;
	}	

	else if(!preg_match("/^[+][\d]{2}[\d]{10}/",$c))
	{
			$nc=$n;$uc=$u;$pc=$p;$cpic=$cp;	 $ec=$e;$phc=$ph;
			$ci="!Invalid cell";
			$k=0;
	}
	else{
		$ci=" ";
	}
	if(!isset($_POST['gen']))
	{
		   $nc=$n; $uc=$u;$pc=$p;$cpic=$cp; $ec=$e;$phc=$ph;$cc=$c;
		$ge="!Required gender";
		$k=0;
	}
	else{
		$ge=" ";
	}
	if($s=='Select')
	{
		  $nc=$n; $uc=$u;$pc=$p;$cpic=$cp;$ec=$e;$phc=$ph;$cc=$c;
		$ssi="!Select value";
		$k=0;
	}
	else{
		$ssi=" ";
	}
		if(empty($dd))
	{
	  $nc=$n; $uc=$u;$pc=$p; $cpic=$cp; $ec=$e; $phc=$ph;$cc=$c;
		$di="!Required date";
		$k=0;
	}
	else{
		$di=" ";
	}
	/*if(!empty($_POST['hob']))
	{
		foreach($_POST['hob'] as $selected)
		{
			echo $selected;
		}
 	}*/
	
	if($k!=0){
		$ni=" ";$ui=" ";$pi=" ";$ei=" ";$phi=" ";$ci=" ";
		$nc=$n;$uc=$u; $pc=$p;$cpic=$cp;$ec=$e;$cc=$c;	$phc=$ph; $cc=$c;		
	header('location:r2.php');
		
	}
//}
}
?>
<?php if(isset($_POST['hobb']))
	{
		$st="display:block";
	}
?>
<div id="header">
<h1 style="text-align:center;color:white;">REGISTRATION PAGE</h1>
</div>
<div id="content">
<form method="POST">
<table align="center" class="pos">
<tr>
<td>Name</td>
<td>:&nbsp&nbsp<input type="text" name="name" id="nm" value=<?php echo $nc;?>></input></td><?php setcookie('Name',$nc,time()+(60*60*24*7));?>
<td class="n"><?php echo $ni;?></td>
</tr>
<tr>
<td>Username</td>
<td>:&nbsp&nbsp<input type="text" name="user" id="us" value=<?php echo $uc;?>></input></td><td class="n"><?php echo $ui;?></td><?php setcookie('username',$uc,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Password</td>
<td>:&nbsp&nbsp<input type="password" name="pass" id="ps"  value=<?php echo $pc;?>></input></td><td class="n"><?php echo $pi;?></td><?php setcookie('password',$pc,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Confirm Password</td>
<td>:&nbsp&nbsp<input type="password" name="cpass" id="cp"  value=<?php echo $cpic;?>></input></td><td class="n"><?php echo $cpi;?></td><?php setcookie('cpassword',$cpic,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Email</td>
<td>:&nbsp&nbsp<input type="text" name="mail" id="em"  value=<?php echo $ec;?>></input></td><td class="n"><?php echo $ei;?></td><?php setcookie('email',$ec,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Phone</td>
<td>:&nbsp&nbsp<input type="text" name="pho" id="ph"  value=<?php echo $phc;?>></input></td><td class="n"><?php echo $phi;?></td><?php setcookie('phone',$phc,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Cell</td>
<td>:&nbsp&nbsp<input type="text" name="cel" id="cel"  value=<?php echo $cc;?>></input></td><td class="n"><?php echo $ci;?></td><?php setcookie('cell',$cc,time()+(60*60*24*7));?>
</tr>
<tr>
<td>Gender</td>
<td>:&nbsp&nbsp<input type="radio" name="gen" <?php if(isset($g) && $g=='male') echo "checked";?> value="male" />male	                                                                 
<input type="radio" name="gen" <?php if(isset($g) && $g=='female') echo "checked";?> value="female" />female</td><td class="n"><?php echo $ge;?></td><?php setcookie('gender',$g,time()+(60*60*24*7));?>
</tr>
</tr>
<tr>
<td>Hobbies</td><td>:&nbsp&nbsp<input type="checkbox" name="hobb" value="yes" id="cb"/>Yes</td>
<td style=<?php echo $st?>>&nbsp&nbsp<input type="checkbox" name="hob" value="Singing" id="cb1"/>Singing
<input type="checkbox" name="hob" value="dancing" id="cb2"/>Dancing
<input type="checkbox" name="hob" value="Novels" id="cb3"/>Novels
<input type="checkbox" name="hob" value="music" id="cb4"/>Music
<input type="checkbox" name="hob" value="Games" id="cb5"/>Games</td>
</tr>
<tr>
<td>Languages</td>
<td>:&nbsp&nbsp<select name="ss">
    <option>Select</option>
    <option <?php if($s!="Select" && $s=="English") echo "selected";?>>English</option>
	<option <?php if($s!="Select" && $s=="Telugu") echo "selected";?>>Telugu</option>
	<option <?php if($s!="Select" && $s=="Hindi") echo "selected";?>>Hindi</option>
	<option <?php if($s!="Select" && $s=="Spanish") echo "selected";?>>Spanish</option>
	<option <?php if($s!="Select" && $s=="Urdu") echo "selected";?>>Urdu</option>
	</select><?php setcookie('languages',$s,time()+(60*60*24*7));?>
</td>
<td class="n"><?php echo $ssi?></td>
</tr>
<tr>
<td>Date of birth</td>
<td>:&nbsp&nbsp<input type="date" name="dob" id="d" value=<?php echo $dd;?>></input></td><td class="n"><?php echo $di?></td><?php setcookie('dat',$dd,time()+(60*60*24*7));?>
</tr>
<tr>
<td></td>
<td><input type="submit" name="but" value="submit" /></td>
</tr>
<?php
session_start();
?>
<?php
//$e=echo $h[0]." ".$h[1]." ".$h[2]." "$h[3'." ".$h[4];
?>
<?php
//$la=$h[0];$na=$h[1];$pa=$h[2];$o=$h[3];$p[4];
$i=array();
/*foreach($h as $val)
{
	array_push($i,$val);
}*/
$_SESSION['name']=$nc;
$_SESSION['uname']=$uc;
$_SESSION['mail']=$ec;
$_SESSION['phon']=$phc;
$_SESSION['cphon']=$cc;
$_SESSION['gend']=$g;
$_SESSION['lang']=$s;
$_SESSION['date1']=$dd;
$_SESSION['hobbies']=$h;
?>
</form>
</div>
</body>
</html>
</html>