<?php
include "models/film-model.php";
$submitted = $_POST['submitBtn'];
if($submitted){
    $title = $_POST['title'];
    $year = $_POST['year'];
    $duration = $_POST['duration'];
    $certId = $_POST['certificate'];
    echo "<h2>Film saved!</h2>";
}
saveFilm($title, $year, $duration, $certId);
include "views/save-view.php";
?>
