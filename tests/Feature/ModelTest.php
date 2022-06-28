<?php

namespace Tests\Feature;

use Faker\Factory;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelTest extends TestCase
{
   public function testValidRegistration()
   {
       $faker = Factory::create();
       $email = $faker->unique()->email;
       $count = User::count();

       $response = $this->post('/register', [
           'email' =>$email,
           'name' => 'test',
           'password' => 'password',
           'password_confirmation'=> 'password'
       ]);

       $newCount = User::count();

       $this->assertNotEquals($count, $newCount);
   }

   public function testInvalidRegistration(){
       $response = $this->post('/register', [
           'email'=>'',
           'name' => 'test',
           'password' => 'password',
           'password_confirmation'=> 'password'
       ]);

       

       $response->assertSessionHasErrors();
   }
}
