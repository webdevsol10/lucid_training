<?php

namespace App\Services\Instagram\Features;

use Lucid\Units\Feature;
use Illuminate\Http\Request;

class DispatchAccountInsightsFeature extends Feature
{
    public function handle(Request $request)
    {

        $request->get('handle');
        $request->get('accountInsights');


    }
}
