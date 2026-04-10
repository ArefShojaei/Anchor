#!/usr/bin/env bash

PACKAGE_FILE="public/packages.txt"
PHP_SCRIPT="$(pwd)/bin/cli"

if [ ! -f "$PHP_SCRIPT" ]; then
    echo "❌ Package file not found: $PACKAGE_FILE"
    exit 1
fi

echo "📦 Reading packages from $PACKAGE_FILE"
echo "-----------------------------------"

while IFS=' ' read -r package version url; do

    if [[ -z "$package" ]] || [[ "$package" == \#* ]]; then
        continue
    fi

    php "$PHP_SCRIPT" cdn add "$package" "$version" "$url"

done < "$PACKAGE_FILE"
