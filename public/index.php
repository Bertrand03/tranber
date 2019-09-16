<?php

namespace tranber;

use tranber\services\Conf;
use tranber\services\App;

include '../vendor/autoload.php';

session_start(); // à mettre au tout début dans le code pour ne pas interferer avec le reste.

$data = [
	'title'    => 'Tranber',
	'site-url' => 'http://localhost/tranber-2/public/',
	'routes'   => [
		'/'       => 'tranber\controllers\Home',
		'sign-in' => 'tranber\controllers\SignIn',
		'sign-up' => 'tranber\controllers\SignUp',
		'sign-out' => 'tranber\controllers\SignOut',
		'update-profile' => 'tranber\controllers\SignUpdateProfile',
	],
	'database' => [
		'name' => 'tranber',
		'user' => 'root',
		'pass' => '',
		'host' => 'localhost',
	],
];

$conf = Conf::getInstance($data);
// $conf = new Conf($data);

$app = App::getInstance($conf);
// $app = new App($conf);
// commentaire test
$app->run();