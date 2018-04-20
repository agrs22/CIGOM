# CIGOM
Simple web app to display location data

This app incloudes a docker file to build an image with

# API

A ver simple api is inclouded with the app

To list available data files 
<docker host>:<port>/api.php?v=1&mtd=listfiles
  
To view a files datapoints as an array 
<docker host>:<port>/api.php?v=1&mtd=data&file=<filename>
