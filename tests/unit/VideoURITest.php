<?php 
class VideoURITest extends \Codeception\Test\Unit
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
     * @group video
     */
    public function testGetMyVideos()
    {
        $uri = new \PFWD\Vimeo\URI\VideoURI();
        $this->assertEquals('/me/videos/', $uri->getMyVideos());
    }

    /**
     * @group video
     */
    public function testGetVideo()
    {
        $uri = new \PFWD\Vimeo\URI\VideoURI();
        $this->assertEquals('/videos/1', $uri->getVideo(1));
    }

    /**
     * @group video
     */
    public function testAddVersion()
    {
        $uri = new \PFWD\Vimeo\URI\VideoURI();
        $this->assertEquals('/videos/1/versions', $uri->addVersion(1));
    }

    /**
     * @group video
     */
    public function testDeleteVideo()
    {
        $uri = new \PFWD\Vimeo\URI\VideoURI();
        $this->assertEquals('/videos/1', $uri->deleteVideo(1));
    }

    /**
     * @group video
     */
    public function testEditVideo()
    {
        $uri = new \PFWD\Vimeo\URI\VideoURI();
        $this->assertEquals('/videos/1', $uri->editVideo(1));
    }
}