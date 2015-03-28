<?php namespace App\Http\Controllers;

class BaseController extends Controller {

    protected function me(){
        return Auth::user();
    }

    protected function setupLayout(){
        if(!is_null($this->layout)){
            $this->layout = View::make($this->layout);
        }
    }

}