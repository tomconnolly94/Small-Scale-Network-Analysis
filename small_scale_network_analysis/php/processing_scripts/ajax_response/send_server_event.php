<?php

    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache'); // recommended to prevent caching of event data.

    $num = 0;

    //while(true) {

    $first = array("hostname" => "lin12345", "ip_address" => "111.111.111.111");
    $second = array("hostname" => "mac12345", "ip_address" => "222.222.222.222");
    $third = array("hostname" => "win12345", "ip_address" => "333.333.333.333");
    $fourth = array("hostname" => "lin11122", "ip_address" => "444.444.444.444");
    $fifth = array("hostname" => "lin11122", "ip_address" => "444.444.444.444");
    $sixth = array("hostname" => "win12345", "ip_address" => "333.333.333.333");
    $seventh = array("hostname" => "lin11122", "ip_address" => "444.444.444.444");
    $eigth = array("hostname" => "lin11122", "ip_address" => "444.444.444.444");
    $ninth = array("hostname" => "lin11122", "ip_address" => "444.444.444.444");


    if($num == 0){
        $return = array(0 => $first, 1 => $second, 2 => $third, 3 => $fourth, 4 => $fifth, 5 => $sixth, 6 => $seventh, 7 => $eigth, 8 => $ninth);
        $num++;
    }
    else{
        $return = array(0 => $first, 1 => $second, 2 => $third, 3 => $fourth, 4 => $fifth, 5 => $sixth, 6 => $seventh);
        $num--;
    }
    //header('Content-Type: application/json');
    //echo json_encode($return);

    sendMsg(json_encode($return));


    function sendMsg($msg) {
        echo "data: $msg" . PHP_EOL;
        echo PHP_EOL;
        flush();
    }

?>