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
}