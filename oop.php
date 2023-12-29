<?php
 class person{
   public $id;
   public $name;
   public $age;
   public function __construct($id,$name,$age)
   {
    $this->id=$id;
    $this->name=$name;
    $this->age=$age;
    
   }

}
class Professor extends person{
    public $courseTeach;
    public function __construct( $id,$name,$age,$courseTeach){
        parent::__construct($id,$name,$age);
        $this->courseTeach=$courseTeach;
    }
    function displayInfo(){
        echo "Professor information  is given below"."<br>";
        echo "id:".$this->id."<br>";
        echo "name:".$this->name ."<br>";
        echo "age:".$this-> age."<br>";
        echo "courseteach:".$this-> courseTeach."<br>";
    
}

}
class student extends person{
   public $courseEnrolledFor;
   public function __construct( $id,$name,$age,$courseEnrolledFor){
    parent::__construct($id,$name,$age);
    $this->courseEnrolledFor=$courseEnrolledFor;
}
function displayInfo() {
    echo "Student information is given below"."<br>";
    echo "id:".$this->id."<br>";
    echo "name:".$this->name ."<br>";
    echo "age:".$this-> age."<br>";
    echo "courseEnrolledFor:".$this->courseEnrolledFor."<br>";
 
}
}
$stu=new student ("1","iqra","23","computer science");
$stu->displayInfo()."<br>";
$stu=new Professor ("2","Hamza","25","web development");
$stu->displayInfo()."<br>";

?>