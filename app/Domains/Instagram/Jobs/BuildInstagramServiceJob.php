<?php

namespace App\Domains\Instagram\Jobs;

use InstagramScraper\Instagram;
use Lucid\Units\Job;
use Phpfastcache\Helper\Psr16Adapter;

class BuildInstagramServiceJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle() : Instagram
    {
        $username = 'webdevsol6@gmail.com';
        $password = 'fdskjf&^#$jDJH4738878';

        $instagram = Instagram::withCredentials(
            new \GuzzleHttp\Client(),
            $username,
            $password,
            new Psr16Adapter('Files')
        );

        $instagram->login();

        return $instagram;
    }
}
