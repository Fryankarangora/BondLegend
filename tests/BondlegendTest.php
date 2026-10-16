<?php
/**
 * Tests for BondLegend
 */

use PHPUnit\Framework\TestCase;
use Bondlegend\Bondlegend;

class BondlegendTest extends TestCase {
    private Bondlegend $instance;

    protected function setUp(): void {
        $this->instance = new Bondlegend(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Bondlegend::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
