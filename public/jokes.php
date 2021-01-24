<?php

require '../templates/connect.php';

$stmt = $pdo->query('SELECT * FROM joke');

require '../templates/loadTemplate.php'; // makes the function available in this file

$title = 'Joke list';

$templateVars = [
	'stmt' => $stmt
];

$output = loadTemplate('../templates/jokes.html.php', $templateVars);


require '../templates/layout.html.php';

