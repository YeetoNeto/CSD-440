<?php
class myInteger {
    private $value;
    public function __construct($value) {
        $this->value = $value;
    }

    public function setValue($value) {
        $this->value = $value;
    }
    public function getValue() {
        return $this->value;
    }

    public function isPrime() {
        if ($this->value <= 1) { // anything less than 1 can't be prime
            return false;
        };
        for ($i = 2; $i <= sqrt($this->value); $i++){ 
            // start at 2 and check from 2 incremented if the value divided by it is divisible, if it is divisible and returns no remainder, return false
            // you need to start from 2 and use the square root of n, you only need to test prime numbers up to the square root
            if ($this->value % $i == 0) {
                return false;
            }
        }
        return true;
    }

    public function isEven() {
        if ($this->value % 2 == 0){
            return true;
        }
        return false; //if it doesn't equal 0 it will return false; 0 = even
    }

    public function isOdd() {
        if ($this->value % 2 != 0){ 
            return true;
        }
        return false; //if it equal's 0 it will return false; 0 = even
    }
}
?>