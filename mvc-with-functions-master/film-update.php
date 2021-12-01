<?php
include "models/film-model.php";
$id = $_POST['id'];
$title = $_POST['title'];
$year = $_POST['year'];
$duration = $_POST['duration'];
updateFilm($id,$title,$year,$duration);
echo "<h2>Film updated.</h2>";
echo "<a href='index.php'>Back to list</a>";
?>