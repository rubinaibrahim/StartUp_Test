<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
require_once('class.compareImages.php');

$img1=$_POST['id1'];	
$img2=$_POST['id2'];

$t=new compareImages();
$t->compare($img1,$img2);



?>
</body>
</html>
