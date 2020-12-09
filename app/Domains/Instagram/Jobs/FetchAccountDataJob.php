<?php

namespace App\Domains\Instagram\Jobs;

use Lucid\Units\Job;
use Phpfastcache\Helper\Psr16Adapter;

class FetchAccountDataJob extends Job
{
    private $handle;

    /**
     * Create a new job instance.
     *
     * @param $handle
     */
    public function __construct($handle)
    {
        //
        $this->handle = $handle;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $username = 'webdevsol6@gmail.com';
        $password = 'fdskjf&^#$jDJH4738878';

        $instagram = \InstagramScraper\Instagram::withCredentials(
            new \GuzzleHttp\Client(),
            $username,
            $password,
            new Psr16Adapter('Files')
        );
        $instagram->login();

        $account = $instagram->getAccount($this->handle);


        return [
            "following" => $account->getFollowedByCount(),
            "followers" => $account->getFollowsCount(),
            "media_count" => $account->getMediaCount()
        ];

    }
}
