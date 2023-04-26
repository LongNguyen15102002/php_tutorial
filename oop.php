<?php
echo "OOP - Object Oriented Programming in PHP<br>";
// From PHPS onwards, you can define classes
class User
{
    public $name;
    public $email;
    public $age;
    public $password;
    // constructor: function that runs when an object is instantiated
    public function __construct(
        $name,
        $email,
        $age,
        $password
    ) {
        // echo "Construct run here...<br>";
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
        $this->password = $password;
    }
    // method: a function that belongs to a class
    function set_name($name)
    {
        $this->name = $name;
    }

    // getter
    function get_name()
    {
        return $this->name;
    }
}
// init an object
$user1 = new User('Long Nguyen', 'lavalshy2002@gmail.com', 21, '1111');
$user2 = new User('Josh', 'john@gmail.com', 24, '1111');
// $user1->name = 'Long Nguyen';
// $user1->age = 21;
// $user1->email = 'lavalshy2002@gmail.com';
// $user1->password = '1111';
// $user1->set_name('Long Nguyen');
// $user2->set_name('John');
// print_r($user1);
// print_r($user2);
// echo $user1->get_name()."<br>";
// echo $user2->get_name();
// echo $user1->email;
// echo '<br>';
// echo $user2->age;
// inheritance : tính kế thừa 
class Employee extends User
{
    public function __construct(
        $name,
        $email,
        $password,
        $age,
        $title // only employee has
    ) {
        parent::__construct($name, $email, $age, $password);
        $this->title = $title;
    }
    public function get_title() {
        return $this->title;
    }
}
$employee1 = new Employee('Hoang', 'Hoang123@gmail.com', '1111', 31, 'Sales Manager');
echo $employee1->get_title();
