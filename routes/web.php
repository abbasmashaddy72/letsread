<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SitemapController;

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

Route::get('sitemap.xml', [SitemapController::class, 'index']);
Route::get('sitemap', [SitemapController::class, 'pretty']);

Route::redirect('login', 'admin/login', 301)->name('login');

Route::name('welcome')->get('', [PageController::class, 'index'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);

Route::name('service.show')->get('service/{page:slug}', [PageController::class, 'service_show'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);
Route::name('article.show')->get('article/{page:slug}', [PageController::class, 'article_show'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);
Route::name('post.show')->get('post/{page:slug}', [PageController::class, 'post_show'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);
Route::name('topic.show')->get('topic/{page:slug}', [PageController::class, 'topic_show'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);

// this needs to be last
Route::name('pages.show')->get('{page:slug}', [PageController::class, 'show'])->middleware(['routestatistics', 'firewall.all', 'force_trailing_slash']);
