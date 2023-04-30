<div class="flex flex-col w-full">
    @forelse ($conversations as $conversation)
    <div class="flex gap-5 items-center p-5 border-r cursor-pointer">
        <div class="bg-gray-600 h-16 w-20 rounded-full overflow-hidden"></div>
        <div class=" w-full">
            <div class="flex  w-full  justify-between items-center">
                <div>
                    <h1>{{$conversation->recipient->name}}</h1>
                </div>
                <div>
                    <span>2d</span>
                </div>
            </div>
            <div class="flex w-full justify-between items-center">
                <div>
                    <h1>
                        Lorem ipsum dolor
                    </h1>
                </div>
                <div class="text-white bg-indigo-600 rounded-full px-2 py-1">
                    52
                </div>
            </div>
        </div>
    </div>
    @empty
        No Conversations !
    @endforelse
</div>