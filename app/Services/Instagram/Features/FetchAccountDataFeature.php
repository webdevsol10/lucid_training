<?php

namespace App\Services\Instagram\Features;

use App\Domains\Instagram\Jobs\FetchAccountDataJob;
use Lucid\Units\Feature;
use Illuminate\Http\Request;

class FetchAccountDataFeature extends Feature
{
    public function handle(Request $request)
    {
        $accountInsights = $this->run(FetchAccountDataJob::class, [
            'handle' => $request->input('handle'),
        ]);

        return $accountInsights;
    }
}
