<?php
    $routes = array(
		'Httpstatus' => [
			'home' => '/',
			'add' => '/add',
			'view' => '/view/{id}',
			'login' => '/connexion',
			'logout' => '/deconnexion',
			'admin' => '/admin',
			'delete' => '/delete/{id}'
        ],
    );

    define('ROUTES', $routes);
