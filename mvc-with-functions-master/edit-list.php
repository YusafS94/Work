<?php
include "models/film-model.php";
$title = "Update film details";
$films = getAllFilms();
include "views/edit-list-view.php";
?>