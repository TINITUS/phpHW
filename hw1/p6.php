<?php
require_once('../lib/helper.php');
$helper = new helper();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Information Table</title>
<style>
	.infoTable{
		width:250px;
		font: 12px Arial;
		border-collapse:collapse;
	}		
	.infoTable tbody th {
		background-color:#2F4F4F;
		color:#FFF;
		border: 1px solid #888;		
	}	
	.infoTable tbody td {
		border:1px solid #888;
		text-align:right;
	}		
</style>	
</head>

<body>
<?php
if(isset($_POST['submit']) && ($_POST['submit'] == 'Submit')){
	$personalInfo['name'] =  htmlentities($_POST['name']);
	$personalInfo['phone'] = htmlentities($_POST['phone']);
	$personalInfo['age'] = htmlentities($_POST['age']);
	$personalInfo['address'] = htmlentities($_POST['addrs']);
?>
<table class="infoTable" description="This table contains personal info"> 
	<tbody> 
<?php
foreach($personalInfo as $key => $val){
?>
		<tr> 
			<th scope="row" style="text-transform:capitalize"><?= $key ?></th> 
			<td><?= $val ?></td>  
		</tr> 		
<?php
}
?>        
	</tbody> 
</table> 
<input type="button" value="Back" onClick="window.location = window.location;"/>
<?php	
} else {
?>
<form id="form1" name="form1" method="post">
<label for="name"> Name </label> - <input type="text" name="name" id="name"/> <br/>
<label for="phone"> Phone </label> - <input type="text" name="phone" id="phone"/> <br/>
<label for="age"> Age </label> - <input type="text" name="age" id="age"/> <br/>
<label for="addrs"> Address </label> - <input type="text" name="addrs" id="addrs"/> <br/>
  <input type="submit" name="submit" id="submit" value="Submit">
</form>
<?php 
echo $helper->AddBack(); 
}
?>
</body>
</html>