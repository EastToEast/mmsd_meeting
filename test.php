<?php
/**
 * Created by PhpStorm.
 * User: hoge
 * Date: 3/30/22
 * Time: 3:40 PM
 */

require_once __DIR__ .'/vendor/autoload.php';

use Pack\Response\ErrorCode;

$server = new ErrorCode();
$msg = $server->hello();
var_dump($msg);