<?php
<<<<<<< HEAD

define('DSN','mysql:host=localhost;dbname=cafeben');
define('DB_USER','user1');
define('DB_PASS','user1Pass');
=======
$db = parse_url($_SERVER['CLEARDB_DATABASE_URL']);
$db['dbname'] = ltrim($db['path'], '/');
$dsn = "mysql:host={$db['host']};dbname={$db['dbname']};charset=utf8";
$user = $db['user'];
$password = $db['pass'];
define('DSN',$dsn);
define('DB_USER',$user);
define('DB_PASS',$password);
>>>>>>> 42d810056438096250b4914354c61f648dfdc3d5
