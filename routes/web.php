<?php

use App\Livewire\Admin\Accounts;
use App\Livewire\Admin\Beaches;
use App\Livewire\Admin\Blogs;
use App\Livewire\Admin\Cities;
use App\Livewire\Admin\Comments;
use App\Livewire\Admin\Content;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Image;
use App\Livewire\Admin\Index;
use App\Livewire\Admin\Regions;
use App\Livewire\Admin\Sidebar;
use App\Livewire\Admin\Video;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', Dashboard::class)->name('admin.dashboard');
Route::get('/admin/beaches', Beaches::class)->name('admin.beaches');
Route::get('/admin/accounts', Accounts::class)->name('admin.accounts');
Route::get('/admin/cities', Cities::class)->name('admin.cities');
Route::get('/admin/regions', Regions::class)->name('admin.regions');
Route::get('/admin/blogs', Blogs::class)->name('admin.blogs');
Route::get('/admin/comments', Comments::class)->name('admin.comments');
Route::get('/admin/image', Image::class)->name('admin.image');
Route::get('/admin/video', Video::class)->name('admin.video');
Route::get('/admin/content', Content::class)->name('admin.content');
