<?php

use App\Http\Controllers\TestController;
use App\Services\Instagram\Features\CollectAccountDataFeature;
use Illuminate\Support\Facades\Route;
use Phpfastcache\Helper\Psr16Adapter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test2', [TestController::class, 'test2']);


Route::get('/test', function () {




//
//    $username = 'webdevsol6@gmail.com';
//    $password = 'fdskjf&^#$jDJH4738878';
//
//
//    $instagram = \InstagramScraper\Instagram::withCredentials(new \GuzzleHttp\Client(), $username, $password, new Psr16Adapter('Files'));
//    $instagram->login();
//
//    $account = $instagram->getAccount('vlad535734');
//
//    dump([
//        $account->getFollowsCount(),
//        $account->getFollowedByCount(),
//        $account->getMediaCount()
//
//    ]);echo 'web.php:32'; exit;
//
//
////    $account = $instagram->getAccountById(3);
//    $nonPrivateAccountMedias = $instagram->getMedias('kevin');
//
//
//    dump([$account, $account->getUsername()]);echo 'web.php:33'; exit;



});


