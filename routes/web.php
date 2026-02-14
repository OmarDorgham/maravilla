<?php

use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\WebsiteController;
use App\Models\Project;
use Illuminate\Support\Facades\Route;


Route::get('/clear-cache', function () {
    Artisan::call('optimize:clear');
    return "Cache & optimize cleared!";
});
Route::get('/sitemap.xml', [WebsiteController::class, 'index']);

Route::get('/', [WebsiteController::class, 'home'])->name('home');
Route::get('about', [WebsiteController::class, 'about'])->name('about');

Route::get('privacy-policy', [WebsiteController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-and-conditions', [WebsiteController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('cookie-policy', [WebsiteController::class, 'cookiePolicy'])->name('cookie-policy');

Route::get('projects', [WebsiteController::class, 'projects'])->name('projects');

Route::get('/projects/{project:slug}', [WebsiteController::class, 'showProject'])->name('projects.show');
Route::get('contact-us', [WebsiteController::class, 'contact'])->name('contactus');
Route::post('contact-us', [WebsiteController::class, 'storeContact'])->name('contactus.store');
Route::get('blog', [WebsiteController::class, 'blog'])->name('blog');
Route::get('post/{post}', [WebsiteController::class, 'post'])->name('post');


Route::get('/careers', [WebsiteController::class, 'careersIndex'])->name('careers');
Route::post('/careers/apply', [WebsiteController::class, 'careersStore'])->name('careers.apply');

//https://maravilla-bc.com/
//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::prefix('admin')->as('admin.')->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard.index');
        })->middleware(['auth', 'verified'])->name('dashboard');

        Route::resource('projects', ProjectController::class);
        Route::post('/projects/{project}/images', [ProjectImageController::class, 'store'])->name('projects.images.store');
        Route::delete('/projects/images/{image}', [ProjectImageController::class, 'destroy'])->name('projects.images.destroy');
        Route::get('contacts', [ContactController::class, 'index'])->name('contacts.index');
        Route::resource('team-members', TeamMemberController::class);

        Route::resource('blog', PostController::class);


    });


});

require __DIR__ . '/auth.php';
