<?php

namespace App\Services\Instagram\Features;

use App\Data\Platform;
use App\Domains\Instagram\Jobs\BuildInstagramServiceJob;
use App\Domains\Instagram\Jobs\FetchAccountDataJob;
use Lucid\Units\Feature;
use Illuminate\Http\Request;

class CollectAccountDataFeature extends Feature
{
    private $handle;

    /**
     * CollectAccountDataFeature constructor.
     * @param string $handle
     */
    public function __construct(string $handle)
    {
        $this->handle = $handle;
    }

    public function handle(Request $request) : array
    {
        $instagram = $this->run(BuildInstagramServiceJob::class, [

        ]);


        $insights = $this->run(FetchAccountDataJob::class, [
            'instagram' => $instagram,
            'handle' => $this->handle,
        ]);
        dump($insights);echo 'CollectAccountDataFeature.php:35'; exit;

        return [
            "username" => $request->input('handle'),
            "platform_id" => Platform::INSTAGRAM_ID,
            "platform"=> Platform::INSTAGRAM,
            "source"=> Platform::INSTAGRAM,
            "fetched_at" => now()->format('y-m-d H:i:s'),
            "insights" => [
                'account' => $insights['account'],
                'content' => $insights['content']
            ]
        ];
    }
}
