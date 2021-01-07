<?php

    class User extends Dbh {
        protected function getUser($name) {
            $sql = "SELECT * FROM users WHERE first_name = ?";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$name]);

            return $stmt->fetchAll();
        }

        protected function setUser($firstname, $lastname, $dod) {
            $sql = "INSERT INTO users(first_name, last_name, dateofbirth) VALUES (?,?,?)";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute([$firstname, $lastname, $dod]);
        }
    }