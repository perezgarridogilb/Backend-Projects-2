<?php

include './clases/person.php';
include './clases/user.php';
include './clases/admin.php';

$user = new User;
$user->type = new Admin;
echo $user->type->greet();
