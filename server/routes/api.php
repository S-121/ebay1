<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('auth/{provider}/callback', 'OutController@index')->where('provider', '.*');

Route::post('socialsignin/{provider}', 'Auth\AuthController@socialSignin');
Route::post('socialsignup/{provider}', 'Auth\AuthController@socialSignup');
Route::post('signin', 'Auth\AuthController@signin');
Route::post('signup', 'Auth\AuthController@signup');
Route::post('logout', 'Auth\AuthController@logout');
Route::get('categories', 'CategoryController@getCategory');
Route::post('register', 'UseradminController@register');
Route::post('user_del', 'UseradminController@user_del');
Route::get('getuseradmindata', 'UseradminController@getuseradmindata');
Route::post('pay_integrate', 'PaymentController@payWithpaypal');
Route::post('payment', 'PaymentController@payment');


Route::group(['middleware' => ['auth:api']], function () {
    Route::apiResources([
        'user' => 'UserController',
        'giftLogo' => 'GiftLogoController',
        'giftBgImg' => 'GiftBgImgController',
        'giftCard' => 'GiftCardController',
    ]);
    Route::post('search', 'ProductsController@search');
    Route::post('search_category', 'ProductsController@search_category');
    Route::post('competitor_research', 'ProductsController@competitor_research');
    Route::post('refresh_token', 'UserController@refresh_token');
    Route::get('user_info', 'UserController@getUser');

    Route::post('searchNew', 'ProductResearchController@searchNew');
    Route::get('getProduct', 'ProductResearchController@getProduct');
    Route::get('getAliexpressProducts', 'ProductResearchController@getAliexpressProducts');

    Route::post('searchBestSellsProduct', 'BestSellsProductController@searchBestSellsProduct');
    Route::get('getBestSellsProduct', 'BestSellsProductController@getBestSellsProduct');
    Route::get('getAliexpressProduct', 'AliexpressproductController@getAliexpressProduct');

    Route::post('searchProductFromUser', 'ProductResearchController@searchProductFromUser');

});


Route::post('photo', function (Request $request) {
    return array("input" => $request->input(), "file" => $request->file());
});
