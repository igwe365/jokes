<?php
require '../templates/loadTemplate.php'; // makes the function available in this file

$title = 'Internet Joke Database';

$output = loadTemplate('../templates/home.html.php', []);

require  '../templates/layout.html.php';