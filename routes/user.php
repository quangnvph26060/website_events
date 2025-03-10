<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\WorkController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\GoogleTranslateController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\PortfolioController;

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

    route::get('ve-chung-toi', [AboutController::class, 'about'])->name('about-us');

    route::get('tin-tuc/{slug?}', [WorkController::class, 'works'])->name('work-for-us');
    route::get('the-tin-tuc/{slug}', [WorkController::class, 'worksTag'])->name('work-for-us-tag');

    route::get('portfolio/{slug?}', [PortfolioController::class, 'portfolio'])->name('portfolio');
    route::post('portfolio', [PortfolioController::class, 'ajax'])->name('portfolio.ajax');

    route::get('danh-muc-dau-tu/{slug}', [PortfolioController::class, 'portfolioTag'])->name('portfolio_tag');

    route::get('lien-he', [ContactController::class, 'contact'])->name('contact-us');
    route::post('contact/submit', [ContactController::class, 'contactSubmit'])->name('contact-us.submit');
});

Route::get('google/translate',[GoogleTranslateController::class,'googleTranslate'])->name('google.translate');
Route::get('google/translate/change',[GoogleTranslateController::class,'googleTranslateChange'])->name('google.translate.change');
