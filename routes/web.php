<?php


Route::get('/', 'HomeController@index');

Route::any('/spa/{any?}', 'SpaController@spa')->where(['any' => '.*']);

Route::resource('project', 'ProjectController', ['except' => ['create']]);
Route::get('projects/', 'ProjectController@projects');

Route::resource('note', 'NoteController', ['except' => ['create']]);
Route::get('notes/', 'NoteController@notes');

Route::post('contact', 'SpaController@addContact');
Route::get('contacts', 'SpaController@contacts');

Route::get('skills', 'SpaController@skills');
Route::get('languages', 'SpaController@languages');
