<?php 
require __DIR__ . "/../../app/Models/User.php";

class UserTest extends \PHPUnit_Framework_TestCase

{
   public function testThatWeCanGetTheFirstName(){
       $user = new \App\Models\User;

       $user->setFirstName('Billy');

       $this->assertEquals($user->getFirstName(), 'Billy');
   }

   public function testThatWeCanGetTheLastName(){
    $user = new \App\Models\User;

    $user->setLastName('Tang');

    $this->assertEquals($user->getLastName(), 'Tang');
}

public function testFullNameIsReturned(){
    $user = new \App\Models\User;
    $user->setFirstName('Billy');
    $user->setLastName('Tang');

    $this->assertEquals($user->getFullName(),'Billy Tang');
}

}