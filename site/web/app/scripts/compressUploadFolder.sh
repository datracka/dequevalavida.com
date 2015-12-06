#!/bin/bash

# WIP 

# Remove not needed files .DS_Store _.DS_Store .gitkeep
# No saev the whole path. Only files direct into the root to be uncompressed in the uploads folder

now=$(date)

tar -zcvf ~/Downloads/images-upload-${now}.tar.gz /Users/vicensfayos/Projects/dequevalavida.local/site/web/app/uploads
