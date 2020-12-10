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
     * @return Instagram
     * @throws \InstagramScraper\Exception\InstagramAuthException
     * @throws \InstagramScraper\Exception\InstagramChallengeRecaptchaException
     * @throws \InstagramScraper\Exception\InstagramChallengeSubmitPhoneNumberException
     * @throws \InstagramScraper\Exception\InstagramException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheDriverCheckException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheDriverException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheDriverNotFoundException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidArgumentException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheInvalidConfigurationException
     * @throws \Phpfastcache\Exceptions\PhpfastcacheLogicException
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \ReflectionException
     */
    public function handle() : Instagram
    {

        $instagram = Instagram::withCredentials(
            new \GuzzleHttp\Client(),
            env('INSTAGRAM_LOGIN'),
            env('INSTAGRAM_PASSWORD'),
            new Psr16Adapter('Files')
        );

        $instagram->login();

        return $instagram;
    }
}
