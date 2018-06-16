<?php

namespace App;

use App\Events\ChatEvent;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'Message_Id';

    protected $table = 'messages';

    protected $fillable = [
        'Message_Id', 'Chat_Id', 'Message_Text', 'Message_TimeSent', 'User_Id', 'Friend_Id'
    ];

    protected $dispatchesEvents = [
      'created' => ChatEvent::class
    ];

    public function chat(){
        return $this->belongsTo('App\Conversation', 'Chat_Id');
    }
}
