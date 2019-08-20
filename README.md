# backpack-example
Simple POC

`composer install`  
`npm install && npm run dev`

Install backpack files:
```
php artisan backpack:base:install
php artisan backpack:crud:install

# OPTIONAL!
rm -rf app/Http/Controllers/Auth #deletes laravel's demo auth controllers
```

Reference: https://backpackforlaravel.com/docs/3.6/installation
