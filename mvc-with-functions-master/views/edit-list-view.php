<!DOCTYPE HTML>
<html>
<head>
<title><?php echo"{$title}";?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<form action="./update.php" method="get">
<?php
foreach($films as $film){
    echo "<label> {$film['title']}";
    echo "<input type='radio' name='id' value='{$film["id"]}'>";
    echo "</label>";
    echo "<br>";
}
?>
<input type="submit" name="submit">
</form>
</body>
</html>
