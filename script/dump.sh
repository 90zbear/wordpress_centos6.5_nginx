#!/bin/sh

CURRENT_DIR=`dirname "${0}"`

cd $CURRENT_DIR

rm backup.dump

mysqldump -uusername -ppassword wordpress_dev > $CURRENT_DIR/backup.dump
