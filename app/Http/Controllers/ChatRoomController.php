<?php

class ChatRoomController {

    public function __construct(ChatRoom $chatRooms){
        $this->chatRooms = $chatRooms;
    }

    public function getAll(){
        return $this->chatRooms->all();
    }
}
