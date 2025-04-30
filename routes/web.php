<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PrisonerController;
use App\Http\Controllers\LegalCaseController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\RehabilitationController;
use App\Http\Controllers\UtrccLinkController;
use App\Http\Controllers\ContactController;

// Static Pages Routes
Route::get('/', [PageController::class, 'welcome']);
Route::get('/legal-aid', [PageController::class, 'legalAid']);
Route::get('/rehabilitation', [PageController::class, 'rehabilitation']);
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/awareness', [PageController::class, 'awareness']);

// Prisoners Routes (CRUD)
Route::get('/prisoners', [PrisonerController::class, 'index'])->name('prisoners.index');
Route::get('/prisoners/create', [PrisonerController::class, 'create'])->name('prisoners.create');
Route::post('/prisoners', [PrisonerController::class, 'store'])->name('prisoners.store');
Route::get('/prisoners/{prisoner}', [PrisonerController::class, 'show'])->name('prisoners.show');
Route::get('/prisoners/{prisoner}/edit', [PrisonerController::class, 'edit'])->name('prisoners.edit');
Route::put('/prisoners/{prisoner}', [PrisonerController::class, 'update'])->name('prisoners.update');
Route::delete('/prisoners/{prisoner}', [PrisonerController::class, 'destroy'])->name('prisoners.destroy');

// Legal Cases Routes (CRUD)
Route::get('/legal-cases', [LegalCaseController::class, 'index'])->name('legal-cases.index');
Route::get('/legal-cases/create', [LegalCaseController::class, 'create'])->name('legal-cases.create');
Route::post('/legal-cases', [LegalCaseController::class, 'store'])->name('legal-cases.store');
Route::get('/legal-cases/{legalCase}', [LegalCaseController::class, 'show'])->name('legal-cases.show');
Route::get('/legal-cases/{legalCase}/edit', [LegalCaseController::class, 'edit'])->name('legal-cases.edit');
Route::put('/legal-cases/{legalCase}', [LegalCaseController::class, 'update'])->name('legal-cases.update');
Route::delete('/legal-cases/{legalCase}', [LegalCaseController::class, 'destroy'])->name('legal-cases.destroy');

// Lawyers Routes (CRUD)
Route::get('/lawyers', [LawyerController::class, 'index'])->name('lawyers.index');
Route::get('/lawyers/create', [LawyerController::class, 'create'])->name('lawyers.create');
Route::post('/lawyers', [LawyerController::class, 'store'])->name('lawyers.store');
Route::get('/lawyers/{lawyer}', [LawyerController::class, 'show'])->name('lawyers.show');
Route::get('/lawyers/{lawyer}/edit', [LawyerController::class, 'edit'])->name('lawyers.edit');
Route::put('/lawyers/{lawyer}', [LawyerController::class, 'update'])->name('lawyers.update');
Route::delete('/lawyers/{lawyer}', [LawyerController::class, 'destroy'])->name('lawyers.destroy');

// Rehabilitation Routes (CRUD)
Route::get('/rehabilitations', [RehabilitationController::class, 'index'])->name('rehabilitations.index');
Route::get('/rehabilitations/create', [RehabilitationController::class, 'create'])->name('rehabilitations.create');
Route::post('/rehabilitations', [RehabilitationController::class, 'store'])->name('rehabilitations.store');
Route::get('/rehabilitations/{rehabilitation}', [RehabilitationController::class, 'show'])->name('rehabilitations.show');
Route::get('/rehabilitations/{rehabilitation}/edit', [RehabilitationController::class, 'edit'])->name('rehabilitations.edit');
Route::put('/rehabilitations/{rehabilitation}', [RehabilitationController::class, 'update'])->name('rehabilitations.update');
Route::delete('/rehabilitations/{rehabilitation}', [RehabilitationController::class, 'destroy'])->name('rehabilitations.destroy');

// UTRCC Links Routes (CRUD)
Route::get('/utrcc-links', [UtrccLinkController::class, 'index'])->name('utrcc-links.index');
Route::get('/utrcc-links/create', [UtrccLinkController::class, 'create'])->name('utrcc-links.create');
Route::post('/utrcc-links', [UtrccLinkController::class, 'store'])->name('utrcc-links.store');
Route::get('/utrcc-links/{utrccLink}', [UtrccLinkController::class, 'show'])->name('utrcc-links.show');
Route::get('/utrcc-links/{utrccLink}/edit', [UtrccLinkController::class, 'edit'])->name('utrcc-links.edit');
Route::put('/utrcc-links/{utrccLink}', [UtrccLinkController::class, 'update'])->name('utrcc-links.update');
Route::delete('/utrcc-links/{utrccLink}', [UtrccLinkController::class, 'destroy'])->name('utrcc-links.destroy');

// Contact Routes
Route::get('/contact', [ContactController::class, 'show']);
Route::post('/contact/submit', [ContactController::class, 'submit']);
