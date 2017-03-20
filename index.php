<?php
session_start();
require 'vendor/autoload.php';
require 'config.php';
//ERROS
error_reporting(E_ALL);
ini_set("display_errors", "On");

spl_autoload_register(function ($class){
    if(strpos($class, 'Controller') > -1) {
        if(file_exists('controllers/'.$class.'.php')) {
                require_once 'controllers/'.$class.'.php';
        }
    } elseif(file_exists('models/'.$class.'.php')) {
            require_once 'models/'.$class.'.php';
    } elseif(file_exists('core/'.$class.'.php')) {
            require_once 'core/'.$class.'.php';
    } elseif(file_exists('helpers/'.$class.'.php')) {
            require_once 'helpers/'.$class.'.php';
    }
});

//usando biblioteca monolog
$log = new Monolog\Logger("teste");
$log->pushHandler(new Monolog\Handler\StreamHandler('erros.log', Monolog\Logger::WARNING));

//teste MONOLOG
//$log->addError('Algo errado');

$core = new Core();
$core->run();



?>