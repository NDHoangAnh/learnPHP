<?php
    echo "OOP in PHP<br/>";

    class User {
        // private, protected, public, default

        // thuộc tính
        public $name;
        public $email;
        public $age;
        public $password;

        // constructor
        public function __construct($name, $email, $age, $password) {  // 2 gạch dưới
            //echo "constructor runs <br/>";
            $this -> name = $name;
            $this -> email = $email;
            $this -> age = $age;
            $this -> password = $password;
        }

        // method/function
        function set_name($name)
        {
            $this -> name = $name;
        }
        function get_name()
        {
            return $this -> name;
        }

    }

    // khởi tạo đối tượng
    $user1 = new User('miss but missed', 'miss$gmail.com', 3, 12345);
    $user2 = new User('hoang anh', 'hoanganh@gmail.com', 20, 1234);
    // $user1 -> name = 'Anh';
    // $user1 -> age = 20;
    // $user1 -> email = 'hoanganh.axe.no.1@gmail.com';
    // $user1 -> password = 123456;
    // $user1 -> set_name('Linh');
    // $user2 -> set_name('miss');
    // print_r($user1);
    // print_r($user2);
    // echo $user1 -> get_name().'<br>';
    // echo $user2 -> get_name().'<br>';

    // echo $user1 -> email;

    // tính kế thừa
    class Employee extends User {
        public function __construct($name, $email, $age, $password, $title)
        {
            // gọi tới phương thức lớp cha => parent::
            parent::__construct($name, $email, $age, $password);
            $this->title = $title;
        }
        public function get_Title()
        {
            return $this->title;
        }
    }

    $employee1 = new Employee('Hoang Anh', 'anh@gmail.com', 20, 12345, 'miss u');
    echo $employee1-> get_Title();
?>