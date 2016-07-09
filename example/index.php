<?php 
require 'vendor/autoload.php';
use RedBeanPHP\R;

// use rvettori;
# USING

R::setup( 'pgsql:host=localhost;dbname=todo', 'postgres', 'postgres' );

Flight::start();