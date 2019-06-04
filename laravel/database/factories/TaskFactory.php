<?php

use Faker\Generator as Faker;

$factory->define(App\Task::class, function (Faker $faker) {
    return [
        'title' => 'helloworld',
        'body' => "helloworld",
        'limit' => new DateTime(),
        'progress' => "3",
        'user_id' => "1",
    
    ];
});
