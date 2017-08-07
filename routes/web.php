<?php

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

Route::group(['middleware' => ['auth','web']], function(){
	Route::get('/admin/dashboard', 'Admin\DashboardController@index')->name('admin-dashboard');
	Route::get('/admin/orders', 'Admin\OrderController@index')->name('orders');

	Route::get('/admin/order-details/{id}/{nId?}', 'Admin\OrderController@orderDetails')->name('admin-order-details');

	Route::get('/admin/credit-points', 'Admin\CreditPointsController@index')->name('admin-credit-points');

	Route::get('/admin/change-order-status', 'Admin\OrderController@changeOrderStatus')->name('admin-change-order-status');
	Route::get('/admin/get-suppliers', 'Admin\SupplierController@getSuppliers')->name('admin-get-suppliers');
	Route::get('/admin/get-supplier-type', 'Admin\SupplierController@getSupplierTypes')->name('admin-get-supplier-type');
	Route::get('/admin/get-supplier-by-type', 'Admin\SupplierController@getSupplierByType')->name('admin-get-supplier-by-type');
	Route::get('/admin/assign-supplier', 'Admin\SupplierController@assignSupplier')->name('admin-assign-supplier');


	Route::get('/admin/get-notif', 'Admin\NotificationController@getNotifs')->name('admin-get-notif');
	Route::get('/admin/transactions', 'Admin\TransactionsController@index')->name('admin-transactions');

	Route::post('/admin/add-credit', 'Admin\CreditPointsController@postCreditPoints')->name('admin-dd-credit');


	Route::get('/webshop/dashboard', 'Webshop\DashboardController@index')->name('webshop-dashboard');
	Route::get('/webshop/property-overview', 'Webshop\PropertyController@index')->name('webshop-property-overview');
	Route::get('/webshop/property-details/{object_id}', 'Webshop\PropertyController@propertyDetails')->name('webshop-property-details');
	Route::get('/webshop/add-property', 'Webshop\PropertyController@addProperty')->name('webshop-add-property');
	Route::get('/webshop/edit-property/{object_id}', 'Webshop\PropertyController@editProperty')->name('webshop-edit-property');
	Route::get('/webshop/product-status', 'Webshop\ProductStatusController@index')->name('webshop-product-status');
	Route::get('/webshop/products-form', 'Webshop\ShopController@productsForm')->name('webshop-products-form');
	Route::get('/webshop/shop/{object_id}', 'Webshop\ShopController@index')->name('webshop-shop');
	Route::get('/webshop/shop-photography', 'Webshop\ShopController@photography')->name('webshop-shop-photography');
	Route::get('/webshop/shop-cart', 'Webshop\ShopController@shopCart')->name('webshop-shop-cart');
	Route::get('/webshop/show-cart', 'Webshop\ShopController@showCart')->name('webshop-show-cart');	
	Route::get('/webshop/new-cart-total', 'Webshop\ShopController@getNewCartTotal')->name('webshop-new-cart-total');
	Route::get('/webshop/profile', 'Webshop\ProfileController@index')->name('webshop-profile-page');
	Route::get('/webshop/calendar', 'Webshop\CalendarController@index')->name('webshop-shop-cart');
	Route::get('/webshop/order', 'Webshop\OrderController@order')->name('webshop-order');
	Route::get('/webshop/order-status/{object_id}', 'Webshop\OrderController@orderStatus')->name('webshop-order-status');
	Route::get('/webshop/delete-order-product', 'Webshop\OrderController@deleteOrderProduct')->name('webshop-delete-order-product');

	Route::post('/webshop//webshopupdate-pic', 'Webshop\ProfileController@updatePic')->name('webshop-update-pic');
	Route::post('/webshop/add-property', 'Webshop\PropertyController@postAddProperty')->name('webshop-add-property');
	Route::post('/webshop/edit-property/{object_id}', 'Webshop\PropertyController@postEditProperty')->name('webshop-edit-property');
	Route::post('/webshop/remove-item', 'Webshop\ShopController@removeItem')->name('webshop-remove-item');
	Route::post('/webshop/upload', 'Webshop\ShopController@uploadFloors')->name('webshop-upload-floors');

	Route::delete('/webshop/upload', 'Webshop\ShopController@deleteFloorImage')->name('webshop-delete-floor');

	Route::get('/webshop/get-images', 'Webshop\FileController@getImages')->name('webshop-get-images');

});