<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


Route::get('/', function () {
    return view('layout');
});

Auth::routes();

Route::get('/index', 'HomeController@index');


/*Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function (){
});*/
   /*Route:: get('/','PagesController@home')->name('home');*/

    //GROUPES DES ROUTES //


    //ROUTES POUR LA GESTION DES FILMS
     Route::group(['prefix'=>'film'],function(){

         Route::get('/index','FilmsController@index')->name('film.index');
         Route::any('/create','FilmsController@create')->name('film.create');
         Route::any('/update/{id}','FilmsController@update')->name('film.update');
         Route::get('/remove/{id}','FilmsController@remove')->name('film.remove');
        // Route::get('/voir','FilmsController@voir')->name('film.voir');
     });


    //ROUTE POUR LA GESTION DES FILMS D'ANIMTION
    Route::group(['prefix'=>'animation'],function(){

        Route::get('/index','AnimationController@index')->name('animation.index');
        Route::any('/create','AnimationController@create')->name('animation.create');
        Route::any('/update/{id}','AnimationController@update')->name('animation.update');
        Route::get('/remove/{id}','AnimationController@remove')->name('animation.remove');
       // Route::get('/voir','AnimationController@voir')->name('animation.voir');
    });

    //ROUTE POUR LA GESTION DE L'ACTU DVD
    Route::group(['prefix'=>'actudvd'],function(){

        Route::get('/index','ActudvdController@index')->name('actudvd.index');
        Route::any('/create','ActudvdController@create')->name('actudvd.create');
        Route::any('/update/{id}','ActudvdController@update')->name('actudvd.update');
        Route::get('/remove/{id}','ActudvdController@remove')->name('actudvd.remove');
       // Route::get('/voir','ActudvdController@voir')->name('actudvd.voir');
    });

    //ROUTE GESTION PASSWORD

    //ROUTE GESTION CONTACT
/**
 * @groupe de route derrière le controller ContactController
 */
Route::group(['prefix' => 'contact'], function () {
    Route::post('/postContact', 'ContactController@postContact') -> name('contact.postContact');
    Route::get('/pageContact', 'ContactController@pageContact') -> name('contact.pageContact');
});

    // Password reset link request routes...
   /* Route::get('password/email', ['as' => 'password/email', 'uses' => 'Auth\PasswordController@getEmail']);
    Route::post('password/email', 'Auth\PasswordController@postEmail');

    // Password reset routes...
    Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
    Route::post('password/reset', 'Auth\PasswordController@postReset');*/

    //GESTION DES VUES


    //VUE CONTACT
 /* Route::get('/contact',function(){
        return view('page/contact');
    });*/









