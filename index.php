<?php
require_once 'vendor/autoload.php';

use Site\Classes\Request;
use Site\Classes\Bootstrap;

$request = new Request($_POST, $_GET);
$bootstrap = new Bootstrap($request);