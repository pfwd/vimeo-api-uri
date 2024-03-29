<?php
/**
 * Created by PhpStorm.
 * User: peterfisher
 * Date: 14/03/2019
 * Time: 14:38
 */
namespace PFWD\Vimeo\URI;

/**
 * Class VideoURI
 */
class VideoURI {

    /**
     *
     * @return string
     */
    public function getMyVideos(): string
    {
        return '/me/videos/';
    }

    /**
     * @param int $videoID
     *
     * @return string
     */
    public function getVideo(int $videoID): string
    {
        return '/videos/'.$videoID;
    }

    /**
     * @param int $videoID
     *
     * @return string
     */
    public function deleteVideo(int $videoID): string
    {
        return $this->getVideo($videoID);
    }

    /**
     * @param int $videoID
     *
     * @return string
     */
    public function editVideo(int $videoID): string
    {
        return $this->getVideo($videoID);
    }

    /**
     * @param int $videoID
     *
     * @return string
     */
    public function addVersion(int $videoID): string
    {
        return '/videos/'.$videoID.'/versions';
    }
}
