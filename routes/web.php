<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ReactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostStatusController;
use App\Http\Controllers\ReactionTypeController;
use App\Http\Controllers\ReplyController;

use Illuminate\Support\Facades\Route;


Route::view('/', 'home');

Route::prefix('dashboard')->controller(DashboardController::class)->group(function () {
    Route::get('statistics', 'statistics');
});


Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
    'replies' => ReplyController::class,
    'post-statuses' => PostStatusController::class,
    'reaction-types' => ReactionTypeController::class,
    'users' => UserController::class,
    'reactions' => ReactionController::class,
]);


// Route::get('/init', function () {
//     $models = [
//         'User',
//         'ReactionType',
//         'PostStatus',
//         'Post',
//         'Comment',
//         'Reply',
//         'Reaction',
//     ];

//     foreach ($models as $model) {
//         // php artisan make:model ModelName -a
//         Artisan::call('make:model', ['name' => $model, '-a' => true]);

//         sleep(1);
//     }

//     return 'DONE';
// });
