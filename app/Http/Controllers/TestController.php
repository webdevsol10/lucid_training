<?php

namespace App\Http\Controllers;

use App\Domains\Instagram\Jobs\BuildInstagramServiceJob;
use App\Domains\Instagram\Jobs\FetchAccountContentDataJob;
use App\Domains\Instagram\Jobs\FetchAccountDataJob;
use App\Services\Instagram\Features\DispatchAccountInsightsFeature;
use App\Services\Instagram\Features\CollectAccountDataFeature;
use Lucid\Units\Controller;

class TestController extends Controller
{

    public function test2()
    {
//        dump('sdf');echo 'TestController.php:12'; exit;

        $handle = 'vlad535734';

        $accountInsights = $this->serve(CollectAccountDataFeature::class, [
            'handle' => $handle
        ]);
//
//        $accountInsights = [
//            "following" => 111,
//            "followers" => 222,
//            "media_count" => 333
//        ];
////
//        $this->serve(DispatchAccountInsightsFeature::class, [
//            'handle' => $handle,
//            'accountInsights' => $accountInsights
//        ]);
//
//        $instagram = $this->run(BuildInstagramServiceJob::class, [
//
//        ]);
//
////        $accountInsights = $this->run(FetchAccountDataJob::class, [
////            'instagram' => $instagram,
////            'handle' => $request->input('handle'),
////        ]);
//
//        $contentInsights = $this->run(FetchAccountDataJob::class, [
//            'instagram' => $instagram,
//            'handle' => $handle,
//        ]);

    }
}
