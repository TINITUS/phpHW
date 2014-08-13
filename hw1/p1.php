<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Personal Info</title>
</head>

<body>
<?php
$name = "John";
$surname = "Doe";
$old = 24;
$template = "My name is $name $surname and I am $old years old.";
echo $template;
echo $helper->AddBack();
?>
</body>
</html>
