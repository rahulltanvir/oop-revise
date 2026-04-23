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

// class myclass{
//     public $name;
//     public $age;

//     public function __construct($name, $age)
//     {
//         $this->name=$name;
//         $this->age=$age;
//     }

//     public function details(){
//         echo "Name: ". $this->name . "\n" ."Age:". $this->age;
//     }
// }
// $data= new myclass("rahul", 32);
// echo $data->details(); Construct====================

// destruct=========

// class myclass{
//     public $filename;

//     public function __construct($filename){
//         $this->filename=$filename;
//         echo " cons File name is :".$filename;
//     }
//     public function largefile(){
//         echo "lar File name is :" .$this->filename;
//     }

//     public function __destruct()
//     {
//         echo "des File name is :" .$this->filename;
//     }

// }
// $fileObj= new myclass("text.file ".'<br>');
// $fileObj->largefile();



// inheritance=======

class myclass{
    protected $name="rahul";

    protected function oldName(){
        return $this->name;
    }
}
class man extends myclass{
    public function bark () {
        return $this->name. "say woof"."<br>";

    }
    public function nweName(){
         return $this->oldName();
    }
}
$result=new man();
echo $result->bark();
echo $result->nweName();
?>