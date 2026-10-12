<?php
require_once "Database.php";
class Users extends Database {

public function store($request)
{
    $first_name     =$request['first_name'];
    $last_name      =$request['last_name'];
    $username       =$request['username'];
    $password       =$request['password'];

    $password = password_hash
    ($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO users
    (`first_name`, `last_name`, `username`, `password`)
        VALUES ('$first_name', '$last_name', '$username', '$password')";

        if($this->conn->query($sql)){
            header('location:../views/login.php');
            exit;
        }else{
            die('Error creating the user: ' . $this->conn->error);
        }
    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";

        if($result = $this->conn->query($sql)){
            return $result;
        }else{
            die('Error retrieving all users: ' . $this->conn->error);
        }
    }
    public function getUser($id){
        $sql = "SELECT * FROM users WHERE id = $id";

        if($result = $this->conn->query($sql)){
            return $result->fetch_assoc();
        }else{
            die('Error retrieving all users: ' . $this->conn->error);
        }
    }

#login
public function login($request){

    $username = $request['username'];
    $password = $request['password'];

    $sql = "SELECT * FROM Users WHERE username = '$username'";
    $result = $this->conn->query($sql);

    if($result->num_rows == 1){
        $user = $result->fetch_assoc();

    if(password_verify($password, $user['password'])){
        session_start();
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['full_name'] = $user['first_name'] . " " . $user['last_name'];

        header('location: ../views/dashboard.php');
        exit;
    }else{
        die('Password is incrrect.');
    }
    }else{
        die('Username not found.');
    }
}

#logout
public function logout(){
    session_start();
    session_unset();

    session_destroy();

    header('location: ../views');
    exit;
}


#
}
?>