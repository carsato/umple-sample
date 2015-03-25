#!/bin/bash

rm *.php *.rb *.java src/*.php  src/*.rb src/*.java
cd ump
rm *.php *.rb *.java src/*.php  src/*.rb src/*.java

java -jar ./umple.jar mainJava.ump


mkdir ../src
mv *.php ../src/
mv *.rb  ../src/
cd ..
