<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto px-32">
        <div class="absolute p-4 right-0">
            <div class="bg-teal-300 font-bold rounded-full text-white text-2xl px-3 p-1">
                <svg class="inline-block text-white text-lg mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path class="heroicon-ui" d="M17 16a3 3 0 1 1-2.83 2H9.83a3 3 0 1 1-5.62-.1A3 3 0 0 1 5 12V4H3a1 1 0 1 1 0-2h3a1 1 0 0 1 1 1v1h14a1 1 0 0 1 .9 1.45l-4 8a1 1 0 0 1-.9.55H5a1 1 0 0 0 0 2h12zM7 12h9.38l3-6H7v6zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>
                6 
            </div>
        </div>

        <div class="pt-16 flex flex-wrap">
            @foreach ($products as $product)
                <div class="w-1/3 pl-3">
                    <div class="border rounded-lg shadow overflow-hidden mb-4">
                        <img class="w-full" src="https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_1280.jpg" alt="">
                        <div class="flex justify-between p-4 item-cennter">
                            <div class="text-gray-700 mb-2 pt-2 pl-2 capitalize">{{ $product->name }} <span class="font-bold text-md">{{ $product->price }}$</span></div>
                            <button type="submit" class="border border-green-400 hover:bg-green-500 px-4 py-2 rounded-full text-green-500 hover:text-white">+ Add</button>
                        </div>
                    </div>
                </div>
            @endforeach            
        </div>
        
    </div>
</body>
</html>