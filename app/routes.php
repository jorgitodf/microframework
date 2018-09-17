<?php

$route[] = ['/', 'HomeController@index'];

$route[] = ['/users', 'UsersController@index'];
$route[] = ['/users/{id}/show', 'UsersController@show'];




return $route;