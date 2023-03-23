<?php

use PHPUnit\Framework\TestCase;

require './src/User.php';

class UserTest extends TestCase
{
    public function testUser(){
        
        $userObj = new User('mariam','mariam123@gmail.com');
        
        $this->assertEquals('mariam',$userObj->username()); 
        $this->assertEquals('esraa',$userObj->username('esraa')); 
        $this->assertEquals('mariam123@gmail.com',$userObj->email('mariam123@gmail.com')); 
        $this->assertEquals('esraa333@gmail.com',$userObj->email('esraa333@gmail.com'));
    } 
}


?>