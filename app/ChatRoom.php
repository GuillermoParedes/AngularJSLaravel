<?php namespace App;


class ChatRoom extends Model {

	protected $table = 'chat_rooms';

	protected $fillable = array('name');

    public function messages(){

        return $this->hasMany('Message', 'chat_room_id');
    }

    // public function user(){
    //     return this->belongsTo('User', 'user_id');
    // }

}
