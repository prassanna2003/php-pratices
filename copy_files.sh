#!/bin/bash

# Define source and destination paths
SOURCE="/Users/ravindran.paramasivam/Documents/programming pratices/php pratices"
DESTINATION="/Applications/XAMPP/xamppfiles/htdocs/php pratices"

# Ensure source directory exists
if [ ! -d "$SOURCE" ]; then
    echo "Source directory does not exist: $SOURCE"
    exit 1
fi

# Ensure destination directory exists or create it
if [ ! -d "$DESTINATION" ]; then
    mkdir -p "$DESTINATION"
fi

# Copy files from source to destination
cp -R "$SOURCE"/* "$DESTINATION"

echo "Files copied successfully from $SOURCE to $DESTINATION"

