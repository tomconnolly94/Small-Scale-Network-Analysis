<?php

$first = array("hostname" => "lin12345", "ip_address" => "111.111.111.111");
$second = array("hostname" => "mac12345", "ip_address" => "222.222.222.222");
$third = array("hostname" => "win12345", "ip_address" => "333.333.333.333");

$return = array(0 => $first, 1 => $second, 2 => $third);

header('Content-Type: application/json');
echo json_encode($return);
?>