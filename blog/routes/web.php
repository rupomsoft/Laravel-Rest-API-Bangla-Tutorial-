<?php

$router->get('/{name}/{age}[/{city}]',function($name,$age,$city=null){

return $name.$age.$city;

});
