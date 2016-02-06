<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('{path:.*?}', function ($path) use ($app) {

    $paths = [
        'directions' => 'Directions',
        'rsvp' => 'RSVP',
        'accomodation' => 'Accomodation',
        'on-the-day' => 'On The Day',
        'on-the-weekend' => 'On The Weekend',
    ];

    $path = array_key_exists($path, $paths) ? $path : 'main';
    return view($path, ['selected' => $path, 'paths' => $paths]);
});

