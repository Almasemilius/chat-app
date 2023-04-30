<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    protected $fillable = [
        'sender_id',
        'receiver_id',
        'last_time_message',
    ];
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(User::class,'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(User::class,'receiver_id');
    }

    public function recipient()
    {
        if($this->sender_id === auth()->id()){
            return $this->receiver();
        }else{
            return $this->sender();
        }
    }
}
