<?php
$router->get('/select', 'DetailsController@SelectALL');


$router->post('/select', 'DetailsController@SelectByID');