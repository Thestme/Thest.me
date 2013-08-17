<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('genders', 'GendersController');

Route::resource('student_types', 'Student_typesController');

Route::resource('universities', 'UniversitiesController');

Route::resource('students', 'StudentsController');

Route::resource('student_projects', 'Student_projectsController');

Route::resource('projects', 'ProjectsController');

Route::resource('project_states', 'Project_statesController');

Route::resource('project_application_areas', 'Project_application_areasController');

Route::resource('areas', 'AreasController');

Route::resource('companies', 'CompaniesController');

Route::resource('company_sizes', 'Company_sizesController');

Route::resource('company_areas', 'Company_areasController');

Route::resource('project_selections', 'Project_selectionsController');