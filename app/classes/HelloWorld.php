<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;

    public function __construct()
    {
        $this->message = 'Hello World';
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
    }

    public function index(){
//        echo $this->message;
        echo '<br/>';
        echo ($this->x < $this->y) && ($this->y < $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y < $this->z);
        echo '<br/>';

    }
}