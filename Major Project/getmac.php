<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php

extract($_REQUEST);

	$ip = $_SERVER['REMOTE_ADDR'];
//////MAC Address////////
ob_start();
//Get the ipconfig details using system commond
system('ipconfig /all');

// Capture the output into a variable
$mycom=ob_get_contents();
// Clean (erase) the output buffer
ob_clean();

$findme = "Physical";
//Search the "Physical" | Find the position of Physical text
$pmac = strpos($mycom, $findme);

// Get Physical Address
$mac=substr($mycom,($pmac+36),17);

//$fp=fopen("data.txt","w");
//fwrite($fp,$mac);
//fclose($fp);



?>
<script language="javascript">
window.location.href="http://iotcloud.co.in/iot_qkd/update.php?mac=<?php echo $mac; ?>&user=<?php echo $user; ?>&fname=<?php echo $fname; ?>&fid=<?php echo $fid; ?>";
</script>

</body>
</html>
