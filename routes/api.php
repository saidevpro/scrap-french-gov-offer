<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\AuthController;
//use App\Http\Controllers\CountryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('v'.env('API_VERSION', 1))->group(function () {
    Route::get('tenders/boamp/UW1s4y0HAigPoiuLdKJnA239GEGTIX5oNXxqhNQx551VaR7YN2TRefKId5Lf1mBs', 'ScraperController@fetchTenderFromBoamp');
    Route::get('tenders/nouma/UW1s4y0HAigPoiuLdKJnA239GEGTIX5oNXxqhNQx551VaR7YN2TRefKId5Lf1mBs', 'ScraperController@fetchTenderFromNouma');
    Route::get('tenders/search/filters', 'SearchController@getSearchFilterOptions');
    Route::get('tenders/search', 'SearchController@search');
    Route::get('turnover/slices', 'TurnoverController@slices');
    Route::apiResource('cities', 'CityController');
    Route::get('tenders/{id}', 'TenderController@show');
    Route::apiResource('viewreports', 'ViewReportController')->only(['store', 'index']);
    Route::get('companies/{url}/page', 'CompanyController@getCompanyByUrl');

    Route::post('company/imports', 'CompanyController@imports');

    Route::middleware('auth:api')->group(function () {
        Route::post('/logout', 'AuthController@logout');
        Route::post('/auth/refresh', 'AuthController@refresh');
        Route::get('/me', 'AuthController@me');
        Route::get('users/dashboard', 'UserController@dashboard');
        Route::post('/resetpassword', 'AuthController@update_password');
        Route::get('users/validation/admin', 'UserController@sendValidationDemand');
        Route::apiResource('users', 'UserController')->except([ 'create', 'store', 'edit', 'index' ]);
        Route::apiResource('tenders', 'TenderController');

        Route::middleware('login_as_superuser')->group(function () {
            Route::post('tenders/{id}/documents', 'TenderController@saveDocumentToFavorisTender');
            Route::apiResource('researchs', 'ResearchProfileController')->middleware('only_provider');
            Route::get('follows/stats', 'FavorisController@favorisStats')->middleware('only_provider');
            Route::apiResource('follows', 'FavorisController')->middleware('only_provider');
            Route::apiResource('folders', 'FolderController')->middleware('only_provider');
            Route::post('folders/{id}/documents', 'FolderController@bindDocuments')->middleware('only_provider');
            Route::get('documents/types', 'DocumentController@types')->middleware('only_provider');
            Route::get('documents/templates', 'DocumentController@getTemplateDocuments')->middleware('only_provider');
            Route::apiResource('documents', 'DocumentController')->middleware('only_provider');
            Route::delete('documents/{id}/folders', 'DocumentController@updateFolderToEmpty')->middleware('only_provider');
            Route::apiResource('notes', 'NoteController');
            Route::get('companies/filter_options', 'CompanyController@getFilterItemChoices');
            Route::put('companies/{id}/page', 'CompanyController@updateCompanyPageUrl');
            Route::apiResource('companies', 'CompanyController');
        });

        Route::apiResource('contacts', 'ContactController');
        Route::post('researchs/share', 'ResearchProfileController@shareResearch')->middleware('only_provider');
        Route::apiResource('credentials', 'PasswordManagerController')->except(['edit', 'create', 'update'])->middleware('only_provider');
        Route::get('/contacts/{id}/invitation', 'ContactController@sendInvitation');
        Route::get('messages/interlocutors', 'MessageController@getInterlocutors');
        Route::apiResource('messages', 'MessageController')->except(['edit','create', 'delete']);

        Route::prefix('admin')->middleware('admin')->group(function () {
            Route::get('users', 'UsersAdminController@index');
            Route::post('users/activate', 'UsersAdminController@activateUser');
        });
    });

    Route::get('countries', 'CountryController@index');
    Route::apiResource('regions', 'RegionController');
    Route::get('companytypes', 'CompanyController@types');
    Route::post('/login', 'AuthController@login');
    Route::post('/register', 'AuthController@register');

    Route::prefix('payments')->group(function () {
        Route::get('methods', 'PaymentController@getMethods');
        Route::post('create', 'PaymentController@create');
        Route::get('done', 'PaymentController@handlePayment')->name('payment.callback');
        Route::get('subscription', 'PaymentController@getLastSubscription')->middleware('auth:api');
    });
});
