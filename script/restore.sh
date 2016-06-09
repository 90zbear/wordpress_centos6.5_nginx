#!/bin/sh

CURRENT_DIR=`dirname "${0}"`

cd $CURRENT_DIR

if [ ! -e backup.dump ]; then
  echo "backup ファイルがありません"
  exit
fi

mysql -uusername -ppassword wordpress_dev < backup.dump
