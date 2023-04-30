<?php

namespace App\Http\Livewire\Chat;

use App\Models\Conversation;
use Livewire\Component;

class ChatList extends Component
{
    public function render()
    {
        $conversations = Conversation::query();

        $conversations->where('sender_id', auth()->id())
            ->orWhere('receiver_id', auth()->id());
        $conversations = $conversations->paginate(10);
        return view('livewire.chat.chat-list',compact('conversations'));
    }
}
