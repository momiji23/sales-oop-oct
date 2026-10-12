<?php
require_once "../classes/Users.php";

$user = new Users;

$user->login($_POST);

?>