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
use App\Livewire\Blogs as LivewireBlogs;
use App\Livewire\Infor\ChangeInformation;
use App\Livewire\Infor\ChangePassword;
use App\Livewire\Login;
use App\Livewire\Register;
use App\Livewire\ResetPassword;
use App\Livewire\ResetPasswordVerify;
use App\Livewire\VerifyEmail;
use Illuminate\Support\Facades\Route;
use App\Livewire\User\Beaches as BeachesUser;
use App\Livewire\User\Blogs as UserBlogs;
use App\Livewire\User\Home;
use App\Livewire\User\About;
use App\Livewire\User\Contact;
use App\Livewire\User\BeachDetails;
use App\Livewire\User\Blogging;

// Account
Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');
Route::get('/verify-email/{id}', VerifyEmail::class)->name('verify_email');
Route::get('/reset-password', ResetPassword::class)->name('reset_password');
Route::get('/reset-password-verify/{id}', ResetPasswordVerify::class)->name('reset_password_verify');
Route::get('/beaches/{id}', BeachesUser::class)->name('user.beachesWithRegion');
Route::get('/changeInformation', ChangeInformation::class)->name('user.changeInformation');
Route::get('/changePassword', ChangePassword::class)->name('user.changePassword');

//Page
Route::get('/', Home::class)->name('user.home');
Route::get('/beaches', BeachesUser::class)->name('user.beaches');
Route::get('/about', About::class)->name('user.about');
Route::get('/ContactUs', Contact::class)->name('user.contactUs');
Route::get('/BeachDetails/{id}', BeachDetails::class)->name('user.beachDetails');

// Blog
Route::get('/blogs', UserBlogs::class)->name('user.blogs');
Route::get('/blogging', Blogging::class)->name('user.blogging');


Route::middleware(['auth', 'user'])->group(function () {

});

