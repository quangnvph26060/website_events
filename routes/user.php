<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PortfolioController;
use App\Http\Controllers\Frontend\WorkController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

route::name('user.')->group(function () {
    route::get('/', [HomeController::class, 'home'])->name('home');

    route::get('about', [AboutController::class, 'about'])->name('about-us');

    route::get('works/{slug?}', [WorkController::class, 'works'])->name('work-for-us');
    route::get('works_tag/{slug}', [WorkController::class, 'worksTag'])->name('work-for-us-tag');

    route::get('portfolio/{slug?}', [PortfolioController::class, 'portfolio'])->name('portfolio');
    route::post('portfolio', [PortfolioController::class, 'ajax'])->name('portfolio.ajax');

    route::get('portfolio_tag/{slug}', [PortfolioController::class, 'portfolioTag'])->name('portfolio_tag');

    route::get('contact', [ContactController::class, 'contact'])->name('contact-us');
    route::post('contact/submit', [ContactController::class, 'contactSubmit'])->name('contact-us.submit');
});
