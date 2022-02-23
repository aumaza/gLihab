#!/bin/bash


fecha=`date +%d-%m-%Y`
archivo="gnu_lihab-$fecha.sql"
mysqldump --user=root --password=slack142 --host=192.168.0.47 gnu_lihab > $archivo
mv $archivo sqls/backup/
echo -e "Database Backing Up Successfully \n File storage Successfully"

