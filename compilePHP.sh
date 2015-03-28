#!/bin/bash

rm *.php *.rb *.java src/*.php  src/*.rb src/*.java
cd ump
rm *.php *.rb *.java src/*.php  src/*.rb src/*.java

java -jar ./umple.jar mainPHP.ump

cat traits.ump  classes.ump  attributes.ump  asociations.ump  methods.php.ump > php.ump


mkdir ../src
mv *.php ../src/
mv *.rb  ../src/
mv *.java  ../src/
cd ..
