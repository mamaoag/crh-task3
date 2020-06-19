#!/bin/bash
echo 'Seeding Users...' &&
php artisan db:seed --class UserSeeder
