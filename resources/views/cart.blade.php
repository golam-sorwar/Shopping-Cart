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
    <div class="container mx-auto px-32">
        <div class="absolute p-4 right-0">
            @livewire('cart-counter')
        </div>

        <div class="pt-16 flex flex-wrap">
            @foreach ($products as $product)
                @livewire('cart-product', $product)
            @endforeach            
        </div>
        
    </div>
    @livewireAssets
</body>
</html>