<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ResolvedController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EnquireController;
use App\Http\Controllers\ConsultationsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\SectorController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DownloadBrochureController;
use App\Http\Controllers\BrochureController;
use App\Http\Controllers\PdfDownloadController;
use App\Http\Controllers\ClickController;


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

Route::get('/home', function () {
    return view('adminDashboard');
})->middleware(['auth', 'verified'])->name('home');

Route::get('/admin', function () {
    return view('adminDashboard');
})->middleware(['auth', 'verified'])->name('adminDashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/home', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::post('logout', [WebController::class, 'logout'])->name('logout');

    // Enquires routes
    Route::any('enquireslist', [EnquireController::class, 'enquireslist'])->name('enquireslist');
    Route::any('enquire-delete', [EnquireController::class, 'destroy'])->name('enquire.delete');
    Route::delete('delete-enquire', [EnquireController::class, 'removeMulti']);
    Route::delete('delete-multiple', [EnquireController::class, 'deleteMultiple'])->name('enquire.delete.multiple');
    Route::get('enquiresview/{id}', [EnquireController::class, 'enquiresview'])->name('enquiresview');
    Route::get('/enquires', [EnquireController::class, 'enquiresfiltrelist'])->name('enquires.list');
    Route::get('/enquires/filter', [EnquireController::class, 'filterEnquires'])->name('enquire.filter');
    
});
Route::post('enquires', [EnquireController::class, 'store'])->name('enquires');
Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/error', [WebController::class, 'errorpage'])->name('errorpage');
Route::get('/thankyou', [WebController::class, 'thankyou'])->name('thankyou');
Route::get('/download/{filename}', [EnquireController::class, 'download'])->name('IBOP-Brochure.pdf');

// PdfDownloadController routes
Route::get('/home-page.index', [PdfDownloadController::class, 'showMain'])->name('main');
Route::post('/download-pdf', [PdfDownloadController::class, 'store'])->name('downloadPdf');
Route::get('/downloads-dashboard', [PdfDownloadController::class, 'showDownloads'])->name('downloadsDashboard');
Route::get('/thankyou', [PdfDownloadController::class, 'showThankYou'])->name('thankYou');
//Route::delete('/leads/delete-multiple', [PdfDownloadController::class, 'deleteMultiples'])->name('leadsDashboard.delete.multiple');
Route::post('/leads/filter', [PdfDownloadController::class, 'filterLeads'])->name('leadsDashboard.filter');
Route::get('downloadleadsview/{id}', [PdfDownloadController::class, 'viewLead'])->name('downloadleadsview');
Route::delete('download-delete-multiple', [PdfDownloadController::class, 'deleteMultiples'])->name('leadsDashboard.delete.multiple');
Route::delete('/pdf-download/{id}', [PdfDownloadController::class, 'deletes'])->name('pdf.download.delete');


//Phone and email Click count
Route::post('/track-click', [ClickController::class, 'trackClick'])->name('track.click');



Route::get('cloud-devops-services', [WebController::class, 'devops'])->name('devops');

Route::get('finops-services', [WebController::class, 'finops'])->name('finops');

require __DIR__ . '/auth.php';
