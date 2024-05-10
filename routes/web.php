<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Spatie\Permission\Middlewares\RoleMiddleware;
use App\Http\Controllers\GoogleLoginController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware' => ['role:super-admin|admin']], function () {
    // Routes pour les permissions
    Route::get('permissions', [App\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
    Route::post('permissions', [App\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');
    Route::get('permissions/create', [App\Http\Controllers\PermissionController::class, 'create'])->name('permissions.create');
    Route::get('permissions/{permission}', [App\Http\Controllers\PermissionController::class, 'show'])->name('permissions.show');
    Route::get('permissions/{permission}/edit', [App\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
    Route::put('permissions/{permission}', [App\Http\Controllers\PermissionController::class, 'update'])->name('permissions.update');
    Route::delete('permissions/{permission}', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.destroy');

    Route::get('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionToRole']);
    Route::put('roles/{roleId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionToRole']);

    // Routes pour les rôles
    Route::get('roles', [App\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::post('roles', [App\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
    Route::get('roles/create', [App\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
    Route::get('roles/{role}', [App\Http\Controllers\RoleController::class, 'show'])->name('roles.show');
    Route::get('roles/{role}/edit', [App\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
    Route::put('roles/{role}', [App\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
    Route::delete('roles/{role}', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.destroy');

    // Routes pour les utilisateurs
    Route::get('users', [App\Http\Controllers\UserController::class, 'index'])->name('users.index');
    Route::post('users', [App\Http\Controllers\UserController::class, 'store'])->name('users.store');
    Route::get('users/create', [App\Http\Controllers\UserController::class, 'create'])->name('users.create');
    Route::get('users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('users.show');
    Route::get('users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('users.edit');
    Route::put('users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');
    Route::delete('users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('users.destroy');
});



// GoogleLoginController redirect and callback urls
Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

// -==================================Permissions pour tous les utilisateurs=====================================================-
//-----------Route pour le trajet-----------------
Route::group(['middleware' => ['role:super-admin|admin|client']], function () {
    Route::get('trajets', [App\Http\Controllers\TrajetController::class, 'index'])->name('trajets.index');
    Route::post('trajets', [App\Http\Controllers\TrajetController::class, 'store'])->name('trajets.store');
    Route::get('trajets/create', [App\Http\Controllers\TrajetController::class, 'create'])->name('trajets.create');
    Route::get('trajets/{trajet}', [App\Http\Controllers\TrajetController::class, 'show'])->name('trajets.show');
    Route::get('trajets/{trajet}/edit', [App\Http\Controllers\TrajetController::class, 'edit'])->name('trajets.edit');
    Route::put('trajets/{trajet}', [App\Http\Controllers\TrajetController::class, 'update'])->name('trajets.update');
    Route::delete('trajets/{trajet}', [App\Http\Controllers\TrajetController::class, 'destroy'])->name('trajets.destroy');

    //-----------Route pour voiture-----------------
    Route::get('voitures', [App\Http\Controllers\VoitureController::class, 'index'])->name('voitures.index');
    Route::post('voitures', [App\Http\Controllers\VoitureController::class, 'store'])->name('voitures.store');
    Route::get('voitures/create', [App\Http\Controllers\VoitureController::class, 'create'])->name('voitures.create');
    Route::get('voitures/{voiture}', [App\Http\Controllers\VoitureController::class, 'show'])->name('voitures.show');
    Route::get('voitures/{voiture}/edit', [App\Http\Controllers\VoitureController::class, 'edit'])->name('voitures.edit');
    Route::put('voitures/{voiture}', [App\Http\Controllers\VoitureController::class, 'update'])->name('voitures.update');
    Route::delete('voitures/{voiture}', [App\Http\Controllers\VoitureController::class, 'destroy'])->name('voitures.destroy');


    Route::get('reservations', [App\Http\Controllers\ReservationController::class, 'index'])->name('reservations.index');
    Route::post('reservations', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservations.store');
    Route::get('reservations/create', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservations.create');
    Route::get('reservations/{reservation}', [App\Http\Controllers\ReservationController::class, 'show'])->name('reservations.show');
    Route::get('reservations/{reservation}/edit', [App\Http\Controllers\ReservationController::class, 'edit'])->name('reservations.edit');
    Route::put('reservations/{reservation}', [App\Http\Controllers\ReservationController::class, 'update'])->name('reservations.update');
    Route::delete('reservations/{reservation}', [App\Http\Controllers\ReservationController::class, 'destroy'])->name('reservations.destroy');


//-----------Route pour les impressions-----------------
    Route::get('impressions', [App\Http\Controllers\ImpressionController::class, 'index'])->name('impressions.index');
    Route::post('impressions', [App\Http\Controllers\ImpressionController::class, 'store'])->name('impressions.store');
    Route::get('impressions/create', [App\Http\Controllers\ImpressionController::class, 'create'])->name('impressions.create');
    Route::get('impressions/{impression}', [App\Http\Controllers\ImpressionController::class, 'show'])->name('impressions.show');
    Route::get('impressions/{impression}/edit', [App\Http\Controllers\ImpressionController::class, 'edit'])->name('impressions.edit');
    Route::put('impressions/{impression}', [App\Http\Controllers\ImpressionController::class, 'update'])->name('impressions.update');
    Route::delete('impressions/{impression}', [App\Http\Controllers\ImpressionController::class, 'destroy'])->name('trajets.destroy');


    //-----------Route pour une plainte-----------------
    // Route::get('plaintes', [App\Http\Controllers\PlainteController::class, 'index'])->name('plaintes.index');
    // Route::post('plaintes', [App\Http\Controllers\PlainteController::class, 'store'])->name('plaintes.store');
    // Route::get('plaintes/create', [App\Http\Controllers\PlainteController::class, 'create'])->name('plaintes.create');
    // Route::get('plaintes/{plainte}', [App\Http\Controllers\PlainteController::class, 'show'])->name('plaintes.show');
    // Route::get('plaintes/{plainte}/edit', [App\Http\Controllers\PlainteController::class, 'edit'])->name('plaintes.edit');
    // Route::put('plaintes/{plainte}', [App\Http\Controllers\PlainteController::class, 'update'])->name('plaintes.update');
    // Route::delete('plaintes/{plainte}', [App\Http\Controllers\PlainteController::class, 'destroy'])->name('plaintes.destroy');


    //-----------Route pour une reclamation-----------------
    // Route::get('reclamations', [App\Http\Controllers\ReclamationController::class, 'index'])->name('reclamations.index');
    // Route::post('reclamations', [App\Http\Controllers\ReclamationController::class, 'store'])->name('reclamations.store');
    // Route::get('reclamations/create', [App\Http\Controllers\ReclamationController::class, 'create'])->name('reclamations.create');
    // Route::get('reclamations/{reclamation}', [App\Http\Controllers\ReclamationController::class, 'show'])->name('reclamations.show');
    // Route::get('reclamations/{reclamation}/edit', [App\Http\Controllers\ReclamationController::class, 'edit'])->name('reclamations.edit');
    // Route::put('reclamations/{reclamation}', [App\Http\Controllers\ReclamationController::class, 'update'])->name('reclamations.update');
    // Route::delete('reclamations/{reclamation}', [App\Http\Controllers\ReclamationController::class, 'destroy'])->name('reclamations.destroy');

});


// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('plaintes.index');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('utilisateurs/{trajet}', [App\Http\Controllers\HomeController::class, 'show'])->name('show');
// Route::post('plaintes', [App\Http\Controllers\PlainteController::class, 'store'])->name('plaintes.store');
// Route::get('plaintes/create', [App\Http\Controllers\PlainteController::class, 'create'])->name('plaintes.create');


Route::get('payement/{payement}{trajet}', [App\Http\Controllers\PayementController::class, 'paiement'])->name('paiement');
