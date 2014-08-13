<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Non Repeating Digits</title>
</head>

<body>
<?
function CheckDigits($num){
	$resp = true;
	$strNum = (string)$num;	
	$split = str_split($strNum);
	foreach($split as $key=>$val){
		for($i = 0; $i < strlen($strNum); $i++){
			if($key != $i){
				if($val == $split[$i]){										
					$resp = false;
				}
			}
		}			
	}
	return $resp;
}
$back = '<input type="button" value="Again?" onClick="window.location = window.location;" />';
$numsArr;
$minus = false;
if(isset($_POST['submit']) && ($_POST['submit'] == 'Check')){
	if($_POST['number'] != ''){
		if(is_numeric($_POST['number'])){
			if(strlen($_POST['number']) < 3){
				echo "<div>No</div>".$back;	
			}else{
				if((int)$_POST['number'] < 0)$minus=true;
				$numberSet = abs((int)$_POST['number']);
				for($k = 100; $k <= $numberSet; $k++){
					if(CheckDigits($k)){
						$numsArr[] = $k;
					}
				}
				
				if(count($numsArr) != 0){
					echo '<div>';
					foreach($numsArr as $nums){
						echo ($minus)? '-'.$nums.' ': $nums.' ';
					}
					echo '</div>'.$back ;
				}else{
					echo "<div>No</div>".$back ;
				}
			}
		}else{
			echo '<div style="color:red">Please, enter a numeric value in the field</div>'.$back ;
		}
	}else{
		echo'<div style="color:red">Please, enter a value in the field</div>'.$back;
	}
}else{ ?>
<form action="" method="post" name="form1">
	<input name="number" id="number" type="text" placeholder="insert number"/>
    <input type="submit" id="submit" name="submit" value="Check"/>
</form>
<?= $helper->AddBack(); ?>
<?php } ?>
</body>
</html>