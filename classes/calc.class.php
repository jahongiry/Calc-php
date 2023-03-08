<?php 
  class Calc {
    public $operator;
    public $num1;
    public $num2;

    public function __construct(string $operator, int $two, int $three)
    {
      $this->operator = $operator;
      $this->num1 = $two;
      $this-> num2 = $three;
    }

    public function calculator() {
      switch($this->operator){
        case 'add':
          $results = $this->num1 + $this->num2;
          return $results;
        break;
        case 'sub':
          $results = $this->num1 - $this->num2;
          return $results;
        break;
        case 'div':
          $results = $this->num1 / $this->num2;
          return $results;
        break;
        case 'mul':
          $results = $this->num1 * $this->num2;
          return $results;
        break;
        default:
        echo "Error!";
        break;
      }
    }
  }