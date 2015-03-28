
<?php namespace App\Http\Controllers

class MessageController extends BaseController{


    public function __contruct(Message $messages){
        $this->messages = $messages;

    }

    public function getByChatRoom(){
        return $chatroom->messages;
    }

    public function createInChatroom(){
         $message = $this->messages->newInstance(Input::all());

         $message->chatRoom()->associate($chatRoom);
         $message->user()->associate($this->me());

         $message->save();

         return $message;
    }
    public function getUpdates($lastMessageId, Chatroom $chatRoom){
        return $this->messages->byChatRoom($chatRoom)->afterId($lastMessageId)->get();
    }
}
