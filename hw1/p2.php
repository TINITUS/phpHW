<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Sum Two Numbers</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <input type="text" name="a" id="a"> 
  + 
  <input type="text" name="b" id="b">
  <input type="submit" name="submit" id="submit" value="Calc">
</form>
<?
if(isset($_POST['submit']) && ($_POST['submit'] == 'Calc')){
	if((isset($_POST['a']) && isset($_POST['b']))&&(($_POST['a'] != '')&&($_POST['b'] != ''))){
		$res= $_POST['a'] + $_POST['b'];
		echo '<div style="color:green">$a + $b = '.$_POST['a'].' + '.$_POST['b'].' = '.$res.'</div>';
	}else{
		echo '<div style="color:red;">empty values are not acceptable</div>';
	}
}
?>
<?= $helper->AddBack(); ?>
</body>
</html>
