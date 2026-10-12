<?php
require_once "../classes/Users.php";

$user = new Users;

$user->store($_POST);

?>