<?php

class Dog {
            
            public $name;
            
            public function bark() {
                echo "$this->name is barking";
            }
            
        }
        //Variable $animal
        $animal = 'Dog';
        $action = 'bark';
        $Dog = new $animal('Dog');
        $animal->action();
