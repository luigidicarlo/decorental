<?php

use App\Category;
use App\Product;
use App\User;
use App\Work;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => Hash::make('luigi1995'),
        'remember_token' => Str::random(10),
    ];
});

$factory->define(Product::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1, 10),
        'name' => $faker->name(),
        'description' => $faker->paragraph(),
        'price' => $faker->numberBetween(1, 1500),
        'discount' => $faker->numberBetween(0, 50),
        'image' => $faker->imageUrl(),
    ];
});

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
    ];
});

$factory->define(Work::class, function (Faker $faker) {
    return [
        'url' => $faker->url
    ];
});
