<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
//$file="http://iotcloud.co.in/testsms/atm_capture/img.txt";
$fp=fopen("bc.txt","r");
$bc=fread($fp,filesize("bc.txt"));
fclose($fp);
//echo $r;


?>
<p></p>
<p></p>
<p></p>
<!--<h3 align="center">Receive Data</h3>-->
<!--<iframe src="http://iotcloud.co.in/atmvan/get_data.php?bc=<?php //echo $bc; ?>" frameborder="0"></iframe>-->
<script>
							//Using setTimeout to execute a function after 5 seconds.
							setTimeout(function () {
							   //Redirect with JavaScript
							 window.location.href="http://iotcloud.co.in/atmvan/get_data.php?bc=<?php echo $bc; ?>&act=<?php echo $act; ?>";
							}, 2000);
							</script> 
</body>
</html>
