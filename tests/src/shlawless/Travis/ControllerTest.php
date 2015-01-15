<?php

class ControllerTest
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
            ->willReturn('xml');

        $controller = new shlawless\Travis\Controller;

        $this->assertSame('{"format":"xml"}', $controller->indexAction($request));
    }
}