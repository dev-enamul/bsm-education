<?php
 
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PricingController;
use App\Http\Controllers\Frontend\ProjectController;
use App\Http\Controllers\Frontend\UserController;
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
//     return view('welcome');
// });
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});

Route::get('/', [HomeController::class, 'index'])->name('home'); 
Route::get('/project', [ProjectController::class, 'project'])->name('home.project');
Route::get('/pricing', [PricingController::class, 'pricing'])->name('home.pricing');
Route::get('/eb-3', [HomeController::class, 'eb3'])->name('home.green_card');
Route::get('visa-processing', [HomeController::class, 'visaProcessing'])->name('home.visa.processing'); 
Route::get('destination/{country}', [HomeController::class, 'destination'])->name('destination'); 
Route::get('/about', [AboutController::class, 'about'])->name('home.about');
Route::get('/who-we-are', [HomeController::class, 'whoWeAre'])->name('who-we-are');

Route::get('/contact-us', [HomeController::class, 'contctUs'])->name('contact-us'); 
Route::post('message.store', [ContactUsController::class, 'store'])->name('message.store');

Route::get('university/{name}', [HomeController::class, 'university'])->name('university');

Route::get('/blogs', [HomeController::class, 'blogs'])->name('frontend.blogs');
Route::get('/blog/{slug}', [HomeController::class, 'blog'])->name('frontend.blog');

Route::get('/user-register', [UserController::class, 'registerPage'])->name('user.register');  
Route::post('/register-submit', [UserController::class, 'registerSubmit'])->name('register.submit');
Route::post('/register-survey', [UserController::class, 'registerSurveyStore'])->name('register.survey.store');


