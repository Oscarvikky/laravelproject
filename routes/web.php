<?php

use App\Http\Controllers\NoDepositController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransactionController;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('fund_wallet',function(){
    return Inertia::render("FundWallet");
})->middleware(['auth', 'verified']);

Route::get('admin_dashboard',function(){
    return Inertia::render("AdminDashboard");
})->middleware(['auth', 'verified']);

Route::get('fetchallusers',function(){
    return Inertia::render("FetchAllUsers");
})->middleware(['auth', 'verified']);
Route::get('admin', function(){
    return Inertia::render("Admin/Transaction");
})->middleware(['auth'])->name("admin");   // for frontend route
Route::get('/no_deposit', function(){
    return Inertia::render("NoDeposit");
})->middleware(['auth'])->name("no_deposit");   // for frontend route
Route::get('/fetch_deposit', function(){
    return Inertia::render("Admin/Nodeposit");
});  // for frontend route





Route::post("/fund_wallet", [TransactionController::class, "userFundingWallet"])->name('user.fund');
Route::post("/confirm_transaction", [TransactionController::class, "confirmTransaction"])->name('transaction.confirm');
Route::post("/subscribe_no_deposit", [NoDepositController::class, "subscribePackage"])->name('no_deposit.subscribe');
Route::get("/fetch_no_deposit", [NoDepositController::class, "fetchNoDeposit"])->name('no_deposit.fetch');
Route::post("/reject_transaction", [TransactionController::class, "rejectTransaction"])->name('transaction.rejected');



Route::get('/fetch_transaction', [TransactionController:: class, "fetchUserTransaction"] )->name("user.fetch");


Route::get('/fetch_alltransaction', [TransactionController:: class, "fetchAllTransaction"])->name("alltransaction.fetch");

Route::get('/all_users', [TransactionController::class, 'fetchAllUsersWithDetails'])->name("all.users");


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
