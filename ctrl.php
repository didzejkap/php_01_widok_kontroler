<?php

require_once 'init.php';

getRouter()->setDefaultRoute('calcShow'); //sciezka domyslna
getRouter()->setLoginRoute('login'); // sciezka do logowania

getRouter()->addRoute('calcShow',    'CalcCtrl',  ['user','admin']); 
getRouter()->addRoute('calcCompute', 'CalcCtrl',  ['user','admin']);
getRouter()->addRoute('login',       'LoginCtrl');
getRouter()->addRoute('logout',      'LoginCtrl', ['user','admin']);

getRouter()->go();

?>


