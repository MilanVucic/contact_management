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

Route::get('/', ['as' => 'homepage', 'uses' => 'ContactController@displayAll']);

Route::get('contact', 'ContactController@addContact');

Route::post('contact', 'ContactController@postAddContact');

Route::get('contact/{id}', 'ContactController@getContact');

Route::get('contact/edit/{id}', 'ContactController@editContact');

Route::post('contact/edit/{id}', 'ContactController@postEditContact');

Route::get('followups', 'FollowupController@displayAll');

Route::get('followup/{contactId}', 'FollowupController@addFollowup');

Route::post('followup/{contactId}', 'FollowupController@postAddFollowup');

Route::get('followup/edit/{id}', 'FollowupController@editFollowup');

Route::post('followup/edit/{id}', 'FollowupController@postEditFollowup');

