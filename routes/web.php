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
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ResetPassword;
use App\Livewire\ResetPasswordVerify;
use App\Livewire\VerifyEmail;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\Beaches as BeachesUser;
use App\Livewire\User\Home;
use App\Livewire\User\About;
use App\Livewire\User\Contact;
use App\Livewire\User\BeachDetails;



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
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/verify-email/{id}', VerifyEmail::class)->name('verify_email');
<<<<<<< Updated upstream
Route::get('/',Home::class)->name('user.home');
Route::get('/beaches', BeachesUser::class)->name('user.beaches');
Route::get('/about', About::class)->name('user.about');
Route::get('/ContactUs',Contact::class)->name('user.contactUs');
Route::get('/BeachDetails', BeachDetails::class)->name('user.beachDetails');
=======
Route::get('/reset-password', ResetPassword::class)->name('reset_password');
Route::get('/reset-password-verify/{id}', ResetPasswordVerify::class)->name('reset_password_verify');


>>>>>>> Stashed changes
