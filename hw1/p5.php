<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lazy Sundays</title>
</head>

<body>
Sundays this month:<br/>
<?php
	$days = cal_days_in_month(CAL_GREGORIAN, (int)date('n'), (int)date('Y'));
	for($i = 1 ; $i <= $days; $i++){
		if(date('D', strtotime($i.'-'.date('n-Y'))) == 'Sun'){
			echo date('dS F, Y',strtotime($i.'-'.date('n-Y')))."</br>";
		}
	}
?>
<?= $helper->AddBack(); ?>
</body>
</html>
