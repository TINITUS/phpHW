<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Dump Variable</title>
</head>

<body>
<?
Class MyObject
{
	public $a = 2;
	public $b = 34;
}

$obj = new MyObject();
$vars = array('string', 15, 1.234, array(1,2,3), (object)array(2,34), $obj); 
foreach($vars as $var){
	if(!is_numeric($var)){
		echo '<pre class="xdebug-var-dump" dir="ltr"><small>'. gettype($var) .'</small></pre>';
	}else{
		var_dump($var);
	}
}
?>
<?= $helper->AddBack(); ?>
</body>
</html>