#!/bin/bash

for i in {0..223}; do
    php codegen.php > testfiles/$i.php
done
