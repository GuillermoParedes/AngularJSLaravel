<?php namespace App\Http\Controllers

class ChatRoomController {

    public function __construct(ChatRoom $chatRooms){
        $this->chatRooms = $chatRooms;
    }

    public function getAll(){
        return $this->chatRooms->all();
    }

    public function create(){
        return $this->chatRooms->create(Input::all());
    }
}
