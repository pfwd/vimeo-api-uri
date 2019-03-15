<?php 
class ProjectURITest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    /**
     * @group project
     */
    public function testGetMyProject()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/me/projects/10', $uri->getMyProject(10));
    }

    /**
     * @group project
     */
    public function testGetMyVideos()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/me/projects/10/videos', $uri->getMyVideos(10));
    }

    /**
     * @group project
     */
    public function testGetMyProjects()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/me/projects', $uri->getMyProjects());
    }

    /**
     * @group project
     */
    public function testGetProject()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/users/1/projects/10', $uri->getProject(1, 10));
    }

    /**
     * @group project
     */
    public function testGetProjects()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/users/1/projects', $uri->getProjects(1));
    }

    /**
     * @group project
     */
    public function testGetVideos()
    {
        $uri = new \PFWD\Vimeo\URI\ProjectURI();
        $this->assertEquals('/users/1/projects/10/videos', $uri->getVideos(1, 10));
    }
}