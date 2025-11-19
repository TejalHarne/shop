#!/bin/bash
mkdir -p build
zip -r build/php-app.zip . -x "*.git*" -x "build/*"
