<?php 

use Acme\RegisterUser;
use Acme\AuthController;

$registration = new RegisterUser;
$authContoller = new AuthController($registration);

$authContoller->register();