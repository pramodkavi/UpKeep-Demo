<?php 

class User 
{
    use Model;

    protected $table = "users";

    protected $allowedColumns = [
        "first_name",
        "last_name",
        "email",
        "password",
    ];

    public function validate($data){
        $this->errors =[];

        if(empty($data['first_name'])){
            $this->errors['password'] = "First name is required";
        }
        if(empty($data['last_name'])){
            $this->errors['password'] = "Last name is required";
        }
        
        if(empty($data['email'])){
            $this->errors['email'] = "Email is required";
        }else
        
        if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
            $this->errors['email'] ="Email is not valid";
        }

        if(empty($data['password'])){
            $this->errors['password'] = "password is required";
        }
        
        if(empty($this->errors)){

            return true;
        }

        return false;
    }

}
