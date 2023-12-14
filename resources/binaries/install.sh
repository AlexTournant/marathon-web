#!/usr/bin/env sh

echo "#begin install"
cd ~/www
if [ ! -d ./vendor ] ; then
  composer install
fi
if [ ! -d ./node_modules ] ; then
  npm install 
fi
npm run build
sudo fixRights $LOGNAME
php artisan view:clear
echo "#end install"
