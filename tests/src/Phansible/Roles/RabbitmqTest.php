<?php

namespace Phansible\Roles;

class RabbitmqTest extends \PHPUnit_Framework_TestCase
{
    private $role;

    public function setUp()
    {
        $app = $this->getMockBuilder('\Phansible\Application')
            ->disableOriginalConstructor()
            ->getMock();

        $this->role = new Rabbitmq($app);
    }

    public function tearDown()
    {
        unset($this->role);
    }

    /**
     * @covers Phansible\Roles\Rabbitmq
     */
    public function testShouldInstanceOf()
    {
        $this->assertInstanceOf('\Phansible\Role', $this->role);
    }

    /**
     * @covers Phansible\Roles\Rabbitmq::getName
     */
    public function testShouldGetName()
    {
        $this->assertEquals('RabbitMQ', $this->role->getName());
    }

    /**
     * @covers Phansible\Roles\Rabbitmq::getSlug
     */
    public function testShouldGetSlug()
    {
        $this->assertEquals('rabbitmq', $this->role->getSlug());
    }

    /**
     * @covers Phansible\Roles\Rabbitmq::getRole
     */
    public function testShouldGetRole()
    {
        $this->assertEquals('rabbitmq', $this->role->getRole());
    }

    /**
     * @covers Phansible\Roles\Rabbitmq::getInitialValues
     */
    public function testShouldGetInitialValues()
    {
        $expected = [
            'install'  => 0,
            'plugins'  => [],
            'hostname' => 'phansible',
            'user'     => 'user',
            'password' => 'password'
        ];

        $this->assertEquals($expected, $this->role->getInitialValues());
    }
}
