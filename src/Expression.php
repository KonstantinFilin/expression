<?php

namespace kfilin\expression;

interface Expression {
    public function calc(): float;
    public function explain(): string;
}
