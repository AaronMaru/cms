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
// wait
/*
Api we use token, so when we need any request, it require token

Web  we use session Insomia and Postman just test on api, it not web broser so we login it doest store sessin
That why u can login web but not these apps.
ok, so need to turn off authentication to test web or test in the broswer

use this for test debug https://github.com/barryvdh/laravel-debugbar

i think login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d this is the session
finally do u understand what i mean??

let me show u one

go to method the same

see
i use browser too
but it redirect

how to get token?
done

u still watch? eys

why now i change this it still work
before it not work, what is it?

token always set in header but we can set in query params depends on what we do

do u know where u check token?

wait
before I set token in param too but it not work

it go to login

u see that different? yes i think 2,
1, wrong token name
2, in code don't check the token name api-token

tell me where u use set token? yes
wait let me confirm

why he use auth and work

the video just this lenght  i dont see which auth does he use?
hah i work? why?

the fuck , sometime work sometime not u have new-post? or new-post1?
if no false
if have true

it mesy :D

show me the api post action

not yet have i just insert direct
so where that return trun
 */

Route::prefix('manage')
    ->middleware('role:superadministrator')
    ->group(function () {
        Route::get('/', function () {
            return redirect()->route('manage.dashboard');
        });
        Route::get('/dashboard', 'ManageController@dashboard')->name('manage.dashboard');
        Route::resource('/users', 'UserController');
        Route::resource('/permissions', 'PermissionController');
        Route::resource('/roles', 'RoleController');
        Route::resource('/posts', 'PostController');
    });

Route::get('/home', 'HomeController@index')->name('home');
