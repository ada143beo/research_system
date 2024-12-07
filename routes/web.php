<?php

use App\Livewire\Auth\AuthLogin;
use App\Livewire\Auth\AuthRegistration;
use App\Livewire\Director\DirectorDashboard;
use App\Livewire\Director\DirectorFormatCompliance;
use App\Livewire\Director\DirectorSetSchedule;
use App\Livewire\Faculty\FacultyCompletedResearch;
use App\Livewire\Faculty\FacultyCreateProposal;
use App\Livewire\Faculty\FacultyDashboard;
use App\Livewire\Faculty\FacultyMain;
use App\Livewire\Faculty\FacultyOngoingResearch;
use App\Livewire\Faculty\FacultyTrackProposal;
use App\Livewire\Home\HomePage;
use App\Livewire\Rec\RecApproved;
use App\Livewire\Rec\RecDashboard;
use App\Livewire\Rec\RecRevision;
use App\Livewire\Rec\RecToReview;
use App\Livewire\Tec\TecDashboard;
use App\Livewire\Urec\UrecDashboard;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', AuthRegistration::class)->name('register');
Route::get('/login', AuthLogin::class)->name('login');

//HOMEPAGE
Route::get('/homepage', HomePage::class)->name('home');

// DIRECTOR
Route::get('/director-dashboard', DirectorDashboard::class)->name('director-dashboard');
Route::get('/director/format-compliance', DirectorFormatCompliance::class)->name('director-format-compliance');
Route::get('/director/set-schedule', DirectorSetSchedule::class)->name('director-set-schedule');

//FACULTY
Route::get('/faculty', FacultyMain::class)->name('faculty');
Route::get('/faculty/proposal/create', FacultyCreateProposal::class)->name('faculty-create-proposal');
Route::get('/faculty/proposal/track', FacultyTrackProposal::class)->name('faculty-track-proposal');
Route::get('/faculty/research/ongoing', FacultyOngoingResearch::class)->name('faculty-ongoing-research');
Route::get('/faculty/research/completed', FacultyCompletedResearch::class)->name('faculty-completed-research');

//REC
Route::get('/rec', RecDashboard::class)->name('rec');
Route::get('/rec/to-review', RecToReview::class)->name('rec-to-review');
Route::get('/rec/need-revision', RecRevision::class)->name('rec-to-revise');
Route::get('/rec/approved', RecApproved::class)->name('rec-approved');

//TEC
Route::get('/tec', TecDashboard::class)->name('tec');

//RDS STAFF

//UREC
Route::get('/urec', UrecDashboard::class)->name('urec');

