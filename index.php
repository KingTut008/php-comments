<?php 
require_once $_SERVER['DOCUMENT_ROOT'] . "/module/db.php";
require_once $_SERVER['DOCUMENT_ROOT'] . "/module/comments.php";

include $_SERVER['DOCUMENT_ROOT'] . "/template/header.php";

$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($route == "/") {
    include $_SERVER['DOCUMENT_ROOT'] . "/template/pageComments.php";
} else {
    include $_SERVER['DOCUMENT_ROOT'] . "/template/pageNotFound.php";
}

include $_SERVER['DOCUMENT_ROOT'] . "/template/footer.php";
$dbconnect = "";
