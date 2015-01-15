<?php

class ControllerTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @covers shlawless\Travis\Controller::indexAction
     */
    public function indexAction()
    {
        $request = $this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->getMock();
        $request->expects($this->once())
            ->method('get')
            ->will('xml');

        $controller = new shlawless\Travis\Controller;

        $this->assertSame('{"format":"xml"}', $controller->indexAction($request));
    }
}