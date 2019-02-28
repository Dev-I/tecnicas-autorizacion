<?php
/**
 * Created by PhpStorm.
 * User: MrRed
 * Date: 2019-02-27
 * Time: 14:04
 */

Route::get('/', 'Admin\DashboardController@index')->name('admin_dashboard');


Route::get('/events', function () {
    return 'Admin Events';
})->name('admin_events');
