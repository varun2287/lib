<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/usertemplate.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="EditRegion1" -->
<title>User-Home</title>
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
if(!empty($_POST['usrid'])&& !empty($_POST['pwd']))
{
	include_once("dbcon.php");
	$uid=$_POST['usrid'];
	$pwd=md5($_POST['pwd']);
	$q="select * from user where user_id='$uid' AND user_pwd='$pwd'";
	$cn=connect();
	$rs=mysqli_query($cn,$q);
	$r=mysqli_num_rows($rs);
		if($r>0)
	{
		echo"welcome to your Home Page";
	}
	else
	{
		echo" Invalid User Name or Password";
	}
}
?>

<!-- InstanceEndEditable -->

</body><!-- InstanceEnd -->