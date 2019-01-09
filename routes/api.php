
<?php

use App\Content;
use App\Category;
use Illuminate\Http\Request;
use App\Http\Resources\CategoryCollection;

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

Route::post('login', 'API\UserController@login');
Route::post('register', 'API\UserController@register');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('category')->group(function() {
    Route::get('/', function() {
        $categoties = Category::all();
        return response()->json(['Categories' => $categoties]);
    });

    Route::get('/contents', function() {
        $contents = Category::with('contents')->get();
        return response()->json(['Categories' => $contents]);
    });

    Route::get('/{slug}', function($category) {
        $cat = Category::with('contents')
                       ->where('categories.name', $category)
                       ->get();
        return response()->json(['Category' => $cat]);
    });
});

/*
|***** Authentication API Routes *****|
*/

Route::group(['middleware' => ['api']], function() {
    Route::post('auth/register', 'Auth\ApiRegisterController@register');
    Route::post('auth/login', 'Auth\ApiLoginController@login');
});
