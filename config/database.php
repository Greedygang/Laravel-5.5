<?php
if (env('APP_ENV') == 'test') {
    return require_once(config_path().'/database.test.php');
}
else if (env('APP_ENV') == 'production') {
    return require_once(config_path().'/database.prod.php');
} else {
    throw new \Exception("No db config file");
}
