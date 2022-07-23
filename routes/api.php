<?php

use App\Http\Controllers\API\AnswerController;
use App\Http\Controllers\API\SurveyController;
use App\Models\Survey;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
    
});
Route::apiResource("/surveys", SurveyController::class);
Route::apiResource('/answers', AnswerController::class);
// Route::prefix('surveys')->group(function () {
//     Route::apiResource()
// });
Route::put('surveys/{id}', [SurveyController::class, 'addAnswer']);