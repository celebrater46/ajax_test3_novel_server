<?php

ini_set( 'display_errors', 1 );
error_reporting(E_ALL);

$novel = file("sample/1.txt");

//echo json_encode($novel); // ["\u3000\u6642\u3005\u3001\u5922\u3092\u898b\u308b\u3002\r\n" ...
//echo json_encode($novel, JSON_UNESCAPED_UNICODE); // Unhandled Rejection (TypeError): Cannot read properties of undefined (reading 'length')

//$i = 0;
//$array = [];
//foreach ($novel as $line){
////    $str .= '[' . ($line === "" ? "　" : $line) . '\n' . '], ';
////    $str .= '[' . '　' . '], ';
////    $str .= '{ "id": ' . $i . ', "line": ' . ($line === "" ? "　" : $line) . '}, ';
//    array_push($array, ["id" => $i, "line" => $line]);
//    $i++;
//}

//$json = ["items" => $novel];
//$json = ["items" => $array];
//echo json_encode($json, JSON_UNESCAPED_UNICODE);
echo json_encode($novel, JSON_UNESCAPED_UNICODE);

//$str = "";
//$str = '{"items": [';

//die('{"items": [{ "id": 1, "name": "Apples",  "price": "$2" }, { "id": 2, "name": "Peaches", "price": "$5" }]}');
//die('{"items": ' . $novel . '}');

// Error: Unexpected token ] in JSON at position 3506 -> the cause is final ","
//$str = substr($str, 0, -2);
//$str .= ']}';
//
//die($str);
//include "class.php";
//$main = new _main_;
//if (isset($_POST['type'])) $Type = $_POST['type'];
//if (isset($_POST['data'])) $Data = $_POST['data'];

//if (isset($Type)) {
//    switch (strip_tags($Type)) {
//        case "t_insert_data":
//            $main->InsertData($Data);
//            break;
//        case "t_get_data":
//            $main->GetData();
//            break;
//    }
//}

//$main->GetData();