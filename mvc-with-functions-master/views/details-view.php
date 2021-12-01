
<!DOCTYPE HTML>
<html>
<head>
<title>List the film details</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
<body>
    <ul>
<?php
if($film){
    echo "<li>Film name: {$film['title']}</li>";
    echo "<li>Year of release: {$film['year']}</li>";
    echo "<li>Film duration: {$film['duration']}</li>";
    echo "<li>Certificate ID: {$film['certificate_id']}</li>";
}
?>
</ul>
</body>
</html>