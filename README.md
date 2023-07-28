# Restful Laravel

Laravel Version 9.2

This is simple boilerplate for you if you want to build rest api that have tidied responses based on relationships and attributes

I have dummya and sample file called Task where you can duplicate and adapt the body of code to anything you need. But before that, there are some points that you need to set up.

## Make Model, Factory, Controller, Migration

example: Student

```
php artisan make:model Student -mrfcs
```

## Make Resources

```
php artisan make:resource StudentResource
```

## Setup api.php

```php
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

Route::group(['middleware' => ['auth:sanctum']], function(){
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::resource('/task', TaskController::class);
    Route::resource('/students', StudentController::class);
});
```

# Showcase

### [UnivAPI](https://univapi.yasya.tech/)

API to provide data in university such as students, lecturers, and classrooms data who have relations