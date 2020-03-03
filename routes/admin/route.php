<?php
Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function () {
	

    
    Route::resource('/','Admin\AdminController');

    Route::get('banner','Admin\BannerController@manageBanner');
    Route::post('banner','Admin\BannerController@updateBanner');

	Route::resource('blog','Admin\BlogController');
  
     Route::resource('inspiration', 'Admin\TravelController1');

	Route::resource('tourprogram','Admin\TourprogramController');
	Route::resource('partner','Admin\PartnerController');

    Route::resource('air','Admin\AirTicketController');
    Route::resource('bus','Admin\BusTicketController');
    Route::resource('car','Admin\CarTicketController');
    Route::resource('hotel','Admin\HotelBookingController');
    Route::resource('promote','Admin\PromoteMessageController');

	Route::get('logo','Admin\GeneralSetting@manageLogo');
    Route::post('logo','Admin\GeneralSetting@updateLogo');

	Route::get('footer','Admin\GeneralSetting@manageFooter');
     Route::post('footer','Admin\GeneralSetting@updateFooter');

     Route::get('about','Admin\GeneralSetting@manageAbout');
     Route::post('about','Admin\GeneralSetting@updateAbout');

     Route::get('contact','Admin\GeneralSetting@manageContact');
     Route::post('contact','Admin\GeneralSetting@updateContact');
});



