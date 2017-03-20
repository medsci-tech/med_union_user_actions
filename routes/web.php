<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');


Route::get('/test-token', function () {

    $guzzle = new GuzzleHttp\Client;

    $response = $guzzle->post('http://action.api.com/oauth/token', [
        'form_params' => [
            'grant_type' => 'client_credentials',
            'client_id' => '3',
            'client_secret' => 'W81AumxWfcPCcSbAkdjL4g3VKvh0LbvEFGhN3WEz',
            'scope' => '',
        ],
    ]);
    return json_decode((string) $response->getBody(), true);
});
