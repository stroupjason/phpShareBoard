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

    //  Class User{
    //     public function register(){
    //         echo 'User Registered';
    //     }
    //     public function login($username, $password){
    //         echo $username.' is now logged in.';
    //     }
    // }
    // $User = new User;
    // $User->login('Jason', '12345'); 

    //now do it again

    // Class User {
    //     public function register(){
    //         echo 'User Registered';
    //     }
    //     public function login($username, $password){
    //         echo $username.' has succesfully logged in.';
    //     }
    // }

    // $User = new User;
    // $User->login('Jason'); //if you don't call the second argument you get this error: 'Warning: Missing argument 2 for User::login(), called in' (so just add 'anything here' as the second parameter) 

//CHALLENGE : create a constructor function (hint: to call this function you do need to call anything at the bottom, so make sure there are no methods being called)

// class User{
//     public function __construct(){   //make sure to spell everything correctly! *construct
//         echo 'Constructor Executed';
//     }
//     public function register(){
//         echo 'User Registered';
//     }
//     public function login($username, $password){
//         echo $username.' is now logged in.';
//     }
//    public function __destruct(){ //close database connections or run at the end of any scripts
//         echo 'Destructor Executed';
//     }
// }

//     $User = new User;


//CHALENGE: CALL A METHOD WITHIN ANOTEHR METHOD (hint: use 'this' keyword)

// class User {
//     public function __construct(){
//         echo ' contstructor executed.';
//     }
//     public function register(){
//         echo ' User Registered.'; 
//     }
//     public function login($username, $password){
//         echo $username.' logged in successfully.';
//     }
//     public function auth_user($username, $password){
//         echo $username.' is authenticated.';
//     }
//     public function __destruct(){
//         echo ' destructor executed.';
//     }

// }

// $User = new User;
// $User->register();

//this code doesn't work becuase it doesn't bind "this keyword" when logging in to check for authentication

class User {
    public function __construct(){
        echo ' contstructor executed.';
    }
    public function register(){
        echo ' User Registered.'; 
    }
    public function login($username, $password){
        $this->auth_user($username, $password);
    }
    public function auth_user($username, $password){
        echo $username.' is authenticated.';
    }
    public function __destruct(){
        echo ' destructor executed.';
    }

}

$User = new User;
$User->login(' Jason', '1234');  //calling auth user method from login method

?>




