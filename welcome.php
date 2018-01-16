<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/usertemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="EditRegion1" -->
<title>Online Library-Welcome</title>
<!-- InstanceEndEditable -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
<div class="container-fluid">
<div class="navbar-header">
<a class="navbar-brand" href="#"><img src="images\logo.png" height="50" width="300"></a>
</div>
<ul class="nav navbar-nav">
<li class="active"><a href="#">Home</a></li>
<li><a href="new.html">What's New</a></li>
<li><a href="aboutus.html">About The Library</a></li>
<li><a href="publication.html">Publications</a></li>
<li><a href="contact.html">Contact Us</a></li>
<li><a href="admin.php"><button type="button" class="btn btn-primary btn-md">Admin Log-In</button></a></li>
<li><a href="signup.php"><button type="button" class="btn btn-primary btn-md">Join-Today,Its Free...!</button></a></li> </ul>
</div>
</nav>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
<li data-target="#mycarousel" data-slide-to="1"></li>
<li data-target="#mycarousel" data-slide-to="2"></li>
<li data-target="#mycarousel" data-slide-to="3"></li>
</ol>
<div class="carousel-inner">
<div class="item active">
<img src="images\img4.jpg" style="height:400px;width:1350px">
</div>
<div class="item">
<img src="images\img1.jpg" style="height:400px;width:1350px">
</div>  
<div class="item">
<img src="images\img2.jpg" style="height:400px;width:1350px">
</div>
<div class="item">
<img src="images\img3.jpg" style="height:400px;width:1350px">
</div>

</div>
<a class="left carousel-control" href="#mycarousel" data-slide="prev">
<span class="glyphicon glyphicon-chevron-left"></span>
<span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#mycarousel" data-slide="next">
<span class="glyphicon glyphicon-chevron-right"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div><br><br>
<!-- InstanceBeginEditable name="EditRegion2" -->
<?
function getUserId()
{
	$today=Date("y-m-d");
	$y="0";
	$uid="";
	if($today>='2017-04-1'||$today<='2018-03-31')
	{
		$y="17";
	}
	else if($today>='2018-04-1'||$today<='2019-03-31')
	{
		$y="18";
	}
	else if($today>='2019-04-1'||$today<='2020-03-31')
	{
		$y="19";
	}
		else if($today>='2020-04-1'||$today<='2021-03-31')
	{
		$y="20";
	}
$mycn=connect();
$q="select user_id from user order by user_id desc";
$r=mysqli_query($mycn,$q);
if(mysqli_num_rows($r)>0)
{
	$rec=mysqli_fetch_row($r);
	$id=$rec[0];
	mysqli_close($mycn);
	$nm=intval(substr($id,3,5));
	$nm=$nm+1;
	$myid="";
	if($nm>1&&$nm<10)
	$myid="M".$y."0000".$nm;
	else if($nm>10&&$nm<100)
	$myid="M".$y."000".$nm;
	else if($nm>100&&$nm<1000)
	$myid="M".$y."00".$nm;
	else if($nm>1000&&$nm<10000)
	$myid="M".$y."0".$nm;
	else $myid="M".$y.$nm;
}
else
{
	$myid="M".$y."00001";
}
return $myid;
}
if(!empty($_POST['un']))
{
	include_once("dbcon.php");
	$uid=getUserId();
	$user_name=$_POST['un'];
	$password=md5($_POST['pwd']);
	$email=$_POST['mail'];
	$mobile=$_POST['mob'];
	$address=$_POST['add'];
	$utype='user';
if(strlen($_FILES["img"]["name"])>0)
$fnm=$uid.$_FILES["img"]["name"];
else
$fnm="default.jpg";
if($fnm=="default.jpg")
	{}
	else
	{
		move_uploaded_file($_FILES["img"]["temp_name"],"images/user/".$fnm);
	}
	$q="insert into user values('$uid','$user_name','$password','$email','$mobile','$address','$fnm','$utype')";
	//echo $q;
	$mycn=connect();
	mysqli_query($mycn,$q);
	
	mysqli_close($mycn);
	echo "Record inserted your id is".$uid;
}
else
{
	
}

?>
<!-- InstanceEndEditable -->

</body><!-- InstanceEnd -->