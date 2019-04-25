#!/bin/bash
cd /apps/booking-room
echo 'npm install'
npm install 
echo 'npm audit fix'
npm audit fix
echo 'App building'
npm run build
echo 'Copy builded to document root'
cp -rfv ./build/* ./dist
echo 'Copy .htaccess to document root'
cp -v /home/app_script/.htaccess ./dist