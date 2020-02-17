<?php
class Users extends Controller{
    public function __construct(){
        $this->userModel = $this->model('User');
    }

    public function register(){
        //check for POST request
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form
            // die('Submitted!');



            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            //Init data
            $data = [
                'name' => trim($_POST['name']),
                'email' =>  trim($_POST['email']),
                'password' =>  trim($_POST['password']),
                'confirm_password' =>  trim($_POST['confirm_password']),
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //Validate Email
            if(empty($data['email'])){
          
                $data['email_err']="Please enter your email!";
            } else {
                //Check email in database
                if($this->userModel->findUserByEmail($data['email'])){
                    $data['email_err']="Email is already taken!";
                }
            }

             //Validate Name
             if(empty($data['name'])){
                $data['name_err']="Please enter your name!";
            }

            //Validate Password
            if(empty($data['password'])){
                $data['password_err']="Please enter your password!";
            }else if(strlen($data['password']) < 6){
                $data['password_err']="Password should be atleast 6 characters!";
            }

            //Validate Confirm Password
            if(empty($data['confirm_password'])){
                $data['confirm_password_err']="Please confirm your password!";
            }else {
                if($data['password'] != $data['confirm_password']){
                    $data['confirm_password_err']="Passwords do not match!";
                }
            }

            //Make sure errors are empty
            if(empty($data['email_err']) && empty($data['name_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
               //Validated

               //Hash Password
               $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

               //Register User
               if($this->userModel->register($data)){
                   flash('register_success', 'You are registerd and can log in');
                    redirect('users/login');
               }else{
                   die('Something went wrong');
               }


            }else{
                //Loadview with errors

                $this->view('users/register', $data);
                // die(print_r($data));
        
            }



        }else{
            //Init data
            $data = [
                'name' => '',
                'email' => '',
                'password' => '',
                'confirm_password' => '',
                'name_err' => '',
                'email_err' => '',
                'password_err' => '',
                'confirm_password_err' => ''
            ];

            //Load view
            $this->view('users/register', $data);
        }
    }

    public function login(){
        //check for POST request
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Process form

            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            //Init data
            $data = [
                'email' =>  trim($_POST['email']),
                'password' =>  trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];

            //Validate Email
            if(empty($data['email'])){
          
                $data['email_err']="Please enter your email!";
            }

            //Validate Password
            if(empty($data['password'])){
                $data['password_err']="Please enter your password!";
            }

            //Check for user/email
            if($this->userModel->findUserByEmail($data['email'])){
                //User found
            }else{
                $data['email_err'] = 'No User Found';
            }
            //Make sure errors are empty
            if(empty($data['email_err']) && empty($data['password_err'])){
                //Validated
                //Check and set logged in user

            $loggedInUser = $this->userModel->login($data['email'], $data['password']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                $data['password_err'] = 'Password incorrect';

                $this->view('users/login', $data);
            }
            }else{
                //Loadview with errors

                $this->view('users/login', $data);
                // die(print_r($data));
        
            }


        }else{
            //Init data
            $data = [
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];

            //Load view
            $this->view('users/login', $data);
        }
    }


    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->name;
        redirect('posts');
    }

    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        session_destroy();
        redirect('users/login');
    }

    
}