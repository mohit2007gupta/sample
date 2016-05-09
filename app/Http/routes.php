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


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('/', function() {
    return 'Hello, it\'s me!';
});

/*
 * Rest APIs
 */

Route::group(['prefix' => 'api/v1/'], function () {

    Route::get('getUser/{id}', array('uses' => 'Rest\UserRestController@getUser'));

    Route::get('getCurrentUser', array('uses' => 'Rest\UserRestController@getCurrentUser'));

    Route::get('getCurrentUserContributions', array('uses' => 'Rest\UserRestController@getCurrentUserContributions'));

    Route::get('getUserArticles/{id}', array('uses' => 'Rest\UserRestController@getUserArticles'));

    Route::get('getArticle/{id}', array('uses' => 'Rest\ArticleRestController@getArticle'));

    Route::get('getAllArticles', array('uses' => 'Rest\ArticleRestController@getAllArticles'));

    Route::post('createArticle', array('uses' => 'Rest\ArticleRestController@createArticle'));

    Route::post('editArticle', array('uses' => 'Rest\ArticleRestController@editArticle'));

    Route::get('makeAdmin/{id}', 'Rest\UserRestController@makeAdmin');

    Route::get('makeEditor/{id}', 'Rest\UserRestController@makeEditor');

    Route::get('makeModerator/{id}', 'Rest\UserRestController@makeModerator');

    Route::get('makeAuthor/{id}', 'Rest\UserRestController@makeAuthor');

    Route::get('removeAdmin/{id}', 'Rest\UserRestController@removeAdmin');

    Route::get('removeEditor/{id}', 'Rest\UserRestController@removeEditor');

    Route::get('removeModerator/{id}', 'Rest\UserRestController@removeModerator');

    Route::get('removeAuthor/{id}', 'Rest\UserRestController@removeAuthor');

});