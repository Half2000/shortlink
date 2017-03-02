<?php

//Папки
define('BASE_URL', 'http://'.$_SERVER['SERVER_NAME'].'/');
define('DS', DIRECTORY_SEPARATOR);
define('ROOT_DIR', realpath(dirname(__FILE__) . DS . '..') . DS);
define('CLASS_DIR', ROOT_DIR . 'classes' . DS);
define('CONFIG_DIR', ROOT_DIR . 'config' . DS);
define('CSS_DIR', ROOT_DIR . 'css' . DS);
define('JS_DIR', ROOT_DIR . 'js' . DS);
define('VIEW_DIR', ROOT_DIR . 'views' . DS);


//БД
define('DB_SERVER', '192.168.0.101');
define('DB_NAME', 'test');
define('DB_USER', 'root');
define('DB_PASSWD', '');
define('DB_DRIVER', 'mysql');
define('DB_PREFIX', '');

//Настройки
ini_set('default_charset', 'utf-8');