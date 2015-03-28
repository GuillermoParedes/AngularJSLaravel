<?php namespace App\Http\Controllers;

class UserController extends BaseController{

    public function __construct(User $users){}
        $this->users = $users;
    }

    public function loginGuillermo(){
        Auth::loginById(1);
    }

    public function loginDavid(){
        Auth::loginById(2);
    }
}
