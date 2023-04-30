<div class="w-full py-10">
    <div class="w-1/3 mx-auto flex flex-col gap-5 ">
        @forelse ($users as $user)
        <div wire:click="createConversation({{$user->id}})" class="user-row">
            <div class="h-16 w-16 rounded-full bg-black"></div>
            <h3>{{$user->name}}</h3>
        </div>
        @empty
            <div class="user-row">
                <h1>No users Found!</h1>
            </div>
        @endforelse 
            
    </div>
</div>