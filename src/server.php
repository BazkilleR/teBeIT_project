<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'tobeit_proj';


$mysqli = @(new mysqli($servername, $username, $password, $database));

if ($mysqli->connect_error) {
    die($mysqli->connect_error);
}
