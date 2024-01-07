#!/bin/bash

php artisan migrate:fresh

php artisan db:seed --class=AcademySeeder

php artisan db:seed --class=ProgramSeeder

php artisan db:seed --class=SignatureProgramSeeder

php artisan db:seed --class=FacilitySeeder

composer dumpauto
