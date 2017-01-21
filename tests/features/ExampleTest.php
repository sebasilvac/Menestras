<?php

class ExampleTest extends FeatureTestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    function test_basic_example(){

        $user = factory(\App\User::class)->create([
            'name' => "Sebastian Silva",
            'email' => "sebasilvac88@gmail.com",
        ]);

        $this->actingAs($user, 'api')
            ->visit('api/user')
            ->see("Sebastian Silva")
            ->see("sebasilvac88@gmail.com");

    }
}
