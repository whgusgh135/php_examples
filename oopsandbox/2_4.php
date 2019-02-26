<?php

    class User {
        public $name;
        public $age;

        // Runs when an object is created
        public function __construct($name, $age) {
            echo __CLASS__ . ' instantiated';
            $this->name = $name;
            $this->age = $age;
        }

        public function sayHello() {
            return $this->name . ' Says Hello';
        }

        // Called when no other references to a certain object
        // Used for cleanup, closing connections, etc
        public function __destruct() {
            echo 'destructor ran...';
        }
    }

    $user1 = new User('kev', 28);

    echo $user1->name . ' is ' . $user1->age . ' years old.';
    echo '<br>' . $user1->sayHello();

?>