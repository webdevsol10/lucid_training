<?php

namespace App\Domains\Instagram\Jobs;

use InstagramScraper\Instagram;
use InstagramScraper\Model\Account;
use Lucid\Units\Job;
use Phpfastcache\Helper\Psr16Adapter;

class FetchAccountDataJob extends Job
{
    private string $handle;

    private $instagram;

    /**
     * Create a new job instance.
     *
     * @param $handle
     * @param $instagram
     */
    public function __construct(string $handle, $instagram)
    {
        $this->handle = $handle;
        $this->instagram = $instagram;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        /** @var Account $account */
        $account = $this->instagram->getAccount($this->handle);
        $medias = $account->getMedias();

        $mediasData = array_map(function ($media) {
            [
                'id' => $media->getId(),
                'short_code' => $media->getShortCode(),
                "video_views" => $media->getVideoViews(),
                "comments" => $media->getCommentsCount(),
                "likes" => $media->getLikesCount(),
            ];
        }, $medias);

        return [
            "content" => $mediasData,
            "account" => [
                "following" => $account->getFollowedByCount(),
                "followers" => $account->getFollowsCount(),
                "media_count" => $account->getMediaCount()
            ]
        ];

    }
}
