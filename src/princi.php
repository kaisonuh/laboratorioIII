<?php
// This file defines types and interfaces used in the application for number conversion and calculations.

interface NumberBase {
    public function toDecimal($value);
    public function fromDecimal($value);
}

class ConversionResult {
    public $decimal;
    public $binary;
    public $octal;
    public $hexadecimal;

    public function __construct($decimal, $binary, $octal, $hexadecimal) {
        $this->decimal = $decimal;
        $this->binary = $binary;
        $this->octal = $octal;
        $this->hexadecimal = $hexadecimal;
    }
}

class CalculationResult {
    public $result;
    public $baseResults;

    public function __construct($result, ConversionResult $baseResults) {
        $this->result = $result;
        $this->baseResults = $baseResults;
    }
}
?>