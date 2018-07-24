# GPS Attendance
[![License](https://poser.pugx.org/phpunit/phpunit/license)](https://github.com/ojkalam/online-blog-and-exam)

## Installation 
 * Download and run ```composer install```
 * generate new key ```php artisan key:genereate```
 * create ```.env``` file and set database configuration then
 * migrate database run ```php arisan migrate```
 * or create database ```gps_attn``` and import ```gps_attn.sql```



### Login access for different roles
```
http://localhost/gps_attendance/public

Teachers Login Access:
E-mail:  tipu@gmail.com
Password:  123

Only for admin(click on admin menu)
E-mail:    admin@gmail.com
password:  admin123
```
## Features

 * Admin can assigned Class schedule to trainers
 * Trainer will take attendance on schedule class
 * Trainer's location will be tracked through google map api
 * System will track the location when trainer submit attendace that time location also stored on DB
