<!DOCTYPE HTML>
<html>
<head>
<title><?php echo"{$title}";?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
<form action="./delete.php" method="post">
<?php
foreach($films as $film){
    echo "<label> {$film['title']}";
    echo "<input type='checkbox' name='ids' value='{$film["id"]}'>";
    echo "</label>";
    echo "<br>";
}
?>
<input type="submit" name="submit">
</form>
</body>
</html>
