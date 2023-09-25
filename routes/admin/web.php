<?php
  
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\DestinationController;
use App\Http\Controllers\Backend\GeneralSettingController;
use App\Http\Controllers\Backend\ProfileController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\UpdateDataController;
use App\Http\Controllers\ContactStoreController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\PartnerController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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


// Route::get('/', function () {
//     return view('backend.index');
// });



Auth::routes();

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function () {

    Route::get('dashboard',[HomeController::class,'index'])->name('dashboard');
    Route::resource('expense', ExpenseController::class);
 

    //study abroad
    Route::resource('destination', DestinationController::class);
    //partners
    Route::resource('partners', PartnerController::class);
  
    //Blog
    Route::resource('blog', BlogController::class);

    //contact Message
    Route::get('contact_message', [ContactStoreController::class, 'index'])->name('contact_message.index');
    Route::delete('contact_message/delete/{id}', [ContactStoreController::class, 'destroy'])->name('message.destroy');

    // Latest News Link  
    Route::get('latest_news/edit', [LinkController::class, 'edit'])->name('link.edit');
    Route::post('latest_news/update/{id}', [LinkController::class, 'update'])->name('link.update');


    Route::resource('team', TeamController::class);
    Route::get('users',[UserController::class,'index'])->name('user.index');
    Route::get('user/survey/{id}',[UserController::class,'survey'])->name('user.survey');

    Route::get('survey/result/',[UserController::class,'survey_result'])->name('survey.result');

    //General Setting Section
    Route::get('/generalsettings', [GeneralSettingController::class, 'index'])->name('generalsetting.index');
    Route::post('update/generalsettings/{id}', [GeneralSettingController::class, 'update'])->name('generalsetting.update');

    Route::get('my-profile', [ProfileController::class, 'index'])->name('my-profile');
    Route::post('admin/profile/update/{id}', [ProfileController::class, 'profile_update'])->name('admin.profile.update');
    Route::post('admin/update/{id}', [ProfileController::class, 'update'])->name('admin.update');
    Route::post('reset/password', [ProfileController::class, 'reset_password'])->name('reset-password');

    // Common Route for all
    Route::get('/edit/modal', [UpdateDataController::class, 'getModalForm'])->name('get.modal.form');
    Route::post('/update/webste/data', [UpdateDataController::class, 'updateData'])->name('update.website.data');
    
});
