<?php

    class User {
        public $name ;

        public function sayHello() {
            return $this->name . ' Says Hello';
        }
    }

    $user1 = new User();
    $user1->name = 'Kev';

    echo $user1->sayHello();

?>