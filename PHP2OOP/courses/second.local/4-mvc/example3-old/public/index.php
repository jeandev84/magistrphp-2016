<?php
spl_autoload_register(function($name) {
	$parts = explode('\\', $name);
	$parts[0] = $parts[0] == 'JokeSite' ? 'Model' : $parts[0];

	require '../' . implode(DIRECTORY_SEPARATOR, $parts) . '.php';
});

require '../config.php';

$pdo = new \PDO('mysql:host='.DB_HOST.';dbname=' . DB_SCHEMA, DB_USER, DB_PASS, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


$route = $_GET['route'] ?? '';

if ($route == '') {
	$model = new \JokeSite\JokeList($pdo);
	$view = new \JokeList\View();
}
else if ($route == 'edit') {
	$model = new \JokeSite\JokeForm($pdo);
	$controller = new \JokeForm\Controller();

	$model = $controller->edit($model);

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$model = $controller->submit($model);
	}

	$view = new \JokeForm\View();
}
else if ($route == 'delete') {
	$model = new \JokeSite\JokeList($pdo);
	$controller = new \JokeList\Controller();

	$model = $controller->delete($model);

	$view = new \JokeList\View();
}
else if ($route == 'filterList') {
	$model = new \JokeSite\JokeList($pdo);
	$view = new \JokeList\View();
	$controller = new \JokeList\Controller();

	$model = $controller->filterList($model);
}
else {
	http_response_code(404);
	echo 'Страница не найдена (невалидный маршрут)';
}




echo $view->output($model);