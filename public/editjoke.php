<?php
require '../templates/connect.php';

if (isset($_POST['joketext'])) {

	require '../templates/connect.php';

	$date = new DateTime();

	$stmt = $pdo->prepare('UPDATE joke SET joketext = :joketext, jokedate WHERE id = :id');

	$values = [
		'joketext' => $_POST['joketext'],
		'jokedate' => $date->format('Y-m-d H:i:s')
	];

	$stmt->execute($values);

	header('location: jokes.php');
}
else if(isset($_GET['id'])){

    $Stmt = $pdo->prepare('SELECT * FROM joke WHERE id = :id');
    
    $values = [
        'id' => $_GET['id']
    ];
    
    $Stmt->execute($values);
    
    $results = $Stmt->fetch();
    
	$title = 'Add a new joke';
	ob_start();
	require '../templates/editjoke.html.php';

    $output = ob_get_clean();
    
    
}
require  '../templates/layout.html.php';