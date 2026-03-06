#!/bin/bash
# Setup script for mundialproject4
SRC="/home/cerita_oca/Documents/iza/mundial_project4/mundial02fra02"
DEST="/home/cerita_oca/Documents/iza/mundial_project4/mundialproject4"

cp -r "$SRC/css" "$DEST/"
cp -r "$SRC/js" "$DEST/"
cp -r "$SRC/images" "$DEST/"
mkdir -p "$DEST/includes" "$DEST/lang" "$DEST/angebote-2"

echo "Done!"
