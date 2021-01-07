<?php

    class UsersView extends Users {
        public function showUser($name) {
            $results = $this->getUser($name);
            echo "Full name:" . $results['first_name'] . " " . $results[0]['last_name'] . "<br>";
            echo "Date of birth: " . $results[0]['dateofbirth'];
        }
    }