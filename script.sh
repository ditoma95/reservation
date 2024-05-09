#!/bin/bash
# composer update
# npm i
# npm install concurrently
#php artisan storage:link

php artisan migrate:fresh --seed
npm run dev
