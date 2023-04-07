<?php
$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";
$dbname= "details";

if(!$con = mysqli_connect($dbhost,$dbname,$dbpass,$dbuser))
{
    die("failed to connect");
}
