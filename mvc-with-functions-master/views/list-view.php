<!DOCTYPE HTML>
<html>
<head>
<title><?php echo"{$title}";?></title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
	<ul>
<?php

//loop over the array of films
foreach ($films as $film) {
    echo "<li>";
    echo "<a href='details.php?id={$film["id"]}'>{$film["title"]}</a>";
    echo "</li>";
}
?>
</ul>
</body>
</html>
