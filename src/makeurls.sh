#!/bin/bash

for i in {0..500}; do
    echo http://localhost:8080/testfiles/$i.php >> urls.txt
done
