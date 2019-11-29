<?php

$router->post('/{name}/{age}[/{city}]',function($name,$age,$city=null){

return $name.$age.$city;

});
