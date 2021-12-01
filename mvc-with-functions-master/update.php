<?php
include "models/film-model.php";
$filmId = $_GET['id'];
$film = getFilmById($filmId);
include "views/edit-form-view.php";
?>