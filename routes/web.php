<?php
Route::get('/','FrontEndController@index');
Route::get('/about-us','FrontEndController@aboutUs');
Route::get('/blog','FrontEndController@blog');
Route::get('single-blog/{id}','FrontEndController@singleBlog');
Route::get('/contact-us','FrontEndController@contactUs');
Route::get('/management-portfolio','FrontEndController@managementPortfolio');
Route::get('/plots-for-sale','FrontEndController@salePlot');
Route::get('/single-plot/{id}','FrontEndController@singlePlot');
Route::get('/properties-for-sale-commercial','FrontEndController@saleCommercial');
Route::get('/properties-for-sale-residential','FrontEndController@saleResidential');
Route::get('/properties-to-rent-commercial','FrontEndController@rentCommercial');
Route::get('/properties-to-rent-residential','FrontEndController@rentResidential');
Route::get('/our-services','FrontEndController@services');
Route::get('/all-properties','FrontEndController@allProperties');
Route::get('/single-property/{id}','FrontEndController@singleProperty');
Route::get('/single-rental-property/{id}','FrontEndController@rentProperty');
Route::get('/single-sale-property/{id}','FrontEndController@saleProperty');

Route::get('/login','HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('routes', 'RouteController');
Route::resource('menus', 'MenuController');
##### Roles
Route::resource('roles', 'RoleController');
Route::get('getRoutes/{id}',"RoleController@getRoutes");
//assigning permissions
Route::any('/give-permission/','RoleController@assignPermissions');

//Route::get('/mailable', function () {
//    $invoice = App\User::find(1);
//
//    return new App\Mail\AccountRegistration($invoice);
//});
Route::get('run',function(){
     \App\Jobs\SendReminder::dispatch();
     echo 'done';
});
Route::resource('roles', 'RoleController')->middleware('validate_routes');

Route::resource('masterfile', 'MasterfileController');
Route::resource('users', 'UserController');
Route::get('dashboard','DashboardController@index');
Route::get('unAuthorized',"LoggedUserController@unAuthorized");
Route::resource('tenants', 'TenantController');
Route::resource('accessLevels', 'AccessLevelController');
Route::resource('masterfiles', 'MasterfileController');
Route::get('repayment-schedules/{id}','ApprovedLoanController@getRepaymentsSchedules');

Route::post('give-loan','ApprovedLoanController@giveLoanIndividual');

Route::get('reset-pass','UserController@resetPassword');
Route::post('reset-post','UserController@resetPost');

Route::resource('customerMessages', 'CustomerMessageController');

Route::any('getPaymentValidation',"MpesaPaymentController@getPaymentValidation");
Route::any('getPayment',"MpesaPaymentController@getPayment");
Route::get('registerUrls',"MpesaPaymentController@registerUrls");
Route::get('simulate',"MpesaPaymentController@simulate");
############ Reports
Route::get('repayments','ReportController@repayments');
Route::post('getExpectedRepayments','ReportController@getExpectedRepayments');
Route::get('overdueRepayments','ReportController@overdueRepayments');
Route::get('customerStatement','ReportController@customerStatement');
Route::post('getCustomerStatement','ReportController@getCustomerStatement');
Route::resource('infoBips', 'InfoBipController');
Route::get('infobipBalance','InfoBipController@getBalance');
Route::post('infoBipCallback','InfoBipController@infoBipCallback');



Route::resource('events', 'EventController');

Route::resource('eventSchedules', 'EventScheduleController');
Route::get('eSchedule/{id}','EventScheduleController@index');



Route::resource('eventCategories', 'EventCategoryController');

Route::resource('slides', 'SlideController');

Route::resource('slides', 'SlideController');













Route::resource('staffPositions', 'staffPositionController');

Route::resource('staffPositions', 'staffPositionController');



Route::resource('sermonCategories', 'SermonCategoryController');

Route::resource('sermonSpeakers', 'SermonSpeakerController');

Route::resource('members', 'MembersController');



Route::resource('churchGroups', 'churchGroupController');

Route::resource('churchGroupMembers', 'churchGroupMemberController');





Route::resource('sermons', 'SermonController');

Route::resource('services', 'ServiceController');

Route::resource('contacts', 'ContactController');

Route::resource('commonQuestions', 'CommonQuestionController');

Route::resource('locations', 'LocationController');

Route::resource('aboutuses', 'AboutUsController');

Route::resource('aboutuses', 'AboutUsController');

Route::resource('blogCategories', 'blogCategoryController');

Route::resource('blogs', 'BlogController');





Route::resource('blogs', 'BlogController');

Route::resource('managementPortfolios', 'ManagementPortfolioController');





Route::resource('contacts', 'ContactController');

Route::resource('socialMedia', 'SocialMediaController');

Route::resource('aboutuses', 'AboutUsController');











Route::resource('properties', 'PropertyController');

Route::resource('properties', 'PropertyController');

Route::resource('properties', 'PropertyController');

Route::resource('propertyFeatures', 'PropertyFeatureController');

Route::resource('propertySales', 'PropertySaleController');



Route::resource('propertyforRents', 'PropertyforRentController');



Route::resource('propertyforSales', 'PropertyforSaleController');

Route::resource('propertytoRents', 'PropertytoRentController');

Route::resource('plots', 'PlotController');