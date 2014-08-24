<?php require_once('Connections/conproperty.php'); ?>
<?php
	$uid = "";
	$pwd ="";
	if(isset($_POST['userid']))
	{
		$uid = $_POST['userid'];
		$pwd = $_POST['password'];
	}
	
	if($uid=="")
	{
		echo "User ID not provided";
		echo "<a href='index.php'>Go Back</a>";
		die();
	}
	$login = false;
	$qry="select * from users where username='" .$uid. "' and password='".$pwd."'";
	
	$rs = mysql_query($qry);
	$rf = mysql_num_rows($rs);
	$row=mysql_fetch_array($rs);
	//echo "test ".$rf; die();
	$msg="";
	if($rf >= 1)
		{
			$msg = true;
		}
	
	


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<h1> Login to system</h1>
<?php
	if($msg)
	{
		echo "Login is valid";
	}
	else
	{
		echo "Invalid Login";
	}
	echo "<a href='index.php'>Go Back</a>";
	

?>


</body>
</html>
<?php
mysql_free_result($rs);
?>
