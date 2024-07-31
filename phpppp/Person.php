<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

class Person{
    public $name;
    public $email="abhaw@1" ;
    public $password="lol" ;

    public function __construct($name){
        $this-> name = $name;
    }

    public function set_email(){
        return $this ->email; 
    }

    public function get_email(){

    }

  
    }
    

$member1 = new Person("Ram");
$member2 = new Person("Hari");
$member3 = new Person("Krishna");
echo $member1->name;
echo"<br>";
echo $member2->name;
echo"<br>";
echo $member3->name;

//set_email();
//get_email();

?>

</body>
</html>