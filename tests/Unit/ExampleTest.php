<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */

    public function test_cadastro_de_usuario()
    {

        $faker = \Faker\Factory::create();
    	$user = \App\User::create([
    		'name' => $faker->name,
    		'email' => $faker->email,
    		'password' => bcrypt('12345'),
    	]);


    	$this->assertDatabaseHas('users',['email' => $user->email]);
    }

}
