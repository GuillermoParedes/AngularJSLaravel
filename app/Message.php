<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Message extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'messages';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = array('body');

	public function scopeAfterid($query, $lastId){
		return $query->where('id', '>', $lastId);
	}


	public function scopeByChatroom($query, $chatRoom){
		return $query->where('chat_room_id', $chatRoom->id);
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
    public function chatRoom(){
        return this->belongsTo('ChatRoom', 'chat_room_id');
    }

    public function user(){
        return this->belongsTo('User', 'user_id');
    }

}
