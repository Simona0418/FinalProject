<?php

use App\Http\Controllers\IndustryController;
use App\Http\Controllers\JobListingController;
use App\Http\Controllers\TeamMemberController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceCategoryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactFormMessageController;
use App\Http\Controllers\PositionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', [JobListingController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard/jobs', [JobListingController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.jobs.index');

Route::get('/jobs', [JobListingController::class, 'index'])->name('jobs.index');

Route::get('/jobs/{job}/edit', [JobListingController::class, 'edit'])->name('jobs.edit');

Route::put('/jobs/{job}', [JobListingController::class, 'update'])->name('jobs.update');

Route::delete('/jobs/{job}', [JobListingController::class, 'destroy'])->name('jobs.destroy');

Route::get('/dashboard/jobs/create', [JobListingController::class, 'create'])->name('jobs.create');

Route::post('/dashboard/jobs/store', [JobListingController::class, 'store'])->name('jobs.store');
// ----------------------------------------------------------

Route::get('/dashboard/positions', [PositionController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.positions.index');   

Route::get('/positions/{position}/edit', [PositionController::class, 'edit'])->name('positions.edit');
Route::put('/positions/{position}', [PositionController::class, 'update'])->name('positions.update');
Route::delete('/positions/{position}', [PositionController::class, 'destroy'])->name('positions.destroy');
Route::get('/dashboard/positions/create', [PositionController::class, 'create'])->name('positions.create');
Route::post('/dashboard/positions/store', [PositionController::class, 'store'])->name('positions.store');
// ----------------------------------------------------------

Route::get('/dashboard/team_members', [TeamMemberController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.team_members.index');   

Route::get('/team_members/{team_member}/edit', [TeamMemberController::class, 'edit'])->name('team_members.edit');
Route::put('/team_members/{team_member}', [TeamMemberController::class, 'update'])->name('team_members.update');
Route::delete('/team_members/{team_member}', [TeamMemberController::class, 'destroy'])->name('team_members.destroy');
Route::get('/dashboard/team_members/create', [TeamMemberController::class, 'create'])->name('team_members.create');
Route::post('/dashboard/team_members/store', [TeamMemberController::class, 'store'])->name('team_members.store');

// ----------------------------------------------------------

Route::get('/dashboard/partners', [PartnerController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.partners.index');

Route::get('/partners/{partner}/edit', [PartnerController::class, 'edit'])->name('partners.edit');
Route::put('/partners/{partner}', [PartnerController::class, 'update'])->name('partners.update');
Route::delete('/partners/{partner}', [PartnerController::class, 'destroy'])->name('partners.destroy');
Route::get('/dashboard/partners/create', [PartnerController::class, 'create'])->name('partners.create');
Route::post('/dashboard/partners/store', [PartnerController::class, 'store'])->name('partners.store');
// ----------------------------------------------------------

Route::get('/dashboard/testimonials', [TestimonialController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.testimonials.index');

Route::get('/testimonials/{testimonial}/edit', [TestimonialController::class, 'edit'])->name('testimonials.edit');
Route::put('/testimonials/{testimonial}', [TestimonialController::class, 'update'])->name('testimonials.update');
Route::delete('/testimonials/{testimonial}', [TestimonialController::class, 'destroy'])->name('testimonials.destroy');
Route::get('/dashboard/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/dashboard/testimonials/store', [TestimonialController::class, 'store'])->name('testimonials.store');
// ----------------------------------------------------------

Route::get('/dashboard/industries', [IndustryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.industries.index');

Route::get('/industries/{industry}/edit', [IndustryController::class, 'edit'])->name('industries.edit');
Route::put('/industries/{industry}', [IndustryController::class, 'update'])->name('industries.update');
Route::delete('/industries/{industry}', [IndustryController::class, 'destroy'])->name('industries.destroy');
Route::get('/dashboard/industries/create', [IndustryController::class, 'create'])->name('industries.create');
Route::post('/dashboard/industries/store', [IndustryController::class, 'store'])->name('industries.store');
// ----------------------------------------------------------

Route::get('/dashboard/services', [ServiceController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.services.index');

Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit');
Route::put('/services/{service}', [ServiceController::class, 'update'])->name('services.update');
Route::delete('/services/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');
Route::get('/dashboard/services/create', [ServiceController::class, 'create'])->name('services.create');
Route::post('/dashboard/services/store', [ServiceController::class, 'store'])->name('services.store');    
// ----------------------------------------------------------

Route::get('/dashboard/service_categories', [ServiceCategoryController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard.service_categories.index');

Route::get('/service_categories/{service_category}/edit', [ServiceCategoryController::class, 'edit'])->name('service_categories.edit');
Route::put('/service_categories/{service_category}', [ServiceCategoryController::class, 'update'])->name('service_categories.update');
Route::delete('/service_categories/{service_category}', [ServiceCategoryController::class, 'destroy'])->name('service_categories.destroy');
Route::get('/dashboard/service_categories/create', [ServiceCategoryController::class, 'create'])->name('service_categories.create');
Route::post('/dashboard/service_categories/store', [ServiceCategoryController::class, 'store'])->name('service_categories.store'); 
// ----------------------------------------------------------

// Route::get('/dashboard', [ContactFormMessageController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/messages/{id}', [ContactFormMessageController::class, 'show'])->middleware(['auth', 'verified'])->name('messages.show');
Route::delete('/messages/{id}', [ContactFormMessageController::class, 'destroy'])->middleware(['auth', 'verified'])->name('messages.destroy');
// ----------------------------------------------------------
//API
Route::post('/contact', [ContactFormMessageController::class, 'store']);
Route::get('/test-service-form', function () {
    return view('test_form');
})->name('test-service-form');
// ----------------------------------------------------------

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
