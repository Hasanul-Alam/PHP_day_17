<?php

namespace App\classes;
class HelloWorld
{
    public $message;
    public $x;
    public $y;
    public $z;
    public $check;
    public $data = [];

    public function __construct()
    {
        $this->message = 'Hello World';
        $this->x = 10;
        $this->y = 20;
        $this->z = 30;
        $this->check = true;
    }

    public function index(){
//        echo $this->message;

//        And operations
        /*echo '<br/>';
        echo ($this->x < $this->y) && ($this->y < $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x < $this->y) && ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) && ($this->y < $this->z);
        echo '<br/>';*/

//      OR Operations
        /*echo ($this->x < $this->y) || ($this->y < $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x < $this->y) || ($this->y > $this->z);
        echo '<br/>';
        echo ($this->x > $this->y) || ($this->y < $this->z);
        echo '<br/>';*/

//      NOT Operations
        /*echo !$this->check;*/

//        Conditional Statement.
        $this->x = 10;
        $this->y = 200;
        $this->z = $this->x + $this->y;

//        Simple if else condition
        /*if($this->x > $this->y){
            echo 'Hello Bangladesh.';
        }
        else{
            echo 'Hello USA';
        }

//        elseif condition
        if($this->x > $this->y){
            echo 'X is greater.';
        }
        elseif($this->y > $this->z){
            echo 'Y is greater.';
        }
        elseif($this->z > $this->x){
            echo 'Z is greater.';
        }
        else{
            echo 'Hello PHP.';
        }*/

        /*switch ($this->x){
            case 10:
                echo 'Hello World';
                break;
            case 20:
                echo 'Hello Bangladesh';
                break;
            case 30:
                echo 'Hello Dhaka';
                break;
            default:
                echo 'Hello BITM';
        }*/

//        Loops (Repeated statement)
        /*for($this->x = 70; $this->x <= 100; $this->x++){
            echo '<br/>';
            echo $this->x;
        }*/

        /*for($this->x = 30; $this->x >= 11; $this->x--){
            if($this->x == 15){
                break;
            }
            else{
                echo $this->x.'<br/>';
            }
        }*/

//        While Loop
        /*while ($this->x <= 50){
            echo '<br/>';
            echo $this->x;
            $this->x++;
        }*/

//        Do while loop
        /*do{
            echo '<br/>';
            echo $this->x;
            $this->x++;
        }
        while($this->x > 50);*/

//        Array

        /*$this->data = [100, 200, 300, 'BITM', "SEIP", true, false,50.20];
        foreach ($this->data as $item){
            echo '<br/>';
            echo $item;
        }*/

        $this->data = [
            0 => [
                'name'      => 'Hasanul',
                'email'     => 'hasanulalam0000@gmail.com',
                'mobile'    => [
                    'person' => '01797888924',
                    'gurdian' => '01728258026',
                ]
            ],
            1 => [
                'name'      => 'Nishat',
                'email'     => 'nisataffifa@gmail.com',
                'mobile'    => [
                    'person' => '01785412264',
                    'gurdian' => '01518646197',
                ]
            ],
            2 => [
                'name'      => 'Rahima',
                'email'     => 'rahima@gmail.com',
                'mobile'    => [
                    'person' => '01726458925',
                    'gurdian' => '01954784264',
                ]
            ]
        ];

        foreach ($this->data as $item){
            echo '<br/>';
//            echo $item['name'].' '.$item['email'].' '.$item['mobile'];
            foreach ($item as $value){
                if(is_array($value)){
                    foreach ($value as $v_item){
                        echo $v_item.' ';
                    }
                }
                else{
                    echo $value.' ';
                }
            }
        }

//        echo $this->data[2]['name'];

        /*foreach ($this->data as $index => $item){
            echo '<br/>';
            echo "index: ".$index . "Value :".$item.' ';
        }*/
    }
}