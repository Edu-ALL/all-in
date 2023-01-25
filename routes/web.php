<?php

use App\Http\Controllers\User\AboutPageController;
use App\Http\Controllers\User\BlogPageController;
use App\Http\Controllers\User\HomePageController;
use App\Http\Controllers\User\ProgramPageController;
use App\Http\Controllers\User\ResourcesPageController;
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

Route::get('/', function () {
    return redirect(app()->getLocale());
});

Route::group(
    [
        'prefix' => '{locale}',
        'where' => ['locale' => '[a-zA-Z]{2}'],
        'middleware' => 'setlocale',
    ],
    function () {
        Route::controller(HomePageController::class)->group(function () {
            Route::get('/', 'home')->name('home');
        });

        Route::controller(ProgramPageController::class)->group(function () {
            Route::get('/programs', 'index')->name('programs');
            Route::get('/programs/admissions-mentoring', 'admissions_mentoring')->name('admissions_mentoring');
            Route::get('/programs/passion-project-mentoring', 'passion_project_mentoring')->name('passion_project_mentoring');
            Route::get('/programs/academic-test-preparation', 'academic_test_preparation')->name('academic_test_preparation');
            Route::get('/programs/academic-test-preparation/academic-tutoring', 'academic_tutoring')->name('academic_tutoring');
            Route::get('/programs/academic-test-preparation/ib-ee-coaching-program', 'ib_ee_coaching_program')->name('ib_ee_coaching_program');
            Route::get('/programs/academic-test-preparation/sat-program', 'sat_program')->name('sat_program');
        });

        Route::controller(AboutPageController::class)->group(function () {
            Route::get('/about', 'about')->name('about');
            Route::get('/about/our-contribution', 'our_contribution')->name('our_contribution');
            Route::get('/about/partnership-careers', 'partnership_careers')->name('partnership_careers');
            Route::get('/contact-us', 'contact_us')->name('contact_us');
        });

        Route::controller(ResourcesPageController::class)->group(function () {
            Route::get('/resources/success-stories', "success_stories")->name('success_stories');
            Route::get('/resources/upcoming-events', "upcoming_events")->name('upcoming_events');
            Route::get('/resources/guidebook', "guidebook")->name('guidebook');
            Route::get('/resources/testimonial', "testimonial")->name('testimonial');
            Route::get('/resources/student-acceptances', "student_acceptances")->name('student_acceptances');
            Route::get('/resources/mentor', "mentor")->name('mentor');
            Route::get('/resources/mentor/{group}', "detail_mentor")->name('detail_mentor');
        });

        Route::controller(BlogPageController::class)->group(function () {
            Route::get('blog', "index")->name('blogs');
        });

        Route::get('/sample', function () {
            return view('sample');
        })->name('sample');
    },
);


Route::get('blog/{blog:id}', [BlogPageController::class, "show"])->name('detail_blog');
