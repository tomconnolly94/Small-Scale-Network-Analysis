#!/bin/bash

wlan0_address="$(./access_ip.sh)"

output="$(nmap -sP $wlan0_address/16)"

echo $output >> results.txt