<?php
include "models/film-model.php";
$filmIds[] = $_POST['ids'];
deleteFilms($filmIds);
echo "<h2>Deleted!</h2>";
?>