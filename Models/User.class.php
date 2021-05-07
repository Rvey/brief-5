<?php

class User extends Database
{
    public function register($fullName, $email, $password)
    {
        $sql = "insert into users(name, email, password) VALUES (?,?,?)";
        $query = $this->connect()->prepare($sql);
        $query->execute([$fullName, $email, $password]);
    }

    public function login($email, $password)
    {
        $sql = "select * from users where email = ? and password = ?";
        $query = $this->connect()->prepare($sql);
        $query->execute([$email, $password]);
        return $query->fetch();
    }

    public function get_reservation($id): array
    {
        $sql = "select * from book where user_id = ? group by unique_id";
        $query = $this->connect()->prepare($sql);
        $query->execute([$id]);
        return $query->fetchAll();
    }

}