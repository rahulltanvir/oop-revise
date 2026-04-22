<?php
 class myClass{
    public $name;
    public $age;

    public function parson(){
        echo "name:". $this->name.",age:". $this->age;
    }
 }

 $details= new myClass();
 $details->name="rahul";
 $details->age=32;
 $details->parson();






?>