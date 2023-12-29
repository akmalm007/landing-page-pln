#!/bin/zsh

php artisan migrate:fresh

php artisan db:seed --class=AcademySeeder

php artisan db:seed --class=ProgramSeeder

php artisan db:seed --class=SignatureProgramSeeder

