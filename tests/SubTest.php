<?php

use PHPUnit\Framework\TestCase;

final class SubTest extends TestCase {
    public function testRun(): void {
        $e = new \kfilin\expression\Sub(7, 3);
        
        $this->assertEquals(4, $e->calc());
        $this->assertEquals("7 - 3", $e->explain());
    }
}
    