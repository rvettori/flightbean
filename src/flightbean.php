<?php 
use RedBeanPHP\R;


### REDBEAN SETUP ###
// R::setup();
// R::setup( 'sqlite:./sqlite.db' );
// R::setup( 'pgsql:host=localhost;dbname=todo', 'postgres', 'postgres' );


### REDBEAN PREFIX CONFIG ###
R::ext('xdispense', function( $type ){ 
  return R::getRedBean()->dispense( $type ); 
});


### ROUTES FOR CRUD ###

Flight::route('/api', function() {
  echo '<h1>DEFINE YOUR ROUTES</h1>';
});

Flight::route('GET /api/@table', function($table)  {
  $result = R::find($table);
  Flight::json(R::exportAll($result));
});

Flight::route('POST /api/@table', function($table)  {
  $bean = R::xdispense($table);
  $bean->import( Flight::request()->data );
  R::store($bean);
  Flight::json($bean->export());
});

Flight::route('GET /api/@table/@id', function($table, $id)  {
  $result = R::load($table, $id);
  Flight::json($result->export());
});

Flight::route('PUT|POST /api/@table/@id', function($table,$id)  {
  $bean = R::load($table, $id);
  $bean->import( Flight::request()->data );
  R::store($bean);
  Flight::json($bean->export());
});

Flight::route('DELETE /api/@table/@id', function($table,$id)  {
  $bean = R::load($table, $id);
  R::trash($bean);
  Flight::json($bean->export());
});
