<?php

require 'env.php';


$conn = mysqli_connect('localhost', 'root', '', 'database');

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}
