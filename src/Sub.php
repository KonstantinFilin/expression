<?php


namespace kfilin\expression;

class Sub implements Expression {

    /**
     * 
     * @var float
     */
    protected $a;

    /**
     * 
     * @var float
     */
    protected $b;
    
    public function __construct(float $a, float $b) {
        $this->a = $a;
        $this->b = $b;
    }
    
    #[\Override]
    public function calc(): float {
        return $this->a - $this->b;
    }

    #[\Override]
    public function explain(): string {
        return $this->a . " - " . $this->b;
    }
}
