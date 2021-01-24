<?php
	require '../templates/loadTemplate.php'; // makes the function available in this file

if (isset($_POST['joketext'])) {

	require '../templates/connect.php';

	$date = new DateTime();

	$stmt = $pdo->prepare('INSERT INTO joke (joketext,jokedate) VALUES (:joketext, :jokedate)');



	$values = [
		'joketext' => $_POST['joketext'],
		'jokedate' => $date->format('Y-m-d H:i:s')
	];

	$stmt->execute($values);

	header('location: jokes.php');
}
else {

	$title = 'Add a new joke';

	$output = loadTemplate('../templates/addJoke.html.php', []);

}
require  '../templates/layout.html.php';