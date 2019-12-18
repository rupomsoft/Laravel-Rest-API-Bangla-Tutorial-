<?php
$router->get('/select', 'DetailsController@SelectALL');
$router->post('/select', 'DetailsController@SelectByID');

$router->get('/count', 'DetailsController@Count');
$router->get('/max', 'DetailsController@Max');
$router->get('/min', 'DetailsController@Min');
$router->get('/avg', 'DetailsController@Avg');
$router->get('/sum', 'DetailsController@Sum');

$router->post('/insert', 'DetailsController@Insert');

$router->post('/delete', 'DetailsController@Delete');
$router->post('/update', 'DetailsController@Update');
