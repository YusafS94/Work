<?php
include "models/film-model.php";
$title = "Delete Film";
$films = getAllFilms();
include "views/delete-list-view.php";
?>