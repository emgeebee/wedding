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
    $path = in_array($path, [
        'directions',
        'rsvp',
        'accomodation'
        ]) ? $path : 'main';
    return view($path);
});

