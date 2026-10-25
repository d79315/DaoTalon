<?php
/**
 * Tests for DaoTalon
 */

use PHPUnit\Framework\TestCase;
use Daotalon\Daotalon;

class DaotalonTest extends TestCase {
    private Daotalon $instance;

    protected function setUp(): void {
        $this->instance = new Daotalon(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Daotalon::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
