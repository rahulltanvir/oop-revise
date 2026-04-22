<?php 
// class myClassOOP{
//     public $name;
//     public $age;

//     public function parson(){
//         echo "name:". $this->name."\n". "age:". $this->age;
//     }
// }
// $details= new myClassOOP();
// $details->name="rahul";
// $details->age=32;
// $details->parson();============class

class myclass{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name=$name;
        $this->age=$age;
    }

    public function details(){
        echo "Name: ". $this->name . "\n" ."Age:". $this->age;
    }
}
$data= new myclass("rahul", 32);
echo $data->details();

?>