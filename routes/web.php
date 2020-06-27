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

//Route::get('/', 'HomeController@')_
//    $user = App\User::where('email','admin@aiub.edu')->with('roles')->first();
//    var_dump($user->roles->first()->name);
//    $user = App\User::find(1)->with('roles')->first();
//  $user->roles()->sync([1]);
//    var_dump($user->roles->first()->name);
//    var_dump(Auth::user()->roles()->first()->name);
//    die();

//    return view('welcome');
//});
Route::get('/', 'IndexController@index');
Auth::routes();
Route::group(['middleware' => ['auth','admin']], function () {
	Route::get('/home', 'HomeController@index')->name('admin/home');
	Route::get('/university/create-university', 'HomeController@createUniversity')->name('admin.university.create');
	Route::post('/university/create', 'UniversityController@UniversityCreate')->name('create.university');
	Route::get('/thesis/thesis-list', 'HomeController@ThesisList')->name('admin.thesis.list');
	Route::post('/thesis/category/create', 'UniversityController@CreateCategory')->name('category.create');
	Route::get('/university/university-list', 'HomeController@UniversityList')->name('admin.university.list');
	Route::get('/thesis/category-create', 'HomeController@CreateCategory')->name('admin.category.create');
	Route::get('/thesis/category-list', 'HomeController@CatrgoryList')->name('admin.category.list');
	Route::match(['GET', 'POST'],'/thesis/category-edit/{id}', 'HomeController@editCatrgory');
	Route::get('/thesis/category-delete/{id}', 'HomeController@deleteCatrgory');
});

Route::group(['middleware' => ['auth']], function () {
	Route::get('/home', 'HomeController@index')->name('admin/home');
	Route::post('/create/thesis', 'UniversityController@CreateThesis')->name('create.thesis');
	Route::get( '/download/{filename}', 'HomeController@download');

	Route::get('/thesis/create-thesis', 'UniversityController@CreateThesisPage')->name('create.thesis.page');
	Route::get('/download/{filename}', 'UniversityController@download');
	Route::get('/thesis/thesislist', 'UniversityController@UserThesisList')->name('user.thesis.list');
	Route::get('/thesis/department', 'UniversityController@UserDepartmrnt')->name('user.university.dept');
	Route::post('/thesis/department-create', 'UniversityController@CreateDepartmrnt')->name('create.university.dept');
	Route::get('/thesis/department-list', 'UniversityController@DepartmrntList')->name('user.dept.list');
	Route::match(['GET', 'POST'], '/thesis/department/{id}', 'UniversityController@editDepartmrnt');
	Route::get('/thesis/delete-department/{id}', 'UniversityController@deleteDepartmrnt');
	Route::get('/profile', 'UniversityController@UserProfile')->name('user.profile');
	Route::get('/setings', 'UniversityController@profileSetings')->name('user.setings');
	Route::post('upload/uni-logo', 'UniversityController@uploadLogo');
});
Route::get('/university/registration', 'HomeController@UniversityRegistration')->name('university.register');
Route::post('/university/update', 'HomeController@UpdateUniversity')->name('signup.university');
Route::post('/check', 'HomeController@Check')->name('check');
Route::post('/insert', 'HomeController@InsertDept')->name('university.dept');
Route::post('/dept_remove', 'HomeController@RemoveDept')->name('dept.remove');
Route::get('/thesis-list', 'HomeController@allThesisList')->name('thesis.list');
