<?php

use PHPUnit\Framework\TestCase;

final class AddTest extends TestCase {
    public function testRun(): void {
        $e = new \kfilin\expression\Add(3, 4);
        
        $this->assertEquals(7, $e->calc());
        $this->assertEquals("3 + 4", $e->explain());
    }
}
    