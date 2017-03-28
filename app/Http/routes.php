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
/*web site*/
Route::get('/', function () {
    return view('website.homepage');
});
//Route::resource('homepage','HomePageController');
//Admin panel
Route::get('AdminMosaned','AdminController@index');

Route::post('loginAdmin','AdminController@login');
Route::get('aqars','AdminController@Aqars');
Route::post('getAqarData','AddAqarController@GetAqarDateALL');
// application
Route::resource('users','UserController');
Route::resource('contact','ContactUsController');
Route::resource('comment','CommentController');
Route::resource('aqartype','AqarTypeController');
Route::resource('aqartypeenglish','AqarTypeEnglishController');
Route::resource('aqarproperty','AqarProperyController');
Route::resource('aqarpropertyenglish','AqarTypePropertyEnglishContrller');
Route::resource('addaqar','AddAqarController');
Route::resource('addaqarenglish','AddAqarEnglishController');
Route::resource('city','CityController');
Route::resource('cityenglish','CityEnglishContrller');
Route::resource('areas','AreasController');
Route::resource('areasengilsh','AreasEnglishContrller');
Route::resource('hotel','HotelController');
Route::resource('hotelenglish','HotelEngishController');
Route::resource('country','CountryController');
Route::resource('countryenglish','CountryEnglishContrller');
Route::resource('favorite','FavoriteController');
Route::resource('favoriteEnglish','FavoriteEnglishController');
Route::resource('hotelcomment','HotelCommentArabic');
Route::resource('hotelcommentenglish','HotelCommentEnglish');
Route::resource('hotelfavourit','HotelFavoritArapic');
Route::resource('hotelfovouritEnglsih','HotelFavoritEnglish');

Route::post('isfavourit','FavoriteController@IsFavourit');
Route::post('isfavouritHotel','HotelFavoritArapic@IsFavourit');
Route::post('login','LoginController@Login');
//Route::post('Logout','LoginController@Logout');
Route::post('loginadmin','LoginController@LoginAdmin');
Route::post('loginِarabic','LoginController@LoginArabic');
Route::post('aqarsearch','AqarSerach@AqarSearch');
Route::post('searchlocation','AqarSerach@serachLocation');
Route::post('aqarenglishsearch','AqarSerach@AqarEnglishSearch');
Route::post('hotelserach','HotelSerachController@HotelSearch');
Route::post('hotelenglishserach','HotelSerachController@HotelEnglisSearch');
Route::post('forgetpassword','ForgetPasswordController@ForgetPassword');
Route::post('registerarabic','UserController@RegisterArabic');
Route::post('addnewhotelImage','HotelController@creteNewImage');
Route::post('addnewhotelengilshImage','HotelController@creteNewImage');
Route::post('addnewaqarImage','AddAqarController@creteNewImage');
Route::post('addnewaqarengilshImage','AddAqarEnglishController@creteNewImage');

Route::get('getbathroom','AqarProperyController@GetBathroom');
Route::get('getbathroomenglish','AqarTypePropertyEnglishContrller@GetBathroom');
Route::get('getfloor','AqarProperyController@GetFloor');
Route::get('getfloorenglish','AqarTypePropertyEnglishContrller@GetFloor');
Route::get('connect','ConnectController@Gettconnect');

Route::delete('destroyhotelImage/{id}','HotelController@destroyHotelImage');
Route::delete('destroyhotelenglishImage/{id}','HotelEnglishController@destroyHotelImage');
Route::delete('destroyaqarImage/{id}','AddAqarController@destroyAqarImage');
Route::delete('destroyaqarenglishImage/{id}','AddAqarEnglishController@destroyAqarImage');

