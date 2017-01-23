<?php

    header('Content-Type: text/event-stream');
    header('Cache-Control: no-cache'); // recommended to prevent caching of event data.

    $ip = shell_exec("ifconfig | grep -A 1 'eth0' | tail -1 | cut -d ':' -f 2 | cut -d ' ' -f 1");

    $nmap_raw = shell_exec("sudo nmap -sP '$ip' ");

    $num = 0;

    //while(true) {

    $first = array("hostname" => "lin1", "ip_address" => "111.111.111.111");
    $second = array("hostname" => "mac1", "ip_address" => "111.111.111.112");
    $third = array("hostname" => "win1", "ip_address" => "111.111.111.113");
    $fourth = array("hostname" => "lin2", "ip_address" => "111.111.111.114");
    $fifth = array("hostname" => "lin3", "ip_address" => "111.111.111.115");
    $sixth = array("hostname" => "win2", "ip_address" => "111.111.111.116");
    $seventh = array("hostname" => "lin4", "ip_address" => "111.111.111.117");
    $eigth = array("hostname" => "lin5", "ip_address" => "111.111.111.118");
    $ninth = array("hostname" => "lin6", "ip_address" => "111.111.111.119");


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