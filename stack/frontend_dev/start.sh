#!/bin/bash
#echo 'Run Apache'
#apache2ctl -D FOREGROUND
echo 'Go to working dir'
cd /apps/booking-room
echo 'npm install'
npm install 
echo 'npm audit fix'
npm audit fix
echo 'App building'
npm run dev && apache2ctl -D FOREGROUND