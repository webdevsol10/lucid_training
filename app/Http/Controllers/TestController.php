<?php

namespace App\Http\Controllers;

use App\Services\Instagram\Features\FetchAccountDataFeature;
use Lucid\Units\Controller;

class TestController extends Controller
{

    public function test2()
    {
//        dump('sdf');echo 'TestController.php:12'; exit;

        $handle = 'vlad535734';
        $accountInsights = $this->serve(FetchAccountDataFeature::class, [
            'handle' => $handle
        ]);


        $accountInsights = $this->serve(FetchAccountDataFeature::class, [
            'handle' => $handle,
            'accountInsights' => $accountInsights
        ]);


    }
}
