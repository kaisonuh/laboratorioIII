<?php
class SimpleCalculator {
    public function add($a, $b) {
        return $this->convertAllBases($a + $b);
    }

    public function subtract($a, $b) {
        return $this->convertAllBases($a - $b);
    }

    public function multiply($a, $b) {
        return $this->convertAllBases($a * $b);
    }

    public function divide($a, $b) {
        if ($b == 0) {
            return "Division by zero error.";
        }
        return $this->convertAllBases($a / $b);
    }

    private function convertAllBases($result) {
        return [
            'decimal' => $result,
            'binary' => decbin($result),
            'octal' => decoct($result),
            'hexadecimal' => dechex($result)
        ];
    }
}
?>