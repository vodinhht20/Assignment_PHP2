<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : '/';
require_once('./vendor/autoload.php');
require_once('./utils/Routing.php');
require_once('./utils/config.php');
require_once('./utils/slug.php');
use Utils\Routing;
const BASE_URL = "http://localhost/PHP2/Assignment/mvc2/";
const PUBLIC_PATH = BASE_URL."public/";
Routing::start($url);
?>