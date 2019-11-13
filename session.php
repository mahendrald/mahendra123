<?php
session_start();
print_r($_SESSION);
$_SESSION['name']='RAM';
print_r($_SESSION);