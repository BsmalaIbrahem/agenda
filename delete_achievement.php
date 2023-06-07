<?php
include('nav.php');
$id = $_GET['id'];
$achievement = new achievement();
$achievement->delete_achievement($id);