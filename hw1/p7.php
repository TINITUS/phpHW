<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Get Form Data</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <input type="text" name="name" id="name" placeholder="Your Name?"/><br/>
  <input type="text" name="age" id="age" placeholder="Your Age?"/><br/>
  <input type="radio" name="sex" id="sex1" value="male"/>Male<br/>
  <input type="radio" name="sex" id="sex2" value="female"/>Female<br/>
  <input type="submit" name="submit" id="submit" value="Send"/>
</form>
<?php
if(isset($_POST['submit']) && ($_POST['submit'] == 'Send')){
	if(count($_POST) == 4){
	
		$name = htmlentities($_POST['name']);
		$age = htmlentities($_POST['age']);
		$sex = htmlentities($_POST['sex']);
			
		echo "<div>My name is $name. I am $age years old. I am $sex.</div>";
		
	} else {
		echo '<div style="color:red"> Please, fill all the fields</div>';
	}
}
?>
<?= $helper->AddBack(); ?>
</body>
</html>
