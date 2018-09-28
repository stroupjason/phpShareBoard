<?php
//echo 'this classesMethods page is working!) <br />'

// video 9 of 32 total

// CLASSES AND METHODS - this lecture will:
    //1. build a class User can register/ log in / auth user / contruct / desctruct
    //2. let a user log in by instantiating that class
    //3. create a log in method
    //4. constructor() function why? to set up default properties like getters and setters "magic methods"
        //when the class is instantiated the __construct() is called
    //5. desctructor() function - gets called after everything runs, i.e closing database connections or anything you need to run at the end of a script
    //6. Call a method within another method within that class - auth_User
    //      hint: use 'this' keyword in order to do so
    //      (call auth user method from login method)    


// class User{
//     //two main things go into classes : methods (email, name etc) and properties
//     //create a public method (function)
//     //
//     public function register(){
//         echo 'User Registered';    
//     }
// }

//     //instantiate a new class
//     $User = new User;

//     //call back function
//     $User->register();


//now do it from scratch (no resources):

// class User{
//     public function register(){
//         echo 'User Registered'; //real world example: get redirected to a new page via database 
//     }
// }
// $User = new User; //again this is used to be able to use the methods and properties within that class

// $User->register();


// NOW CREATE LOG IN 

    // class User {
    //     public function register(){
    //         echo 'User Registered';
    //     }
    //     public function login(){
    //         echo 'User logged in';
    //     }
    // }
    // $User = new User;
    // $User->login();

//EASY ENOUGH RIGHT? NOW CREATE TWO PARAMETERS USERNAME AND PASSWORD FOR LOGIN

    // Class User{
    //     public function register(){
    //         echo 'User Registered';
    //     }
    //     public function login($username, $password){
    //         echo $username.'User Logged In';
    //     }
    // }
    // $User = new User;
    // $User->$login(); //error: recreated issue 'method name must be a string in' //error because login does not need a $ in front

     Class User{
        public function register(){
            echo 'User Registered';
        }
        public function login($username, $password){
            echo $username.' is now logged in.';
        }
    }
    $User = new User;
    $User->login('Jason', '12345'); //recreate issue 'method name must be a string in'

?>



