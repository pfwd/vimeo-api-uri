<?php
/**
 * Created by PhpStorm.
 * User: peterfisher
 * Date: 14/03/2019
 * Time: 14:38
 */
namespace PFWD\Vimeo\URI;

/**
 * Class ProjectURI
 */
class ProjectURI {

    /**
     * @param int $projectID
     *
     * @return string
     */
    public function getMyProject(int $projectID): string
    {
        return '/me/projects/'.$projectID;
    }

    /**
     * @param int $projectID
     *
     * @return string
     */
    public function getMyVideos(int $projectID): string
    {
        return '/me/projects/'.$projectID.'/videos';
    }

    /**
     * @return string
     */
    public function getMyProjects(): string
    {
        return '/me/projects';
    }

    /**
     * @param int $userID
     * @param int $projectID
     *
     * @return string
     */
    public function getProject(int $userID, int $projectID): string
    {
        return '/users/'.$userID.'/projects/'.$projectID;
    }

    /**
     * @param int $userId
     *
     * @return string
     */
    public function getProjects(int $userId): string
    {
        return '/users/'.$userId.'/projects';
    }

    /**
     * @param int $userID
     * @param int $projectID
     *
     * @return string
     */
    public function getVideos(int $userID, int $projectID): string
    {
        return '/users/'.$userID.'/projects/'.$projectID.'/videos';
    }
}
