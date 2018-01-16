<?php
function connect()
{
$cn=mysqli_connect("127.0.0.1","root","","lib")or die(mysqli_error());
return $cn;
}
?> 