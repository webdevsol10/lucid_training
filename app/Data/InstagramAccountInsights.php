<?php


namespace App\Data;


class InstagramAccountInsights
{
    private $following;
    private $followers;
    private $mediaCount;
    private $medias = [];

    /**
     * InstagramAccountInsights constructor.
     * @param $following
     * @param $followers
     * @param $mediaCount
     * @param array $medias
     */
    public function __construct(int $following, int $followers, int $mediaCount, array $medias)
    {
        $this->following = $following;
        $this->followers = $followers;
        $this->mediaCount = $mediaCount;
        $this->medias = $medias;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [

        ];
    }

    /**
     * @param int $following
     * @param int $followers
     * @param int $mediaCount
     * @param array $medias
     * @return InstagramAccountInsights
     */
    public static function make(int $following, int $followers, int $mediaCount, array $medias)
    {
        return new InstagramAccountInsights($following, $followers, $mediaCount, $medias);
    }
}
