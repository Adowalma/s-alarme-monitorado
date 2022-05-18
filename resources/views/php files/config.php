<?php 
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'Adowalma'); 
define('DB_PASSWORD', '11APCAapca@@'); 
define('DB_NAME', 'alarme_monitorado');

define('GOOGLE_MAP_API_KEY', 'AIzaSyCfCFsPdqyYUKcl1qYoB4XlrctjQf1ZYls');

//ESP32_API_KEY is the exact duplicate of, ESP32_API_KEY in ESP32 sketch file
//Both values must be same
define('ESP32_API_KEY', 'Ad5F10jkBM0');

//http://www.example.com/gpsdata.php
define('POST_DATA_URL', 'http://127.0.0.1:8000/checkout/test');

date_default_timezone_set('Asia/Karachi');

// Connect with the database 
$db = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME); 
 
// Display error if failed to connect 
if ($db->connect_errno) { 
    echo "Connection to database is failed: ".$db->connect_error;
    exit();
}