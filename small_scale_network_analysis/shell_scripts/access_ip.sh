#!/bin/bash

output="$(ifconfig wlan0 | grep 'inet addr' | cut -d:  -f2 | awk '{print $1}' )"

echo $output