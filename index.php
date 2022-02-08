<?php

ini_set( 'display_errors', 1 );
error_reporting(E_ALL);

$novel = file("sample/1.txt");

echo json_encode($novel, JSON_UNESCAPED_UNICODE);
