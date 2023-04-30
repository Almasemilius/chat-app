<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use App\Models\User;
use Livewire\Component;

class CreateChat extends Component
{
    public function createConversation($userId)
    {
        $conversation = Conversation::where('sender_id',$userId)
        ->where('receiver_id',auth()->id())
        ->orWhere('sender_id',auth()->id())
        ->where('receiver_id',$userId)->first();

        if(!$conversation){
            Conversation::create([
                'receiver_id' => $userId,
                'sender_id' => auth()->id()
            ]);
        }
    }
    public function render()
    {
        $users = User::query();
        $users->where('id','!=',auth()->id());
        $users = $users->paginate(10);
        return view('livewire.chat.create-chat',compact('users'));
    }
}
