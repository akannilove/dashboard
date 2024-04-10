<?php 

class User {

     public $username;
     protected $email;
     public $role = 'member';

     public function __construct($username, $email)
     {
          $this->username = $username;
          $this->email = $email;
     }

     public function __destruct(){
          echo "the user $this->username was removed <br />";
     }

     public function addfriend(){
          return "$this->email added a new friend";
     }

     public function message(){
          return "$this->email sends a new message";
     }

     //getters
     public function getemail(){
          return $this->email;
     }

     //setters
     public function setemail($email){
          if (strpos($email, '@') > -1){
               $this->email = $email;
          }
     }

}

class AdminUser extends User{

     public $level;
     public $role = 'Admin';

     public function __construct ($username, $email, $level){
          $this->level = $level;

          parent::__construct($username, $email);
     }

     public function message(){
          return "$this->email, an admin sends a new message";
     }

}
$userOne = new User('mario', 'mario@thenetninja.com');
$userTwo = new User('luigi', 'luigi@thenetninja.com');
$userThree = new AdminUser(
     'Ancestor Oladimeji',
     'dimejiakanni@gmail.com',
     5
);

echo $userOne->role. "<br />";
echo $userThree->role . "<br />";
echo $userOne->message() . "<br />";
echo $userThree->message() . "<br />";
