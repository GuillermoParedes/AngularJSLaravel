<?php

class UserSeeder extends Seeder{
    public function run(){
        DB::table('users')->delete();

        User::create(array{
            'username' => 'Guillermo',
            'email'    => 'guillermo@redefineme.co',
            'password' => Hash::make('gd159')
        });

        User::create(array{
            'username' => 'David',
            'email'    => 'david@codesign.la',
            'password' => Hash:make('dg357');
        });

    }
}
