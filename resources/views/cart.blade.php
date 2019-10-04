<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Shopping Cart</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="container mx-auto px-32" >
            <div class="absolute p-4 right-0">
                @livewire('cart-counter')
            </div>
            <div class=" p-4 flex justify-center">
                <div class="w-auto">
                    {{-- <form action="{{ url('/') }}" method="post">
                        @csrf --}}
                        <input wire:keydown.enter="search" class="bg-green-100 appearance-none border-2 border-purple-700 rounded-full w-full py-2 px-32 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" placeholder="Search ...." >
                    {{-- </form> --}}
                </div>
            </div>

            <div class="pt-12 flex flex-wrap">
                @foreach ($products as $product)
                    @livewire('cart-product', $product)
                @endforeach
            </div>

        </div>
    </div>

    @livewireAssets
    <script src="{{ asset('js/app.js') }}" ></script>
    <script>
        window.addEventListener('DOMContentLoaded',function() {
            Echo.channel('cart')
                .listen('ProductUpdatedInCart', (e) => {
                // console.log('Its work');
                window.livewire.emit('productUpdated');
                window.livewire.emit('productUpdated:'+e.productId);
            });
        })
    </script>
</body>
</html>
