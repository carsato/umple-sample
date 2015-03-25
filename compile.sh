#!/bin/bash

rm *.php src/*.php *.rb src/*.rb
java -jar ~/opt/umple.jar  main.ump
mv *.php src/
mv *.rb src/
