<?php
use USoftech\User\Http\Controllers\RoleController;
use USoftech\User\Http\Controllers\UserController;
	
	Route::resource('/roles',RoleController::class);
	Route::get('/roles-data', [RoleController::class, 'rolesData'])->name('roles.data');
	Route::post('roles-toggle-status/{id}', [RoleController::class, 'toggleStatus'])->name('role.toggle.status');

	Route::resource('/users',UserController::class);
	Route::get('/users-data', [UserController::class, 'usersData'])->name('users.data');
	Route::put('users/block-unblock/{user}', [UserController::class, 'blockUnblock'])->name('users.block-unblock');