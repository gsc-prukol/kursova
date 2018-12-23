<?php
$dbservername = "10.35.2.26";
$dbusername = "ka66_03";
$dbpassword = "djKjlz14nfyr";
$dbname = "ka66_03";
$dbport = 33321;

$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname, $dbport);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->set_charset("utf8");
?>