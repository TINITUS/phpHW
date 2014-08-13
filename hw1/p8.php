<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Time Until New Year</title>
</head>

<body>
<?php

$now = getdate();
$currentDate = new DateTime( date('d-m-Y G:i:s', strtotime($now['mday'].'-'.$now['mon'].'-'.$now['year'].' '.$now['hours'].':'.$now['minutes'].':'.$now['seconds'])));
$newYearDate = new DateTime( date('d-m-Y G:i:s', strtotime('01-01-2015 00:00:00')));

$diff = date_diff($currentDate, $newYearDate);
$daysFull = (int)$diff->format('%a');
$hours = (int)$diff->format('%h');
$minutes = (int)$diff->format('%i');
$seconds = (int)$diff->format('%s');

$hoursUntil = ($daysFull * 24)+$hours;
$minutesUntil = ($hoursUntil*60)+$minutes;
$secondsUntil = ($minutesUntil*60)+$seconds;

echo "Hours until new year : $hoursUntil<br/>
	  Minutes until new year : $minutesUntil<br>
	  Seconds until new year : $secondsUntil<br>
	  Days:Hours:Minutes:Seconds {$daysFull}:{$hours}:{$minutes}:{$seconds}<br>";
echo $helper->AddBack();	  
?>
</body>
</html>