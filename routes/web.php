<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');



Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');


Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');


Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');


Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');


Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');


Route::resource('attitude', 'AttitudeController');

Route::resource('guide', 'GuideController');

Route::resource('tool', 'ToolController');

Route::resource('industry', 'IndustryController');

Route::resource('phase', 'PhaseController');

Route::resource('taxonomy', 'TaxonomyController');

Route::resource('resource', 'ResourceController');

Route::resource('source', 'SourceController');

Route::resource('file', 'FileController');

Route::resource('video', 'VideoController');

Route::resource('question', 'QuestionController');
