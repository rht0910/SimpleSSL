<?php
use PHPUnit\Framework\TestCase;
use rht0910\ssl\SSL;

class SSLTest extends TestCase
{
    /**
     * @var SSL
     */
    protected $object;

    protected function setUp() {
	$this->object = new SSL();
    }

    /**
     * Test enabling.
     * @test
     */
    public function testEnable() {
	$this->assertEquals(0, $this->object->enable());
    }

    /**
     * Test disabling.
     * @test
     */
    public function testDisable() {
	$this->assertEquals(0, $this->object->disable());
    }
}
