## Instructions 

**Requirements**

* php 8.0+
* mysql 5.7+

**Install Laravel**

```
composer create-project laravel/laravel laravel9-sanctum-breeze
 
cd laravel9-sanctum-breeze
 
php artisan serve
```

**Configure environment**

Configure database connection and related items. 

**Install Breeze**

```
composer require laravel/breeze --dev

php artisan breeze:install vue
npm install
npm run dev
php artisan migrate
```

**Run the app**

```
php artisan serve --host=9.0.0.0 --port=8000
```

**Install Sanctum**

```
composer require laravel/sanctum
php artisan vendor:publish --provider="Laravel\Sanctum\SanctumServiceProvider"
php artisan migrate

```

Add sanctum middleware to api: app/Http/Kernel.php

```
'api' => [
    \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
    'throttle:api',
    \Illuminate\Routing\Middleware\SubstituteBindings::class,
],
```