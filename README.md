# What is Flight?

It's a small code to use [Flight](http://flightphp.com) with [RedBeanPhp](http://redbeanphp.com) and
provide an prototype of your api rest.

```php
require 'vendor/autoload.php';
use RedBeanPHP\R;

R::setup();

Flight::start();
```
and start php server..
```
php -S localhost:8080
```

and just use de API ...
```
POST|GET /api/<tablename>
PUT|POST|GET /api/<tablename>/<id>
```

The application will create your tables and fields at database.

[Learn more about Flight PHP](http://flightphp.com/learn)
[Learn more about Flight PHP](http://redbeanphp.com)

# Installation


```
composer require rvettori/flightbean
```
