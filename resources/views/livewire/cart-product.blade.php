<div class="w-1/3 pl-3">
    <div class="border rounded-lg shadow overflow-hidden mb-4">
        <img class="w-full" src="https://picsum.photos/280/150?item={{ $id }}" alt="" loading="lazy">
        <div class="flex justify-between p-4 item-cennter">
            <div class="text-gray-700 mb-2 pt-2 pl-2 capitalize">{{ $name }} - <span class="font-bold text-md">${{ $price }}</span></div>
            @unless ($alreadyAdded)
                <button class="border border-green-400 hover:bg-green-500 px-4 py-2 rounded-full text-green-500 hover:text-white focus:outline-none " wire:click="add">+ Add</button>
            @else
                <button class="border border-red-400 hover:bg-red-500 px-4 py-2 rounded-full text-red-500 hover:text-white focus:outline-none " wire:click="remove">- Remove</button>
            @endunless
        </div>
    </div>
</div>
