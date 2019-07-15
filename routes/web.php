<?php
// include_once 'web_builder.php';
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

// Route::pattern('slug', '[a-z0-9- _]+');

Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function () {

    # Error pages should be shown without requiring login
    Route::get('404', function () {
        return view('admin/404');
    })->name('404');
    Route::get('500', function () {
        return view('admin/500');
    });
    # Lock screen
    Route::get('{id}/lockscreen', 'UsersController@lockscreen')->name('lockscreen');
    Route::post('{id}/lockscreen', 'UsersController@postLockscreen')->name('lockscreen');
    # All basic routes defined here
    // Route::get('login', 'AuthController@getSignin')->name('login');
    Route::get('signin', 'AuthController@getSignin')->name('signin');
//     Route::get('signin', function()
// {
//     return redirect::route('signin');
// });
    // Route::post('signin', 'AuthController@postSignin')->name('postSignin');
    Route::post('signup', 'AuthController@postSignup')->name('admin.signup');
    Route::post('forgot-password', 'AuthController@postForgotPassword')->name('forgot-password');
    Route::get('login2', function () {
        return view('admin/login2');
    });


    # Register2
    Route::get('register2', function () {
        return view('admin/register2');
    });
    Route::post('register2', 'AuthController@postRegister2')->name('register2');

    # Forgot Password Confirmation
    Route::get('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm')->name('forgot-password-confirm');
    Route::post('forgot-password/{userId}/{passwordResetCode}', 'AuthController@getForgotPasswordConfirm');

    # Logout
    Route::get('logout', 'AuthController@getLogout')->name('logout');

    # Account Activation
    Route::get('activate/{userId}/{activationCode}', 'AuthController@getActivate')->name('activate');
});


Route::group(['prefix' => 'admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {
    // # GUI Crud Generator
    // Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('generator_builder');
    // Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate');
    // Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate');
    // // Model checking
    // Route::post('modelCheck', 'ModelcheckController@modelCheck');

    # Dashboard / Index
    Route::get('/', 'JoshController@showHome')->name('dashboard');
    Route::get('dashboard', 'JoshController@showHome')->name('dashboard');
   
    # crop demo
    Route::post('crop_demo', 'JoshController@crop_demo')->name('crop_demo');
    //Log viewer routes
    Route::get('log_viewers', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@index')->name('log-viewers');
    Route::get('log_viewers/logs', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@listLogs')->name('log_viewers.logs');
    Route::delete('log_viewers/logs/delete', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@delete')->name('log_viewers.logs.delete');
    Route::get('log_viewers/logs/{date}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@show')->name('log_viewers.logs.show');
    Route::get('log_viewers/logs/{date}/download', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@download')->name('log_viewers.logs.download');
    Route::get('log_viewers/logs/{date}/{level}', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@showByLevel')->name('log_viewers.logs.filter');
    Route::get('log_viewers/logs/{date}/{level}/search', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@search')->name('log_viewers.logs.search');
    Route::get('log_viewers/logcheck', '\Arcanedev\LogViewer\Http\Controllers\LogViewerController@logCheck')->name('log-viewers.logcheck');
    //end Log viewer
    # Activity log
    Route::get('activity_log/data', 'JoshController@activityLogData')->name('activity_log.data');
//    Route::get('/', 'JoshController@index')->name('index');
});

Route::group(['prefix' => 'admin','namespace'=>'Admin', 'middleware' => 'admin', 'as' => 'admin.'], function () {

    # User Management
    Route::group([ 'prefix' => 'users'], function () {
        Route::get('data', 'UsersController@data')->name('users.data');
        Route::get('{user}/delete', 'UsersController@destroy')->name('users.delete');
        Route::get('{user}/confirm-delete', 'UsersController@getModalDelete')->name('users.confirm-delete');
        Route::get('{user}/restore', 'UsersController@getRestore')->name('restore.user');
//        Route::post('{user}/passwordreset', 'UsersController@passwordreset')->name('passwordreset');
        Route::post('passwordreset', 'UsersController@passwordreset')->name('passwordreset');

    });
    Route::resource('users', 'UsersController');

    // Route::get('deleted_users',['before' => 'Sentinel', 'uses' => 'UsersController@getDeletedUsers'])->name('deleted_users');

    # Group Management
    Route::group(['prefix' => 'groups'], function () {
        Route::get('{group}/delete', 'GroupsController@destroy')->name('groups.delete');
        Route::get('{group}/confirm-delete', 'GroupsController@getModalDelete')->name('groups.confirm-delete');
        Route::get('{group}/restore', 'GroupsController@getRestore')->name('groups.restore');
    });
    Route::resource('groups', 'GroupsController');

    /*routes for guru*/
    Route::group(['prefix' => 'guru'], function () {
        Route::get('data', 'GuruController@data')->name('guru.data');
        Route::get('{guru}/delete', 'GuruController@destroy')->name('guru.delete');
        Route::get('{guru}/confirm-delete', 'GuruController@getModalDelete')->name('guru.confirm-deletes');
        Route::get('massremove', 'GuruController@massremove')->name('guru.massremove');

    });
    Route::resource('guru', 'GuruController');
    
    /*routes for jurusan*/
     Route::group([ 'prefix' => 'jurusan'], function () {
        Route::get('data', 'JurusanController@data')->name('jurusan.data'); 
        Route::get('{jurusan}/delete', 'JurusanController@destroy')->name('jurusan.delete');
        Route::get('{jurusan}/confirm-delete', 'JurusanController@getModalDelete')->name('jurusan.confirm-delete');
    });
    Route::resource('jurusan', 'JurusanController')->except('create');

    /*routes for siswa*/
    Route::group([ 'prefix' => 'siswa'], function () {
        Route::get('data', 'SiswaController@data')->name('siswa.data');
        Route::get('{siswa}/delete', 'SiswaController@destroy')->name('siswa.delete');
        Route::get('{siswa}/confirm-delete', 'SiswaController@getModalDelete')->name('siswa.confirm-delete');
        Route::get('massremove', 'SiswaController@massremove')->name('siswa.massremove');

    });
    Route::resource('siswa', 'SiswaController');

     /*routes for rombel*/
    Route::group([ 'prefix' => 'rombel'], function () {
        Route::get('data', 'RombelController@data')->name('rombel.data');
        Route::get('{rombel}/delete', 'RombelController@destroy')->name('rombel.delete');
        Route::get('{rombel}/confirm-delete', 'RombelController@getModalDelete')->name('rombel.confirm-delete');
        Route::get('{rombel}/mapel', 'RombelController@gurumapel')->name('rombel.mapel');
        Route::post('{rombel}/mapel', 'RombelController@gurumapelSimpan')->name('rombel.mapel.simpan');
        Route::put('{rombel}/mapel', 'RombelController@gurumapelSimpan')->name('rombel.mapel.simpan');
    });

    Route::resource('rombel', 'RombelController');

     /*routes for Periode*/
    Route::group([ 'prefix' => 'periode'], function () {
        Route::get('data', 'PeriodeController@data')->name('periode.data');
        Route::get('{periode}/delete', 'PeriodeController@destroy')->name('periode.delete');
        Route::get('{periode}/confirm-delete', 'PeriodeController@getModalDelete')->name('periode.confirm-delete');
    });
    Route::resource('periode', 'PeriodeController')->except('create');
 
 /*routes for Mapel*/
     Route::group([ 'prefix' => 'mapel'], function () {
        Route::get('data', 'MapelController@data')->name('mapel.data');
        Route::get('{mapel}/delete', 'MapelController@destroy')->name('mapel.delete');
        Route::get('{mapel}/confirm-delete', 'MapelController@getModalDelete')->name('mapel.confirm-delete');
    });
    Route::resource('mapel', 'MapelController');

    
    /*routes for file*/
    Route::group(['prefix' => 'file'], function () {
        Route::post('create', 'FileController@store')->name('store');
        Route::post('createmulti', 'FileController@postFilesCreate')->name('postFilesCreate');
//        Route::delete('delete', 'FileController@delete')->name('delete');
        Route::get('{id}/delete', 'FileController@destroy')->name('file.delete');
        Route::get('data', 'FileController@data')->name('file.data');
        Route::get('{user}/delete', 'FileController@destroy')->name('users.delete');

    });




    Route::get('crop_demo', function () {
        return redirect('admin/imagecropping');
    });


    /* laravel example routes */
    # datatables
    Route::get('datatables', 'DataTablesController@index')->name('index');
    Route::get('datatables/data', 'DataTablesController@data')->name('datatables.data');

    # datatables
    Route::get('jtable/index', 'JtableController@index')->name('index');
    Route::post('jtable/store', 'JtableController@store')->name('store');
    Route::post('jtable/update', 'JtableController@update')->name('update');
    Route::post('jtable/delete', 'JtableController@destroy')->name('delete');



    # SelectFilter
    Route::get('selectfilter', 'SelectFilterController@index')->name('selectfilter');
    Route::get('selectfilter/find', 'SelectFilterController@filter')->name('selectfilter.find');
    Route::post('selectfilter/store', 'SelectFilterController@store')->name('selectfilter.store');

    # editable datatables
    Route::get('editable_datatables', 'EditableDataTablesController@index')->name('index');
    Route::get('editable_datatables/data', 'EditableDataTablesController@data')->name('editable_datatables.data');
    Route::post('editable_datatables/create', 'EditableDataTablesController@store')->name('store');
    Route::post('editable_datatables/{id}/update', 'EditableDataTablesController@update')->name('update');
    Route::get('editable_datatables/{id}/delete', 'EditableDataTablesController@destroy')->name('editable_datatables.delete');

//    # custom datatables
    Route::get('custom_datatables', 'CustomDataTablesController@index')->name('index');
    Route::get('custom_datatables/sliderData', 'CustomDataTablesController@sliderData')->name('custom_datatables.sliderData');
    Route::get('custom_datatables/radioData', 'CustomDataTablesController@radioData')->name('custom_datatables.radioData');
    Route::get('custom_datatables/selectData', 'CustomDataTablesController@selectData')->name('custom_datatables.selectData');
    Route::get('custom_datatables/buttonData', 'CustomDataTablesController@buttonData')->name('custom_datatables.buttonData');
    Route::get('custom_datatables/totalData', 'CustomDataTablesController@totalData')->name('custom_datatables.totalData');

    //tasks section
    Route::post('task/create', 'TaskController@store')->name('store');
    Route::get('task/data', 'TaskController@data')->name('data');
    Route::post('task/{task}/edit', 'TaskController@update')->name('update');
    Route::post('task/{task}/delete', 'TaskController@delete')->name('delete');

});



# Remaining pages will be called from below controller method
# in real world scenario, you may be required to define all routes manually

Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('{name?}', 'JoshController@showView');
});

#FrontEndController
Route::get('login', 'FrontEndController@getLogin')->name('login');
Route::get('signin', 'FrontEndController@getLogin')->name('signin');
Route::post('signin', 'FrontEndController@postLogin')->name('signin');
Route::post('login', 'FrontEndController@postLogin')->name('login');
Route::get('register', 'FrontEndController@getRegister')->name('register');
Route::post('register','FrontEndController@postRegister')->name('register');
Route::get('activate/{userId}/{activationCode}','FrontEndController@getActivate')->name('activate');
Route::get('forgot-password','FrontEndController@getForgotPassword')->name('forgot-password');
Route::post('forgot-password', 'FrontEndController@postForgotPassword');


# Forgot Password Confirmation
Route::post('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@postForgotPasswordConfirm');
Route::get('forgot-password/{userId}/{passwordResetCode}', 'FrontEndController@getForgotPasswordConfirm')->name('forgot-password-confirm');
# My account display and update details
Route::group(['prefix' => 'guru','middleware' => 'guru'], function () {
    // Route::put('my-account', 'FrontEndController@update');
    // Route::get('my-account', 'FrontEndController@myAccount')->name('my-account');
    Route::get('dashboard', 'JoshController@showHome');
    Route::get('/', 'JoshController@showHome');
Route::get('logout', 'FrontEndController@getLogout')->name('logout');
Route::get('users/{id}/edit', 'Admin\UsersController@edit');
Route::get('users/{id}', 'Admin\UsersController@show');

    Route::get('404', function () {
        return view('errors/404');
    })->name('404');
     Route::get('401', function () {
        return view('errors/401');
    })->name('401');
});

Route::group(['prefix' => 'guru','namespace'=>'Guru', 'middleware' => 'guru', 'as' => 'guru.'], function () {

     Route::group([ 'prefix' => 'kompetensi'], function () {
     Route::get('data', 'KompetensiController@data')->name('kompetensi.data');
        Route::get('{kompetensi}/delete', 'KompetensiController@destroy')->name('kompetensi.delete');
        Route::get('{kompetensi}/confirm-delete', 'KompetensiController@getModalDelete')->name('kompetensi.confirm-delete');
        });
Route::resource('kompetensi', 'KompetensiController');
 });

# contact form
Route::post('contact', 'FrontEndController@postContact')->name('contact');

#frontend views
Route::get('/', ['as' => 'home', function () {
    return redirect('login');
}]);


Route::get('{name?}', 'FrontEndController@showFrontEndView');
# End of frontend views
