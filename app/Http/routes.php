<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*
 * Done to override Blade Templating Tags
 * that conflict with AngularJS
 */

Blade::setContentTags('<%', '%>');        // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>');   // for escaped data

Route::get('/', function () {
    return view('welcome');
});

/*
 * Rest APIs
 */

Route::group(['prefix' => 'api/v1/'], function() {

    Route::get('getUser', array('uses'=>'Rest\UserRestController@getUser'));

});