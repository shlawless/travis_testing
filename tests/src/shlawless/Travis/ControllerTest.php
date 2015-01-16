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
        $request->expects($this->any())
            ->method('get')
            ->will($this->returnValue('xml'));

        $controller = new shlawless\Travis\Controller;

        $this->assertSame('{"format":"xml"}', $controller->indexAction($request));
    }
	
	/**
     * @test
     * @covers shlawless\Travis\Controller::indexAction
     */
    public function indexActionFails()
    {
        $request = $this->getMockBuilder('\\Symfony\\Component\\HttpFoundation\\Request')->disableOriginalConstructor()->getMock();
        $request->expects($this->any())
            ->method('get')
            ->will($this->returnValue('xmls'));

        $controller = new shlawless\Travis\Controller;

        $this->assertNotSame('{"format":"xml"}', $controller->indexAction($request));
    }
}