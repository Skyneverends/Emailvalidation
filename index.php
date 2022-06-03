<?php
$EmailVar=$_GET["Email"];
if (!filter_var($EmailVar,FILTER_VALIDATE_EMAIL)) 
{
$EmailError="This is an Invalid Email Format.";
 echo "".$EmailError;
}
else 
echo "Email is ".$EmailVar;

?>

<html>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="GET">
Email: <input type="text" name="Email" /> <br />

<input type="submit"/>
</form>
</body>
</html>
