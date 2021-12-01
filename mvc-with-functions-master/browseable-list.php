<?php
include "models/film-model.php";
$films = getAllFilms();
$title = "List all films";
include "views/list-view.php";
?>
